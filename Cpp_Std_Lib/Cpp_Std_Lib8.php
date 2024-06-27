<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Container Adaptors - Cpp Standard Library</title>
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
    
        <h1>Container Adaptors - Cpp Standard Library</h1>
        
        <h2>Container Adaptors</h2>
        
            <p>There are three types of container adaptors: 'stack', 'queue' and 'priority_queue'. The purpose of using these adaptors is to control the order in which elements are added or removed from a container.
        
        <span class = "nl">If I were to explain the stack adaptor, I would say that it works similar to a stack of cards.  When you add an element it goes to the very beginning of the list, however if you want to remove an element you can only remove the most recent addition before accessing any elements added prior. </span>
        
        <span class = "nl">This is known as Last-In, First-Out. The stack only has 4 functions: 'push()', 'pop()', 'emplace()' and 'top()'. There is no 'back()' function because we can't access elements from the bottom of the stack.</span>
        
        <span class = "nl">Let's look at an example.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Declare our stack</span>
    std::stack&lt;int> si;
    
    <span class = "comments">// Add five int elements to it</span>
    si.push(1);
    si.push(2);
    si.push(3);
    si.push(4);
    si.push(5);
    
    <span class = "comments">// While stack is not empty display top element and remove an element</span>
    while(!si.empty())
    {
        std::cout &lt;&lt; si.top() &lt;&lt; std::endl;
        si.pop();
    }</pre>
        
        <p>The order is very important to how elements or added or removed from the stack, here we added the numbers 1, 2, 3, 4 and then 5.  So we place the number 2 on top of one, number 3 on top of 2 so on and so forth.
        
        <span class = "nl">When we removed the elements we had to start with 5 first because it was at the top of the stack.  Just imagine a stack being like a stack of Jenga blocks, you can't remove the bottom piece because the whole structure would crash.</span>
        
        <span class = "nl">Let's see how we can use this data structure to manage vector.  First we need to learn the syntax necessary to add a vector to our stack.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5};
    std::stack&lt;int, std::vector&lt;int>> si(vi);
    
    <span class = "comments">// If we iterate through our vector we can see the order of the elemnts</span>
    for(auto i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    
    <span class = "comments">// If we remove elements from our stack we can see the order of the elements</span>
    while(!si.empty())
    {
        std::cout &lt;&lt; si.top() &lt;&lt; std::endl;
        si.pop();
    }</pre>
        
        <p>Notice that a stack does not support iterators, there is no way to access any of the items in our stack other than using the 'top()' function.  If we look at the output of our program in the console you will notice that with our vector as expected it displayed the first element we added. However, with our stack the last element was displayed first because, the last items added to our stack will also be the first ones out.
        
        <span class = "nl">Let's take a look at the Queue and Priority_Queue Adaptors.  These have a different methodology in handling elements, the work by using the FIFO methodology, first-in, first-out. To access queue containers we need to use the 'queue' header file, the queue adaptor can also handle 'forward_list' container. </span>
        
        <span class = "nl">Let's look at an example.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::list&lt;int> vi {1, 2, 3, 4, 5};
    std::queue&lt;int, std::list&lt;int>> qi(vi);
    
    for(auto i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    
    while(!qi.empty())
    {
        std::cout &lt;&lt; qi.front() &lt;&lt; std::endl;
        qi.pop();
    }</pre>
        
        <p>Alright, well if you ran that program and looked at the output you would notice that similar to the way a vector iterates through its elements, a queue also shares the same method.  The first elements in are also the first elements out of the queue.
        
        <span class = "nl">Some of the functions a queue uses are: 'pop()' which removes elements, 'front()' displays either the first element, 'back()' last element for queue, 'top()' for a priority_queue, 'push()' adds an element, 'emplace()' constructor for user created types.</span></p>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib7.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib9.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  