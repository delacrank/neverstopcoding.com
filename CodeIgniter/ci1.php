<!DOCTYPE html>
<html>  
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn how to do web development using code igniter." />
        <meta name="keywords" content="Code Igniter" />
        <meta name="author" content="Juan Arias" />
        <title>Adding Files</title>
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

        <h1>Understanding the File Directory</h1>

            <p>So the first thing you will be encountered with after downloading and moving Code Igniter into your main directory is understanding how the directory works.

            <span class = "nl">This will also be important for adding other files such as javascript or css files. Let's start by saying that you can simply add folders to the root of your projects directory and then creating links to those files from your code igniter app.</span>
            </p>

        <hr />

        <h2>Directory Tree</h2>

            <p>Now let's take a moment to go over the directory tree and understand the purpose of some of the main folders within it.

            <span class = "nl">The main directories consist of application, system, tests and user_guide. For now we will be primarily focusing on the application directory since some of the folders container documentation ('user guide'), or tools ('system') built for the framework.</span>

            <span class = "nl">Many of these tools are extremely sophisticated and are probably difficult to understand if you do not have a good working knowledge of PhP. For the most part the tools are a working set of classes to handle encrpytion, calls to database, routing, etc.</span>

            <span class = "nl">You will notice that as we progress we will be adding classes or configuring certain files to make use of these tools. Understanding how to use and implement these tools properly will be the main point of contention in this series.</span>

            <span class = "nl">Understanding how to use a simply framework like code igniter will give you the power to master more difficult and complicated frameworks. The purpose of a framework is to allow a developer to build projects at an increased level of productivity. </span>

            <span class = "nl">Be warned that those who rush into using a framework too early will be stuck on trivial programming tasks. It is in your best interest to understand the programming language well before moving on to uses a framework which in some ways simplifies the web application, but complicates it in other ways. </span>

            <span class = "nl">Frameworks are usually built using a certain version of the language, so in a sense the purpose using the framework is dependent on whoever is maintaining it. In some situations there are also costs invovled with using frameworks (probably not with code igniter thou), so this is a fare warning.</span>
            </p>

    <hr /><br />
    <a href="ci.html">Previous Page</a>
    <span class ="next"><a href="ci2.html">Next Page</a></span>
    <br /><br />
    </div>

</body>
</html>