<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Methods</title>
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

  <h1>Methods</h1>

  <h2>Methods</h2>

  <p>We have covered a lot of ground so far in the next section we are going to go over how to create a method in order to provide our program with the ability to add new items in our todo list.</p>

<em>app.component.html</em>
<pre class = "code">&lt;div class = "my-1">
    &lt;input class = "form-control" #todoText />
    &lt;button class = "btn btn-primary mt-1" (click)="addItem(todoText.value)">
        Add
    &lt;/button>
&lt;/div></pre>

<p>So far we have modified the form so that we have a new UI control which allows us to press a button and insert some text into an input control, however we still need to be able to create a function which will create the new td (table definition) once the button is clicked.

<span class = "nl">Let's create the definition for that method below. Notice how the click event just required me to type click in parantheses. In order to modify our ts file lets also include the model class to it.</p>

<em>app.component.ts</em>
<pre class ="code">import { Component } from '@angular/core';
import { Model, TodoItem } from './model';

@Component ({
    selector: 'todo-app',
    templateUrl: 'app.component.html'
})
export class AppComponent {
    model = new Model();

    getName() {
        return this.model.user;
    }

    getTodoItems() {
        return this.model.items.filter(item => !item.done);
    }

    <span class = "comments">// our new method here</span>
    addItem(newItem) {
        if(newItem != "") {
	    this.model.items.push(new TodoItem(newItem, false));
	}
    }
}</pre>

<p>This was actually a relatively simply solution, we already had a template which was iterating through our items array and then displaying each item in our table. So by simply adding a new item to that array the existing functions would be able to add the new items to the table.</p>
  

   <hr />
<a href="Angular4.html">Previous Page</a>
<span class="next"><a href="Angular6.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
