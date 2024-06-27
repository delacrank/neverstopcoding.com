<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>Transformations  - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style>
        
    div.box {
        width: 150px;
        height: 75px;
        background: grey;
    }    
        
    div.rotate:hover {
        transform: rotate(180deg);
    }
    
    div.scale:hover {
        transform: scale(2);
    }
    
    div.translate:hover {
        transform: translate(50px, 0);
    }
    
    div.skew:hover {
        transform: skew(45deg, 0);
    }    
        
    div.rotatescale:hover {
        transform: rotate(240deg) scale(2);
    }
        
    div.origin:hover {
        transform-origin: top left;
        transform: rotate(-45deg);
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
    
        <h1>Transformations  - CSS Web Development</h1>
        
        <h2>CSS Transforms</h2>
        
            <p>In this section we are going to learn about how to transform elements using various csses rules/styles.</p>
        
        <hr />
        
        <!-- Transforms -->
        <h3>Transforms</h3>
        
            <p>CSS transformations revolve around 1 of 4 types: rotate, scale, translate, and skew. We will look into examples for each of these but first let's start with an explanation of what each one does. 
        
    <span class = "nl">Rotate just simply rotates the object to either the left or right while keeping it in place. The value for rotate is ('x'deg) where x is equal the amount of degrees you want to rotate the element by.</span>
        
    <span class = "nl">Scale stands for expanding or decressing the size of the element. The value of scale can be measured in numbers x,y, where changing the scale of the object can increase or decress its x or y axis, or both of them.</span>   
                
    <span class="nl">Translate simply moves the element from one location to another. It doesn't move other elements around it, it will simply overlap another element if it is in it's ending location.  The value for translate is (x,y) where is is the element's movement along the 'x' axis and y is the elements movement along the 'y' axis.</span>
                
    <span class="nl">Skew alters the look of the element. Similar to rotate and scale, although it changes the way the object looks on a 'z' plane, meaning the object can be flipped forward backward or sideways as if it were in a space of 3 dimensions.</span>
        
    <span class = "nl">Let's start by looking at some examples of the Rotate style.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    div.box {
        width: 150px;
        height: 75px;
        background: grey;
    }
    
    div.rotate:hover {
        transform: rotate(180deg);
    }
    
    &lt;div class = "box rotate"> Rotate &lt;div></pre>
        
    <br />
    <em>Example:</em><br />
    <div class = "box rotate">Rotate</div>
        
    <p>Now, let's try the scale transform rule.</p>    
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    div.scale:hover {
        transform: scale(2);
    }
    
    &lt;div class = "box scale">&lt;div></pre>
        
    <br />
    <em>Example:</em><br />
    <div class = "box scale"></div>
        
    <p>Alright, now let's try to the translate rule.</p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    div.translate:hover {
        transform: translate(50px, 0);
    }
    
    &lt;div class = "box translate">&lt;div></pre>
        
    <br />
    <em>Example:</em><br />
    <div class = "box translate"></div>
        
    <p>Be careful when applying the hover rule to translate. This is because since the element has shifted its position, the mouse isn't actively hovering over the element.
        
    <span class = "nl">Finally let's look a the skew style.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    div.skew:hover {
        transform: skew(45deg, 0);
    }
    
    &lt;div class = "box skew">&lt;div></pre>
         
    <br />
    <em>Example:</em><br />
    <div class = "box skew"></div>
        
    <p>If I skew the element along the 'x' axis then it will rotate from left to right until it is backwards. If I skew the element along the 'y' axis then it will rotate from top to bottom until it is upside down and backwards.</p>   
        
    <hr />    
        
    <!-- combining transforms -->    
    <h3>Combining Transforms</h3>
        
        <p>We can combine multiple transform elements by adding multiple styles or rules to one element. It can be a variety of rules, although some will naturally work better together.  Let's see an example of rotate and scale.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.box:hover {
        transform: rotate(240deg) scale(2);
    }
    
    &lt;div class = "box rotatescale">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br />
    <div class = "box rotatescale">Rotatescale</div>
        
        <p>The rule with multiple transforms is to keep them on the same line.</p>
        
    <hr />    
        
    <!-- transform-origin -->
    <h3>Transform-origin</h3>
        
        <p>The last rule before we move on will be the 'transform-origin' rule. This rule simply applies to the origin of the rotation, we can modify the point of origin to alter how our element will rotate.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    div.origin:hover {
        transform-origin: top left; 
        transform: rotate(-45deg);
    }
    
    &lt;div class = "box origin">&lt;/div></pre>
        
    <br />
    <em>Example:</em><br />
    <div class = "box origin">origin</div>    
        
        <p>The origin on the element can be choosen using x and y coordinates as pixels or percentages or just words as in the example above. The words being limited to top, bottom, left, right and center.</p>
        
        <hr />        
        <br />
        <a href = "Css22.html"> Previous Page</a>
        <span class = "next">
        <a href = "Css24.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 