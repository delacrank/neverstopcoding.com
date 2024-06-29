<?php
    include_once('Include_function.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(isset($_SESSION['valid_user'])) {

    // Store post values for title, poster and message
    $title = filter_input(INPUT_POST, 'title');
    $message = filter_input(INPUT_POST, 'message');
    $userid = get_user_id($_SESSION['valid_user']);
        
    if(isset($_GET['catid'])) {
        $catid = filter_input(INPUT_GET, 'catid');
    } else {
        $catid = filter_input(INPUT_POST, 'catid');
    }   
    
    
    // Check parent value in either get method or post method and store it in variable
    if(isset($_GET['parent'])) {
        $parent = filter_input(INPUT_GET, 'parent');
    } else {
        $parent = filter_input(INPUT_POST, 'parent');
    }
        
    if(@!$area) {
        $area = 1;
    }
    
    // If not errors and no parent value set it to zero
    if(@!$error) {
        if(!$parent) {
            $parent = 0;
            // Set title to new post if no value
            if(!$title) {
                $title = 'New Post';
            }
        } else {
            // Otherwise its probably a reply
            // Set title to existing title name
            $title = get_post_title($parent);
            
            // Add 'Re: ' in front of title name
            if(strstr($title, 'Re: ') == false) {
                $title = 'Re: ' . $title;
            }
            
            // Make sure title is less than 21 chars
            $title = substr($title, 0, 20);
            $message = add_quoting(get_post_message($parent));
        }
    }
?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Prepared Statements - PhP Programming</title>
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
<?php include('..//Includes//Left_forum.php'); ?>
    
<!-- Right -->
<div id ="rightz">

<h1>Forum</h1>
    
<h2>New Post</h2>
    
<?php
    
    // Create the post in html using this function
    display_new_post_form($parent, $area, $title, $message, $userid[0], $catid);
    
    // Display error message if fields are not filled out properly
    if(@$error) {
        echo "<p> Your message was not stored. <br />
             Make sure you have filled in all the fields and try again.</p>";
    }
?>
    
<br />  
<hr />
<br />
<a href = "Index.php">Back to forums</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
<?php
} else {
    header('Location: ../login/Login.html');
}
?>
