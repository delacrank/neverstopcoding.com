<h1> Picture game </h1>
<p>Welcome to the picture game.</p>

<?php
$userNumber = rand(1,6);
while($userNumber != 2){
$userNumber = rand(1,6);
print "<p><img src=\"/Images/Cover$userNumber.jpg\" height = \"50px\" width = \"50px\" /></p>";
}
print "<p>Your picutre is the sky picture!</p>";
?>
<p><a href = "php8.php">Try again!</a></p> 

<p><a href = "../PhP8.html">Back to Main Page</a>