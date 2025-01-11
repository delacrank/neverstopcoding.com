<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Objects Part 2 </title>
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

<h1>Javascript - Objects Part 2</h1>

<h2>Javascript Constructor &amp; Prototype Pattern</h2>
    
    <p>There are several patterns used in order to construct objects in javascript.  First we will look at the constructor pattern which will allow us to assign properties to the object at the time of instantiation.
    
    <span class ="nl">Below, is an example of using the constructor pattern.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// method one for constructor pattern</span>
    function Person(name, age, job) {
        this.name = name;
        this.age = age;
        this.job = job;
        this.sayName = function() {
            console.log(this.name);
        }
    }
    
    <span class = "comments">// creating an instance of the pattern</span>
    var person1 = new Person("june", 23, "Software Engineer");
    var person2 = new Person("junior", 30, "typist");
    
    <span class = "comments">// test the functions</span>
    person1.sayName();
    person2.sayName();</pre>
    
    <p>One of the problems with the constructor pattern is that when calling an instance of the function, the pointer is referring to a different location, even thou both functions refer to the same function.
    
    <span class = "nl">This problem can be solved by creating the function outside the scope of the constructor pattern and using a pointer to refer to the function in the global scope.</span>
    
    <span class = "nl">The second and more effective method of solving this problem is by using the prototype pattern. Below is an example of how a prototypes are used to create objects.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// create the object</span>
    function Person() {}
    
    <span class ="comments">// Initialize properties of the object using the prototype properties</span>
    Person.prototype.name = "June";
    Person.prototype.age = 23;
    Person.prototype.job = "Software Enginner";
    Person.prototype.sayName = function() {
        console.log(this.name);
    };
    
    var person1 = new Person();
    var person2 = new Person();
    <span class ="comments">// the sayName() function will always refer to the same instance</span>
    person1.sayName(); 
    
    <span class = "comments">// we can test the instances to see if they refer to the same object</span>
    console.log(person1.sayName == person2.sayName);</pre>
    
    <p>This solves the problem of creating different instances of an objects function. Yet, it creates a new problem if for example we create an array the pointer to this array will reference every instance to the same array. Making it difficult for us to have instances which are unique to each other.
    
    <span class = "nl">We can overwrite the intial value of the prototype by assigning a new value to the property. Furthermore, we can test to see if the value returned is either a new instance or based on the initial value (the prototype value), by using the 'hasOwnProperty()' function.</span>
    
    <span class = "nl">The 'hasOwnProperty()' function will only return true if the object is an instance and false if the value is a prototype. The 'in' operator will be able to determine if the data property is based on the prototype.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function Person() {}
    
    Person.prototype.name = "june";
    
    var person1 = new Person();
    var person2 = new Person();
    
    <span class = "comments">// here we can overwrite that property</span>
    person1.name = "greg";
    
    <span class = "comments">// we can check if the value returned is an instance or based on a prototype</span>
    console.log(person1.hasOwnProperty("name"));
    console.log(person2.hasOwnProperty("name")); 
    
    <span class = "comments">// perform that same check to see if the data property exists (prototype)</span>
    console.log("name" in person2); </pre>
    
    <hr />
    
    <h3>Combining the Patterns</h3>
    
    <p>Let's say we wanted to create a pattern where our data type's can have instances independent of each other, yet a function which is uniform not only in execution but also in reference.
    
    <span class = "nl">This can be accomplished by combining the constructor and prototype patterns.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// use the constructor pattern to create the object</span>
    function Person(name, age, job) {
        this.name = name,
        this.age = age,
        this.job = job
        this.accounts = ["account1", "account2"];
    }
    
    <span class = "comments">// use the prototype pattern to create the function</span>
    Person.prototype = {
        <span class = "comments">// neccessary in order for the function to also be a type constructor</span>
        constructor : Person,
        sayName : function() {
            console.log(this.name);
        }
    } 
    
    var person1 = new Person("june", 23, "Programmer");
    var person2 = new Person("junior", 30, "Lumberjack");
    person2.accounts.push("account3");
    
    <span class = "comments">// normally using a prototype both arrays would return the same values</span>
    console.log(person1.accounts.toString());
    console.log(person2.accounts.toString());
    
    <span class = "comments">// we can also check to ensure that both functions are equal</span>
    console.log(person1.sayName == person2.sayName);</pre>
    
    <p>This pattern is an ideal solution for keeping objects data properties dynamic while their functions remain static.
    
    <span class = "nl">The next section will discuss the parasitic and durable constructors as well as inheritance.</span></p>
    
<hr />
<br />
<a href="Jscript14.php">Previous</a>
<span class = "next"><a href="Jscript16.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>