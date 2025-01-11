<?php
    include_once('Include_function.php');
    
    $catid = filter_input(INPUT_GET, 'catid');

    $userip = $_SERVER['REMOTE_ADDR'];

    get_user_ip( $userip, $catid);

    $views = display_view_count($catid);

    // Initialize our expanded array, if not already set
    if(!isset($_SESSION['expanded'])) {
        $_SESSION['expanded'] = array();
    }
    
    // Check for expanded posts
    if(isset($_GET['expand'])) {
        // Set all posts to expand if value is set to all
        if($_GET['expand'] == 'all') {
            expand_all($_SESSION['expanded']);
        } else {
            $_SESSION['expanded'][$_GET['expand']] = true;
        }
    }
    
    // Check for collapsed posts
    if(isset($_GET['collapse'])) {
        // Hide all posts and reset the array
        if($_GET['collapse'] == 'all') {
            $_SESSION['expanded'] = array();
        } else {
            unset($_SESSION['expanded'][$_GET['collapse']]);
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
    
<h1><?php $cat_title ?></h1>
    
<?
    display_post_toolbar();
    
    echo '<table class = "forum_table">';
    echo '<th colspan=4>Posts</th>';
    display_tree($_SESSION['expanded'], $catid, $views);
?>    
    
   <br />  
<hr />
<br />
<a href = "Index.php">Back to Forums</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 