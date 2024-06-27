<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Forms</title>
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

<h1>Javascript - Forms</h1>
    
    <p>In this section we are going to be talking about using forms for handling input and validating that information via javascript.</p>

<hr />    
    
<h2>Form Elements</h2>    
    
    <p>So far we have become very accustomed to using the 'id', 'classname' or 'tagname' of an element in order to store its location in our variables.  We are going to use another way to identify form elements or forms itself using the 'name' attribute.
    
    <span class = "nl">Let's look at an example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;form name='ok'>
        &lt;label>first:&lt;/label>
        &lt;input type = 'text'/>
        &lt;input type = 'submit'/>    
    &lt;/form>
    
    <span class = "comments">// script</span>
    <span class = "comments">// we could use the index to determine which form</span>
    var x = document.forms[0];
    
    <span class = "comments">// we could use the name</span>
    var y = document.forms['ok'];
    
    <span class = "comments">// elements array holds all the elements of form</span>
    y.elements[1].style.color = 'red';
    
    <span class = "comments">// determine the amount of input elements in the form</span>
    console.log(document.forms['ok'].elements.length);</pre>
    
    <p>Our forms also have two events which we can use to control how our user interacts with it, the submit and the reset events.
    
    <span class = 'nl'>Let's make another form but this time include a little more code to check that the fields aren't left empty.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;form name='ok1'>
        &lt;label>first:&lt;/label>
        &lt;input name = 'first' type = 'text'/>
        &lt;label>second:&lt;/label>
        &lt;input name = 'second' type = 'text'/>
        &lt;label>third:&lt;/label>
        &lt;input name = 'third' type = 'text'/>
        &lt;input value='send' type = 'submit'/>   
    &lt;/form>
    
    <span class = "comments">// script</span>
    var x = document.forms['ok1'];
    
    <span class = 'comments'>// value property controls the value attribute</span>
    x.elements[0].value = 'first field';
    
    <span class = 'comments'>// we can use the name attribute to identify the field</span>
    x.elements['second'].value = 'second field';
    
    <span class = 'comments'>// check that field names don't remain blank</span>
    <span class = 'comments'>// this will only fire when submit button is pressed</span>
    x.onsubmit = function(event) {
        if(x.elements[0].value == '' || x.elements[1].value == '' || 
           x.elements[2].value == '') {
            alert('input fields cannot be left blank');
            return false;
        } else {
            return true;
        }
    };</pre>
    
    <p>Returning a false value prevents the form from being submit. We can also use regular expressions to determine whether the input data is in the form of a string or an integer.
    
    <span class = "nl">Let's create another form with this time using events on the input boxes to determine the type of characters being entered.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;form name='ok2'>
        &lt;label>first:&lt;/label>
        &lt;input name = 'first' type = 'text'/>
        &lt;span id ='err'>&lt;/span>
        &lt;input value='send' type = 'submit'/>   
    &lt;/form>
    
    <span class = "comments">// script</span>
    var x = document.forms['ok2'];
    
    <span class = "comments">// fire this event once the user leaves this text box</span>
    x.elements['first'].onblur = function(event) {
        if(/[^\d]/.test(event.target.value)) {
            document.getElementById('err').innerHTML = 'please insert a number';
        } else {
            document.getElementById('err').innerHTML = '';
        }
    }</pre>
    
    <p>Great, so we have an idea of how to use forms, let's see if there are functions which can help use formally validate our input boxes.</p>
    
    <hr />
    
    <h2>Validity</h2>
    
        <p>Validity is a series of functions we can use to check our form elements. I will list several below.</p>
    
    <ul id='li'>
        <li><b>patternMismatch:</b> returns true if the value doesn't match the pattern.</li>
        <li><b>rangeOverflow:</b> true if value is larger then the 'max' value. </li>
        <li><b>rangeUnderflow:</b> true if the value is smaller then the 'min' value. </li>
        <li><b>tooLong:</b> true if value has more characters then maxlength property.</li>
        <li><b>typeMismatch:</b> true if type isn't matched correctly for formats (phone or email).</li>
        <li><b>valueMissing:</b> true if the field is marked required but has no value.</li>
    </ul>
    
    <p>Let's see an example of how we can use validity to check our forms.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;form name='ok3'>
        &lt;label>first:&lt;/label>
        <span class = "comments">// html 5 required attribute</span>
        &lt;input name = 'first' type = 'text' required/>
        &lt;label>second:&lt;/label>
        <span class = "comments">// number and under the min (for underflow) or over max(for overflow)</span>
        &lt;input name = 'second' type = 'number' min='10'/>
        &lt;label>third:&lt;/label>
        <span class = "comments">// type mismatch set to email or phone</span>
        &lt;input name = 'third' type = 'email'/>
        &lt;input value='send' type = 'submit'/>   
    &lt;/form>
    
    <span class = "comments">// script</span>
    var x = document.forms['ok3'];
    
    x.elements['first'].onblur = function(event) {
        if(event.target.validity.valueMissing) {
            alert('please insert a value');
        }
    };
    
    x.elements['second'].onblur = function(event) {
        if(event.target.validity.rangeUnderflow) {
            <span class = "comments">// we can also use validationMessage</span>
            alert(event.target.validationMessage);
        }
    };
    
    x.elements['third'].onblur = function(event) {
        if(event.target.validity.typeMismatch) {
            alert(event.target.validationMessage);
        }
    };</pre>
    
<hr />
<br />
<a href="Jscript38.php">Previous</a>
<span class = "next"><a href="Jscript40.php">Next Page</a></span>
<br /><br />    
    
</div>
</div>
<!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>