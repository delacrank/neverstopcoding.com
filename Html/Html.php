<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="A fun an exciting way to teach yourself HTML. Plently of tutorials, code, explantions and insite on web development." />
<meta name="keywords" content="HTML, Hyper Text Markup Language, HTMLX, HTML5, Web Development" />
<meta name="author" content="Juan Arias" />
<title>Lists, Definitions and Tables - Programming HTML</title>
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
<?php include('..//Includes//Left_Html.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Lists, Definitions and Tables - Learning HTML</h1>

<!-- New Heading for each section -->   
<h2>HTML Tags</h2>
    
<p> Html tags are symbols used to modify how content will be displayed on a webpage.  Learning tags can allow a web developer to display information in an organized and visually asethic manner. </p>
    
<hr />
    
<!-- Unordered List Section -->
<h3>Unordered Lists</h3>
    
<p>So far in this blog we have learned several things about html.
For one we learned about lists.  In order to write an unordered list we need to use the tags.</p>

<em>Code:</em>
<!-- Code  -->
<pre class = "code">
&#60;ul> 
    &#60;li> First list item &#60;/li>
&#60;/ul></pre>
    
<br />
<!-- Example -->
<em>Example:</em>
<ul>
<li>First list item</li>
<li>Second list item</li>
</ul>

<hr />

<!-- Ordered List Section -->
<h3> Ordered Lists</h3>
    
<p>However if we want to write an ordered list which lists the items based on their numerical position we would use these tags instead.</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;ol>
 &#60;li> First list item &#60;/li>
&#60;/ol></pre>

<br />
<!-- Example -->
<em>Example:</em>
<ol>
<li>First list item</li>
<li>Second list item</li>
</ol>

<hr />

<!-- Definitions -->
<h3>Definitions</h3>
    
<p>We learned about defining terms using a different set of tags.  So, if we want to define a term, we use the defintion tags. Furthermore, we can repeat definition terms and data for each term as long we remember to close the original tag &#60;/d1>.</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;d1>
 &#60;dt> First list item &#60;/dt>
  &#60;dd> definition of the first item &#60;/dd>
&#60;/d1></pre>
    
<br />
<!-- Example -->
<em>Example:</em>
<dl>
<dt>First list item</dt>
    <dd>definition of the first item.</dd>
<dt>Second list item</dt>
    <dd>definition of the second item.</dd>
</dl>

<hr />

<!-- Tables Section -->
<h3>Creating Tables</h3>
<p> Tables can be a little confusing, understanding how table headers and table definitions are displayed is similar to using the definition tags.  In order to create a table in html we need to use start off by creating a border and defining its thickness. 
    
<span class = "nl"> In order to create our border, we must first use our table tag &#60;table border  &#34;x&#34;> where &#44;x&#44; is the thickness of the border.  Then we can proceed to writing the table row &#60;tr> followed by the table headers &#60;th>. </span>

<span class = "nl">
    Now we have to create a new row to display the contents of our table definitions.  Be sure to create a table definition for each header, otherwise some of the rows will contain mismatched amount of columns per row.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;table border = "1">
 &#60;tr>
  &#60;th> First item &#60;/th>
  &#60;th> Second item &#60;/th>
 &#60;/tr>
&#60;tr>
 &#60;td> first &#60;/td>
 &#60;td> second &#60;/td>
&#60;/tr></pre>
<br />

<!-- Example -->
<em>Example:</em>
<br /><br />

<table border ="1">
<tr>
    <th>First item</th>
    <th>Second item</th>
</tr>

<tr>
    <td>first</td>
    <td>second</td>
</tr>

<tr>
    <td>first</td>
    <td>second</td>
</tr>
</table>

<br />
<hr /><br />
<a href = "../index.html">Home</a>
<span class ="next"><a href = "Html1.html"> Next Page </a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>