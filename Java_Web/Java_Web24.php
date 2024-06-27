<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First App</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Java_Web.php'); ?>
    
<!-- Right -->
<div id ="rightz">

  <h1>Spring Boot</h1>

  <h2>Spring first Application</h2>

  <p>It's time to really dive in and take a look at adding some forms and processing those forms in our next application. In this application we are going to be using some check boxes and a form to create a food item and submit order details. This application is going to require 3 templates: one landing page, one food selection and one order form.

<span class ="nl">It will also require 4 classes: one for springboot initializer, one for storing ingredient items for food, one for validation for food form and one for storing order validation. Lastly, it will require 2 controllers, one for routing food requests and form processing, one for routing order requests and form processing.</span>

<span class = "nl">Let's start by looking at our pom.xml and a display of the directories of our application.</span></p>

<em>directory</em>
<pre class = "code">src
main
   ├─java
   │   └─com
   │       └─juan
   │           └─spring
   │               │   Application.java
   │               │   Ingredient.java
   │               │   Order.java
   │               │   Taco.java
   │               │
   │               └─web
   │                       DesignTacoController.java
   │                       OrderController.java
   │                       WebConfig.java
   │
   └─resources
       │   application.properties
       │
       ├─static
       │   │   styles.css
       │   │
       │   └─images
       └─templates
	       design.html
	       home.html
	       orderForm.html</pre>

  <p>Now let's a moment to look at our pom.xml to see what dependencies we will need for this application to have all the necessary jar files.</p>

<em>pom.xml</em>
<pre class = "code"><span class = "comments">&lt;!-- thymeleaf template engine --></span> 
&lt;dependency>
	&lt;groupId>org.springframework.boot&lt;/groupId>
	&lt;artifactId>spring-boot-starter-thymeleaf&lt;/artifactId>
&lt;/dependency>

&lt;dependency>
  &lt;groupId>org.springframework.boot&lt;/groupId>
  &lt;artifactId>spring-boot-starter-web&lt;/artifactId>
&lt;/dependency>

&lt;dependency>
  &lt;groupId>org.springframework.boot&lt;/groupId>
  &lt;artifactId>spring-boot-devtools&lt;/artifactId>
  &lt;scope>runtime&lt;/scope>
&lt;/dependency>

<span class = "comments">&lt;!-- auto generating getters and setters --></span> 
&lt;dependency>
	&lt;groupId>org.projectlombok&lt;/groupId>
	&lt;artifactId>lombok&lt;/artifactId>
	&lt;optional>true&lt;/optional>
&lt;/dependency>

&lt;dependency>
	&lt;groupId>org.springframework.boot&lt;/groupId>
	&lt;artifactId>spring-boot-starter-test&lt;/artifactId>
	&lt;scope>test&lt;/scope>
	&lt;exclusions>
		&lt;exclusion>
			&lt;groupId>org.junit.vintage&lt;/groupId>
			&lt;artifactId>junit-vintage-engine&lt;/artifactId>
		&lt;/exclusion>
	&lt;/exclusions>
&lt;/dependency>
&lt;/dependencies></pre>

<hr />

<h2>Taco and Ingredient classes</h2>

<p>The first two classes are important for understanding how we will be building and storing our ingredients data. First the taco class is important because its main job is to store the name of person who order the taco as well as the ingredients.

<span class = "nl">We must almost note that the ingredient class is also as import because it contains the values for each ingredient in our list.</span></p>

<em>Taco.java</em>
<pre class = "code">package com.juan.spring;

import java.util.List;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
<span class ="comments">// lombok generates getters and setters for each field</span>
import lombok.Data;

@Data
public class Taco {
    <span class = "comments">// validator's for form fields</span>
    @NotNull
    @Size(min=5, message="Name must be at least 5 characters long")
    private String name;
    @Size(min=1, message="You must choose at least 1 ingredient")
    private List&lt;String> ingredients;
}</pre>

<p>A few things to note in this first class. First it doesn't include getters and setters because a lib called lombok handles that for us, second the javax validation constraint annotations help us deal with validating the fields on the server side.

<span class = "nl">Now, let's look at the class for our ingredients.</span></p>

<em>Ingredients.java</em>
<pre class = "code">package com.juan.spring;

import lombok.Data;
import lombok.RequiredArgsConstructor;

@Data
<span class = "comments">// generates a constructor</span>
@RequiredArgsConstructor
public class Ingredient {

    private final String id;
    private final String name;
    private final Type type;

    public static enum Type {
	WRAP, PROTEIN, VEGGIES, CHEESE, SAUCE
    }
}</pre>

<p>One thing to note in the model view controller pattern, the view is generated by data sent by the controller, so let's take a look at the taco designer controller next.</p>

<hr />

<h2>Taco designer Controller &amp; template</h2>

<p>Here we will see an example of a controller which not only routes our application based on requests but also generates the necessary fields for our form.</p>

<em>DesignTacoController.java</em>
<pre class = "code">package com.juan.spring.web;

import java.util.Arrays;
import java.util.List;
import java.util.stream.Collectors;

import javax.validation.Valid;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.Errors;
<span class = "comments">// handles get or post requests</span>
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

<span class = "comments">// slf4j deals with logging</span>
import lombok.extern.slf4j.Slf4j;
import com.juan.spring.Ingredient;
import com.juan.spring.Ingredient.Type;
import com.juan.spring.Taco;

