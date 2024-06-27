<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Inheritance Combination</title>
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

<h1>Javascript - Inheritance Combination</h1>
    
<h2>Problems with Constructor stealing</h2>
    
    <p>Previously we saw some examples of prototype chaining and constructor stealing in order to inherit features from different classes, like methods or properties. In this section we are going to show an example of how we can use these features to create an ideal type of inheritance.
    
    <span class = "nl">First some of the problems with using constructor stealing on its own. Similar to the constructor pattern, multiple classes cannot share a method without prototype chaining, and methods must be created within the constructor.</span>
    
    <span class = "nl">Let's see some of examples of using prototype chaining and constructor stealing to make classes which have the flexibility of constructor stealing and the reusability of prototype chaining. </span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a class with one parameter and an array</span>
    function Parent(name) {
        this.name = name;
        this.kids = ['june', 'john', 'jacob'];
    }
    
    <span class = "comments">// attach a method to the class which displays the property</span>
    Parent.prototype.sayName = function() {
        console.log(this.name);
    };
    
    <span class = "comments">// create a sub class which calls the parameter from the super class</span>
    function Child(name, age) {
        Parent.call(this, name);
        this.age = age;
    }
    
    <span class = "comments">// chain the classes together using prototypes</span>
    Child.prototype = new Parent();
    
    <span class = "comments">// attach a method which displays the age of sub class</span>
    Child.prototype.sayAge = function () {
        console.log(this.age);
    };
    
    <span class = "comments">// create an instance of the sub class</span>
    var obj = new Child('junior', 12);
    
    <span class = "comments">// push a value on to the kids array</span>
    obj.kids.push('jesus');
    
    <span class = "comments">// display the values of the array</span>
    console.log(obj.kids.toString());
    
    <span class = "comments">// call the methods to display the name and age</span>
    obj.sayName();
    obj.sayAge();
    
    <span class = "comments">// create a new instance of the sub class</span>
    var obj2 = new Child('chris', 35);
    
    <span class = "comments">// check the values to ensure the instances point to seperate value</span>
    console.log(obj2.kids);
    obj2.sayName();
    obj2.sayAge(); </pre>
    
    <p>This new pattern is called combination inheritance which makes use of prototype chaining and constructor stealing. Prototype chaining allows us to create methods which can be created outside of the constructor and methods which are chained to parent and child classes.
    
    <span class = "nl">Constructor stealing allows us to keep the values of our instances seperate while still being able to pass parameters between sub and super classes.</span></p>
    
    
    
<hr />
<br />
<a href="Jscript17.php">Previous</a>
<span class = "next"><a href="Jscript19.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>