<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Events part 3</title>
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

<h1>Javascript - Events part 3</h1>
    
    <p>This section will be used for covering just the mouse events. Button clicks, mouse movements, and mouse wheel events.</p>
    
<hr />
    
<h2>Mouse Events</h2>
    
    <p>We have previously covered the click event, which is an mouse event which triggers once the mouse is clicked over an element. Below is a list of some of the moust events and their triggers.</p> 
    
    <ul id = 'li'>
        <li><b>dblclick:</b> two clicks on element, quick sucession.</li>
        <li><b>mousedown:</b> fires when mouse button is pressed.</li>
        <li><b>mouseenter:</b> triggers when cursor enters an elements boundry.</li>
        <li><b>mouseleave:</b> fires repeatedly when mouse is moved around an element.</li>
        <li><b>mouseout:</b> fires when mouse button is pressed.</li>
        <li><b>mouseover:</b> fires when mouse button is pressed.</li>
        <li><b>mouseup:</b> fires when mouse button is pressed.</li>
    </ul> 
    
    <p>Let's look at an example of using one of these events.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;p id = 'ok'>do something&lt;/p>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok');
    
    <span class = "comments">// when this element is double clicked</span>
    x.ondblclick = function() {
        alert('say hello');
    };</pre>
    
    <p>Pretty simple nothing we haven't done before. Let's see some of the properties of the mouse events such as displaying the x and y coordinates of the position of the mouse.</p>
    
    <hr />
    
    <h2>Client and Page Coordinates</h2>
    
    <p>For this next example I will create an element which covers the entire screen, so as to allow the user to click anywhere and display the location of the mouse.
    
    <span class ='nl'>The client coordinates will display the mouse position relative to the viewport where the page coordinates will display the mouse position relative to the entire width or height of the page.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;div id = 'ok1' style='width: 300px; height: 300px; background-color: grey'>&lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok1');
    
    <span class = "comments">// when this element is double clicked</span>
    x.onclick = function(event) {
        alert('X client:' + event.clientX + ', Y client: ' + event.clientY + 
        '\nX page: ' + event.pageX + ', Y page: ' + event.pageY );
    };</pre>
    
    <p>To take it one step further, if you want to display the events relative to just the position of an element, then subtract the coordinates of the page from your mouse coordinates.
    
    <span class = "nl">Example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;div id = 'ok2' style='width: 300px; height: 300px; background-color: grey'>&lt;/div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok2');
    
    <span class = "comments">// when this element is double clicked</span>
    x.onclick = function(event) {
        alert('X element: ' + event.offsetX + 
                 '\nY element: ' + event.offsetY);
    };</pre>
  
    <hr />
    
    <h2>Button and Wheel Events</h2>
    
    <p>There are several other events which can detect, which keyboard button is pressed when the mouse is clicked: 'event.shiftKey', 'event.ctrlKey', 'event.altKey' or 'event.metaKey'. 
    
    <span class = "nl">There are also events which detect which mouse button is pressed 'event.button' with a number for determining whether is it the right (1) or left (2) or mousewheel (4), other numbers correspond to a combination of the buttons being pressed.</span>
        
    <span class = "nl">Using the property 'event.wheelDelta' will determine how much of the mousewheel has been scrolled up or down.</span>        
    
    <p>Let's look at an example of using the wheel event for our scrolling purposes. This uses a different event called 'onwheel'.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;p id='info'>&lt;/p>
    
    &lt;div id="ok3" style="width:200px; height:200px; overflow:auto;">
        &lt;div style="height:2000px; background-color:grey;">&lt;/div>
    &lt;div>
    
    <span class = "comments">// script</span>
    var x = document.getElementById('ok3');
    
    <span class = "comments">// create a function which displays the event.wheelDelta property</span>
    x.onwheel = function (event) {
        var info = document.getElementById('info');
        <span class = "comments">// this variable will hold the value of our event</span>
        var rolled = event.wheelDelta;
        <span class = "comments">// we can display the value of that property here</span>
        info.innerHTML = rolled;
    }</pre>
    
    <p>I think firefox requires a different property called 'event.detail'. Also beaware that screen readers cannot detect mouse events, so code your site according to handle these types of situations. We will discussion keyboard events in our next section.</p>
    
<hr />
<br />
<a href="Jscript35.php">Previous</a>
<span class = "next"><a href="Jscript37.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>