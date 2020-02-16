<?php

// store the 'fname' data in this variable
$fName = $_REQUEST["fName"];

print "<h1> Output </h1>
<p> first name: $fName </p>";

// create a variable to write on to our text file
$output = "first: $fName\n";

// open a file and use the append arguement ( 'a' )
$fp = fopen("contacts.txt", "a");

// use open connection variable and what we want to append
fwrite($fp, $output);
// close the connection to our file
fclose($fp);

print "<a href=\"../PhP14.html\">Back to Main page</a>";

?> 