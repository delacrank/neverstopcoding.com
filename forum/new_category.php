<?php
    include_once('Include_function.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    if(isset($_SESSION['valid_user'])) {
    
   // Store post values for title, poster and message
    $cat_title = filter_input(INPUT_POST, 'cat_title');
    $cat_desc = filter_input(INPUT_POST, 'cat_desc');
   
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
<?php include('..//Includes//Left_index3.php'); ?>
    
<!-- Right -->
<div id ="rightz">

<h1>Forum</h1>
    
<h2>New Category</h2>
    
<?php
    
    // Create the post in html using this function
    display_new_category_form($cat_title, $cat_desc);
    
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