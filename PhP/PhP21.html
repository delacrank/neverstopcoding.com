<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Inserting values into MySQL Tables - PhP Programming</title>
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

        <h1>Inserting values into MySQL Tables - PhP Programming</h1>

        <h2>Inserting values into our Tables</h2>
        
            <p>Alright, so we learned how to create a connection to our database, create tables and even some form handling. (althou, this can be taken care using a client side language like javascript).
            
    <span class = "nl">Below, I am going to create a form which will allow us to insert values into our newly created 'users' table.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php
            
    <span class="comments">// Set the database access information</span>
    DEFINE ('DB_USER', 'username');
    DEFINE ('DB_PASSWORD', 'password');
    DEFINE ('DB_HOST', 'server');
    DEFINE ('DB_NAME', 'database');
            
    <span class="comments">// Make the connection</span>
    $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not establish a connection to the MySQL: ' . mysqli_connect_error() );   
            
    <span class="comments">// Check for form submission</span>
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        <span class="comments">// Store our errors in this array</span>
        $errors = array();  
        <span class="comments">// validation for input fields</span>
        if (empty($_POST['user_name'])) {
            $errors[] = 'You forgot to enter your user name.';    
        } else {
            $un = trim($_POST['user_name']);
        }
                
        if (empty($_POST['email'])) {
            $errors[] = 'You forgot to enter your email address.';    
        } else {
            $e = trim($_POST['email']);
        }
                
        if (!empty($_POST['pass1'])) {
            if ($_POST['pass1'] != $_POST['pass2']) {
                $errors[] = 'Your passwords did not match.';
            } else {
                $p = trim($_POST['pass1']);
            }
        } else {
            $errors[] = 'You forgot to enter your password.';
        }
            
        <span class="comments">// Register the user into the database</span><br />          
        if (empty($errors)) {
            <span class="comments">// Make the query to insert new user</span>
            $query = "INSERT INTO users (user_name, email, password, registration_date) 
            VALUES ('$un', '$e', '$p', NOW() )";
    
            $result = @mysqli_query ($dbc, $query);
                
            if ($result) { 
                echo '&lt;h1>Thank you!&lt;/h1>
                    &lt;p> You are now a registered user&lt;/p>&lt;br />';
                } else { 
                    <span class="comments">// If it did not run properly</span>
                    echo '&lt;h1>Error&lt;/h1>
                    &lt;p>You could not be registered due to an error.&lt;/p>';
                    echo '&lt;p>' . mysqli_error($dbc) . '&lt;br />&lt; br >Query: ' . $query . '&lt;/p';
                } 
                mysqli_close($dbc);
                exit();
            } else {
                echo '&lt;h1>Error!&lt;/h1>
		        &lt;p>The following error(s) occurred:&lt;br />';
		        foreach ($errors as $msg) {  
                    echo " - $msg&lt;br />\n";
                }
                echo '&lt;/p>&lt;p>Please try again.&lt;/p>&lt;p>&lt;br />&lt;/p>';
            }
        } 
    &#63;>
            
    &lt;h1> Register &lt;/h1>
    &lt;form action = "" method = "post">
        &lt;table>
            &lt;tr>
                &lt;td> &lt;label>User Name: &lt;/label> &lt;/td> 
                &lt;td> &lt;input type= "text" name = "user_name" size = "15" maxlength = "20" /> &lt;/td>
            &lt;/tr>
            &lt;tr>
                &lt;td> &lt;label>Email: &lt;/label> &lt;/td>
                &lt;td> &lt;input type= "text" name = "email" size = "15" maxlength = "40" /> &lt;/td>
            &lt;/tr>
            &lt;tr>
                &lt;td> &lt;label>Password: &lt;/label> &lt;/td>
                &lt;td> &lt;input type= "text" name = "pass1" size = "15" maxlength = "40" /> &lt;/td> 
            &lt;/tr>
            &lt;tr>
                &lt;td> &lt;label>Confirm Password: &lt;/label> &lt;/td>  
                &lt;td> &lt;input type= "text" name = "pass2" size = "15" maxlength = "20" /> &lt;/td>
                &lt;/tr>
            &lt;/table>
        &lt;input type = "submit" value = "Register" />
    &lt;/form></pre>
                

<?php /*

// Set the database access information
DEFINE ('DB_USER', '');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', '');

// Make the connection
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not establish a connection to the MySQL: ' . mysqli_connect_error() );

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Store our errors in this array
$errors = array();

// validation for input fields
if (empty($_POST['user_name'])) {
$errors[] = 'You forgot to enter your user name.';
} else {
$un = trim($_POST['user_name']);
}

if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter your email address.';
} else {
$e = trim($_POST['email']);
}

if (!empty($_POST['pass1'])) {
if ($_POST['pass1'] != $_POST['pass2']) {
$errors[] = 'Your passwords did not match.';
} else {
$p = trim($_POST['pass1']);
}
} else {
$errors[] = 'You forgot to enter your password.';
} 

// Register the user into the database
if (empty($errors)) {
// Make the query to insert new user
$query = "INSERT INTO users (username, email, password, registration_date) VALUES 
('$un', '$e', '$p', NOW() )";

$result = @mysqli_query ($dbc, $query);

if ($result) {
echo '<h1>Thank you!</h1>
<p> You are now a registered user</p>
    <hr />        
    <br />
    <a href = "../PhP/PhP20.html"> Previous Page</a>
    <span class = "next">
    <a href = "../PhP/PhP22.html">Next Page</a></span>
    <br /><br />';

} else {
// If it did not run properly
echo '<h1>Error</h1>
<p>You could not be registered due to an error.</p>';

echo '<p>' . mysqli_error($dbc) . '<br />< br >Query: ' . $query . '</p';
}

mysqli_close($dbc);

exit();

} else {

echo '<h1>Error!</h1>
<p>The following error(s) occurred:<br />';
foreach ($errors as $msg) {
echo " - $msg<br />\n";
}
echo '</p><p>Please try again.</p><p><br /></p>';
}
}
*/
?>
<!--
<h1> Register </h1>

<form action = "" method = "post">
<table>
<tr>
<td> <label>User Name: </label> </td> 
<td> <input type= "text" name = "user_name" size = "15" maxlength = "20" /> </td>
</tr>
<tr>
<td> <label>Email: </label> </td> 
<td> <input type= "text" name = "email" size = "15" maxlength = "40" /> </td>
</tr>
<tr>
<td> <label>Password: </label> </td> 
<td> <input type= "text" name = "pass1" size = "15" maxlength = "40" /> </td>
</tr>
<tr>
<td> <label>Confirm Password: </label> </td> 
<td> <input type= "text" name = "pass2" size = "15" maxlength = "20" /> </td>
</tr>
</table>

<input type = "submit" value = "Register" />
</form> -->
            
        
        <hr />        
        <br />
        <a href = "PhP20.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP22.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 
        