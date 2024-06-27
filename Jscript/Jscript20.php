<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Function expressions Cont.</title>
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

<h1>Javascript - Function expressions Cont.</h1>
    
    <p>In this section we are going to continue talking about functions, like closures and mimicking block scope. First let's take a look a mimicking block scope.</p>
    
<h2>Mimicking Block Scope</h2>

    <p>In our anonymous functions we were able to declare a function without having to name it, the problem with this approach is scope. What happens when we want to keep variables in separate blocks, javascript cannot do this the way you would in c or java using curly braces.
    
    <span class = "nl">First, let's look at what happens when you attempt this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function count(num) {
        for (var i = 0; i &lt; num; ++i ) {
            console.log(i);
        }
        
        <span class = "comments">// this is in a seperate scope, so why is the value of 10 still being passed?</span>
        console.log(i);
    }
    
    <span class = "comments">// if we invoke the function both values are defined</span>
    count(10); </pre>
    
    <p>So we incremented the variable i within a for loop, yet the value stayed initialized when we called it later on.  Let's see how we can seperate this value using parantheses.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function count(num) {
        <span class = "comments">// we encapsulate the entire functions in paranethese</span>
        (function() {
            for (var i = 0; i &lt; num; i++) {
                console.log(i);
            }
        })();
        
        <span class = "comments">// Now, we have a reference error for undefined i variable</span>
        console.log(i);
    }
    
    <span class = "comments">// let's invoke the function again</span>
    count(10);</pre>
    
    <p>If we look at the way to write an anonymous function with its own scope, it looks funny. This is because we need to allow parameters to be added but keep the format for defining a function, therefore there are two sets of parantheses.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    (function() {
        <span class = "comments">// code in here</span>
    })( <span class = "comments">// arguments here</span> )</pre>
    
    <hr />
    
    <h2>Privileged Methods</h2>
    
        <p>When we were going over constructor patterns we found out how to use prototype chaining for inheritance, and how to create functions which could be used to return methods and variables.  
    
        <span class = "nl">Here we go one step further and declare some variables or functions privately and use a public method in order to call or return these private variables/methods.</span>
    
        <span class = "nl">Let's look at an example of this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function MyObj() {
    
        <span class = "comments">// declare our private variable and method</span>
        var privateVariable = 10;
        
        function privateMethod() {
            return 5;
        }
        
        <span class = "comments">// using the this pointer allows us to refer to those private vars/functions</span>
        this.getVariable = function() {
            return privateVariable;
        };
        
        this.getMethod = function() {
            return privateMethod();
        };
    }
    
    var obj = new MyObj();
    
    <span class = "comments">// returns undefined</span>
    console.log(obj.privateVariable);
    
    <span class = "comments">// throws an error</span>
    console.log(obj.privateMethod());
    
    <span class = "comments">// works</span>
    console.log(obj.getVariable());
    
    <span class = "comments">// works</span>
    console.log(obj.getMethod());</pre>
    
    <p>Using the 'this' pointer and assigning it to an anonymous function in order to return private variables or methods is considered a 'privileged method'.
    
    <span class = "nl">We can take this a step further and use privileged methods as getters and setters rather then depending on the built in defineProperty method of the 'Object' class.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function Person(name) {
    
        <span class = "comments">// create the get method</span>
        this.getName = function() {
            return name;
        };
        
        <span class = "comments">// create the set method</span>
        this.setName = function(value) {
            name = value;
        };
    }
    
    <span class = "comments">// initialize a variable as an instance</span>
    var P = new Person('john');
    
    <span class = "comments">// call the get function</span>
    console.log(P.getName());
    
    <span class = "comments">// change the value of the name</span>
    P.setName('june');
    
    <span class = "comments">// check to see if change was effected</span>
    console.log(P.getName());</pre>
    
    <p>Notice, that we need to use the constructor pattern in order to use these privileged methods, which is a problem because this means we need to constantly create new instances for every method we create.
    
    <span class = "nl">Let's see a solution for this problem using static private variables.</span></p>
    
    <hr />
    
    <h2>Static private Variables</h2>
    
        <p>The purpose of creating static variables is when you want the value to remain constant. This means if the value of a variable is changed in one instance, then all of the instances of that class will reflect that change.
    
        <span class = "nl">Let's look at an example of this below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// uses a function expression to create the class</span>
    (function () {
        <span class = "comments">// here we can add private variables and methods</span>
        var privateVar = 10;                
        
        <span class = "comments">// constructor, don't use var here we want it in globla scope</span>
        MyObject = function() {};
        
        <span class = "comments">// attach public methods here</span>
        MyObject.prototype.getVar = function() {
            return privateVar;
        };
        
        MyObject.prototype.setVar = function(value) {
            privateVar = value;
        };    
    })();
    
    <span class = "comments">// use the constructor function to create an instance</span>
    var obj = new MyObject();
    
    <span class = "comments">// return private variable</span>
    console.log(obj.getVar());
    
    <span class = "comments">// Create another instance</span>
    var obj2 = new MyObject();
    
    <span class = "comments">// use the set function to change the value</span>
    obj2.setVar(11);
    
    <span class = "comments">// let's see if both vars are changed now</span>
    console.log(obj.getVar());
    console.log(obj2.getVar());</pre>
    
<hr />
<br />
<a href="Jscript19.html">Previous</a>
<span class = "next"><a href="Jscript21.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>