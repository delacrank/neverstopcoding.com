<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Memory Management - Cpp Programming</title>
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

        <h1>Memory Management - Cpp Development</h1>
        
        <h2>Memory Management</h2>
        
            <p>Memory management has to deal with the permanence of objects. Normally, objects only exist as long as they are within a certain scope.  Their memory is managed by the stack, which will allocate and deallocate memory based on the current scope.
        
        <span class = "nl">Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int function(int x)
    {
        x = x + 1;
        return x; <span class = "comments">// Return the value of our variable</span>
    }
    
    int* pfunction(int *x)
    {
        *x = *x + 1;
        return x; <span class = "comments">// Return the address of our variable</span>
    }
    
    int main()
    {
        int x;  <span class = "comments">// Allocate 8 bits memory  on the stack for this object</span>
        x = 52; <span class = "comments">// Initialize that memory to the constant 52</span>
        std::cout &lt;&lt; function(x) &lt;&lt; " w/o pointer" &lt;&lt;  std::endl;
        std::cout &lt;&lt; x &lt;&lt; " w/o pointer \n" &lt;&lt; std::endl;
        
        int *z = new int; <span class = "comments">// Allocate 8 bits memory  on the heap for this object</span>
        *z = 52; <span class = "comments">// Initialize that memory to the constant 52</span>
        std::cout &lt;&lt; *pfunction(z) &lt;&lt; " w/ pointer" &lt;&lt; std::endl;
        std::cout &lt;&lt; *z &lt;&lt;  " w/ pointer" &lt;&lt;std::endl;
    }</pre>
        
        <p>In the first example the memory which we are working with is temporary and entirely handled by the stack.  Every time we open and close a bracket we are letting the stack know that we want it to erase old memory.
            
        <span class = "nl">So what happens in our first example is that when we pass the memory to out function it is changed within the function, but then it is destroyed and only the value is returned.</span>
        
        <span class = "nl">In the second function we created a pointer to memory on the free store and passed this address into our pointer function. Using that address we were able to change the memory in both our 'main function' as well as in our 'pfunction'. This is displayed in our cout statements.</span>
        
        <span class = "nl">Working with dynamic memory can be dangerous because we need to clean up memory, which we have used as well as the pointers which refer to that memory.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int main()
    {
        int *x = new int(52); <span class = "comments">// We can construct the object like this as well</span> 
        
        std::cout &lt;&lt; *x &lt;&lt; std::endl; <span class = "comments">// Display the value within our variable</span> 
        
        delete x; <span class = "comments">// delete the memory used in our free store</span> 
        *x = 0; <span class = "comments">// Set dangling pointer to null, it can cause errors</span> 
    }</pre>
        
        <p>Once we have used the memory on the free store be sure to use the delete command to remove it.  Also, the pointer that remains is called a dangling pointer, set this to zero or empty, it refers to garbage now and it can cause errors.</p>
    
    
        <hr />
        <br />
        <a href="Cpp37.html">Previous</a>
        <span class = "next">
        <a href = "Cpp39.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  