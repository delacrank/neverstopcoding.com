<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Outer Joins - MySQL Relational Database</title>
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

        <h1>Outer Joins - MySQL Relational Database</h1>
        
        <h2>Outer Joins</h2>
        
        <p>In inner join is when we link two tables together using a column which exists in both tables (usually as a primary key in one and a foreign key in the other).
            
    <span class = "nl">In the next section we are going to talk about using two types of outer joins.  The joins refer to the location of the tables.  The first join or the left join will place our table to the left side of the combined tables.  The second time of join or the right join will place our table to the right of our combined tables.</span>
        
    <span class = "nl">Let's look at a left join first.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT * FROM customers LEFT JOIN shoes USING (cust_id);</pre><br />
        
        <img src="../Images/Left%20join.png" title="SELECT * FROM customers LEFT JOIN shoes USING (cust_id);" alt = "SELECT * FROM customers LEFT JOIN shoes USING (cust_id);"/>
        
        <p>Now, let's look at a right join.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT * FROM customers RIGHT JOIN shoes USING (cust_id);</pre><br />
        
        <img src="../Images/Right%20join.png" title="SELECT * FROM customers RIGHT JOIN shoes USING (cust_id);" alt = "SELECT * FROM customers RIGHT JOIN shoes USING (cust_id);" />
        
        <hr />
        
        <!-- Group functions -->
        <h3>Using Group functions</h3>
        
            <p>There are several functions which we can use with multiple values in a column instead of just one.
                
    <span class = "nl">However, when we use group functions we have to use another clause instead of the 'WHERE' clause.  This clause is called the 'GROUP BY' clause because instead of identifying a single value we will be using an entire column.</span></p>
        
        <ul id = "li">
            <li><b>AVG():</b> Finds the average from a group of integers.</li>
            <li><b>COUNT():</b> Counts the number of values in a column.</li>
            <li><b>GROUP_CONCAT():</b> Concats the values of the column.</li>
            <li><b>MAX():</b> Finds the largest values of the column.</li>
            <li><b>MIN():</b> Finds the smallest values of the column.</li>
            <li><b>SUM():</b> Finds the total sum of the values of the column.</li>
        </ul>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SELECT MAX(price), shoe_id FROM shoes GROUP BY shoe_id;</pre><br />
        
        <img src="../Images/Groupby.png" title = "SELECT MAX(price), shoe_id FROM shoes GROUP BY shoe_id;" alt = "SELECT MAX(price), shoe_id FROM shoes GROUP BY shoe_id;"/>
        
        <hr />        
        <br />
        <a href = "MySQL10.html"> Previous Page</a>
        <span class = "next">
        <a href = "MySQL12.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 