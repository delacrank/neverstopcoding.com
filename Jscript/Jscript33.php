<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - DOM levels 2 &amp; 3</title>
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

<h1>Javascript - DOM levels 2 &amp; 3</h1>
    
    <p>In this section we will go over some of the properties used to determine an elements height, width and location relative to the window/viewport.
        
<hr />
        
<h2>Client Properties</h2>
    
    <p>When using the word client I am referring to the dom elements and their properties. There are four properties which we can use to determine width, height and location: offsetHeight, offsetWidth, offsetTop and offsetWidth.
    
    <span class = "nl">I can create an example of an element and display its properties.</span></p>
     
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p id ='ok'>Example element&lt;/p>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok');
    
    <span class ="comments">// display the properties for our p element</span>
    <span class ="comments">// height: 29</span>
    console.log(x.offsetHeight);
    <span class ="comments">// width: 720</span>
    console.log(x.offsetWidth);
    <span class ="comments">// x position: 328</span>
    console.log(x.offsetLeft);
    <span class ="comments">// y position: 979</span>
    console.log(x.offsetTop);</pre>
    
    <p>If for example I wanted to obtain the height of the entire document, then I could use 'document.body.offsetHeight'. Of course I would need to include the script towards the bottom of my document, because it can only measure the html generated before the script, anything afterwards would not be read.
    
    <span class = "nl">If for example I wanted to get the properties for an elements height and width, without taking into account their margins or scroll bars. I would require a different property called clientHeight, clientWidth.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p id ='ok1' style='margin-top: 20px; margin-left: 20px'>Example element&lt;/p>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok1');
    
    <span class ="comments">// display height and width minus border, margin or scroll bars</span>
    <span class ="comments">// height: 30</span>
    console.log(x.clientHeight);
    <span class ="comments">// width: 631</span>
    console.log(x.clientWidth);</pre>
    
<hr />

<h2>Scroll Dimensions</h2>    

    <p>There are four properties to the scroll dimensions: scrollWidth, scrollHeight, scrollTop and scrollLeft. The first two properties just reveal the entire width or height of element hidden and revealed, while the second 'scrollTop' and 'scrollLeft' reveal the portions of the document which can be scrolled to.
    
    <span class = "nl">An element can usually be given scroll bars if you use the overflow property with css, let's see an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html, css 'white-space: nowrap' ensures line stays on single row</span>
    &lt;p id ='ok2' style='overflow-x: scroll; white-space: nowrap>This line of text is too 
    long for the width of the page, so I am using the over flow property. Thanks.&lt;/p>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok2');
    
    <span class ="comments">// set the scrollLeft property to 40 </span>
    <span class ="comments">// this should cause the html to have scrolled 40 pixels to the right</span>
    x.scrollLeft = 40;
    
    <span class ="comments">// display all the scroll properties</span>
    <span class ="comments">// height: 29</span>
    console.log(x.scrollHeight);
    <span class ="comments">// width: 904</span>
    console.log(x.scrollWidth);
    <span class ="comments">// scrollTop: 0</span>
    console.log(x.scrollTop);
    <span class ="comments">// scrollLeft: 40, we manipulated this property</span>
    console.log(x.scrollLeft);</pre>
    
 <hr />
    
<h2>Absolute position</h2>
    
    <p>There is another function which will return an array of the absolute position of our object, its called 'getBoundingClientRect()'. Let's see a quick example before moving on.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p id ='ok3'> position &lt;/p>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok3');
    
    <span class = "comments">// left position</span>
    console.log(x.getBoundingClientRect().left);
    <span class = "comments">// right position</span>
    console.log(x.getBoundingClientRect().right);
    <span class = "comments">// top position</span>
    console.log(x.getBoundingClientRect().top);
    <span class = "comments">// bottom position</span>
    console.log(x.getBoundingClientRect().bottom);
    
    <span class = "comments">// also contains height and width</span></pre>
    
    <p>In our next section we are going to dive into using events.</p>
    
<hr />
<br />
<a href="Jscript32.html">Previous</a>
<span class = "next"><a href="Jscript34.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>