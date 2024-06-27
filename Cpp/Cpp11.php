<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Vector Indexing &amp; Push Back - Cpp Programming</title>
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

        <h1>Vector Indexing &amp; Push Back - Cpp Development</h1>
        
        <h2>Working with Vectors</h2>
        
        <p>We're going to continue to work with vectors and see how can we use them to organize and manipulate data.</p>
            
        <hr />
        
        <!-- for loop -->
        <h3>Range-based for (vector elements)</h3>    
            
        <p>Let's see if we can use iteration to add elements to our vector similar to the way we manipulated the characters in our string.</p>
        
    <em>Code:</em>
    <!-- code -->    
    <pre class="code">
    int main()
    {
        vector&lt;int> v{1, 2, 3, 4, 5, 6, 7, 8, 9};
        
        <span class="comments">// Return the product of element squared as the new element in our vector</span>
        for(auto &amp;i : v)
            i *= i;
            
        <span class="comments">// Print our each element in vector v followed by a space</span>
        for(auto i : v)
            cout &lt;&lt; i &lt;&lt; " ";
        cout &lt;&lt; endl;
        
        return 0;
    }</pre>
        
        <p>In the example above we were able to process each element in our array similar to the way we were able to capitalize each character in our string.</p>
        
        <hr />
        
        <!-- clusting a vector -->
        <h3>Computing a vector Index</h3>
        
            <p>An index is a record of something, for our vector index we are going to find out the number of times an element appears.  The example we are going to use is a cluster of grades based on the tenths place. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        <span class="comments">// Declare a vector of eleven empty elements</span>
        vector&lt;unsigned> scores(11, 0);
        unsigned grade;
        while(cin >> grade) {
            if(grade &lt;= 100)
            <span class="comments">// Increment the vector based on the any number less than 101 divisible by 10</span>
                ++scores[grade/10];
        }
        
        for(int i; i &lt; scores.size(); ++i)
            cout &lt;&lt; scores[i] &lt;&lt; " ";
        cout &lt;&lt; endl;    
            
        return 0;
    } </pre>
        
        <p>In the example above we were able to cluster numbers together by using two forms of control.  The first thing we did was limit the numbers input into our array by using the 'if' statement, so any number over 100 would not have been allowed.  
            
        <span class="nl">Second, we were able to organize each number into a ten's distribution by dividing each number by 10 and assigning that number equal to our subscript operator.</span></p>
        
        <hr />
        
        <!-- combining function -->
        <h3>Combining functions</h3>
        
            <p>In the next example we will use a nested for loop in order to convert our vector of strings from lower case to upper case.  Let's look at an example first and then we can talk about it.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        <span class="comments">// declare our string and vector variables</span>
        string word;
        vector&lt;string> svec;
        
        <span class="comments">// insert initialized elements into our vector</span>
        while(cin >> word) {
            svec.push_back(word);
        }
        
        <span class="comments">// loop through our vector elements</span>
        for(auto &amp;i : svec)
        {
        <span class="comments">// for each string loop through the characters and convert them into uppercase</span>
            for( auto &amp;c : i ) c  = toupper(c);
        }
    
        <span class="comments">// print the results</span>
        for(int z; z &lt; svec.size(); ++z)
                cout &lt;&lt; svec[z] &lt;&lt;  " ";
        cout &lt;&lt; endl;
    
        return 0;
    }</pre>
        
        <p>I basically explained everything using the comments in my code.  In the example above we added strings to our vector, then we looped through each element in our vector and changed the characters by looping through each character inside each string element within our vector.</p>
        
        <hr />        
        <br />
        <a href="Cpp10.html">Previous</a>
        <span class = "next">
        <a href = "Cpp12.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  