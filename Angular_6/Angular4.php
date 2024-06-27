<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Binding &amp; Filtering</title>
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

  <h1>Binding &amp; Filtering</h1>

  <h2>Binding &amp; Filtering</h2>

  <p>In this section we are going to extend our application by addding additional features to our model and then creating functions in our controller so they can be displayed in our view (template). Previously we had another class called TodoItem in our model.ts file which we haven't used yet, so in this section we need to create a function in our app.component.ts file to display the values for our action and done properties in our 'TodoItem' class.</p>

<em>app.component.ts</em>
<pre class = "code">import { Component } from '@angular/core';
import { Model } from './model';

@Component({
    selector: 'todo-app';
    templateUrl: 'app.component.html'
})
export class AppComponent {
    model = new Model();

    getName() {
        return this.model.user;
    }

    <span class = "comments">// new method</span>
    getTodoItems() {
        return this.model.items;
    }
}</pre>

<p>There is a problem thou, since the model.items property is an array and we need to be able to iterate through that array. This means each time we call the function we want to display another item from our items array. Let's look at our new template to see how we can solve this problem.</p>

<em>app.component.html</em>
<pre class = "code">&lt;h3 class = "bg-primary p-1 text-white">{{ getName() }}'s To Do List&lt;/h3>

&lt;table class = "table table-striped table-bordered">
&lt;thead>
	&lt;tr>&lt;th>&lt;/th>&lt;th>Description&lt;/th>&lt;th>Done&lt;/th>&lt;/tr>
&lt;/thead>
&lt;tbody>
	<span class = "comments">&lt;-- start our for loop here --></span>
	&lt;tr *ngFor="let item of getTodoItems(); let i = index">
	    &lt;td>{{ i + 1 }}&lt;/td>
	    &lt;td>{{ item.action }}&lt;/td>
	    &lt;td [ngSwitch]="item.done">
	    	&lt;span *ngSwitchCase="true">Yes&lt;/span>
		&lt;span *ngSwitchDefault>No&lt;/span>
	    &lt;/td>
	&lt;/tr>
&lt;/tbody>
&lt;/table></pre>

<p>In the template code above you will notice two things, first is how we iterate through the items. We create a for loop using the '*ngFor' keyword, since the getTodoItems() function returns an array the for loop will traverse each element until it hits the end of the array.

<span class = "nl">Another feature of the array was using a variable i as an index to mark each item as a number. This code also included the use of a switch statement, in the switch statement we check the value of done, which is a boolean in typescript. If done is equal to true then yes will be displayed otherwise it will default to no.</span></p>

<hr />

<h2>Two-Way Binding</h2>

<p>Let's look at another feature of angular which is called two way binding. For this we will add another form element which is a checkbox. The checkbox will allow us to mark items as completed and thereby removing them from the list. However, we want the checkbox to change the value of our boolean value from false to true. Therefore we need to bind it to that value and similarly if the value of the item.done is equal to true then that should mark the checkbox.

<span class = "nl">Let's see how we can expand on our existing code to accomodate for this feature. To do this we can add a filter.</span></p>

<em>app.component.html</em>
<pre class = "code"><span class = "comments">&lt;-- add between td item.action &amp; td switch --></span>
&lt;td>&lt;input type="checkbox" [(ngModel)]="item.done" />&lt;/td></pre>

<p>Now we have a UI control which allows us to remove items from the check list. However, we still need to modify the function which allows binding.</p>

<em>app.component.ts</em>
<pre class = "code"><span class = "comments">// modify the method in app.component.ts</span>
getTodoItems() {
    return this.model.items.filter(item => !item.done);
}</pre>

<p>This is called a lambda function or a fat arrow function. Another way of expression this would be like writting this function out like this.</p>

<em>app.component.ts</em>
<pre class = "code">getTodoItems() {
    return this.model.items.filter(function (item) { return !item.done });
}</pre>

<p>The way the filter function works is by using a function to check each item in an array or data set and returning only the items which pass the condition being set. For our filter function which is an anonymous function we are taking in an item which has a boolean value and returning the opposite of whatever that value was. So if the item was false it returns true, if it was true it returns false. However, since our items are also being passed into a switch statement which doesn't display true items, then it will simply remove false items checked (which are converted to true and then removed).</span></p>



   <hr />
<a href="Angular3.html">Previous Page</a>
<span class="next"><a href="Angular5.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
