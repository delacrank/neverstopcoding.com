<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Understand all of the functions and algorithms included in cpp's the standard template library. Write faster and more organized code, write cpp the way it was intended." />
        <meta name="keywords" content="Cpp" />
        <meta name="author" content="Juan Arias" />    
        <title>IO Classes - Cpp Standard Library</title>
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

        <h1>IO Classes - Cpp Standard Library</h1>
        
        <h2>Understanding IO Classes</h2>
        
            <p>There are three libraries of streams which cpp can use.  The one you are already familiar with is the input output stream, the header for that stream is '&lt;iostream>'. We know that using the iostream we can read and write data to and from the console, using different types of data like characters, strings, and numbers.
        
        <span class = "nl">Some of the operators we use for the iostream are the right and left shift operators '&lt;&lt;', '>>', and some of the objects used to read or write information to and from the stream are: 'cout', 'cin', endl', 'cerr', 'ostream', 'istream'.</span>
        
        <span class = "nl">Let's take a look at two other classes and some more features of our existing class. The IO class fstream using the '&lt;fstream>' header and it deals with reading information to and from files.</span>
                
        <span class="nl">The last IO class is called the '&lt;sstream>' class and it deals with reading and writing information to and from strings. The beauty of all these classes is that we can continue to use the same operators and objects for each class.  This is because the classes use something called 'inheritance', a feature of programming languages that allow classes to borrorw features from each other.</span>
                
        <span class="nl">Just note that the objects for our fstream will be called 'ifstream' and 'ofstream' instead of 'istream' and 'ostream'. The same is true for our string class using the objects 'istringstream' and 'ostringstream'. </span>
                
        <span class = "nl">Each one of our IO classes also comes equipped with the ability to support 'wchar_t' type.  This just means that they can read and write characters that need to be stored in 32 bits instead of just 8 bits for our regular char (ASCII) set.  8 bits is enough for 255 possible outcomes or every english letter lowercase, uppercase and some symbols and line formatting.  However, 8 bits might not be enough when dealing with other languages which require more symbols that can fit in 255 combinations.</span>
              </p>
        
        <hr />
        
        <!-- conditional states -->
        <h3>IO Conditional States</h3>
            
            <p>There are several ways to understand what is going on in terms of the stream whether or not it was successful in reading from either the console, a file or a string or writing to the console/file/string.
                
        <span class ="nl">Let's look at the different types of stream objects we can use.  Let's start off with using the basic stream both input and output.  We can do this by using the standard library to declare an istream object for reading from the console or an ostream object for displaying information to the console.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;iostream>
    #include &lt;string>

    std::istream &amp;read(std::istream &amp;is, std::string &amp;s)
    {
        is >> s;
        return is;
    }

    std::ostream &amp;print(std::ostream &amp;os, std::string &amp;s)
    {
        os &lt;&lt; s;
        return os;
    }

    int main()
    {
        std::string word;
        read(std::cin, word);
        print(std::cout, word);
    }</pre>
        
       <p>In the examples I created a function which allows me to pass two arguements into a function.  The first parameter for my read function is an 'istream' object, the second parameter is a 'string', if I try to pass an integer it probably fail if the integer cannot be converted or promoted to a string.
        
        <span class = "nl">I can use the read and print functions to check the states of my streams because they are both Lvalue stream objects, or I can just use 'std::cin' and 'std::cout'.  For the purpose of simplicity I will just use cout and cin to show you how to check the state of our stream.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        std::string word;
        std::cin >> word;
        std::cout &lt;&lt; std::cin.eof() &lt;&lt; std::endl;
    }</pre>
        
        <p>In the example below, I simply just created an input stream for a string, and then I printed the result of the state of that stream.  Our program is going to check to see if the user enters a EOF (end of file) bit, or 'ctrl + d' on our console.  If they do, the result will output 1 for true, or 0 for false.
        
        <span class = "nl">I can also check to see if the state of the stream has failed or been corrupted using other state calls like 'fail()' or 'bad()'.  Let's look at one more example before we move on.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        int number;
        std::cin >> number;
        std::cout &lt;&lt; std::cin.fail() &lt;&lt; std::endl;
    }</pre>
        
        <p>In my next example I used an integer instead of a string, because the compiler can just convert my integer into a string.  So, when we try to input a letter or a symbol into this stream, our compiler should print out a 1 for failed stream or a 0 if we input a number instead.</p>
        
    <ul class = "li">
        <li><b>eof():</b> Checks to see if eof was entered.</li>
        <li><b>fail():</b> Checks to see if stream failed.</li>
        <li><b>good():</b> Checks if stream is good.</li>
        <li><b>bad():</b> Checks if stream is corrupted.</li>
        <li><b>clear():</b> Returns the state of the stream to nuetral.</li>
        <li><b>setstate():</b> Sets a condition to the state.</li>
        <li><b>rdstate():</b> Returns the condition of the stream state.</li>
    </ul>
        
        <hr />
        
        <!-- output buffer -->
        <h3>Manging the Output Buffer</h3>
        
            <p>Up until now we have been using the 'endl' manipulator which simply flushes the buffer printing the data stored on our output buffer into the console.  The way the buffer works, is that its able to store data in the buffer until we need it to be printed.
        
        <span class = "nl">If for example we want to print characters into a file, string or the console normally the operating system would have to read the character or integer print it and then go back to read the next one.  Using the buffer makes this process more effecient, the OS can now just keep reading characters and store the data in the buffer.  However, there are times when our buffer can fill up and it needs to be flushed before we can store more characters in it.  Well we can also control when the buffer gets flushed by using a manipulator like 'std::endl', but we have other manipulators as well.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// writes our string literal, creates a newline and flushes the buffer</span>
    std::cout &lt;&lt; "endl" &lt;&lt; std::endl;
    <span class="comments">// does nothing, flushes the buffer</span>
    std::cout &lt;&lt; "flush" &lt;&lt; std::flush;
    <span class="comments">// writes a null character, flushes the buffer</span>
    std::cout &lt;&lt; "ends" &lt;&lt; std::ends;
    <span class="comments">// all writes to the buffer will be flushed </span>
    std::cout &lt;&lt; std::unitbuf;
     <span class="comments">// Returns back to normal flushing</span>
    std::cout &lt;&lt; std::nounitbuf;
    </pre>
        
        
        <hr />
        <br />
        <a href = "Cpp_Std_Lib1.html">Next Page</a>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  