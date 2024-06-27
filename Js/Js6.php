<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Events - Javascript Web Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">   
<script type="text/javascript"> </script>    
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Js.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Events - Javascript Web Development</h1>
    
<!-- Events -->
<h2>Events</h2>

    <p>In this section we are going to talk about the various types of events and how to handle them.</p>
    
<dl>
    <dt>UI (User interface) Events</dt>
    <dd>There are five types of UI events that can happen based on the user interacting with the browser.  When the browser loads, when it unloads, when an error is triggered, when the browser window has been resized, and when the user scrolls up, down, left or right.</dd>
    
     <dt>Keyboard Events</dt>
    <dd>This one is simple, keydown, keyup, keypress (char inserted).  The variance here is determined by which key is being pressed or released.</dd>
    
     <dt>Mouse Events</dt>
    <dd>There are quite a few mouse events to take into consideration.  When a user: clicks, dbclick (double click), mouse down (presses a mouse button while hovering over an element), mouseup (releases the button), mousemove, mouseover (moves the mouse while hovering over an element), mouseout (moves mouse off an element). </dd>
    
     <dt>Focus Events</dt>
    <dd>There are only two focus events, focusing is when an element is selected.  I'm sure you can guess, if you can't it's: focusin and focusout or focus and blur.</dd>
    
     <dt>Form Events</dt>
    <dd>In terms of working with html forms javascript has many events.  There is quite a variety with all these events so it isn't actually necessary to memorize them all: input (element has changed in terms of the input field), change (can apply to checkbox, radio button), submit (form is sbumitted through either a button or key), reset (form is reset), cut (cuts content from a form), copy, paste, select (some text is selected in a form field). </dd>
</dl>

    <hr />
    
<!-- handling events -->
<h3>Handling events</h3>
    
    <p>Typically, when handling an event you want to have three forms of data being targeted.  The '<span class = "highlight">element</span>' itself, the '<span class = "highlight2">event</span>', and finally the '<span class = "highlight3">function name</span>'.  Let's look at an example of this below.   </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
function checkUsername() {
    <span class="comments">// code to check username</span>
}
    
<span class="comments">// locate the user name</span>
var el = document.getElementById('username');
    
<span class="comments">//check the username once the user has left the element</span>
<span class = "highlight">el</span>.<span class = "highlight2">onblur</span> = <span class = "highlight3">checkUsername</span>;</pre>
    
<p>Let's look at an example of how we can determine the length of a specific word using an event.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
function checkUsername() {
    var elMsg = document.getElementById('feedback');       
    if (this.value.length &lt; 5) {
        elMsg.textContent = 'Username must be 5 characters or more';
    } else {
        elMsg.textContent = ' ';
    }
}

var elUsername = document.getElementById('username');
elUsername.onblur = checkUsername;</pre>

<p>Notice how I didn't use the onblur attribute as part of my html input, by setting the username to an id and then setting my html input to that element id, I won't have to worry about how many browsers support that functionality.</p>
    
<hr />    
    
<!-- Event listeners -->
<h3>Event Listeners</h3>
    
    <p>An event listener is used for dealing the order at which events fire and determines which functions should be fired in the instance of an event.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
function checkUsername() {
    var elMsg = document.getElementById('feedback');      
    if (this.value.length &lt; 5) { 
        elMsg.textContent = 'Username must be 5 characters or more';
    } else {
        elMsg.textContent = ' ';
    }
}

var elUsername = document.getElementById('username');
el.addEventListner('blur', checkUsername, false);</pre>  
    
<br />
<hr />
    
<!-- Parameters and event listeners -->
<h3>Parameters and event handlers &#38; listeners</h3>

    <p>Passing parameters in an event handler is difficult because you cannot have function names once the hanlder or listener is declared.  I will show you how to pass a parameter in the example below.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
var elUsername = document.getElementById('username');
var elMsg = document.getElementById('feedback');
    
function checkUsername(minLength) {
    if (elUsername.value.length &lt; minLength) {
    elMsg.textContent = 'Username must be ' + minLength + ' characters or more';
    } else {
    elMsg.innerHTML = ' ';
    }
}
    
elUsername.addEventListener('blur', function() { checkUsername(5); }, false);</pre>
    
<hr />
<a href="Js5.html">Previous Page</a>  <span class="next"><a href="Js7.html"> Next page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>