<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Smart pointers Part 2 - Cpp Standard Library</title>
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
<?php include('..//Includes//Left_Cpp_Std_Lib.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Smart pointers Part 2 - Cpp Standard Library</h1>
        
        <h2>Smart pointers (part 2)</h2>
        
            <p>So far we've been learning about smart pointers.  There is a difference between dynamic memory and static memory.  Pointers which refer to local objects like so 'int *p = &amp;x;', have the life expiration equal to other objects allocated on to the stack.
        
        <span class = "nl">However, Pointers which refer to objects stored on the free store 'int *x = new int;', can exist until we delete them or the memory is exhausted. To avoid running into compiler errors don't attempt to delete a pointer which has been statically allocated or a pointer whose memory has already been freed. </span> 
            
        <span class = "nl">We can also throw an exception to prevent running into runtime errors, by throwing an exception to pointers which refer to the free store once that space has been exhausted.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Be sure to include the 'new' header file</span>
    <span class = "comments">// #include &lt;new></span>
    int *x = new (nothrow) int();</pre>
        
        <p>There are several ways we can run into errors using our smart pointers.  If for example we have a function which takes a smart pointer as a parameter and we try to pass a value which has been initialized using the 'new' keyword, then our compiler will not be able to convert that data.  Let's see what this looks like. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Our function</span>
    void func(std::shared_ptr&lt;int> p)
    {
        std::cout &lt;&lt; "Our smart pointer function" &lt;&lt; std::endl;
    }
    
    int main()
    {
        std::shared_ptr&lt;int> x = std::make_shared&lt;int>();
        <span class="comments">// Pass this value into our function</span>
        func(x);
        
        int *y = new int;
        <span class="comments">// Let's pass this value now</span>
        func(y);
    }</pre>
        
        <p>Another example of how we can run into errors by using smart pointers is with the 'get()' function.  The 'get()' function returns the value of a pointer variable, however in order to properly initialize a smart pointer we need to return the address not the value itself.  Our 'new' keyword does this and so does our smart pointer.
            
    <span class = "nl">Let's see what happens when we try to initialize another smart pointer using the 'get()' function.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::shared_ptr&lt;int> p = std::make_shared&lt;int>(5);
    
    <span class = "comments">// This will result in a runtime error</span>
    std::shared_ptr&lt;int> x(p.get());
    
    std::cout &lt;&lt; *x.get() &lt;&lt; std::endl;</pre>
        
        <hr />
        
        <!-- unique_ptr -->
        <h3>Unique_ptr</h3>
        
            <p>Let's spend some time talking about the 'unique_ptr' and how it differs from the 'shared_ptr'.  One of the main differences between the two is that the unique_ptr can only hold one address where the shared_ptr can hold multiple addresses.  This means that we cannot try to allocate more than one object to our unique pointer and all objects initialized by a unique pointer must be initialized using the 'new' keyword.
        
        <span class = "nl">Let's look at some sample code.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
     <span class = "comments">// Initialize our unique pointer</span>
    std::unique_ptr&lt;int> p (new int(5));
    
    std::cout &lt;&lt; *p.get() &lt;&lt; std::endl;
    
    <span class = "comments">// To transfer ownership we need to release the pointer from p</span>
    std::unique_ptr&lt;int> x (p.release());
    
    <span class = "comments">// X should now hold the value that was once in p</span>
    std::cout &lt;&lt; *x.get() &lt;&lt; std::endl;</pre>
        
        <p>So we used the 'reset()' function before which just deletes any address the pointer is currently holding. The 'release()' function just free's the pointer, if we just 'reset()' function then how would we be able to transfer the value?</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::unique_ptr&lt;std::string> p (new std::string("hello"));
    
    <span class = "comments">// Here we can just declare the pointer</span>
    std::unique_ptr&lt;std::string> x;
    
    <span class = "comments">// Transfering the value requires that we free it first</span>
    x.reset(p.release());
    
    std::cout &lt;&lt; *x.get() &lt;&lt; std::endl;</pre>
        
        <hr />
        
        <!-- Weak pointer -->
        <h3>Weak Pointer</h3>
        
            <p>Let's take a look at the 'weak_ptr' and how it differs from both the 'shared_ptr' and 'unqiue_ptr' templates.  First, we should note that the only way to use a 'weak_ptr' is to first create a 'shared_ptr'. Our 'weak_ptr' template can only hold addresses of an object already declared by a 'shared_ptr'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Declare and initialize our shared pointer</span>
    std::shared_ptr&lt;int> p = std::make_shared&lt;int>(5);
    
    <span class = "comments">// check the amount of objects pointing to it</span>
    std::cout &lt;&lt; p.use_count() &lt;&lt; std::endl;
    
    <span class = "comments">// Assign a weak pointer to that same address</span>
    std::weak_ptr&lt;int> x (p);
    
    <span class = "comments">// The count should remain the same</span>
     std::cout &lt;&lt; p.use_count() &lt;&lt; std::endl;</pre>
        <p>What a 'weak_ptr' does is give the user the freedom to create more references to the object of a 'shared_ptr' without increasing the life expectancy of the object.
        
        <span class = "nl">Weak pointer comes with two functions of its own: 'expired' which returns a true or false value based on whether the amount of objects a shared pointer is referring to is greater than one. The other function is 'lock', which just returns a null value to our weak pointer is the shared pointer is null, otherwise it will assign the value of the shared_ptr to our weak_ptr.</span></p>
        
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib20.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib22.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  