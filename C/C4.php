<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <title>External Variables &amp; Scope - C Programming</title>
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
        
        <h1>External Variables &amp; Scope - C Development</h1>
        
        <h2>External Variables &amp; Scope</h2>
        
            <p>Alright, moving on to external variables and scope.  An external variable is basically a global variable, when we use functions often many of the variables we declare and initialize in those functions are specific to the function itself and the data cannot be transfered over to other functions.
        
        <span class="nl">However, if we delcare a variable outside of our functions it will a global variable.  Similar to the way we use our function protypes before using our main function.</span></p>
        
        <!-- Global Variables -->
        <h3>Global Variables</h3>
        
        <p>We are going to re-write the program we used before to find the longest line of characters and print it upon using our EOF key.</p>
        
    <em>Code:</em>    
    <!-- code -->    
    <pre class="code">
    #include &lt;stdio.h>
    
    #define MAXLINE 1000
    
    int max;
    char line[MAXLINE];
    char longest[MAXLINE];
    
    int getline(void);
    void copy(void);
    
    main()
    {
        int len;
        extern int max;
        max = 0;
        while ((len = getline()) > 0)
            if (len > max) {
                max = len;
                copy();
            }
        if (max > 0)
            printf("%s", longest);
        return 0;
    }
    
    int getline(void)
    {
        int c, i;
        extern char line[];
        
        for (i = 0; i &lt; MAXLINE-1 &amp;&amp; (c=getchar()) != EOF &amp;&amp; c != '\n'; ++i)
            line[i] = c;
        if (c == '\n') {
            line[i] = c;
            ++i;
        }
        line[i] = '\0';
        return i;
    }
    
    void copy(void) {
        int i;
        extern char line[], longest[];
        
        i = 0;
        while ((longest[i] = line[i] ) != '\0')
            ++i;
    }
    </pre>
        
        <p>Notice how we use the 'extern' keyword to specify that our variable was coming from outside our function.  If you notice we don't require the use of parameters in these functions or using arguments in our function calls because the values we need can be retrieved and shared mutually from our getline(), copy() and main() functions.
        
        <span class = "nl">The risk here of course is that if you change the value of that variable in any of the functions, it will change in all of them making that data difficult to manage.</span></p>
        
        
        <hr />
        <br />
    
<a href = "C3.html">Previous page</a>
<span class="next">
<a href = "C5.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>