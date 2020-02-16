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
        
            <p>Uploading files is a good way for users to add images to a website in case they want to provide a picture for their avatar or share a file to another user.  However, there are risks invovled with allowing users to upload content onto your or your hosts server.  This invovles users who would upload malicious content like php scripts, or other malware.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">        
    &lt;?php # Script upload image
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['upload'])) {
                $allowed = array ('image/pjpeg', 'image/jpge', 'image/JPG', 
                'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
            
                if (in_array($_FILES['upload']['type'], $allowed)) {
                    if (move_uploaded_file($_FILES['upload']['tmp_name'],
                    "uploads/{$_FILES['upload']['name']}")) {
                        echo '&lt;p>&lt;em>The file has been uploaded!&lt;/em>&lt;/p>';
                    } 
                } else {
                    echo '&lt;p>Please upload a JPEG or PNG image.&lt;/p>';
                }
            }
        
            if ($_FILES['upload']['error'] > 0) {
                echo '&lt;p>The file could not be uploaded because:';
            
                switch ($_FILES['upload']['error']) {
                    case 1:
                        print 'The file exceeds the upload size file setting for php.ini config.';
                        break;
                    case 2:
                        print 'The file exceeds the max size for html form.';
                        break;                
                    case 3:
                        print 'The file was only partially uploaded.';
                        break;
                    case 4:
                        print 'No file was uploaded.';
                        break;
                    case 6:
                        print 'The folder was unavailable.';
                        break;
                    case 7:
                        print 'Unable to write to disk.';
                        break;
                    case 8:
                        print 'File upload stopped.';
                        break;
                    default:
                        print 'A system error occured.';
                        break;
                } 
                print '&lt;/p>';
            } 
            
            if (file_exists ($_FILES['upload']['tmp_name'])
            &amp;&amp; is_file($_FILES['upload']['tmp_name']) ) {
                unlink ($_FILES['upload']['tmp_name']);
            }
        } 
    &#63;>
        
    &lt;form enctype="multipart/form-data" action="upload_image.php" method="post">
        &lt;input type="hidden" name="MAX_FILE_SIZE" value="524288" />
        &lt;fieldset>&lt;legend>Select a JPEG or PNG image of 512KB
    or smaller to be uploaded:&lt;/legend>
            &lt;p> File: &lt;input type="file" name="upload" /> &lt;/p>
        &lt;/fieldset>
        &lt;input type="submit" name="submit" value="Submit" />
    &lt;/form> </pre>    
        
   <?php # Script upload image
    /*     
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        if (isset($_FILES['PhP29'])) {
        
            $allowed = array ('image/pjpeg', 'image/jpge', 'image/JPG', 
            'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
            
            if (in_array($_FILES['PhP29']['type'], $allowed)) {
                if (move_uploaded_file($_FILES['PhP29']['tmp_name'],
                "uploads/{$_FILES['PhP29']['name']}")) {
                    echo '<p><em>The file has been uploaded!</em></p>';
                } // End if 
            } else {
                echo '<p>Please upload a JPEG or PNG image.</p>';
            }
        } // End isset($_FILES)
        
        if ($_FILES['PhP29']['error'] > 0) {
            echo '<p>The file could not be uploaded because:';
            
            switch ($_FILES['PhP29']['error']) {
                case 1:
                    print 'The file exceeds the upload size file setting for php.ini config.';
                    break;
                case 2:
                    print 'The file exceeds the max size for html form.';
                    break;                
                case 3:
                    print 'The file was only partially uploaded.';
                    break;
                case 4:
                    print 'No file was uploaded.';
                    break;
                case 6:
                    print 'The folder was unavailable.';
                    break;
                case 7:
                    print 'Unable to write to disk.';
                case 8:
                    print 'File upload stopped.';
                    break;
                default:
                    print 'A system error occured.';
                    break;
                } // End of switch
                print '</p>';
            } // End error if
            
            if (file_exists ($_FILES['PhP29']['tmp_name'])
            && is_file($_FILES['PhP29']['tmp_name']) ) {
                unlink ($_FILES['PhP29']['tmp_name']);
            }
        } // End of submitted conditional */
        ?>
        
    <!--  <form enctype="multipart/form-data" action="PhP29.html" method="post">
        
        <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
        
        <fieldset><legend>Select a JPEG or PNG image of 512KB
        or smaller to be uploaded:</legend>
        
        <p> File: <input type="file" name="PhP29" /> </p>
        
        </fieldset>
        <input type="submit" name="submit" value="Submit" />
    </form> -->
       <hr />
        
        <h3>Understanding the Code</h3>
        
        <p> We are already familiar with the first section of the code, it checks to see if any request method is equal to the value of post before starting the script.
            
    <span class = "nl">The next section deals with creating an array of acceptable file types and extensions.  Notice how the arrays contains values which hold the  type of file as well as the extension.</span>
                
    <span class = "nl">Next we use a function called 'in_array()' which will check for our $_FILES['upload'] value against the file type and the values contained in our $allowed array.  If that value is true then it will check for another function 'move_uploaded_file()' to see if our file is located in the designated directory/folder.</span>
                
    <span class = "nl">Following these 'if statements' we created another if statement for debugging purposes 'if ($_FILES['upload']['error'] > 0)'.  A switch statement will display explantaions based on errors generated through the $_FILES['error'] array for why the file could not be uploaded.</span>
                
    <span class = "nl">In our final section we have another if statement which deletes the file if it is stored in a temporary location by checking the file's name against whether or not it is a file.  If both are true then we can delete this temporary file which has not been moved to the correct folder.</span>
                
    <span class = "nl">Finally, we have our html form. There are several attributes to the first tag enctype (encoding type), action (where to submit this data) method.  We also use our hidden value which contains the value of how large the file can be.  Last we have the input type which is a file along with its name (which should correspond to the name given to the value located within the '$_FILES['filename']' variable.</span> </p>
        
    <hr />        
    <br />
    <a href = "PhP28.html"> Previous Page</a>
    <span class = "next">
    <a href = "PhP30.html">Next Page</a></span>
    <br />
    <br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 