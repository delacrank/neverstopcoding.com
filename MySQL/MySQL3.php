<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Modifying Selections - MySQL Relational Database</title>
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

        <h1>Modifying Selections - MySQL Relational Database</h1>
        
        <h2>Modifying Selections</h2>
        
            <p>Previously I showed you how to create a database, select it, create a table and insert values into that table.  Then I showed you how to query the data in that table and even the composition of the table itself.
                
                <span class = "nl">From here we can go a little deeper and modify our table to hold more information and choose what sort of data we want to select from it.</span>
            
        <span class = "nl">There is one of two ways to make changes to our existing table, we can either drop it create it again with our new information and add our old values to our new columns.  However, if we had already stored in the table we might want to just use the 'ALTER TABLE table_name' query to add our new column or our 'MODIFY column_name' to make changes to the column.</span>
        
        <span class = "nl">However since we are just beginning to learn SQL let's just drop it and create it again.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    DROP TABLE Login;
        
    CREATE TABLE Login (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR (50) NOT NULL,
        last_name VARCHAR (50) NOT NULL,
        email VARCHAR (50) NOT NULL,
        password VARCHAR (50) NOT NULL,
        registration_date  DATETIME NOT NULL 
    );</pre>
        
        <p>In this new version of our login table we created three additional fields increasing number of fields to a total of six.  Furthermore we added a few additional attributes to each of our fields with the exception of two: phone_number and address.  </p>
        
        <ul class = "li">
            <li><b>Unsigned:</b> Ensures that there are no negative numbers which increasing the range of numbers which can be used (example: -10, 10 to 0, 20)</li>
            <li><b>Auto_Increment:</b> Increases the number by one for every new value/record.</li>
            <li><b>Not Null:</b> Ensures that the field will never be left empty, this is extremely important for fields like primary keys.</li>
            <li><b>Datetime:</b> Provides a time stamp for when the record was created.</li>
        </ul>
        
        <p>Alright, now that we have remade our table let's add some new data into our columns.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    INSERT INTO Login VALUES 
        ( NULL, 'Carlos', 'Boogie', 'Jc@june.com', SHA1('silly'), NOW());
    INSERT INTO Login VALUES 
        ( NULL, 'Jane', 'Eyre', 'Jack@june.com', SHA1('beans'), NOW()); 
    INSERT INTO Login VALUES 
        ( NULL, 'Johhny', 'Love', 'Jill@june.com', SHA1('funny'), NOW());
    INSERT INTO Login VALUES 
        ( NULL, 'Moon', 'Pie', 'John@june.com', SHA1('bounce'), NOW()); 
    INSERT INTO Login VALUES 
        ( NULL, 'Miss', 'Hannigan', 'Juniper@june.com', SHA1('games'), NOW()); 
    INSERT INTO Login VALUES 
        ( NULL, 'Double', 'Dragon', 'Jasper@june.com', SHA1('password'), NOW()); 
    INSERT INTO Login VALUES 
        ( NULL, 'Jump', 'City', 'Jason@june.com', SHA1('gucci'), NOW());</pre>
<br />        
    
    <em>Image:</em><br />
    <a href="../Images/DBlogin.png"  title="SHOW * FROM Login;" >SELECT * FROM Login;</a>
    
    <p>The picture was slightly large so I just left a link for it above.  As you can see my auto increment managed to provide a primary key for every entry, also I used two functions when creating records for my table.</p>
        
    <ul class = "li">
        <li><b>SHA1():</b> This function will encrypt the password so even if it is queried it will not be revealed.</li>
        <li><b>NOW():</b> Provides a time stamp.</li>
    </ul>
    <hr />
        
    <!-- modifying select query -->
    <h3>Selecting certain Records</h3>
    
        <p>Now that we have a larger table with more data, I am going to try some other queries which will control which records get selected and/or which fields from those records are selected.<br /><br />
    
    Suppose I only wanted to display users with the primary key of 1. I could type 'SELECT * FROM Login WHERE id = 1;'</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT * FROM Login WHERE id = 1;</pre>
    
        <p>Now let's suppose I want to just see the users first and last name only, 'SELECT first_name, last_name FROM Login WHERE id = 1;'.<br /><br />
            
        The results of this query are going to be 1 user selected, the one with the primary key of 1 which is the first user we created 'Carlos, Boogie';</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT first_name, last_name FROM Login WHERE id = 1;</pre>
   
        <p>As long as I know the name of the field and the name of the table I can choose which data is selected and I find the name of the fields by using the 'SHOW COLUMNS FROM tablename;' query. 
    
    <span class = "nl">Now let's take it one step further, how about if I want to select users which have the letter 'J' in their first name.</span> </p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT id, first_name, last_name FROM Login WHERE first_name LIKE 'J%';</pre>
        
    <br />
    <img src="../Images/DBlikeJ.png"  title="SELECT id, first_name, last_name FROM Login WHERE first_name LIKE 'J%';" alt = "SELECT id, first_name, last_name FROM Login WHERE first_name LIKE 'J%';"/>
    
    <p>Here we see 3 out of 7 users have a first name that begins with the letter 'J'.</p>
        
    <hr />        
    <br />
    <a href = "MySQL2.html"> Previous Page</a>
    <span class = "next">
    <a href = "MySQL4.html">Next Page</a></span>
        <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 