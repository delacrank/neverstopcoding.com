<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 7</title>
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
<?php include('..//Includes//Left_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Web Applications</h1>
    
<h2>Building a Forum part 7</h2>
    
    <p>Here we will look at the final two scripts view_post and store_new_post, let's start with the code to view a post.
    
    <span class = "nl">Note, that view post script should handle both posts and replies to those posts. We already handled much of the grunt work by creating the functions to handle generating html and abstracting information from the database.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// view_post.php Script</span>
    &lt;?php 
    
        <span class = "comments">// include our libs</span>
        include('include_fns.php');
        
        <span class = "comments">// get the post id via the get method</span>
        $postid = filter_input( INPUT_GET, 'postid' );
        
        <span class = "comments">// Use the get_post() function to retrieve database values</span>
        $post = get_post($postid);
        
        do_html_header($post['title']);
        
        <span class = "comments">// Display_post creates the html for post and replies recursively</span>
        display_post($post);
        
        <span class = "comments">// Check if post has replies and create form for  replying</span>
        if($post['children']) {
            echo '&lt;br />&lt;br />';
            display_replies_line();
            <span class = "comments">// Create html for the replies based on expanded replies</span>
            display_tree($_SESSION['expanded'], 0, $postid);
        }
        
        do_html_footer();
    ?> </pre>

    <p>First we include our library then we use the get method to obtain the postid. Once we have the postid we can use the get_post function to get the poster, post datetime, post message, post title, etc.
    
    <span class = "nl">So, we use this information to generate our post using the display post function. However, we still need to check to see if the post has replies or children.</span>
    
    <span class = "nl">For that we check the post directly to see if children returns a true value, meaning at least one. Then we can create a form for submitting replies and a tree to display replies to that reply.</span>
    
    <span class = "nl">Let's look at our last script store_new_post.</span></p>
    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php
    
    <span class = "comments">// store_new_post.php</span>
    include('include_fns.php');
    
    <span class = "comments">// check that the store_new_post() function returns a true statement</span>
    if($id = store_new_post($_POST)) {
        include ('index.php');
    } else {
        $error = true;
        include('new_post.php');
    }
    ?></pre>
    
    <p>This script is pretty simply to understand, it includes all the basic functions first. Then it checks to see if the post request is being past into the store_new_post() function. If it is, then store that post and navigate back to the index page, other set the error variable to true and send the user back to the new_post script, so they can try again.
    
    <span class = "nl">Well, thats the end of the forum application. I hope you enjoyed reading and understanding how message boards/ forums work. Hopefully you can build one of you own someday and add more functionality to it.</span></p>

<hr />
<br />
<a href = "Web_Apps4.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps6.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     