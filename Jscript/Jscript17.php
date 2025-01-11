<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Inheritance </title>
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
<?php include('..//Includes//Left_Jscript.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Javascript - Inheritance</h1>
    
<h2>Problems with Prototype Chaining</h2>
    
    <p>One of the problems with prototype chaining is that prototypes are just reference types, this is why we use the constructor pattern in order to create instances which can hold different values.
    
    <span class = "nl">Let's look at an example where prototype chaining fails and what we can do in order to solve this problem.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create an array of names under parent class</span>
    function Parent() {
        this.parentNames = ['bob', 'june', 'billy'];
    }
    
    <span class = "comments">// attach a method which returns that array</span>
    Parent.prototype.getNames = function() {
        return this.parentNames;
    };
    
    <span class = "comments">// create a child class</span>
    function Child() {        
    }
    
    <span class = "comments">// chain the child and parent classes</span>
    Child.prototype = new Parent();
    
    <span class = "comments">// create an instance of the child class</span>
    var obj = new Child();
    
    <span class = "comments">// call the method to our property values</span>
    console.log(obj.getNames().toString());
    
    <span class = "comments">// create a seperate instance of the child class</span>
    var obj2 = new Child();
    
    <span class = "comments">// let's add a value into the parent property</span>
    obj2.parentNames.push('josh');
    
    <span class = "comments">// However, our value is now added to the older instance of the object?!</span>
    console.log(obj.getNames().toString());
    
    <span class = "comments">// we need a method to which can point to different instances of the same class</span></pre>
    
    <p>One of the ways we can solve this problem is by using a method which only refers to methods of the same object. This method is the call method and we used it in earlier examples of this tutorials.
    
    <span class = "nl">Let's use the same exact example only this time let's use the call method to refer to just our child instance and not the inherited parent instance of the 'names' array.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function Parent() {
        this.parentNames = ['bob', 'june', 'billy'];
    }
    
    Parent.prototype.getNames = function() {
        return this.parentNames;
    };
    
    <span class = "comments">// using the call method with 'this' pointer to refer only to Child objects</span>
    function Child() {    
        Parent.call(this);
    }
    
    Child.prototype = new Parent();
    
    var obj = new Child();
    
    <span class = "comments">// call the values from first instance</span>
    console.log(obj.getNames().toString());
    
    var obj2 = new Parent();
    
    <span class = "comments">// add a value to a new instance</span>
    obj2.parentNames.push('josh');
    
    <span class = "comments">// check to see if our old instance remains unchanged</span>
    console.log(obj.getNames().toString());
    
    <span class = "comments">// check new instance to see if value is added</span>
    console.log(obj2.getNames().toString());</pre>
    
    <p>This is called classical inheritance, when we can create methods which when called by different instances know which values to refer to.</p>
    
    <hr />
    
    <h2>Passing Arguments</h2>
    
        <p>Let's see an example of how we can use constructor stealing to pass arguments from out parent class to our child class. This can be accomplished using the 'call or apply' function similar to when we wanted to ensure that our methods were connected to our instances.</p>
    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function Parent(name) {
        this.name = name;
    }
    
    function Child() {
        Parent.call(this, 'joseph');
    }
    
    var obj = new Child();
    
    console.log(obj.name);</pre>
    
    <p>In the next section we are going to go over problems with constructor stealing and how we can combine prototype chaining and constructor stealing to form the ideal type of inheritance.</p>    
    
<hr />
<br />
<a href="Jscript16.php">Previous</a>
<span class = "next"><a href="Jscript18.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>