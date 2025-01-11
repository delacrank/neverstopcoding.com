<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Uploading Files - PhP Programming</title>
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
    
<h1>Uploading Files - PhP Programming</h1>
    
<h2>Uploading Files</h2>    

    <p>Uploading files to the server is a way for users to store some of their own personal information on a web server. Some examples of this include sending in your tax forms to an IRS website, uploading a picture for an online dating profile or uploading a resume for a job position.
    
    <span class = "nl">We have to be very careful when working with this type of servive, because users can also upload malicious content to our server as well. Let's first look at how we would build the form in HTML before I show the script.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">&lt;!-- upload form, make sure you use enctype='multipart/form-data' --></span>
    &lt;form enctype="multipart/form-data" action="&lt;?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <span class = "comments">&lt;!-- Ensure that file doesn't exceed this size --></span>
        &lt;input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        &lt;label> Upload this file: &lt;/label> 
        <span class = "comments">&lt;!-- Make sure type is equal to file --></span>
        &lt;input name="userfile" type="file">
    &lt;input type="submit" value="Send File">
    &lt;/form></pre>
    
    <p>We are going to see the script soon, but before we do that, we must make sure that our php.ini is configured to handle uploads, switch 'file_uploads=On'. To check to see if it's on or where the file is located you can always type 'phpinfo();' and all your settings will be displayed.
        
    <span class = "nl">Now, let's takes a moment to look at the actual script.</span></p>
    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php
    
    <span class = "comments">// Check for errors first</span>
    if ($_FILES['userfile']['error'] > 0) {
        echo 'Problem';
        switch ($_FILES['userfile']['error']) {
            case 1:     echo 'File exceeded upload_max_filesize';
                        break;
            case 2:     echo 'File exceeded max_file_size';
                        break;
            case 3:     echo 'File only partially uploaded';
                        break;
            case 4:     echo 'No file uploaded';
                        break;
            case 6:     echo 'Cannot upload file: No temp directory specified.';
                        break;
            case 7:     echo 'Upload failed: Cannot write to disk';
                        break;
        }
        exit;
    }
    
    <span class = "comments">// We can check the type of file here</span>
    if ($_FILES['userfile']['type'] != 'text/plain') {
        echo 'Problem file is not plain text';
        exit;
    }
    
    <span class = "comments">// We can store the location of the file here</span>
    $upfile = '/uploads/' . $_FILES['userfile']['name'];
    
    <span class = "comments">// This is a safety measure to prevent users from accessing other files</span>
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile)) {
            echo 'Problem: Could not move file to destination directory';
            exit;
        }
    } else {
        echo 'Problem: Possible file upload attack. Filename: ';
        echo $_FILES['userfile']['name'];
        exit;
    }
    
    <span class = "comments">// Congrats we did it</span>
    echo 'File uploaded successfully&lt;br />&lt;br />';
    
    ?></pre>
    
    <p>Let's go through this code to understand what is going on.  First we should make sense of what the $_FILES array does. It is a multidimensional array, the first element will contain the name of the post value when the form was submitted, the second element will contain a value which is relevant to the file's name, error, mime type, size or temporary name.
    
    <span class = "nl">We use the second element in our array to do our error handling, additionally we can set the mime type to detect images, I'll display the code for that below.</span></p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Check to ensure that only an image with these formats is submitted</span>
    if($_FILES['userfile']['type'] != 'image/jpg' &amp;&amp; $_FILES['userfile']['type'] != 'image/png' &amp;&amp;
    $_FILES['userfile']['type'] != 'image/jpeg' &amp;&amp; $_FILES['userfile']['type'] != 'image/gif' ) {
        echo "Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.";
        exit;
    }</pre>
    
    <p>You would just replace this line with the one that checks the mime type for a text/plain type. Also, notice that the file directory was just named 'uploads', however you should put the entire path, not just the name of the directory. Notice also, that if the permissions of the directory aren't set to write then no one will be able to upload any content to that folder.
        
    <span class = "nl">A few more comments, make sure that if you want your upload form script to handle .doc types, change your mime type to 'application/msword', or 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' for docx.</span></p>
    
    
<hr />
<br />
<a href = "PhP39.php">Previous Page</a>
<!-- <span class = "next"><a href="PhP40.php">Next Page</a></span> -->
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>