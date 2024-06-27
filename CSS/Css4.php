<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Borders and Backgrounds - CSS Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
    
h4 {
 border-color: red;
 border-width: .50em;
 border-style: double;
}

.Solid {
 border-color: black;
 border-width: .35em;
 border-style: solid;
 margin-bottom: 1em;
}

.Double {
 border-color: blue;
 border-width: .35em;
 border-style: double;
margin-bottom: 1em;
}

.Groove {
 border-color: green;
 border-width: .35em;
 border-style: groove;
margin-bottom: 1em;
}

.Ridge {
 border-color: fuchsia;
 border-width: .35em;
 border-style: ridge;
margin-bottom: 1em;
}

.Inset {
 border-color: yellow;
 border-width: .35em;
 border-style: inset;
margin-bottom: 1em;
}

.Outset {
 border-color: grey;
 border-width: .35em;
 border-style: outset;
margin-bottom: 1em;
}

.Dashed {
 border-color: cyan;
 border-width: .35em;
 border-style: dashed;
margin-bottom: 1em;
}

.Dotted {
 border-color: magenta;
 border-width: .35em;
 border-style: dotted;
margin-bottom: 1em;
}

.Simple {
 border: blue 10px dotted;
}

.Color {
 border-bottom: black 5px solid;
 border-top: 5px green solid;
 border-right: 5px red  solid;
 border-left: 5px blue solid;
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
    
<h1>Borders and Backgrounds - CSS Web Development</h1>

<!-- Borders and Backgrounds -->
<h2>Borders and Backgrounds</h2>
    
<p>In this section we will finally start to understand how to use the space in our website to properly display and organize content. The purpose of borders and backgrounds will serve the purpose of creating a sense of direction, while providing a nice aesthetic quality for our content.</p>

<hr />
    
<!-- Using borders -->
<h3>How and when to use borders</h3>
<p>Borders are going to be used to seperate sections of content.  We can use borders to seperate our main menu from the main body of our page, or we can use borders to highlight ads within our page.  Sometimes borders will serve to identify one persons writing from anothers in a thread, sometimes they can be used to frame an object (text, image, video) if necessary.</p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">

h4 {
    border-color: red;
    border-width: .25em;
    border-style: double;
}

&#60;/style>

&#60;h4> This has a border &#60;/h4>
</pre>
<br />

<!-- Example -->
<em> Example: </em>
<h4> This has a border </h4>

<hr />

<!-- Attributes and styles -->
<h3>Attributes and Styles</h3>
    
    <p>Borders have three attributes: width, color and style. Each value must be defined in order for the border to work properly.  Width and color and pretty simple, anything more or less than .25em will look slightly exaggerated.
<span class = "nl">
What is complicated is the variety in styles to choose from:</span></p>
    
<div class = "Solid">Solid</div>
<div class = "Double">Double</div>
<div class = "Groove">Groove</div>
<div class = "Ridge">Ridge</div>
<div class = "Inset">Inset</div>
<div class = "Outset">Outset</div>
<div class = "Dashed">Dashed</div>
<div class = "Dotted">Dotted</div>
<br />
<hr />

<!-- border shortcut -->
<h3>Border Shortcut</h3>
<p>
There is also a way to write borders without having to write:

<span class = "nl">
border-color:</span>
border-width:<br />
border-style:<br /><br />
Instead, you can write just:
</p>

<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">

h1 {
    border: blue 10px dotted;
}

&#60;/style>

&#60;h1> This border is blue and dotted &#60;/h1>
</pre>
<br />

<em> Example: </em>
<br /><br />

<div class = "Simple">
This border is blue and dotted
</div>

<hr />

<!-- Modifying borders -->
<h3>Modifying borders</h3>
<p>
You can remove or change sections of the border by modifying the code.
</p>
    
<em>Code:</em>    
<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/ccs">

h1 {
    border-bottom: black 5px solid;
    border-top: green 5px solid;
    border-right: red 5px solid;
    border-left: blue 5px solid;
}
&#60;/style>

&#60;h1> This border has a lot of colors &#60;/h1>
</pre>
<br />

<em>Example: </em>
<br /><br />
<div class = "Color">
This border contains 4 colors.
</div>
<br />
<hr />

    
    
<h3>Outline</h3>

    <p>An outline is a another border which you can use around your first border.  An order to use the outline property just write 'outline: solid 5px red;'. It takes the width, style and color properties of the border with an additional property called offset.</p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    h1 {
        border: solid green 3px;
        outline: dotted red 3px;
    }
    
    &lt;h1>Outline&lt;/h1>
    </pre>

    <p style="border: solid green 3px; outline: dotted red 3px">Outline</p>



<br />
<hr />

<br />
<a href = "Css3.html"> Previous Page</a>
<span class ="next">
<a href = "Css5.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>



