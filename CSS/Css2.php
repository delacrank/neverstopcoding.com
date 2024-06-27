<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Div and Span Elements - CSS Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
    
.contact {
 background-color: yellow;
 }

.name {
 font-family: FreeSerif;
 }

.phone { 
 font: monospace;
 }

</style>
</head>
<body>

 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Css.php'); ?>
    
<!-- Right -->
<div id ="rightz">    
    
<h1>Div and Span Elements - CSS Web Development</h1>

<!-- Talking about Div and Span Elements -->
<h2>CSS Continued: Using Div and Span Elements</h2>
<p>
What is a Div element and how do we use it?  Prior to using div, we were using the 'p' element to create paragraphs.  However, 'div' is more of just a generic block level element, which can be used to segment data without worrying about adding additional constraints.
</p>

<hr />
    
<!-- Div element -->
<h3>Why do we want to use the div element?</h3>
<p>
Using this will Div element, will not only give our page more organization, but it will also give us more control over what we write and how we want it to be displayed.
<br /><br />
Span is similar to Div, however span is an 'inline element' intend to be embedded in other elements like Div or paragraph.  The purpose of span is just formatting, so that you won't have to worry about creating spaces between every element you use.  Span can also combine elements like div if used in forms, but without worrying about making the form look sloppy with weird gaps.
</p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">
.contact {
    background-color: yellow;
}

 .name {
    font-family: FreeSerif;
 }

 .phone { 
    font: monospace;
 }

&#60;/style>

&#60;div class = "contact">
 &#60;span class = "name"> Andy &#60;/span> 
 &#60;span class = "phone"> 718-4839 &#60;/span> 
&#60;/div>

&#60;div class = "contact">
 &#60;span class = "name"> Elizabeth &#60;/span>
 &#60;span class = "phone"> 212-3920 &#60;/span>
&#60;/div>

&#60;div class = "contact">
 &#60;span class = "name"> Matthew &#60;/span>
 &#60;span class = "phone"> 646-2185 &#60;/span>
&#60;/div>
</pre>
<br />

<em> Example: </em>
<br /><br />
<div class = "contact"> 
 <span class = "name"> Andy </span> 
 <span class = "phone"> 718-4839 </span> 
</div>


<div class = "contact">
 <span class = "name"> Elizabeth </span>
 <span class = "phone"> 212-3920 </span>
</div>

<div class = "contact">
 <span class = "name"> Matthew </span>
 <span class = "phone"> 646-2185 </span>
</div>
<br />
<hr />

<!-- Div and Span elements continued -->
<h3>Differences between paragraph and div block elements</h3>
    <p>So, above we basically formatted the way we wanted our contacts to look like.  We used the Style Sheet to change the background of our contacts and then we defined the font family for the names as well as the font for our phone numbers.

<span class = "nl">However, instead of displaying these elements using the &#60;p class = " ">  we decided to use &#60;div class = " ">.</span>
        
<span class = "nl"> Finally, to carry both the name and phone style's (respectively 'FreeSerif' and 'Monospace') we had to use the inline <strong>span</strong> element.</span>
        
        <span class = "nl"> So, how does using the Div class help us?</span> 

        <span class = "nl"> The div element doesn't carry the contraints of a paragraph element (adding line breaks in the formating).  This is what our contacts would look like had we used the 'p' element.</span></p>
    
<em>Example:</em> 
<p class = "contact"> 
 <span class = "name"> Andy </span> 
 <span class = "phone"> 718-4839 </span> 
</p>


<p class = "contact">
 <span class = "name"> Elizabeth </span>
 <span class = "phone"> 212-3920 </span>
</p>

<p class = "contact">
 <span class = "name"> Matthew </span>
 <span class = "phone"> 646-2185 </span>
</p>

<hr />

<h3>Understanding Display Property</h3>

    <p>The display property controls how elements on the page are displayed.  Block elements like headings, div and p elements are naturally going to be placed on top of each other.
        
        <span class = "nl">Inline elements like span are going to be placed next to each other.  So if we take a span element and change the display to block, then it will retain the block properties which stack vertically instead of horizontally.</span></p>

    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    li {
        display: inline;
    }
    
    &lt;ul>
        &lt;li>1&lt;/li>
        &lt;li>2&lt;/li>
        &lt;li>3&lt;/li>
        &lt;li>4&lt;/li>
        &lt;li>5&lt;/li>
    &lt;/ul>
    </pre>
    <br />    
    <em>Example:</em>
    <ul>
        <li style="display: inline">1</li>
        <li style="display: inline">2</li>
        <li style="display: inline">3</li>
        <li style="display: inline">4</li>
        <li style="display: inline">5</li>
    </ul>

<hr />
<br />
<a href = "Css1.html"> Previous Page</a>
<span class= "next">
    <a href = "Css3.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>

