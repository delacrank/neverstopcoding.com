<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Full Text Searches - MySQL Relational Database</title>
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

        <h1>Full Text Searches - MySQL Relational Database</h1>
        
        <h2>Full Text Searches</h2>
        
            <p>Certain operations can only be performed by certain table types.  Previously we learned that some of our foreign key constraints could only be maintained with InnoDB table types.
        
    <span class = "nl">In this section we are going to work on learning to use other functions which are constrained to a certain table type.  This type is called MyISAM and it allows us to use FULLTEXT searches.</span>
        
    <span clas = "nl">A full text search is when we can perform a search on a table to find any value which contains a matching string or character.</span>
        
                <span clas = "nl">The first thing we can do is find out the type of table we have by checking its status.  We can also see the engine of the table if we use the 'SHOW CREATE TABLE table_name\G' command.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SHOW TABLE STATUS\G</pre>
    
        <p>By ending the line with a backslash uppercase 'G' mysql client will display the results vertically instead of horizontally.  If I wanted to see the status of just my 'shoes' table I can use the 'LIKE' condition.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SHOW TABLE STATUS LIKE 'shoes' \G 
    SHOW CREATE TABLE shoes \G</pre>
    <br />
        
    <img src="../Images/table%20status.png" title="SHOW TABLE STATUS LIKE 'shoes' \G" alt = "SHOW TABLE STATUS LIKE 'shoes' \G" />
        
    <p>Below we can see the Engine of our table, it's currently InnoDB, we can change it using an 'ALTER TABLE' command.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ALTER TABLE shoes ENGINE = MyISAM;</pre>
        
        <p>The problem with trying to change the table type to MyISAM from InnoDB is that the MyISAM doesn't support foreign keys so we need to drop our foreign key.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ALTER TABLE shoes DROP FOREIGN KEY cust_id;</pre>
        
        <p>However, if we still get an error here and then use the 'SHOW CREATE TABLE shoes;' command to reveal the CONSTRAINT name and then drop the foreign key based on that name instead of the column name.
            
            <span class = "nl">At this point you should be able to change the table type or table engine to MyISAM.</span>
        
            <span class = "nl">Once we are able to change the table type we go add our FULLTEXT index to our table, just know that adding this index will require more time for the database to insert, update or delete values from our columns.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ALTER TABLE shoes ADD FULLTEXT (name, brand);</pre>
        
        <p>In order to create this full text index we require a the columns from which values will be checked or matched against. 
            
    <span class = "nl">To run queries using are newly created index we need to use several key words one being 'MATCH' the other is 'AGAINST'.  Below I will show an example of a fulltext query.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SELECT name, brand FROM shoes WHERE MATCH (name, brand) AGAINST ('fila');</pre>
        
        <br />
        
        <img src="../Images/fulltext.png" title="SELECT name, brand FROM shoes WHERE MATCH (name, brand) AGAINST ('fila');" alt = "SELECT name, brand FROM shoes WHERE MATCH (name, brand) AGAINST ('fila');"/>
        
        <p>Granted we only returned 3 rows, however imagine if we had a table which had over a 100 rows and 20 columns worth of data.  Finding every entry with the word 'fila' could be very useful, especially if we didn't know where to begin.</p>
        
        <hr />        
        <br />
        <a href = "MySQL11.html"> Previous Page</a>
        <span class = "next">
        <a href = "MySQL13.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 