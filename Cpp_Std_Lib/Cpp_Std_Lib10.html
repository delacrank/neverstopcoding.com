<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms Part 2 (Sort, Unique, Erase, Predicate, Partition) - Cpp Standard Library</title>
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
    
        <h1>Algorithms Part 2 (Sort, Unique, Erase, Predicate, Partition) - Cpp Standard Library</h1>
        
        <h2>Algorithms (Sort, Unique, Erase, Predicate, Partition)</h2>
        
            <p>In this section we are going to be going into algorithms that reorder elements within our containers. Let's take a look at one of the more popular functions 'sort()' which rearranges the elements based on alphabetical as well as numerical value.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;std::string> vs { "bee", "bird", "duck", "dove", "zeebra", "cat", "dog"};
    
    <span class = "comments">// Sort these strings</span>
    std::sort(vs.begin(), vs.end());
    
    for(std::string s : vs)
        std::cout &lt;&lt; s &lt;&lt; std::endl;
    
    std::vector&lt;int> vi { 22, 3, 42, 654, 32, 1, 23 };
    
    <span class = "comments">// Sort these integers</span>
    std::sort(vi.begin(), vi.end());
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    </pre>
        
        <p>Notice that with the strings our sorting algorithm went through every word and every character to ensure that words which shared the same starting letter were ordered based on the remainder of their letters.
        
        <span class = "nl">As for the numbers it was as simple as ordering them lowest to highest.</span></p>
        
        <hr />
        
        <!-- unique -->
        <h3>Unique</h3>
        
            <p>The 'unique()' function places all duplicates to the rear of our vector, there isn't much to explain about this function other than seeing it action.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {23, 100, 22, 22, 3, 1, 3, 42, 654, 32, 1 };
    
    <span class = "comments">// Sort these integers</span>
    std::sort(vs.begin(), vs.end());
    
    <span class = "comments">// Find the unique integers</span>
    std::unique(vi.begin(), vi.end());
    
    <span class = "comments">// display all our elements</span>
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    </pre>
        
        <p>It's very important to sort the numbers before running our 'unique()' function otherwise it will not function properly.  Furthermore, if you looked at the output you would realize that unique doesn't simply remove the duplicate numbers, it simply changes their iterators so that they are in the rear.</p>
        
        <hr />
        
        <!-- Erase -->
        <h3>Erase</h3>
        
            <p>'Erase()' does the opposite of insert, in that it removes the designated elements we no longer want to use. Let's look at an example of using erase.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Erase every element after the fifth in our container</span>
    vi.erase(vi.begin() + 5, vi.end());
    
    <span class = "comments">// display all our elements</span>
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    </pre>
        
        <hr />
        
        <!-- Predicate -->
        <h3>Predicate</h3>

            <p>A predicate is a function which we can use as an argument in our algorithms.  A predicate usually will pass either a true or false value, when using it we want to make our algorithm under go a certain condition in order to ascertain a result. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    bool <span class = "red">isBigger</span>(const int &amp;x, const int &amp;y )
    {
        return x > y;
    }
    
    int main()
    {
        std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
        
        <span class = "comments">// Sort all the numbers, by the largest first</span>
        std::sort(vi.begin(), vi.end(), <span class = "red">isBigger</span>);
    
        <span class = "comments">// display all our elements</span>
        for(int i : vi)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
    }</pre>
        
        <hr />
        
        <!-- partition -->
        <h3>Partition</h3>
            
            <p>A partition is a way to seperate elements into two groups, those which return the true values and those which values are false based on the comparsions being used.  If for example I created a partition to separate strings based on the amount of characters each contained, then I could store the partitions in iterators.  This would allow me to retrieve only the elements I need from my container instead of all the values.
        
        <span class = "nl">I will use a predicate along with a partition to find only strings which have less than three characters.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    bool <span class = "red">isSmall</span>(const std::string &amp;s)
    {
        return s.size() &lt; 3;
    }
    
    int main()
    {
        std::vector&lt;std::string> vs 
            {"one", "two", "three", "four", "five", "six", "seven", "eight", "nine"};
        
        <span class = "comments">// Seperate the elements we want to print out</span>
        std::vector&lt;std::string>::iterator pivot = 
            std::partition(vs.begin(), vs.end(), <span class = "red">isSmall</span>);
    
        <span class = "comments">// Our iterator will only print out elements based on our 'isSmall' function</span>
        for(auto it = vs.begin(); it != pivot; it++)
            std::cout &lt;&lt; *it &lt;&lt; std::endl;
    }</pre>
        
        <p>Using partition works both ways, we can assign our iterator to our partitioned iterator in order to have it print out the elements we did not want to use, see below.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    bool isSmall (const std::string &amp;s)
    {
        return s.size() &lt; 3;
    }
    
    int main()
    {
        std::vector&lt;std::string> vs 
            {"one", "two", "three", "four", "five", "six", "seven", "eight", "nine"};
        
        std::vector&lt;std::string>::iterator pivot = 
            std::partition(vs.begin(), vs.end(), isSmall);
            
        <span class = "comments">// Assign the iterator to our partition this time</span>
        for(auto it = pivot; it != vs.end(); it++)
            std::cout &lt;&lt; *it &lt;&lt; std::endl;
    }</pre>
        
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib9.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib11.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  