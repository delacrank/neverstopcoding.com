<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Transactions - MySQL Relational Database</title>
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

        <h1>Transactions - MySQL Relational Database</h1>
        
        <h2>Understanding Transactions</h2>
        
            <p>A transaction is a series of queries which committed to the database upon successful completion. Transactions are important because they allow queries to be undone or rolled back if one or more query has failed.  
        
    <span class = "nl">An example of a transaction can be making a purchase online.  Say for example if you want to buy a pair of sneakers from an online store and you move x amount of money from your account into the stores account, you would need to run about 4 queries.</span>
        
    <span class = "nl">The first query would confirm x amount of money in said account, the second query would decrease x money from that account, the third query would increase the stores account by x and the forth query would confirm that the store account has been increased by x.</span>
        
    <span class = "nl">However, if one of those queries fails then lets return all the of money back to the accounts as if the transactions never happened.  Let's first add a column to our customers and shoes columns and populate those columns with values before we perform any transactions.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">   
    ALTER TABLE shoes ADD inventory INT(3) AFTER price;    
    UPDATE shoes SET inventory = 10 WHERE shoe_id = 1;
    UPDATE shoes SET inventory = 23 WHERE shoe_id = 2;
    UPDATE shoes SET inventory = 5 WHERE shoe_id = 3;
    UPDATE shoes SET inventory = 12 WHERE shoe_id = 4;
    UPDATE shoes SET inventory = 6 WHERE shoe_id = 5;
    UPDATE shoes SET inventory = 14 WHERE shoe_id = 6;
    UPDATE shoes SET inventory = 25 WHERE shoe_id = 7;
    UPDATE shoes SET inventory = 22 WHERE shoe_id = 8;
        
    ALTER TABLE customers ADD balance DEC(6, 2);    
        
    UPDATE customers SET balance = 200.00 WHERE cust_id = 1;
    UPDATE customers SET balance = 300.00 WHERE cust_id = 2;
    UPDATE customers SET balance = 350.00 WHERE cust_id = 3;
    UPDATE customers SET balance = 220.00 WHERE cust_id = 4;
    UPDATE customers SET balance = 430.00 WHERE cust_id = 5;
    UPDATE customers SET balance = 710.00 WHERE cust_id = 6;
    UPDATE customers SET balance = 640.00 WHERE cust_id = 7;
    UPDATE customers SET balance = 210.00 WHERE cust_id = 8;</pre>
        
        <p>The transactions I will be running will deal with decreasing a customers balance according to the price of the shoe he is purchasing.  Additionally, I will be deacreasing the inventory of the shoe by one, however if any of the queries fails then hopefully the values in our tables will be rolled back to their original state.
            
            <span class = "nl">Note: Tables using the ENGINE MyISAM do not support TRANSACTIONS, so definitely do not try to perform TRANSACTIONS on those tables and expect your data to be rolled back because it will not.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    START TRANSACTION;
    
    SELECT cust_id, fname, lname, balance FROM customers;
    UPDATE customers SET balance = (balance - 40) WHERE cust_id = 2;
            
    SELECT shoe_id, price, inventory FROM shoes;
    UPDATE shoes SET inventory = (inventory - 1) WHERE shoe_id = 3;
            
    SELECT c.cust_id, c.fname, c.lname, c.balance, s.shoe_id, s.price, s.inventory 
    FROM customers AS c, shoes AS s WHERE c.cust_id = 2 AND shoe_id = 3;
            
    ROLLBACK;
            
    SELECT c.cust_id, c.fname, c.lname, c.balance, s.shoe_id, s.price, s.inventory 
    FROM customers AS c, shoes AS s WHERE c.cust_id = 2 AND shoe_id = 3;</pre><br />
        
        <img src="../Images/Roll%20Back.png" title="Roll back" alt = "Roll back"/>
        
        <p>In the example above I was able to run multiple statements and updated two different tables, yet all the changes I made could be reversed due to 'ROLLBACK' ability of my TRANSACTION.  If I want to keep the changes made and end the TRANSACTION, I just need to use another command 'COMMIT'.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    COMMIT;</pre>
        
        <p>There are also SAVEPOINT's that you can use during a TRANSACTION incase you're running a really long list of queries and want to roll back only some of the data.  You can roll back the data to a save point by using this command 'ROLLBACK TO SAVEPOINT savepoint_name'.
            
            
    <span class = "nl">To create a SAVEPOINT during a TRANSACTION just type SAVEPOINT savepoint_name.</span></p>
        
        <hr />        
        <br />
        <a href = "MySQL12.html"> Previous Page</a>
        <span class = "next"><a href = "MySQL14.html">Next Page</a></span>
        <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 