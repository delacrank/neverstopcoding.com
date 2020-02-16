<h1> Job results </h1>
<?php

// gather the variables
$experience = $_REQUEST["experience"];
$job = $_REQUEST["job"];

// send some output
$reply = <<< HERE
<p>You have $experience experience.</p>
<p>The job you want is $job.</p>
HERE;

print $reply;

// Did they laugh?
$success = false;

if (isset($_REQUEST["40k"])) {
$success = true;
} // end if

if (isset($_REQUEST["60k"])) {
$success = false;
print "<p>Maybe in another 2 years.</p>";
} // end if

if (isset($_REQUEST["90k"])) {
$success = false;
print "<p>That's too much money.</p>";
} // end if

if ($success == true) {
print "<p>Congratulations you got the job!</p>";
} // end if
?>
    
<a href="../PhP5.html">Back to main page</a>    
