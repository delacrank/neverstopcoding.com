<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Smart pointers Part 3 - Cpp Standard Library</title>
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
    
        <h1>Smart pointers Part 3 - Cpp Standard Library</h1>
        
        <h2>Smart pointers (part 3)</h2>
        
            <p>Dynamically allocating arrays.  There are two ways to allocate an array: using the 'new' keyword or using the 'unique_ptr' template.
        
        <span class = "nl">Let's look at what an pointer to an array on the free store looks like.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int *p = new int[10] { 1, 2, 3, 4, 5, 6, 7, 8, 9 };
    
    <span class = "comments">// delete the memory</span>
    delete [] p;
    
    for(int i = 0; i != 10; ++i)
        std::cout &lt;&lt; p[i] &lt;&lt; std::endl;</pre>
        
        <p>Now, freeing this array requires the use of the delete keyword along with open and closing square brackets 'delete [] p'.
        
        <span class = "nl">Let's take a look at creating this same array using one of our smart pointers, 'unqiue_ptr'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::unique_ptr&lt;int[]> p (new int[10] { 1, 2, 3, 4, 5, 6, 7, 8, 9 });
 
    for(int i = 0; i != 10; ++i)
        std::cout &lt;&lt; p[i] &lt;&lt; std::endl;
        
    <span class = "comments">// to delete the array</span>
    p.reset();</pre>
        
        <p>Notice how we added the opening and closing square brackets when describing the type of object 'std::unique_ptr&lt;int[]>'.</p>
        
        <hr />
        
        <!-- allocator class -->
        <h3>Allocator Class</h3>
        
            <p>The allocator class allows you to allocate memory to objects without having to construct them.  Remember when we were working with vectors and we learned about the two functions capacity and reserve. One function reserves memory the other function checks the amount of memory we have reserved.  
        
        <span class = "nl">The purpose of using these two functions was to increase the performance of working with our containers.  If for example we have a container which needs to hold 100 objects and instead we use the insertion function to manually add them to our vector one at a time. Then our vector needs to create another container with all the necessary memory, continously creating and moving objects over as the requirement increases.  The allocator class gives us control over managing this memory.</span>
        
        <span class = "nl">Let's look at some examples of working with these allocators.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create our allocator</span>
    std::allocator&lt;int> a1;
    
    <span class = "comments">// Create a pointer for our allocator</span>
    int *a = a1.allocate(10);
    
    <span class = "comments">// Let's assign a value to this memory</span>
    a[2] = 2;
    
    <span class = "comments">// Print out this value to our console</span>
    std::cout &lt;&lt; a[2] &lt;&lt; std::endl;</pre>
        
        <p>So in the first example we created a pointer in order to refer to memory assigned by our allocator template.  Then we were able to assign a value to that memory using the subscript operator and print that value to our console.
        
        <span class = "nl">In the example below, we are going to take it one step further by constructing objects and assigning a value to each object. We can do this by using a type constructor operator '()'.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create our allocator</span>
    std::allocator&lt;int> a1;
    
    <span class = "comments">// Allocate 5 spaces in memory for our objects</span>
    int *a = a1.allocate(5);
    
    <span class = "comments">// Construct the objects and assign values to them</span>
    a1.construct(a, 1);
    a1.construct(a + 1, 2);
    a1.construct(a + 2, 3);
    a1.construct(a + 3, 4);
    a1.construct(a + 4, 5);
    
    <span class = "comments">// Print the objects</span>
    for(int i = 0; i != 5; ++i)
        std::cout &lt;&lt; a[i] &lt;&lt; std::endl;</pre>
        
        <p>If we want to destroy those objects we can do so simply by using our 'destroy()' function. This will only destroy the object however, if we wanted to deallocate the memory we must call the deallocate function after we have destroyed the objects allocated to that memory.</p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    std::allocator&lt;int> a1;
    
    <span class = "comments">// Allocate 2 space in memory for our objects</span>
    int *a = a1.allocate(2);
    
    <span class = "comments">// Construct the objects and assign values to them</span>
    a1.construct(a, 1);
    a1.construct(a+1, 2);
    
    std::cout &lt;&lt; a[0] &lt;&lt; std::endl;
    std::cout &lt;&lt; a[1] &lt;&lt; std::endl;
    
    <span class="comments">// Destroy the first and second objects</span>
    a1.destroy(a);
    a1.destroy(a+1);
    <span class="comments">// Deallocate the memory</span>
    a1.deallocate(a, 2);</pre>
        
        <p>In order to understand what we are doing here, let's understand how our computer works.  When we declare a variable we are setting aside memory for that objects construction.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Set aside 4 bytes on the stack, within this local scope</span>
    int x;</pre>
        
        <p>So here we are setting memory for the construction of type integer on the stack, however we want to control the location of that memory so if we want to construct that object on the 'heap' or 'free store' it would look like this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Set aside 4 bytes on the heap, using this integer pointer to locate that memory</span>
    int *x = new int;</pre>
        
        <p>This is the same as allocating memory on the free store using our 'memory' header.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::allocator&lt;int> a1;
    
    <span class = "comments">// Set aside 4 bytes on the free store using allocator 'x'</span>
    int *x = a1.allocate(1);</pre>
        
        <p>Ok, once we set aside the memory we are free to construct objects using only the space we have previously allocated on the heap.  These objects constructed must be of the type specified, could be a char, string, int, unsigned, bool, double, etc. 
            
        <span class = "nl">This is because each type requires a different amount of memory to be constructed and we would need to convert the data as well as the amount of memory required in order to construct a type different then the once initially declared.</span>
        
        <span class = "nl">However, what happens if we allocate memory on the heap without constructing any objects, then wouldn't this be consided raw memory? Fortunately there is a function for copying or moving this raw data from one container into another, it's called the 'uninitialized_copy()' function.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create a vector of ints</span>
    std::vector&lt;int> vi { 1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Create an allocator</span>
    std::allocator&lt;int> a1;
    
    <span class = "comments">// Allocate space for our pointer</span>
    int* p = a1.allocate(vi.size());
    
    <span class = "comments">// Copy the elements into our pointer</span>
    std::uninitialized_copy(vi.begin(), vi.end(), p);
    
    <span class = "comments">// Print those elements on to our console</span>
    for(int i = 0; i != vi.size(); ++i)
        std::cout &lt;&lt; *( p  + i ) &lt;&lt; std::endl;</pre>
        
        <p>In the example above we were able to copy the values from our vector into our pointer p. Let's look at another function, 'uninitialized_fill_n()'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::allocator&lt;int> a1;
    
    int *p = a1.allocate(10);
    
    std::uninitialized_fill_n(p, 10, 2);
    
    for(int i = 0; i != 10; ++i)
        std::cout &lt;&lt; *( p + i ) &lt;&lt; std::endl;</pre>
        
        <p>So, the 'uninitialized_fill_n()' will fill the container with values equal to the elements assigned to the second argument in the function.</p>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib21.html">Previous</a>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  