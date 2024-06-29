<?php
    // include our libs
    include_once('Include_function.php');       
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    // get the post id via the get method
    $postid = filter_input( INPUT_GET, 'postid' );

    $userip = $_SERVER['REMOTE_ADDR'];

    $catid = get_category_id($postid);
            
    get_user_ip($userip, $catid, $postid);

    // Use the get_post() function to retrieve database values
    $post = get_post($postid);

?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title><? $post['title'] ?></title>
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
    
<h2>View Post</h2>
        
<?php
        // Display_post creates the html for post and replies recursively
        display_post($post);
        
        // Check if post has replies and create form for  replying
        if($post['children']) {
            // Create html for the replies based on expanded replies
           //display_post(get_replies($postid));
            echo "<table class = 'forum_table'>";
            echo "<th colspan = '4'>Replies</th>";
            display_tree(0, $catid, 0, $postid);
        }
?>      
    
 <hr />
<br />
<a href = "Index.php">Back to Forums</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  