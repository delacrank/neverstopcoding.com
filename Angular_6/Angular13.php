<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Cart System</title>
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

  <h1>Cart System</h1>

  <h2>Creating the cart model</h2>

  <p>In order to create the cart model we should have an idea of what sort of values will be contained. If for example we want to store the values based on the number of items and price per each item, then we need to create those two values. The next thing we need to do is be able to update those properties in case our client decides to add more items, and similarily decrement these values if items are removed.

    <span class = "nl">We can also create two more methods to clear the entire cart and to calculate the total price of all the items in the cart. So let's see an example of what this class looks like. It will be stored in src/app/model directory.</span></p>

  <em>cart.model.ts</em>
  <pre class = "code">import { Injectable } from "@angular/core";
import { Product } from "./product.model";

@Injectable()
export class Cart {
    public lines: CartLine[] = [];
    public itemCount: number = 0;
    public cartPrice: number = 0;

    addLine(product: Product, quantity: number = 1) {
        let line = this.lines.find(line => line.product.id == product.id);
        if (line != undefined) {
            line.quantity += quantity;    
        } else {
            this.lines.push(new CartLine(product, quantity));
        }
        this.recalculate();
    }

    updateQuantity(product: Product, quantity: number) {
        let line = this.lines.find(line => line.product.id == product.id);
        if (line != undefined) {
            line.quantity = Number(quantity);
        }
        this.recalculate();
    }

    removeLine(id: number) {
        let index = this.lines.findIndex(line => line.product.id == id);
        this.lines.splice(index, 1);
        this.recalculate();
    }

    clear() {
        this.lines = [];
        this.itemCount = 0;
        this.cartPrice = 0;
    }

    private recalculate() {
        this.itemCount = 0;
        this.cartPrice = 0;
        this.lines.forEach(l => {
            this.itemCount += l.quantity;
            this.cartPrice += (l.quantity * l.product.price);
        })
    }
}

export class CartLine {
    
    constructor(public product: Product,
        public quantity: number) {}

    get lineTotal() {
        return this.quantity * this.product.price;
    }
}</pre>

  <p>Let's start by looking at the properties, we have an array of objects 'cartline'. These objects stand for each pair of product matched with quantity. The object also has a method which returns the total price of one of the selections (product, quantity).  Next is the method to add a line to our cart, 

<span class = "nl">This is sort of a tricky function to write since we can decide to add existing lines in which case we want to increment the quantity and keep the product the same, or add a new item which would force us to add another object to the array. To determine what course of action to take we can use the find method on our array to determine if we already have a product id which matches the item we want to add to our cart.</span>

<span class = "nl">If we don't, then we can simply create an instance of that object and push that value on to our array. Then we call the calculate function to increment the total. The next method deals with managing the quantity of an item, it works similar to our first method, but different in the sense that it simply modifies the quantity of a product.</span>

<span class = "nl">The next method removeLine actually uses a method we previously encountered, the slice function. It takes the existing id of a product and it removes it from the array. The clear method just reinitializes all of our properties to zero and our recalculate function performs multiple commands of incrementing the item count and the cartPrice.</span>

<span class = "nl">We need to add wiring to our model.module.ts file in order to recognize our newest model.</span>

<em>model.module.ts</em>
<pre class = "code">import { NgModule } from "@angular/core";
import { ProductRepository } from "./product.repository";
import { StaticDataSource } from "./static.datasource";
import { Cart } from "./cart.model";

@NgModule({
  providers: [ProductRepository, StaticDataSource, Cart]
})
export class ModelModule { }</pre>

  <p>So far so good, we created a model and imported the class to our model.module. Let's create a component where we can summarize the items in our cart. In the 'store' directory create a new file called cartSummary.component.ts.

<span class = "nl">Since we have added our model to the model.module, it can now be used as a service. This next file is the first instance of dependency injection for using that model.</span></p>

<hr />

<h2>Cart Summary Component</h2>

<p>Here is the code for the cart summary file and template.</p>

<em>cartSummary.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";
import { Cart } from "../model/cart.model";

@Component({
    selector: "cart-summary",
    templateUrl: "cartSummary.component.html"
})
export class CartSummaryComponent {

    constructor(public cart: Cart) { }
}</pre>

<p>Also, we need to create the template for this cart summary component. You can find this below. For the most part the cart summary doesn't really do much but display the values from the model. We will see this in the code for the template below.</p>

