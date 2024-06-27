<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Store Component</title>
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

<h1>Store Component</h1>

<h2>Store Component</h2>

<p>In this section we are going to be working on our store component. This directory will be composed of several files. For one we will need our component typescript file which will deal with managing the selector as well as the templateUrl for our html file. The next file which we will need is the html file for actually displaying data from our classes.

  <span class = "nl">The last file which we will need is our module file for handing the wiring in terms of importing classes and explaining where the classes are located. Let's start by adding the store folder to our app directory and adding the store.component.ts file.</span></p>

<em>store.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";
import { Product } from "../model/product.model";
import { ProductRepository } from "../model/product.repository";

@Component({
	selector: "store",
	templateUrl: "store.component.html"
})
export class StoreComponent {
       constructor(private repository: ProductRepository) { }

       get products(): Product[] {
       	   return this.repository.getProducts();
       }

       get categories(): string[] {
       	   return this.repository.getCategories();
       }
}</pre>

<p>This is actually a relatively simple file to understand since we have already seen several instances of this component typescript file already. The decorator contains the values for the selector and templateUrl, the constructor takes a parameter for accessing the methods in the repository class. We create two methods which act as wrappers for the repository class get categories and get products.

  <span class = "nl">Let's look at the store.component.html file now.</span></p>

<hr />

<h2>Store html file</h2>

<p>This file just contains the template for displaying the length of the categories and products. It is pretty simple.</p>

<em>store.component.html</em>
<pre class = "code">&lt;div class="container-fluid">
  &lt;div class="row">
    &lt;div class="col bg-dark text-white">
      &lt;a class="navbar-brand">SPORTS STORE&lt;/a>
    &lt;/div>
  &lt;/div>
  &lt;div class="row text-white">
    &lt;div class="col-3 bg-info p-2">
    {{categories.length}} Categories
    &lt;/div>
    &lt;div class="col-9 bg-success p-2">
    {{products.length}} Products
    &lt;/div>
  &lt;/div>
&lt;/div></pre>

<hr />

<h2>Store Module</h2>

<p>The store.module.ts is probably one of the more critical files necessary for importing components for the model module, form module and declaring the store component.</p>

<em>store.module.ts</em>
<pre class = "code">import { NgModule } from "@angular/core";
import { BrowserModule } from "@angular/platform-browser";
import { FormsModule } from "@angular/forms";
import { ModelModule } from "../model/model.module";
import { StoreComponent } from "./store.component";

@NgModule({
	imports: [ModelModule, BrowserModule, FormsModule],
	declarations: [StoreComponent],
	exports: [StoreComponent]
})
export class StoreModule { }</pre>

<p>In the next section we will be adding category selection and product pagination.</p>

<hr />
<a href="Angular8.html">Previous Page</a>
<span class="next"><a href="Angular10.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
