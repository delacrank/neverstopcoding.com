<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Filtering</title>
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

<h2>Filtering</h2>

<p>We are going to make some changes to the files of our newest store component. First we need a way to be able to select which category we want to use. For this we can simply include a button for our html template. But first we need to create a function which will select the correct category based on the value being passed in.

<span class = "nl">Let's look at that file first.</span></p>

<em>store.component.ts</em>
<pre class = "code"> public selectedCategory = null;

get products(): Product[] {
   return this.repository.getProducts(this.selectedCategory);
}
  
changeCategory(newCategory?: string) {
  this.selectedCategory = newCategory;
}</pre>

<p>We can add this property to the StoreComponent class. The first function will determine which types of products will be displayed, the second function which will determine what the value of the category is. Adding the question mark next the parameter of changeCategory function means that the value can also be a null value, this is neccessary for functions which require a certain number of parameters to be called.

  <span class = "nl">Now, let's look at how we would write our template using this new function.</span></p>
							 
<em>store.component.html</em>
<pre class = "code">&lt;div class="col-3 p-2">
    &lt;button class = "btn btn-block btn-outline-primary" (click)="changeCategory()">
      Home
    &lt;/button>
    &lt;button *ngFor="let cat of categories"
	    class="btn btn-outline-primary btn-block"
	    [class.active]="cat == selectedCategory" (click)="changeCategory(cat)">
      {{cat}}
    &lt;/button>
  &lt;/div></pre>

<p>The first button makes the default category null. So all categories are displayed when the value of selectedCategory is null. However, once the selected category is giving a value, then only the products whose value is of the selected category will be displayed (since we changed how getProducts() works).</p>
  

<hr />
<a href="Angular9.html">Previous Page</a>
<span class="next"><a href="Angular11.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
