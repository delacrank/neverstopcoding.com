<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms - Cpp Standard Library</title>
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
    
        <h1>Algorithms - Cpp Standard Library</h1>
        
        <h2>Algorithms</h2>
        
            <p>Algorithms are a set of generic functions which we can use on our sequential containers to find, sort, remove, insert and organize data elements.
        
        <span class = "nl">I can very quickly go into to using algoirthms in some of my containers because they are just pre-built functions.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::cout &lt;&lt; *(find(vi.begin(), vi.end(), 3)) &lt;&lt; std::endl;</pre>
        
            <p>In order to see the contents of my function, I need to use a dereference operator because our algorithms will return our values in the form of an iterator or pointer.
        
        <span class = "nl">If the result of the function is true it will return the number, otherwise it will return a negative number. The way algorithms work on containers is by accessing every element to the container, comparing it to the element we want to retrieve and then storing the value in element after our last or 'end()'.</span>
        
        <span class = "nl">Let's see another algorithm, this time we will use the count function to return the amount of times a certain value appears in the given container.</span></p>
        
     <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::cout &lt;&lt; count(vi.begin(), vi.end(), 3) &lt;&lt; std::endl;</pre>
        
        <p>This time our value was returned as a string rather than as an iterator so we could print the result without having to use the dereference operator.
        
        <span class = "nl">Accumulate is an algorithm that adds or concatenates all the elements in our container, depending on whether it is a string or an number.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Add the sum of our elements to the last arguement in our function call</span>
    std::cout &lt;&lt; accumulate(vi.begin(), vi.end(), 0) &lt;&lt; std::endl;</pre>
        
        <hr />
        
        <!-- write to -->
        <h3>Algorithms that Write to elements</h3>
        
            <p>So far we have only been using read-only algorithms that read values from containers and compute a result based on those elements.  In these next examples we are going to use algorithms that read and additionally write to elements in our containers.
        
        <span class = "nl">Let's start with a simple one, 'fill()' similar to assign to writes to a container after the container has been constructed.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Change all the values to zero in this vector</span>
    fill(vi.begin(), vi.end(), 0);
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>The function 'fill_n()' does the same thing as fill only it takes a number instead of an iterator as the second arguement. Becareful when writting to containers because our functions do not check to see if our container has all the necessary elements to write to first.
        
        <span class= "nl">Another good algorithm is called 'copy()' it copies the contents of one container into another.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::vector&lt;int> vi2(9);
    
    copy(vi.begin(), vi.end(), vi2.begin());
    
    for(int i : vi2)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
    <hr />
        
    <!-- back_inserter -->
    <h3>Back_Inserter</h3>
        
        <p>A back inserter is a way of adding elements to a container at the rear of the container. Let's take a look at some of the ways we an implement this function in order to add elements to our containers.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    vector&lt;int> vi {0, 1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Define i as a back_inserter for a vector of ints</span>
    std::back_insert_iterator::&lt;std::vector&lt;int>>(i) = back_inserter(vi);
    
    <span class = "comments">// Initialize our iterator with the value of 10</span>
    *i = 10;
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>If for example, I wanted to use my back_inserter combined with my 'fill_n()' function to place filled elements into the rear of my container.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    vector&lt;int> vi {0, 1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// We can use this function as an iterator, for 1 element, the value set as 10</span>
    fill_n(back_inserter(vi), 1, 10);
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
 
        <hr />
        <br />
        <a href="Cpp_Std_Lib8.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib10.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  