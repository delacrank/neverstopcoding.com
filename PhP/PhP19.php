<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Forms to Modify data - PhP Programming</title>
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

        <h1>Forms to Modify data - PhP Programming</h1>
        
        <h2>Using forms to modify data</h2>
        
            <p>Alright, now that we have gone over the basic ways to add and display data using php and mysql, we are going to take it one step further and add html to the mix.
                
    <span class ="nl">Previously we worked with html and php to store information in PhP variables using our html forms.  However, we are going to take it one step further, by storing information permanently into an SQL database called MySql.</span>
    
    <span class ="nl">Let's start by creating a table.</span></p>
        
    <em>Markup:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;form action="CreateTable.php" method="post">
        &lt;label>Create Table&lt;/label>
        &lt;input type="text" name="Table">
        &lt;input type="Submit" value="Submit">  
    &lt;/form></pre>
    <br />
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php
        $Table = $_POST['Table'];     
        <span class="comments">// Define variables for our server, username, password and database;</span>
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";
        <span class="comments">// Create a new connection</span>
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        <span class="comments">// Check if table exists, if it does drop it</span>
        $sql = "DROP TABLE IF EXISTS $Table;
        
        -- Create table '$Table'
        CREATE TABLE $Table (
            id INT(2) PRIMARY KEY,
            username VARCHAR(30),
            password VARCHAR(30)
        )";
            
        <span class="comments">// Test if our query ran successfully</span>
        if (mysqli_multi_query($conn, $sql)) {
            echo "Table $Table created successfully";
            } else {
            echo "Error creating table: " . mysqli_error($conn);
            }
            <span class="comments">// Close the connection</span>
            mysqli_close($conn);
            print "&lt;br />&lt;br />&lt;a href=\"Index.html\">Back to Main Page&lt;/a>";  
        ?></pre>
        <br />
        <hr />
        
        <!-- Displaying Data using forms -->
        <h3>Displaying Data using forms</h3>
        
        <p>Alrght, so we were able to successfully create a table using an html form.  We basically just combined elements of our html, PhP and MySql in order to create a table in our database. 
            
        <span class = "nl">In my next example, I will create another form which will display.</span> </p>
        
    <em>Markup:</em>
    <!-- Markup -->
    <pre class="code">
    &lt;form action="ViewTable.php" method="post">
        &lt;label>View Tables&lt;/label>
        &lt;input type="Submit" value="View tables">
    &lt;/form></pre>
    <br />  
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &lt;?php
        <span class="comments">// Define variables for our server, username, password and database;</span>
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";>

        <span class="comments">// Create a new connection</span>
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Test our connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "show tables";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                print $row["Tables_in_mydb"] . "&lt;br />";
            }
        } else {
            echo "0 results";
        }

        <span class="comments">// Close the connection</span>
        mysqli_close($conn);
        
        print "&lt;br />&lt;br />&lt;a href=\"Index.html\">Back to Main Page&lt;/a>";
    &#63;></pre>
        
        <hr />        
        <br />
        <a href = "PhP18.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP20.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 