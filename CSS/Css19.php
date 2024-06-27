<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />   
        <title>Formating Text - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
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
    
        <h1>Formating Text - CSS Web Development</h1>
        
        <h2>Formating Text</h2>
        
            <p>In this section we are going to learn how to format our text. This means that we are going to learn how to download fonts and apply them to our html.  There is also the option of using link which downloads the font from a website instead of hosting it directly from your server. Although the second option runs the risk of taking up time depending on that servers performance.</p>
                
        <hr />
        
        <!-- google fonts -->
        <h3>Google fonts</h3>
        
    <p>Let's take a look at the simpler option first which includes using google fonts. The way to do this is by first viewing different fonts from the <a href="https://fonts.google.com/" target ="_blank">Google Fonts</a> website. From here you just copy the link 'http://fonts.googleapis.com/css?family=font+name' and place it instead a link tag inside the 'head' tag part of your html file.
        
    <span class = "nl">Be sure to replace the 'font+name' with the actual name of the font. Let's look at an example of what this would look like.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">&lt;!-- make sure this is inside the 'head' tag --></span>
    <span class = "comments">&lt;!-- The plus sign is only a substitute for the space character --></span>
    &lt;link href='http://fonts.googleapis.com/css?family=
    <span class = "red">font+name</span>' rel="stylesheet"></pre>
        
    <p>It's as simple as that, then make sure to add the font name to your 'css' section, whether it be infile or using an external css file sheet.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    p {
        font-family: <span class = "red">'font name'</span>;
    } </pre>
        
    <p>Let's look at downloading a google font with multiple font weights or italics, and then we can also see how to use the 'import option'.
        
    <span class = "nl">If i want to download a font with multiple thicknesses, then I can add the weights I want to the link itself. If I want to add italics, then I just add the word italic to the link, let's see an exmaple of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;link href="http://fonts.googleapis.com/css?
    family=font+name:<span class = "red">300, 400, 300italic, 400italic</span>" rel="stylesheet" type="text/css"></pre>
        
        <p>This would enable you to change the font weight to either 300, or 400 or to pick the font as italics with these weights. </p>
        
    <hr />
        
    <!-- font face -->
    <h3>Font Face</h3>
        
        <p>There is another way to use fonts, that is by using something called '@font face'.  The font face works by encoding a font you downloaded from the web into any name, and then by applying this name to your css you can render that font.
        
    <span class = "nl">There is a catch thou, only certain browsers can render certain types of font formats. Let's look at some of those formats below.</span></p>
        
    <ul id ="li">
        <li><b>EOT (.eot) :</b> Embedded OpenType fonts, works only on internet explorer.</li> 
        <li><b>TTF (.ttf) &amp; OT (.otf) :</b> Truetype font and opentype fonts, these are really common formats for computer fonts, most web browsers can render these font formats.</li>
        <li><b>WOFF (.woff) :</b> Web font formats, were designed for the web browsers. These include IE9, firefox, chrome, Safari, IOS, Andriod, etc.</li>
    </ul>
        
        <p>Let's say you download one of these fonts and need to convert the format so that different browsers can render it. There is a tool which can do this for you on a website called <a href="https://www.fontsquirrel.com/tools/webfont-generator" target="_blank">Font Squirrel</a>, just upload your font in the generator and viola, you have the woff you need.
        
    <span class = "nl">Once you have actually downloaded the font and uploaded it to your folder, you have know how to access it through your 'css'. In order to do this we need to use the '@font face { }', style. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">/* The font family name is arbitary */</span>
    
    @font face {
        font-family: "font name";
        <span class="comments">/* Make sure there is no space between format and parantheses */</span>
        src: url('font-name.woff') format('woff');
    }
    
    p { 
        font-family: "font name";
    }</pre>
        
        <p>Of course if you wanted to include support for other browsers than you could add more formatting options, below. Also, you should change the directory if you have a 'fonts' folder for storing multiple fonts. There is also an option for including font styles like bold, italics, etc.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">/* The font for format multiple browsers */</span>
    
    @font face {
        font-family: "font name";
        src: url('fonts/font-name.eot') format('eot');
        src: url('fonts/font-name.woff') format('woff');
        src: url('fonts/font-name.woff2') format('woff2');
        src: url('fonts/font-name.ttf') format('truetype');
        src: url('fonts/font-name.svg') format('svg');
    }
    
    p { 
        font-family: "font name";
    }</pre>
        
        <p>Most of the time, you will only need to use 'woff', 'woff2' and 'eot'. Let's see how we can use the font formatting to include different styles, if the downloaded font comes with those options.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">/* The font for format multiple styles */</span>
    
    @font face {
        font-family: "font name";
        src: url('fonts/font-name-Regular.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }
    
    @font face {
        font-family: "font name";
        src: url('fonts/font-name-Italic.woff') format('woff');
        font-weight: normal;
        font-style: italic;
    }
    
    @font face {
        font-family: "font name";
        src: url('fonts/font-name-Bold.woff') format('woff');
        font-weight: bold;
        font-style: normal;
    }
    
    @font face {
        font-family: "font name";
        src: url('fonts/font-name-BoldItalic.woff') format('woff');
        font-weight: bold;
        font-style: italic;
    }
    
    <span class = "comments">/* We can now add bold or italic styles */</span>
    p { 
        font-family: "font name";
        font-weight: bold;
        font-style: italic;
    }</pre>
        
        <p>You can even use the strong or em (emphasize) tags to change the format of words in your new font.</p>
        
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