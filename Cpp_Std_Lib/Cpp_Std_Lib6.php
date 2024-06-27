<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  <title>Sequential Containers Part 4 - - Cpp Standard Library</title>
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
    
        <h1>Sequential Containers Part 4 - Cpp Standard Library</h1>
        
        <h2>Sequential Containers Part 4</h2>
        
            <p>When working with containers you should be careful when adding and removing elements.  Oftentimes an iterator which refers or points to a certain element in the container will often refer or point to another element once an element has been added or removed.
        
        <span class ="nl">It is a good idea to recompute the end() iterator when making changes to a container, otherwise your container can infinitely keep adding more elements. This occurs if for example you create a loop which checks the end of the container. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Doing this is a bad idea if you are going to be adding elements</span>
    std::vector&lt;int>::iterator begin = vi.begin(), end = vi.end();
    
    while(begin != end)</pre>
        
        <p>Both iterators 'begin' and 'end' will be invalidated at some point if the container continues to grow.  Using this code is makes more sense.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    while(begin != vi.end())</pre>
        
        <p>In our second example we recomputed the value of the end of our container each time the loop is ran.</p>
        
        <hr />
        
        <!-- resizing -->
        <h3>Resizing Containers</h3>
        
        <p>This next section talks about resizing containers.  Using the resize function we can change the size of a container to hold either more or less elements.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> v1(100);
    
    <span class="comments">// Erase 90 elements to the back of the vector</span>
    v1.resize(10);
    
    <span class="comments">// Add 190 elements to the back of the vector</span>
    v1.resize(200);</pre>
        
        <hr />
        
        <!-- capacity and reserve -->
        <h3>Capacity and Reserve</h3>
        
            <p>Everytime we add elements to our vector, the compiler needs to allocate space for this new object and move all the old elements into the new memory.  In order to save processing power some of our functions are written so that our new vector comes with reserved memory, this way if we add another element, the compiler already has that memory allocated and doesn't need to perform the operation again.
        
        <span class="nl">There is a way to check in order to find out how much memory our container has in reserve. The function is called 'capacity()', let's play around with some of these functions to see how they work.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {0,1,2,3,4,5,6,7,8,9};
        
    <span class="comments">// Display the size and capacity of the vector</span>    
    std::cout &lt;&lt; vi.size() &lt;&lt; " " &lt;&lt;
            vi.capacity() &lt;&lt; std::endl;
        
    vi.push_back(10);
        
    <span class="comments">// Display the size and capacity of the vector</span>
    std::cout &lt;&lt; vi.size() &lt;&lt; " " &lt;&lt;
            vi.capacity() &lt;&lt; std::endl;</pre>
        
    <p>Here, we see that our compiler has added 9 additional potential elements to our vector in order to handle future push_back()'s. Had we not had the ability to see the capacity of our vector we wouldn't have noticed this.
        
        <span class = "nl">We can also manage how many elements to allocate space for by using reserve. Or we can reduce the amount of allocated space by using 'shrink_to_fit()'.</span>
        
        <span class = "nl">Let's look at an example of this.</span>
              </p>    
            
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {0,1,2,3,4,5,6,7,8,9};
        
    std::cout &lt;&lt; vi.size() &lt;&lt; " " &lt;&lt;
            vi.capacity() &lt;&lt; std::endl;
        
    <span class="comments">// Increase reserved space to 30</span>
    vi.reserve(30);
        
    std::cout &lt;&lt; vi.size() &lt;&lt; " " &lt;&lt;
            vi.capacity() &lt;&lt; std::endl;
            
    <span class="comments">// Remove all reserved space</span>
    vi.shrink_to_fit();
    
    std::cout &lt;&lt; vi.size() &lt;&lt; " " &lt;&lt;
            vi.capacity() &lt;&lt; std::endl;</pre>
        
        <p>These functions are different than the resize function, here we aren't actually created new elements and initializing the values to default.  Reserve just sets aside memory for potential elements.</p>
    
        <hr />
        <br />
        <a href="Cpp_Std_Lib5.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib7.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  