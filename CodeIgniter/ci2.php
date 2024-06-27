<!DOCTYPE html>
<html>  
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn how to do web development using code igniter." />
        <meta name="keywords" content="Code Igniter" />
        <meta name="author" content="Juan Arias" />
        <title>Understanding MVC</title>
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
    
<!-- Left -->
<?php include('..//Includes//Left_Ci.php'); ?>

    <!-- Right -->
    <div id ="rightz">

        <h1>Understanding MVC</h1>

            <p>Let's take a moment to understand what a MVC architecture is. MVC stands for model view controller. Typically with this design pattern the idea is to have models access the database, this can be a sort of business layer which deals primarily with SQL queries and your server side language.</p>

        <hr />

        <h2>Model View Contrller</h2>

            <p>The controller often deals with the logic for the moving around the application. Typcially if there is routing involved like having a user login first before they are able to perform certain actions, then this is handled through the controller.

            <span class = "nl">Models and controllers usually talk to each other, a controller sometimes needs to input data from a view into a controller or retreive information from a database to render to a view, so in many ways a controller acts like the middle man.</span>

            <span class = "nl">Views are the last piece of the MVC design pattern and they are responsible for handling how the application looks. Typcially a developer will add a form, or links, to a view. Images and other UI mechanisms are also handled in the view. Say for example if the developer wanted to add a slide show or a rollerover in their app, then it would be done in a view. </span>

            <span class = "nl">The controller is often responsible for determine which view is accessed. So multiple views can be assigned to a single controller, where the controller acts like a template system. </span>
            </p>

        <hr />

        <h2>Static Site</h2>

            <p>As a first project let's see if we can create a static website. One of the first things we will need to do in code igniter is create a template for our header and footer.

            <span class = "nl">Going forward most if not all the code will be added to the application directory of our code igniter folder. If you open application/views and create a directory called template. Then add two php files to this directory one called header and another called footer.</span>
            </p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// header</span>
    &lt;!DOCTYPE html>
    &lt;head>
        &lt;title> title &lt;/title>
        &lt;meta charset="utf-8">
        &lt;meta name="viewport" content="width=device-width, initial-scale=1">
        &lt;link rel="stylesheet" href="&lt;?= base_url(); ?>css/bootstrap.min.css" />
        &lt;link rel="stylesheet" href="&lt;?= base_url(); ?>css/style.css" />
    &lt;/head>
    &lt;body>

    &lt;div class = "container"></pre>

    <p>I've decided to add the bootstrap css framework and a custom stylesheet. I will also add js files to my footer.</p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// footer</span>
    &lt;/div>
        &lt;div class = "container">
            &lt;a href="&lt;?= site_url(''); ?>">Home&lt;/a>
            &lt;a href="&lt;?= site_url(''); ?>">About&lt;/a>
            &lt;a href="&lt;?= site_url(''); ?>">etc.&lt;/a>
            &lt;em>footer &copy 2019&lt;/em>
        &lt;/div>
    &lt;/div>
    &lt;script src="&lt;?= base_url(); ?>js/jquery-3.31.min.js">&lt;/script>
    &lt;script src="&lt;?= base_url(); ?>js/popper.min.js">&lt;/script>
    &lt;script src="&lt;?= base_url(); ?>js/bootstrap.min.js">&lt;/script>
    &lt;/body>
    &lt;/html></pre>

    <p>I haven't added any links, however using the base_url() function and site_url() function allows us to find the correct directory for the file we want to link to. My css and js files are stored in a css and js folders so thats why I included those names in the links.

    <span class ="nl">In the next section we will build our first controller.</span></p>

    <hr /><br />
    <a href="ci1.php">Previous Page</a>
    <span class ="next"><a href="ci3.php">Next Page</a></span>
    <br /><br />
    </div>

</body>
</html>