<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Checkout</title>
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

  <h1>Checkout</h1>

  <h2>Order model</h2>

  <p>In this section we are going to complete the order aspect of our application. In order to do this we actually need a model where we can store the information of the clients who want to order certain products from our online store. This means recording their address, name, phone number etc.

    <span class = "nl">Let's look at an example of this below.</span></p>

  <em>order.model.ts</em>
<pre class = "code">import { Injectable } from "@angular/core";
import { Cart } from "./cart.model";

@Injectable()
export class Order {
       public id: number;
       public name: string;
       public address: string;
       public city: string;
       public state: string;
       public zip: string;
       public country: string;
       public shipped: boolean = false;

       constructor(public cart: Cart) { }

       clear() {
       	       this.id = null;
	       this.name = this.address = this.city = null;
	       this.state = this.zip = this.country = null;
	       this.shipped = false;
	       this.cart.clear();
       }
}</pre>

<p>Seems like a simple enough model, now we just need to be able to insert some data into our static.data.source. Let's reopen that file and make some changes to it so that we can actually save some orders to it. The difference here is that we aren't going to actually save any of these order to the static data source just yet. For now, we want to just print these values to the console as a way of testing it.</p>

<em>static.datasource.ts</em>
<pre class = "code">import { Observable, from } from "rxjs";
import { Order } from "./order.model";

    saveOrder(order: Order): Observable&lt;Order> {
	console.log(JSON.stringfiy(order));
	return from([order]);
    }
}</pre>

<hr />

<h2>Order Repository</h2>

<p>The order repository will contain much of the significant code for actually retrieving and storing orders to our data source. The get orders function just returns an array/object of all the possible orders, the save order function will call the dataSource save order function and pass the values of our existing order to our data Source.</p>

<em>order.repository.ts</em>
<pre class = "code">import { Injectable } from "@angular/core";
import { Observable } from "rxjs";
import { Order } from "./order.model";
import { StaticDataSource } from "./static.datasource";

@Injectable()
export class OrderRepository {
       private orders: Order[] =[];

       constructor(private dataSource: StaticDataSource) {}

       getOrders(): Order[] {
            return this.orders;
       }

       saveOrder(order: Order): Observable<Order> {
            return this.dataSource.saveOrder(order);
       }
}</pre>

<p>We can wrap this section up by creating a service for this order repository function so we can inject it into our future classes when we need to reuse the functionality.</p>

<em>model.module.ts</em>
<pre class = "code">import { Order } from "./order.model";
import { OrderRepository } from "./order.repository";

@NgModule({
	providers: [ProductRepository, StaticDataSource, Cart,
		    Order, OrderRepository]
})
export class ModelModule { }</pre>

<p>In the next section we are going to wrap up the checkout section by showing the template for our checkout form.</p>

    <hr />
<a href="Angular16.html">Previous Page</a>
<span class="next"><a href="Angular18.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
