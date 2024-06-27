<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Floating Page Layouts Part 3 - Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
   
.h2 {
border-bottom: white;   
}
    
#body{
    background-image: url("img.jpg");
    background-repeat: no-repeat;
}
    
#all{
    background-image: url("img.jpg");
    background-repeat: no-repeat;
    width: 640px;
    height: 400px;
    margin-left: auto;
    margin-right: auto;
}
    
.header{
    background-color: #e2e393;
    border-bottom: 3px double black;
    text-align: center;
    float: left;
    width: 640px;
    clear: both;
    margin-left: -8px;
    margin-right: -10px;
}
    
.left{
    float: left;
    width: 200px;
    clear: left;
} 
    
.right{
    float: left;
    width: 400px;
}

.footer{
    float: left;
    width: 640px;
    clear: both;
    text-align: center;
    background-color: #e2e393;
    margin-left: -8px;
    border-top: 3px double black;
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
    
 
<h1>Floating Page Layouts Part 3 - Web Development</h1>

<!-- Building Floating Page Layouts -->
<h2>Building Floating Page Layouts cont.</h2> 
<p>
In this section, we are going to continue talking about layouts and positioning elements. Specifically the div element, which is what we are using to create our columns and provide individual styles for each column.
</p>

<hr />
    
<h3>Building a Fixed-Width Layout</h3>
<p>The reason for building a fixed width layout is primarily if you want to use an image as the background.  You wouldn't want your columns overlapping into the image or images confusing the users.
<span class = "nl">
One of the main differences between the fixed and percentage based layouts, is that a fixed layout will remain static.  A percentage based layout can be subject to change depending on the content.</span> </p>
    
<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">

body{
    background-image: url("image.jpg");
    background-repeat: no-repeat;
}

#header{
    background-color: #e2e393;
    border-bottom: 3px double black;
    text-align: center;
    float: left;
    width: 640px;
    clear: both;
    margin-left: -8px;
    margin-right: -10px;
}

#left{
    float: left;
    width: 200px;
   clear: left;
}
   
#right{
    float: left;
    width: 400px;
}

#footer{
    float: left;
    width: 640px;
    clear: both;
    text-align: center;
    margin-left: -8px;
    border-top: 3px double black;
}</pre>
<br />

<!-- Example: -->
<em>Example:</em>
<br /><br /> 

<div class = "header">
    <h3 class = "h2"> Fixed Width Layout</h3>
</div>

<div class = "left">
    <h4> Left Column</h4>
    <p>    This is also the left column. This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column. </p>
</div>

<div class = "right">
    <h4>Right Column</h4>
    <p>    This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column.  This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column.  </p>
</div>
<div class = "footer">
    <h5>Footer</h5>
</div>
<br style = "clear: left" />

<p>Notice how the problem with a fixed width layout is when i make my browser narrower, that the columns overlap because, they cannot change their width (its fixed).</p>

<hr />

<!-- Using an ALL div to Center a fixed layout -->
<h3>Using an ALL div to Center a fixed layout</h3>
    <p> In the situation of building a fixed layout, there may be the issue of properly centering it or making sure that both the right and left div elements are properly aligned.
    
<span class="nl">For this situation, we can create another div element which encompasses all of our div elements under 1 block and then center that div using our css page.  All changes made in the style and code are emphasived in bold characters.</span></p>    

<em>Code:</em>
<!-- Code Section -->
<pre class = "code"><div style = "border: red inset 3px; padding: 1em">&#60;style type = "text/css">

<strong>all#{
    background-image: url("image.jpg");
    background-repeat: no-repeat; 
    width: 640px;
    height: 600px;
    margin-left: auto; 
    margin-right: auto; 
}</strong>

#header{
    background-color: #e2e393;
    border-bottom: 3px double black;
    text-align: center;
    float: left;
    width: 640px;
    clear: both;
    margin-left: -8px;
    margin-right: -10px;
}

#left{
    float: left;
    width: 200px;
   clear: left;
}

    
#right{
    float: left;
    width: 400px;
}

#footer{
    float: left;
    width: 640px;
    clear: both;
    text-align: center;
    margin-left: -8px;
    border-top: 3px double black;
}</div>
<div style = "border: 2px blue dotted; padding: 1em"><strong>&#60;div id = "all"> </strong>

<div style = "border: 2px black dotted; padding: 1em"> &#60;div id = "head">
        &#60;h1> Two Columns with Float &#60;/h1> 
    &#60;/div>  </div>
<div style = "border: 2px black dotted; padding: 1em"> &#60;div id = "left"> 
    &#60;h2> Left Column &#60;/h2>
        &#60;p> This is the left column. This is the left column.  &#60;/p>
&#60;/div></div>
<div style = "border: 2px black dotted; padding: 1em"> &#60;div id = "center">
    &#60;h2> Center Column &#60;/h2>
        &#60;p> This is the center column. This is the center column. &#60;/p> 
        &#60;p>  This is the center column. This is the center column. &#60;/p>  
        &#60;p> This is the center column. This is the center column. &#60;/p>  
&#60;/div></div>
<div style = "border: 2px black dotted; padding: 1em"> &#60;div id = "right">   
    &#60;h2> right Column &#60;/h2> 
        &#60;p> This is the right column. This is the right column.   &#60;/p> 
    &#60;/div> </div>
<div style = "border: 2px black dotted; padding: 1em"> &#60;div id = "footer"> 
    &#60;h3> Footer &#60;/h3> 
&#60;/div> </div>
<strong> &#60;/div> </strong>
</div>
</pre>
<br />

<!-- Example -->
<em>Example:</em>
<br /><br /> 
<div id = "all">
<div class = "header">
    <h3 class = "h2"> Fixed Width Layout</h3>
</div>

<div class = "left">
    <h4> Left Column</h4>
    <p> This is also the left column. This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column.This is also the left column. </p>
</div>

<div class = "right">
    <h4>Right Column</h4>
    <p> This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column.  This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. This is the right column. </p>
    </div>
<div class = "footer">
    <h5>Footer</h5>
</div>
    </div>
<br style = "clear: left"> 
<p>The columns don't overlap no matter how much i adjust the width of my browser : )</p>


<br /> 
<hr />
<br />

<a href = "Css11.html"> Previous Page</a>
<span class= "next">
    <a href = "Css13.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>