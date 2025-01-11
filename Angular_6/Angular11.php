<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Pagination</title>
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

<h1>Pagination</h1>

<h2>Pagination</h2>

<p>In this section we are going to be adding some pagination to our products page, this is to ensure that some of our product listing don't actually grow to be too large. First we need to make changes to our store.component.ts file.

  <span class = "nl">I will display the entire file this time.</span></p>

<em>store.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";
import { Product } from "../model/product.model";
import { ProductRepository } from "../model/product.repository";

@Component({
	selector: "store",
	templateUrl: "store.component.html"
})
export class StoreComponent {
       public selectedCategory = null;
       public productsPerPage = 4;
       public selectedPage = 1;

       constructor(private repository: ProductRepository) { }

       get products(): Product[] {
       	   let pageIndex = (this.selectedPage - 1) * this.productsPerPage
	   return this.repository.getProducts(this.selectedCategory)
	       .slice(pageIndex, pageIndex + this.productsPerPage);
       }

       get categories(): string[] {
       	   return this.repository.getCategories();
       }

       changeCategory(newCategory?: string) {
           this.selectedCategory = newCategory;
       }

       changePage(newPage: number) {
           this.selectedPage = newPage;
       }

       changePageSize(newSize: number) {
           this.productsPerPage = Number(newSize);
	   this.changePage(1);
       }

       get pageNumbers(): number[] {
           return Array(Math.ceil(this.repository
	       .getProducts(this.selectedCategory).length / this.productsPerPage))
	           .fill(0).map((x, i) => i + 1);
       }
}</pre>
     
<p>We have added two more properties to our 'StoreComponent' class. One is productsPerPage, the other is selectedPage. Both are necessary as one maintains the amount of products to be displayed per page, while the other value determines which page our client is on.

  <span class = "nl">This new code is actually slightly complex. It uses the splice function to be able to determine how many products to display. The way that slice works is by taking an index and subtracting all the elements prior to that index, if you use two parameters it only displays the elements within that selection.</span>

  <span class = "nl">For instance, if I have 20 products and my page index is set to 1, and products per page is set to 5, then my slice function will display products 1 through 5. If my page index is set to 5 and products set to 5, then page index plus 5 equals ten, so products 5 through 10 will be displayed. Since the page index is always being multiplied by the amount of products to be displayed it there will there always be a value for the first parameter of the slice function.</span>
										
  <span class ="nl">We solved the first problem is being able to segement certain products to be displayed. The next problem is coming up with a function that displays all the possible page options. pageNumbers(), performs this function for us. It takes an array initializes all the values of the array to zero and then it takes the categories divided by the products and uses those values to determine how many indexes to use for our pagination.</span>

  <span class = "nl">Let's take a look at the html markup for this pagination now.</span></p>

<em>store.component.html</em>
<pre class = "code">&lt;div class="container-fluid">
&lt;div class="row">
&lt;div class="col bg-dark text-white">
&lt;a class="navbar-brand">SPORTS STORE&lt;/a>
&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="col-3 p-2">
    &lt;button class = "btn btn-block btn-outline-primary" (click)="changeCategory()">
      Home
    &lt;/button>
    &lt;button *ngFor="let cat of categories"
	    class="btn btn-outline-primary btn-block"
	    [class.active]="cat == selectedCategory" (click)="changeCategory(cat)">
      {{cat}}
    &lt;/button>
  &lt;/div>
  &lt;div class="col-9 p-2">
  &lt;div *ngFor="let product of products" class="card m-1 p-1 bg-light">
    &lt;h4>
      {{ product.name }}
      &lt;span class="badge badge-pill badge-primary float-right">
	{{ product.price | currency:"USD":"symbol":"2.2-2" }}
      &lt;/span>
    &lt;/h4>
    &lt;div class = "card-text bg-white p-1">{{ product.description}}&lt;/div>
  &lt;/div>

  &lt;div class ="form-inline float-left mr-1">
    &lt;select class ="form-control" [value]="productsPerPage"
	    (change)="changePageSize($event.target.value)">
      &lt;option value="3">3 per Page&lt;/option>
      &lt;option value="4">4 per Page&lt;/option>
      &lt;option value="6">6 per Page&lt;/option>
      &lt;option value="8">8 per Page&lt;/option>
    &lt;/select>
  &lt;/div>

  &lt;div class="btn-group float-right">
    &lt;button *ngFor="let page of pageNumbers" (click)="changePage(page)"
	    class="btn btn-outline-primary"
	    [class.active]="page == selectedPage">
      {{ page }}
    &lt;/button>
  &lt;/div>
&lt;/div>
&lt;/div>
&lt;/div></pre>

<p>Looking at the last form which is a select form field, it takes 4 possible values: 3, 4, 6 or 8. This value will be passed into the changePageSize() function. The way the changePageSize function works is by initializing the productsPerPage value, which at default is set to 4. So once that value is changed it will change how the display products function works since it takes that value as a parameter in displaying all the products using the slice function.

<span class = "nl">In the next section we will look into how to create a custom directive. This will help in making the pageNumbers() function less complicated.</span></p>

<hr />
<a href="Angular10.php">Previous Page</a>
<span class="next"><a href="Angular12.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
