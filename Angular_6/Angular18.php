<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Checkout Cont.</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css"> 
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Angular_6.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

  <h1>Checkout Cont.</h1>

  <h2>Checkout continued</h2>

  <p>In this next section we are going to continue to expand our checkout application. This means we are going to need to add some forms in which our users can start to submit their own personal data relavent to the product they purchase. Their peronsal information can be stored in our order model.

    <span class = "nl">For now, let's start with the checkout.component.ts which we will create in our store directory.</s[an></p>

<em>checkout.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";
import { NgForm } from "@angular/forms";
import { OrderRepository } from "../model/order.repository";
import { Order } from "../model/order.model";

@Component({
	templateUrl: "checkout.component.html",
	styleUrls: ["checkout.component.css"]
})
export class ChecoutComponent {
       orderSent: boolean = false;
       submitted: boolean = false;

       constructor(public repository: OrderRepository,
       		   public order: Order) {}

       submitOrder(form: NgForm) {
           this.submitted = true;
	   if(form.valid) {
	       this.repository.saveOrder(this.order).subscribe(order => {
	           this.order.clear();
		   this.orderSent = true;
		   this.submitted = false;
	       });
	   }
        }
}</pre>

<p>Let's take a look at the checkout.component.html file.</p>

<em>checkout.component.html</em>
<pre class = "code">&lt;div class="container-fluid">
  &lt;div class="row">
    &lt;div class="col bg-dark text-white">
      &lt;a class="navbar-brand">SPORTS STORE&lt;/a>
    &lt;/div>
  &lt;/div>
&lt;/div>
&lt;div *ngIf="orderSent" class="m-2 text-center">
  &lt;h2>Thanks!&lt;/h2>
  &lt;p>Thanks for placing your order.&lt;/p>
  &lt;p>We'll ship your goods as soon as possible.&lt;/p>
  &lt;button class="btn btn-primary" routerLink="/store">Return to Store&lt;/button>
&lt;/div>
&lt;form *ngIf="!orderSent" #form="ngForm" novalidate
      (ngSubmit)="submitOrder(form)" class="m-2">
  &lt;div class="form-group">
    &lt;label>Name&lt;/label>
    &lt;input class="form-control" #name="ngModel" name="name"
	   [(ngModel)]="order.name" required />
    &lt;span *ngIf="submitted && name.invalid" class="text-danger">
      Please enter your name
    &lt;/span>
  &lt;/div>
  &lt;div class="form-group">
    &lt;label>Address&lt;/label>
    &lt;input class="form-control" #address="ngModel" name="address"
	   [(ngModel)]="order.address" required />
    &lt;span *ngIf="submitted && address.invalid" class="text-danger">
      Please enter your address
    &lt;/span>
  &lt;/div>
  &lt;div class="form-group">
    &lt;label>City&lt;/label>
    &lt;input class="form-control" #city="ngModel" name="city"
	   [(ngModel)]="order.city" required />
    &lt;span *ngIf="submitted && city.invalid" class="text-danger">
      Please enter your city
    &lt;/span>
  &lt;/div>
  &lt;div class="form-group">
    &lt;label>State&lt;/label>
    &lt;input class="form-control" #state="ngModel" name="state"
	   [(ngModel)]="order.state" required />
    &lt;span *ngIf="submitted && state.invalid" class="text-danger">
      Please enter your state
    &lt;/span>
  &lt;/div>
  &lt;div class="form-group">
    &lt;label>Zip/Postal Code&lt;/label>
    &lt;input class="form-control" #zip="ngModel" name="zip"
	   [(ngModel)]="order.zip" required />
    &lt;span *ngIf="submitted && zip.invalid" class="text-danger">
      Please enter your zip/postal code
    &lt;/span>
  &lt;/div>
  &lt;div class="form-group">
    &lt;label>Country&lt;/label>
    &lt;input class="form-control" #country="ngModel" name="country"
	   [(ngModel)]="order.country" required />
    &lt;span *ngIf="submitted && country.invalid" class="text-danger">
      Please enter your country
    &lt;/span>
  &lt;/div>
  &lt;div class="text-center">
    &lt;button class="btn btn-secondary m-1" routerLink="/cart">Back&lt;/button>
    &lt;button class="btn btn-primary m-1" type="submit">Complete Order&lt;/button>
  &lt;/div>
&lt;/form></pre>

<p>The first div uses an 'ngIf' to see if orderSent value is false. If its true it will display the instructions below.

<span class = "nl">If the order hasn't been sent we can use another 'ngIf' to confirm that the value is false in order to display our form. Once a form is completed we can set the orderSent value to true in order to display our success screen. This is the first time we are seeing a form tag with embedded angular values. We have already familiarized ourselves with click events, this time we are using a 'ngSubmit' event to determine whether or not to process the form.</span>

<span class = "nl">If the order is submitted then we can call the 'submitOrder()' function and pass the values from the order object to it. We previously defined the submitOrder function in our checkout.component.ts file. It calls our save function in our order repository in order to save the field values in our order.</span>

<span class = "nl">Let's take a moment to look and see how we can validate some of our form fields. One way to link all of our form inputs to the single form is by using the '#name' attribute and assigning value 'ngModel' to it.  </span><p>
  
<hr />
<a href="Angular17.php">Previous Page</a>
<span class="next"><a href="Angular19.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
