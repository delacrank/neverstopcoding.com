<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Indexes, Foreign Keys - MySQL Relational Database</title>
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

        <h1>Indexes, Foreign Keys - MySQL Relational Database</h1>
        
        <h2>Indexes, Table Types, Foreign Keys </h2>
        
            <p>In this section we are going to talk about indexes, table types and foreign key constraints.  How they are used and why we would use them for optimizing our performance of search queries, etc.</p>
        
        <hr />
        
        <!-- Indexes -->
        <h2>Indexes</h2>
        
            <p>The purpose of using an index is to speed up the process of reading from the database.  An index is good if a column or several columns are consistently queried.
                
    <span class ="nl">In order to create an index are only able to implement this function within our CREATE TABLE function or ALTER TABLE function.  Since we already have a table we want to use, let's learn about the ALTER TABLE function.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    ALTER TABLE Login ADD INDEX full_name (first_name, last_name);
    SHOW INDEX FROM Login;
    SHOW COLUMNS FROM Login;</pre>
        
        <p>The first query creates an index from table login, the second query shows the index and the final query will reveal the type of index from our table. 
        
    <span class = "nl">Below is a list of the possible indexes we can create.</span></p>
        
    <ul class = "li">
        <li><b>Index:</b> The standard index.</li>
        <li><b>Unique:</b> Used for columns which have unqiue values.</li>
        <li><b>Fulltext:</b> Used for only text based columns. </li>
        <li><b>Primary Key:</b> Provides a unqiue key for the column.</li>
    </ul>
        
        <hr />
        
    <!-- Table Tables -->
    <h3>Table Types</h3>
        
        <p>There are several different types storage supported by the MySQL Database. To view all of the them we can type in 'SHOW ENGINES;'.
            
    <span class = "nl">To change a table type you can use the ALTER TABLE command like so, 'ALTER TABLE table_name ENGINE=type;'.</span> </p>
        
        <hr />
        
        <!-- Foreign Keys -->
        <h3>Foreign Keys</h3>
        
            <p>A foreign key is when a primary key's values are shared in another table.  In this new table the values are considered the child element while the values in the inital or primary key's table are considered the parent.
        
    <span class = "nl">One of the features of using a primary key along with the engine InnoDB are the types of constraints that can be used between the linked tables.</span>
    
    <span class = "nl">For example if I wanted to ensure parent elements which are removed or updated also remove or update child elements as well.</span>
        
        <span class = "nl">In order to create a foreign key, all we need to do is type, 'FOREIGN KEY (column_name) REFERENCES table_name (column_name)'. If you want to ensure that table isn't modified when records are removed or updated you can use the ON DELETE or ON UPDATE clauses.</span>
        
        <span class = "nl">Below is a table which has a foreign key linked to a primary key we created earlier.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    CREATE TABLE Message (
        message_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        id INT UNSIGNED NOT NULL,
        title VARCHAR(50) NOT NULL,
        subject VARCHAR(50) NOT NULL,
        body LONGTEXT NOT NULL,
        date_entered DATETIME NOT NULL,
        FOREIGN KEY (id) REFERENCES Login (id)
    );</pre>
    
      <p>Alright, now let's insert some values into this table;</p>
         
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    INSERT INTO Message VALUES
        ( NULL, 1, 'Hello', 'Saying Hello', 'My name is dandy im saying hello.', NOW()),
        ( NULL, 2, 'Hello', 'Saying Hello', 'My name is dandy im saying hello.', NOW()),
        ( NULL, 3, 'Bikes', 'How to fix a bike', 'My bikes back wheel has a flat tire, how would I repair that?', NOW()),
        ( NULL, 4, 'Programming', 'C++', 'What are some good books to learn c++ from?', NOW()),
        ( NULL, 5, 'Programming', 'Web Dev', 'What languages should I learn to build a website?', NOW()),
        ( NULL, 6, 'Handball', 'Spiking', 'How do I spike the ball with my opposite.', NOW()),
        ( NULL, 7, 'Handball', 'Stamina', 'How do I improve my stamina for playing longer games.', NOW());</pre>
        
        <br />
        <img src="../Images/DBcolumns.png"  title="SHOW COLUMNS FROM Message;" alt = "SHOW COLUMNS FROM Message;" />
        
        <p>If we take a look at the columns of this new table we notice two keys in our key column, one for our primary key and one for our foreign key.</p>
        
        <hr />
        
    <!-- Foreign Key Constraints -->
    <h3>Foreign Key Constraints</h3>
        
        <p>There are five forms of foreign key constraints we can apply to our foreign key.</p>
        
    <ul class = "li">
        <li><b>Restrict:</b> Rejects the delete or update for the parent table.</li>
        <li><b>No Action:</b> Same as restrict.</li>
        <li><b>Set Default:</b> . . . </li>      
        <li><b>Cascade:</b> Delete or updates applied to the parent table will match the child tabl.</li>
        <li><b>Set Null:</b> Deleting or updating the parent table will set values in the child table to null.</li>
    </ul>
            
        <p>The syntax for applying these changes will follow after the foreign key has been set. Example: 'FOREIGN KEY (parent_id) REFERENCES parent (id) ON DELETE NO ACTION.' 
            
            <span class = "nl">In the example above, if we try to delete a field or record from the child table then the mysql database will restrict us from doing so as long as the parent table remains.</span>
            
            <span class = "nl">Let's look at an example, first I have to alter the row to handle my new constraints.</span></p>
            
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    ALTER TABLE Message
    ADD FOREIGN KEY (id) REFERENCES Login (id) ON DELETE NO ACTION
    ON UPDATE NO ACTION;</pre>
        
    <br />
    <img src="../Images/DBfk.png" width = "650"  title="DELETE FROM Login WHERE id = 2;" alt = "DELETE FROM Login WHERE id = 2;"/>
            
    <p>If I try to remove or update a record from the parent key then I will get this error while the child record remains.</p>
        
        <hr />        
        <br />
        <a href = "MySQL7.html"> Previous Page</a>
        <span class = "next">
        <a href = "MySQL9.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 