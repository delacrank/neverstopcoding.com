<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Models</title>
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

<h1>Angular Models</h1>

<h2>Models</h2>

<p>In this section we are going to be talking about how to create some model classes in order to interact with our data.
  The first class we will be using in our models will be our product class, this class is necessary for determining the ids, names, categories, descriptions and prices for each product in our store.

  <span class = "nl">Below is an example of this.</span></p>

<em>product.model.ts</em>
<pre class = "code">export class Product {

    constructor(
        public id?: number,
        public name?: string,
        public category?: string,
        public description?: string,
        public price?: number) { }
}</pre>

<p>This is basically a class we can use to define the properties for each product.</p>

<hr />

<h2>Product Repositor</h2>

<p>The next class allows us to do something different. This gives us access to an existing json and allows us to update those values.</p>

<em>product.repository.ts.</em>
<pre class = "code">import { Injectable } from "@angular/core";
import { Product } from "./product.model";
import { StaticDataSource } from "./static.datasource";

@Injectable()
export class ProductRepository {
    private products: Product[] = [];
    private categories: string[] = [];

    constructor(private dataSource: StaticDataSource) {
        dataSource.getProducts().subscribe(data => {
            this.products = data;
            this.categories = data.map(p => p.category)
                .filter((c, index, array) => array.indexOf(c) == index).sort();
        });
    }

    getProducts(category: string = null): Product[] {
        return this.products
            .filter(p => category == null || category == p.category);
    }

    getProduct(id: number): Product {
        return this.products.find(p => p.id == id);
    }

    getCategories(): string[] {
        return this.categories;
    }
}</pre>

<p>When we want to create a new instance of the repository we can inspect the static datasource to see what is currently be stored. Passing the object into the constructor and then calling calling the getProducts method. In this instance we are calling another method on the first one which is called subscribe. Subscribe is an observable, it is a type of handler that deals with listening for values being passed. When the next function is called then values are sent. In this instance we are calling the subscribe function in order to listen to the dataSource for changes in our data.

  <span class = "nl">The repository provides a good medium for moderating the type of access users have for modifying these products. We can iterate over the properties of our data using the arrow method, and set the existing products in our repo to the properties of our static data source. Additionally, we can use the categories property and iterate over each category using the map function. </span>

  <span class = "nl">The way the map function works is by taking a key value pair and being able to make changes to the values. In this instance we want to be able to sort the products by the string value of the category. Let's look at some of the other methods in our repository. getProducts() method returns the products based on the category. getProduct() returns the product based on the id, and getCategories() simply returns the categories.</span>

<hr />

<h2>Model module</h2>

<p>The last of our models is going to be the model module. The purpose of this module is to allow the functionality of the model to be easily used in other parts of the store. It can accomplish this by using the '@NgModule' decorator by creating feature modules. These feature modules are sort of a service for Angular.</p>

<em>model.module.ts</em>
<pre class = "code">import { NgModule } from "@angular/core";
import { ProductRepository } from "./product.repository";
import { StaticDataSource } from "./static.datasource";

@NgModule({
  providers: [ProductRepository, StaticDataSource]
})
export class ModelModule { }</pre>

 
<hr />
<a href="Angular7.html">Previous Page</a>
<span class="next"><a href="Angular9.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>

