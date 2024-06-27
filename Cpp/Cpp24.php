<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Recursion - Cpp Programming</title>
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
<?php include('..//Includes//Left_Cpp.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Recursion - Cpp Development</h1>
        
        <h2>Recursion</h2>
        
            <p>Recursion is when we use a function to call itself.  This can be a complicated endeavor for both writing and reading recursive functions.  A simple but effecient example of a recursive function is creating a function that finds the product of a factorial.
        
        <span class ="nl">A factorial is a the amount of possible outcomes given a number of situations.  For example 3! or three factorial can stand for the amount of times we can rearrange 3 cards.  Let's say we have a king, a jack and a queen.</span>
                
        <span class="nl">We could arrange them like this:</span>
              </p>
        
        <ol style="margin-left: 1em">
            <li>King, Jack, Queen</li>
            <li>King, Queen, Jack</li>
            <li>Jack, King, Queen</li>
            <li>Jack, Queen, King</li>
            <li>Queen, Jack, King</li>
            <li>Queen, King, Jack</li>
        </ol>
        
        <p>Of course if we increase the number the outcomes become greater.  The formula for finding the factorial of a number is the number times itself multipled by itself minus 1 until the number is reduced to one.
        
        <span class="nl">So for the number three its '3 * 2 * 1' which equals six.  For the number four it would be '4 * 3 * 2 * 1', that would equal 24 possible outcomes.</span>
            
        <span class="nl">Let's look at some code.</span>
              </p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    int factorial(int x)
    {
        if(x > 1)
            return factorial(x - 1) * x;
        return 1;
    }
    
    int main()
    {
        cout &lt;&lt; factorial(4) &lt;&lt; endl;
    }</pre>
        
        <p>So if we trace through the code you will see that we defined the function first, main knows where to look for it.  Then we called it and passed the number four.
        
        <span class ="nl">From here the factorial function checks to see if four is greater than the number one.  If it is than let's pass that number into our factorial function only this time let's subtract one from it and multiply it by itself.  </span>
            
        <span class="nl">So four minus one equals three multipled by four equals twelve. Since we are returning that answer into our factorial function we will have to pass it again.  Again, we check if three is greater than one, if it is we must perform the function again. </span>
            
        <span class="nl">We now have to take the number three subtract one from it leaving us with two, we multiply that by itself.  Which is currently twelve from last time we multipled three and four, then multiply that by two it should equal twenty four.  Again we check if two is greater than one, if it is let's repeat.</span>
            
        <span class="nl">We take the number two subtract one from it.  We are left with one multipled by itself which is one times twenty four.  Again we check if one is greater than one, well its not this time so we return one.  One times twenty four is equal to twenty four.</span></p>
        
        <hr />
        <br />
        <a href="Cpp23.html">Previous</a>
        <span class = "next">
        <a href = "Cpp25.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  