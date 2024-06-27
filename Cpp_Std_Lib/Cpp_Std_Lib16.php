<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Associative Containers - Cpp Standard Library</title>
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
    
        <h1>Associative Containers - Cpp Standard Library</h1>
        
        <h2>Associative Containers</h2>
        
            <p>There are two types of associative containers, map and set.  Within these two types there are multi key containers or unique key containers.  Yet, there are also ordered and unordered containers, this means that there are eight different combinations of possible associative containers.
        
        <span class = "nl">This means you can have a map, multimap (for multiple keys), an unordered_map or an unordered_multimap container. The same rings true for our set container: set, multiset, unordered_set or unordered_multiset.</span>
        
        <span class = "nl">In order to understand the difference between the eight types of associate containers let's look at some examples.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    <span class = "comments">// Be sure to include map header '#include &lt;map>'</span>
    
    <span class = "comments">// Let the each first element for each pair refer to the second</span>
    std::map&lt;int, int> mi { {1,2}, {3,4}, {5,6}, {7,8}, {9,10} };
        
    <span class = "comments">// Print all the keys for this map 1, 3, 5, 7, 9</span>
    for(int i = 1; i &lt; 10; i += 2)
            std::cout &lt;&lt; mi[i] &lt;&lt; std::endl;
    }</pre>
        
        <p>With sequential containers we use numbers to refer to each element usually starting with element zero and increasing incrementally by one.  However, with associative containers we have control over how each element will be refered to.  
            
    <span class = "nl">In the first example, I use odd numbers as the key in order to refer to our elements, the key in this example points to our value which, is even numbers.  Let's look at another example where we set the key equal to characters.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    <span class = "comments">// Let are characterss be the maps and the numbers be the keys</span>
    std::map&lt;char, int> mi { {'a',1}, {'b',2}, {'c',3}, {'d',4}, {'e',5} };
        
    <span class = "comments">// 97 converted into ascii equals lowercase 'a'</span>
    for(int i = 97; i &lt; 102; i ++)
            std::cout &lt;&lt; mi[i] &lt;&lt; std::endl;
    }</pre>
        
        <p>If you want to add another element, that can be done too similar to the way we assign values to a built in array using the subscript operator, the difference being that arrays cannot be increased or decreased in size once initialized.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    std::map&lt;char, int> mi;
    
    mi['a'] = 1;
    mi['b'] = 2;
    mi['c'] = 3;
    mi['d'] = 4;
    mi['e'] = 5;
    
    for(int i = 97; i &lt; 102; i ++)
            std::cout &lt;&lt; mi[i] &lt;&lt; std::endl;</pre>
     
        <p>So that covers maps, let's try to understand what a set is.  A set is a group of keys, that's it there aren't any values associated with those keys like with a map.  An example of how we would use a set would be to restrict which keys were returned in a map.
        
        <span class = "nl">Let's see some code to see how this would work.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    std::map&lt;char, int> mi{ {1,1}, {2,2}, {3,3}, {4,4}, {5,5}, {6,6}, {7,7}, {8,8}, {9,9} };
    
    <span class = "comments">// Ignore these numbers</span>
    std::set&lt;int> si { 1, 3, 5, 7, 9};
    
    <span class = "comments">// Ignore all the keys initialized in my set</span>
    for(int i = 1; i &lt; 10; i ++)
        if(si.find(i) == si.end())
            std::cout &lt;&lt; mi[i] &lt;&lt; std::endl;</pre>
        
        <p>In the code above I initialized a set called 'si' equal to odd numbers, then I used the find function to compare those odd keys to the keys in my map.  Any of the keys in the set equal to the ones in my map were ignored, all values were returned.
        
        <span class = "nl">Now, let's look at some examples of multiset or multimap containers. The difference between 'multi' and 'unique' associative containers is that unique containers cannot have multiple copies of the same key.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    std::multimap&lt;char, int> mi{ {1,1}, {1,1}, {2,2}, {2,2}, {3,3}, {4,4},
        {5,5}, {6,6}, {7,7}, {7,7}, {8,8}, {8,8}, {9,9} };
    
    std::multiset&lt;int> si { 1, 1, 3, 3, 5, 5, 7, 9};
    
    for(std::multimap&lt;char, int>::iterator i = mi.begin(); i != mi.end(); ++i)
        std::cout &lt;&lt; std::to_string(i->first) &lt;&lt; " " &lt;&lt; i->second &lt;&lt; ' ';
    
    std::cout &lt;&lt; std::endl;
    
    for(std::multiset&lt;int>::iterator i = si.begin(); i != si.end(); ++i)
        std::cout &lt;&lt; *i &lt;&lt; ' ';
        
    std::cout &lt;&lt; std::endl;</pre>   
        
        <p>Here we can see that calling a multset allows multiple copies of the same key, if we tried to run this loop on just a map or a set it would not return the duplicate keys.</p>
        
         <hr />
        <br />
        <a href="Cpp_Std_Lib15.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib17.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  