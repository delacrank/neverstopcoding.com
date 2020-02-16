<h1> Picture game </h1>
<p>Welcome to the picture game.</p>

<?php
$twoCount = 0;

for($i = 0; $i < 10; $i++){
$userNumber = rand(1,6);
print "<p><img src=\"/Images/Cover$userNumber.jpg\" height = \"50px\" width = \"50px\" /></p>";

if ($userNumber == 2){
$twoCount++;
}
}
print "<p>You picture the sky picture $twoCount times!</p>";
?>
<p><a href = "php8.1.php">Try again!</a></p> 

<p><a href="../PhP8.html">Back to Main Page</a></p>