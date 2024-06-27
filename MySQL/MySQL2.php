<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Select statement - MySQL Relational Database</title>
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

        <h1>Select statement - MySQL Relational Database</h1>
        
       <h2>Using SELECT to query Data</h2>
        
            <p>In our last page we learned how to drop an existing table, create a table and insert some values into that table.  In this section we are going to learn how to query some of the data we inserted into our table.
        <span class = "nl">One of the ways I am going to run queries for my database is by using my command line.  This can also be done using the phpMyAdmin tool through the browser, but I find it faster to just type in commands through the command line.</span>
            
        <span class = "nl">Previously, I showed you how to navigate to your mysql database using xampp by using the change directory command and typing in the directory '/applications/xampp/xamppfiles/bin'. Once your open your mysql application by typing in './mysql -u username -p' we can begin to start writing some queries.</span>
            
        <span class = "nl">One of the first commands you might want to learn is the show databases command, always end your queries with the semicolon.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SHOW databases;</pre>
        
        <p>If you don't have any databases or want to create a new one, you can just create one with the query 'CREATE DATABASE databasename;' (I'm going to use myDB for this example). Then you can select your database with the 'use' command.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    CREATE DATABASE myDB;
            
    USE myDB;</pre>
        
        <p>If the query worked correctly then the words 'Query OK, 1 row affected.' followed by 'Database changed' should have been displayed otherwise it will usually return either an error message or returned 0 rows.
    
    <span class = "nl">We can always drop the database if we want to change the name or if we want to re-create it under the same name using 'DROP DATABASE databasename;'.</span>
    
    <span class = "nl">Now let's view our tables 'show tables'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SHOW tables;</pre>
        
        <p>At this point you should be able to see all the tables displayed in the database you selected.  From here you can select the contents of the table you want to view by typing in 'SELECT * FROM Login;'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SELECT * FROM Login;</pre>
    <br /><br />
        
    <figure >
    <img src="../Images/DBquery.png"  title="SELECT * FROM Login" alt = "Select * from login" />
    <figcaption>A select query using the command line.</figcaption>
    </figure>
        
    <p>Alright, so we were able to view the values contained within our table.  What if we wanted to see the contents of the columns, containing the datatype, how many chars or numbers allowed per column, whether the column can contain null values, which columns are primary keys etc.  For this we can use the query 'show columns from tablename;'</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SHOW COLUMNS FROM Login;</pre><br /><br />
        
    <img src="../Images/DBshowcolumns.png"  title="SHOW COLUMNS FROM Login;" alt = "show columsn from login" />

        <hr />        
        <br />
        <a href = "MySQL1.html"> Previous Page</a>
        <span class = "next">
            <a href = "MySQL3.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 