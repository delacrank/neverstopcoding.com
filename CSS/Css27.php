<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>Media Queries - CSS Web Development</title>
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
<?php include('..//Includes//Left_Css.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Media Queries - CSS Web Development</h1>
        
        <h2>Media Queries</h2>
        
            <p>A responsive web design is: a website that either expands or shrinks in order to adjust to the device being used. In order to create this type of design you need to use something called a 'media query'.  A media query informs the browser the current size of the viewport. One way we do this using code is through our 'html meta tags'. Let's see an example below.</p>
                
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* The meta tags usually start after the head tag but before the title tag */</span>
    &lt;meta name="viewport" content="width=device-width"></pre>
        
        <p><span class = "nl">So, if we were to open our browser on a desktop screen which has a resolution of 1920 x 1200, and we expanded our browser to full screen then the viewport would be set to about 1920 by 1200 pixels.  Basically, resolution equals viewport. This means on a mobile device such as an ipad or an iphone, you would have to make sure that the website's layout could be viewed on a smaller resolution without the user having to zoom in or zoom out.  Maybe about 320 pixels if the screen is vertical and 480 pixels if it is flipped horizontally. One way to find out the size of your browser is at this website <a href = "http://howbigismybrowser.com/" target="_blank">Howbigismybrowser</a>.</span>
                
        <span class = "nl">This can be achieved using a percentage based layout, but it wouldn't look very pretty and the words would be extremely small. Responsive web design means that we can rearrange the positioning of some of the columns or navigational items to make it more convient for the user to view the website.</span>
        
        <span class = "nl">The way to detect the view port is by using something called a media query, let's look into some actual code.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* Use these css styles if the width is no larger than 480 pixels */</span>
    &lt;link href="css/small.css" rel="stylesheet" media="(max-width: 480px)">
    
    <span class = "comments">/* Use these css styles if the width is no smaller than 769 pixels */</span>
    &lt;link href="css/large.css" rel="stylesheet" media="(min-width: 769px)">
    
    <span class = "comments">/* Use these css styles if the width in between 481 and 769 pixels */</span>
    &lt;link href="css/medium.css" rel="stylesheet" media="(min-width:481px)
    and (max-width: 769px)"></pre>
        
        <p>Of course the catch here would be that you would need to create 3 different style sheets in order to accomodate for all those styles.  The small style would be used for mobile phones, the large style for desktop computers and tv, the medium style sheet for tablets.</p>
        
        <hr />
        
        <!-- import directives -->
        <h3>Import directives</h3>
            
            <p>Another method would be to include the media queries inside your css style sheet rather than in your html. One way we could do this, is by using an '@import' directive.</span>
        
    <span class = "nl">The code for this would look like so.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* All import directives must be added at the beginning of the style sheet */</span>
    <span class = "comments">/* Include base styles */</span>
    @import url(css/base.css)
    
    <span class = "comments">/* Use these css styles for tablets */</span>
    @import url(css/medium.css) (min-width: 481px) and (max-width:768);
    
    <span class = "comments">/* Use these css styles for mobile */</span>
    @import url(css/small.css) (max-width:480px)</pre>
    
        <hr />
        
        <!-- Embedded Media queries -->
        <h3>Embedded Media Queries</h3>
    
            <p>An embeded media query works by adding the entire style to your 'css' page, making it so that you wouldn't need multiple css files in your project folder. Let's see an example below.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    @media (min-width: 481px) and (max-width:768px) {
    
        body {
        <span class = "comments">/* styles for body */</span>
        }
        
        .sidebar {
        <span class = "comments">/* styles for sidebar */</span>
        }
        
        .main {
        <span class = "comments">/* styles for main content */</span>
        }
    
    }</pre>
    
    <p>The embedded style is convenient because you can place all your styles on one style sheet. Even though you may make changes to some of the styles, this doesn't mean that the rules from your other styles don't still apply.</p>
    
        <hr />        
        <br />
        <a href = "Css26.html"> Previous Page</a>
        <span class = "next"><a href = "Css28.html">Next Page</a></span> 
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 