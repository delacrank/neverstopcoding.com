<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - DOM extension</title>
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

<h1>Javascript - DOM extension</h1>

    <p>In this section we are going to talk about several extensions that have been added to the DOM api.</p>
    
<hr />
    
<h2>Selectors</h2>    
    
    <p>There are several functions we can use to select dom element by the name of their css selector. We can even chain these functions together by first selecting an element and then use this selector function to select elements within that particular element.
    
    <span class = "nl">The names of these functions are as follows 'querySelector()', 'querySelectorAll()' and 'matchesSelector()' although the last function has been deprecated. QuerySelector function simply selects the first element with that selector name, querySelectorAll selects all elements with that name and matchesSelector returns a true or false value based on if those elements exist or not.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// select the body tag</span>
    var body = document.querySelector('body');
    
    <span class = "comments">// select the id named 'div' case matters</span>
    var body = document.querySelector('#div');
    
    <span class = "comments">// select the class named hello</span>
    var body = document.querySelector('.hello');
    
    <span class = "comments">// select all em elements inside this id element</span>
    var body = document.getElementById('div').querySelectorAll('em');
    
    <span class = "comments">// select all elements with class 'selected'</span>
    var body = document.querySelectorAll('.selected');
    
    <span class = "comments">// select all strong elements inside p tags</span>
    var body = document.querySelectorAll('p strong');</pre>
    
    <p>The matchesSelector() has been augmented to work with internert explorer 'msMatchesSelector()' firefox 'mozMatchesSelector()', and safari/chrome 'webkitMatchesSelector()' </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    if (matchesSelector('.hello'))
        console.log('contains a class named hello');</pre>
    
<hr />
    
<h2>Elemental Traversal &amp; Focus</h2>

    <p>Elemental traversal is a way of traversing each element in the dom, the properties which we have used previously are: childElementCount, firstChild, lastChild, previousSibling, nextSibling.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    &lt;ul id= 'ok'>&lt;li>one&lt;/li>&lt;li>two&lt;/li>&lt;li>three&lt;/li>&lt;li>four&lt;/li>&lt;/ul>
    
    <span class = "comments">// our script</span>
    var x = document.getElementById('ok');
    
    console.log(x.firstChild);
    console.log(x.firstChild.nextSibling);
    console.log(x.lastChild.previousSibling);
    console.log(x.lastChild);
    console.log(x.childElementCount);</pre>
    
    <p>The focus element deals with whether an element has been actively selected by the user. Usually if they click on a button or tag or input box, etc.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    &lt;button id = 'ok1'>click me&lt;/button>
    
    <span class = "comments">// our script</span>
    var button = document.getElementById('ok1');
    button.focus();
    <span class = "comments">// checks to see if the element is active</span>
    console.log(document.activeElement === button);
    <span class = "comments">// checks to see if the user is interacting with the page</span>
    console.log(document.hasFocus());</pre>

<hr />    
    
<h2>Markup Insertion</h2>
    
    <p>Theres two properties we can use generate or replace html from an element. InnerHTML and OuterHTML, first let's go over innerHTML and how it functions. Let's say I have a div element and I want to add html inside of that element like say a p element with text. I can use this property and it will create and append the text to that p element.
    
    <span class = "nl">Let's see an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// add html to this div</span>
    &lt;div id = 'ok2'>&lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok2');
    
    <span class = "comments">// generate the html here</span>
    x.innerHTML = '&lt;p> Yes we did it&lt;p';
    
    <span class = "comments">// view the results</span>
    console.log(x.children[0]);</pre>
    
    <p>This would be the same as creating a p element, creating a text node, appending that node to the element and appending the node and element to the div element. 
    
    <span class = "nl">Now, let's see how this differs from the OuterHTML property. We know that innerHTML creates and appends an element to the inside of another element, outerHTML simply replaces the first element with the new text.</span></p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// add html to this div</span>
    &lt;div id = 'ok2'> alright then. &lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok2');
    
    <span class = "comments">// generate the html here</span>
    x.outerHTML = '&lt;p id ="new"> Yeah I changed it &lt;p>';
    
    <span class = "comments">// locate the replaced element</span>
    var x = document.getElementById('new');
    
    <span class = "comments">// view the results</span>
    console.log(x);</pre>
    
    <p>In our next section we are going to wrap up working with the DOM object by going into more functions and properties. Eventually we will get into events.</p>    
    
<hr />
<br />
<a href="Jscript29.php">Previous</a>
<span class = "next"><a href="Jscript31.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>