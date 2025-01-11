<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Events part 5</title>
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

<h1>Javascript - Events part 5</h1>
    
    <p>In this section we will be talking about event delegation and understanding when and how to remove events which may be taking up memory (slowing up the page).</p>
    
<hr />
    
<h2>Event Delegation</h2>
 
    <p>Event delegation is necessary when a page uses multiple event handlers all pertaining to the same event. The problem with using all these handlers is that they take up memory in order to save the element id for each variable and event listener.
    
    <span class = "nl">Let's look at an example of where we could have a series of event handlers combined into 1 handler.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;p id = 'one'>one&lt;/p>
    &lt;p id = 'two'>two&lt;/p>
    &lt;p id = 'three'>three&lt;/p>
    
    <span class = "comments">// script</span>
    <span class = "comments">// store the location of the elements in these variables</span>
    var x = document.getElementById('one');
    var y = document.getElementById('two');
    var z = document.getElementById('three');
        
    <span class = "comments">// change the color to red when clicked on</span>
    x.onclick = function(event) {
        event.target.style.color = 'red';
    }
    
    y.onclick = function(event) {
        event.target.style.color = 'green';
    }
    
    z.onclick = function(event) {
        event.target.style.color = 'blue';
    }</pre>
    
    <p>The problem with this code is that we created 3 variables and 3 events all which require the page to allocate memory, imagine we had a 1000 elements and a 1000 events. This would make the page run really slowly.
    
    <span class = 'nl'>Let's see if we can use the same example instead of using memory to store 3 elements and 3 seperate events, lets use one element and one event to handle all of the behavior.</span> </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;p id = 'one'>one&lt;/p>
    &lt;p id = 'two'>two&lt;/p>
    &lt;p id = 'three'>three&lt;/p>
    
    <span class = "comments">// script</span>
    var x = document.body;
        
    <span class = "comments">// create a handler which can use the id of each element</span>
    x.addEventListener( 'click', function(event) {
        var target = event.target;
        <span class = "comments">// create an if statement which checks the tagName first</span>
        if(target.tagName != 'P')
            return;
    
        <span class = "comments">// create switch statement which checks the id of each element</span>
        switch(target.id) {
            case 'one':
                target.style.color = 'red';
                break;
                
            case 'two':
                target.style.color = 'green';
                break;
                
            case 'three':
                target.style.color = 'blue';
                break;
        }
    });</pre>
    
    <p>Pretty cool huh. Our pages should perform substantially faster without all of this overhead.</p>
    
    <hr />
    
    <h2>Removing Events</h2>
    
        <p>Let's talk about removing an event in order to save memory once the page unloads, or if we decide to remove a node from our dom tree which is tied to an event.
    
        <span class = 'nl'>The example below contains code which removes the event handler once the innerHTML is changed. This is bad, because we cannot unallocate the memory used in order to store that handler. 
            
        We need to create our own form of garbage collection.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// html</span>
    &lt;div id = 'ok'> event 
        &lt;button id ='btn'>cool&lt;/button>
    &lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('btn');
    x.onclick = function(event) {
        <span class = "comments">// this is bad, because we have no way to remove this event now</span>
        document.getElementById('ok').innerHTML = 'changed';
    }</pre>
    
    <p>In the example above we have an element which contains an event handler inside of a div. The problem is that once we remove that element via the event (by changing the innerHTML of our parent element), the handler is basically left dangling without a for us to locate and remove it.
    
    <span class = "nl">In this situation we need to set the handler to null before executing the code.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// html</span>
    &lt;div id = 'ok'> event 
        &lt;button id ='btn'>cool&lt;/button>
    &lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('btn');
    x.onclick = function(event) {
        <span class = "comments">// remove the event handler here</span>
        x.onclick = null;
        document.getElementById('ok').innerHTML = 'changed';
    }</pre>
    
    <p>There is much more information on events, such as how to create events which pertain to mobile devices (touch, movement), events which trigger when dom events are added or removed (mutatation events) or how to create events which can be simulated (stimulated events). However, this conclude my section on events.</p>
    
<hr />
<br />
<a href="Jscript37.php">Previous</a>
<span class = "next"><a href="Jscript39.php">Next Page</a></span>
<br /><br />    
    
</div>
</div>
<!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>