@Slf4j
@Controller
<span class = "comments">// when routed to /design</span>
@RequestMapping("/design")
public class DesignTacoController {

    @ModelAttribute
    public void addIngredientsToModel(Model model) {
	List<Ingredient> ingredients = Arrays.asList(
          new Ingredient("FLTO", "Flour Tortilla", Type.WRAP),
	  new Ingredient("COTO", "Corn Tortilla", Type.WRAP),
	  new Ingredient("GRBF", "Ground Beef", Type.PROTEIN),
	  new Ingredient("CARN", "Carnitas", Type.PROTEIN),
	  new Ingredient("TMTO", "Diced Tomatoes", Type.VEGGIES),
	  new Ingredient("LETC", "Lettuce", Type.VEGGIES),
	  new Ingredient("CHED", "Cheddar", Type.CHEESE),
	  new Ingredient("JACK", "Monterrey Jack", Type.CHEESE),
	  new Ingredient("SLSA", "Salsa", Type.SAUCE),
	  new Ingredient("SRCR", "Sour Cream", Type.SAUCE)
	);
	
	Type[] types = Ingredient.Type.values();
	for (Type type : types) {
	  <span class = "comments">// adds ingredients to the model</span>	
	  model.addAttribute(type.toString().toLowerCase(),
	      filterByType(ingredients, type));
	}
    }

    @GetMapping
    public String showDesignForm(Model model) {
	model.addAttribute("design", new Taco());
	return "design";
    }

    @PostMapping
    public String processDesign(@Valid @ModelAttribute("design") Taco design, Errors errors, Model model) {
	if(errors.hasErrors()) {
	    return "design";
	}

	log.info("Processing design: " + design);

	return "redirect:/orders/current";
    }

    private List<Ingredient> filterByType( List<Ingredient> ingredients, Type type) {
	return ingredients
	          .stream()
                  .filter(x -> x.getType().equals(type))
                  .collect(Collectors.toList());

    }

}</pre>

<p>Finally, let's take a look at our template.</p>

<pre class = "code">&lt;!DOCTYPE html>
&lt;html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:th="http://www.thymeleaf.org">
  &lt;head>
    &lt;title>Taco Cloud&lt;/title>
    &lt;link rel="stylesheet" th:href="@{/styles.css}" />
  &lt;/head>

  &lt;body>
    &lt;h1>Design your taco!&lt;/h1>
    &lt;img th:src="@{/images/TacoCloud.png}"/>

    &lt;form method="POST" th:object="${design}">

    &lt;span class="validationError"
          th:if="${#fields.hasErrors('ingredients')}"
          th:errors="*{ingredients}">Ingredient Error&lt;/span>

    &lt;div class="grid">
      &lt;div class="ingredient-group" id="wraps">

      &lt;h3>Designate your wrap:&lt;/h3>
      &lt;div th:each="ingredient : ${wrap}">
        &lt;input name="ingredients" type="checkbox" th:value="${ingredient.id}" />
        &lt;span th:text="${ingredient.name}">INGREDIENT&lt;/span>&lt;br/>
      &lt;/div>
      &lt;/div>

      &lt;div class="ingredient-group" id="proteins">
      &lt;h3>Pick your protein:&lt;/h3>
      &lt;div th:each="ingredient : ${protein}">
        &lt;input name="ingredients" type="checkbox" th:value="${ingredient.id}" />
        &lt;span th:text="${ingredient.name}">INGREDIENT&lt;/span>&lt;br/>
      &lt;/div>
      &lt;/div>

      &lt;div class="ingredient-group" id="cheeses">
      &lt;h3>Choose your cheese:&lt;/h3>
      &lt;div th:each="ingredient : ${cheese}">
        &lt;input name="ingredients" type="checkbox" th:value="${ingredient.id}" />
        &lt;span th:text="${ingredient.name}">INGREDIENT&lt;/span>&lt;br/>
      &lt;/div>
      &lt;/div>

      &lt;div class="ingredient-group" id="veggies">
      &lt;h3>Determine your veggies:&lt;/h3>
      &lt;div th:each="ingredient : ${veggies}">
        &lt;input name="ingredients" type="checkbox" th:value="${ingredient.id}" />
        &lt;span th:text="${ingredient.name}">INGREDIENT&lt;/span>&lt;br/>
      &lt;/div>
      &lt;/div>

      &lt;div class="ingredient-group" id="sauces">
      &lt;h3>Select your sauce:&lt;/h3>
      &lt;div th:each="ingredient : ${sauce}">
        &lt;input name="ingredients" type="checkbox" th:value="${ingredient.id}" />
        &lt;span th:text="${ingredient.name}">INGREDIENT&lt;/span>&lt;br/>
      &lt;/div>
      &lt;/div>
      &lt;/div>

      &lt;div>


      &lt;h3>Name your taco creation:&lt;/h3>
      &lt;input type="text" th:field="*{name}"/>

      &lt;span th:text="${#fields.hasErrors('name')}">XXX&lt;/span>
      &lt;span class="validationError"
            th:if="${#fields.hasErrors('name')}"
            th:errors="*{name}">Name Error&lt;/span>
      &lt;br/>

      &lt;button>Submit your taco&lt;/button>
      &lt;/div>
    &lt;/form>
  &lt;/body>
&lt;/html>
</pre>




<hr />
<br />
<a href="Java_Web23.html">Previous Page</a>
<span class = "next"><a href = "Java_Web25.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
