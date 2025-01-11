<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First JSP</title>
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
    
  <h1>Java Server Pages</h1>

  <h2>First JSP</h2>

  <p>In this section we are going to be creating our first Java Server Page. In this page we are going to be going over a lot of the similar circumstances that allowed us to create our first servlet.

    <span class = "nl">One of the biggest advantages of using Java Server Pages is that we don't have to worry about creating a bunch of functions to generate html to our servlet. In this manner we an interpolate html and Java by using '&lt;%' and '%>' tags whenever we enter java.</span>

    <span class = "nl">Let's look at an example of using one of these JSP's which will perform the same exact function as our last program, using a lot less code this time.</span></p>

 <em>Display_Name.jsp</em>
<pre class = "code">&lt;%@ page contentType="text/html;charset=UTF-8" language="java" %>
&lt;%!
    private static final String DEFAULT_USER = "Guest";
%>
&lt;%
    String user = request.getParameter("user");
    if(user == null)
        user = DEFAULT_USER;
%>
&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Hello User Application&lt;/title>
    &lt;/head>
    &lt;body>
        Hello, &lt;%= user %>!&lt;br />&lt;br />
        &lt;form action="greeting.jsp" method="POST">
            Enter your name:&lt;br />
            &lt;input type="text" name="user" />&lt;br />
            &lt;input type="submit" value="Submit" />
        &lt;/form>
    &lt;/body>
&lt;/html></pre>


	<p>Even thou this file works, behind the scenes tomcat had to generate a java and a class file for each JSP. These files can be found under 'tomcat-> work-> Catalina-> localhost-> web-> org-> apache-> jsp'. Ideally, you don't want to do all your logic in these jsp files, they are really to serve simply as a views. It requires more time for tomcat to compile and execute these jsp files then it would for it to handle a servlet, but the trade off is that there is a lot less coding required.

	<span class = "nl">In our next section we are actually going to dive into an entire application to really understand how to get pages to talk to each other, and store some of our data into a hashmap for local retrieval.</p>

  <hr />
  <br />
 <a href="Java_Web3.php">Previous Page</a>
<span class = "next"><a href = "Java_Web5.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
