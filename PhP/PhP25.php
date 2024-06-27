<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Learning PhP</title>
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

        <h1>Editing MySQL Records - PhP Programming</h1>
        
        <h2>Editing Records</h2>
        
            <p>Editing the record will be very similar to when we edited our password, only this time instead of using the POST method to obtain our values, we will be using the GET method.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Edit Users Script
        echo '&lt;h1>Edit Users&lt;/h1>';
        if ( (isset($_GET['id'])) &amp;&amp; (is_numeric($_GET['id'])) ) {
            $id = $_GET['id'];
        } elseif ( (isset($_POST['id'])) &amp;&amp; (is_numeric($_GET['id'])) ) {
            $id = $_POST['id'];
        } else {
            echo '&lt;p>This page has been accessed in error&lt;/p>';
            exit();
        }
    
        require('connection_string.php');
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
            $errors = array();
            if (empty($_POST['UserName'])) {
                $errors[] = 'You forgot to enter user name';
            } else {
                $u = mysqli_escape_string($dbc, trim($_POST['UserName']));
            }
            
            if (empty($_POST['email'])) {
                $errors[] = 'You forgot to enter user email';
            } else {
                $e = mysqli_escape_string($dbc, trim($_POST['email']));
            }
            
            if (empty($errors)) {
                $query = "SELECT user_id FROM users WHERE email='$e'
                AND user_id != $id";
                $result = @mysqli_query($dbc, $query);
                    
                if (mysqli_num_rows($result) == 0 ) {
                    $query = "UPDATE users SET UserName = '$u', email = '$e'
                    WHERE user_id = $id LIMIT 1";
                    $result = @mysqli_query ($dbc, $query);
                    if (mysqli_affected_rows($dbc) == 1 ) {
                        echo '&lt;p>The user has been edited.&lt;/p>';
                    } else {
                        echo '&lt;p>The user could not be edited due to a
                        system error&lt;/p>';
                        echo '&lt;p>' . mysqli_error($dbc) . '&lt;br />
                        Query: ' . $query . '&lt;/p>';
                    }
                } else {
                    echo '&lt;p>The email is already registered&lt;/p>';
                }
            } else {
                echo '&lt;p>The following error(s) occured:&lt;br />';
                foreach ($errors as $msg) {
                    echo " - $msg&lt;br />\n";
                }
                echo '&lt;/p>&lt;p>Please try again.&lt;/p>';
            }
        }
            
        $query = "SELECT UserName, email FROM users WHERE user_id = $id";
        $result = @mysqli_query ($dbc, $query);
            
        if (mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_array ($result, MYSQLI_NUM);
            echo '&lt;form action="edit_user.php" method="post">
            &lt;label>User Name: &lt;input type="text" name="UserName" size="15"
            maxlenght="20" value="' . $row[0] . '" />&lt;/label>&lt;br />
            &lt;label>email: &lt;input type="text" name="email" size="15"
            maxlenght="20" value="' . $row[1] . '" />&lt;/label>&lt;br />
            &lt;input type="sumbit" name="submit" value="Submit" />
            &lt;input type="hidden" name="id" value="' . $id . '" />
            &lt;/form>';
        } else {
            echo '&lt;p>This page has been accessed in an error.&lt;/p>';
        }
        mysqli_close($dbc);
    &#63;></pre>      
        
        <hr />        
        <br />
        <a href = "PhP24.php"> Previous Page</a>
        <span class = "next">
        <a href = "PhP26.php">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 
            