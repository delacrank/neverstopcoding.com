<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Associative Containers Part 2 - Cpp Standard Library</title>
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
    
        <h1>Associative Containers Part 2 - Cpp Standard Library</h1>
        
        <h2>Associative Containers</h2>
        
            <p>We are going to work on using vectors within our map containers and understanding what a pair is and how we can use it with our associative containers.
        
        <span class = "nl">First, let's look at how we can add a vector of strings to our map container.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;std::string, std::vector&lt;std::string>> mv;
    
    <span class = "comments">// Create loops to allow input for elements for both map key and map values</span>
    <span class = "comments">// Use '@q' to stop input for key or value</span>
    for(std::string s; std::cout &lt;&lt; "parent element: ", std::cin >> s &amp;&amp; s != "@q";)
        for(std::string x; std::cout &lt;&lt; "child element: ", std::cin >> x &amp;&amp; x != "@q";)
            mv[s].push_back(x);
            
    <span class = "comments">// Print out the results of our inputs</span>
    for(std::pair&lt;std::string, std::vector&lt;std::string>> i : mv) {
        std::cout &lt;&lt; i.first;
        std::cout &lt;&lt; std::endl;
        for(std::basic_string&lt;char> const &amp;x : i.second)
            std::cout &lt;&lt; x &lt;&lt; " " &lt;&lt; std::endl;
    }
        
    std::cout &lt;&lt; std::endl;</pre>
        
        <p>This program is an example of how we can input strings into our map and use a pair in order to sort out the keys from our values.  Let's look at other examples of pairs and understand how the first and second members of this function work.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// We can initialize a pair like so</span>
    std::pair&lt;int, int> p1 {1, 2};
    
    std::cout &lt;&lt; p1.first &lt;&lt; " " &lt;&lt; p1.second &lt;&lt; std::endl;
    
    <span class = "comments">// To change the values let's use 'make_pair()' function</span>
    p1 = std::make_pair(3, 4);
    
    std::cout &lt;&lt; p1.first &lt;&lt; " " &lt;&lt; p1.second &lt;&lt; std::endl;</pre>
        
    <p>Let's see how we can use our pairs to insert pairs of elements into a vector.</p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Make our vector</span>
    std::vector&lt;std::pair&lt;int, int>> mv;
    int x, y;
    
    <span class = "comments">// Insert our pairs of elements</span>
    while(std::cin >> x >> y)
        mv.push_back(std::make_pair(x, y));
    
    <span class = "comments">// Print out our vector</span>
    for(std::pair&lt;int, int> i :  mv)
        std::cout &lt;&lt; i.first &lt;&lt; " " &lt;&lt; i.second &lt;&lt; std::endl;</pre>    
        
        <hr />
        
        <!-- map iterators -->
        <h3>Map Iterators</h3>
        
            <p>Let's take a closer look at iterating through a map container.  In our last section we used a few map and set iterators to loop through all of our elements, let's see some more examples.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi { {1,2}, {2,3}, {3,4}, {4,5}, {5,6} };
    
    std::map&lt;int, int>::iterator i = mi.begin();
    
    while(i != mi.end()) {
        std::cout &lt;&lt; i->first &lt;&lt; " " &lt;&lt; i->second &lt;&lt; std::endl;
        ++i;
    }</pre>
        
        <p>Here we declared a map iterator and by incrementing that iterator we could see every element pair in our map.  We could take it one step further and change the value of our mapped element, let's see how this would look.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi { {1,2}, {2,3}, {3,4}, {4,5}, {5,6} };
    
    std::map&lt;int, int>::iterator i = mi.begin();
    
    while(i != mi.end()) {
        std::cout &lt;&lt; i->first;
        <span class = "comments">// Let's add five to the value of our mapped element</span>
        i->second += 5;
        std::cout &lt;&lt; i->second &lt;&lt; std::endl;
        ++i;
    }</pre>
        
        <p>Let's see some examples of how to add elements to a set or a map using our 'insert' function. Remember that our map or set containers cannot hold duplicate keys, for that we would require the use of a multimap or multiset.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi { 1, 2, 3, 4, 5, 6, 7, 8, 9 };
    
    std::set&lt;int> si;
    
    <span class = "comments">// Insert all of our elements from our vector into our set</span>
    si.insert(vi.begin(), vi.end());
    
    for(auto i : si)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
    <p>To do this for our map would be a little different, let's see an example of this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi;
    
    mi.insert( std::make_pair(1,2) );
    mi.insert( std::make_pair(2,3) );
    mi.insert( std::make_pair(3,4) );
    mi.insert( std::make_pair(4,5) );
    mi.insert( std::make_pair(5,6) );
    
    for(auto i : mi)
        std::cout &lt;&lt; i.first &lt;&lt; " " &lt;&lt; i.second &lt;&lt;  std::endl;</pre>
        
        <p>We can even use our iterators to check and see if a value has been properly added to a function.  In order to do this we need to use the function to pass the value of our map along with a boolean value.
        
        <span class = "nl">We can then use an if statement to see if our map already contains the specified key or mapped value.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi;
        
    int x;
    
    while(std::cin >> x) {
        std::pair&lt;std::map&lt;int, int>::iterator, bool> check = mi.insert({x, 1});
        
        <span class = "comments">// Check to see if we have passed this value already</span>
        if(!check.second)
            std::cout &lt;&lt; "value already added: " &lt;&lt; ++check.first->second &lt;&lt; std::endl;
    }
    
    for(auto i : mi)
        std::cout &lt;&lt; i.first &lt;&lt; " " &lt;&lt; i.second &lt;&lt; std::endl;</pre>
        
        <p>In the program above we insert a value into the our map's key our first member of our pair, if that key already has a mapped value of that key then we will increment the mapped value by one to show that we added an additional copy.  Otherwise our program will continue to add values to our key setting the base mapped value to one by default.</p>
       
        <hr />
        <br />
        <a href="Cpp_Std_Lib16.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib18.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  