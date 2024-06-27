<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Adding/Removing Classes - JQuery Web Programming</title>
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

<h1>Adding/Removing Classes - JQuery Web Development</h1>
    
<!-- Adding classes -->    
<h2>Adding/Removing Classes</h2>
    
    <p>So, we know how to select elements using Jquery, now lets learn how to modify those elements by adding classes to our selected elements.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;style>
.blue { color: blue; }
&lt;/style>

&lt;script>
<span class="comments">// select our element by id called 'ok'</span>
&lt;p id="ok">This ia a paragraph&lt;/p>

<span class="comments">// add a class called blue to our element</span>
$("#ok").addClass('blue');

<span class="comments">// We can remove this class just as easily</span><br />$("#ok").removeClass('blue');
&lt;/script> </pre>
<br />
    
<em>Example:</em>
<p class = "ok1">This is a paragraph</p>

<button class = "btn1">Add Class</button> <button class = "btn2">Remove Class</button>    
    
<script>
$('.btn1').click(function(){
    $('.ok1').addClass('blue');
});    

$('.btn2').click(function(){
    $('.ok1').removeClass('blue');
});
</script>    
    
<br />
<hr />
    
<!-- Hiding elements -->
<h3>Hiding &amp; Showing elements</h3>
    
    <p>On top of adding classes to certain elements using our css styles, we can also hide certain elements.</p>
   
<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// select our element by id called 'ok'</span>
&lt;p id="ok">This ia a paragraph&lt;/p>

<span class="comments">// add a class called blue to our element</span>
&lt;script> $("#ok").hide(); &lt;/script>

<span class="comments">// We can show the element using the show function</span>
&lt;script> $("#ok").show(); &lt;/script></pre>
<br />
    
<em>Example:</em><br />
<p id="ok">This is a paragraph</p>

<button class = "btn1">Hide</button> <button class = "btn2">Show</button>    
    
<script>
$('.btn1').click(function(){
    $('#ok').hide();
});    

$('.btn2').click(function(){
    $('#ok').show();
});
</script>
    
    
<br />
<hr />
    
<!-- Chaining functions -->
<h3>Chaining functions</h3>
    
    <p>JQuery allows you to chain multiple functions within one line of code.  We can change the class of an element, hide it, reveal it, etc. almost so it would look like an animation.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;p id="ok">Do something&lt;/p> 
    
<span class="comments">// Hide this, wait for half a second, then fade it back again</span>
$('#ok').hide().delay(500).fadeIn(1400); </pre>
<br />
    
<em>Example:</em>
<p id = "ok2">Do something</p>
<button id="btn3">Animate</button>    
    
<script>
$('#btn3').click(function(){
    $('#ok2').hide().delay(500).fadeIn(1400);
});    
</script>
    
<hr />
<br />
    
<a href="JQuery1.php">Previous Page</a><span class="next">    
<a href="JQuery3.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>