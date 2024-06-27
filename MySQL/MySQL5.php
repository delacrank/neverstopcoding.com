<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Limit, Updating &amp; Deleting - MySQL Relational Database</title>
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

        <h1>Limit, Updating &amp; Deleting - MySQL Relational Database</h1>
        
        <h2>Using Limit, Updating &amp; Deleting Data</h2>
        
            <p>In this section we are going to focus on limiting the amount of information a query can generate, updating existing data to store new values and deleting existing data which is no long necessary.</p>

        <hr />
        
        <!-- Limit -->
        <h3>Limit</h3>
            
            <p>This section will be relatively short but important to remember especially when you have an exceptionally large database like ebay, amazon or AT&amp;T. 
                
    <span class = "nl">There are times when you want to query data, yet we want the amount of information contained to a certain number of records or maybe we just want to select the most recently inserted records.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT id, first_name, last_name FROM Login LIMIT 3;</pre>
        
    <br />    
    <img src="../Images/DBLimit.png"  title="SELECT id, first_name, last_name FROM Login LIMIT 3;" alt = "SELECT id, first_name, last_name FROM Login LIMIT 3;"/>  
 
        <p>Above we see that the first name, last name and id are selected from table Login with a limit of 3.  Our query returned a total of 3 results, what if we want to skip the first 4 results and return the next 3.
            
    <span class = "nl">In this sitaution we can set our limit to 4, 3. The first number would set tell our query to move down to the fifth record and then return the next 3 records.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT id, first_name, last_name FROM Login LIMIT 4, 3;</pre>
        
    <br />    
    <img src="../Images/DBLimt3,4.png"  title="SELECT id, first_name, last_name FROM Login LIMIT 4, 3;" alt = "SELECT id, first_name, last_name FROM Login LIMIT 4, 3;"/>  
        
    <hr />        
        
    <!-- Updating Data -->
    <h3>Updating Data</h3>
        
    <p>Moving on to updating data, the purpose of updating data is to edit data that already exists without having to drop and re-insert the record.  We can change either one or all of the fields for the selected record.  In our next example I will update the email from a selected user.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT id, first_name, last_name, email FROM Login WHERE id = '1';
    UPDATE Login SET email='Jc@hotmess.com' WHERE id = '1';
    SELECT id, first_name, last_name, email FROM Login WHERE id = '1'</pre>
        
    <br />    
        <figure>
        <img src="../Images/DBUpdate1.png"  title="SELECT id, first_name, last_name, email FROM Login WHERE id = '1';" alt ="SELECT id, first_name, last_name, email FROM Login WHERE id = '1';" />  
        <figcaption>Before Update</figcaption></figure>
        <br />
        <figure>
          <img src="../Images/DBUpdate2.png"  title="SELECT id, first_name, last_name, email FROM Login WHERE id = '1';" alt ="SELECT id, first_name, last_name, email FROM Login WHERE id = '1';"/> 
        <figcaption>After Update</figcaption></figure>
        
        <p>So we selected the record with a user id equal to one, then we updated the email field equal to a different value and selected the same record to see the changes.
        
    <span class = "nl">Just be sure to be careful when updating fields like primary key or passwords as sensitive information can become forgotten or lost.</span></p>
        
    <hr />
        
    <!-- Deleting Data -->
    <h3>Deleting Data</h3>
        
        <p>Deleting data should be handled with the same care as updating it.  Select the desired field first before deleting it to ensure you have the right record.
            
    <span class = "nl">For our next example we are going to delete the record we just updated, with the user id equal to one.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    SELECT id, first_name, last_name, email FROM Login;
    DELETE FROM Login WHERE id = '1';
    SELECT id, first_name, last_name, email FROM Login;
    SELECT id, first_name, last_name, email FROM Login WHERE id='1';</pre>
        
    <br />    
        <figure>
        <img src="../Images/DBselect*.png"  title="SELECT id, first_name, last_name, email FROM Login;" alt="SELECT id, first_name, last_name, email FROM Login;" /> 
        <figcaption>Before delete</figcaption></figure>
        <br />
         <img src="../Images/DBselect*2.png"  title="SELECT id, first_name, last_name, email FROM Login;" alt="SELECT id, first_name, last_name, email FROM Login;" /><br /><br />
        <figure>
        <img src="../Images/DBempty.png"  title="SELECT id, first_name, last_name, email FROM Login;" />
        <figcaption>After delete</figcaption></figure><br />
        
    <p>Upon trying to query the record based on the user id, our database returns an empty set.  Of course we can just use our INSERT INTO function to put back the same record if we want to.  However, this is good function for getting rid of data which we no longer require in our database.</p>
        
        <hr />
        <br />
        <a href = "MySQL4.html"> Previous Page</a>
        <span class = "next">
            <a href = "MySQL6.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html> 