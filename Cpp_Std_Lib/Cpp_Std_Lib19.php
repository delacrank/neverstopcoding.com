<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Associative Containers Part 4 (Erasing Elements) </title>
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
    
        <h1>Associative Containers Part 4 (Erasing Elements) - Cpp Standard Library</h1>
        
        <h2>Associative Containers (Erasing Elements)</h2>
        
            <p>Now that we understand how to use lower_bound, upper_bound and equal_range functions to select some of our map_type elements in a multimap container.  Let's see how we can add or remove those elements.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::multimap&lt;int, int> mi { {1, 2}, {1, 3}, {1, 4}, {2, 2}, {2, 3}, {2, 4}, {3, 1} };
    
    <span class = "comments">// Erase the specified element</span>
     std::multimap&lt;int, int>::iterator find = mi.find(2);
    if(find->second == 2)
       mi.erase(find);

    <span class = "comments">// Display all the elements in our multimap</span>
    for(int i = 1; i != 4; ++i) {
        std::cout &lt;&lt; "Parent Key: " &lt;&lt; mi.find(i)->first &lt;&lt; std::endl;
        for(std::pair&lt;std::multimap&lt;int, int>::iterator,
        std::multimap&lt;int, int>::iterator> x = mi.equal_range(i);
        x.first != x.second; ++x.first)
            std::cout &lt;&lt; "Child value: " &lt;&lt; x.first->second &lt;&lt; std::endl;
    }</pre>
        
        <hr />
        
        <!-- Unordered maps -->
        <h3>Unordered Associative Containers</h3>
        
            <p>There are four sets of unordered associative containers: unordered_map, unordered_multimap, unordered_set and unordered_multiset. The difference between an ordered and unordered container is the order of the elements, in an ordered container the elements are ordered either alphabetically or numerically from least to greatest.  In an unordered container the elements are arranged in groups called buckets and these order of these buckets can be modified using something called a 'hash' function.
        
        <span class = "nl">Let's look at some code of how we could create an unordered map, be sure to include the header file '&lt;unordered_map>'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::unordered_map&lt;int, int> umi { {1,2}, {2,3}, {3,4}, {4,5}, {5,6} };
    
        std::cout &lt;&lt; "size: " &lt;&lt; umi.size() &lt;&lt; std::endl;
        std::cout &lt;&lt; "bucket count: " &lt;&lt;  umi.bucket_count() &lt;&lt; std::endl;
        std::cout &lt;&lt; "load factor: " &lt;&lt;  umi.load_factor() &lt;&lt; std::endl;
        std::cout &lt;&lt; "max load factor: " &lt;&lt;  umi.max_load_factor() &lt;&lt; std::endl;
    
     for(std::unordered_map&lt;int, int>::iterator i = umi.begin();
     i != umi.end(); ++i)
        std::cout &lt;&lt; umi.bucket(i->first) &lt;&lt; " " &lt;&lt; umi.bucket(i->second) &lt;&lt; std::endl;</pre>
        
        <p>I won't go into too much detail about unordered containers, due to how they are organized (through the use of a hash template).  I won't get into templates until later in this tuturial but once I do, I will create a link for it.</p>
        
        
          <hr />
        <br />
        <a href="Cpp_Std_Lib17.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib19.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  