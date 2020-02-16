<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>PhP &amp; Javascript - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>PhP &amp; Javascript - PhP Programming</h1>
        
        <h2>PhP &amp; Javascript</h2>
        
            <p>In earlier sections of this tuturiol I spoke of how we could dynamically generate html.  Now, we will learn how to generate javascript in the same fashion.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    <span class="comments">// Create our javascript function .js file</span>
    <span class="comments">// Create a function which will display our window size</span>
    function create_window (image, width, height) {
        width = width + 10;
        height = height + 10;
        
        <span class="comments">// If the window is present resize it</span>
        if (window.popup &amp;&amp; !window.popup.closed) {
            window.popup.resizeTo(width, height);
        }
            
        <span class="comments">// set the size equal to our paramters</span>
        var specs = "location=no, scrollbars=no, menubars=no, toolbars=no,
        resizeable=yes, left=0, top=0, width=" + width + ", height=" + height;
        
        <span class="comments">// set the value for our url via get method</span>
        var url = "show_image?image=" + image;
        
        <span class="comments">// store the function in a variable</span>
        popup = window.open(url, "ImageWindow", specs);
        
        <span class="comments">// open our window using the focus function</span>
        popup.focus();
    }</pre>
    <br />
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # script images
        <span class="comments">// Create a php script for displaying our image files in a linked list</span>
        <span class="comments">// Include our javascript file for creating popup windows for each link</span>
        echo '&lt;script type="text/javascript" src="function.js">&lt;/script>';
        <span class="comments">// Store the directory in a variable</span>
        $dir = 'uploads';
    
        <span class="comments">// Scan the directory and store the contents in another variable</span>
        $files = scandir($dir);
    
        <span class="comments">// Use a for loop to display the contents</span>
        foreach ($files as $image) {
        <span class="comments">// Hide hidden files/folders which begin with a period</span>
            if (substr($image, 0, 1) != '.') {
                <span class="comments">// Store the size of the image for our js window</span>
                $image_size = getimagesize("$dir/$image");
                <span class="comments">// Encode the name to prevent codes for spacing like %20</span>
                $image_name = urlencode($image);
                <span class="comments">// Create the link and use javascript to call the function we created earlier</span>
                echo "&lt;li>&lt;a href=\"javascript: create_window('$image_name',
                $image_size[0], $image_size[1])\">
                <span class="comments">// display the name of the image file</span>
                $image&lt;/a>&lt;li>\n";
            } 
        }
    &#63;></pre>
    <br />
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php #script 11.5 show_image.php
        <span class="comments">// Use this variable for our http header</span>
        $name = FALSE;
        <span class="comments">// Store the value for our image using the get method</span>
        if (isset($_GET['image'])) {
            <span class="comments">// store the last 4 characters of the images extension</span>
            $ext = strtolower ( substr ($_GET['image'], -4));
            <span class="comments">// If the files extension is a jpg, jpeg or png store it in this variable</span>
            if (($ext == '.jpg') OR ($ext == 'jpeg') OR ($ext == '.png')) {
                $image = "uploads/{$_GET['image']}";
                <span class="comments">// if the file is in this directory then store the value</span>
                if (file_exists ($image) &amp;&amp; (is_file($image))) {
                    $name = $_GET['image'];
                }
            }
        }
    
        <span class="comments">// If we could not store the image file in our variable then display it as unavailable</span>
        if (!$name) {
            $image = 'images/unavaileable.png';
            $name = 'unavailable.png';
        }
    
        <span class="comments">// Store the image size in this variable</span>
        $info = getimagesize($image);
        <span class="comments">// Store the file size in this variable</span>
        $fs = filesize($image);
        <span class="comments">// Send the type of file to the browser</span>
        header ("Content-Type: {$info('mime']}\n");
        <span class="comments">// Send the name of the file</span>
        header ("Content-Dispostion: inline;
        filename=\"$name\"\n");
        <span class="comments">// Send the size of the file</span>
        header ("Content-Lenght: $fs\n");
        <span class="comments">// Read the file from our server and send it to our browser</span>
        readfile ($image);
    ?></pre>

         <?php # script images
    /*    
    echo '<script type="text/javascript" src="function.js"></script>';
    
    $dir = 'uploads';
    
    $files = scandir($dir);
    
    foreach ($files as $image) {
        if (substr($image, 0, 1) != '.') {
            $image_size = getimagesize("$dir/$image");
            
            $image_name = urlencode($image);
            
            echo "<li><a href=\"javascript: create_window('$image_name', 
            $image_size[0], $image_size[1])\">
            $image</a><li>\n";
        } // End if
    } // End foreach loop */
    ?>
    <hr />
        
        <h3>Understanding the Code</h3>
        
        <p>This code is broken into three pages, two php scripts and one java script. Let's start by understanding the javascript page.
            
    <span class = "nl"><b style="color: blue">Javascript:</b> We create a function called 'create_window()' and we set the parameters for this function to image, width and height.  The width and height will contain css values for how tall and wide the image will be in the new window.  The image parameter will contain the image file.</span>
        
    <span class = "nl">Next we create an if statement, this condition will determine what the window size should be adjusted to if it has been selected to popup and if it is not closed.</span>
        
    <span class = "nl">The specs variable will be used to determine further information pertaining to the window, we set it to be resizable as well as the initial width and height of the window.  Additionally, we set the url variable equal to the php script will contain the location and name of the file to be displayed within the window.</span>
        
    <span class = "nl">Finally, we set the popup variable equal to window.open function along with the url required, the title of the window and the specifications for its size.</span>
        
    <span class = "nl"><b style="color: red">PhP List:</b> The next script will contain an array which will store the location to the directory of the images and urls for each image.</span>
        
    <span class = "nl">For this script we need to enable our javascript function.  In order to do this we can generate the html for the correct javascript file by using the echo function.</span>
        
    <span class = "nl">Next, we create a variable will contains the name of the directory and we use the 'scandir' function to store all the files located within this directory.</span>
        
    <span class = "nl">To display these files we will create a for each loop which will go through this $files array and then proceed to create a list item link for every image, its name and store its size for our javascript window.</span>
        
    <span class = "nl"><b style="color: green">PhP Header:</b> Our last script focuses sending the correct files to be displayed in our browser.  Using the php header function we can take files from our server and send them to the browser as long as we know the file name, its size and file type.</span>
        
    <span class = "nl">We can check for the file type by using an if condition to match against the last four characters of our file name (its extension).  Once we have validated that the extension is correct we want to ensure that the file exists in the correct folder.</span>
        
    <span class = "nl">If our program has succeeded in those steps and can store the value for our file in a variable then we can using some more php functions to obtain our file size and the image size.</span>
        
        <span class = "nl">Once we have that information we can finish by using our headers to send the file from our server to the clients browser and by using the Get method we can send that value to our other script with the link lists.</span>
        
        <span class = "nl">The purpose of using this method is to protect our server by using a proxy script to retreive are files from another directory.  This way users cannot gain access to important information such as code like this '$image = "uploads/{$_GET['image']}";' the name of a directory on our server.</span>
        </p>
        
        <hr />        
        <br />
        <a href = "PhP29.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP31.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 