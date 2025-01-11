<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Events part 2</title>
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

<h1>Javascript - Events part 2</h1>
    
    <p>In this section we are going to talk about the event object and the different types of events.</p>
    
<hr />
    
<h2>Event Object</h2>
    
    <p>The event object consists of a several properties and functions which will help us to determine the type of event, phase, target, prevent the event, or stop all events.
    
    <span class = "nl">Let's start by looking at some of the basic properties and how we can use them.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p id = 'ok1'> click &lt;/p>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok1');
    
    <span class ="comments">// this will display the type of event</span>
    x.onclick  = function(event) {
        alert(event.type);
    }; </pre>
    
    <p>Here, we pass in the event object into our function, let's try another type of event.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p id = 'ok2'> mouse over &lt;/p>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok2');
    
    <span class ="comments">// this will display the type of event</span>
    x.onmouseover = function(event) {
        alert('event type: ' + event.type + '\n event target: ' + event.target);
    }; </pre>
    
    <p>Now, let's see how we can prevent some of the default behavior of an html element like a link which usually will navigate once we click on it. 
    
    <span class = "nl">This event can be canceled using the 'preventDefault()' function or the 'stopPropagation()' function, which stops all event bubbling.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;a href = 'http://www.google.com' id = 'ok3'> link &lt;/a>
    
    <span class ="comments">// script</span>
    var x = document.getElementById('ok3');
    
    <span class ="comments">// cancel default behavior and the location</span>
    x.onclick = function(event) {
        event.preventDefault();
        alert('location: ' + event.target.href);
    }; </pre>
    
<hr />
    
<h2>UI (user interface) Events</h2>

    <p>There are about 7 or more types of events: UI events (browser based), focus, mouse, wheel, keyboard, composition and mutation events. Let's start with user interface events.
    
    <span class = "nl">These events are generally triggered by objects in the browser being motivated, windows loading, elements being scrolled, form boxes being selected, windows getting resized, or windows being unloaded. </span>
    
    <span class = "nl">We can start by looking at a load event, this means an html element was just loaded, either a new window, new element created or existing element just loaded.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// the element has to be loaded, thats why I used iframe</span>
    &lt;iframe onload = "alert('say hi')"> this is just a div &lt;/iframe>
    
    <span class ="comments">// with an event listener</span>
    &lt;img src = 'image.jpg' id = "ok4"/>
    
    <span class="comments">// script</span>
    var x = document.getElementById('ok4');
    
    var handler = function() {
        alert('image loaded');
    };
    
    x.addEventListener('load', handler, false);</pre>
    
    <p>Let's look at another example with the listener set for a scroll event this time.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// html</span>
    &lt;p style = "overflow: scroll; white-space: nowrap"> this is just a div this is just a
    this is just a divthis is just a divthis is just a div divthis is &lt;/p>
    
    <span class="comments">// script</span>
    var x = document.getElementById('ok4');
    
    var handler = function() {
        alert('scrolled');
    };
    
    x.addEventListener('scroll', handler, false);</pre>
    
    <p>There are a few focus events which are used for determining if an element has focus on it. These events in the past were called 'focus' or 'blur', but they are now called 'focusin' and 'focusout'.
    
    <span class = "nl">In the next section we will cover mouse events.</span></p>
    
    
    
    
    <script>
    var x = document.getElementById('ok4');
    
    var handler = function() {
        alert(x.scrollTop);
    };
    
    x.addEventListener('scroll', handler, false);</script>
    
    
  
    
    
    
<hr />
<br />
<a href="Jscript34.php">Previous</a>
<span class = "next"><a href="Jscript36.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>