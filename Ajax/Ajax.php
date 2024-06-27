<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to code using AJAX" />
<meta name="keywords" content="Ajax" />
<meta name="author" content="Juan Arias" />  
<title>Learning Ajax</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">

<script src="../jquery-1.11.3.min.js"> </script>
  
</head>
<body>
    
 

<!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

 
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Ajax.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Learning Ajax</h1>
    
    <p>Alright, let's start out with what Ajax stands for:  Asynchronous Javascript and Xml (extensible markup language).  Why would we want to use ajax?  Ajax allows users to perform other activites while the webpage is still loading, typcially it will load one of three types of data: HTML, XML or JSON (javascript object notation).
        
        <span class = "nl">Yet, we haven't gone into what JSON or XML is yet.  So let me explain, JSON is a way to store data using just the the object in javascript and XML is like HTML only the tags in XML describe the type of data they work with, they don't change how data is displayed.</span>
            
    <span class = "nl">  Let's look at some examples of XML and JSON to be clear.</span>
    </p>
    
<em>XML:</em>
<!-- code -->
<pre class="code">
&lt;?xml version="1.0" encoding="utf-8" ?>
&lt;events>
    &lt;event>
    &lt;location> New York, NY &lt;/location>
        &lt;data> Jan 31 &lt;/date>
        &lt;/event>
    &lt;/events></pre>
    
<p>Now, let's look at this same information written in JSON.</p>    
    
    
<em>JSON:</em>
<!-- Code -->
<pre class="code">
{
    "events": [
        {
            "location": "New York, NY",
            "date": "Jan 31"
        }   
    ]   
}</pre>
    
    
<br />
<hr />
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
