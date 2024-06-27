<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>String Functions - Cpp Standard Library</title>
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
    
        <h1>String Functions - Cpp Standard Library</h1>
        
        <h2>String Functions</h2>
        
            <p>The String class has many functions we haven't touched upon yet.  To name a few there is 'substr()' which returns part of a string, 'append()' similar to 'push_back()' it adds characters to the end of an existing string, 'replace()' erases designated characters and replaces those characters with characters you supply.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::string s("hello, world!!!");
    
    <span class="comments">// Show only 6 characters after the 7th element</span>
    std::cout &lt;&lt; s.substr(7, 6) &lt;&lt; std::endl;
    
     <span class="comments">// Replace the 7th character with these characters instead up to 6th elements</span>
    std::cout &lt;&lt; s.replace(7, 6, "mister") &lt;&lt; std::endl;
    
     <span class="comments">// Add this to the end of our existing string</span>
    std::cout &lt;&lt; s.append(" Have a good day") &lt;&lt; std::endl;</pre>
        
        <p>The string class also has a search option which allows you to search for characters or a string of characters in an existing text.  There are a combintation of search options starting with the 'find()' function which searches for the first occurance of a perticular argument.
        
        <span class = "nl">There are several other search functions like 'rfind()' which searches the the last occurance of an argument. 'find_first_of()' searches for first occurance of any character in argument, 'find_last_of()' searches for the last occurance of any character in the argument.</span>
        
        <span class = "nl">The last of the functions are 'find_first_not_of()' and 'find_last_not_of()' which searches for the first and last occurances of any characters not in the specified argument. Let's look at an example for using these functions.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::string s("Come now brown cow");
    
    <span class="comments">// Find first occurance of 'ow'</span>
    std::cout &lt;&lt; s.find("ow") &lt;&lt; std::endl;
    
    <span class="comments">// Find last occurance of 'ow'</span>
    std::cout &lt;&lt; s.rfind("ow") &lt;&lt; std::endl;
     
    <span class="comments">// Find first occurance of 'o' or 'w'</span>
    std::cout &lt;&lt; s.find_first_of("ow") &lt;&lt; std::endl;
    
    <span class="comments">// Find last occurance of 'o' or 'w'</span>
    std::cout &lt;&lt; s.find_last_of("ow") &lt;&lt; std::endl;
    
    <span class="comments">// Find first occurance where 'o' or 'w' doesn't occur</span>
    std::cout &lt;&lt; s.find_first_not_of("ow") &lt;&lt; std::endl;
    
    <span class="comments">// Find last occurance where 'o' or 'w' doesn't occur</span>
    std::cout &lt;&lt; s.find_last_not_of("ow") &lt;&lt; std::endl;</pre>
        
        <p>The 'find()' function actually takes two arguments, the first are the specified characters or string, the second is the position of to search for these characters.  Changing the position allows you to find more occurances of the character or string in a given text. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::string::size_type pos = 0;
    
    std::string s("come now brown cow");
    
    <span class = "comments">// Return the number of times 'ow' occurs in string s</span>
    while((pos = s.find("ow", pos)) != std::string::npos) {
        std::cout &lt;&lt; pos &lt;&lt; std::endl;
        ++pos;
    }</pre>
        
        <p>Using the type 'npos' denotes the length of the string, similar to the way 'size_t' denotes the length of a container.</p>
        
    <hr />

        <!-- Numeric converions -->
        <h3>Numeric Conversions</h3>
        
            <p>The standard library also provides us with a way to convert strings into integers and vice versa.  If you want to convert a integer to a string you can use the 'to_string()' function.  However, if you want to convert a string into a an integer than you must use the 'stoi()' or string to integer function.
        
        <span class = "nl">There is also a string to long 'stol()', string to unsigned long 'stoul()', string to long long 'stoll()', string to unsigned long long 'stoull()', string to float 'stof()', string to double 'stod', and finally string to long double 'stold()' etc.</span>
        
        <span class="nl">Alright so some code then.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Convert the number 42 into a string</span>
    std::cout &lt;&lt; "This is the number " + std::to_string(42) &lt;&lt; std::endl;
        
    <span class ="comments">// Convert the string 5 into an integer</span>
    std::cout &lt;&lt; std::stoi("5") + 5 &lt;&lt; std::endl;</pre>
        
        <hr />
        
        <!-- compare -->
        <h3>Compare</h3>
        
            <p>Similar to c's 'strcmp()' cpp has a compare function which is part of the standard library called 'compare()'.  It will just compare the size of one string to another and return a value based on the sizes of the strings.
        
        <span class = "nl">It will usually be negative if the string is smaller then the one its being compared too, a positive if its larger or a zero if both values are the same.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::string s("one");
    std::string z("one");
    
    std::cout &lt;&lt; s.compare(z) &lt;&lt; std::endl;
    </pre>
        
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib6.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib8.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  