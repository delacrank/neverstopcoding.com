<!DOCTYPE html>
<html>   
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <title>Using functions - C Development</title>
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
        
        <h1>Using functions - C Development</h1>
        
        <h2>Functions</h2>
        
            <p>Hurray, on to functions and so quickly at that. A function is a way to store a set of instructions.  The beauty of functions is that we can store them in other files and call them whenever we need to perform an action.  This in turn reduces the amount of code we have to write and allows for greater organization of our code.</p>
        
    <hr />
        
        <!-- Function Types -->
        <h3>Arguements Call by Value</h3>
        
            <p>Each function has a return type, this means that it will perform a set of instructions and then return a value as the result of the instructions performed.  However, we can also set the funcitons type equal to void, which means it won't have to return any value.
        
        <span class = "nl">The beauty of functions or subroutines is that we can pass information from our function to the main function by passing the value of the variable in the argument of the function.  Below, you will see how we pass the number 2 and the value contained in the variable i from power(2, i) in our main function to the parameters of our power(int base, int n).</span>
        
        <span class="nl">Later we will find our how to pass by reference.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #include &lt;stdio.h>
    
    int power(int m, int n);
    
    main()
    {
        int i;
        
        for (i = 0; i &lt; 10; i++)
            printf("%d %d %d\n", i, power(2, i), power(-3, i));
        return 0;
    }
    
    <span class="comments">// Our power function</span>
    int power(int base, int n)
    {
        int i, p;
        
        p = 1;
        for (i = 1; i &lt;= n; i++)
            p = p * base;
        return p;
    }
    </pre>  
        
        <p>This program works by creating two for loops, the first for loop simply displays out put of the printf() function, the second for loop multiples the number p by itself. 
        
        <span class ="nl">Let's take a closer look at the function.  The first line just declares two variables i and p, the second line initializes p equal to 1, the third line sets up the loop which will continue until i is equal to or less than n.</span>
            
        <spam class = "nl">N is the second paramter in our function and in the main function we set it equal to i.  This means the first time around n will be equal to 0.  So the program will perform 'p = p * base' which in this situation base was set equal to 2.  However, because n is equal to 0 and the for loop will only run if i is equal to or less than zero.  </spam>
        
        <span class="nl">i in the situation is assigned to 1, so the loop won't run.  The value of i is returned which is equal to zero, the value of p is returned which is equal to one as well as the next function's return of the value of p (0, 1, 1). </span>
            
        <span class="nl">The for loop in the main program is run again only this time i is equal to 1 since it has been incremented.  This time when the power function is run again it will multiply p which equals 1 by the base which is equal to 2, and since n is equal to i, the loop will stop.</span>
            
        <span class="nl">That's the structure of the overall program.</span>    
              </p>
        
    <hr />    
        
    <!-- Character Arrays -->    
    <h3>Chracter Arrays</h3>
        
        <p>The next program we will be working with will read everyline of characters, store them in an array and print out the longest line of characters by checking the arrays.
        
        <span class="nl">The program completes this task by using two functions: 'int getline()' and 'copy()'.  We will go more into how these functions work after you read the code. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;stdio.h>
    #define MAXLINE 1000
    
    int getline (char line[], int maxline);
    void copy(char to[], char from[]);
    
    main()
    {
        int len;
        int max;
        char line[MAXLINE];
        char longest[MAXLINE];
        
        max = 0;
        while ((len = getline(line, MAXLINE)) > 0)
            if (len > max) {
                max = len;
                copy(longest, line);
            }
        if (max > 0)
            printf("%s", longest);
        return 0;
    }
    
    int getline(char s[], int lim)
    {
        int c, i;
        
        for(i=0; i&lt;lim-1 &amp;&amp; (c=getchar())!=EOF &amp;&amp; c!='\n'; i++)
            s[i] = c;
        if (c == '\n') {
            s[i] = c;
            ++i;
        }
        s[i] = '\0';
        return i;
    }
    
    void copy(char to[], char from[])
    {
        int i;
        
        i = 0;
        while((to[i] = from[i]) != '\0')
            i++;
    }
    </pre>
        
        <p>Let's start by understanding the first function, getline.  It returns an integer and has two paramters the first is an array, the second paramter is an integer.
        
        <span class="nl">Following this the function declares two variables c and i both integers.  A for loop is used to read each character from the line and store it in the first paramter. The for loop will continue as long as: i is less than the integer lim minus 1, not EOF, and not a newline.</span>
        
        <span class = "nl">We find out from our main function that lim is set equal to a constant called MAXLINE, and MAXLINE is equal to a thousand.  So basically our for loop will continue to store chracters into our 's' array until 999 characters have been typed, a newline has been typed or ctrl-d has been pressed.</span>
        
        <span class = "nl">One of the ways our for loop stores functions is by using the getline() function and storing the character in the variable c. The 's' array's components are equal to the variable i (s['i']) so every character counts as a new magic number in our array.  We end the function with adding a null character ('\0') to the end of our array and then returning the value of i.</span>
        
        <span class = "nl">Our last function is the copy function. This function copies data stored in one character array to another using the null character to seperate two arrays from another.</span>
            
        <span class="nl">Now let's look at the code stored in our main function.  First we declare 4 variables two of those four are character arrays set to hold MAXLINE components (1000), the other two are just integers for containing length and maxium lenght.</span>
            
        <span class="nl">The first thing we notice in our code is a while loop which, will check the lenght variable against are getline() function, and check to see if it's greater than zero.  In other words, its checking to see if we have any characters stored in our character array.</span>
            
        <span class="nl">The next thing the program will do if check to see if the lenght variable is less than are max length variable, if it is let's assign it to the new max length.  Great, now let's store this precious character array in our copy() function.</span>
            
        <span class="nl">Alright, more error checking before we print out the longest character array using printf() function.</span>   </p>
        
        <hr />
        <br />
    
<a href = "C2.html">Previous page</a>
<span class="next">
<a href = "C4.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>