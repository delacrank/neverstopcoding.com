<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Updating api</title>
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

<h1>Updating api</h1>

<h2>Patch Put methods</h2>

<p>So far we have seen some aspects of using the get and post methods to ping pong data between our two urls localhost:8080 and localhost:4200. The next step is going to be understand http put and patch methods for updating the fields in our database.  First we need to describe what these methods do.

  <span class = "nl">First the put method is the opposite of get, in that it sends data from the client to the server. If we wanted to change the address of an order we can pass the order id as a parameter for our put route, in our method and pass the updated order object to be sent into our repo.</span></p>

<em>put method</em>
<pre class = "code">@PutMapping("/{orderId}")
public Order putOrder(@RequestBody Order order) {
    return repo.save(order);
}</pre>

<p>The problem with this is the rest of the fields in our order would be overwritten with null values if not assigned. This is the nature of the put request, in order to solve this problem we require the use of a patch request. Here, we can update an individual field without overwritting our other fields. Let's look at an example of this in our OrderApiController.</p>

<em>OrderApiController.java</em>
<pre class = "code">package tacos.web.api;

import org.springframework.dao.EmptyResultDataAccessException;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PatchMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestController;

import tacos.Order;
import tacos.data.OrderRepository;

@RestController
@RequestMapping(path="/orders",
                produces="application/json")
@CrossOrigin(origins="*")
public class OrderApiController {

  private OrderRepository repo;

  public OrderApiController(OrderRepository repo) {
    this.repo = repo;
  }
  
  @GetMapping(produces="application/json")
  public Iterable&lt;Order> allOrders() {
    return repo.findAll();
  }
  
  @PostMapping(consumes="application/json")
  @ResponseStatus(HttpStatus.CREATED)
  public Order postOrder(@RequestBody Order order) {
    return repo.save(order);
  }

  @PutMapping(path="/{orderId}", consumes="application/json")
  public Order putOrder(@RequestBody Order order) {
    return repo.save(order);
  }

  @PatchMapping(path="/{orderId}", consumes="application/json")
  public Order patchOrder(@PathVariable("orderId") Long orderId,
                          @RequestBody Order patch) {
    
    Order order = repo.findById(orderId).get();
    if (patch.getDeliveryName() != null) {
      order.setDeliveryName(patch.getDeliveryName());
    }
    if (patch.getDeliveryStreet() != null) {
      order.setDeliveryStreet(patch.getDeliveryStreet());
    }
    if (patch.getDeliveryCity() != null) {
      order.setDeliveryCity(patch.getDeliveryCity());
    }
    if (patch.getDeliveryState() != null) {
      order.setDeliveryState(patch.getDeliveryState());
    }
    if (patch.getDeliveryZip() != null) {
      order.setDeliveryZip(patch.getDeliveryState());
    }
    if (patch.getCcNumber() != null) {
      order.setCcNumber(patch.getCcNumber());
    }
    if (patch.getCcExpiration() != null) {
      order.setCcExpiration(patch.getCcExpiration());
    }
    if (patch.getCcCVV() != null) {
      order.setCcCVV(patch.getCcCVV());
    }
    return repo.save(order);
  }
  
  @DeleteMapping("/{orderId}")
  @ResponseStatus(HttpStatus.NO_CONTENT)
  public void deleteOrder(@PathVariable("orderId") Long orderId) {
    try {
      repo.deleteById(orderId);
    } catch (EmptyResultDataAccessException e) {}
  }
}</pre>

<p>Much of the code is similar to what we encountered before with the exception of the put, patch and delete method handlers. Let's focus on the patch method for now thou. When we use the 'RequestBody Order patch' parameter this means we want to create a header of type order which submits a patch request in the body of our header. This is then sent to our angular application which can read the json and update the field in its own model.

<span class = "nl">While we are looking at this file I should probably cover the delete mapping handler as well as what the annotation 'ResponseStatus' does. Response status gives us a way of detecting the status of the reponse being sent from the server, this gives us control for how we should be interacting with our database and how to deal with the client. We see in the post method the status checks to see if the HttpStatus is set to 'created'. This means it returned with a 201 reponse meaning it was sucessful, and we should proceed with the method in question.</span>

<span class = "nl">Our deleteOrder handler has a reponseStatus of No_Content, this is a status of 204 and it means the reponse was sucessful but isn't going to be sending back data to the client. The purpose for putting the execution of our method in a try catch is to deal with deleting an order id which doesn't exist. Rather than crashing the program, we could just do nothing instead. The try block just calls the deleteById method from the repo.</span></p>

<hr />
<br />
<a href="Java_Web32.html">Previous Page</a>
<span class = "next"><a href = "Java_Web34.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
