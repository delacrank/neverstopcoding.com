<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Creating &amp; Modifying Users - MySQL Relational Database</title>
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

        <h1>Creating &amp; Modifying Users - MySQL Relational Database</h1>
        
        <p>Alright, so in this section we are going to talk about creating and modifying users. The way we can do this is by using the 'GRANT' keyword, this allows you to add or remove privileges to users.
        
    <span class = "nl">One thing to be aware of is keeping users which have access to the database with limited privileges as a means of making the system usable to people who need to write queries or create tables. Yet, limiting their privileges to ensure that the system remains secure and that users don't accident remove or access sensitive data.</span></p>
        
    <h2>Creating a User</h2>
        
        <p>If we ae using xampp you can access the 'MySql' through the command line interface by going to the '/Applications/Xampp/Xamppfiles/bin' folder and typing in './mysql -u username -p' then enter your password. 
            
        <span class = "nl">Or you can log in as the root by changing the username name to root, if you want to see what the existing users are write this query in 'SELECT User FROM mysql.user;'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    cd /Applications/xampp/xamppfiles/bin
    ./mysql -u root -p
    SELECT User FROM mysql.user;</pre>
        
    <p>Using the root we can see the different users that exist within our current host. We can also use the 'SHOW GRANTS;' query to display the amount of grants a user has. We can also use 'SHOW DATABASES' and 'SHOW TABLES' to display the databases or tables available.
        
    <span class = "nl">Alright, so let's move on to creating a user. First we must specify the privileges, then describe the database and tables, then describe the user and finally the password. Let's look at an example below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Grant privileges</span>
    GRANT ALL 
    <span class = "comments"># Specify the Database and Tables</span>
    ON *.*
    <span class = "comments"># Name the User and Specify Password</span>
    TO 'User123'@'localhost' IDENTIFIED BY 'password123'; </pre>
        
        <p>We can quickly remove this new user using the delete command, like so. We can also reset the privileges using 'FLUSH priviedges' command.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
   DELETE FROM mysql.user WHERE user='User123';
   FLUSH privileges;</pre>
        
        <p>Let's say we don't want to remove the user, instead we want to minize the amount of privileges he/she has. This can be accomplished using the 'revoke' command. You can also decide which privileges can be added or removed using this list below.</p>
        
    <ul id="li">
        <li><b>Select:</b> Allows users to select rows from tables.</li>
        <li><b>Insert:</b> Allows users to insert rows into tables.</li>
        <li><b>Update:</b> Allows users to modify existing table rows.</li>
        <li><b>Delete:</b> Allows users to delete existing table rows.</li>
        <li><b>Index:</b> Allows users to create and drop indexes on tables.</li>
        <li><b>Alter:</b> Allows users to alter the structure of existing tables.</li>
        <li><b>Create:</b> Allows users to create databases or tables.</li>
        <li><b>Drop:</b> Allows users to drop tables or databases. </li>
    </ul>
        
        <p>So if we wanted to create a user with minium privileges we can use the 'useage' keyword instead of 'all' or we could decide how many privileges and on which databases and tables they could use those privileges.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Minium privileges</span>
    GRANT usage 
    <span class = "comments"># databaseName.tableName</span>
    ON delacrank.customers 
    <span class = "comments"># specify the user</span>
    TO user123;
    
    <span class = "comments"># Or limit the amont of privileges</span>
    GRANT select, insert, update, delete
    <span class = "comments"># You can only specify one database and table at a time</span>
    ON delacrank.customers
    TO user123;
    
    <span class = "comments"># Let's see the grants we created for this user</span>
    <span class = "comments"># Specify the 'username' @ 'hostname', use '%' for wildcard</span>
    SHOW GRANTS for 'user123'@'%';</pre>
        
    <p>We can also revoke privileges from users using the revoke command. This is very simple to do, just remember to flush privileges for it to take effect.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Revoke privileges</span>
    REVOKE update, delete
    ON delacrank.customers
    FROM user123;</pre>
        
    <p>Be sure to note the table names and database names you grant to your users, because you cannot revoke a priviledge that wasn't granted to a certain database or table name.
        
    <span class = "nl">We can take it one step further and look at the particular privileges for each user and each users access to certain databases, tables etc. In order to view all the privileges we can use the 'mysql' table which we used earlier to see the users.</span>
        
    <span class = "nl">First make sure you use the 'mysql' database before you try to view the tables in it. Here is a query view the privileges.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments"># Select the mysql database</span>
    use mysql;
    <span class="comments"># Query the privileges from the user table</span>
    SELECT host, user, select_priv, insert_priv, update_priv,
    delete_priv, create_priv, drop_priv FROM user; </pre>
        
    <p>This is only a limited query for the user table, but you can see all the tables and the columns in the mysql database by using 'show tables' or 'describe table_name'.</p>
    
        <hr />        
        <br />
        <a href = "MySQL13.html"> Previous Page</a>
        <span class="next"><a href ="MySQL15.html">Next Page</a></span>
        <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 