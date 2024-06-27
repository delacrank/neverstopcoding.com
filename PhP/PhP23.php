<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sending Values to a Script - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Sending Values to a Script - PhP Programming</h1>
        
        <h2>Sending Values to a Script</h2>
            
            <p>In this section we are going to learn how to modify our records by using php scripts, below is an example of a table we can set up to link a script to each record within our users table.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php
        echo '&lt;h1> Registered Users &lt;/h1>';
        require_once('connection_string.php');
        $query = "SELECT * FROM users ORDER BY user_id ASC";
        $result = @mysqli_query($dbc, $query);
        $num = mysqli_num_rows($result);
            
        if($num > 0 ) {
            echo "&lt;p>There are currently $num registered users&lt;p>";
            echo '&lt;table cellpadding="5" width="95%">
                &lt;tr>
                    &lt;td> Edit &lt;/td>
                    &lt;td> Delete &lt;/td>
                    &lt;td> UserName &lt;/td>
                    &lt;td> Email &lt;/td>
                    &lt;td> Registration Date &lt;/td>
                &lt;/tr>';
                
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '&lt;tr>
                    &lt;td> &lt;a href="edit_user.php?id =' . $row['user_id'] . '"> Edit &lt;/a>&lt;/td>
                    &lt;td>  &lt;a href="delete_user.php?id =' . $row['user_id'] . '"> Delete &lt;/a> &lt;/td>
                    &lt;td> ' . $row['UserName'] . ' &lt;/td>
                    &lt;td> ' . $row['email'] . ' &lt;/td>
                    &lt;td> ' . $row['registration_date'] . ' &lt;/td>
                &lt;/tr>';
            }
            echo '&lt;/table>';
            mysqli_free_result ($result);   
        } else {
            echo '&lt;p> There are currently no registered users.&lt;/p>';
        }
        mysqli_close($dbc);   
    &#63;> </pre>
    <hr />
        
    <h2>Deleting Records</h2>
            
        <p>In our last section I showed how we could create a table which would provide links to several scripts two for each user_id in our table, one script to delete the record and another script to edit it.
            
    <span class = "nl">Below is an example of how to delete records from MySQL using a PhP script.</span> </p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Delete User Script    
        echo '&lt;h1>Delete User&lt;/h1>';
            
        <span class="comments">// Check the user_id from the url using the GET method</span>
        if ( (isset($_GET['id'])) &amp;&amp; (is_numeric ($_GET['id'])) ) {
            $id = $_GET['id'];
        <span class="comments">// Pass this value to the POST method if it hasn't been set yet</span>
        } elseif ( (isset($_POST['id'])) &amp;&amp; ( is_numeric($_POST['id'])) ) {
            $id = $_POST['id'];
        } else {
            <span class="comments">// Display an error if user_id value couldn't be retrieved </span>
            echo '&lt;p>This page has been accessed in error.&lt;/p>';
            exit();
        }
    
        <span class="comments">// Use this script to connect to the database </span>
        require_once('connection_string.php');
    
        <span class="comments">// If the page has been posted back </span>
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            <span class="comments">// If radio button sure has been selected and equal to YES</span>
            if ($_POST['sure'] == 'Yes') {
                <span class="comments">// Run this query </span>
                $query = "DELETE FROM users WHERE user_id = $id LIMIT 1";
                $result = @mysqli_query ($dbc, $query);
                if (mysqli_affected_rows($dbc) == 1 ) {
                    echo '&lt;p>The user has been deleted.&lt;/p>';
                } else {
                    <span class="comments">// Error message if no user with that id could be found </span>
                    echo '&lt;p>The user could not be deleted due to a system
                    error.&lt;/p>';
                    echo '&lt;p>' . mysqli_error($dbc) . '&lt;br />Query: ' . $query . '&lt;/p>';
                }
            } else {
                <span class="comments">// If radio button was set equal to NO </span>
                echo '&lt;p>User has NOT been deleted.&lt;/p>';
            }
        } else {
            <span class="comments">// Select a user from our table whose id is equal to our GET value </span>
            $query = "SELECT UserName FROM users WHERE user_id = '$id'";
            $result = @mysqli_query ($dbc, $query);
            
            if (mysqli_num_rows($result) == 1) {
                <span class="comments">// Place that value in an array </span>
                $row = mysqli_fetch_array ($result, MYSQLI_NUM);
                <span class="comments">// Prompt the user to confirm  </span>
                echo "&lt;h3>Name: $row[0]&lt;/h3>
                Are you sure you want to delete this user?";
                echo '&lt;form action = "delete_user.php" method = "post">
                    &lt;input type="radio" name="sure" value="Yes" /> Yes
                    &lt;input type="radio" name="sure" value="No" checked="checked" /> No
                    &lt;input type="submit" name="submit" value="Submit" />
                    <span class="comments">// Add the value to our form </span>
                    &lt;input type="hidden" name="id" value="' . $id . '" />
                &lt;/form>';
                    
            } else {
                <span class="comments">// If no user could be selected from our table display an error message </span>
                echo '&lt;p>This page has been accessed in error.&lt;/p>';
            }
        }
        mysqli_close($dbc);
    &#63;></pre>
        
<?php
/*
echo '<h1> Registered Users </h1>';

require_once('connection_string.php');

$query = "SELECT * FROM users ORDER BY user_id ASC";

$result = @mysqli_query($dbc, $query);

$num = mysqli_num_rows($result);

if($num > 0 ) {
echo "<p>There are currently $num registered users<p>";

echo '<table cellpadding="5" width="95%">
<tr>
<td> Edit </td>
<td> Delete </td>
<td> UserName </td>
<td> Email </td>
<td> Registration Date </td>
</tr>';

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<tr>
<td> <a href="edit_user.php?id=' . $row['user_id'] . '"> Edit </a></td>
<td> <a href="delete_user.php?id=' . $row['user_id'] . '"> Delete </a> </td>
<td> ' . $row['UserName'] . ' </td>
<td> ' . $row['email'] . ' </td>
<td> ' . $row['registration_date'] . ' </td>
</tr>';
}

echo '</table>';
mysqli_free_result ($result);

} else {
echo '<p> There are currently no registered users.</p>';
}

mysqli_close($dbc);
*/
?>

        <hr />        
        <br />
        <a href = "PhP22.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP24.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 