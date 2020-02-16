<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Objects Part 1</title>
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

<h1>Javascript - Objects Part 1</h1>

<h2>Javascript Objects</h2>
    
    <p>There are several ways to declare an object in javascript. I will go over some of the early versions developers used in order to create an object with functions. </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// method one</span>
    var person = new Object();
    person.name = "june";
    person.age = 23;
    person.job = "Software Engineer";
    
    person.sayName = function() {
        console.log(this.name);
    }
    
    <span class = "comments">// method two using json</span>
    var person = {
        name : "june",
        age : 23,
        job : "Software Engineer",
        
        sayName : function() {
            console.log(this.name);
        }
    }</pre>
    
    <p>In the example above I have basically created an object with 3 properties and a pointer to an anonymous function. The first example using the object construction, the second example using the javascript object notation.</p>
    
    <hr />
    
    <h3>Data &amp; Accessor properties</h3>
    
    <p>Data in javascript contains several properties data properties and accessor properties. We can cover data properties first, it consist of four types: 'configurable' (determines whether the property can be changed or deleted), 'enumerable' (used for the: for in loop), 'writable' (can it be assigned to different values, unlike a constant) and finally 'value' (the value of the data, string, number, pointer, etc.).
    
    <span class = "nl">In order to manipulate the data properties of an object you must use the defineProperty function. It is part of the object class we used to create an object, below is an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var person = {};
    
    <span class = "comments">// define the properties of this class</span>
    <span class = "comments">// 3 parameters, object name, property name, and the data properties</span>
    Object.defineProperty(person, "name", {
     writable: false;
     value: "Nicolas"
    });
    
    console.log(person.name);
    
    <span class = "comments">// change the name</span>
    person.name = "junior";
    
    <span class = "comments">// should remain the same, since writable was set to false</span>
    console.log(person.name);</pre>
    
    <p>Now, let's look at the accessor properties: 'configurable' (stops the property from being deleted), 'enumerable' (related to for in loop), 'get' (the function to return values) and 'set' (the function to assign new values).</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var person = {
        _name : "june",
        age : 23
    };
    
    <span class = "comments">// create a get and set function for property name</span>
    Object.defineProperty (person, "name", {
        <span class = "comments">// create the get function</span>
        get : function() {
            return this._name;
        },
        
        <span class = "comments">// create a set function, ensure that length isn't too long or empty</span>
        set : function(newName) {
            if(newName.length > 10) {
                console.log("name too long");
            } else if(newName == "") {
                console.log("please insert a name");
            } else {
                this._name = newName;
            }
        }
    });
    
    <span class = "comments">// test the get function</span>
    console.log(person.name);
    
    <span class = "comments">// test the set function</span>
    person.name = "junebug fungy";
    person.name = "";
    person.name = "jenny";
    
    <span class = "comments">// check to see if the name was set</span>
    console.log(person.name);</pre>
    
    <p>Here we were able to define the getter and setter functions for our name property, how about the configurable accessor which determines the lifetime of an object.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var person = {};
    
    <span class = "comments">// set the configurable property to false</span>
    Object.defineProperty(person, "name", {
        configurable : false,
        value : "june"
    });
    
    <span class = "comments">// check the property value</span>
    console.log(person.name);
    
    <span class = "comments">// attempt to delete it and test it again</span>
    delete person.name;
    
    <span class = "comments">// the property should still exist</span>
    console.log(person.name);</pre>
    
    <p>Here we were able to set the configurable property to false, normally if I ran the delete operator calling the property would display an undefined value.  However, it displayed the property value as defined earlier.
    
    <span class = "nl">Notice that using the getter and setter functions is directly related to using either the access or the assignment operator. If I set a getter function on a object named 'person.name' then this dot (the accessor operator) is invoking the get function.</span>
        
    <span class = "nl">Yet, if try to assign the property to a new value then the set function gets invoked 'person.name = "junior"'.</span></p>
    
<hr />
<br />
<a href="Jscript13.html">Previous</a>
<span class = "next"><a href="Jscript15.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>