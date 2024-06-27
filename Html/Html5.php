<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Drop down, Check box, Radio Box - Programming HTML</title>
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
    
<!-- More on advanced forms -->
<h1>Drop down, Check box, Radio Box - Learning HTML </h1>

<h2> Types of Forms </h2>

<p> In order to make a drop down list where the user can select a value from the list, we need to use a 'Select ID' tag.  However, if we were to create a selection of values which the user could choose by checking one, we would have to change the input type to 'checkbox'.  In order to create a radio group we would have to change the input type to 'radio' while adding a 'name' following the input type to the entire radio group (the name would have to remain the same for each group). </p>

    <hr />
    
<!-- Selection List mark up-->
<h3>Drop down List</h3>

<p>A drop down list is a way of creating a list of options for users to select from without having to take up much space on the website.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;form action = "self.html">
    &#60;p>
        &#60;label> Select a direction &#60;/label>
        &#60;select id = "selDirection">
            &#60;option value = "right"> right &#60;/option>
            &#60;option value = "left"> left &#60;/option>
            &#60;option value = "up"> up &#60;/option>
            &#60;option value = "down"> down &#60;/option>
        &#60;/select>
  &lt;/p>
&lt;/form></pre>
<br />

<em>Example:</em>
<!-- Example -->

<h4>Drop down List</h4>
<form action = "Html5.html">
 <p>
  <label> Select a direction </label>
  <select id = "selDirection">
   <option value = "right">right</option>
   <option value = "left">left</option>
   <option value = "up">up</option>
   <option value = "down">down</option>
  </select>
 </p>
</form>

<hr />

<!-- Check box mark up-->
<h3>Check Boxes</h3>

<p>Check boxes are good for surveys or multiple choice situations.</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;form action = " ">
    &#60;p>
        &#60;input type = "checkbox"
                     id = "chkRight"
                     value = "Right"/> Right
                     
        &#60;input type = "checkbox"
                     id = "chkLeft"
                     value = "Left"/> Left
                     
        &#60;input type = "checkbox"
                     id = "chkUp"
                     value = "Up"/> Up
                     
        &#60;input type = "checkbox"
                     id = "chkDown"
                     value = "Down"/> Down
    &#60;/p>
&#60;/form></pre>
<br />

<em>Example:</em>
<!-- Example -->

<h4>Check Boxes</h4>

<form>
 <p>
  <input type = "checkbox"
  	 id = "chkRight"
  	 value = "Right" /> Right
    <input type = "checkbox"
  	 id = "chkLeft"
  	 value = "Left" /> Left
    <input type = "checkbox"
  	 id = "chkUp"
  	 value = "Up" /> Up
    <input type = "checkbox"
  	 id = "chkDown"
  	 value = "Down" /> Down
 </p>
</form>
 
<hr />

<!-- Radio buttons mark up-->
<h3>Radio Buttons</h3>

<p>Radio buttons, best when the multiple choice questions are limited to making one choice.</p>

<em>Code:</em>
<!-- Code -->
<pre class = "code">
&#60;form action = "">
    &#60;p>
        &#60;input type = "radio"
                     name = "radDirection"
                     id = "rad1"
                     value = "Right"/> Right

        &#60;input type = "radio"
                     name = "radDirection"
                     id = "rad2"
                     value = "Left"/> Left

        &#60;input type = "radio"
                     name = "radDirection"
                     id = "rad3"
                     value = "Up"/> Up

        &#60;input type = "radio"
                     name = "radDirection"
                     id = "rad4"
                     value = "Down"/> Down
    &#60;/p>
&#60;/form></pre>
<br />

<em>Example:</em>
<!-- Example -->

<h4>Radio Buttons:</h4>
    
<form>
<p>
  <input type = "radio"
	 name = "radDirection"
  	 id = "rad1"
  	 value = "Right" /> Right

    <input type = "radio"
   	 name = "radDirection"
  	 id = "rad2"
  	 value = "Left" /> Left
  	 
    <input type = "radio"
	 name = "radDirection"
  	 id = "rad3"
  	 value = "Up" /> Up

    <input type = "radio"
 	 name = "radDirection"
  	 id = "rad4"
  	 value = "Down" /> Down
</form>

<hr />
<br />

<a href = "Html4.html"> Previous Page</a><span class ="next">
<a href = "Html6.html"> Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>