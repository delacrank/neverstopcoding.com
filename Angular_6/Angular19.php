<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Restful Web Service</title>
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

  <h1>Restful Web Service</h1>

  <h2>Restful Api Intro</h2>

  <p>In this section we are going to be using a built in service called HttpClient which is used to make http requests. By specifying the url of the site we can use this service to make http requests which will retrieve the data based on the route being used.

    <span class = "nl">Let's look at an example of what this service would look like.</span></p>

  <em>rest.datasource.ts</em>
<pre class = "code">import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
import { Product } from "./product.model";
import { Cart } from "./cart.model";
import { Order } from "./order.model";

const PROTOCOL = "http";
const PORT = 3500;

@Injectable()
export class RestDatasource {
       baseUrl: string;

       constructor(private http: Httpclient) {
           this.baseUrl = `${PROTOCOL}://${location.hostname}:${PORT}/`;
       }

       getProducts(): Observable<Product[]> {
           return this.http.get<Product[]>(this.baseUrl + "products");
       }

       saveOrder(order: Order): Observable<Order> {
           return this.http.post<Order>(this.baseUrl + "orders", order);
       }
}</pre>

<p>In these situations we can call the base url and pass in the path of the route (orders, products). This will make more sense when we actually apply it to an existing component.</p>

<hr />

<h2>Model Module</h2>

<p>After we add this service to the module we can use in various parts of the application.</p>

<em>model.module.ts</em>
<pre class = "code">
    
  
<hr />
<a href="Angular18.php">Previous Page</a>
<span class="next"><a href="Angular20.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
