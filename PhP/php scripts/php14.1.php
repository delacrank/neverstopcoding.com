<?php

print "<h1>Contacts</h1>";

//open up the contact file
$fp = fopen("contacts.txt", "r") or die("error");

//print a line at a time
while (!feof($fp)){
  $line = fgets($fp);
  print "$line <br />";
}

//close the file
fclose($fp);

?>

<a href="../PhP14.html">Back to Main Page</a>