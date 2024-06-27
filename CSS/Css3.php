<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Styling Links, Defining Multiple Styles - CSS Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
    
#example a {
 color: turquoise;
 background-color: lemonchiffon;
}

#example a:visited{
 color: blueviolet;
 background-color: lawngreen;
}
    
#example a:hover{
 color: fuchsia;
 background-color: yellow;
}

#example a:active{
 color:ghostwhite;
 background-color: deeppink;
}

#example span {
    padding-left: 3em;
}    
#special p {
 color: fuchsia;
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
    
<h1>Styling Links, Defining Multiple Styles - CSS Web Development</h1>

<!-- Styling Links, Selecting in Context, Defining Multiple Styles -->
<h2>Styling Links, Defining Multiple Styles</h2>

    <p>So far we have learned how to set up a style sheet by adding elements and rules to those elements like color, size, font, background-color. etc.

    <span class = "nl">In this section we will be talking about how to select and modify content, how to combine mutliple styles and how to change the look and feel of our hyperlinks.</span>
</p>

<hr />
    
<!-- Styling Links -->
<h3> Styling Links</h3>

<p>
Now we are going to talk about how to modify our links.  There are four variations to how hyperlinks look.  The first is just looking at an unvisited link, the second is when you mouse is hovering over it, the third is when you have previously (visited) selected the link and the last is the active link when you click on it.
    
<span class = "nl">In order to get all the stylized links working correctly, you should remember 'LoVe HAte'. This is the mnemonic in order to remember which styles to place first: 'link', 'visited', 'hover' and 'active'.</span>
</p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">
    
a {
    color: turquoise;
    background-color: lemonchiffon;
}

a:link {
    color: turquoise; 
    background-color: lemonchiffon;
}

a:visited {
    color: blueviolet; 
    background-color: lawngreen; 
}

a:hover {
    color: fuchsia; 
    background-color: yellow; 
}

a:active {
    color: ghostwhite; 
    background-color: deeppink; 
}

&#60;/style>
</pre>
<br />

<!-- Example -->
<em><span id="1">E</span><span id="2">x</span>a<span id="3">m</span>p<span id="4">l</span>e:</em>
<br /><br />

<div id = "example">
    
<span><a href = "#1"> Link 1 </a></span>
<span><a href = "#2"> Link 2 </a></span>
<span><a href = "#3"> Link 3 </a></span>
<span><a href = "#4"> Link 4 </a></span>
</div>
<br />

<hr />

<!-- Selecting by Context -->
<h3> Selecting by Context </h3>

<p>
Selecting by Context is a rule that allows you to modify element appearance by creating a class and applying it to a div element.

<span class = "nl">
The beauty of this is that we can modify paragraphs, menus, headings, etc. as long as they lie within the class we created for the div element. 
</span>

<span class = "nl">
    The main difference between using this rule over the various style classes is that: we don't have to keep re-defining each individual element.  Instead we can group the elements together under a single id.</span></p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">
#special p{
    color: fuchsia;
    text-align: center;
}
&#60;/style>

&#60;div id = "special">
&#60;p> This paragraph is centered and colored differently &#60;/p>
&#60;/div>

&#60;div>
&#60;p> This is a regular paragraph &#60;/p>
&#60;/div>
</pre>
<br />

<!-- Example -->
<em>Example:</em>
<br />

<div id = "special">
<p>This paragraph is centered and colored differently</p>
</div>

<div>
<p>This is a regular paragraph</p>
</div>

<hr />
<br />

<a href = "Css2.html"> Previous Page</a>
<span class ="next">
    <a href = "Css4.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>

