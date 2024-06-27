<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring JPA</title>
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

  <h1>Spring Data</h1>

  <h2>Spring JPA</h2>

  <p>Previously, we used the jdbc to insert and modify tables in our h2 embedded database. In this section we are going to recreate our current application, only this time we are going to use the jpa (java persistent API) in order to interact with our database.

  <span class = "nl">Let's start by looking at our pom.xml file.</p>

  <em>pom.xml</em>
  <pre class = "code">&lt;dependency>
      &lt;groupId>org.springframework.boot&lt;/groupId>
      &lt;artifactId>spring-boot-starter-data-jpa&lt;/artifactId>
    &lt;/dependency>

    &lt;dependency>
      &lt;groupId>com.h2database&lt;/groupId>
      &lt;artifactId>h2&lt;/artifactId>
      &lt;scope>runtime&lt;/scope>
    &lt;/dependency></pre>

  <p>The next thing we need to do is add certain annotations to our existing classes, this will include our Ingredient, Taco and Order classes.</p>

  <hr />

  <h2>Ingredient Class</h2>

  <p>One thing to note about using the JPA is that we need to include some annotations so that our classes are recognized. The first is the Entity annotation and another is the Id annotation (for the id of the table).

    <span class = "nl">Adding the no argument constructor is also required, using lombok lib to do this just simples our code.</span></p>
  
  <pre class = "code">package com.juan.spring;

import javax.persistence.Entity;
import javax.persistence.Id;

import lombok.AccessLevel;
import lombok.Data;
import lombok.NoArgsConstructor;
import lombok.RequiredArgsConstructor;

@Data
@RequiredArgsConstructor
@NoArgsConstructor(access=AccessLevel.PRIVATE, force=true)
@Entity		   
public class Ingredient {

    @Id
    private final String id;
    private final String name;
    private final Type type;

    public static enum Type {
	WRAP, PROTEIN, VEGGIES, CHEESE, SAUCE
    }
}</pre>

  <hr />

  <h2>Taco class</h2>

  <p>Some of the new annotations used here are the ManyToMany annotation which defines the sort of relationship taco has with ingredient. Additionally, the GeneratedValue annotation makes it so that each new taco created as an auto incremented id value inserted as well.

  <span class = "nl">The PrePersist annotation makes it so the date will be generated before the value is inserted into the database.</span></p>

  <em>Taco.java</em>
  <pre class = "code">package com.juan.spring;

import java.util.List;
import java.util.ArrayList;
import java.util.Data;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import javax.persistence.PrePersist;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import lombok.Data;

@Data
@Entity
public class Taco {

    @Id
    @GeneratedValue(strategy=GenerationType.AUTO)
    private Long id;

    @NotNull
    @Size(min=5, message="Name must be at least 5 characters long")
    private String name;

    private Date createdAt;

    @ManyToMany(targetEntity=Ingredient.class)    
    @Size(min=1, message="You must choose at least 1 ingredient")
    private List<Ingredient> ingredients = new ArrayList<>();

    @PrePersist
    void createdAt() {
	this.createdAt = new Date();
    }
}</pre>

  <h2 />

  <h2>Order class</h2>

  <p>The only real change here is the addition of the @table annotation which specifies which table our class will use.  This last class will wrap it up for our regular classes, in the next section we will focus on creating the repositories for each class.</p>

  <em>Order.java</em>
  <pre class = "code">package com.juan.spring;
    
import java.io.Serializable;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import javax.persistence.PrePersist;
import javax.persistence.Table;
import javax.validation.constraints.Digits;
import javax.validation.constraints.NotBlank;
import javax.validation.constraints.Pattern;

import org.hibernate.validator.constraints.CreditCardNumber;

import lombok.Data;

@Data
@Entity
@Table(name="Taco_Order")
public class Order implements Serializable {

  private static final long serialVersionUID = 1L;
  
  @Id
  @GeneratedValue(strategy=GenerationType.AUTO)
  private Long id;
  
  private Date placedAt;
  
  @NotBlank(message="Delivery name is required")
  private String deliveryName;
  
  @NotBlank(message="Street is required")
  private String deliveryStreet;
  
  @NotBlank(message="City is required")
  private String deliveryCity;
  
  @NotBlank(message="State is required")
  private String deliveryState;
  
  @NotBlank(message="Zip code is required")
  private String deliveryZip;

  @CreditCardNumber(message="Not a valid credit card number")
  private String ccNumber;
  
  @Pattern(regexp="^(0[1-9]|1[0-2])([\\/])([1-9][0-9])$",
           message="Must be formatted MM/YY")
  private String ccExpiration;

  @Digits(integer=3, fraction=0, message="Invalid CVV")
  private String ccCVV;

  @ManyToMany(targetEntity=Taco.class)
  private List<Taco> tacos = new ArrayList<>();
  
  public void addDesign(Taco design) {
    this.tacos.add(design);
  }
  
  @PrePersist
  void placedAt() {
    this.placedAt = new Date();
  }
  
}</pre>

  
  <hr />
<br />
<a href="Java_Web25.php">Previous Page</a>
<span class = "next"><a href = "Java_Web27.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
