<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>Grids - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet">
        <link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style>
        @media (min-width: 400px) {
        .container {
        width: 85%;
        padding: 0; }
        }
        .column,
        .columns {
        width: 100%;
        float: left;
        box-sizing: border-box; }
        
        @media (min-width: 550px) {
        .container {
        width: 80%; }
        .column,
        .columns {
        margin-left: 4%; }
        .column:first-child,
        .columns:first-child {
        margin-left: 0; }

        .one.column,
        .one.columns                    { width: 4.66666666667%; }
        .two.columns                    { width: 13.3333333333%; }
        .three.columns                  { width: 22%;            }
        .four.columns                   { width: 30.6666666667%; }
        .five.columns                   { width: 39.3333333333%; }
        .six.columns                    { width: 48%;            }
        .seven.columns                  { width: 56.6666666667%; }
        .eight.columns                  { width: 65.3333333333%; }
        .nine.columns                   { width: 74.0%;          }
        .ten.columns                    { width: 82.6666666667%; }
        .eleven.columns                 { width: 91.3333333333%; }
        .twelve.columns                 { width: 100%; margin-left: 0; }
        
        .container:after,
        .row:after,
        .u-cf {
            content: "";
            display: table;
            clear: both; }
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
    
        <h1>Grids - CSS Web Development</h1>
        
        <p>Using a grid system like skeleton or bootstrap allows you to build a responsive site without worrying about media queries or adjusting float properties etc.  The way a grid system works is by writing the css code for the positioning of the elements, so you won't have to worry about mobile or desktop design first, etc.</p>
        
    <hr />
    
    <!-- skeleton grid -->
    <h2>Skeleton Grid</h2>
        
        <p>You can download the skeleton grid at <a href ="http://www.getskeleton.com/" target="_blank">Skeleton</a>. It is one of many grid systems, the most popular being bootstrap which has styles for buttons and includes javascript features like drop down menus etc.
        
        <span class = "nl">The way it works is that each div is given a style in to which rows can be configured into patterns all equalling up to the width of the screen. However some classes can specify that a column be set to a certain width, this way you can control for how many columns and rows you want in your page.</span>
        
        <span class = "nl">If the page gets smaller then those columsn increase to fill the devices viewport, so a column that would normally take only one twelfth of the distance will now fill the entire distance.</span>
        
        <span class = "nl">Perhaps it would make more sense if I showed you an example.</span>
        </p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;div class = "container">
        
        <span class = "comments">&lt;! -- two column layout --></span>
        &lt;div class = "row">
            &lt;div class = "six columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, &lt;/p>
            &lt;/div>
            
            &lt;div class = "six columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, &lt;/p>
            &lt;/div>
        &lt;/div>
        
        <span class = "comments">&lt;! -- three column layout --></span>
        &lt;div class = "row">
            &lt;div class = "four columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                &lt;/p>
            &lt;/div>
            
            &lt;div class = "four columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 &lt;/p>
            &lt;/div>
            
            &lt;div class = "four columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 &lt;/p>
            &lt;/div>
        &lt;/div>
        
        <span class = "comments">&lt;! -- four column layout --></span>
        &lt;div class = "row">
            &lt;div class = "three columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                &lt;/p>
            &lt;/div>
            
            &lt;div class = "three columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 &lt;/p>
            &lt;/div>
            
            &lt;div class = "three columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 &lt;/p>
            &lt;/div>
            
            &lt;div class = "three columns">
                &lt;p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 &lt;/p>
            &lt;/div>
        &lt;/div>
            
    &lt;/div></pre>
    <br />
        
    <em>Example:</em>
    <!-- example -->
    <div class = "container">
        
        <div class = "row">
            <div class = "six columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
            </div>
            
            <div class = "six columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
            </div>
        </div>
        
        <div class = "row">
            <div class = "four columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                </p>
            </div>
            
            <div class = "four columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 </p>
            </div>
            
            <div class = "four columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 </p>
            </div>
            
        </div>
        
        <div class = "row">
            <div class = "three columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                </p>
            </div>
            
            <div class = "three columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 </p>
            </div>
            
            <div class = "three columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 </p>
            </div>
            
            <div class = "three columns">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 </p>
            </div>
        </div>            
    </div>
        
    <br style = "clear: left"/>    
    <hr />
        
    <!-- skeleton css code -->
    <h3>Skeleton CSS code</h3>
        
        <p >Alright, so what exactly is going on here with these columns. When the screen is wide they stretch out to fill the screen and then when we shorten the screen the columns turn into a single column to fill the entire width of the screen.
        
    <span class = "nl">In order to understand how this skeleton grid works we need to look at the underlying css code which was used to format those column.</span>
        
    <span class = "nl">There is much more code to the intial file, however I am just using the aspect used to create the column widths and floats.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* adjust for mobile device */</span>
    @media (min-width: 400px) {
        .container {
        width: 85%;
        padding: 0; }
        
        <span class = "comments">/* Set float to left */</span>
        .column,
        .columns {
        width: 100%;
        float: left;
        box-sizing: border-box; }
    }
        
    <span class = "comments">/* table and desktop */</span>
    @media (min-width: 550px) {
        .container {
        width: 80%; }
  
        .column,
        .columns {
        margin-left: 4%; }
        
        .column:first-child,
        .columns:first-child {
        margin-left: 0; }

        .one.column,
        .one.columns                    { width: 4.66666666667%; }
        .two.columns                    { width: 13.3333333333%; }
        .three.columns                 { width: 22%;                        }
        .four.columns                   { width: 30.6666666667%; }
        .five.columns                    { width: 39.3333333333%; }
        .six.columns                      { width: 48%;                      }
        .seven.columns                 { width: 56.6666666667%; }
        .eight.columns                  { width: 65.3333333333%; }
        .nine.columns                   { width: 74.0%;                    }
        .ten.columns                     { width: 82.6666666667%; }
        .eleven.columns                { width: 91.3333333333%; }
        .twelve.columns                { width: 100%; margin-left: 0; }
        
        .container:after,
        .row:after,
        .u-cf {
        content: "";
        display: table;
        clear: both; }
    }</pre>

    <p>So the first few styles will always take effect along as the minimum width of the browser is 400 pixels. However, the next set of styles only take effect if the viewport has been increased to at least 550 pixels. 
        
        <span class = "nl">Only two things really change once the browsers width has increased though. The width setting and the clear affect for the floated div elements. That style 'container:after, row:after' at the bottom is necesarily to ensure that future divs don't try to wrap around to the right side of the other elements.</span>
        
        <span class = "nl">Well that's the premise of using a grid system, of course a site created like this would like very generic, but you would be surprised how many sites created use these grid systems or css frameworks like bootstrap to do the grunt of the layout and ensure that the design is responsive.</span></p>
        
        <hr />        
        <br />
        <a href = "Css27.html"> Previous Page</a>
        <span class = "next"><a href = "Css29.html">Next Page</a></span> 
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 