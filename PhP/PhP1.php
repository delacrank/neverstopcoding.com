<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Generating HTML - PhP Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_PhP.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Generating HTML - PhP Programming</h1>
    
<h2>Generating HTML with PHP</h2>
    
    <p>    We are going to focus on how to integrate our html tags into our php files, in this section.  </p>
    
<hr />
    
<!-- Quotes, variables, concatention -->
<h3>Coding w/ Quotation Marks, Variables, Concatention</h3>
    
    <p>Unlike c++, hyper tags added within double/single quote(s) will take affect, in fact they are necessary in input any html tags (otherwise you will draw a runtime error).
        
    <span class ="nl">However, similar to other programming languages, you can combine two strings using concatention or store values within variables to be used at a later time.</span>

    <span class ="nl">One of the main differences is just understands the syntax changes.</span></p>
    
    <em>Code:</em>
    <!-- Code Section -->
    <pre class="code">
    &lt;?php 
        print ("&#60;p>Hello World!&#60;/p>"); 
        print ("&#60;p>Hello World!&#60;br />Hello Computer!&#60;/p>");
        echo '&#60;p>&#60;a href="http://www.google.com">Google&#60;/a>&#60;/p>'; 
    ?></pre><br />

<em>Example:</em>
<!-- Example -->
<?php
    print ("<p>Hello World!</p>");
    print ("<p>Hello World!<br />Hello Computer!</p>");
    echo '<p><a href="http://www.google.com">Google</a></p>';
?> 
    
    <p>Notice how the spacing that naturally occurs with using a 'p' tag is applied to our php code. Also, we can use echo instead of print to display html markup however, print returns a value while echo does not (which is better for complex expressions).</p>
    
<hr />
    
<!-- Concatention -->
<h3>Concatention</h3>
    
    <p>This is process of drawing smaller strings together to form a large string.  Php focuses around using the $ symbol in order to denote its variable and the period ( . ) symbol in order to join (concatenate) two strings.</p>

<!-- Example -->    
<em>Code:</em>
<!-- Code Section -->
<pre class="code">
&lt;?php 
    $word = "oogie "; 
    $dance = "boogie"; 
    print  $word . $dance; 
?></pre><br />
    
<em>Example:</em><br />
<!-- Example -->
<?php
$word = "oogie ";
$dance = "boogie";
print $word . $dance;
?> 
    
<p>Please remeber to end your lines with semicolons (;) and end your php code with question mark greater than sign (?>), as not ending them properly will also draw runtime errors.  Also, if you want to add line breaks or any type of html formating just use the print/echo function with double quotes and add your line breaks, etc. (print "&#60;br />";)

    <span class = "nl">Let's try another example where we try to add a variable to a number.</span></p>
     
<em>Code:</em>
<!-- Code Section -->
<pre class="code">
&lt;?php 
    $output = "World";
    print "&#60;p>Hello " . $output . "&#60;/p>"; 
    print  "&#60;p>" . $output + 5 . "&#60;/p>"; 
?></pre><br />
    
<em>Example:</em><br />  
<!-- Example --> 
<?php
    $output = "World";
    print "<p>Hello " . $output . "</p>";
    print "<p>" . $output + 5 . "</p>";
?> 
    
    <p>What happened? $output had no logical value so the program intrepretted as being equal to zero. Also, notice how we had to use our concatention to add our variables to our quoted html.</p>
    
<hr />
<br />
<a href ="PhP.html">Previous Page</a><span class ="next"><a href = "PhP2.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>
