<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Anchron Tag, Image List - Programming HTML</title>
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
    
    
<h1>Anchron Tag - Learning HTML</h1>

<!--Introduction to Images and Hyper Links -->
<h2>Hyper Tags and Images</h2>

<p>So now that we have a primitive understanding about how to build: ordered/unordered lists and tables, we will move on to adding anchors and images to our website.</p>
    
<hr />

<!-- Anchor Tag Section-->
<h3>What is an Anchor Tag?</h3>

<p>In order to create links which contain references to other pages outside of our own, we need to be able to embed hyper links into some of our words.

    <span class = "nl">For this we need an anchor tag.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;a href = "Test.html">
Link to Our first page
&#60;/a> &#60;a href = "http://www.google.com" > Google &#60;/a></pre>
<br />

<em>Example:</em>
<br /><br />
<a href = "Html.html"> Link to Our first page </a>
<br /><br />
<a href = "http://www.google.com"> Google </a>

<hr />

<!-- Images  -->
<h3> Linking Images</h3>

<p>One way we could add an image to our site is by replacing the location in our anchor tag containing a link to the image.
<br />

<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
&#60;a href = "image.jpg"> image &#60;/a></pre>
<br />

<em>Example:</em>
<br /><br />
<a href = "../Images/Cover.jpg"> An M83 Cover</a>
<br />
<hr />

<!-- new page -->
<h3>New Window/Tab Link</h3>
    
   <p>What if we wanted the user to see the image but in a new window, or even if any link they clicked would send them to a new window instead of leaving our page?</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;a href = "image.jpg" target = "_blank"> Image &#60;/a></pre>
<br />

<!-- Example -->
<em>Example:</em>
<br /><br />
<a href = "../Images/Cover.jpg" target = "_blank">An M83 Cover</a>

<hr />

<h3>Embedding Images</h3>
    
    <p>However, we could also embed an image on to our page so that users could see the image without having to leave the page.</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;img src ="image.jpg"  
        height = "200"
        width = "200"
        alt = "Our Image" /></pre>
<br />

<em>Example:</em>
<br /><br />

<img src ="../Images/Cover.jpg"
	height = "200"
	width =  "200"
	alt = "M83 Cover"/>
    
    <p>Also I should mention that if you want images to appear on your website, you should first add them to your websites folder, otherwise the html/php file will not know where to look for the image.</p>

<hr />


<!-- Thumbnail Section -->
<h3> Creating list item links with Images</h3>
    
<p>Sometimes we want users to have to ability to be able to click on an image to make a larger, but they still want a preview of what they will be seeing.  For this situation we can create a thumbnail.
    
    <span class ="nl"> Thumbnails can also be used in lists both ordered or unordered, actually a list a good way to organize the way data will be displayed on your website.</span>
    
    <span class ="nl"> In the code below, you will find that the image itself is also a link to a larger image.  You can use images as links and intergrate these images in order to organize information.</span> </p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;ul> 
    &#60;li> 
        &#60;h3> Cover2 &#60;/h3>
            &#60;a href = "Cover2.jpg"> 
            &#60;img src = "Cover2.jpg" 
                      height = "50"
                      width =  "50"
                      alt = "Cover 2" /> 
&#60;/a>
 &#60;/li>
&#60;/ul></pre>
<br />

<em>Example:</em>
<br />
<ul>
 <li>
  <h4> Cover 2</h4>
   <a href = "../Images/Cover5.jpg">
   <img src = "../Images/Cover5.jpg"
	height = "50"
	width =  "50"
	alt = "Cover 2" />
   </a>
 </li>

 <li>
  <h4> Cover 3</h4>
   <a href = "../Images/Cover3.jpg">
   <img src = "../Images/Cover3.jpg"
	height = "50"
	width =  "50"
	alt = "Cover 3" />
   </a>
 </li>

 <li>
  <h4> Cover 4</h4>
   <a href = "../Images/Cover4.jpg">
   <img src = "../Images/Cover4.jpg"
	height = "50"
	width =  "50"
	alt = "Cover 4" />
   </a>
 </li>
</ul>

<p>Remember to close any brackets you open it as code can become confusing when when working with so many items.</p>

<hr />
<br />

<a href = "Html1.html">Previous Page</a>
<span class ="next"><a href = "Html3.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>