<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Iterators - Cpp Programming</title>
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

        <h1>Iterators - Cpp Development</h1>
        
        <h2>Working with Iterators</h2>
            
            <p>Iterators are a way to access the first and last elements of a vector.  In the examples below we are going to be using 'iterators' instead of the subscript operator '[]' to manipulate our vectors.
                
            <span class ="nl">Note that iterators deal with giving us indirect access of an object, when using iterator values to use the dereferce operator to display the actual value of the element (not it's reference). </span></p>
        
        <hr />
        
        <!-- begin and end -->
        <h3>Begin &amp; End functions</h3>
        
            <p>The first two members we are going to talk about are the Begin member and the End member.  When using the 'begin' member it will return the first element/object in a vector, likewise the 'end' member will return the one past the last element of a container.
        
        <span class = "nl">Let's look at an example below.</span> </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string word("hello");
        string::iterator b = word.begin();
        string::iterator e = word.end();
        
        cout &lt;&lt; "The first element: " &lt;&lt; *b 
        &lt;&lt; " \nThe one after the last element: " &lt;&lt; *e &lt;&lt; endl;
        
        return 0;
    }</pre>
        
        <p>The 'e' variable returns a null or empty character, if we were using a vector then our program would crash because there is no element after the character 'o', in 'hello'.
        
        <span class = "nl">Let's see what happens if we have fun with our iterators and use our operators to increment the 'begin()' member by one and decrement the 'end()' member by one.  Can you guess which values would be returned?</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string word("hello");
        string::iterator b = word.begin();
        string::iterator e = word.end();
        
        b = b + 1;
        e = e - 1;
        
        cout &lt;&lt; "The second element: " &lt;&lt; *b 
        &lt;&lt; " \nThe last element: " &lt;&lt; *e &lt;&lt; endl;
        
        return 0;
    }</pre>
        
        <hr />
        
    <!-- combining functions -->    
    <h3>Combining functions</h3>
        
        <p>Let's have a little fun and use a for loop to change every character in a word from lowercase to uppercase, only let's use an iterator member instead of a reference to change our characters.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string word("hello");
        
        <span class="comments">// check that our iterator isn't empty, incremenet by one for every element </span>
        for(auto c = word.begin(); c != word.end(); ++c)
            <span class="comments">// convert each element to uppercase </span>
            *c = toupper(*c);
            
        cout &lt;&lt; word &lt;&lt; endl;
        
        return 0;
    }</pre>
        
        <p>We are limited to 5 operations when using iterators, the deference operator (*), the arrow operator (->), the incremenet operator (++), the decrement operator (--)and the two comparion operators (==, !=).</p>
        
    <hr />    
        
    <!-- iterator types -->
    <h3>Const Iterators</h3>
        
        <p>Once again we can have const iterator types as we did with const references and const pointers.  Let's look at the declaration for these variables</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        vector&lt;int>::const_iterator ivar;
        string::const_iterator svar;
    }</pre>    
        
        <p>Similar to our const pointers we can read const or non-const vectors or strings but we cannot write those values to new objects. So the only time we would really need to use a const_iterator type is when we need to read a const vector.
        
        <span class = "nl">If we are using a const_iterator then we wouldn't want to confuse our 'begin' and 'end' members with a non-const.  By adding a 'c' to the beginning of either function clarifies the matter 'cbegin' or 'cend'.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        vector&lt;int> v{1, 2, 3};
        vector&lt;int>::const_iterator civec = v.cbegin();
        
        cout &lt;&lt; *civec &lt;&lt; endl;
        
        return 0;
    }</pre>   
        
        <p>If by any chance we happen to use a non-const <u>iterator</u> with either 'cbegin' or 'cend' memeber then our compiler will issue an error.</p>
        
    <hr />
    
    <!-- the arrow operator -->
    <h3>The Arrow Operator</h3>
        
        <p>The arrow operator is used when we want to use the dereference operator '*' and the dot operator '.' to access a member from a container such as a string, vector or class.
        
        <span class = "nl">So why couldn't we type this in then '*it.string'.  The compiler would confuse that statement by thinking that it was searching for a string member from the object it.  However, when we use parantheses like so '(*it).string' it will then understand that we want the value of a pointer variable from the container string instead.</span>
            
        <span class="nl">To make things less confusing we use something called an arrow operator which does the same thing as using parantheses with the dereference operator making this statement '(*it).string' equal to this statement 'it->string'. </span>
        
        <span class="nl">Notice how the arrow is pointer to the container, this makes understanding the code easier to both read and write. Let's look at some example code now.</span>
         </p>
        
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    int main()
    {
        <span class="comments">// Initialize the vector</span>
        vector&lt;string> text{"one", "two", "three", "four", "five"};
        
        <span class="comments">// Check if iterator is <u>not</u> equal to empty or cend() before incrementing it by one</span>
        for (auto it = text.cbegin(); it != text.cend() &amp;&amp; !it->empty(); ++it)
            cout &lt;&lt; *it &lt;&lt; endl;
    
        return 0;
    }
    
    </pre>
        
        
        <hr />        
        <br />
        <a href="Cpp11.html">Previous</a>
        <span class = "next">
        <a href = "Cpp13.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  