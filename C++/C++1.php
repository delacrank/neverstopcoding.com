<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Understanding the Basics - C++ Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type="text/css">
    dt {
        font-weight: bold;
        margin-top: 1em;
    }
    
</style>    
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_C++.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Understanding the Basics - C++ Development</h1>

<!-- Basics -->
<h2>Understanding the Basics</h2>
    
    <p>
    In this intro we will define the basic tools used to build most programs and we will learn how to code a simple program.
        
        <span class = "nl">However, before you start programming you will require either an IDE (integrated development enviroment) such as: code blocks, eclispse, visual studio, xcode, etc. </span>
        
    <span class = "nl">Or, you can just use a text editor and a compiler.  If you have a unix machine like a mac or a linux, you can compile and run your programs using the terminal. </span>
        
    <span class = "nl">You must first locate the folder where you source code is.  You can use the command 'ls' to locate the folders and files in your directory.  And then cd 'name' to move to the new folder. Also if your not under an adminstator account, type the '$' sign before your commands.</span>
        
    <span class = "nl">g++ -o test test.cpp </span>
    ./test
        
    <span class = "nl">g++ (compiler name), -o test (executeable file), test.cpp (file name) </span>
    ./test (will run executable file)</p>
    
<hr />
    
<!-- Hello World -->
<h3>Hello World</h3>
    <p>    Our first basic program.  Writing hello world.   </p>     
    
<!-- Example -->
<em>Example:</em>
<!-- Code Section -->
<pre class = "code">
    #include  &#60;iostream&#62;
    using namespace std;    

    int main ()
    {
        cout &lt;&lt; "Hello world!" &lt;&lt; endl;
        return 0;
    }</pre>

    <p>    So what did we just accomplist?  We wrote out the words hello world in our console after building and executing the code.  What would the code look like had we not used the <strong>namespace std</strong>?  </p>

<!-- Example -->
<em>Example:</em>
<!-- Code Section -->
<pre class = "code">
    #include  &#60;iostream&#62;

    int main ()
    {
        <strong>std::</strong>cout &lt;&lt; "Hello world!" &lt;&lt;  <strong>std::</strong>endl;
        return 0;
    }</pre>
<br />
<hr />

<!-- Definitions -->
<h3>Definitions</h3>

    <dl>
        <dt>#include &#60; iostream &#62;</dt>
            <dd>This is an include directive, it instructs the computer to make available facilities from a file called iostream.  Basically, we asking the computer to use the input output library to use objects like cout in order to display information on to our console (monitor, output stream).</dd>

        <dt>using namespace std;</dt>
            <dd>A namespace is a collection of names, in this situation we are using namespace std (standard library), so we will include the collection from the std (standard) library. </dd>

        <dt>int main ()</dt>
            <dd>This is our first and main function.  Its parameters are based on integers or numbers (hence the int).  It will return a number as its function and is required for every program we wish to run.</dd>

        <dt>cout</dt>
            <dd>This function sends information into the output stream for our console application, hence the 'c' (console) and 'out' (output stream).</dd>

        <dt>&lt;&lt;</dt>
            <dd>This is an output operator and is generally used in conjuction with cout to send data into the output stream.</dd>

        <dt>endl</dt>
            <dd>Endl just ends the line of code and works in the same function as pressing return on a word processer.  The semicolon is used to end the line of code and is necessary for every ending similar to a period in a sentence.</dd>
    </dl>

<hr />
<br />
<a href ="C++.html">Previous Page</a><span class ="next"><a href = "C++2.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>

