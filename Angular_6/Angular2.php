<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First Application</title>
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

<h1>First App</h1>
    
  
<h2>Creating an Angular App</h2>    
    
<p>Great, now that we have successfully set up our OS with the necessary tools and started up an angular server we can begin to build models for our application.

  <span class = "nl">Let's start by working with a todo app. Here is the boiler plate code for it.</span></p>

<em>index.html</em>
<pre class = "code">&lt;!doctype html>
&lt;html lang="en">
&lt;head>
  &lt;meta charset="utf-8">
  &lt;title>Todo&lt;/title>
  &lt;base href="/">
  &lt;meta name="viewport" content="width=device-width, initial-scale=1">
  &lt;link rel="icon" type="image/x-icon" href="favicon.ico">
&lt;/head>
&lt;body class = "m-1 p-1">
 &lt;h3 class="bg-primary text-blue p-3">Adam's To Do List&lt;/h3>
&lt;div class="my-1">
&lt;input class="form-control" />
&lt;button class="btn btn-primary mt-1">Add&lt;/button>
&lt;/div>
&lt;table class="table table-striped table-bordered">
&lt;thead>
&lt;tr>
&lt;th>Description&lt;/th>
&lt;th>Done&lt;/th>
&lt;/tr>
&lt;/thead>
&lt;tbody>
&lt;tr>&lt;td>Buy Flowers&lt;/td>&lt;td>No&lt;/td>&lt;/tr>
&lt;tr>&lt;td>Get Shoes&lt;/td>&lt;td>No&lt;/td>&lt;/tr>
&lt;tr>&lt;td>Collect Tickets&lt;/td>&lt;td>Yes&lt;/td>&lt;/tr>
&lt;tr>&lt;td>Call Joe&lt;/td>&lt;td>No&lt;/td>&lt;/tr>
&lt;/tbody>
&lt;/table>
&lt;/body>
&lt;/html></pre>

<p>If your bootstrap was installed properly most of this table and the heading should have already been styled. If not go back and make sure you go over the steps to ensure it is working.

<span class = "nl">The first thing we want to do is replace the body with a single tag called the 'todo-app' tag</span></p>

<em>index.html</em>
<pre class = "code">&lt;!doctype html>
&lt;html lang="en">
&lt;head>
  &lt;meta charset="utf-8">
  &lt;title>Todo&lt;/title>
  <span class = "comments">&lt;-- tells the program where to look for the app code --></span>
  &lt;base href="/">
  &lt;meta name="viewport" content="width=device-width, initial-scale=1">
  &lt;link rel="icon" type="image/x-icon" href="favicon.ico">
&lt;/head>
&lt;body class = "m-1">
  <span class = "comments">&lt;-- is a place holder for our code -- ></span>
  &lt;todo-app>Angular placeholder&lt;/todo-app>
&lt;/body>
&lt;/html></pre>

<p>Angular uses a template system so the todo-app tag is a reference to the folder name (todo), when we start learning how to generate components we can add several different types of tags for each of those components (stored in different folders). For now the code will be generated from a file called app/app.component.html.

<span class = "nl">We will look at that file soon but before we do we want to see some of the other files which will make up this one. Angular is based on an MVC pattern so each .html file is considered a view file, the component files are considered controllers and the typescript files are considered the models since that is where the controllers get the data.</p>

<hr />

<h2>Model.ts</h2>

<p> The next step of this process is to add a typescript model to our app. To do this let's open the src/app folder and create a file called model.ts (ts is the typescript file format). Since we are learning, I will show how to write this file using first javascript and then typescript. Below is the js version of the file.</p>

<em>model.ts</em>
<pre class = "code">var model = {
    user: "Adam",
    items: [{ action: "Buy Flows", done: false },
    { action: "GetShoes", done: false },
    { action: "Collect Tickets", done: true},
    { action: "Call Joe", done: false}]
};</pre>

<p>Let's see how we can rewrite this file using typescript.</p>

<em>Model.ts</em>
<pre class = "code">export class Model {
     user;
     items;

     constructor() {
         this.user = "Adam";
	 this.items = [new TodoItem("Buy Flowers", false),
	 	       new TodoItem("Get Shoes", false),
		       new TodoItem("Collect Tickets", false),
		       new TodoItem("Call Joe", false)]
     }
}

export class TodoItem {
       action;
       done;

       constructor(action, done) {
           this.action = action;
	   this.done = done;
       }
}</pre>
		       
<p>In the next section we will go over how to create a template for our model and the component which connects our model to the template.</p>

    <hr />
<a href="Angular1.html">Previous Page</a>
<span class="next"><a href="Angular3.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>

