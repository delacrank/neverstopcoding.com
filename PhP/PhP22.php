<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Updating MySQL Records - PhP Programming</title>
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

        <h1>Updating MySQL Records - PhP Programming</h1>

        <h2>Updating Records</h2>
        
    <p>In this next section I am going to cover how to use a function called mysqli_real_escape_string() to protect our html forms from SQL injections.  Furthermore, I will go over on how to update existing records.
                
    <span class ="nl">We can use the same PhP code as last time with changes being made in the queries being ran.  Also, I will use another function called require() which executes the script in the arguement of the function.</span></p>
        
    <em>Code: Connection string</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php # Connection String
            
        <span class="comments">// Set the database access information</span>
        DEFINE ('DB_USER', 'username');
        DEFINE ('DB_PASSWORD', 'password');
        DEFINE ('DB_HOST', 'server');
        DEFINE ('DB_NAME', 'database');
            
        <span class="comments">// Make the connection</span>
        $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('Could not establish a connection to the MySQL: ' . mysqli_connect_error() );
    &#63;></pre>
    <br />
        
    <em>Code: Update script</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php  # Update Script
            
        <span class="comments">// Check for form submission</span>
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            <span class="comments">// Connect to the db</span>
            require ('connection_string.php');
            <span class="comments">// Store our errors in this array</span>
            $errors = array();
            
            <span class="comments">// validation for input fields ////////////////////////////////////////</span>
            if (empty($_POST['email'])) {
                $errors[] = 'You forgot to enter your email address.';    
            } else {
                <span class="comments">// protect against sql injections</span>
                $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
            }
                
            if (!empty($_POST['pass'])) {
                <span class="comments">// protect against sql injections</span>
                $p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
            } else {
                $errors[] = 'You forgot to enter your current password.';
            }
                
            if (!empty($_POST['pass1'])) {
                if ($_POST['pass1'] != $_POST['pass2']) {
                    $errors[] = 'Your passwords did not match.';
                } else {
                    <span class="comments">// protect against sql injections</span>
                    $np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
                }
            } else {
                $errors[] = 'You forgot to enter your new password.';
            }
            
            <span class="comments">// Update user password ////////////////////////////////////////</span>         
            if (empty($errors)) {
                <span class="comments">// Ensure that the correct user is selected </span>
                $query = "SELECT user_id FROM users WHERE (email='$e' AND password='$p' )";
                <span class="comments">// Set result equal to the users record</span>
                $result = @mysqli_query ($dbc, $query);
                <span class="comments">// Check to query returned a result</span>
                $num = @mysqli_num_rows($result);
                <span class="comments">// If the query returned a value then do this</span>
                if ($num == 1) {                 
                    <span class="comments">// Get user id</span>
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    <span class="comments">// Update the record with new information</span>
                    $query = "UPDATE users SET password = '$np' WHERE user_id = $row[0]";      
                    $result = @mysqli_query($dbc, $query);
                    <span class="comments">// If everything ran successfully</span>       
                    if (mysqli_affected_rows($dbc) == 1) {
                        echo '&lt;h1> Thank You! &lt;/h1>
                        &lt;p> Your password has been updated &lt;/p>';
                    } else {
                        <span class="comments">// Error message</span>
                        echo '&lt;h1> System Error &lt;/h1>
                        &lt;p> Your password couldn\'t not be changed due to a system error. &lt;/p>';
                }  
                mysqli_close($dbc);
                exit();
            } else {
                echo '&lt;h1> Error &lt;/h1>
                &lt;p> The email address and password did not match those on file.&lt;/p>';
            } 
        } else {
            <span class="comments">// Report Errors ////////////////////////////////////////</span> 
            echo '&lt;h1>Error!&lt;/h1>
		    &lt;p>The following error(s) occurred:&lt;br />';
		        foreach ($errors as $msg) { 
                    echo " - $msg&lt;br />\n";
                }
                echo '&lt;/p>&lt;p>Please try again.&lt;/p>&lt;p>&lt;br />&lt;/p>';
            }
            mysqli_close($dbc);
        }
    &#63;></pre><br />
        
    <em>Markup:</em>
    <!-- Code -->
    <pre class="code">
    &lt;h1> Change your password &lt;/h1>
        &lt;form action = "" method = "post">
            &lt;table>
                &lt;tr>
                    &lt;td> &lt;label>Email: &lt;/label> &lt;/td>
                    &lt;td> &lt;input type= "text" name = "email" size = "15" maxlength = "60" 
                    value = "&lt;?php if (isset($_POST['email'])) echo $_POST['email']; &#63;>" /> &lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td> &lt;label>Current Pass: &lt;/label> &lt;/td> 
                    &lt;td> &lt;input type= "text" name = "pass" size = "15" maxlength = "40"  /> &lt;/td> 
                &lt;/tr>
                &lt;tr>
                    &lt;td> &lt;label>New Password: &lt;/label> &lt;/td> 
                    &lt;td> &lt;input type= "text" name = "pass1" size = "15" maxlength = "40" /> &lt;/td> 
                &lt;/tr>
                &lt;tr>
                    &lt;td> &lt;label>Confirm Password: &lt;/label> &lt;/td>            
                    &lt;td> &lt;input type= "text" name = "pass2" size = "15" maxlength = "40" /> &lt;/td> 
                &lt;/tr>
            &lt;/table>
            &lt;input type = "submit" value = "Change Password" />
        &lt;/form></pre>
        
