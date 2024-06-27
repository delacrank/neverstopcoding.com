<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Functions - Cpp Development</title>
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

        <h1>Functions - Cpp Development</h1>
        
        <h2>Functions</h2>
        
            <p>A function is a way to divide code and organize it.  It is similar to a source file in the sense that we can divide our program into multiple source files or multiple functions. 
                
        <span class="nl">The way we organize multiple source files into piece of executable code is by using a linker.  A linker will take each source file after it has been compiled into object code and form a single piece of executable code.</span>
        
        <span class="nl">Once are linker has completed this task are executable code is sent to something called a loader.  The loader will take this executable code and tell the operating system how to use it.</span>
        
        <span class ="nl">The reason I have explained all of this is so that you can understand how are functions are able to communicate over different source files.  Often times we will have multiple functions stored in a header file, and call them at different times.</span>
                
        <span class="nl">Next I will explain how we can pass objects between our functions and our main function.  There are two methods which are commonly used.</span></p>
                
        <hr />
        
        <!-- pass by value -->
        <h3>Pass by Value</h3>
        
            <p>Pass by value implies that when we use a function, the objects inside our parameters will be initialized based on values being sent from our main program.  This means that are function is making computations using only the values and not the actual objects themselves.
                
        <span class="nl">This is both good and bad.  The good part is that we won't have to worry about unnecessarily changing objects within our main class based on changes made within the objects in our function.  However, this also means that we will have to take futher steps to store these values into another object in order to work with it.</span>
                
        <span class="nl">Let's look at an example.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    int Add(int);
    
    int main()
    {
        int q = 5;
        cout &lt;&lt; "Before update: " &lt;&lt; q &lt;&lt; endl;
        <span class="comments">// Store the value in a variable</span>
        int x = Add(q);
        <span class="comments">// q still remains the same, it is local to this scope</span>
        cout &lt;&lt; "After update: " &lt;&lt; x &lt;&lt; endl;
    }
    
    int Add(int x)
    {
        x =  x + 5;
        return (x);
    }</pre>
        
        <p>This is a relatively simple program which adds two numbers.  We initialized the objects in our functions parameters 'x' and 'y' to equal '1' and '2'.  Then we returned the sum of those numbers, so we know our function will return a value which we have to store.  We can store this value in a variable and then we can use it as often as we want.
        
        <span class ="nl">However, if we want to keep using the function, we need to keep creating new variables and calling our function and storing its computations in every new variable.</span>
              </p>
        
         <hr />
        
        <!-- pass by reference -->
        <h3>Pass by Reference</h3>
        
            <p>Pass by reference is different.  When we pass by reference what we do is bind our variables to a single address.  Changes made in our main scope will affect our function scope as well.  This means we have to be much more careful we variables we decide to bind.
                
        <span class="nl">Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    int Add(int&amp;);
    
    int main()
    {
        int q = 5;
        cout &lt;&lt; "Before update: " &lt;&lt; q &lt;&lt; endl;
        <span class="comments">// Call the function</span>
        Add(q);
        <span class="comments">// Q has changed because we passed the address of q not the value</span>
        cout &lt;&lt; "After update: " &lt;&lt; q &lt;&lt; endl;
    }
    
    int Add(int &amp;x)
    {
        x =  x + 5;
        return (x);
    }</pre>
        
        <p>This was great for multiple reasons, for one we didn't need to access more memory in order to the store value of our function.  Also, if we want to use the function multiple times on different values we don't need to get confused with which variable relates to which function, so its less confusing.</p>
        
        
        <hr />
        <br />
        <a href="Cpp21.html">Previous</a>
        <span class = "next">
        <a href = "Cpp23.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  