<em>cartSummary.component.html</em>
<pre class = "code">&lt;div class="float-right">
    &lt;small>
      Your cart:
      &lt;span *ngIf="cart.itemCount > 0">
        {{ cart.itemCount }} item(s)
        {{ cart.cartPrice | currency:"USD":"symbol":"2.2-2" }}
      &lt;/span>
      &lt;span *ngIf="cart.itemCount == 0">
        (empty)
      &lt;/span>
    &lt;/small>
    &lt;button class="btn btn-sm bg-dark text-white"
        [disabled]="cart.itemCount == 0" routerLink="/cart">
      &lt;i class="fa fa-shopping-cart">&lt;/i>
    &lt;/button>
  &lt;/div>
  &lt;div class="float-right">
    &lt;small>
      Your cart:
      &lt;span *ngIf="cart.itemCount > 0">
        {{ cart.itemCount }} item(s)
        {{ cart.cartPrice | currency:"USD":"symbol":"2.2-2" }}
      &lt;/span>
      &lt;span *ngIf="cart.itemCount == 0">
        (empty)
      &lt;/span>
    &lt;/small>
    &lt;button class="btn btn-sm bg-dark text-white"
        [disabled]="cart.itemCount == 0" routerLink="/cart">
      &lt;i class="fa fa-shopping-cart">&lt;/i>
    &lt;/button>
  &lt;/div></pre>

<p>The summary simply checks the total items in the cart first to see if they are more then zero. Then if the items do exceeed zero it will display the total number of items as well as the total cost of all of the items in the cart.

<span class = "nl">If the cart item count is zero then it just displays the word empty as well as the shopping cart button being disabled. The great thing about this component is that we can just add it in our store template using the selector as defined in the typescript file (cart-summary).</span></p>
  
<hr />

<h2>Changes in Store components</h2>

<p>It's great that we just created this new model to be able to handle items in our cart as well as being able to add or remove them at will. However, we still need to add these components to our store component and we need inject this model into our store component typescript file if we want to apply it to our existing GUI.

<span class = "nl">Let's start by looking at the revamped version of our store.component.ts file.</span></p>

<em>store.component.ts</em><pre class = "code">import { Cart } from "../model/cart.model";

@Component({
	selector: "store",
	templateUrl: "store.component.html"
})
export class StoreComponent {
       constructor(private repository: ProductRepository,
       			  private cart: Cart ) { }

       addProductToCart(product: Product) {
          this.cart.addLine(product);
       }
}</pre>

<p>In the example above, I made sure to only include elements of the class in so far that they reflect the new changes made. We can see how the constructor takes in a new class called 'Cart'. Access to that class is provided by a private property called 'cart', we will use this property to be able to call the addLine method and pass the product into that method.

<span class = "nl">Next, we need to add the location for this model in our wiring so this means changes to the store.module.ts file and eventually we will make changes to the template as well so that users can actively use this new methods we just created.</span>

<span class = "nl">Let's start with the module file.</span></p>
  
<em>store.module.ts</em>
<pre class = "code">import { CartSummaryComponent } from "./cartSummary.component";

@NgModule({
	imports: [ModelModule, BrowserModule, FormsModule],
	declarations: [StoreComponent, CounterDirective, CartSummaryComponent],
	exports: [StoreComponent]
})
export class StoreModule { }</pre>

<p>Once again, I made sure only to include the changes necessary, this includes adding the cartSummaryComponent and adding it to the declarations file as well.

<span class = "nl">In let's take a look at our new template now.</span></p>

<em>store.component.html</em>
<pre class = "code">&lt;div class="container-fluid">
&lt;div class="row">
&lt;div class="col bg-dark text-white">
&lt;a class="navbar-brand">SPORTS STORE&lt;/a>
&lt;cart-summary>&lt;/cart-summary>

    &lt;div class = "card-text bg-white p-1">
      {{ product.description}}
      &lt;button class = "btn btn-success btn-sm float-right"
	      (click)="addProductToCart(product)">
	Add to Cart
	&lt;/button>
    &lt;/div></pre>

  <p>This was a rather long section, but it was necessary to show what we needed to do in order to add a cart to our store. In the next section we are going to add a checkout system.</p>

  <hr />
<a href="Angular12.php">Previous Page</a>
<span class="next"><a href="Angular14.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