<?php # Update Script
/*
// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Connect to the db
require ('connection_string.php');

// Store our errors in this array
$errors = array();

// validation for input fields
if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter your email address.';
} else {
// protect against sql injections
$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
}

if (!empty($_POST['pass'])) {
// protect against sql injections
$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
} else {
$errors[] = 'You forgot to enter your current password.';
} 

if (!empty($_POST['pass1'])) {
if ($_POST['pass1'] != $_POST['pass2']) {
$errors[] = 'Your passwords did not match.';
} else {
// protect against sql injections
$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
}
} else {
$errors[] = 'You forgot to enter your new password.';
} 

// Register the user into the database
if (empty($errors)) {
// Ensure that the correct user is selected
$query = "SELECT user_id FROM users WHERE (email='$e' AND password='$p' )";
// Set result equal to the users record
$result = @mysqli_query ($dbc, $query);
// Check to query returned a result
$num = @mysqli_num_rows($result);
// If the query returned a value then do this
if ($num == 1) {

// Get user id
$row = mysqli_fetch_array($result, MYSQLI_NUM);

// Update the record with new information
$query = "UPDATE users SET password = '$np' WHERE user_id = $row[0]";
$result = @mysqli_query($dbc, $query);

// If everything ran successfully
if (mysqli_affected_rows($dbc) == 1) {
echo '<h1> Thank You! </h1>
<p> Your password has been updated </p>  
    <hr />        
    <br />
    <a href = "../PhP/PhP21.html"> Previous Page</a>
    <span class = "next">
    <a href = "../PhP/PhP23.html">Next Page</a></span>
    <br /><br />';
} else {
// Error message
echo '<h1> System Error </h1>
<p> Your password couldn\'t not be changed due to a system error. </p>';
}

mysqli_close($dbc);

exit();

} else {
echo '<h1> Error </h1> <p> The email address and password did not match those on file.</p>';
}

} else {
echo '<h1>Error!</h1>
<p>The following error(s) occurred:<br />';
foreach ($errors as $msg) {
echo " - $msg<br />\n";
}
echo '</p><p>Please try again.</p><p><br /></p>';
}

mysqli_close($dbc); }
*/
?>
        
<!-- <h1> Change your password </h1>

<form action = "" method = "post">
<table>
<tr>
<td> <label>Email: </label> </td> 
<td> <input type= "text" name = "email" size = "15" maxlength = "60" value = "<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"   /> </td>
</tr>
<tr>
<td> <label>Current Pass: </label> </td> 
<td> <input type= "text" name = "pass" size = "15" maxlength = "40" /> </td>
</tr>
<tr>
<td> <label>New Password: </label> </td> 
<td> <input type= "text" name = "pass1" size = "15" maxlength = "40" /> </td>
</tr>
<tr>
<td> <label>Confirm Password: </label> </td> 
<td> <input type= "text" name = "pass2" size = "15" maxlength = "40" /> </td>
</tr>
</table>

<input type = "submit" value = "Change Password" />
</form> -->
        
    <p>The script is broken up into 3 sections, the first section deals with validating that all the inputs are properly filled out and protected against SQL injections.
        
        <span class = "nl">The second section deals with matching the values in our forms for email and password against existing values stored within the record.  Then updating the password field with the new value if those records match.</span>
        
        <span class = "nl">The last section deals with reporting on errors which prevented us from updating the record with a new password.</span></p>
        
        <hr />        
        <br />
        <a href = "PhP21.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP23.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 