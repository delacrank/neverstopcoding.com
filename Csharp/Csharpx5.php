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
    

<!-- Access Modifiers -->
<h3>Access Modifiers</h3>    

    <p>
    Access modifiers allow both methods and variables to be constrainted to certain classes.  I will show the five types of access modifiers and the purpose for each.
    </p>
    
<dl>
    <dt>Public</dt>
        <dd>Access not limited.</dd>
        <dt>Private</dt>
        <dd>Access limited to the containing type.</dd>
        <dt>Protected</dt>
        <dd>Access limited to containing class or derived class.</dd>
        <dt>Internal</dt>
        <dd>Access limited to current assembly.</dd>
    <dt>Protected Internal</dt>
    <dd>Access limited to current assumbly or types derived from the containing class.</dd>
</dl>
    
<p>
Let's look at some examples of how we can use these access modifiers with a class.
</p>

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