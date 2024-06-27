<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Importing and Extracting to MySQL - PhP Programming</title>
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

        <h1>Importing and Extracting to MySQL - PhP Programming</h1>
        
         <!-- Our first Database -->
        <h2>Importing and Extracting information</h2>
            
            <p>The purpose of having a database is to store and retrieve information from our server.  One of the ways we can do this is by using a language like php to access that content.
                
    <span class = "nl">However, in order to tell the database what type of content we want to export or import we need to speak the only language we databases can understand, 'SQL (Structured Query Language)'.</span>
        
    <span class = "nl">Let's start by creating a Database and a Table using our php.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php
        <span class="comments">// Define variables for our server, username, password and database;</span>          
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";          
            
        <span class="comments">// Create database</span>
        $sql = "CREATE DATABASE IF NOT EXISTS myDB";
            
        <span class="comments">// Create a new connection</span>
        $conn = mysqli_connect($servername, $username, $password, $dbname);
            
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully &lt;br />&lt;br />";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }
        
        <span class="comments">// A second sql query will be stored in variable $sql1</span>
        <span class="comments">// Check if table exists, if it does drop it</span>
        $sql1 = "DROP TABLE IF EXISTS MyUsers;
    
        <span class="comments">-- Create table 'MyUsers'</span>           
        CREATE TABLE MyUsers (
            id INT(2) PRIMARY KEY,
            username VARCHAR(30),
            password VARCHAR(30)
        );      
            
        <span class="comments">-- Insert these values into our table's records</span>
        INSERT INTO `MyUsers` VALUES (00, 'Carlos', 'Carlos');
        INSERT INTO `MyUsers` VALUES (01, 'Jane', 'Jane');
        INSERT INTO `MyUsers` VALUES (02, 'Jack', 'Jack')";           

        <span class="comments">// Test if our query ran successfully</span>
        if (mysqli_multi_query($conn, $sql1)) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }              
            
        <span class="comments">// Close the connection</span>
        mysqli_close($conn);
    ?></pre>      
            
    <p>Once again we used our 'mysqli_connect' function in order to link our website to our server.  However, we had to define variables for our connection function and query function first.
        
        <span class ="nl">If you notice we ran multiple SQL queries for our third PHP variable '$sql1', however our PHP has to look for every query in order for our function to suceed properly.  This time we used a different function, 'mysqli_multi_query' in order to create our table and insert values into that table.</span>
        
        <span class ="nl">Alright, so we can easily check our database to see if the database, table and values were inserted into that table.  However, how do we display that information on our website?</span></p>
        
<hr />
<!-- Querying Data -->
<h3>Querying Data from our Database</h3>
        
        <p> In my next example I will run a query which will select every record and field from our newly created table.  Then I will use some more PhP functions to display that information on our website.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php    
        <span class="comments">// Declare a counter</span>           
        $num = 0;
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";
        $conn1 = mysqli_connect($servername, $username, $password, $dbname);

        <span class="comments">// Test our connection</span>          
        if (!$conn1) {
            die("Connection failed: " . mysqli_connect_error());
        }

        <span class="comments">// Select everything from table MyUsers </span>
        $sql2 = "SELECT * FROM MyUsers";
        $result = mysqli_query($conn1, $sql2);

        <span class="comments">// Perform this while loop if our table has any records</span>   
        if (mysqli_num_rows($result) > 0) {
            <span class="comments">// Store our query in variable $row</span>
            while($row = mysqli_fetch_assoc($result)) {
            <span class="comments">// Display our data based on our column names</span>
            echo "&lt;b>Record $num:&lt;/b>&amp;emsp; "
            . $row["id"]. " " . $row["username"]. " " . $row["password"]. "&lt;br>";
            ++$num;
            }
        } else {
            <span class="comments">// If our table has no records display this instead</span>
            echo "0 results";
        }
        mysqli_close($conn1);
    &#63;></pre>
    <br />
        
        <hr />        
        <br />
        <a href = "PhP16.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP18.html">Next Page</a></span>
        <br />
        <br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 