<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;	charset=utf-8" />
<meta name="description" content="Use open source PhP in order to create dynamic web sites or web applications which can be used to connect to a database. These types of web sites engage users by allowing them to interact with the website, using comments, forums posts, etc." />
<meta name="keywords" content="PhP" />
<meta name="author" content="Juan Arias" />  
<title>Introduction to PhP Programming</title>
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
    
    <h1>Introduction to PhP Programming</h1>
    
    <h2>What is PhP?</h2>
    
        <p>PhP is a server side programming language which allows you to access database for sending and retrieving files.</p>
    
        <hr />

        <!-- Basics -->
        <h3>Basics</h3>
    
            <p>The first program we are going to run is a hello world program.  The beauty of php is that it can be work with xhtml 
markup for creating dynamic webpages. 
                
        <span class ="nl">In order to run php files you need a web server.  It is for this purpose that I choose to install 'xampp' (x - cross platform, a -apache, m - mysql, p - php/perl ) on my machine.</span>
        
        <span class ="nl">Also, similar to html, you will need to give your files .php extensions, even if most of the code is html.</span>
            
        <span class ="nl">Let's write a simple hello world program below.  The good news, is that unlike c++ we don't need to compile php in order to run it (it can be intrepreted or compiled).</span></p>
    
    <em>Code:</em>
    <!-- Code Section -->
    <pre class="code">
    &lt;?php 
        print "hello world!";
    ?></pre><br />
    
    <em>Example:</em><br /><br />
    <!-- Example -->
    <?php 
        print "hello world!"; 
    ?>

<br /><br />    
<hr />
    
<!-- Understanding single and double quotes -->
<h3>Difference between single and double quotes</h3>
    
    <p>Generally when we use single or double quotes it is to return a string or character.  There is a difference between the two thou, if we use a single quote later on in a sentence it will escape the initial string, same is true for the double quotes (you can use forward slash to escape a quote thou /').
        
        <span class ="nl">Below is an example of using a double quotes to display a string with a single quote.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <div class="code">
    &lt;?php
    <div class="padding">
    print "Hello, I'm feeling good today.";<br />
    print 'John said, "Hello, how are you doing Sarah?" ';</div>
    &#63;>
    </div><br />
    
    <em>Example:</em><br /><br />
    <!-- Example -->
    <?php
        print "Hello, I'm feeling good today. ";
        print 'John said, "Hello, how are you doing Sarah?" ';
    ?>
    
    <p>In the first example I used a single quote in the contraction I'm, and in the second example I used a double quote to display a dialogue.  However, I would have drawn a runtime error had I used a single quote in the first example or a double quote in the second example like so:
        
<span class ="nl"><em>print 'Hello, I'm feeling good today. ';</em>.</span>
    
        <span class ="nl">The reason is because the program would have the sentence was over at 'Hello, I' and the rest would have been parsing error.  Another thing to be aware of is that double quotes also check for variables where as single quotes do not.</span>
    
        <span class ="nl">If you ever try to use a variable like, $value inside of a single quote then it will return just the dollar sign and the word value instead of the value of the variable.</span></p>
    
    <hr />
    
    <!-- Difference between echo and print -->
    <h3>Difference between ECHO and PRINT</h3>
    
        <p>Echo and print are the same in the respect that they will both display strings and variables.  The main difference is that print returns a value of 1 and can be used in an expression whereas echo doesn't.  This makes using echo faster in almost every situation, so it is advised to use it when not needing to return a value (like in a function for example).</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php
        echo "Hello, I'm feeling good today.";
        print 'John said, "Hello, how are you doing Sarah?" ';
    &#63;></pre><br />
    
    <em>Example:</em><br /><br />
    <!-- Example -->
    <?php
        echo "Hello, I'm feeling good today. ";
        print 'John said, "Hello, how are you doing Sarah?" ';
    ?>
    
<hr />
<br />
<a href = "PhP1.html">Next Page</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>