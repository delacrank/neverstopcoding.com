<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Generating HTML Part 3 - PhP Programming</title>
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
    
<h1>Generating HTML Part 3 - PhP Programming</h1>
    
<h2>Generating HTML with PHP cont.</h2>
    
    <p>We are going to talk about a solution for this tedious code problem in this sections using heredocs. We're also going to include information on how switch between php and xhtml in this section.</p>
    
<hr />    
    
<!-- Heredocs -->
<h3>Heredocs</h3>
    
    <p> Okay, remember our last example of creating a table by inputting all the xhtml code into one variable and then printing that variable.  Well, in this next example, we are going to use a multiline quote ( &lt;&lt;&lt;HERE )which begins and ends with the word 'here'. </p>
    
   
<em>Code:</em>
<!-- Code Section -->
<pre class="code">
&lt;?php 
$name = "John";
$address = "123 Main St."; 
print &lt;&lt;&lt;HERE
&#60;table style = "border: 1px solid black">
&#60;tr>
&#60;td>name&#60;/td>
&#60;td>$name&#60;/td>
&#60;/tr>
&#60;tr>
&#60;td>address&#60;/td>
&#60;td>$address&#60;/td>
&#60;/tr>
&#60;/table>
HERE;
?></pre><br />
    
<em>Example:</em><br />    
<!-- Example -->    
<?php
$name = "John";
$address = "123 Main St.";
print <<<HERE
<table style = "border: 1px solid black">
<tr>
<td>name</td>
<td>$name</td>
</tr>
<tr>
<td>address</td>
<td>$address</td>
</tr>
</table>
HERE;
?>     
    
    <p>   Ok, I just want to let you guys know to be careful when using a heredoc, there shouldn't be any spaces or tabs in the multiline quote, otherwise you will draw a runtime error.  I took me near half an hour to realize this when writing this example (I removed the spaces, so you can copy and paste it as is).</p>
    
<hr />    
    
<!-- Switching to xhtml -->
<h3>Switching between php and xhtml</h3>
    
    <p>   The third way to integrate php into your html code is to simply turn it on and off when necessary.  You will see what i mean in the example below. </p>
      
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php 
        $name = "John"; 
        $address = "132 Main St."; 
        <span class="comments">//switch 'out' off PHP</span>
    ?>
    &#60;table style = "border: 1px solid black">
        &#60;tr>
            &#60;td>name&#60;/td>
            &#60;td> <span style = "color:red">&#60;?php print $name; ?></span>&#60;/td>
        &#60;/tr>
        &#60;tr>
            &#60;td>address&#60;/td>
            &#60;td> <span style = "color:red"> &#60;?php print $address; ?> </span>&#60;/td>
        &#60;/tr>
    &#60;/table> </pre>
    <br />
    
<em>Example:</em><br />
<!-- Example -->
<?php
$name = "John";
$address = "132 Main St.";
//switch 'out' off PHP
?>

   <?php 
        $name = "John"; 
        $address = "132 Main St."; 
        //switch 'out' off PHP
    ?>
    <table style = "border: 1px solid black">
        <tr>
            <td>name</td>
            <td> <?php print $name; ?></td>
        </tr>
        <tr>
            <td>address</td>
            <td>  <?php print $address; ?> </td>
        </tr>
    </table>  
    
    
<p>So, there are many ways to get build xhtml output using php files. The 3<sup>rd</sup> method of switching in and out of php is used more often when there is a substantial amount of code.</p>
    
<hr />
<br />
<a href ="PhP2.html">Previous Page</a><span class ="next"><a href = "PhP4.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>