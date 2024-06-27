<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Routing</title>
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

  <h1>Routing</h1>

  <h2>Adding Routes</h2>

  <p>In this next section we are going to be adding routing to our application. This means everytime a certain path to the end of a url is typed, our application will know what file to display in response.

    <span class = "nl">To start we will create three components in order to provide a some simple templates to test the routes. we can start by creating: 'cartDetail' and 'checkout' components to our store directory.</span></p>

  <em>cartDetail.component.ts</em>
  <pre class = "code">import { Component } from "@angular/core";

@Component({
    template: `&lt;div>&lt;h3 class = "bg-info p-1 text-white">Cart Detail&lt;/h3>&lt;/div>`
})
export class CartDetailComponent {}</pre>
  
<p>Now let's look at the checkout component now.</p>

<em>checkout.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";

@Component({ 
    template: `&lt;div>&lt;h3 class = "bg-info p-1 text-white">Checkout&lt;/h3>&lt;/div>`
})
export class CheckoutComponent {}</pre>

<p>Let's add these new components to our store.module.ts file now.</p>

<em>store.module.ts</em>
<pre class = "code">import { CartDetailComponent } from "./cartDetail.component";
import { CheckoutComponent } from "./checkout.component";

@NgModule({
	imports: [ModelModule, BrowserModule, FormsModule],
	declarations: [StoreComponent, CounterDirective, CartSummaryComponent,
	CartDetailComponent, CheckoutComponent],
	exports: [StoreComponent, CartDetailComponent, CheckoutComponent]
})
export class StoreModule { }</pre>

<p>Here we imported the classes and defined the locations for those files, as well as adding the class names to our declarations and exports. The next file we will modify is the app.module.ts file in order to add our routes.</p>

<hr />

<h2>Route configuration</h2>

<p>Let's see what modifications we need to make to the app.module.ts file in order to configure these new routes. The application needs to know which component to open in reponse the the path being passed, so we will see an example of this below.</p>

<em>app.module.ts</em>
<pre class = "code">
import { StoreComponent } from "./store/store.component";
import { CheckoutComponent } from "./store/checkout.component";
import { CartDetailComponent } from "./store/cartDetail.component";
import { RouterModule } from "@angular/router";

@NgModule({
    imports: [BrowserModule, StoreModule,
        RouterModule.forRoot([
            { path: "store", component: StoreComponent },
            { path: "cart", component: CartDetailComponent },
            { path: "checkout", component: CheckoutComponent },
            { path: "**", redirectTo: "/store" }
  	])],
    declarations: [AppComponent],
    bootstrap: [AppComponent]
})
export class AppModule { }</pre>

<p>If we recompile and deploy then we can start using the routes we just created. This goes for: '/store', '/checkout' and '/cart'. In terms of the content of those two new routes we just created meaning checkout and cart routes, they just have a plain template right now.

<span class = "nl">In the next section we are going to be looking at ways to provide navigation to our routes.</span></p>

 <hr />
<a href="Angular13.php">Previous Page</a>
<span class="next"><a href="Angular15.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
