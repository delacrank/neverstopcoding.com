<!doctype html>
<html>
     <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Text &amp; Box Shadows - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style>
        .shadow {
            text-shadow: 2px 2px .75px red;
            font-size: 1.5em;
        }
        
        .shadow1 {
            text-shadow: -2px -2px 1.5px blue;
            font-size: 1.5em;
        }
        
        p.shadow3 {
            text-shadow: 3px -3px 3px -3px 0px yellow;
            font-size: 1.5em;
        }
        
        div.shadow4 {
            width: 100px;
            height: 50px;
            background-color: grey;
            box-shadow: 4px 4px 2px red;
        }
        
        div.shadow5 {
            width: 100px;
            height: 50px;
            background-color: grey;
            box-shadow: -6px -6px 3.5px blue;
        }
        
        div.shadow6 {
            width: 100px;
            height: 50px;
            background-color: grey;
            box-shadow: 0 0 3.5px 3px yellow;
        }
        
        div.shadow7 {
            width: 100px;
            height: 50px;
            background-color: grey;
            box-shadow: inset 0 0 3.5px 3px green;
        }
    </style>
    </head>
    
<body> <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Css.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Text &amp; Box Shadows - CSS Web Development</h1>
        
        <h2>Adding Shadows</h2>
        
            <p>You can add shadowing to either text or to a box, in this section we are going to learn how to add shadow to both.  First let's look at manipulating shadows added to text.</p>
        
    <hr />
        
        <!-- shadow text -->
        <h3>Text Shadow</h3>
        
            <p>In order to add shadows to text, you must add the 'text-shadow' property. This property provides 4 fields, left or right, top or bottom, sharp or blurred, and spread. Let's look at an example of adding shadow to a text using only positive values to change the shading of the top and right side of text.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    p.shadow {
        text-shadow: 2px 2px .75px red;
    }
    
    &lt;p class = "shadow"> This is a shadowed p element &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br />
    <!-- example -->
    <p class ="shadow">This is a shadowed p element</p>
        
        <p>Positive values for the first field make the shadow distribute to the right side of the text, if we make that field a negative value then shadows will appear on the left.
        
    <span class = "nl">Let's flip the shadow so that it appears up and to the left, and let's also make it a little more blurry.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    p.shadow {
        text-shadow: -2px -2px 1.5px blue;
    }
    
    &lt;p class = "shadow"> This is a shadowed p element &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br />
    <!-- example -->
    <p class ="shadow1">This is a shadowed p element</p>
        
    <p>Now, let's move on to using the box shadow property.</p>
        
    <hr />    
        
    <!-- Box Shadow -->
    <h3>Box Shadow</h3>
        
        <p>The box shadow property works just like the text shadow property. However, it adds an extra field called 'spread'. Spread allows you to add shadow on both sides. This means you can add shadows to the left and right of a box, as well as the top and bottom of it.
        
        <span class = "nl">Let's look at an example of using box shadow.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.shadow {
        width: 100px;
        height: 50px;
        background-color: grey;
        box-shadow: 4px 4px 2px red;
    }
    
    &lt;div class = "shadow"> &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br /><br />
    <!-- example -->
    <div class ="shadow4"> </div>
        
        <p>Now let's see the same affect only with putting the shadow to the top left of the box this time. For effect let's make the shading a little larger and more blurry.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.shadow {
        width: 100px;
        height: 50px;
        background-color: grey;
        box-shadow: -6px -6px 3.5px blue;
    }
    
    &lt;div class = "shadow"> &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br /><br />
    <!-- example -->
    <div class ="shadow5"> </div>
        
        <p>Alright, since we are having fun, let's add the spread effect to add shadow to all sides of the box. We could do this by adding positive and negative values like so, '4px -4px 4px -4px 3.5px yellow'. Otherwise, we can just keep the left and right values at zero and just add the spread element.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.shadow {
        width: 100px;
        height: 50px;
        background-color: grey;
        box-shadow: 0 0 3.5px 3px yellow;
    }
    
    &lt;div class = "shadow"> &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br /><br />
    <!-- example -->
    <div class ="shadow6"> </div>
        
        <p>There is another property which is called 'inset', it allows us to add shadows inside the box as well. Let's see an example of this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.shadow {
        width: 100px;
        height: 50px;
        background-color: grey;
        box-shadow: inset 0 0 3.5px 3px green;
    }
    
    &lt;div class = "shadow"> &lt;/p></pre>
        
    <br />    
    <em>Example:</em><br /><br />
    <!-- example -->
    <div class ="shadow7"> </div>
        
        <hr />        
        <br />
        <a href = "Css18.html"> Previous Page</a>
        <span class = "next">
        <a href = "Css20.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 