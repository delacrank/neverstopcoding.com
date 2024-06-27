<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Modifying classes - CSS Web Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type = "text/css">
    
.class1 {
 color: blue;
 font-family: "Nimbus Roman No9 L";
 font-size: xx-large;
 }
  
 .question {
 text-align: left;
 color: red;
 font-family: "Nimbus Mono L";
 font-size: 150%;
 }
  
 .answer {
 text-align: right;
 color: green;
 font-family: "Nimbus Sans L";
 font-size: 90%
 }

 .font20 {
 font-size: 20pt;
 }

 .pink {
 color: fuchsia;
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
    
<h1>Modifying classes - CSS Web Development</h1>
    
<!-- Creating and modifying classes in CSS -->    
<h2>CSS Continued: creating &#38; modifying classes</h2>
<p>
In this section, will we be talking about creating various types of css classes to create in order to modify our styles and reuse code for future content.

<span class="nl">
Creating CSS classes is a good way to reuse and organize styles we create, in order to give our webpages some organization and ascetic feel.</span>
</p>

<hr />
    
<!-- CSS Classes Section -->
<h3>Setting up our CSS Classes</h3>
<p>
Just like before we set up our style sheet:
<br />

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">

.class1 {
    color: blue;
    font-family: "Nimbus Roman No9 L";
    font-size: xx-large;
}

&#60;/style>

&#60;p class = "class1"> This is our example of class 1. &#60;/p>
</pre>
<br />

<!-- Example -->
<em> Example: </em>
<p class = "class1">
This is our example of class 1.
</p>

<hr />

<!-- Multiple Classes -->
<h3>Using Multiple Classes</h3>
<p>
Lets say for example, that we want to use multiple classes in order to mix things up on our webpage.  So, if we had a FAQ page which contained forum questions and answers.  
<br /><br />
We want to change the look of our questions and answers but, we cannot use the ID CSS because it is unique, so instead we will create multiple classes, to reuse our styles over and over.
<p>

<!-- Code Section -->
<pre class = "code">
&#60;style type = "text/css">

.question {
    text-align: left;
    color: red;
    font-family: "Nimbus Mono L";
    font-size: 150%;
}

.answer {
    text-align: right;
    color: green;
    font-family: "Nimbus Sans L";
    font-size: 90%;
}

&#60;p class = "question"> How much does a rhino weigh? &#60;/p>


&#60;p class = "answer"> A rhino weighs over 300 pounds. &#60;/p>


&#60;p class = "question"> How many legs does an insect have? &#60;/p>

&#60;p class = "answer"> An insect has 6 legs. &#60;/p>
</pre>
<br />

<!-- Example -->
<em> Example: </em>
<p class = "question">How much does a rhino weigh?</p>
<p class = "answer">A rhino weighs over 300 pounds.</p>
<p class = "question">How many legs does an insect have?</p>
<p class = "answer">An insect has 6 legs.</p>

<hr />

<!-- Combining Classes -->
<h3>Combining Classes</h3>
<p>
The beauty of classes, is that we also have the ability to combine two classes in order to create a new class which shares the characteristics of both classes.<br /><br />

However, just note that if one of the classes has rules which conflict with the other, then the last class will take priority in terms of which class gets displayed.<br /><br />

Lets say we have one class which has font size 20 and another which color is blue.  Individually the classes should just change text to increase/decrease the size of the font to 20, or change the color to blue.  Together the new class will change the font to 20 as well as being blue.
</p>

<!-- Code Section -->
<pre class = "code">
&#60;p class = "font20"> These words are size 20. &#60;/p>

&#60;p class = "pink"> These words are pink. &#60;/p>

&#60;p class = "font20 pink"> These words should be both size 20 and pink. &#60;/p>
</pre>
<br />

<!-- Example -->
<em>Example:</em>
<p class = "font20">These words are size 20.</p>
<p class = "pink">These words are pink.</p>
<p class = "font20 pink">These words are both size 20 and pink.
</p>

<hr />
<br />
<a href = "Css.html"> Previous Page</a>
<span class = "next">
<a href = "Css2.html"> Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>

