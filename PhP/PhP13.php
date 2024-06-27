<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Working with Files - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Working with Files - PhP Programming</h1>
    
<h2>Working with Files</h2>
    
    <p>In this section we are going to talk about accessing text files.  There are two things you can do to manipulate a text file, you can either write to it or read from it.
        
        <span class = "nl">However, in order to do either you should be able to open or close that file first.  In this section we are going to be talking about 6 functions PhP uses to manipulate text files.</span></p>
    
<ul id = "li">
    <li><b>fopen():</b> Stores a connection to a file.</li>
    <li><b>fwrite():</b> Writes text to a file.</li>
    <li><b>fclose():</b> Closes a connection to a file which has previously been opened with fopen();</li>
    
    <li><b>fgets():</b> Reads a line from a file.</li>
    
    <li><b>feof():</b> Checks to see if you hit the end of a file.</li>
    <li><b>file():</b> Puts the entire contents of a file into an array.</li>
</ul>    
<br />
<hr />
    
<!-- fOpen -->
<h3>Working with fopen()</h3>
    
    <p>Let's talk about our first function, 'fopen()' which actually creates a connection from our server to a text file.  In order for that connection to be successful we should make sure that the file we are working with has the correct permissions. <br /><br />
    
    We can modify the permissions by setting them in a variable and using that variable as an arguement in our function.  The three types of permissions we can grant the file are either read-only, write access, or append to text (r, w, a).</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
$fileConnection = fopen($theFile, $theMode); </pre>
    
<br />
<hr />

<!-- fwrite -->
<h3>Working with fwrite() or fputs()</h3>
    
    <p>Once we have officially opened the file using fopen() function and set our permissions with '$theMode' variable, we are ready to start writing to the file.  In order to do that we need to decide whether we want to append text to the current file by or overwrite the entire file.
        
        <span class = "nl">If we used the append parameter when we opened the file then we can just add text to the existing file however if we used the write permission, then the entire file will be overwritten with our new content.</span></p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $writeResults = fwrite( $fileConnection, $text);</pre>

<br />
<hr />    

<!-- fclode -->
<h3>Working with fclose()</h3>
    
    <p>The fclose() function is very simple and will return a value of either true or false, depending on whether or not the file was successfully closed.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    fclose($fileConnection);</pre>

<br />
<hr />
    
<!-- CSV -->    
<h3>CSV files</h3>

    <p>One of the more common uses of using these functions is to create CSV files.  CSV stands for comma seperated value files, and are files which are simply seperated using commas as a delimiter.
        
        <span class = "nl">Let's also talk about the purpose of CSV files, they can be used to contain data which we want to either store or retrieve information from like an excel file for example.  It can be a collection of items from our store or a table of employee records, etc.</span></p>
    
    <em>Code:</em>
    <!-- Example -->
    <pre class="code">
    row1 item1, row1 item2\n
    row2 item1, row2 item2</pre>
<br />
<hr />    
    
<!-- str_replace -->
<h3>Str_Replace()</h3>
    
    <p>Let's talke about another function called the string replace function.  This function allows us to replace characters of an exisiting string, it does this by taking 3 parameters.  The first is the string to be replaced, the second parameter is the to replace the first and the last parameter is the file itself.</p>

<em>Code:</em>    
<!-- code -->
<div class="code">
$text = str_replace( ", ", "", $text);    
</div>
<br /><hr />
    
<!-- fgets() -->
<h3>Working with fgets()</h3>
    
    <p>This looks similar to our fputs() function, however instead of writing to a file we can read from it.  The fgets() function is useful for fetching data from our file and storing it in a variable for future use.</p>
    
    <em>Code:</em>    
    <!-- code -->    
    <pre class="code">
    $line = fgets($fileConnection);</pre>

<br />
<hr />    
    
