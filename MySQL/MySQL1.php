<!DOCTYPE html>
<html>        
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>First Database - MySQL Relational Database</title>
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
<?php include('..//Includes//Left_MySQL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>First Database - MySQL Relational Database</h1>
        
        <!-- Our first Database -->
        <h2>Our first Database</h2>
        
            <p>If you installed XAMPP then using the MySQL database should be very simple.  You should just type into your web browser 'localhost/phpmyadmin/' and from there you can type in 'root' as the user name and leave the password blank. You can find the download for xampp here <a  href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a>.  However, you can also just use the mysql database seperately over here <a href="http://www.mysql.com/downloads/" target="_blank">MySql</a>.
    
                <span class = "nl">I would probably change the password ASAP for the root user as it is a security liability. However, if you aren't going to be hosting your database from your local machine, then you should probably use the MySQL database on your hosting site to create your database.</span>
        
        <span class = "nl"> am using a hosting company to host this site, so I would have to go to the control panel and select the MySQL Database option to do this. </span> 
        
        <span class = "nl"> If you want to access your MySql database from a MacOS Terminal then type in 'cd /Applications/XAMPP/xamppfiles/bin;' to navigate there.  BIN means binary files, and you can then open the file using the './mysql -u <u>username</u> -p' (change the username to root or your own username).</span> </p>
        
        <hr />
                
        <!-- Building a table -->
        <h3>Building a Table</h3>

            <p>Most of the commands in MySQL can be written either using the command line or accessed using your web browser.  If we are going to build a database for our website we should probably learn some SQL code in order to create tables and insert data into them.
                
        <span class = "nl">The alternative is using the web browser to build our tables for us, however if we are going to be using PhP we are going to also have to know how SQL code reguardless.</span>
        
        <span class = "nl">SQL code is usually a script which executed from top to bottom everytime.  Of course if we have data stored in our database, then we should be careful with droping tables and making changes to an existing DB.</span>
        
        <span class = "nl">Let's look at an example of a script. When creating sql scripts be sure to provide the file with the correct extension '.sql', maybe we call this one 'Login.sql'.</span>
        
        <span class = "nl"> In order to run this script, we simple need to navigate to our database in our 'phpmyadmin' and select the SQL tab in between Structure and Search. If you already have a prewritten script you can always import it using the import tab.</span></p>
        
        <figure>
        <img src="../Images/Screen%20Shot%202015-09-30%20at%2010.44.58%20PM.png" width="630" height="250" title="Sql Script Image" alt = "SQL script image">
        <figcaption style="text-align: center">^^^ write your scripts here ^^^</figcaption></figure><br />
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    <span class="comments">-- This is how we comment in SQL</span>
    -- Login.sql
            
    <span class="comments">-- Drop existing table</span>
    DROP TABLE IF EXISTS Login;
            
    <span class="comments">-- Create the table</span>
    CREATE TABLE Login (
        <span class="comments">-- Add these records</span>
        ID int PRIMARY KEY,
        UserName VARCHAR (50),
        PassWord VARCHAR (50)
    );
            
    <span class="comments">-- Add these fields into our records</span>
    INSERT INTO Login VALUES
    <span class="comments">-- Use quotes for our varchar values</span>
        (0, 'Carlos', 'Carlos');
    INSERT INTO Login VALUES
        (1, 'Jack', 'Jack');
    INSERT INTO Login VALUES
        (2, 'June', 'June');</pre>
        
        <p>We created a table, but how do we test to see that our table is working properly, how do we retreive the values from our table or organize which values we wish to select.
            
        <span class = "nl"> This can be done either through our phpmyadmin using the GUI (graphic user interface) or simply through our command line.</span></p>
        
        <hr />        
        <br />
        <a href = "MySQL.html"> Previous Page</a>
        <span class = "next">
        <a href = "MySQL2.html">Next Page</a></span>
        <br /><br />
    </div>
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 