<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Prepared Statements - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Prepared Statements - PhP Programming</h1>
    
    <h2>Prepared Statements</h2>
    
        <p>Prepared statements are important for both more optimized query times and also for security reasons. What a prepared statement allows you to do is create a query which creates a parameter for inputing a value to a sql query (instead of just appending a php variable to a string, which is passed into a sql statement).
    
        <span class = "nl">This is important becase appending a string to a sql query will allow malicious users to perform an attack called a SQL injection. That allows someone to write a sql query and execute that query by typing data into an html form.
        When the form gets processed the sql statement gets passed.</span>
    
        <span class = "nl">If the database user has priviledges access to drop/create tables, query usernames and passwords then as a developer we would want to combat this. Let's see how we could write a prepared statement below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create a connection to your database</span>
    $conn = new mysqli('localhost', 'username', 'password', 'dbName');
    <span class = "comments">// Store the SQL query</span>
    $query = 'SELECT * FROM tablename';
    <span class = "comments">// Store the query in an object</span>
    $stmt = $conn->prepare($query);
    <span class = "comments">// execute the query was successful</span>
    $stmt->execute();
    <span class = "comments">// Store the results in an object</span>
    $result = $stmt->get_result();
    <span class = "comments">// Place the results in an array</span>
    $row = $result->fetch_all();
    <span class = "comments">// Print the results</span>
    foreach($row as $rows) {
        echo $rows[0].'&lt;br />';
        echo $rows[1].'&lt;br />';
        echo $rows[2].'&lt;br />';
    }
    <span class = "comments">// close the prepared statement</span>
    $stmt->close();
    <span class = "comments">// close the connection</span>
    $conn->close();</pre>
    
        <p>This is just a statement which doesn't require user input, however if we were to input or select a value based on a users input, then we would need to bind that value to our sql statement.
    
        <span class = "nl">Let's look at an example of this below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// store the user inputs</span>
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $email = filter_input(INPUT_POST, 'email');
    
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    <span class = "comments">// write the query</span>
    $query = "INSERT INTO user VALUES( ?, ?, ?)";
    $stmt = $conn->prepare($query);
    <span class = "comments">// bind the paramters by to the user variables</span>
    <span class = "comments">// use 'i' for 'integer', s' for 'string', 'd' for 'double', 'b' for 'blob'</span>
    $stmt->bind_param('sss', $username, $password, $email);
    <span class = "comments">// execute the query was successful</span>
    $stmt->execute();
    <span class = "comments">// close the prepared statement</span>
    $stmt->close();
    <span class = "comments">// close the connection</span>
    $conn->close();</pre>
    
    <p>Let's look at another way to bind the parameters without using the question marks. Here we can use a placeholder instead, for this example you would probably need to use the PDO (php data objects) connection string.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// use PDO connection string</span>
    $conn = new 
        PDO('mysql:dbname=database;host=localhost', 'username', 'password');
    
    $query = "INSERT INTO user VALUES( :username, :password, :email )";
    $stmt = $conn->prepare($query);
    <span class = "comments">// defining placeholders</span>
    $stmt->bindValue(:username, $username);
    $stmt->bindValue(:password, $password);
    $stmt->bindValue(:email, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();</pre>

<br />  
<hr />
<br />
<a href = "PhP36.html">Previous Page</a>
<span class = "next"><a href="PhP38.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     