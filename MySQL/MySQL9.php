<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Joins - MySQL Relational Database</title>
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

        <h1>Joins - MySQL Relational Database</h1>
        
        <h2>Using Joins</h2>
        
            <p>So far we have gone over how to create and insert values into a table.  Additionally, we learned how to select, modify, delete, add or alter values in our table(s).
                
    <span class = "nl">In this next section we are going to go over how to select or modify multiple values from different tables.  One of the key components to using joins is being able to identify our values using keys (primary, etc.).</span>
                
    <span class = "nl">So, if you don't have more than one table or if those tables don't both have a column which has a primary key, then you won't be able to join the two tables using some of the joins I will be mentioning.</span></p>
        
        <hr />
        
        <!-- Inner Join -->
        <h3>Equi Join</h3>
        
            <p>The most often and default join is called an Inner join. For the sake of this example I am going to just create two tables to show how we can join them.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    CREATE TABLE shoes (
        shoe_id INT (2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        size VARCHAR (2),
        name VARCHAR (10),
        brand VARCHAR (10),
        price INT (5) );
            
    INSERT INTO shoes VALUES 
        ( null, 10, 'blue_bell', 'addidas', FORMAT(40, 2) ),
        ( null, 11, 'purple_moon', 'addidas', FORMAT(40, 2) ),
        ( null, 10, 'blaze', 'addidas', FORMAT(40, 2) ),
        ( null, 10, 'dunker', 'fila', FORMAT(40, 2) ),
        ( null, 10, 'flash', 'fila', FORMAT(40, 2) ),
        ( null, 10, 'jumps', 'fila', FORMAT(40, 2) ),
        ( null, 10, 'backflip', 'nike', FORMAT(40, 2) ),
        ( null, 10, 'runners', 'nike', FORMAT(40, 2) );
            
    CREATE TABLE customers (
        cust_id INT (2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR (20),
        lname VARCHAR (20),
        city VARCHAR (30),
        state VARCHAR (2) );  
            
    INSERT INTO customers VALUES 
        ( null, 'john', 'charles', 'brooklyn', 'ny' ),
        ( null, 'jason', 'miles', 'queens', 'ny' ),
        ( null, 'david', 'lee', 'brooklyn', 'ny' ),
        ( null,  'peter', 'penil', 'brooklyn', 'ny' ),
        ( null, 'paul', 'vice', 'bronx', 'ny'  ),
        ( null, 'talon', 'moon', 'manhattan', 'ny'  ),
        ( null,  'manson', 'siphon', 'brooklyn', 'ny' );</pre>
        
        <p>Let's look at the contents of these tables before we try to join them.</p>
        
        <h1>Shoes</h1>
        <img src="../Images/table_shoes.png"  title="SELECT * FROM shoes;" alt ="SELECT * FROM shoes;" />
        
        <h1>Customers</h1>
        <img src="../Images/table_customer.png" title="SELECT * FROM customers;" alt="SELECT * FROM customers;"/>
        
        <p>Alright, now let's try an inner join in order view some contents from both tables, let's start out by viewing all the content first.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT * FROM customers INNER JOIN shoes ON 
    customers.cust_id = shoes.shoe_id;</pre>
        
    <h1>Equijoin customers and shoes</h1>
    <img src="../Images/Inner%20Join.png"  title="SELECT * FROM customers;" alt = "SELECT * FROM customers;"/>
    <br />
    <hr />
        
        <!-- why use joins -->
        <h3>Why use joins?</h3>
        
            <p>So some of you may be wondering, what the purpose of using a join is?  Can't we just select everything from out tables like this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SELECT * FROM customers, shoes;</pre>
        
    <p>Alright, the problem with using queries like the one above is that our database will pull every variation of the result.  So instead of returning only 8 rows, 64 rows would be returned.</p>
        
    <hr />        
    <br />
    <a href = "MySQL8.html"> Previous Page</a>
    <span class = "next">
    <a href = "MySQL10.html">Next Page</a></span>
    <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 