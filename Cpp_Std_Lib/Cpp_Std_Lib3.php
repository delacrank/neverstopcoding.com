<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sequential Containers - Cpp Standard Library</title>
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

        <h1>Sequential Containers - Cpp Standard Library</h1>
        
        <h2>Sequential Containers</h2>
        
            <p>There are six types of sequential containers: vector, deque, list, forward_list, array and string.  Using any of them requires calling the necessary header files. 
        
        <span class = "nl">You are already familiar with calling and initializing a string and a vector, elements that come into these containers are usually from the back.  You are also familiar with the array althou we haven't used the c style library array yet, the main difference between the array and the other containers is that an array is a fixed length, you can't increase or decrease the size of it once its created like you could with a vector or a string.</span>
        
        <span class = "nl">List is a container that supports add elements from either the front or the back, users can also insert elements into a list from any point in the container at high speeds.  The trade off is the amount of memory required to use the list container.</span>
        
        <span class = "nl">Let's look at an example of a list below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;list>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::list&lt;std::string> ls {"ok", "good", "maybe", "no"};
        
        ls.push_back("yes");
        
       for(std::list&lt;std::string>::iterator i = ls.begin(); i != ls.end(); i++)
        {
            std::cout &lt;&lt; *i &lt;&lt; std::endl;
        }
    }</pre>
        
        <p>Similar to a vector, you can add elements to the list container using the push_back function or loop through it using iterators. Let's look at some other options with respect to using iterators, let's say if we wanted to reverse the order.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;list>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::list&lt;std::string> ls {"ok", "good", "maybe", "no"};
        
        ls.push_back("yes");
        
        for(std::list&lt;std::string>::reverse_iterator i = ls.rbegin(); i != ls.rend(); i++)
        {
            std::cout &lt;&lt; *i &lt;&lt; std::endl;
        }
    }</pre>
        
        <p>Here, we are reversing the order at which we call the elements from our container. Just note that if we use the 'rbegin()' function that we need to also use the 'rend()' function with it, also the iterator should be a 'reverse_iterator'.</p>
        
    <hr />
        
    <!-- copy construsctor -->
    <h3>The Copy Constructor</h3>

        <p>The constructor is something we can use to initialize or copy elements from one container to another, however in order for us to copy a container both the container and element types must match.  If the type doesn't match, then the element type should be able to be converted. 
        
        <span class = "nl">Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;list>
    #include &lt;string>
    #include &lt;iostream>
    #include &lt;vector>
    #include &lt;deque>
    
    int main()
    {
        std::list&lt;const char*> ls {"ok", "good", "maybe", "no"};
        <span class = "comments">// Copy this container into this one, convert const char* into string elements</span>
        std::list&lt;std::string> ls2 (ls.begin(), ls.end()); 
        
        std::vector&lt;int> vi {1,2,3,4,5};
           <span class = "comments">// Copy this container into this one, convert int into double elements</span>
        std::vector&lt;double> vi2 (vi.begin(), vi.end());
        
        std::deque&lt;std::string> ds {"first", "second", "third"};
        <span class = "comments">// Copy this container into this one</span>
        std::deque&lt;std::string> ds2(ds);
        <span class = "comments">// Or we can use assignment to copy the container once its initialized</span>
        ds2 = ds;
        
        <span class = "comments">// Print the results</span>
        for(std::string i : ls2)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
            
        for(int i : vi2)
            std::cout &lt;&lt; i &lt;&lt; std::endl; 
        
          for(std::string i : ds2)
            std::cout &lt;&lt; i &lt;&lt; std::endl; 
    }</pre>    
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib2.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib4.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  