<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Control Structures - PhP Programming</title>
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
    
<h1>Control Structures - PhP Programming</h1>
    
<h2>Control Structures</h2>
    
    <p>    We are going to cover control structures in this sections.  A control structure is a statement or function which controls how the webpage operates: when to move on, what to change, etc. and all at the users discretion.  In this section we will talk about using conditional functions and comparions operators.    </p>
    
<hr />    
    
<!-- Conditional functions -->
<h3>Conditional functions</h3>
    
    <p>Below is an example of how to use the if function.  Anything inside the parentheses next to the if function (or any function) is considered an arguement.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;?php 
        $expression = true; 
        if ($expression) { 
            print "true!"; 
        } 
    ?></pre>
    
<p>If we use an exclamation point before the arguement, then it will be considered not equal or false.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;?php 
        $expression = false; 
        if ($expression) {
            print "true!"; 
        } 
        if (!$expression) { 
            print "false!"; 
        } 
    ?></pre>
<br />
    
<em>Example:</em><br /><br />
<!-- Example -->
<?php
$expression = false;
if ($expression) {
print "true!";
}
if (!$expression) {
print "false!";
}
?> 
    
<p>You can test this by changing the $expression variable to true and back to false, and then seeing what the program displays.
    
    <span class = "nl">Notice, when it comes to boolean variables the exclamation point in front of the variable will always be false.</span>
        
    <span class = "nl">Let's try using an else statement in the program below.</span></p>

    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;?php
        $expression = false; 
        if ($expression) { 
            print "true!"; 
        } <span class="highlight">else</span> { 
            print "false!";
        } 
    ?></pre>
    
<p>The 'else' statement works by defaulting to whatever is in the 'else' brackets if the first statement wasn't successfully passed (i.e, the arguement wasn't equal to the first if statement in this situation).
    
    <span class = "nl">The program will check for the value of $expression, if it is equal to the first if statement then the program it will accept it, otherwise it will default to whatever is in the else curly brackets.</span>
        
        <span class = "nl">You can also play with changing the value of $expression in this example.</span></p>
    
<hr />

<!-- The if Game -->    
<h3>The Number Game</h3>
    
    <p>    In this next section we will create a game to see what number was selected. Each number refers to an album cover, save this file as 'ifConditional.php'. </p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;h1> Number Game &#60;/h1>
    &#60;p> Welcome to the number game &#60;/p> 
    
    &#60;?php 
        $userNumber = rand(1,5); 

        if($userNumber) {
            print "&#60;p>&#60;img src=\"/Images/Cover$userNumber.jpg\"
                                    height = \"150\"
                                    width = \"150\"/> &#60;/p>"; 
            if($userNumber == 1) { 
                print "&#60;p>You selected the first cover.&#60;/p>";  }

            if($userNumber == 2) {
                print "&#60;p>You selected the second cover.&#60;/p>";  }

            if($userNumber == 3) { 
                print "&#60;p>You selected the third cover.&#60;/p>"; }
                
            if($userNumber == 4) { 
                print "&#60;p>You selected the forth cover.&#60;/p>";  }

            if($userNumber == 5) { 
                print "&#60;p>You selected the fifth cover.&#60;/p>";  }

            if($userNumber == 6) { 
                print "&#60;p>You selected the sixthed cover.&#60;/p>";  }
        } 
    ?> 
    
    &#60;p>&#60;a href ="ifConditional.php">Please Try Again!&#60;/a>&#60;/p>
    
    &#60;p>&#60;a href ="PhP6.html"> Back to main page &#60;/a>&#60;/p></pre><br />
    
<em>Example:</em><br /><br />
<!-- Example -->
<a href = "php scripts/php6.php">If Conditional program</a>

<p>Notice, we used our $userNumber as an arguement for our 'if' function.  The function will check to see if the variable has been populated/initialized/defined by a value, and then proceed (if the variable has been defined).  We then used our variable '$userName' again by allowing it to choose the number of the image we wanted to display. <br /><br /> Earlier in the program, we used a function called 'rand()', this function allowed us to randomnly select a number based on our arguements (in this case it was one through five).<br /><br /> Finally, we ended the program by posting a link to the program itself, if we wanted to run it again without having to hit the reload screen.  </p>
    
<hr />
<br />
<a href ="PhP5.html">Previous Page</a><span class ="next"><a href = "PhP7.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>