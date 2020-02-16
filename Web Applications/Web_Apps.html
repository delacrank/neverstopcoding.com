<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 1</title>
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
    
<h2>Web Forum</h2>
    
    <p>The first web application we are going to build is a web forum. It is similar to to a message board, only it allows users to reply to messages which were posted. 
        
    <span class = "nl">We'll start with the database.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># database</span>
    create table header
    (
        parent int not null,
        poster char(20) not null,
        title char(20) not null,
        children int default 0 not null,
        area int default 1 not null,
        posted datetime not null,
        postid int unsigned not null auto_increment primary key
    );

    create table body
    (
        postid int unsigned not null primary key,
        message text
    );</pre>
    
    <p>Here we created two tables one table is called header the other is called body, the header refers to the information for the user, the datetime, the possible replies, the post id, the title of the post and the amount of area required for the post.
    
    <span class = "nl">Next let's create the functions for our validation and for security, we can call these filled_out() and clean_all(). The first function will ensure that any forms we created have been properly filled. The second function will protect us from script attacks.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Data_valid_fns.php Script</span>
    &lt;?php
    
    <span class = "comments">// Check each variable to see if its empty</span>
    function filled_out($form_vars) {
        foreach($form_vars as $key => $value) {
            if (!isset($key) || ($value === '')) {
                return false;
            }
        }
        return true;
    }
    
    <span class = "comments">// Clean the string for html or javascript</span>
    function clean($string) {
        $string = trim($string);
        $string = htmlentities($string);
        $string = strip_tags($string);
        return $string;
    }
    
    <span class = "comments">// clean all the variables by passing them into an array</span>
    function clean_all($form_vars) {
        foreach ($form_vars as $key => $value) {
            $form_vars[$key] = clean($value);
        }
        return $form_vars;
    }
    ?></pre>
    
    <p>Next we can create a function to return the variable for our database connection.  Let's do this now.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// db_fns.php Script</span>
    &lt;?php
    
    function db_connect() {
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXECEPTION);
    
        try{
            $result = new PDO('mysql:dbname = database; host = localhost', 'username', 'password');
        } 
        catch (PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
        return $result;
    } 
    ?></pre>
    
    <p>Alright so we have a function for the connection one for security and one for validation. </p>
    
<hr />
<br />
<a href = "Web_Apps1.html">Next Page</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     