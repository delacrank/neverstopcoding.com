<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Event methods - JQuery Web Programming</title>
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

<h1>Event methods - JQuery Web Development</h1>
    
<h3>Event methods</h3>
    
    <p>We went over events in Javascript and it seemed simply enough, events in Jquery are very similar.  In fact we've been using events for the past several examples, the event being used is called the 'click' event.</p>

<em>Code:</em>
<!-- code -->    
<pre class="code">$('.btn').click( function() {
    alert('hello');
});</pre>
<br />
    
<em>Example:</em><br /><br />
<button class = 'btn'>Click here</button>
    
<script>
$('.btn').click( function() {
    alert('hello');
});
</script>
    
    <p>In the example above we are using an anonymous function in order to make the button perform some type of action. We can also just declare a function normally and reference it in the click parameter like so.</p>
    
<em>Code:</em>
<!-- code -->    
<pre class="code">
function SayHello() {
    alert('hello');
}

$('.btn').click(SayHello);</pre>
<br />
    
<em>Example:</em><br /><br />
<button class = 'btn'>Click here</button>
    
<script>
function SayHello() {
    alert('hello');
}

$('.btn').click(SayHello);
</script>
    
    <p>Notice how we don't have to add the opening and closing paranthese to the function when calling it 'click(SayHello)', <u>not</u> 'click(SayHello())'.</p>

<hr />    
    
<!-- Mouse events -->
<h3>Mouse Events</h3>
    
    <p>Let's look at other examples of using events, first let me list all the possible mouse events and their triggers.</p>
    
    <ul id='li'>
        <li><b>Click:</b> Fires after mouse is clicked and released.</li>
        <li><b>dblclick:</b> Fires after mouse is double clicked quickly.</li>
        <li><b>mousedown:</b> Fires after the mouse button is pressed down.</li>
        <li><b>mouseup:</b> Won't fire until you release the mouse button after pressed.</li>
        <li><b>mouseover:</b> Similar to the hover event, fires when the mouse hovers over an element.</li>
        <li><b>mouseout:</b> Second half the the mouseover event, won't fire until the mouse has left an element.</li>
        <li><b>mousemove:</b> Fires as soon as you move the mouse, used for tracking the current position of the cursor.</li>
    </ul>
    
<p>Let's see an example of the mouseover and mouseout events.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
$('p').mouseover( function() {
    $('p').css( 'color' : 'red' );
});

$('p').mouseout( function() {
    $('p').css( 'color' : 'black' );
});
</pre>
<br />
    
<em>Example:</em>
<p id='ok'>Move the mouse over this paragraph.</p>

<script>
$('#ok').mouseover( function() {
    $('#ok').css( 'color' , 'red' );
});

$('#ok').mouseout( function() {
    $('#ok').css( 'color' , 'black' );
}); 
</script>
    
<hr />
    
<!-- Document / Window Events -->
<h3>Document / Window Events</h3>
    
    <p>Document and window events apply to events which are fired based on the behavior of your browser. This means when you load a new file, resize the window, scroll up or down, or leave a page.
    
    <span class = "nl">Its common to see people add an alert box with the 'unload' event saying, are you sure you want to leave?</span></p>
    
     <ul id='li'>
        <li><b>load:</b> Fires when the web browser finished downloading all of the web pages files (images, links, css, flash, etc.).</li>
        <li><b>resize:</b> Fires when the browser is resized, could be used to change the design like a media query.</li>
        <li><b>scroll:</b> Fires when you drag the scroll bar or use the keyboard to go up and down or left and right.</li>
        <li><b>unload:</b> Fires when a user clicks a link to go to another page, or close the current window/tab.</li>
    </ul>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
$( window ).resize( function() {
    alert('window being resized');
});</pre>
<br />
    
<em>Example:</em>
<p>Try to resize the browser to see what will happen.</p>
<script>
$( window ).resize( function() {
    alert('window being resized');
});    
</script>
    
<hr />
    
<!-- form events -->
<h3>Form Events</h3>
    
    <p>Let's take a look at some of the events we can use in order to work with form submissions. Many of these events work in response to filling out an input box or checking the input fields before the form is submitted.</p>
    
    <ul id = 'li'>
        <li><b>submit:</b> The even is fired when the submit button is pressed.</li>
        <li><b>reset:</b> A reset button allows you to undo changes, maybe the event asks if you are sure you want to reset the fields.</li>
        <li><b>change:</b> Can let the user know if a change was made to a radio button, a selection, etc.</li>
        <li><b>focus:</b> Event fires once a text field, check box, radio button is clicked on. Can give users information on what to do once the field is selected.</li>
        <li><b>blur:</b> The blur event happens when you leave a focused field.</li>
    </ul>
    
    <p>Now let's look at a code example, we will lose focus in this one.</p>
    
<em>Code:</em>    
<!-- code -->
<pre class="code">
<span class = "comments">// Create an event to let the user know what to do</span>
$('#input').focus(function() {
     $(this).css('backgroundColor','yellow'); 
   $(this).after('&lt;span class="validation"> Type your name in here &lt;/span>');
});
    
<span class = "comments">// Here we can remove the information using blur</span>
$('#input').blur(function() {
   $(this).css('backgroundColor','white');
    $('.validation').remove();
});</pre>
<br />
    
<em>Example:</em>
<form>
<p>
    <label>Name:</label> <input id="input" type="text"/>
</p>
<button type="submit">Submit</button>
</form>
    
<script>
$('#input').focus(function() {
     $(this).css('backgroundColor','yellow'); 
   $(this).after('<span class="validation"> Type your name in here </span>');
});
    
$('#input').blur(function() {
   $(this).css('backgroundColor','white');
    $('.validation').remove();
});
</script>
    
<hr />
    
<!-- keyboard events -->    
<h3>Keyboard Events</h3>
    
    <p>Well this section is getting pretty large so let's just go over keyboard events before we continue to move on.</p>
    
    <ul id = "li">
        <li><b>keypress:</b> Fires the moment a key is pressed down, will continue to fire over and over if the key remains pressed.</li>
        <li><b>keydown:</b> Fires once the key is pressed, behaves similar to keypress.</li>
        <li><b>keyup:</b> Fires once the key is released.</li>
    </ul>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
$('#input').keydown( function() {
    $(this).css( 'backgroundColor', 'pink');
});

$('#input').keyup( function() {
    $(this).css( 'backgroundColor', 'lightblue');
});

$('#input').blur( function() {
    $(this).css( 'backgroundColor', 'white');
});
</pre>
    
    
<em>Example:</em>
<form>
<p>
    <label>Name:</label> <input id="input1" type="text"/>
</p>
<button type="submit">Submit</button>
</form>
    
<script>
$('#input1').keydown( function() {
    $(this).css( 'backgroundColor', 'pink');
});

$('#input1').keyup( function() {
    $(this).css( 'backgroundColor', 'lightblue');
});    
    
$('#input1').blur( function() {
    $(this).css( 'backgroundColor', 'white');
});
</script>    
    
<br />
<hr />
    
<a href="JQuery2.php">Previous Page</a>
<span class = "next"><a href="JQuery4.php">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>