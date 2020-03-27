<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Cart Detail</title>
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

  <h1>Cart Detail</h1>

  <h2>Cart detail Completed</h2>

  <p>In this section we are going to complete the cart detail aspect of our application. This will mean managing the inventory in terms of increasing quantity of certain items and having the option to delete items from our cart.

    <span class = "nl">Let's finally provide our cart component typescript file with a template in which to do these things.</span></p>

  <em>cartDetail.component.ts</em>
  <pre class = "code">import { Component } from "@angular/core";
import { Cart } from "../model/cart.model";

@Component({
    templateUrl: "cartDetail.component.html";
})
export class CartDetailComponent {
    constructor(public cart: Cart) {}
}</pre>

  <p>Here we provided a template url and injected our cart object into the cart detail component. Now, let's create the cartDetail html template.</p>

<hr />

<h2>Cart Detail Template</h2>

<p>Below is some code to display the values in our shopping cart as well as some buttons for further shopping or to go to the checkout page.</p>

  <em>cartDetail.component.html</em>
<pre class = "code">&lt;div class="container-fluid">
    &lt;div class="row">
      &lt;div class="col bg-dark text-white">
        &lt;a class="navbar-brand">SPORTS STORE&lt;/a>
      &lt;/div>
    &lt;/div>
    &lt;div class="row">
      &lt;div class="col mt-2">
        &lt;h2 class="text-center">Your Cart&lt;/h2>
        &lt;table class="table table-bordered table-striped p-2">
          &lt;thead>
            &lt;tr>
              &lt;th>Quantity&lt;/th>
              &lt;th>Product&lt;/th>
              &lt;th class="text-right">Price&lt;/th>
              &lt;th class="text-right">Subtotal&lt;/th>
            &lt;/tr>
          &lt;/thead>
          &lt;tbody>
            &lt;tr *ngIf="cart.lines.length == 0">
              &lt;td colspan="4" class="text-center">
                Your cart is empty
              &lt;/td>
            &lt;/tr>
            &lt;tr *ngFor="let line of cart.lines">
              &lt;td>
                &lt;input type="number" class="form-control-sm"
                       style="width:5em"
                       [value]="line.quantity"
                       (change)="cart.updateQuantity(line.product,
                                  $event.target.value)" />
              &lt;/td>
              &lt;td>{{line.product.name}}&lt;/td>
              &lt;td class="text-right">
                {{line.product.price | currency:"USD":true:"2.2-2"}}
              &lt;/td>
              &lt;td class="text-right">
                {{(line.lineTotal) | currency:"USD":true:"2.2-2" }}
              &lt;/td>
              &lt;td class="text-center">
                &lt;button class="btn btn-sm btn-danger"
                        (click)="cart.removeLine(line.product.id)">
                  Remove
                &lt;/button>
              &lt;/td>
            &lt;/tr>
          &lt;/tbody>
          &lt;tfoot>
            &lt;tr>
              &lt;td colspan="3" class="text-right">Total:&lt;/td>
              &lt;td class="text-right">
                {{cart.cartPrice | currency:"USD":"symbol":"2.2-2"}}
              &lt;/td>
            &lt;/tr>
          &lt;/tfoot>
        &lt;/table>
      &lt;/div>
    &lt;/div>
    &lt;div class="row">
      &lt;div class="col">
      &lt;div class="text-center">
        &lt;button class="btn btn-primary m-1" routerLink="/store">
            Continue Shopping
        &lt;/button>
        &lt;button class="btn btn-secondary m-1" routerLink="/checkout"
                [disabled]="cart.lines.length == 0">
          Checkout
        &lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div></pre>

<p>To understand the code its basically a table with 5 columns, the first column identifies the number of items for a specific product. These values are being pulled from the cart object. To find the quantity of any item the line.quantity value is displayed, we also have the option of increment or decrementing the value using the 'cart.updateQuantity()' function. This is coupled with bootstrap's input number form control and angular's $event.target.value to provide a smooth experience for the user.

<span class = "nl">The next value displayed is the name of the product, followed by the price, we have already used something similar in the shopping aspect of our store application. Next we display the total value of the price for the quantity of products in the cart multiplied by the price.</span>

<span class = "nl">Finally, the last column refers to a removal button, it calls the 'cart.removeLine()' function. As a prerequisite of calling this function we need to make sure that the correct product.id is being passed in. The last row refers to the total price for all the products combined in the cart.</span>

<span class = "nl">There are two buttons underneath our cart detail table, one button takes us back to the '/store' route, the next button takes us to the '/checkout' route. We will create the component for that next.</span></p>

  <hr />
<a href="Angular15.html">Previous Page</a>
<span class="next"><a href="Angular17.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
