<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <title>Using the For Statement - C Programming</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet" href="../testcss.css">
     </head>
    
<body>

 <!-- Header -->
<?php include('../Includes//header.php'); ?>
        
<!-- Navigation -->
<?php include('../Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('../Includes//nav2.php'); ?>
    
 <!-- Left --><div class = "mainWrapper">
<?php include('../Includes//Left_C.php'); ?>
    
<!-- Right -->

    <div id ="rightz">
        
        <h1>Using the For Statement - C Development</h1>
        
        <h2>Using the For Statement</h2>
        
            <p>In our first program we simply used a function to print a string called 'printf()'.  Following that we created a program which could display temperature conversion for fahrenheit and celsius using a while condition. 
            
        <span class="nl">For the next program we are going to use a 'for loop' in combination with symbolic constants to display the same results using less code.</span> </p>
                
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #include &lt;stdio.h>
    
    #define LOWER 0
    #define UPPER 300
    #define STEP 20
    
    main()
    {
        int fahr;
        
        for (fahr = LOWER; fahr &lt;= UPPER; fahr = fahr + STEP)
        { 
            printf("%3d %6 .1f \n", fahr, (5.0/9.0)*(fahr-32));
        }
    } </pre>
        
        <p>In this example we used symbolic constants instead of variables.  If we wanted to, we could have used strings after our Constants with the use of quotes in order to establish the difference between the two data types.      
        </p>
        
    <hr />    
        
    <!-- Char input and output -->
    <h3>Character Input/Output &amp; EOF</h3>
            
        <p>The next thing we are going to learn is how to read data from our keyboard.  In order for us to read data from out keyboard, we need to use a function called 'getchar()', this will store a char into any variable we assign it to.
        
        <span class="nl">Then if we want to display that input to our console, we need to use another function called the 'putchar()' function.</span>
        
        <span class="nl">Below is a very simple example of this.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    <span class="comments">// print a character</span>
    #include &lt;stdio.h>

    main()
    {
        int c;
    
        c = getchar();
    
        putchar(c);
        
        printf("\n");
    }    </pre>
    
        <p>Another feature of C is using the EOF key, the next example will count the amount of characters in our long integer.  If typed it will signafy the 'End of the File', the EOF differs per operating system, on a unix machine its 'Ctrl + d'.  Using this construct we can end a while loop by using the EOF integer.  Let's take a look at this in our next example.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    <span class="comments">// count number of characters written</span>
    #include &lt;stdio.h>

    main()
    {
        long nc;
        nc = 0;
        while (getchar() != EOF)
            ++nc;
        printf("%ld\n", nc);
    }    </pre>
        
        <p>The first line declares the variable nc as a long int, the second line initializes it to zero.  The third line reads characters which are not EOF (ctrl + d), the forth line increments the variable nc by one for every character read, the last line prints the variable as a 'ld' or long double.
        
        <span class="nl">If we were to write this same code using the for loop, it would look like this.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    <span class="comments">// store the count in a double</span>
    #include &lt;stdio.h>

    main()
    {   
        double nc;
        
        for (nc = 0; getchar() != EOF; ++nc)
            ;
        printf("%.0f\n", nc);
    }    </pre>
        
        <p>Let's take this program one step further and count the amount of lines written in our program.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    <span class="comments">// count the amount of lines written</span>
    #include &lt;stdio.h>

    main()
    {   
        int c, nl;
        
        nl = 0;
        
        while ((c = getchar()) != EOF)
            if (c == '\n')
                ++nl;
        printf("%d\n", nl);
    }    </pre>
        
    <hr />
    <br />
    
<a href = "C.html">Previous page</a>
<span class="next">
<a href = "C2.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
        
        