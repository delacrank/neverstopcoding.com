<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Iterator Arithmetic - Cpp Programming</title>
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
<?php include('..//Includes//Left_Cpp.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Iterator Arithmetic - Cpp Development</h1>
        
        <h2>Working with Iterators</h2>
        
            <p>We are going to continue to work with iterators in this section.  Like before we are going to figure out how to take all the elements in a vector and update the size of the characters.  Afterwards we will talk about using iterator arithmetic.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        vector&lt;string> text{"one", "two", "three", "four", "five"};
        
        for (auto it = text.begin(); it != text.end(); ++it)
        {
            for (auto it2 = it->begin(); it2 != it->end(); ++it2)
                *it2 = toupper(*it2);
        }
    
        for (auto it = text.begin(); it != text.end(); ++it)
            cout &lt;&lt; *it &lt;&lt; endl;
        
        return 0;
    }</pre>
        
            <p>In the example above we created a vector which holds 5 elements all strings.  We looped through each of the elements using our iterator. Following that we created a nested loop in order to access each character in each element.
        
        <span class = "nl">From here we could convert the characters to uppercase and print the results.</span>
              </p>
        
        <hr />
        
        <!-- Iterator Arithmetic -->
        <h3>Iterator Arithmetic</h3>
        
            <p>Iterator arithmetic is using iterators to describe or manipulate the elements inside a container using math. Using math we can adjust which iterator we want or calculate the iterator closest to the middle.
        
        <span class ="nl">Let's look at an example of this below.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        vector&lt;int> v1{0, 1,2,3,4,5,6,7,8,9};
        vector&lt;int>::iterator mid = v.begin() + v1.size / 2;
        
        cout &lt;&lt; "The iterator closest to the middle is: " &lt;&lt; *mid &lt;&lt; endl;
        
        return 0;
    }</pre>
        
        <p>We can take it one step further by performing a sorting algorithm called a binary search to find the iterator closest to the middle.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    vector&lt;int> v1{0,1,2,3,4,5,6,7,8,9};
    
    auto beg = v1.begin(), end = v1.end();
    auto mid = v1.begin() + (end - beg) / 2;
    
    while(mid != end &amp;&amp; *mid != sought)
        if(sought &lt; *mid)
            end = mid;
        else
            beg = mid + 1;
        mid = beg + (end - beg)/2; 
        
    cout &lt;&lt; *mid &lt;&lt; endl;
        
    return 0;</pre>
        
        <p>In the example above we start by initializing two variables, beg which is equal to the first element in our vector and end which is equal to the elment after the last in our vector.
        
        <span class = "nl">From here we can set the middle point for our vector by setting our variable equal to the last element minus the first element divided by two.  In order to understand the value of our first element you should just know that our iterator refers to the location and not the value of the element itself.</span>
            
        <span class="nl">We can find out the amount of elements in our vector by computing the distance between the first and last element. Below is a sample program to display the size of a vector using iterators.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    vector&lt;unsigned> v1(11, 0);
    
    auto a = v1.begin();
    auto e = v1.end();
   
    int size1 = distance(a, e);
    int size2 = e - a;
    
    cout &lt;&lt; size1 &lt;&lt; endl;
    cout &lt;&lt; size2 &lt;&lt; endl;</pre>    
        
        <p>Once we understand the amount of elements in a container we can find the middle point by dividing it by two, this is how we set our mid variable in our binary search.  We need a mid point in order to compare our other elements relative to the location of our middle point.
        
        <span class = "nl">The element we want to use for our search will be named sought, we first check it by making sure that it is either not equal to the end element which is null or that it is not equal to our middle location.</span>
            
        <span class="nl">The next phase deals with understanding if our element is greater than or less than the middle location.  In otherwords we will break it up into two sections, the first section deals with elements after the middle point and the second section are elements before the middle location.</span>
              </p>    
    
        
        <hr />
        <br />
        <a href="Cpp12.html">Previous</a>
        <span class = "next">
        <a href = "Cpp14.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  