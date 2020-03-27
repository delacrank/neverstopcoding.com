<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Directive</title>
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

  <h1>Directive</h1>

  <h2>Implementing a Directive</h2>

  <p>In this section we are going to be implementing a directive. The way this is going to work is by creating a seperate file in order to create this directive and using the module file to wire this directive to our component.

    <span class = "nl">The first question we should be asking ourselves, is what is the purpose of the directive. That can be answered simply as a means to be able to generate a series of numbers. The problem we were having before is in using the ngFor operator, in that it required an array or object to iterate through our page navigation. However, what we really want is just a counter so for this we can substitute the ngFor operator with this custom directive we create.</span>

  <span class = "nl">Let's look at an example of how we would be able to create this directive below.</span></p>

  <em>counter.directive.ts</em>
  <pre class = "code">import {
    Directive, ViewContainerRef, TemplateRef, Input, Attribute, SimpleChanges
} from "@angular/core";

@Directive({
    selector: "[counterOf]"
})
export class CounterDirective {

    constructor(private container: ViewContainerRef,
        private template: TemplateRef&lt;Object>) {
    }

    @Input("counterOf")
    counter: number;

    ngOnChanges(changes: SimpleChanges) {
        this.container.clear();
        for (let i = 0; i < this.counter; i++) {
            this.container.createEmbeddedView(this.template,
                new CounterDirectiveContext(i + 1));
        }
    }
}

class CounterDirectiveContext {
    constructor(public $implicit: any) { }
}</pre>

<p>The directive is certainly importing a lot of classes from the core angular library. I am not equipped to explain all of this code currently, so I will go back at another time and explain it. For now, let's look at the function which we will call for producing the current page count for our pagination system.</span></p>

<em>store.component.ts</em>
<pre class = "code">get pageCount(): number {
    return Math.ceil(this.repository
	.getProducts(this.selectedCategory).length / this.productsPerPage)
}</pre>

<p>This function is a lot less complicated then our first. The main difference is that we no longer require the use of an array or object to iterate through our products. Let's look at the new template now which will call this pageCount function and the 'counter.directive.ts' file through the use of the '*counter' operator.</span></p>

<em>store.component.html</em>
<pre class = "code">&lt;div class="btn-group float-right">
  &lt;button *counter="let page of pageCount" (click)="changePage(page)"
      class="btn btn-outline-primary" [class.active]="page == selectedPage">
    {{page}}
  &lt;/button>
&lt;/div></pre>

<p>There are a few minor changes to this template, one is the '*counter' keyword which references the counter directive. The next change is the pageCount function which we reference in the 'store.component.ts' file. Lastly, we need to use a module to wire this new directive to our main component.</p>  

<em>store.module.ts</em>
<pre class = "code">import { CounterDirective } from "./counter.directive";

@NgModule({
    imports: [ModelModule, BrowserModule, FormsModule],
    declarations: [StoreComponent, CounterDirective],
    exports: [StoreComponent]
})
export class StoreModule { }</pre>

<p>This pretty much sums up creating and using a directive in the next section we are going to create a checkout system for our angular application.</p>

<hr />
<a href="Angular11.html">Previous Page</a>
<span class="next"><a href="Angular13.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
