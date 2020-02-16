<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>Sass Part 2 - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet">
        <link rel="stylesheet"
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
    
        <h1>Sass Part 2</h1>
        
        <!-- Nesting Selectors -->
        <h2>Nesting Selectors</h2>
        
            <p>In this section we are going to talk about how you can use sass to created nested selectors. This means that instead of using the same ancestor name over and over to specify a child selector. You could place several child selectors under the parent selectors bracket, and sass would nest the children for you.
        
        <span class = "nl">Let's see an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    nav {
        padding-top: .15em;
        padding-right: 6px;
        
        li {
            display: block;
            list-style-type: none;   
        }
        
        a {
            font-family: 'Cormorant Infant'; 
        }
    }   </pre><br />
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* generated css  */</span>
    nav {
        padding-top: .15em;
        padding-right: 6px;
    }
    nav li {
        display: block;
        list-style-type: none;   
    }
    nav a {
        font-family: 'Cormorant Infant'; 
    } </pre>
        
        <p>So, instead of typing in nav over and over I can type it once and place the children of that selector within its brackets. I could create another nested selected within these children and the rule would still apply, of course reading code written like that would be confusing.</p>
        
    <hr />    
        
    <!-- referencing the parent selector -->
    <h3>Referencing the parent Selector</h3>
            
        <p>This is a rule which is used when trying to create nested selectors without the space. The nested selector automatically places a space between its parent and child, however what would we do if we want those selectors to be joined without the space.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    a {
        color: blue;
        &amp;:hover {
            color: green;
        }
    }</pre><br />
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* generated css  */</span>
    a {
        color: blue;
    }
    
    a:hover {
        color: green;
    }</pre>
        
        <p>Using the ampersand removes the space, this can be used for link, active, visted, first-line, focus and other pseudo selectors. This feature can be used for class names, etc. it doesn't apply to just psuedo selectors, it applies to any name needed to be joined to another name without a space inbetweem. </p>
        
    <hr />    
        
    <!-- Extending Properties -->
    <h3>Extending Properties</h3>
        
        <p>Let's say you want create multiple styles that all share the same properties. Maybe you have multiple headings that all use the same font-family and color, but the other headings have other properties that the first one doesn't use. Then you could just the '@extend' directive to add those styles.
        
    <span class ="nl">The extend directive works by adding all the properties under one selector. Let's see an example of this below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    h1 {
        font-family: Arial;
        color: blue;
    }
    
    h2 {
        @extend h1;
        font-size: -.5em;
    }
    
    h3 {
        @extend h1;
        font-size: -.7em;
    }</pre><br />
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* css generated code */</span>
    h1, h2, h3 {
        font-family: Arial;
        color: blue;
    }
    
    h2 {
        font-size: -.5em;
    }
    
    h3 {
        font-size: -.7em;
    }</pre>
        
        <p>Let's say you just wanted to extend certain properties without extending the rule for a selector, we can use a placeholder for this. The place holder works by creating a made up selector and putting a percent sign in front of it '%placeholder'. We can then proceed to extending just that place holder instead of a selector.
        
        <span class = "nl">The purpose of using a place holder is to prevent a nested selector to extend unwanted properties.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    %header {
        font-family: Arial;
        color: blue;
    }
    
    h2 {
        @extend %header;
        font-size: -.5em;
    }
    
    h3 {
        @extend %header;
        font-size: -.7em;
    }</pre><br />
        
    <hr />
        
    <!-- Mixins -->    
    <h3>Mixins</h3>
        
        <p>Mixins work similar to placeholders, only mixins allow values to be inserted into the values so they work closer to a function in that respect. Let's look at simple example of a mixin. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    @mixin color-size {
        font-size: 10px;
        color: red;
    }    
    
    p {
        @include color-size;
    }</pre>
        
        <p>Let's say you wanted to add a mixin that could alter the value of a style you used like deg in the transform rotation. Then you would need to pass that parameter into the mixin as well '@mixin rotate($deg) { transform: rotate($deg); }'.
        
        <span class = "nl">Then when you used the mixin, you could just subtitute that dollar sign variable with a number. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    @mixin rotate($deg) {
        transform: rotate($deg);
    }    
    
    .container {
        @include rotate(7);
    }</pre><br />
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* css generated */</span>    
    .container {
        transform: rotate(7);
    }</pre>
        
        <p>However, there is a problem our transform property requires that we put the word deg after we place our number seven, but we can't do this without adding a space. So we would have to use a number and a string in order to accomplish this. 
        
        <span class = "nl">If we use the pound sign then the variable inside brackets then we can designate which value is a number and what to leave as a string.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* sass version */</span>
    @mixin rotate($deg) {
        transform: rotate(#{$deg}deg);
    }    
    
    .container {
        @include rotate(7);
    }</pre><br />
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">/* css generated */</span>    
    .container {
        transform: rotate(7deg);
    }</pre>
        
        <hr />        
        <br />
        <a href = "Css31.html"> Previous Page</a>
   <br /> <br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 