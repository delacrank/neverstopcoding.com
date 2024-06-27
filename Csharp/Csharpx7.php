<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Learning C#</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Csharp.php'); ?>
    
<!-- Right -->
<div id ="rightz">


<h1>Learning C#</h1>
    
<!-- Enumerations and Structures -->
<h2>Pointers</h2>
    
    <p>In this section, we are going to be talking about 'pointers'.</p>
    
<hr />
    
<!-- What is a pointer -->
<h3>What is a pointer?</h3>
    
    <p>A pointer is a variable which holds the location, address or reference to an item in memory.<br /><br />  Essentially a pointer will allow us skip all the conventions of scopes, access modifiers, classses, etc. by telling the computer directly where you want to go or what you want to access.<br /><br />Let's take a look at a memory address.
    </p>
    
<!-- Code -->
<em>Code:</em>
<div class="code">
int x 55; <br />
y = &#38;x;<br /><br />

Console.WriteLine(y);
</div>
    
<hr />
<br />
<a href = "Csharp7.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp9.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>