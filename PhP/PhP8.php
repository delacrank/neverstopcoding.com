<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Control Structures Part 3 - PhP Programming</title>
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
    
<h1>Control Structures Part 3 - PhP Programming</h1>
    
<h2>Control Structures cont.</h2>
    
    <p>    We're going to learn how to use the switch statement as well as the for/while loops.    </p>
    
<hr />    
    
<!-- Switch -->
<h3>Comparing with switch structures</h3>    
    
    <p>    With the if statement, there was only one other alternative, and that was else.  We had to use multiple if statements in order to create diversity.  In this section, we are going to talk about using the 'switch' statement which provides multiple alternatives (cases).
        
    <span class = "nl">Below is an example of how we can use the switch statement in our programs. </span> </p>

    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;p> Ask a question program &#60;/p>
    
    &#60;?php 
        $questionNum = rand(1,4); 
    
        switch($questionNum) { 
            case 1:
                print "&#60;p>How are you today?&#60;/p>";
                break;
            case 2:
                print "&#60;p>How is the weather?&#60;/p>";
                break;
            case 3:
                print "&#60;p>What time is it?&#60;/p>";
                break;
            case 4:
                print "&#60;p>How are you today?&#60;/p>";
                break;
            default:
                print "An error has occured. Please try again, error number : $questionNum";
        } 
        
        print "&#60;a href = switch.php>Try again?&#60;/a>";
    ?></pre>
    
<br />
<hr />    
    
<!-- while loops -->
<h3>While loop</h3>
    
    <p>There are two types of loops which we will use in our programs: 'for loops' and 'while loops'. I am going to start off with an example of a while loop.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;h1> Picture game &#60;/h1> 
        &#60;p>Welcome to the picture game.&#60;/p>

    &#60;?php 
        $userNumber = rand(1,6); 
        while($userNumber != 2) { 
            $userNumber = rand(1,6);
            print "&#60;p>&#60;img src=\"/Images/Cover$userNumber.jpg\"
            height = \"50px\" width = \"50px\"  />&#60;/p>"; 
        } 
        
        print "&#60;p>Your picutre is the sky picture!&#60;/p>"; 
    ?> 
    &#60;p>&#60;a href = "while.php">Try again!&#60;/a>&#60;/p></pre>
    
<br />
<em>Example:</em><br /><br />  
<!-- Example -->
<a href="php scripts/php8.php">Picture Game</a>
    
    <p>Okay, so all we did in this program was set a variable $userNumber equal to a randomn number (one through six), then we used that variable in a while loop.  The loop will repeat until our variable is equal to the number two.  That was the condition for it to be broken. 
        
        <span class = "nl">while($userNumber != 2), while this variable does not equal two, do this curly brackets.</span></p>
    
    <hr />    
    
    <!-- for loop -->
    <h3>For loop</h3>
    
    <p>Let's try our luck with a for loop example.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &#60;h1> Picture game &#60;/h1> 
        &#60;p>Welcome to the picture game.&#60;/p> 
    
    &#60;?php 
        $twoCount = 0; 
        
        for($i = 0; $i &#60; 10; $i++) { 
            $userNumber = rand(1,6); 
            print "&#60;p>&#60;img src=\"Images\\Cover$userNumber.jpg\"
            height = \"50px\" width = \"50px\"  />&#60;/p>"; 
    
            if ($userNumber == 2) { 
                $twoCount++; 
            } 
        }
        print "&#60;p>You picture the sky picture $twoCount times!&#60;/p>"; 
    ?> 
    
    &#60;p>&#60;a href = "for.php">Try again!&#60;/a>&#60;/p></pre>

    <br />
    <em>Example:</em><br /><br />
    <!-- Example -->
    <a href="php scripts/php8.1.php">Picture Game2</a>
    
    <p>Let's try to understand this program and how the for loop work.</p>
    
<ol id = "li2">
<li>We set our variable $twoCount (our counter) equal to zero.</li>
<li>We created our for loop, set variable $i equal to zero, if $i is less than 10 (stop the loop), increment variable $i by one (for every interval).
</li>
<li>We set our randomn number variable ($userNumber) equal to rand(1,6), and printed a picture for every possible number in the variable.</li>
<li>We used an if statement to add up our $twoCount variable for everytime $userNumber was set to two during our for loop.</li>
<li>We printed out the result of how many times our variable $twoCount is selected.  </li>
</ol>
    
<hr />
<br />
<a href ="PhP7.html">Previous Page</a><span class ="next"><a href = "PhP9.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>