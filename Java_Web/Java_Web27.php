<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring JPA Repository</title>
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

  <h2>Spring JPA Repository</h2>

  <p>Let's finally look at what the repositories look like as well as the what the startup code looks like for working with the jpa.</p>

  <hr />

  <h2>Ingredient Repo</h2>

  <p>You might be surprised to see that not much is going on in the way of the repo for any of these repositories, this is because much of the code necessary was generated via the annotations we created in our classes. Either way let's look at the Ingredient repository.</p>

  <em>IngredientRepository.java</em>
  <pre class = "code">package com.juan.spring.data;

import org.springframework.data.repository.CrudRepository;

import com.juan.spring.Ingredient;

public interface IngredientRepository 
         extends CrudRepository&lt;Ingredient, String> {

}</pre>

  <p>The other repos look similar to this as well, only their for the crudRepository is reflective of the Id, so it would be 'CrudRepository&lt;Order, Long>'.</p>

  <hr />

  <h2>DesignController.java</h2>

  <p>Let's take a note of some of the key factors which are necessary for this model to work. First we need to add the ingredient and taco repositories.  By passing those arguments into our constructor we can utilize them in this class. Also, let's take note of the SessionAttribute 'order', creating this session attribute will ensure that our order form which follows this form will be linked to our design form.

  <span class = "nl">The model attributes allow us to pass values from our class to our template. Notice how when we move to our processDesign function we invoke the tacoRepo in order to save these values to our table. We only save these inputs after our taco class had validaed them. Next we add the design to our order class.</span></p>

  <em>DesignController.java</em>
  <pre class = "code">package com.juan.spring.web;

import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.Errors;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.SessionAttributes;

import com.juan.spring.Ingredient;
import com.juan.spring.Ingredient.Type;
import com.juan.spring.Order;
import com.juan.spring.Taco;
import com.juan.spring.data.IngredientRepository;
import com.juan.spring.data.TacoRepository;

@Controller
@RequestMapping("/design")
@SessionAttributes("order")
public class DesignTacoController {

    private final IngredientRepository ingredientRepo;
    private TacoRepository tacoRepo;

    @Autowired
    public DesignTacoController(
				IngredientRepository ingredientRepo,
				TacoRepository tacoRepo) {
	this.ingredientRepo = ingredientRepo;
	this.tacoRepo = tacoRepo;
    }

    @ModelAttribute(name = "order")
    public Order order() {
	return new Order();
    }

    @ModelAttribute(name = "design")
    public Taco design() {
	return new Taco();
    }

    @GetMapping
    public String showDesignForm(Model model) {
	List<Ingredient> ingredients = new ArrayList<>();
	ingredientRepo.findAll().forEach(i -> ingredients.add(i));
    
	Type[] types = Ingredient.Type.values();
	for (Type type : types) {
	  model.addAttribute(type.toString().toLowerCase(),
	      filterByType(ingredients, type));
	}

	return "design";
    }

    @PostMapping
    public String processDesign(
				@Valid Taco taco, Errors errors,
				@ModelAttribute Order order) {

	if(errors.hasErrors()) {
	    return "design";
	}

	Taco saved = tacoRepo.save(taco);
	order.addDesign(saved);

	return "redirect:/orders/current";
    }

    private List<Ingredient> filterByType( List<Ingredient> ingredients, Type type) {
	return ingredients
	          .stream()
                  .filter(x -> x.getType().equals(type))
                  .collect(Collectors.toList());

    }

}</pre>
  
  <hr />
  
  <h2>OrderController.java</h2>

  <p>In our previous controller, we added the taco and ingredient repositories in order to save these values to our database. In this controller we just need to add the order repository to our controller to add those form inputs to our taco_order table. Once again using the processOrder function we call the orderRepo save function to pass our validated inputs to our table.  At this point we can end the session by calling sessionStatus.setComplete(). </p>

    <em>OrderController.java</em>
    <pre class = "code">package com.juan.spring.web;

import javax.validation.Valid;

import org.springframework.stereotype.Controller;
import org.springframework.validation.Errors;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.SessionAttributes;
import org.springframework.web.bind.support.SessionStatus;

import com.juan.spring.Order;
import com.juan.spring.data.OrderRepository;

@Controller
@RequestMapping("/orders")
@SessionAttributes("order")
public class OrderController {
  
  private OrderRepository orderRepo;

  public OrderController(OrderRepository orderRepo) {
    this.orderRepo = orderRepo;
  }
  
  @GetMapping("/current")
  public String orderForm() {
    return "orderForm";
  }

  @PostMapping
  public String processOrder(@Valid Order order, Errors errors, SessionStatus sessionStatus) {
    if (errors.hasErrors()) {
      return "orderForm";
    }
    
    orderRepo.save(order);
    sessionStatus.setComplete();
    
    return "redirect:/";
  }

}</pre>

    <hr />

    <h2>TacoCloudApplication startup</h2>

    <p>This class is necessary for inserting some values into our database. We could have just used our sql files thou.</p>

    
  <em>TacoCloudApplication.java</em>
  <pre class = "code">package com.juan.spring;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

import com.juan.spring.Ingredient.Type;
import com.juan.spring.data.IngredientRepository;

@SpringBootApplication
public class TacoCloudApplication {

  public static void main(String[] args) {
    SpringApplication.run(TacoCloudApplication.class, args);
  }

  @Bean
  public CommandLineRunner dataLoader(IngredientRepository repo) {
    return new CommandLineRunner() {
      @Override
      public void run(String... args) throws Exception {
        repo.save(new Ingredient("FLTO", "Flour Tortilla", Type.WRAP));
        repo.save(new Ingredient("COTO", "Corn Tortilla", Type.WRAP));
        repo.save(new Ingredient("GRBF", "Ground Beef", Type.PROTEIN));
        repo.save(new Ingredient("CARN", "Carnitas", Type.PROTEIN));
        repo.save(new Ingredient("TMTO", "Diced Tomatoes", Type.VEGGIES));
        repo.save(new Ingredient("LETC", "Lettuce", Type.VEGGIES));
        repo.save(new Ingredient("CHED", "Cheddar", Type.CHEESE));
        repo.save(new Ingredient("JACK", "Monterrey Jack", Type.CHEESE));
        repo.save(new Ingredient("SLSA", "Salsa", Type.SAUCE));
        repo.save(new Ingredient("SRCR", "Sour Cream", Type.SAUCE));
      }
    };
  }
  
}</pre>

  <p>We will start to go over spring security in our next section.</p>

 
  

  
    <hr />
<br />
<a href="Java_Web26.php">Previous Page</a>
<span class = "next"><a href = "Java_Web28.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
