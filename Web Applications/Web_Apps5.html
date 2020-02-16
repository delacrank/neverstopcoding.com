<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 6</title>
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
    
<h2>Building a Forum part 6</h2>
    
    <p>Alright, now that we understand the core of our program. Let's look at some of the functions which generate the html necessary for our web application to function. Structuring our program like this makes the code more organized and easier to maintain.
    
    <span class = "nl">This next script creates functions for formating the date, creating the header, footer, reply, index, display post, and the form to create a new post. Let's look at the file.</span>
    </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Output_fns.php Script</span>
    &lt;?php
    
    $table_width = '580';
    
    function reformat_date($datetime) {
        list($year, $month, $day, $hour, $min, $sec) = split( '[: -]', $datetime );
        return "$hour:$min: $month/$day/$year";
    }
    
    function display_tree($expanded, $row = 0, $start = 0) {
        global $table_width;
        echo "&lt;table width = \"".$table_width."\">";
        
        if($start > 0) {
            $sublist = true;
        } else {
            $sublist = false;
        }
        
        $tree = new treenode($start, '', '', '', 1, true, -1, $expanded, $sublist);
        
        $tree->display($row, $sublist);
        
        echo "&lt;/table>";
    }
    
    function display_replies_line() {
        global $table_width;
    ?>
        &lt;table width="&lt;?php echo $table_width ?>" cellpadding="4" 
        cellspacing="0" bgcolor="#cccccc">
        &lt;tr>&lt;td>&lt;strong>Replies to this message&lt;/strong>&lt;/td>&lt;/tr>
        &lt;/table>
    &lt;?php
    }
    
    function display_index_toolbar() {
        global $table_width;
    ?>
        &lt;table width="&lt;?php echo $table_width; ?>" cellpadding="4" cellspacing="0">
            &lt;tr>
                &lt;td bgcolor="#cccccc" align="right">
                    &lt;a href="new_post.php?parent=0">
                    new post&lt;/a>
                    &lt;a href="index.php?expand=all">
                    expand all>&lt;/a>
                    &lt;a href="index?collapse=all">
                    collapse all&lt;/a>
                &lt;/td>
            &lt;/tr>
        &lt;/table>
    &lt;?php
    }
    
    function display_post($post) {
        global $table_width;
        
        if(!$post) {
            return;
        }    
    ?>
        &lt;table width="&lt;?php echo $table_width; ?>" cellpadding="4"
        cellspacing="0">
        &lt;tr>
            &lt;td bgcolor="#cccccc">
                &lt;strong>From: &lt;?php echo $post['poster'];?> &lt;/strong>&lt;br />
                &lt;strong>Posted: &lt;?php echo $post['posted'];?>&lt;/strong>
            &lt;/td>
            &lt;td bgcolor="#cccccc" align="right">
                &lt;a href="new_post.php?parent=0"> new post &lt;/a>
                &lt;a href="new_post.php?parent=&lt;?php echo $post['postid']; ?>">
                reply &lt;/a>
            &lt;a href="index.php?expanded=&lt;?php echo $post['postid']; ?>">
            index &lt;/a>
        &lt;/td>
        &lt;/tr>
        &lt;tr>&lt;td colspan="2">
        &lt;?php echo nl2br($post['message']);?>
        &lt;/td>&lt;/tr>
        &lt;/table>
    &lt;?php    
    }
    
    function display_new_post_form($parent = 0, $area = 1, $title='',
    $message='', $poster='') {
        global $table_width;
    ?>
        &lt;table cellpadding="0" cellspacing="0" border="0"
        width="&lt;?php echo $table_width; ?>">
        &lt;form action="store_new_post.php?expand=
        &lt;?php echo $parent;?> #&lt; echo $parent;?>"
            method = "post">
        &lt;tr>
            &lt;td bgcolor="#cccccc">Your Name:&lt;/td>
            &lt;td bgcolor="#cccccc">&lt;input type="text" name="poster" value="
            &lt;?php echo $poster ?>" size = "20" maxlength="20" />
            &lt;/td>
        &lt;/tr>    
        &lt;tr>
            &lt;td bgcolor="#cccccc">Message Title:&lt;/td>
            &lt;td bgcolor="#cccccc">&lt;input type="text" name="title" value="
            &lt;?php echo $title ?>" size = "20" maxlength="20" />
            &lt;/td>
        &lt;/tr>    
        &lt;tr>
            &lt;td colspan="2">
                &lt;textarea name="message" rows="10" cols="55">
                &lt;?php echo stripslashes($message);?>&lt;/textarea>
            &lt;/td>
        &lt;/tr>
        &lt;tr>
            &lt;td colspan="2" align="center" bgcolor="#cccccc">
            &lt;input type="image" name="post"  src="images/post.gif"
            alt="Post Message" width="99" height="39"/>
            &lt;input type="hidden" name="parent" value="&lt;?php echo $parent; ?>">
            &lt;input type="hidden" name="area" value="&lt;?php echo $area; ?>">
        &lt;/tr>
        &lt;/form>
        &lt;/table>
    &lt;?php
    }
    ?></pre>
    
    <p>Alright, so let's go over the code and try to understand what these functions do and how we can use them to display posts or obtains information from users.
    
    <span class = "nl">Let's look at the first function reformat_date(), it takes one parameter then breaks the values returned from parameter places those values into variables using the list function.  Then it returns those values as a string.</span>
        
    <span class = "nl">The next function takes three parameters in order to display the tree of posts and replies. The first parameter is an array which determines which replies should be displayed and which should be hidden. The second parameter takes row variable which determines the amount of rows needed to be displayed, and thus makes it easier to color them.</span>
        
    <span class = "nl">Finally, the last parameter contains the start variable, this determines where the post begins. For example, if its the first post or the parent, then it needs to display the entire tree, however, if its a child then it only needs to display replies to its node. The start parameter also determines whether the program should set the sublist to true or false. Sublist is a variable tells the program which page the user is on, and then displays a list of posts if user on the main page. If not, the list doesn't need to be displayed.</span>
        
    <span class = "nl">display_replies_line() creates a table which indicates to users where they need to reply.</span>
        
    <span class = "nl">display_index_toolbar() creates a toolbar that allows users to collapse or expand the replies.</span>
        
    <span class = "nl">Display post is the first big html function which, takes a parameter and then displays the values from that parameter as html. This function displays the poster, the time it was posted and the message of the post. Using the nl2br function converts newline's into br tags so that users can see the line breaks.</span>
        
    <span class = "nl">Now, let's look at the dislay_new_post_form() function. This function takes 5 parameters: a parent variable, an area variable, a title variable, a message variable and a poster variable. It takes those parameters and then puts them into a form, so even if the user refreshes the page the inputs should still hold their input text.</span>
        
    <span class = "nl">For new posts we can pass the parent value as one and the area as 1. Those two values as sent as hidden values which means the user can't see or select them. In addition, its important to use the stripslashes function for the message text as a security measure. The area variable is only necessary if you want to create multiple forums, and the parent value as we discussed shows the hierachry of the posts.</span>
        
    <span class ="nl">In our next page we will create the last two scripts, store_new_post and view post.</span>
    </p>
    
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