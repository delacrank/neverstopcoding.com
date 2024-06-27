<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Pointers to Functions - Cpp Programming</title>
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

        <h1>Pointers to Functions - Cpp Development</h1>
        
        <h2>Pointers to Functions</h2>
        
            <p>Functions are great way to organize routines within our program.  We can use functions to handle computations outside the main scope of our program.  Functions help make our code reusable, and safe for testing, yet it comes with a cost of time and processing power. 
        
        <span class = "nl">We have learned that pointers are a great way to locate a variable outside the scope of our main function.  We have also learned that pointers provide a way to instantly access variables between multiple functions saving costs in time and processing power.  The price is the cost of added complexity, in this next section we will learn how to use pointers to call functions.</span>
                
        <span class="nl">Below is a simple and short example.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    #include &lt;string>
    
    std::string print(std::string x)
    {
        return x;
    }
    
    int main()
    {
        std::string k("interesting");
        <span class="comments">// Define a string pointer with a parameter equal to our function</span>
        std::string (*p)(std::string);
        <span class="comments">// We can now initialize our pointer to hold our function</span>
        p = print;
        
        <span class="comments">// Let's call our variable an pass an arguement to it</span>
        std::cout &lt;&lt; p(k) &lt;&lt; std::endl;
    }</pre>
        
        <p>We can use this pointer as a parameter in another function, or store it in a vector.  As long as the data type and parameters remain the same then conversion can happen.
        
        <span class = "nl">Let's look at an example of storing a function to a pointer and then placing that pointer in a vector.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    #include &lt;vector>
    #include &lt;string>
    
    std::string print(std::string x)
    {
        return x;
    }
    
    std::string combine(std::string x, std::string y)
    {
        return x + y;
    }
    
    std::string plural(std::string x)
    {
        return (x[x.length() - 1] == 's') ? x : x += 's'; 
    }
    
    int main()
    {
        std::string x("ok");
        std::string (*p)(std::string) = print;
        std::string (*p1)(std::string, std::string) = combine;
        std::string (*p2)(std::string) = plural;
        std::vector&lt;std::string(*)(std::string)> v1 {p, p2};
        std::vector&lt;std::string(*)(std::string, std::string)> v2 {p1};
        
        std::cout &lt;&lt; v1[0](x) &lt;&lt; std::endl;
        std::cout &lt;&lt; v1[1]("plural") &lt;&lt; std::endl;
        std::cout &lt;&lt; v2[0]("mister ", "man") &lt;&lt; std::endl;
    }</pre>
        
        <p>Notice that when we decide to define a vector which can hold our pointers that we need to declare the vector as being a pointer to a string which can hold two string parameters. 
            
    <span class="nl">Only if the function parameters match with the vector parameters can it be passed, we talked about this before with candidate and viable functions.</span></p>
          
        <hr />
        <br />
        <a href="Cpp26.html">Previous</a>
        <span class = "next">
        <a href = "Cpp28.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  