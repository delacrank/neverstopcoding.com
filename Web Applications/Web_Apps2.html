<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 3</title>
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
    
<h2>Building a Forum part 3</h2>
    
    <p>We are going to look at two more functions in this section, although one of them is very long. That is the function necessary to store new posts in the database.
    
    <span class = "nl">We will review the code shortly after. First let's look at the add quoting function.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Discussion_fns.php Script </span>
    <span class = "comments">// add quotes to a string</span>
    function add_quoting($string, $pattern = '> ') {
        return $pattern.str_replace("\n", "\n$pattern", $string);
    }</pre>
    
    <p>Now let's take a look at the store new post function, which I mentioned before.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Discussion_fns.php Script </span>
    <span class = "comments">// store new post in database</span>
    function store_new_post($post) {
        $conn = db_connect();
    
        <span class = "comments">// check that form is filled out</span>
        if(!filled_out($post)) {
            return false;
        }
        $post = clean_all($post);
    
        <span class = "comments">// check that topic exists in database</span>
        if($post['parent'] != 0 ) {
            $query = "select postid from header where postid = :post_parent";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':post_parent', $post['parent']);
            $stmt->execute();
            if($stmt->rowCount() != 1) {
                return false;
            }
        }
    
        <span class = "comments">// Check for duplicate topics</span>
        $query = "select header.postid from header, body where
              header.postid = body.postid and
              header.parent = :post_parent and
              header.poster = :post_poster and
              header.title = :post_title and
              header.area = :post_area and 
              body.message = :post_message";
        $stmt2 = $conn->prepare($query);
        $stmt2->bindValue(':post_parent', $post['parent']);
        $stmt2->bindValue(':post_poster', $post['poster']);
        $stmt2->bindValue(':post_title', $post['title']);
        $stmt2->bindValue(':post_message', $post['message']);
        $result = $stmt2->execute();
        if(!$result) {
            return false;
        }
    
        if($stmt2->rowCount() > 0 ) {
            $this_row = $stmt2->fetch();
            return $this_row;
        }
    
        <span class = "comments">// insert values into header table</span>
        $query = "insert into header values
             ( :post_parent,
               :post_poster,
               :post_title,
               0,
               :post_area,
               now(),
               NULL)";
        $stmt3 = $conn->prepare($query);
        $stmt3->bindValue(':post_parent', $post['parent']);
        $stmt3->bindValue(':post_poster', $post['poster']);
        $stmt3->bindValue(':post_title', $post['title']);
        $stmt3->bindValue(':post_area', $post['area']);
        $result = $stmt3->execute();
    
        if(!$result) {
            return false;
        }
        
        <span class = "comments">// topic now has a child</span>
        $query = "select header set children = 1 where postid = :post_parent";
    
        $stmt4 = $conn->prepare($query);
        $stmt4->bindValue(':post_parent', $post['parent']);
        $result = $stmt4->execute();
        if(!$result) {
            return false;
        }
    
        <span class = "comments">// check for duplicate topic posts</span>
        $query = "select header.postid from header left join body on header.postid = body.postid
                    where parent = :post_parent
                    and poster = :post_poster
                    and title = :post_title
                    and body.postid is NULL";
        $stmt5 = $conn->prepare($query);
        $stmt5->bindValue(':post_parent', $post['parent']);
        $stmt5->bindValue(':post_poster', $post['poster']);
        $stmt5->bindValue(':post_title', $post['title']);
    
        $result = $stmt5->execute();
        if(!$result) {
            return false;
        }
    
        if($stmt5->rowCount() > 0 ) {
            $this_row = $stmt5->fetch();
            $id = $this_row[0];
        }
    
        <span class = "comments">// insert rows into body table</span>
        if($id) {
            $query = "insert into body values( :id, :post_message )";
            $stmt6 = $conn->prepare($query);
            $stmt6->bindValue(':id', $id);
            $stmt6->bindValue(':post_message', $post['message']);
            $result = $stmt6->execute();
            if(!$result) {
                return false;
            }
        }
    } </pre>
    
    <p>Alright lets try to go over this section of code line by line in order to understand how it is actually storing information into the database.
        
    <span class = "nl">First I want you to note that this parameter 'post' being passed into the function is actually an array. This is an associative array which contains information relevent to our database.</span>
    
    <span class = "nl">The function we are creating is named store_new_post, and the purpose of it is to insert new rows or columns into the body table.  One of the first things it will tackle is checking to see if the filled_out function returns a true value. This will ensure that all the inputs have be filled out in my html form.</span>
    
    <span class = "nl">If at any point some of my if statements fail, then the code will stop and return a false value as a result of the function. Since we will need to check that quite a few values it is a good idea to ensure that each value returns a true value before making the program try to execute any unnecesaary code.</span>
        
    <span class = "nl">Since we know that all of the inputs in our html form are filled out, lets make sure to clean that data by removing any unnecessary quotes, slashes and other possibily malicious ascii characters. This is accomplished in a function we declared earlier called 'clean()'.</span>
        
    <span class = "nl">Alright, now let's start querying the database for the required information, in order to insert our message into the database. First we need to select every attribute from our header table in order to see if the topic exists. Fyi, I am using prepared statments to protect against possible sql injections, which would compromise my database. </span>
        
    <span class = "nl">The next thing we need to do is create a joint table in order to check for information pertaining to  both the header and body tables. In this new table we will be checking these columns: parent, poster, title, area and message. </span>
        
    <span class = "nl">If a user is trying to create a post which already exists, then the function will stop and just return that information rather than try to create another row in the database which has duplicate information.</span>
        
    <span class = "nl">So far we have checked to see that the topic exists, then we checked to ensure the inputs are submitted, clean the data, and made sure that it is not duplicate. We can now prepare another query which will insert this data into the database. That is how our initial post is created.</span>
        
    <span class = "nl">Next we have to insert the message into the body table. First, we must check to see that our new post was created in the header table. Then, we can insert the message and postid rows into the body table.</span>
        
    <span class = "nl">In the next section we will go over how to store all of functions into one file, so we don't need to keep calling the include function, everytime we need a function. Also, we will show how to handle the session variables for allowing users to expand or collapse posts.</span>
    </p>
        
<hr />
<br />
<a href = "Web_Apps1.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps3.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     