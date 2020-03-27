<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Routing cont.</title>
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

  <h1>Routing Cont.</h1>

  <h2>Adding navigation</h2>

  <p>In this section we are going to add navigation to some of the existing components in our application in order to make these new components accessible via the webpage, not just through the url.

    <span class = "nl">One of the first changes we can make to our class is by adding a function to an existing class which reroutes the user to our cart page everytime they add a new product to the cart.</span></p>

  <em>store.component.ts</em>
  <pre class = "code">import { Router } from "@angular/router";

@Component({
	selector: "store",
	templateUrl: "store.component.html"
})
export class StoreComponent {
       constructor(private repository: ProductRepository,
            private cart: Cart,
	    private router: Router) {}

       addProductToCart(product: Product) {
          this.cart.addLine(product);
	  this.router.navigateByUrl("/cart");
       }
}</pre>

<p>Let's make some changes to the button we added to our page which should redirect us to our cart. We can add an attribute to the element called 'routerLink' and assign it to the path we wish to go to.</p>

<em>cartSummary.component.html</em>
<pre class = "code">&lt;button class="btn btn-sm bg-dark text-white"
    [disabled]="cart.itemCount == 0" routerLink="/cart">
  &lt;i class="fa fa-shopping-cart">&lt;/i>
&lt;/button></pre>

<p>Also, let's import this service in our store.module.ts file, so that we can actually use this service.</p>

<em>store.module.ts</em>
<pre class = "code">import { RouterModule } from "@angular/router";
@NgModule({
    imports: [ModelModule, BrowserModule, FormsModule, RouterModule],
    declarations: [StoreComponent, CounterDirective, CartSummaryComponent,
        CartDetailComponent, CheckoutComponent],
    exports: [StoreComponent, CartDetailComponent, CheckoutComponent]
})
export class StoreModule { }</pre>

<hr />

<h2>Guarding Routes</h2>

<p>In this section we are going to get into what a route guard is. A route guard is a piece of code which protects clients from being redirected to the index.html page if a http request was interrupted or reloaded.

<span class = "nl">Before we can actually run any of the guards we need to first install the guard router, run the this command first.</span></p>

<em>install guard</em>
<pre class = "code">npm i --save router-guard</pre>

<p>Now, let's take a look at the code.</p>

<em>storeFirst.guard.ts</em>
<pre class = "code">import { Injectable } from "@angular/core";
import { ActivatedRoutesnapshot, RouterStateSnapshot,
       Router } from "@angular/router";
import { StoreComponent } from "./store/store.component";

@Injectable()
export class StoreFirstGuard {
       private firstNavigation = true;

       constructor(private router: Router) {}

       canActivate(route: ActivatedRouteSnapshot,
           state: RouterStateSnapshot): boolean {
       	   if(this.firstNavigation) {
	       this.firstNavigation = false;
	       if( route.component != StoreComponent) {
	           this.router.navigateByUrl("/");
		   return false;
	       }
	   }
	   return true;
        }
}</pre>

<p>The can activate function takes two parameters one being a snapshot of the route, the second being the state of the route. This function returns a boolean value, it checks if the firstNavigation returns false, then it checks to see if the component is equal to the storeComponent, if it is it returns true.

<span class = "nl">Otherwise, it will return the user back to the homepage and return false.  Now, let's look to see how we can use this guard in our module file to actually 'guard' some of our routes.</span></p>

<em>app.module.ts</em>
<pre class = "code">import { StoreFirstGuard } from "./storeFirst.guard";

@NgModule({
	imports: [BrowserModule, StoreModule,
	     RouterModule.forRoot([
	         {
		     path: "store", component: Storecomponent,
		     canActivate: [StoreFirstGuard]
		 },
		 {
		     path: "cart", component: CartDetailComponent,
		     canActivate: [StoreFirstGuard]
		 },
		 {
		     path: "checkout", component: CheckoutComponent,
		     canActivate: [StoreFirstGuard]
		 },
		 { path: "**", redirectTo: "/store" }
	   ])],
      providers: [StoreFirstGuard],
      declarations: [AppComponent],
      bootstrap: [AppComponent]
})
export class AppModule { }</pre>
		 
<p>In the next section we are going to finally finish our cartDetail feature. </p>

  <hr />
<a href="Angular14.html">Previous Page</a>
<span class="next"><a href="Angular16.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
 
