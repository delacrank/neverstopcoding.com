<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - DOM part 3</title>
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

<h1>Javascript - DOM part 3</h1>

    <p>In this section we are going to look at the document type and the element type. How to locate elements using the document object and eventually, how create elements.</p>
    
<hr />

<h2>Document Object</h2>
    
    <p>The doucment object is a type 9 node, it is at the top of hierarchy when referring to the dom tree. Some of the properties of the doc object include: url, domain and the referrer. Changing these properties directly effects the page.
    
    <span class = "nl">In our last section we saw how we can search the document for elements using the 'id' attribute, 'document.getElementById'.  There are several other functions which allow us to store multiple elements in a variable using class, tag name, etc.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// our html</span>
    &lt;h2>Hello&lt;/h2>
        &lt;p>Let's test.&lt;/p>
        &lt;img src='img_name.jpg'/>
        &lt;p>very good&lt;/p>
        
    <span class="comments">// script</span>
    <span class="comments">// store the elements in these variables</span>
    var x = document.getElementsByTagName('h2');
    var y = document.getElementsByTagName('p');
    var z = document.getElementsByTagName('img');
    
    <span class = "comments">// best to specify the element</span>
    console.log(x[0]);
    <span class = "comments">// identify total number of p elements</span>
    console.log(y.length);
    <span class = "comments">// display contents of the second p element</span>
    console.log(y[1]);
    <span class = "comments">// display img attribute</span>
    console.log(z[0].src);</pre>
    
    <p>In the example above we make use of the 'getElementsByTagName' function which selects every element who shares the same name. Let's see another way to identify elements this time by class and by name attribute.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// our html</span>
    &lt;p class = 'test'>Let's test.&lt;/p>
    &lt;p name = 'test1'>very good&lt;/p>
        
    <span class="comments">// script</span>
    <span class="comments">// store the elements in these variables</span>
    var x = document.getElementsByClassName('test');
    var y = document.getElementsByName('test1');
    
    <span class = "comments">// display value of element using class name</span>
    console.log(x[0]);
    <span class = "comments">// display value of element using name</span>
    console.log(y[0]);</pre>
    
    <p>The document object also contains properties for identifying each element rather than using the functions. Collections are stored based on their element names document.anchors, document.forms, document.images and document.links.
    
    <span class = "nl">This document object also contains functions for writing, opening and closing files using the functions: document.write(), document.writeln(), document.open() and document.close(). </span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// write something out to the browser using js</span>
    document.write('&lt;p>Hello there&lt;/p>');</pre>
    
    <hr />
    
    <h2>Element type</h2>
    
        <p>The element has a nodetype of 1 and the nodeName will be the elements tag name. This node can be used to manipulate the attributes of the html element.
        
        <span class = "nl">Let's look at some examples of how we can use the properties of the element to locate the attributes and later we will see how we can use the functions to change or view the attributes as well.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    &lt;p id = 'ok' title='title' class='classname' lang='eng'>goody&lt;/p>
    
    <span class = 'comments'>// our script</span>
    var x = document.getElementById('ok');
    
    <span class = 'comments'>// display each attribute using element properties</span>
    console.log(x.id);
    console.log(x.title);
    console.log(x.className);
    console.log(x.lang);
    
    <span class = 'comments'>// change the attribute values</span>
    x.id = 'alright';
    x.title = 'title1';
    x.className = 'classname1';
    x.lang = 'fr';
        
    <span class = 'comments'>// display the new attribute values</span>
    console.log(x.id);
    console.log(x.title);
    console.log(x.className);
    console.log(x.lang);</pre>
    
        <p>Using these properties and there are probably more which haven't been mentioned here, there are many ways to animate or change an element simply by changing the className or the style attribute. 
    
        <span class = "nl">Let's look at some of the functions we can use to set or get the attributes property of our element before moving on.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    &lt;p id = 'ok1' title='title' class='classname' lang='eng'>goody&lt;/p>
    
    <span class = 'comments'>// our script</span>
    var x = document.getElementById('ok1');
    
    <span class = 'comments'>// display each attribute using element properties</span>
    console.log(x.getAttribute('id'));
    console.log(x.getAttribute('title'));
    console.log(x.getAttribute('class'));
    console.log(x.getAttribute('lang'));
    
    <span class = 'comments'>// change the attribute values</span>
    x.setAttribute('id', 'alright');
    x.setAttribute('title', 'title1');
    x.setAttribute('class', 'classname1');
    x.setAttribute('lang', 'fr');
    
    <span class = 'comments'>// remove the attribute</span>
    x.removeAttribute('class');
    x.removeAttribute('lang');    
        
    <span class = 'comments'>// display attribute values</span>
    console.log(x.id);
    console.log(x.title);
    console.log(x.className);
    console.log(x.lang);</pre>
    
    <p>Pretty simple functions: 'getAttribute()', 'setAttribute()' and 'removeAttribute()'.  In the next section we will get into how to create DOM elements and understand the text node.</p>

<hr />
<br />
<a href="Jscript26.php">Previous</a>
<span class = "next"><a href="Jscript28.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>