<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Python - Intro to Python Programming</title>
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
<?php include('..//Includes//Left_Python.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Dictionaries, while loops</h1>
    
<h2>Working with Key Value pairs</h2>

    <p>In this section we are going to learn how to define and iterate though a key value pair. We will learn how to check if a value is there, modify an existing value and remove or append a value to an existing dicitionary.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code"><span class = "comments"># define a dictionary</span>
kidsToys = {
    'jason' : 'car', 
    'sarah' : 'train',
    'jess' : 'plane'
}

print(kidsToys['sarah'])
print(kidsToys['jess'])</pre>

<p>Let's try to iterate though one of these dictionaries and try to modify values based on a condition.</p>

<pre class="code"><span class = "comments"># define a dictionary</span>
kidsToys = {
    'jason' : 'car', 
    'sarah' : 'train',
    'jess' : 'plane'
}

for k, v in kidsToys.items():
    if k == 'jason':
        kidsToys['jason'] = 'truck'
    
    print(f"The school kid {k} has this toy: {v}")</pre>



<br />
<hr />
    
<a href="Python1.php">Previous Page</a>
<span class = "next"><a href="Python3.php">Next Page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>