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
    
<h2>Instance Methods</h2>
    
<p>In this section, we will learn about pointers, memory addresses and how to go access variables between classes.</p>
    
<!-- this pointer -->
<h3 >'this' Pointer</h3>
    
    <p>'this' is a keyword which refers to a field in this object, in otherwords, a variable pertaining to an class which is currently being instantiated.<br /><br />Below, we are going to look at an example of how to reference are variables between  classes by using the 'this' pointer.</p>
    
<!-- Code -->
<em>Code:</em>
<div class="code">
class Point<br />
{ <div class="padding">
    private int x, y;<br /><br />
    
    Point()<br />
    {<div class="padding">
        this.x = 1;<br />
        this.y = 2;</div>
    }<br /><br />
    
    Point( int x, int y )<br />   
    {<div class="padding">
        this.x = x;<br />
        this.y = y;</div>
    }<br /><br />
    
    public double Diff( Point that )<br />
    {<div class="padding">
        that.x = 3; <br />
        that.y = 4; </div>
    } <br />
    
    static void Main()<br />
    { <div class="padding">
        Point P = new Point(); <br />
        Console.WriteLine(P.Diff(x, y)); <br />
        Console.WriteLine(P(x, y)); </div>
    } </div>
    
}
</div>
    
<hr />
<br />
<a href = "Csharp5.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp7.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>