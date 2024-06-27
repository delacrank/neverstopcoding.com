<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />   
        <title>Linear Gradients - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style>
        div.box {
        background-image: linear-gradient(to right, white, blue);
        height: 75px;
        width: 150px;
        }    
        
        div.box1 {
        background-image: linear-gradient(to left, white, blue);
        height: 75px;
        width: 150px;    
        }    
        
        div.box2 {
        background-image: linear-gradient(to top, red, yellow);
        height: 75px;
        width: 150px;
        }
        
        div.box3 {
        background-image: linear-gradient(to left, red, yellow 30%, yellow 70%, red);
        height: 75px;
        width: 150px;
        }
        
        div.box4 {
        background-image: linear-gradient(135deg, red, yellow);
        height: 75px;
        width: 150px;
        }
        
        div.box5 {
        background-image: linear-gradient(220deg, red, yellow, green);
        width: 150px;
        height: 75px;
        }
        
        div.box6 {
        background-image: repeating-linear-gradient(to bottom left, red, yellow 20px, green 30px);
        width: 150px;
        height: 75px;
        }
        
        div.box7 {
        background-image: radial-gradient(circle, red, blue);
        width: 150px;
        height: 75px;
        }
        
        div.box8 {
        background-image: radial-gradient(circle at 0% 0%, red, blue);
        width: 150px;
        height: 75px;
        }
        
         div.box9 {
        background-image: repeating-radial-gradient(circle at 100% 100%,
        red, blue 20px);
        width: 150px;
        height: 75px;
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
    
        <h1>Linear Gradients - CSS Web Development</h1>
        
        <h2>Linear Gradients</h2>
        
            <p>A linear gradient is a way to add graphics to a background. A gradient is an effect  where the color slowly transistions from one to a different color.
        
        <span class = "nl">The best to explain this feature is by showing you how it looks.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(to right, white, blue);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box"></div>
        
    <p>So this was an example, let's see two more examples. First let's try reversing the order of the color distribution and then let's change it so that it changes color vertically. </p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(to left, white, blue);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box1"></div>
        
    <p>Alright, now let's try it vertically.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(to up, red, yellow);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box2"></div>
        
        <p>Now, let's get creative and make it so that our color distribution changes from red to yellow and back to red again.  To adjust for these changes we should add the color in two places to signify the beginning and ending of the color.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(to left, red, yellow 30%,  yellow %70, red);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box3"></div>
        
        <p>Let's see if we can change the gradient at an angle, we can do this by using the keyword 'deg' (degree) in one of the function's arguements.</p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(135deg, red, yellow);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box4"></div>
        
        <p>Make sure you place the rotational number first and then deg after, but be sure not to add a space between the two. We can get really creative with this gradients, I can change the color at least three times.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: linear-gradient(220deg, red, yellow, green);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box5"></div>
        
    <hr />    
        
        <!-- repeating linear gradients -->
        <h3>Repeating Linear Gradients</h3>    
    
            <p>Let's look at some example of using repeating gradients. Repeating gradients work by setting the width of of the bar, we can set it to a small number if we want to look like stripes.</p>
          
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: repeating-linear-gradient(to bottom left,
        red, yellow 20px, green 30px);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
    
    <br />
    <em>Example:</em><br /><br />
    <div class = "box6"></div>   
        
    <p>The way repeating gradients work, is by starting with 1 color at the zero point, then waiting until a percentage or amount of pixels has passed before changing to the next color.
        
    <span class = "nl">Make sure that each color has a larger percentage or pixel amount then the one before it, otherwise the the color won't have any effect.</span></p>
        
    <hr />
        
        <!-- radial gradients -->
        <h3>Radial Gradients</h3>
        
            <p>Radial Gradients work by specifying a radius for the color to change around. Let's look at the most basic example.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: radial-gradient(circle, red, blue);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box7"></div>   
        
        <p>We can poisition the circle in different areas of our background using percentages, to mark the x and y axis. Let's say we want our circle at the top left corner, then you would use 0% 0%, and bottom right would be 100% 100%. Be sure to use the 'at' keyword when specifying the location of the circle 'circle at 20% 40%'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: radial-gradient(circle at 0% 0%, red, blue);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box8"></div>   
    
        <p>Let's try repeating linear radial gradients before moving on to the next section.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box {
        background-image: repeating-radial-gradient(circle at 100% 100%,
        red, blue 20px);
        width: 150px;
        height: 75px;
    }
    
    &lt;div class = "box">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br /><br />
    <div class = "box9"></div>   
        
        <hr />        
        <br />
        <a href = "Css21.html"> Previous Page</a>
        <span class = "next">
        <a href = "Css23.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 