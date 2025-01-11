<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>JDBC MySql &amp; JSP</title>
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

  <h1>JDBC &amp; JSP</h1>

  <h2>Connecting JSP to JDBC</h2>

  <p>Previously we connected our database to a java file and display the output on our command line. In this section we are going to implement our database connection so that the results are populated on a jsp. First let's look at the directory structure for this project.</p>

  <em>directory</em>
  <pre class = "code">Display.jsp
WEB-INF/
     |__lib/
            |__mysql-connector-java-8.0.18</pre>

  <p>For now we just want to create a connection to the database and display those results. Once we do this we can then work on creating a connection bean or just using the jstl library to display our results.

    <span class = "nl">Let's look at code to connect to our database now.</span></p>
  
  <em>display.jsp</em>
  <pre class = "code">&lt;%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
&lt;% page import="java.sql.*" %>
&lt;%
Connection con;
try {
    Class.forName("com.mysql.cj.jdbc.Driver");
    String url = "jdbc:mysql://localhost/dbName";
    String user = "username";
    String pw = "password";    

    con = DriverManager.getConnection(url, user, pw);

    Statement stmt = con.createStatement();

    String query = "select * from users";

    ResultSet rows = stmt.executeQuery(query);
    
    while(rows.next()) {
    	out.print(rows.getString(1));
        out.print(rows.getString(2));
        out.print(rows.getString(3));
        out.print("&lt;br />");
    }
    con.close();
    
} catch (ClassNotFoundException e) {
    e.printStackTrace();
} catch (SQLException e) {
    e.printStackTrace();
}
%></pre>

<p>We can take this approach further by adding beans which connect to the database and using those connections to initialize variables. Instead, in the next sections we are going to learn about using the jstl java standard tag library. Specifically using the El sytanx as well as the java Core, formating and sql tags.</p>
  
  <hr />
  <br />
 <a href="Java_Web9.php">Previous Page</a>
<span class = "next"><a href = "Java_Web11.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
