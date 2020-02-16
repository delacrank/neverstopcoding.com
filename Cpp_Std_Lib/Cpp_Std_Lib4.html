<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sequential Containers Part 2 - Cpp Standard Library</title>
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

        <h1>Sequential Containers Part 2 - Cpp Standard Library</h1>
        
        <h2>Sequential Containers Part 2</h2>
        
            <p>In this section we are going to be working with the std library array container, not the built in array we've been using so far.  The beauty of working with the library style array is that we can use many functions from our library, where as with the built in array we have to manually code the operations we need.
        
        <span class = "nl">Let's take a moment to look at the different between the two types of arrays below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    #include &lt;iostream>
    #include &lt;array>
    #include &lt;string>
    
    int main()
    {
        <span class = "comments">// A built in array</span>
        std::string names[3] {"first", "second", "third"};
            
        for(std::string i : names)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
            
        <span class = "comments">// A standard library array</span>
        std::array&lt;std::string, 3> names2 {"first2", "second2", "third2"};
        
        for(std::string i : names2)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
    }</pre>
        
        <p>Notice, our built in arrays are not part of a class, so they cannot use member functions like begin() and end().  Using our array container allows us to use const iterators and reverse_iterators as well as other functions we will find out about later.</p>
        
        <hr />
        
        <!-- assign and swap -->
        <h3>Assign &amp; Swap</h3>
        
            <p>Assign and swap are functions we can use with our sequential containers.  Assign just copies elements from one container into the other, similar to our constructor only it isn't used to initialize our new container.
        
        <span class = "nl">Swap is a function which exchanges the elements from one container into another, only it only points to the elements in the other container it doesn't actually move the elments themsevles.</span>
        
        <span class = "nl">Let's look at some examples of using these functions.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int main()
    {
        std::vector&lt;std::string> words {"one", "two", "three"};
        
        std::vector&lt;std::string> words2;
        
        <span class = "comments">// We can assign values like this</span>
        words2.assign(words.begin(), words.end());
        
        <span class = "comments">// Change the elements using list initialization</span>
        words = {"four", "five", "six", "seven", "eight"};
        
        <span class = "comments">// As long as they are the same type of container and element type we can swap</span>
        swap(words, words2);
        
        for(std::string i : words)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
    }</pre>
        
        <hr />
        
        <h3>Relational Operators</h3>
        
            <p>Relational operators are useful for comparing the size between two containers. The way they work is by first comparing the size of the first elements in each container and then those match they will compare the amount of elements.
        
        <span class = "nl">Let's look at some examples of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi1 {1,2,3,4,5};
    std::vector&lt;int> vi2 {2,3,4,5,6};
        
    if(vi1 > vi2)
        std::cout &lt;&lt; "vi1 is greater" &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "vi2 is greater" &lt;&lt; std::endl;</pre>
        
        <p>We had the same amount of elements but the numbers in the second vector were larger than the numbers in the first. Let's keep the numbers equal to each other but increase the amount of total numbers in one vector.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi1 {1, 2, 3, 4, 5, 6};
    std::vector&lt;int> vi2 {1, 2, 3, 4, 5};
        
    if(vi1 > vi2)
        std::cout &lt;&lt; "vi1 is greater" &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "vi2 is greater" &lt;&lt; std::endl;</pre>
        
        <p>Here we see when the amounts per element match, the container with the greater amount of elements is larger. We can also use the '==' sign to see if they are equal to each other in element size and amount.</p>
        
        <hr />
        
        <!-- adding elements -->
        <h3>Adding elements</h3>
        
            <p>The standard library provides us with some functions to add and remove elements from every container except the array which has a fixed size.
        
        <span class = "nl">The first call which we have used before allows us to append elements to the end of a container, it's called the push_back() function. The push back function works for containers: string, deque, vector and list.</span>
        
        <span class = "nl">Let's look at an example.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    vi.push_back(6);
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    
    std::string s("12345");
    s.push_back('6');
    for(char i : s)
        std::cout &lt;&lt; i  &lt;&lt; std::endl;
   
    std::list&lt;int> li {1, 2, 3, 4, 5};
    li.push_back(6);
    for(int i : li)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
        
    std::deque&lt;int> di {1, 2, 3, 4, 5};
    di.push_back(6);
    for(int i : di)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>Say for example you want to add an element to the front of a container. There are only three containers which can handle this operation quickly and with little resource. The deque, list and forward_list. The name of the function is similar to push_back, it's called 'push_front()' cause we are pushing to the front of line, not the back.
        
        <span class = "nl">Let's look at some examples.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::list&lt;int> li {1, 2, 3, 4, 5};
    li.push_front(0);
    for(int i : li)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
   
    std::forward_list&lt;int> fli {1, 2, 3, 4, 5};
    fli.push_front(0);
    for(int i : fli)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
        
    std::deque&lt;int> di {1, 2, 3, 4, 5};
    di.push_front(0);
    for(int i : di)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>The last and most expensive way of adding elements to a container is by using a function called insert().  It allows insertion anywhere into the container as long as that location is specified by the iterators.
        
        <span class = "nl">The same containers that allowed push_back() function also allow the insert() function.  Let's look at some examples.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    <span class = "comments">// Insert number zero at the beginning of our container</span>
    vi.insert(vi.begin(), 0);
    <span class = "comments">// Insert number six at the end of our container</span>
    vi.insert(vi.end(), 6);
    
    std::vector&lt;int> vi2 {7, 8, 9, 10};
    <span class = "comments">// Insert the range of these elements from this container into the end of our container</span>
    vi.insert(vi.end(), vi2.begin(), vi2.end());
    
    <span class = "comments">// Display the results</span>
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib3.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib5.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  