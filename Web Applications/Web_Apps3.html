<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 4</title>
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
    
<h2>Building a Forum part 4</h2>

    <p>In this section we are going to be going over how to condense functions into a single include file. And we will go over using sessions to enable users to expand and collapse posts on our forum.
    
    <span class = "nl">The first code snippet is very simple, we are just using the 'include_once' feature to show ensure that our functions are duplicated.</span>
    </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Include_fns.php Script</span>
    &lt;?php 
        
        <span class = "comments">// Create a file to store all our functions</span>
        include_once('db_fns.php');
        include_once('data_valid_fns.php');
        include_once('output_fns.php');
        include_once('discussion_fns.php');
        include_once('treenode_class.php');
        
    ?></pre>
    
    <p>Alright, let's create the main page or the index. This is the page everyone will see when they enter our site. It will contain the file which includes our other files, in order to to make the application easier to understand and read.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Index.php Script</span>
    &lt;?php
    
    include('include_fns.php');
    session_start();
    
    <span class = "comments">// Initialize our expanded array, if not already set</span>
    if(!isset($_SESSION['expanded'])) {
        $_SESSION['expanded'] = array();
    }
    
    <span class = "comments">// Check for expanded posts</span>
    if(isset($_GET['expand'])) {
        <span class = "comments">// Set all posts to expand if value is set to all</span>
        if($_GET['expand'] == 'all') {
            expand_all($_SESSION['expanded']);
        } else {
            $_SESSION['expanded'][$_GET['expand']] = true;
        }
    }
    
    <span class = "comments">// Check for collapsed posts</span>
    if(isset($_GET['collapse'])) {
        <span class = "comments">// Hide all posts and reset the array</span>
        if($_GET['collapse'] == 'all') {
            unset($_SESSION['expanded'][$_GET['collapse']]);
        }
    }
    
    do_html_header('Discussions Posts');
    
    display_index_toolbar();
    
    display_tree($_SESSION['expanded']);
    
    do_html_footer();
    
    ?> </pre>    
    
    <p>The first thing the application does is check to see if the session array 'expanded' has been set. This array has only two elements: 'expand' and 'collapse'. It will be used to determine if replies to posts are displayed or hidden.
    
    <span class = "nl">The expanded array has its values passed through the get method (using the page's url). Our next line determines if variable is being passed, and then it checks to see if the value of the 'expand' value is equal to 'all'.</span>
    
    <span class = "nl">If it is equal to all then it will pass that array into the 'expand_all()' function, declared earlier in the tutorial. Otherwise, it will just set the element equal to true.</span>
    
    <span class = "nl">Next the program determines if another variable was passed, this is the collapse variable. It will hide replies to existing posts if it is passed. If the value of the collapse variable is equal to 'all' then it will unset the session 'expanded' array.</span>
    
    <span class = "nl">The script will then proceed to displaying the header, the toolbar and the tree of topics. However, in order to understand what 'display_tree()' function does, we need to look at the tree class.</span>
    
    <span class = "nl">Now, let's look at another piece of code which is used when a user wants to create a new post.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// new_post.php Script</span>
    &lt;?php
    
    include('include_fns.php');
    
    <span class = "comments">// Store post values for title, poster and message</span>
    $title = filter_input(INPUT_POST, 'title');
    $poster = filter_input(INPUT_POST, 'poster');
    $message = filter_input(INPUT_POST, 'message');
    
    <span class = "comments">// Check parent value in either get method or post method and store it in variable</span>
    if(isset($_GET['parent'])) {
        $parent = filter_input(INPUT_GET, 'parent');
    } else {
        $parent = filter_input(INPUT_POST, 'parent');
    }
    
    if(!area) {
        $area = 1;
    }
    
    <span class = "comments">// If not errors and no parent value set it to zero</span>
    if(!$error) {
        if(!$parent) {
            $parent = 0;
            <span class = "comments">// Set title to new post if no value</span>
            if(!$title) {
                $title = 'New Post';
            }
        } else {
            <span class = "comments">// Otherwise its probably a reply</span>
            <span class = "comments">// Set title to existing title name</span>
            $title = get_post_title($parent);
            
            <span class = "comments">// Add 'Re: ' in front of title name</span>
            if(strstr($title, 'Re: ') == false) {
                $title = 'Re: ' . $title;
            }
            
            <span class = "comments">// Make sure title is less than 21 chars</span>
            $title = substr($title, 0, 20);
            $message = add_quoting(get_post_message($parent));
        }
    }
    do_html_header($title);
    
    <span class = "comments">// Create the post in html using this function</span>
    display_new_post_form($parent, $area, $title, $message, $poster);
    
    <span class = "comments">// Display error message if fields are not filled out properly</span>
    if($error) {
        echo "&lt;p> Your message was not stored. &lt;br />
             Make sure you have filled in all the fields and try again.&lt;/p>":
    }
    
    do_html_footer();
    
    ?></pre>
    
    <p>The first thing we do with the page is include all the necessary functions by adding the 'include_fns' script which, contains all the other scripts for our views and database logic.
    
    <span class = "nl">Next we need to create variables to store the details of our message, such as the title, name of poster, and the message. The parent value can be passed via post or get method based on how the user interacts with the application.</span>
    
    <span class = "nl">The parent value will be stored in a variable called parent. Yet, we still need a few other values such as the area, and title of the post. Futhermore, we need to validate this information which can be checked based on the boolean value of variable called error.</span>
    
    <span class = "nl">After the script checks to see that there are no errors, it checks to see if the parent value for the post is true or false, if its false its set to zero meaning new post. If the post is a reply to another post, then the program can retrieve the title using the 'get_post_title()' function.</span>
    
    <span class = "nl">If the message is a reply the program will prepend the 'Re: ' to the title of the post. Finally, it will check the message for quotes and add them using the 'add_quoting()' function.</span>
    
    <span class = "nl">In our next section we will go over the functions which generate the html for our php pages.</span></p>
    
    
<hr />
<br />
<a href = "Web_Apps2.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps4.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     