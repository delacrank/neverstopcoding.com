<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>JDBC MySql</title>
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
<?php include('..//Includes//Left_Java_Web.php'); ?>
    
<!-- Right -->
<div id ="rightz">

  <h1>JDBC MySql</h1>

<h2>Connecting to MySql Database</h2>

  <p>In this section we are going to learn how to connect to a mysql database using the Java Database Connection string. The first thing to note is that you should already have a mysql database installed in your computer. Second you should probably know some mysql if you wish to access or modify any existing tables.

    <span class = "nl">This tutorial is going to be focused on how to connect mysql databases using Java not necessarily on how to write mysql. Theres actually two ways to connect to a database, theres using a connection string via the java bean, and there is also using a javaSource tag.</span>

    <span class = "nl">I will try to cover both in this section.</span></p>

  <hr />

  <h2>Installing MySql</h2>

  <p>Before you can actually connect to mysql you need to first install it. I would suggest going to their <a href="https://dev.mysql.com/downloads/" target="_blank">website</a> downloading the MySql community server and installing it. Make sure to select the J_Connector as well as installing it as a web_server. I think this version comes with both MySql Work Bench as well as their MySql Shell.

    <span class = "nl">Peronally, I use the shell to perform my commands but it doesn't make much of a difference. Recently, I've been using MariaDB so I was unfamiliar with their new shell. There are a few small differences, once you open the shell type in '\connect root@localhost:3306'. It will promt you for your password, once you are in you can change the shell to read sql by typing in '\sql'.</span></p>

<em>Code:</em>
<pre class = "code"><span class = "comments"># navigate to the msql shell folder binaries</span>
<span class = "comments"># type in mysqlsh</span>
\connect root@localhost:3306
\sql</pre>

  <p>You may also want to create a new user with all the priviledges and be sure to provide this user with a 'mysql native password'.</p>

  <hr />

  <h2>Connecting to Database</h2>

  <p>The first thing we want to do is establish a connection to the database. For the purposes of demonstrating how to actually use the JDBC before we implement in a website, I will create a SE java file first. The purpose of this first file is simply to establish a connection to an existing database.</p>

 <em>checkDB.java</em>
<pre class = "code">import java.sql.*;

public class checkDB {
       public static void main(String[] args) {

      	      Connection conn = null;
	      try {
		  Class.forName("com.mysql.cj.jdbc.Driver"); 
                  conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/DBname",
                                                                                "username","password");
	      	  System.out.println("connection exists");
	      } catch (SQLException ex) {
	      	  System.out.print(ex);
	      } catch (ClassNotFoundException e) {
		  System.out.print(e);
	      }
       }
}</pre>

  <p>I would suggest create a new folder create a file and then try to compile it. Running it will be the difficult part, we need to get our JConnector.jar file place it in that current directory and set the class path for that executable in our command line.</p>

  <em>Cmd line</em>
<pre class = "code"><span class = "comments"># -cp (class path)</span>
java -cp .;mysql-connector-java-8.0.18.jar checkDB.java</pre>

     <p>If that executes great, now we can have a little fun with actually running some queries. Look at the code below, this is assuming that you populated a table called users with some data.</p>
  
  <em>DB.java</em>
<pre class = "code">import java.sql.*;

public class checkDB {
       public static void main(String[] args) {

      	      Connection conn = null;
	      try {
		  Class.forName("com.mysql.cj.jdbc.Driver"); 
                  conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/DBname",
                                                                                "username","password");
	      	  Statement sqlState = conn.createStatement();
		  String query = "SELECT * FROM users";
		  ResultSet rows = sqlState.executeQuery(query);

		  while(rows.next()) {
		      System.out.println("Username : " + rows.getString("username"));
		  }
	      } catch (SQLException ex) {
	      	  System.out.print(ex);
	      } catch (ClassNotFoundException e) {
		  System.out.print(e);
	      }
       }
}</pre>

  <p>In the next section we will talk about how to connect this database to our jsp pages.</p>
											    		        
  <hr />
  <br />
 <a href="Java_Web8.php">Previous Page</a>
<span class = "next"><a href = "Java_Web10.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
