<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Strings - Java Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">

</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Java.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

    <h1>Strings - Java Programming</h1>

    <h2>Working with Strings</h2>
    
        <p>In this section we are going to breifly go over strings and some of the string functions. To declare a string in java you simply type 'String' followed by the variable name.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    String s = " ";</pre>
    
    <p>Be sure to place double quotes to embrace your string.  Some of the methods which strings use are listed below.</p>
    
    <ol id= "li">
        <li><b>substring() :</b> Comes with two parameters first includes the first element to the last you want to use.</li>
        <li><b>concatentation '+' :</b> This is just an operator which joins two strings together.</li>
        <li><b>join() :</b> Joins strings together with a delimiter repeating between every string.</li>
        <li><b>equals() :</b> Compares two strings and returns a true or false value.</li>
        <li><b>equalsIgnoreCase() :</b> Same thing only ignores the higher or lower case.</li>
        <li><b>length() :</b> Measures the amount of elements in a given string.</li>
        <li><b>charAt() :</b> Returns the value of a char given the elements address in the string.</li>
        <li><b>replace(): </b> Returns a string in place of an old string's charSequence.</li>
        <li><b>toLowerCase(): </b> Returns all the chars to lower case.</li>
        <li><b>toUpperCase(): </b> Returns all the chars to lower case.</li>
        <li><b>trim(): </b> Removes all white space from a string.</li>
    </ol>
    
    <p>Strings in Java should only be compared using the equals function. They are similar to pointer to char array in c, where each element holds an address not an actual char variable.
    
    <span class = "nl">Strings in java are created by unicode characters not ascii characters. A string in java is a combination of pointers to these unicode chars, we can see the individual chars if we use another function 'codePointAt()'.
        
    <span class = "nl">Another function offsetByCodePoints(), returns the value of the codePoint relevant to the first parameter which is the elements location. Using codePoint functions is necessary because some unicode chars require two bytes instead one.</span>
        
    <span class = "nl">Since java is an object oriented programming language, all the methods in the list above can be called from the string using the '.' operator. Let's look at an example below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    String class {
    
        public static void main(String[] args) {
            String s = "hello";
            System.out.println(s.toUpperCase());
            <span class ="comments">// Elemets in a string start with zero</span>
            System.out.println(s.charAt(4));
            <span class ="comments">// Be sure to specify the chars you want to replace</span>
            s =  s.replace("hello", "Boogie");
            System.out.println(s);
        }
    }</pre>

    <hr />
    
    <!-- String builder class -->
    <h3>String builder class</h3>
    
        <p>The String builder class allows you to build strings from smaller pieces or append chars to the end of a smaller char sequence. It is similar to adding chars to the end of a char array in maybe c or c++.
            
        <span class = "nl">It is also more memory effecient because we don't need to construct a new object to store all of our old chars and add our additional chars.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    StringBuilder sb = new StringBuilder();
    sb.append('a');
    System.out.println(sb);</pre>
    
    <p>The 'StringBuilder' class comes with a few methods, I will only list a few.</p>
    
    <ul id ="li">
        <li><b>append(): </b> Adds a char or a string to the existing stringbuilder object.</li>
        <li><b>toString(): </b> Returns a string with same content as StringBuilder object.</li>
        <li><b>insert(): </b> Inserts a char or string at set location.</li>
        <li><b>delete(): </b> Deletes all chars from first location to second location designated in arguments.</li>
    </ul>
    
        
    <br />
    <hr />
    
<a href="Java3.html">Previous</a> 
<span class = "next"><a href="Java5.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>