<!-- feof() -->
<h3>Working with foef()</h3>

    <p>The feof() function stands for file end of file, and is used to check if we have reached the end of the file.  It is commonly used with our fgets() function to know when the stop reading from a file.</p>
    
    <em>Code:</em>    
    <!-- code -->    
    <pre class="code">
    while(!foef($fileConnection)) {
        print fgets($fileConnection);
    }</pre>
<br />
<hr />
    
<!-- file() -->
<h3>Working with file()</h3>
    
    <p>Let's talk about our last function which can be used to manipulate our files.  It is the file() function and this takes the entire text file and formats it into an array.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $logData = file("log.dat"); </pre>

<br />
<hr />
    
<!-- purpose of these functions -->
<h3>Purpose of using file functions</h3>
    
    <p>So, what is the purpose of using these functions?  Oftentimes if we want to use a file and embed it into our database we will need some way to organize the data and convert it so that the database will be able to properly handle the file.
        
    <span class = "nl">Using these functions we can take excel files used to store employee, client, product information and embed them into our system by storing the files directly on to an existing database.</span></p>
    
<hr />    
    
<!-- Other functinos -->
<h3>Managing string characters</h3>
    
    <p>Sometimes when dealing with text files there are going to be characters which our site can interpret as html, like the less than sign, or greater than sign.  For this there is a function in php called htmlentities and it will convert those characters into the correct mark up like &amp;lt; (less than) and &amp;gt; (greater than).</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $userInput = "&lt;br /> &lt;hr /> &amp;lt; &amp;amp;";
    $userInput2 = "&lt;br /> &lt;hr /> &amp;lt; &amp;amp;";
    $userInput = htmlentities($userInput);
    print "With function: " . $userInput; 
    print "&lt;br />Without function: " . $userInput2;</pre>

<br />
<em>Example:</em><br /><br />   
<!-- Example -->
<?php
$userInput = "<br /> <hr /> &lt; &amp;";
$userInput2 = "<br /> <hr /> &lt; &amp;";
$userInput = htmlentities($userInput);
print "With function: " . $userInput; 
print "<br />Without function: " . $userInput2;
?>
<br />
<hr />
    
<h3>Stripslashes() function</h3>    
<!-- strip slashes -->    
    
<p>Let's talk about another problem that will happen when working with text files.
    
    <span class = "nl">In addition to coming against obstacles when dealing with html encoding, there is another problem that will happen with escape characters such as using the backslash, quote or double quotes. PhP will automatically use these escape characters to allow those types characters to get through a form (get, or post methods) and be printed as text rather than be mistaken for code.</span>
    
    <span class = "nl">The problem is when a programmer will want to write to a file and add quotes, backslashes, etc. without having PhP add escape characters to it.  The solution to these is a function called 'stripslashes()'.</span></p>
    
<hr />    
    
<!-- organzing data -->
<h3>List() function</h3>
    
    <p>Previously in our arrays section we talked about using the split function to break a string of words into a series of array elements.  Well, the list function takes elements of an array and stores them into variables.
        
    <span class = "nl">Let's look at an example of this below.</span></p>
    
    <em>Code:</em>    
    <!-- Code -->
    <pre class="code">
    $ok = array('var', 'var2', 'var3');
    list($var, $var2, $var3) = $ok;
    print "We assigned these variables equal to these values using our list function. 
    &lt;br />\$var: $var
    &lt;br />\$var2: $var2
    &lt;br />\$var3: $var3";</pre>
    
<br />
<em>Example:</em><br /><br /> 
<!-- Example -->    
<?php
$ok = array('var', 'var2', 'var3');
list($var, $var2, $var3) = $ok;
print "We assigned these variables equal to these values using our list function. <br />\$var: $var <br />\$var2: $var2 <br /> \$var3: $var3";
?>    
    
    <p>Here we were able to print out the value of $ok[0], $ok[1], and $ok[3] as variables named $var, $var2 and $var3.</p>
<hr />
<br />
<a href ="PhP12.html">Previous Page</a><span class ="next"><a href = "PhP14.html">Next Page</a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>