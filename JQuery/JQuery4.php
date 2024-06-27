<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Advanced Event methods - JQuery Web Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<script src="../jquery-3.3.1.min.js">  </script>     
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_JQuery.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Advanced Event methods - JQuery Web Development</h1>
    
<h2>Advanced Event functions</h2>
    
    <p>The first thing we are going to look at is called the 'event' object. This is just a parameter that we can use in order to determine certain properties of the event.  First, let's look at a code example.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
$(document).click( function(<b>evt</b>) {
    var xPos = evt.pageX;
    var yPos = evt.pageY;
    alert('X: ' + xPos + ' Y: ' + yPos);
});</pre>
<br />
    
<em>Example:</em>
<p id="ok">Display results here.</p>
<button id="remove">Remove</button>
    
<script>
$(document).click( function(evt) {
    var xPos = evt.pageX;
    var yPos = evt.pageY;
    $('#ok').after('<span class = "position">&emsp; X: ' + xPos + ' Y: ' + yPos + '</span>');
    $('#remove').click( function() {
       $('.position').remove();
    });
});
</script>
    
    <p>Everytime I click the document, the 'event' object will store the x and y axis of the position of the cursor. 
        
    <span class = "nl">The event object can store up to eight different properties: pageX (broswer distance), pageY, screenX (monitor distance), screenY, shiftKey (if pressed), which (determines the key pressed), target (element clicked), data (used with the 'on' function).</span></p>   
    
    <hr />
    
    <!-- stopping an event -->
    <h3>Stopping an Event</h3>
    
        <p>Events are a normal part of the webpage, when you click a link it goes to a new window, when you submit a form it sends that form with the fields to its destination.  However, using jQuery you can halt these events using the 'preventDefault()' function.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class = "comments">// html</span>
&lt;a href='http://www.google.com'>Link&lt;/a>

<span class = "comments">// script</span>
$('a').click( function (evt) {
    evt.preventDefault();
});</pre>
<br />    
<em>Example:</em><br /><br />
<a id = "ok1" href="JQuery.php">Link</a>
<script>
$('#ok1').click( function (evt) {
    evt.preventDefault();
});
</script>
    
    <p>In this example I created a link to the first jQuery page, you can tell because if you hover over the link, its destination appears in the bottom left corner of the browser window. However, since I added my 'preventDefault()' method to the event object, the link no longer takes users to that page. The same affect can be accomplished if you return false to the end of an event.</p>
    
    <hr />
    
    <!-- Removing events -->
    <h3>Removing Events</h3>
    
        <p>There are times when you might want to remove an event from happening. In this case you can use the 'off' method and pass the name of the event in the parameters.
    
    <span class = "nl">Let's look at an example of this using the hover event.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class = "comments">// html</span>
&lt;p id='p'> hover &lt;/p>

<span class = "comments">// script</span>
$('#p').hover( 
    function() { $('#p1').show(); },
    function() { $('#p1').hide();  }
);

$('#disable').click( function() {
    $('#p').off('mouseenter mouseleave');
});</pre>
<br />    
<em>Example:</em>
<p id='p'>Hover over here</p>
<p id='p1' style='display: none'>Hidden codes, muahahahaha</p> 
<button id="btn1">Disable</button> <button id="btn2">Enable</button>
    
<script>
$('#p').hover( 
    function() { $('#p1').show(); },
    function() { $('#p1').hide();  }
);    
    
$('#btn1').click( function() {
    $('#p').off('mouseenter mouseleave');
});
    
$('#btn2').click( function() {
    $('#p').hover( 
        function() { $('#p1').show(); },
        function() { $('#p1').hide();  }
    )    
});
</script>
    
    <p>In the example above I have a paragraph where if I hover over it, it will reveal the hidden text. Yet, if I decide to disable that feature by clicking the disable button, then this will no longer take place. Notice, that the hover method is composed of two events 'mouseenter' and 'mouseleave', so I must include both of those methods for this off feature to work (or I can leave the parameter blank, and all events will be removed).</p>
    
    <hr />
    
    <!-- on method -->
    <h3>On Method (Creating Events)</h3>
    
        <p>Previously we talked about the off method and how we can use this to remove an event, or even multiple events. If there is an off method then shouldn't there also be an on method? Let's look at what an 'on' method does in terms of creating events.
    
    <span class = "nl">First let's look at the outline of the parameters which you can use to pass to this method: $('selector).on('event', selector, data, functionName). Now, let's look at an example of this.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class = "comments">// html</span>
&lt;button id='btn'> click me &lt;/button>

<span class = "comments">// event handlers on('event', selector, object literal, functionName)</span>
$('#btn').on('click', function() {
    alert('You clicked the button');
});</pre>
<br />    
<em>Example:</em><br /><br />
<button id = "btn3">Click me</button>
<script>
$('#btn3').on('click', function() {
    alert('You clicked the button');
});
</script>
    
    <p>Let's say you wanted to seperate the data from the alert box into a variable. Then you could pass that variable into the parameter, and let's use a seperate function intead of an anonymous function.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
var <span class = "red">buttonMessage</span> = { <span class = "highlight3">message</span> : 'You clicked me'};

function button (evt) {
    alert(evt.data.<span class = "highlight3">message</span>);
}

$('#btn').on('click', <span class = "red">buttonMessage</span>, button);</pre>
<br />    
    
<em>Example:</em><br /><br />
<button id = "btn4">Click me</button>
<script>
var buttonMessage = { message : 'You clicked me'};

function button (evt) {
    alert(evt.data.message);
}

$('#btn4').on('click', buttonMessage, button);
</script>
    
    <p>Here we were able to seperate the event into different parameters, let's try to create multiple events using the on method and see how short our code is.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
var buttonMessage = { message : 'You clicked me'};
var hoverMessage = { message : 'You hovered over me'};

function button (evt) {
    alert(evt.data.message);
}

$('#btn').on('click', buttonMessage, button);
$('#btn2').on('mouseover', hoverMessage, button);</pre>
<br />    
    
<em>Example:</em><br /><br />
<button id = "btn5">Click me</button> <button id ='btn6'>Hover over me</button>
<script>
var buttonMessage = { message : 'You clicked me'};
var hoverMessage = { message : 'You hovered over me'};

function button (evt) {
    alert(evt.data.message);
}

$('#btn5').on('click', buttonMessage, button);
$('#btn6').on('mouseover', hoverMessage, button);
</script>    
    
    <p>Now we can use the same funtion multiple times changing just the data, and we can pass different events to trigger that function.</p>
    
<hr />
    
<h2>Event Delegates</h2>
    
    <p>Event delegation is based strongly on this concept that we only need to create one event handler in order to handle multiple events. The more event handler's that a page contains the more memory is required and the slower the processing will be when users are trying to interact with the page.
    
    <span class = "nl">Let's say that you wanted to create an event where everytime you clicked on a paragraph element it changed the color to red. It would be a waste of time to create an id and a handler for every p element in the document.</span>
    
    <span class = "nl">The problem with this situation is that the code will only work for elements which are already on the page once it is generated. Elements created dynamically cannot execute this code, so in order to solve this problem we can create an event which detects the parent element instead.</span>
    
    <span class = "nl">Let's look at an example of this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a handler which detects every p element in the body</span>
    $('body').on('click', 'p', function() {
        $(this).css( 'color' , 'red' );
    });</pre>
    
    <p>In the next section we are going to get into using more methods for detecting previous vs next elements in the dom and for detecting the status of css on each element.</p>
    
    
<br />
<hr />
    
<a href="JQuery3.php">Previous Page</a>
<span class = "next"><a href='JQuery5.html'>Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>