<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Floating Page Layouts Part 2 - CSS Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
    
.h2 {
border-bottom: white;
}
    
#head{
    border: 2px red solid;
    text-align: center;
}
    
#left{
    border: 2px green solid;
    float: left;
    width: 17%;
    padding: 1%;
}
    
#center{    
    border: 2px blue solid;
    float: left;
    width: 57%;
    padding-left: 1%;
}

#right{
    border: 2px orange solid;
    float: left;
    width: 18%;
    padding: 1%;
}
    
#footer{
    border: 2px black solid;
    float: left;
    width: 100%;
    clear: both;
    text-align: center;
}    
    
#head2{
border-bottom: 3px double grey;
text-align: center;
}
    
#left2{
    float: left;
    width: 18%;
    padding: 1%;
    min-height: 15em;
    background-color: #EEEEEE;
}
    
#center2{    
    float: left;
    width: 56%;
    padding-left: 1%;
    padding-right: 1%;
    min-height: 15em;
}

#right2{
    float: left;
    width: 20%;
    padding: 1%;
    min-height: 15em;
    background-color: #EEEEEE;
}
    
#footer2{
 border: 1px black solid;
 float: left;
 width: 100%;
 clear: both;
text-align: center;
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
    
<h1>Floating Page Layouts Part 2 - CSS Web Development</h1>

<!-- Building Floating Page Layouts -->
<h2>Building Floating Page Layouts</h2> 
<p>Building a 3 column page layout. </p>

<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
<div style = "padding: 1em; border: 2px black solid"> &#60;style type = "text/css">

#head{
    border: 3px red solid;
    text-align: center;
}
    
#left{
  border: 3px green solid;
    float: left;
    width: 20%;
    padding-left: 1%;
}
    
#center {
    border: 3px blue solid;
    float: left;
    width: 60%;
    padding-left: 1%;
}
    
#right {
  border: 3px orange solid;
    float: left;
    width: 17%;
    padding-left: 1%;>
}

#footer{
    border: 3px black solid;
    float: left;
    width: 100%;
    clear: both;
    text-align: center; 
}</div>
<div style = "border: 2px red double">
&#60;div id = "head">
    &#60;h1> Two Columns with Float &#60;/h1>
&#60;/div> </div>
<div style = "border: 2px green double">
&#60;div id = "left"> 
    &#60;h2> Left Column &#60;/h2>
        &#60;p>  This is the left column. This is the left column. &#60;/p>
&#60;/div></div>
<div style = "border: 2px blue double">
&#60;div id = "center">
    &#60;h2> Center Column &#60;/h2>
        &#60;p> This is the center column. This is the center column. &#60;/p>
        &#60;p> This is the center column. This is the center column. &#60;/p>
        &#60;p> This is the center column. This is the center column. &#60;/p>
&#60;/div></div>
<div style = "border: 2px orange double">
&#60;div id = "right">
    &#60;h2> right Column &#60;/h2>
        &#60;p> This is the right column. This is the right column. &#60;/p> 
&#60;/div></div>
<div style = "border: 2px black double">
&#60;div id = "footer">
   &#60;h3> Footer &#60;/h3>
&#60;/div></div></pre>
<br />

<!-- Example -->
<em>Example:</em>
<br /><br />

<div id = "head">
    <h3 class = "h2"> Three Columns with Float</h3>
</div>

<div id = "left">
    <h4> Left Column</h4>
    <p> This is the left column. This is the left column. This is the left column. This is the left column.  </p>
</div>

<div id = "center">
    <h4> Center Column</h4>
    <p> This is the center column. This is the center column. This is the center column. This is the center column. This is the center column. This is the center column. This is the center column.  This is the center column. This is the center column.  This is the center column. This is the center column.  This is the center column. This is the center column.  </p>
</div>

<div id = "right">
    <h4>Right Column</h4>
    <p>    This is the right column. This is the right column. This is the right column. This is the right column.  </p>
</div>
<div id = "footer">
    <h5>Footer</h5>
</div>
    
<p style = "clear: left; padding-top: 20px">Notice how the columns aren't all even. </p>

<hr />

<!-- Specifying a min-height -->
<h3>Specifying a min-height</h3>
<p>
So, notice how the columns are all of different lengths.  In order to have them all at an equal length we have to create a minium hieght for each column. 
<br /><br />
The code for this one is very simple, just add <strong>min-height:</strong> to the style for each div, with the exception of the head and the footer.
</p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">
    
#head{
<strong>border-bottom: 3px grey double;</strong><br />
    text-align: center;
}
    
#left {
    float: left;
    width: 20%;
    padding-left: 1%;
    <strong>min-height: 15em;</strong>
    <strong>background-color: #EEEEEE; </strong>
}

#center{
    float: left;
    width: 60%;
    padding-left: 1%;
    <strong>padding-right: 1%; </strong>
    <strong>min-height: 15em;</strong>
}
    
#right{
    float: left;
    width: 17%;
    padding-left: 1%;
    <strong>min-height: 15em;</strong>
    <strong>background-color: #EEEEEE; </strong>
}

#footer{
    border: 1px black solid;
    float: left;
    width: 100%;
    clear: both;
    text-align: center;
}</pre>   

<p> I should also note, how i removed the borders, added a background color to the left/right columns and changed the head border to only have a border-bottom.  All highlighted in bold.

<span class = "nl">I didn't add the html code because the only thing which changed was the 'CSS'.</span></p>

<!-- Example: -->
<em>Example:</em>
<div id = "head2">
    <h3 class = "h2"> Three Columns with Float</h3>
</div>

<div id = "left2">
    <h4> Left Column</h4>
    <p>    This is the left column. This is the left column. This is the left column. This is the left column. </p>
</div>

<div id = "center2">
    <h4> Center Column</h4>
    <p>    This is the center column. This is the center column. This is the center column. This is the center column. This is the center column. This is the center column. This is the center column.  This is the center column. This is the center column.  This is the center column. This is the center column.  This is the center column. This is the center column. </p>
</div>

<div id = "right2">
    <h4>Right Column</h4>
    <p>  This is the right column. This is the right column. This is the right column. This is the right column.  </p>
</div>
<div id = "footer2">
    <h5>Footer</h5>
</div>
    
<br style="clear: left" />
<hr />

<br />
<a href = "Css10.html"> Previous Page</a>
<span class = "next">
    <a href = "Css12.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>