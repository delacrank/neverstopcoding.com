<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>String functions &amp; Range Loop - Cpp Programming</title>
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

        <h1>String functions &amp; Range Loop - Cpp Development</h1>
        
        <h2>Processing characters in a string</h2>
        
            <p>There are going to be times when we want to step through every character in a string and check to see if it contains a certain character or whitespace etc.
        
        <span class= "nl">Lucky for us C++11 standard contains several functions for handling these sort of situations.</span>
              </p>
        
        <hr />
        
        <!-- range base loop -->
        <h3>Range-Based for loop</h3>
        
            <p>If we want to run through every character in a string we can use a range based for loop. This for statement will take the string and store each character of that string in a character, similar to the way it would go through every element in an array.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string var("Some word");
        
        for (char c : var)
            cout &lt;&lt; c &lt;&lt; endl;
            
        return 0;
    }</pre>
        
        <hr />
        
        <!-- is functions -->
        <h3>'is' string functions</h3>
        
            <p>Another feature of string class in c++11 are the number of functions for checking what type of character is stored in a string or character variable.  I am only going to list them because there are too many to display examples of each.</p>
        
        <ul class = "li">
            <li><b>isalnum():</b> true if var is a letter or digit.</li>
            <li><b>isalpha():</b> true if var is a letter.</li>
            <li><b>iscntrl():</b> true if var is a control character.</li>
            <li><b>isdigit():</b> true if var is a digit.</li>
            <li><b>isspace():</b> true if var is a space.</li>
            <li><b>islower():</b> true if var is lowercase.</li>
            <li><b>isupper():</b> true if var is uppercase.</li>
            <li><b>ispunct():</b> true if var is a punctation mark.</li>
            <li><b>tolower():</b> changes char to lower if upper.</li>
            <li><b>toupper():</b> changes char to upper if its lower.</li>
        </ul>
        
        <hr />
        
        <!-- combining string functions -->
        <h3>Combining string functions</h3>
        
            <p>Now that we know how to convert characters and how to loop through a string, let's try to make use of these functions to convert a lower case word into an upper case. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string var("Some word");
        
        <span class="comments">// We have to bind the characters to a reference type</span>
        for (char &amp;c : var)
            c = toupper(c);
            
        cout &lt;&lt; var &lt;&lt; endl;
            
        return 0;
    }</pre>
        
        <hr />
        
        <!-- Subscript iterator -->
        <h3>Subscript Operator []</h3>
        
            <p>A subscript is basically an index of our string.  It will always start at zero not one and it will increase by one for every element or in this case char in the string.
        
        <span class = "nl">If I were to write the word 'hello' and wanted to find out the forth letter, I could the string literal in a variable and then display the forth letter using a subscript.  Example below.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string var("hello");
                   
        cout &lt;&lt; var[3] &lt;&lt; endl;
            
        return 0;
    }</pre>
        
        <p>I can also perform operations within my subscript, like so.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    cout &lt;&lt; var[3 + 1] &lt;&lt; endl;</pre>
        
        <p>Or manipulate individual characters in my string using the subscript.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        string var("hello");
        if(!var.empty()) {
            var[0] = toupper(var[0]);
            var[1] = 'a';
        }
        
        cout &lt;&lt; var &lt;&lt; endl;
            
        return 0;
    }</pre>
    
        <hr />        
        <br />
        <a href="Cpp8.html">Previous</a>
        <span class = "next">
        <a href = "Cpp10.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  