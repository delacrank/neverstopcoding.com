<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring Security part 3</title>
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

<h1>Spring Security part 3</h1>

<h2>Spring security part 3</h2>

<p>In this section we will be configuring the order slash users table in order to ensure that each user has an order which pertains to them. So for this we need to be able to look at our orders class and make sure that we use the entity annotation in order to bind our user's table to our orders table.

  <span class = "nl">Let's take a look at our orders class now.</span></p>

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
import javax.persistence.ManyToOne;
import javax.persistence.PrePersist;
import javax.persistence.Table;
import javax.validation.constraints.Digits;
import javax.validation.constraints.Pattern;

import org.hibernate.validator.constraints.CreditCardNumber;
import org.hibernate.validator.constraints.NotBlank;

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

  @ManyToOne
  private User user;
    
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
  private List&lt;Taco> tacos = new ArrayList&lt;>();
  
  public void addDesign(Taco design) {
    this.tacos.add(design);
  }
  
  @PrePersist
  void placedAt() {
    this.placedAt = new Date();
  }
  
}</pre>

<p>First let's take a look at some of the fields for our order class. Similar to the user's class we need to be able to create unique id which auto increments it's value, but in addition to this we are appending the user to this order class. Of of the way's we do this is by using the annotation 'ManyToOne', this means the type of connection created in our database will be one many orders per 1 user.  This is import because we want to reduce redunancy in our order's table, that field will create a user_id in our taco_order table.</span>

<span class = "nl">If we need to further examine the table then it would be wise to use the query below to understand what sort of keys/indexes were created in addition to the data type for each column.</p>

<em>Query</em>
<pre class = "code">show columns from taco_order;</pre>

<hr />

<h2>OrderController.java</h2>

<p>The next problem we need to solve in determining which user has access to which order pages. This is very import especially if we decided to create a feature where users could edit an existing order for example. One of the ways we can accomplish this is by using something called a 'principal' object.

  <span class = "nl">We can futher protect the integrity of our database by checking to ensure that the proper user is linked to the correct order row before saving any data to that table.</span></p>

<em>OrderController.java</em>
<pre class = "code">package com.juan.spring.web;

import javax.validation.Valid;

import org.springframework.security.core.annotation.AuthenticationPrincipal;
import org.springframework.stereotype.Controller;
import org.springframework.validation.Errors;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.SessionAttributes;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.support.SessionStatus;

import com.juan.spring.Order;
import com.juan.spring.User;
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
  public String orderForm(@AuthenticationPrincipal User user,
			  @ModelAttribute Order order) {
      if(order.getDeliveryName() == null) {
	  order.setDeliveryName(user.getFullname());
      }
      if(order.getDeliveryStreet() == null) {
	  order.setDeliveryStreet(user.getStreet());
      }
      if(order.getDeliveryCity() == null) {
	  order.setDeliveryCity(user.getCity());
      }
      if(order.getDeliveryState() == null) {
	  order.setDeliveryState(user.getState());
      }
      if(order.getDeliveryZip() == null) {
	  order.setDeliveryZip(user.getZip());
      }	  
      
      return "orderForm";
  }

  @PostMapping
  public String processOrder(@Valid Order order, Errors errors, SessionStatus sessionStatus,
			     @AuthenticationPrincipal User user) {
    if (errors.hasErrors()) {
      return "orderForm";
    }

    order.setUser(user);
        
    orderRepo.save(order);
    sessionStatus.setComplete();
    
    return "redirect:/";
  }

}</pre>

<p>We know that previously we used the order session to ensure that once someone created a taco they would need to use that existing session to fill out an order. In this situation we want to ensure that when we create an order, the user is first found in the database and they are validated before an order can be generated.

  <span class = "nl">If we look at how the orderForm method validates some of the fields let's first look two of the parameters being passed. We have a 'User user' parameter which has the AuthenticationPrincipal annotation and an 'Order order' parameter which has the ModelAttribute annotation.</span>

  <span class = "nl">Let's start by first understanding the purpose of this method. The purpose is to ensure that if a field is null, we can automatically generate the value based on the values from our user's table. In the next method when we go on to validating the fields and submitting them to be inserted into the orders table we take 4 parameters: 'Order order', 'Errors errors', 'SessionStatus sessionStatus', and 'User user'.</span>

    <span class = "nl">We have already established that the order parameter is necessary for validating the order fields, the error parameter checks to see if any errors occured in those fields, sessionStatus is set to complete on completion of the field and the final user parameter is used to set the correct user_id in order order table.</span></p>

<hr />
<br />
<a href="Java_Web29.html">Previous Page</a>
<span class = "next"><a href = "Java_Web31.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
