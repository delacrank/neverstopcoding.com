<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Objects Part 3 </title>
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

<h1>Javascript - Objects Part 3</h1>

<h2>Javascript Parasitic Constructor pattern</h2>
    
    <p>The parasitic constructor pattern is pretty simple, you declare your class and then you can initialize each property within your class by creating an object. The class function is finalized by returning the object along with the properties of that pattern.
    
    <span class = "nl">Furthermore you can attach methods to the object in order to refer to the properties of the class, let's look at an example of using this pattern.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// create the class</span>
    function Person (name, job, phone) {
        var o = new Object();
        <span class = "comments">// define properties</span>
        o.name = name;
        o.job = job;
        o.phone = phone;
        
        <span class = "comments">// attach methods</span>
        o.sayName = function () {
            console.log(this.name);
        }
        
        <span class = "comments">// return object </span>
        return o;
    }
    
    var person1 = new Person('john', 'driver', 718);
    
    <span class = "comments">// call the method</span>
    person1.sayName();</pre>
    
    <hr />
    
<h2>Durable Constructor pattern</h2>
    
    <p>Let's look at an example of the durable constructor pattern which better for security reasons. While similar to the parasitic pattern it differs in that it doesn't use the 'this' keyword and you don't use the new operator to create an instance of it.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// durable constructor pattern</span>
    function Person (name, job, phone) {
        var o = new Object();
        <span class = "comments">// optional define private variables</span>
        
        <span class = "comments">// attach methods here</span>
        o.sayName = function () {
            console.log(name);
        }
        
        // return object 
        return o;
    }
    
    var person1 = Person('john', 'driver', 718);
    
    person1.sayName();</pre>
    
    <p>Now, we can take a look at how to use inheritance in our javascript objects.</p>
    
    <hr />
    
    <h2>Inheritance</h2>
    
        <p>Inheritance is a concept which many object oriented programming languages use. However, defining objects and classes in javascript is much different in javascript then other OOP languages like java or c#.
    
        <span class = "nl">The way inheritance is accomplished in javascript is through prototype chaining. Simply create an object using a prototype and then chain it to an existing prototype object whose properties you wish to inherit.</span>
    
        <span class = "nl">Let's look at an example of this below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// define the parent class</span>
    function Parent() {
        this.parentName = 'parent';
    }
    
    <span class = "comments">// define the parent method</span>
    Parent.prototype.getParent = function() {
        return this.parentName;
    };
    
    <span class = "comments">// define the child class</span>
    function Child() {
        this.childName = 'child';
    }
    
    <span class = "comments">// chain the prototypes</span>
    Child.prototype = new Parent();
    
    <span class = "comments">// define the child method</span>
    Child.prototype.getChild = function() {
        return this.childName;
    };
    
    <span class = "comments">// create an instance of the child class</span>
    obj = new Child();
    
    <span class = "comments">// now we can call methods from either child or parent class</span>    
    console.log(obj.getParent());
    console.log(obj.getChild());</pre>
    
    <p>Pretty awesome right, I am sure that all of these different constructor patterns can be confusing to choice when to use which one. In general the constructor / prototype pattern is the most commonly used one.</p>
    
    
<hr />
<br />
<a href="Jscript15.php">Previous</a>
<span class = "next"><a href="Jscript17.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>