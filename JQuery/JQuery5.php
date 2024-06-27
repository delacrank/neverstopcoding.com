<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Jquery functions - JQuery</title>
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

<h1>jQuery functions - JQuery Web Development</h1>
    
    <p>In this section we are going to look at some jquery selectors and how we can use the 'is' function in order to determine the status of an element. We are also going to explore how to use the 'next' or 'previous' functions in order to tranverse the dom.</p>
    
<hr />    
    
<h2>is Function</h2>
    
    <p>The 'is' function is a convient way to detect the css status of an element. Let's look at some of the selectors we can use with the 'is' function.</p>
    
    <ul class = 'li'>
        <li><b>:even :</b> selects all even elements of that type.</li>
        <li><b>:odd :</b> selects all odd elements of that type.</li>
        <li><b>:eq(index) :</b> selects the element which index is equal to the arugment number (starts at zero).</li>
        <li><b>:gt(num) :</b> selects all elements greater then the arguments number.</li>
        <li><b>:lt(num) :</b> selects all elements less then the arguments number.</li>
        <li><b>:even :</b> selects all even elements of that type.</li>
        <li><b>:animted :</b> selects animated elements.</li>
        <li><b>:contains(text) :</b> selects all elements with the specified text.</li>
        <li><b>:has(selector) :</b> selects all elements which contain a child node of the argument type.</li>
        <li><b>:hidden :</b> selects all display: none or hidden elements.</li>
        <li><b>:visible :</b> selects all visible elements.</li>
    </ul>
    
    <p>Let's look at an example of how we can use this function in a program.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;h2>Whats 1 + 1?&lt;h2>
        &lt;p>The answer is two.&lt;/p>
        
    &lt;h2>Whats 2 * 2?&lt;h2>
        &lt;p>The answer is four.&lt;/p>
        
    &lt;h2>Whats 3 ^ 3?&lt;h2>
        &lt;p>The answer is 27.&lt;/p>
        
    <span class = "comments">// script</span>
    <span class ="comments">// hide all the p elements</span>
    $('p').hide();
    
    <span class ="comments">// create a function to display or hide elements based on clicking h2 tag</span>
    $('h2').on('click', function() {
        <span class ="comments">// using 'this' pointer ensures only that child element will be affected</span>
        $p = $(this).next('p');
        <span class ="comments">// check if element is hidden first</span>
        if($p.is(':hidden')) {
            $p.show();
        } else {
            $p.hide();
        }
    });</pre>
    
    <p>This example using a combination of event delegation in order to handle multiple click events. Furthermore, it using a 'this' pointer in order to isolate each child from the h2 tags. Lastly, it uses the 'next' function along with the 'is' conditional to see if the child element is hidden or visible.
    
    <span class = "nl">All of these factors make for a short clean code which will be able to handle multiple question and answer scenarios. </span></p>
    
    <hr />
    
    <h2>Next() &amp; Previous()</h2>
    
    <p>The 'next' function works by checking the next tag in the dom tree, there is also a 'previous' function. Both allow arguments which can allow further control in order to ensure that only certain type, class or id will be selected.
    
    <span class = "nl">In our next section we are going to start talking about animations and how we can create our own animations in order to make the visual elements of our page, move, hide, etc.</span></p>
    
<br />
<hr />
    
<a href="JQuery4.php">Previous Page</a>
<span class = "next"><a href='JQuery6.html'>Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>