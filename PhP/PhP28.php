<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sending Email - PhP Programming</title>
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

        <h1>Sending Email - PhP Programming</h1>
        
        <h2>Sending Email w/ PHP</h2>
        
            <p>Sending email with PhP is relatively simple.  Store the title, subject and body into different variables.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Email Script
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['name']) &amp;&amp; !empty($_POST['email']) &amp;&amp;
            !empty($_POST['comments']) ) {
                $body = "Name: {$_POST['name']}\n
                \nComments: {$_POST['comments']}";
                $body = wordwrap($body, 70);
            
                mail('user@mail.com', 'Contact Form submission', $body,
                "From: {$_POST['email']}");
                echo '&lt;p>&lt;em>Thank you for contacting me. 
                I will reply shortly.&lt;/em>&lt;/p>';
            
                $_POST = array();
            } else {
                echo '&lt;p style="color: #C00">Please fill out the form completely.
                &lt;/p>';
            }
        }
    &#63;>
    
    &lt;form action=" " method="post">
        &lt;p>Name: &lt;input type="text" name="name" size="30" maxlength="60"
        value="&lt;?php if (isset($_POST['name'])) 
        echo $_POST['name']; &#63;>" />&lt;/p>
        &lt;p>Email: &lt;input type="text" name="email" size="30" maxlength="60"
        value="&lt;?php if (isset($_POST['email'])) 
        echo $_POST['email']; &#63;>" />&lt;/p>
        &lt;p>Comments: &lt;textarea name="comments" rows="5" cols="30">
        &lt;?php if (isset($_POST['comments'])) 
        echo $_POST['comments']; &#63;>&lt;/textarea>&lt;/p>
        &lt;p>&lt;input type="submit" name="submit" value="Send!" />&lt;/p>
    &lt;/form></pre>
    
        <?php # Email Script 
    /*    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (!empty($_POST['name']) && !empty($_POST['email']) &&
        !empty($_POST['comments']) ) {
            $body = "Name: {$_POST['name']}\n
            \nComments: {$_POST['comments']}";
            
            $body = wordwrap($body, 70);
            
            mail('user@mail.com', 'Contact Form submission', $body,
            "From: {$_POST['email']}");
            
            echo '<p><em>Thank you for contacting me. 
            I will reply shortly.</em></p>';
            
            $_POST = array();
            
        } else {
            echo '<p style="color: #C00">Please fill out the form completely.
            </p>';
        }
    } */
    ?>
    
<!--  <form action=" " method="post">
        <p>Name: <input type="text" name="name" size="30" maxlength="60"
        value="<?php if (isset($_POST['name'])) 
        echo $_POST['name']; ?>" /></p>
        <p>Email: <input type="text" name="email" size="30" maxlength="60"
        value="<?php if (isset($_POST['email'])) 
        echo $_POST['email']; ?>" /></p>
        <p>Comments: <textarea name="comments" rows="5" cols="30">
        <?php if (isset($_POST['comments'])) 
        echo $_POST['comments']; ?></textarea></p>
        <p><input type="submit" name="submit" value="Send!" /></p>
    </form> -->
        
        <hr />        
        <br />
        <a href = "PhP27.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP29.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 