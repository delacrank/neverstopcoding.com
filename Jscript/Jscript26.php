<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - DOM part 1</title>
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

<h1>Javascript - DOM part 2</h1>

    <p>In this section we will go over how to add or remove elemenets from an existing group. We can do this using two functions 'appendChild' or 'insertBefore' in order to add elements to a group. 
        
    <span class = "nl">Likewise, we can also replace or remove children from a group using 'removeChild' or 'replaceChild'.</span></p>
    
    <hr />
    
<h2>Append &amp; Insert Before</h2>
    
    <p>Let's look at how we can use the append function to add an element to an exissting unordered list.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// the html</span>
    &lt;ul id = 'ok'>&lt;li>one&lt;/li>&lt;li>two&lt;/li>&lt;li>three&lt;/li>&lt;/ul>
    
    <span class="comments">// node you want to append</span>
    &lt;li id = 'ok1'>four&lt;/li>
    
    var x = document.getElementById('ok');
    var y = document.getElementById('ok1');
    
    x.appendChild(y);</pre>
    
    <p>Let's say we want to take it a step further and move an element from the front of the list to the end of it using the append function.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// the html</span>
    &lt;ul id = 'ok2'>&lt;li>one&lt;/li>&lt;li>two&lt;/li>&lt;li>three&lt;/li>&lt;/ul>
    
    var x = document.getElementById('ok2');
    
    <span class = "comments">// store the node of the first child in this variable</span>
    var y = x.firstChild;
    
    <span class = "comments">// append that node to the end of the list</span>
    x.appendChild(y);</pre>
    
    <p>Now, let's see how the 'insertBefore' function works, similar to the append function it adds an element to an existing one. Rather than adding an element to the back of the list, the 'insertBefore' function takes two arguments one which is the node and the other which is the location of that node.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// the html</span>
    &lt;ul id = 'ok3'>&lt;li>one&lt;/li>&lt;li>two&lt;/li>&lt;li>three&lt;/li>&lt;/ul>
    &lt;li id = 'ok4'>four&lt;/li>
    &lt;li id = 'ok5'>five&lt;/li>
    
    <span class = "comments">// store the node of unordered list</span>
    var x = document.getElementById('ok3');
    <span class = "comments">// store list item into a var</span>
    var y = document.getElementById('ok4');
    <span class = "comments">// store the second list item into a var</span>
    var z = document.getElementById('ok5');
    
    <span class = "comments">// insert the node into the first element of our ul</span>
    x.insertBefore(y, x.firstChild);
    
    <span class = "comments">// insert the node into the middle element of our ul</span>
    x.insertBefore(z, x.children[2]);</pre>
    
    <p>Let's take a look at two other functions, replace and remove.</p>
    
    <hr />
    
    <h2>Replace &amp; Remove Child functions</h2>
    
        <p>In addition to being able to append elements to other parent elements, or before certain elements, javascript has 2 additional functions which allow elements to be replaced or removed.
    
        <span class = "nl">The 'replaceChild' function takes 2 arguments the node to be replaced and the new node to take its existing place, while the 'removeChild' function just takes the singles argument for the node that needs to be removed.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    &lt;ul id = 'ok5'>&lt;li>one&lt;/li>&lt;li>two&lt;/li>&lt;li>three&lt;/li>&lt;/ul>
    
    &lt;li id = 'ok6'>four&lt;/li>
    
    var x = document.getElementById('ok5');
    
    var y = document.getElementById('ok6');
    
    <span class = "comments">// replace the second element with this new node</span>
    x.replaceChild(y, x.children[1]);
    
    <span class = "comments">// remove the last element</span>
    x.removeChild(x.lastChild);</pre>        
    
    <p>In our next section we are going to look at the document and element types.</p>
        
<hr />
<br />
<a href="Jscript25.php">Previous</a>
<span class = "next"><a href="Jscript27.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>