<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>Flex Box Part 2 - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet">
        <link rel="stylesheet"
              type="text/css"
              href="../testcss.css">    
    </head>
    <style>
        .container {
            display: flex;
            height: 100px;
        }
        
        .container div {
            margin: 0 4px 4px 0;
            background-color: aqua;
        }
    
        .container .div {
            width: 120px;
        }
            
    .div1 {
        flex-grow: 1;
        flex-shrink: 1; 
        flex-basis: 70px;
    }
    
    .div2 {
        flex-grow: 1;
        flex-shrink: 1;
        flex-basis: 70px;
    }
    
    .div3 {
        flex-grow: 3;
        flex-shrink: 1;
        flex-basis: 70px;
    }
        
    .div4 {
        flex: 1 1 50%;
    }
    
    .div5 {
        flex: 1 1 50%;
    }
    
    .div6 {
        flex: 1 3 50%;
    }
    </style>
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
    
        <h1>Flex Box Part 2- CSS Web Development</h1>
        
        <!-- align-self -->
        <h2>Align-self</h2>
        
            <p>Align self works just like align items only it can be used to set the alignment of each individual div element. Let's see an example of this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .container {
        display: flex;
        height: 100px;
    }
    
    .container div {
        width: 120;
        margin: 0 4px 4px 0;
        background-color: aqua;
    }
    
     &lt;div class = "container">
        &lt;div style = "align-self: flex-start"> one &lt;/div>
        &lt;div style = "align-self: flex-end"> two &lt;/div>
        &lt;div style = "align-self: center"> three &lt;/div>
        &lt;div style = "align-self: stretch"> four &lt;/div>
    &lt;/div> </pre>  
    <br />
        
    <em>Example:</em><br /><br />
    <div class = "container">
        <div class = "div" style = "align-self: flex-start"> one </div>
        <div class = "div" style = "align-self: flex-end"> two </div>
        <div class = "div" style = "align-self: center"> three </div>
        <div class = "div" style = "align-self: stretch"> four </div>
    </div> 
    <br />
    <hr />
        
    <!-- using margins -->
    <h3>Flex Grow &amp; Flex Shrink</h3>
        
        <p>The interesting thing about using flex box is the boxes ability to either grow or shrink depending on the value set to that property. The flex property can be broken into three seperate properties flex-grow, flex-shrink and width. The first property determines how much the box can grow by the second determines how much the box can shrink and the last determines the width of the box.
        
    <span class = "nl">Let's look at an example using the long notation.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .container {
        display: flex;
    }
    
    .container div {
        margin: 0 4px 4px 0;
        background-color: aqua;
    }
    
    .container .div1 {
        flex-grow: 1;
        flex-shrink: 1;
        flex-basis: 70px;
    }
    
    .container .div2 {
        flex-grow: 1;
        flex-shrink: 1;
        flex-basis: 70px;
    }
    
    .container .div3 {
        flex-grow: 3;
        flex-shrink: 1;
        flex-basis: 70px;
    }
    
     &lt;div class = "container">
        &lt;div class = "div1"> one &lt;/div>
        &lt;div class = "div2"> two &lt;/div>
        &lt;div class = "div3"> three &lt;/div>
    &lt;/div> </pre>  
    <br />
        
    <em>Example:</em><br /><br />
      <div class = "container">
        <div class = "div1"> one </div>
        <div class = "div2"> two </div>
        <div class = "div3"> three </div>
    </div>
        
        <p>Each flex element has 3 property values flex-grow, flex-shrink and flex-basis. They will each take as much space as necessary, which is flex basis width set at 70 pixels. Then each flex box will try to fill up the remaining white space, but since my flex-grow on the third element is set to 3, it will try to occupy three times as much space as the first and second elements.
        
        <span class = "nl">Let's use the short notation now and try to make one give one element a greater shrink value.</span></p>
        
        <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .container {
        display: flex;
    }
    
    .container div {
        margin: 0 4px 4px 0;
        background-color: aqua;
    }
    
    .container .div1 {
        flex: 1 &nbsp;1 &nbsp;50%;
    }
    
    .container .div2 {
        flex: 1 &nbsp;1 &nbsp;50%;
    }
    
    .container .div3 {
        flex: 1 &nbsp;3 &nbsp;50%;
    }
    
     &lt;div class = "container">
        &lt;div class = "div1"> one &lt;/div>
        &lt;div class = "div2"> two &lt;/div>
        &lt;div class = "div3"> three &lt;/div>
    &lt;/div> </pre>  
    <br />
        
    <em>Example:</em><br /><br />
      <div class = "container">
        <div class = "div4"> one </div>
        <div class = "div5"> two </div>
        <div class = "div6"> three </div>
    </div>
        
        <p>Notice how I increased the flex basis to 50% width this time. This is because the container we are dealing with is probably 700 pixels wide more if I expand the browser, so if each element was set at 70 pixels then there would be so much white space remaining that the third div element would never be forced to shrink. 
        
        <span class = "nl">This is the main difference between shrink and grow, when there is more white space available the flex-grow value will always try to meet the demands of that available white space. However, the opposite is true of flex-shrink, when there is less white space available then the flex-shrink value will kick in to provide space for the other elements.</span></p>
        
        
    
        <hr />        
        <br />
        <a href = "Css29.html"> Previous Page</a>
        <span class = "next"><a href = "Css31.html">Next Page</a></span> 
    <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 