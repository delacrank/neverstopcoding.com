<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Editing MySQL Records - PhP Programming</title>
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

     <h1>Deleting MySQL Records - PhP Programming</h1>
        
        <h2>Deleting Records</h2>
        
            <p>Deleting the record will be a very simple matter of submitting data to the form and then confirming that input.  The script creates the form if the request method has not be posted yet. Once it has it will create a connection to the database, and run the sql query to delete the user based on the provided user id.</p>    
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php # Delete User Script
            
    echo '&lt;h1>Delete User&lt;/h1>';
            
    if ( (isset($_GET['id'])) &amp;&amp; (is_numeric ($_GET['id'])) ) {
            $id = $_GET['id'];
    } elseif ( (isset($_POST['id'])) &amp;&amp; ( is_numeric($_POST['id'])) ) {
            $id = $_POST['id'];
    } else {
            echo '&lt;p>This page has been accessed in error.&lt;/p>';
            exit();
    }
    
    require_once('connection_string.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if ($_POST['sure'] == 'Yes') {
                    
                    $query = "DELETE FROM users WHERE user_id = $id LIMIT 1";
                    $result = @mysqli_query ($dbc, $query);
                    if (mysqli_affected_rows($dbc) == 1 ) {
                    
                            echo '&lt;p>The user has been deleted.&lt;/p>';
                            
                    } else {
                        
                            echo '&lt;p>The user could not be deleted due to a system
                            error.&lt;/p>';
                            echo '&lt;p>' . mysqli_error($dbc) . '&lt;br />Query: ' . $query . '&lt;/p>';
                    }
            
            } else {
                    echo '&lt;p>User has NOT been deleted.&lt;/p>';
            }
            
    } else {
    
            $query = "SELECT UserName FROM users WHERE user_id = '$id'";
            $result = @mysqli_query ($dbc, $query);
            
            if (mysqli_num_rows($result) == 1) {
            
                    $row = mysqli_fetch_array ($result, MYSQLI_NUM);
                    
                    echo "&lt;h3>Name: $row[0]&lt;/h3>
                    Are you sure you want to delete this user?";
                    
                    echo '&lt;form action = "delete_user.php" method = "post">
                    &lt;input type="radio" name="sure" value="Yes" /> Yes
                    &lt;input type="radio" name="sure" value="No" checked="checked" />
                    No
                    &lt;input type="submit" name="submit" value="Submit" />
                    &lt;input type="hidden" name="id" value="' . $id . '" />
                    &lt;/form>';
                    
            } else {
                    echo '&lt;p>This page has been accessed in error.&lt;/p>';
            }
    }
    
    mysqli_close($dbc);
    
    ?></pre>
        
        

        
        <hr />        
        <br />
        <a href = "PhP23.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP25.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 