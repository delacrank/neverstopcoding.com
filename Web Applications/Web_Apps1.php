<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 2</title>
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
    
<h2>Building a Forum part 2</h2>

    <p>In this section we are going to define the functions for creating new titles, messages, and also for viewing messages and replies.
    
    
    <span class = "nl">Let's look at the first function which will determine which posts are replies and then reads the contents from the database so it can be displayed to our site.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Discussion_fns.php Script</span>
    &lt;?php
    
    function expand_all(&amp;$expanded) {
        <span class = "comments">// mark children as expanded</span>
        $conn = db_connect();
        $query = "select postid from header where children = 1";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();
        for($i = 0; $i &lt; $num; $i++ ) {
            $this_row = $result->fetch();
            $expanded[$this_row[0]] = true;
        }
    }</pre>
    
    <p>The first function expands all the replies, first it needs to determine which replies are children. In order to do that it passes a query to the database which checks if the value of the children row is '1', if the row has '0' then it doesn't need to be expanded.
    
    <span class = "nl">Then it counts those rows and passes the result into a for loop. It will execute the code in the for loop for every child element. That code will set the row equal to a true value in the expanded array. Later we will see how this array will be used to in order to hide or display replies, first we needed to know which replies required expanding.</span>
    
    <span class = "nl">Notice that the expanded parameter is a reference, this means that we don't need to return a value with this function because the variable is changed outside the scope of the function. So an expanded variable we have outside of the function will also be affected.</span>
    
    <span class = "nl">Let's look at another function which gets the stored post from the database in order to return it, this is another read function.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Discussion_fns.php Script</span>    
    function get_post($postid) {
        <span class = "comments">// return post message</span>
        if(!$postid) {
            return false;
        }
    
        $conn = db_connect();
    
        $query = "select * from header where postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid); 
        $stmt->execute();
        if($stmt->rowCount() != 1 ) {
            return false;
        }
        $post = $stmt->fetchAll();
    
        $query = "select * from body where postid = :postid";
        $stmt2 = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid); 
        if($stmt->rowCount() > 0) {
            $body = $stmt2->fetchAll();
            if($body) {
                $post['message'] = $body['message'];
            }
        }
        return $post;
    }</pre>
    
    <p>Okay, so this function returns the post based on the post's primary key which is postid. Let's look at the first part of the function, this checks the header table to see if it returns a row based on the post id.
    
    <span class = "nl">It then stores the contents into an array called post. Then it runs another query to the body table, which checks to see if there are any messages. If there are messages it will store those messages into an associative array called '$post['message']'.</span>
    
    <span class = "nl">Let's look at another function called get_post_title(), it should return the title of the post.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Discussion_fns.php Script</span>  
    function get_post_title($postid) {
        <span class = "comments">// return post title</span>
        if(!$postid) {
            return '';
        }
        
        $conn = db_connect();
        $query = "select title from header where postid = :postid";
        $stmt = conn->prepare($query);
        $stmt->bindValue($postid, ':postid');
        $stmt->execute();
        if($stmt->rowCount() != 1) {
            return '';
        }
        $this_row = $result->fetch();
        return $this_row[0];
    }</pre>
    
    <p>This function will query the header table and return only the title. Let's look at one more next function which returns only the message, after that we will move to another page and continue listing the functions.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Discussion_fns.php Script</span>  
    function get_post_message($postid) {
        <span class ="comments">// return message</span>
        if(!$postid) {
            return '';
        }
        
        $conn = db_connect();
        $query = "select message from body where postid = :postid";
        $stmt = $conn->prepare($query);
        if($stmt->rowCount() > 0) {
            $this_row = $stmt->fetch();
            return $this_row[0];
        }
    }</pre>
    
   <p>This message has similar logic to the get_post_title function, only the query is targeting the message column from the body instead of the title column from the header table this time.</p>
    
    
<hr />
<br />
<a href="Web_Apps.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps2.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     