<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" /> <title>Sequential Containers Part 3 - Cpp Standard Library</title>
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

        <h1>Sequential Containers Part 3 - Cpp Standard Library</h1>
        
        <h2>Sequential Containers Part 3</h2>
        
            <p>So far we have spoken about the different types of containers: vector, string, array, list, forward_list, and deque. Some containers are fixed in size (array), others only support appending elements to the front (forward_list), the rest can handle insertion and appending elements to the back.
        
        <span class = "nl">In this section we are going to be focusing on accessing elements in our array.  Currently we can only do this using our iterators and our subscript operator '[]'. Thankfully, we have a handy library which we can use to call functions to handle the access and changing of elements in our containers.</span>
        
        <span class = "nl">These functions are the 'front()', for first element, 'back()' for element before the last and the 'at()' function for any place in our container.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    
    <span class = "comments">// Display first element</span>
    std::cout &lt;&lt; vi.front() &lt;&lt; std::endl;
    
    <span class = "comments">// Display last element</span>
    std::cout &lt;&lt; vi.back() &lt;&lt; std::endl;
    
    <span class = "comments">// Display 3rd element, 0 being the first</span>
    std::cout &lt;&lt; vi.at(2) &lt;&lt; std::endl;</pre>
        
        <p>We can also use these functions to change the elements in our container, or we can use the iterators.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    
    <span class = "comments">// We can change the value like this</span>
    vi.front() = 0;
    
    <span class = "comments">// Or we can assign a reference to the location</span>
    int &amp;i = vi.back();
    
    <span class = "comments">// And then change the value through the reference</span>
    i = 4;
    
    <span class = "comments">// Of course we can always use a subscript operator as well</span>
    vi[2] = 2;
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
    
    <hr />
        
    <!-- removing elements -->
    <h3>Removing elements</h3>

        <p>There are four functions we can use in order to remove elements from our containers.  The first two are 'pop_back()' and 'pop_front()' these elements are going to be removed from either the front or the rear of the container. 
        
        <span class = "nl"> Only the containers which use the push_front() function can use the pop_front() function like deque, list and forward list. The same holds true for the push_back() and the pop_back() functions, only the string, list, deque and vector containers can use those functions.</span>
        
        <span class = "nl">Let's looks at some examples of using the pop_back() and pop_front() functions.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    
    <span class="comments">// Remove the last element</span>
    vi.pop_back();
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
        
    std::list&lt;std::string> ls {"one", "two", "three", "four", "five"};
    
    <span class="comments">// Remove the last element</span>
    ls.pop_back();
    <span class="comments">// Remove the first element</span>
    ls.pop_front();
    
    for(std::string i : ls)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>So, we can only remove one element at a time unless we create a loop.  What if we want to remove a range of elements and from the middle of the container.  For this we can use the 'erase()' function.
        
        <span class = "nl">There is also another function which removes all the elements in a container, let's take a look at using both these functions.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    std::vector&lt;int> vi1 {1, 2, 3, 4, 5};
    
    <span class="comments">// Remove every element between the first and last of this container</span>
    vi.erase(++vi.begin(), --vi.end());
    
    <span class="comments">// Remove all the elements in the container</span>
    vi1.clear();
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
        
    for(int i : vi1)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>We can add more elements to the container by just using the assign() or push_back() functions.</p>
        
        <hr />
        
        <!-- Emplace -->
        <h3>Emplace</h3>
        
            <p>Emplace is a function that acts a constructor to types we create.  Emplace allows us to add or remove elements where we couldn't normally use push_back() and push_front().</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    struct Person 
    {
        Person(std::string s, int n) : name(s), number(n) {}
        std::string name;
        int number;
    };
    
    int main()
    {
        std::vector&lt;Person> p;
        
        p.emplace_back("June", 2123241212);
        p.emplace_back("Jake", 2127382716);
        p.emplace_back("John", 2120901921);
        
        for(auto i : p)
            std::cout &lt;&lt; i.name &lt;&lt; " " &lt;&lt; i.number &lt;&lt; std::endl;
    }</pre>
        
        <p>Emplace just acts like a constructor, let's look at the alternative to using Emplace for our vector of people.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    struct Person 
    {
        Person(std::string s, int n) : name(s), number(n) {}
        std::string name;
        int number;
    };
    
    int main()
    {
        std::vector&lt;Person> p;
        
        p.push_back(Person("June", 2123241212));
        p.push_back(Person("Jake", 2127382716));
        p.push_back(Person("John", 2120901921));
        
        std::cout &lt;&lt; p.at(0).name &lt;&lt; " " &lt;&lt; p.at(0).number &lt;&lt; std::endl;
        std::cout &lt;&lt; p.at(1).name &lt;&lt; " " &lt;&lt; p.at(1).number &lt;&lt; std::endl;
        std::cout &lt;&lt; p.at(2).name &lt;&lt; " " &lt;&lt; p.at(2).number &lt;&lt; std::endl;
    }</pre>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib4.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib6.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  