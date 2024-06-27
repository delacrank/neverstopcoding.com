<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Events part 4</title>
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

<h1>Javascript - Events part 4</h1>
    
    <p>In this section we will talk about using the keyboard events and and loading events.</p>
    
<hr />
    
<h2>Keyboard Events</h2>
    
    <p>Theres basically three keyboard events, they can be used on all elements but are best seen when being used on the input box.</p>
    
    <ul id = 'li'>
        <li><b>keydown:</b> fires repeatedly when key is pressed down.</li>
        <li><b>keypress:</b> same as keydown.</li>
        <li><b>keyup:</b> fires once when key is released.</li>
        <li><b>input:</b> fires once only in areas where text can be inserted.</li>
    </ul> 
    
    <p>Let's look at one event property called the 'keyCode', this is an event which can detect the key pressed using a key code. Each key is typically identitified using ascii representation.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;input type='text' id = 'ok'/>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok');
    
    x.onkeydown = function(event) {
        alert(event.keyCode);
    }</pre>
    
    <p>Our script will create a pop up containing the keycode for every key we press, if I wanted to display the actual key I could use the property 'key'. However, if I wanted to use the unicode inside of the ascii code, then I would use the 'charCode' property. 
    
    <span class = "nl">Notice, that to use this property can only work with keypress events, otherwise it will register as a zero.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;input type='text' id = 'ok'/>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok');
    
    x.onkeypress = function(event) {
        alert(event.charCode);
    }</pre>
    
    <p>Another keyboard event is the textInput event, which focuses primarily on capturing events related to actual characters, this event will only work on fields that allow insertion of text, not just focus like the keypress event.
    
    <span class = "nl">The property is called 'data' for this event.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;input type='text' id = 'ok'/>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok');
    
    x.oninput = function(event) {
        alert(event.data);
    }</pre>
    
    <hr />
    
    <h2>Loading Events</h2>
    
    <p>There are several events which you may want to use for waiting for the document to load, or for showing a pop up before your user leaves your page. These types of events deal with the window object and ones which are opened or closed.

    <span class= 'nl'>Let's start by a very important event which jquery uses as the 'ready' function. </span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    document.addEventListener("DOMContentLoaded", function(event) {
        <span class = "comments">// insert your code here</span>
    });</pre>
    
    <p>If you wanted to ensure that all your images and html resources were loaded before your user starts to interact with the page, this would be one way to achieve that.
    
    <span class = "nl">Now, let's look at another event which fires when the right mouse button is clicked, it sort of handles the complications of wanting to create a custom menu. Which gets further complicated due to an OS like mac which may require holding ctrl and then clicking (one mouse button) in order to open the context menu.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;p id='ok1'> Right click &lt;/p>
    
    &lt;p id='menu' style='display: none'> a menu &lt;/p> 
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok1');
    
    <span class = "comments">// use prevent default to prevent the actual context menu from showing</span>
    x.oncontextmenu = function(event) {
        event.preventDefault();
        document.getElementById('menu').style.display = 'block';
    }</pre>
    
    <p>Let's look at one more event which will be able to display information to our users before they decide to leave the page. This is called the 'beforeunload' event, because it triggers before the window is unloaded.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// note, the message will not display in chrome</span>
    document.body.onbeforeunload = function() {
        return = 'are you sure you want to leave?';
    }</pre>
    
    <p>In the next section we will talk about event delegation.</p>
    
<hr />
<br />
<a href="Jscript36.html">Previous</a>
<span class = "next"><a href="Jscript38.html">Next Page</a></span>
<br /><br />    
    
</div>
</div>
<!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>