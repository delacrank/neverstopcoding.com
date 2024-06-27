<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Post Get Requests</title>
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
    
  <h1>Reading Get &amp; Post Requests</h1>

  <h2>Our first Servlet</h2>

  <p>In this next section we are going to create our first form and submit button. This will be done within the script, the form method will redirect the user to the proper source file. Let's take a moment to read the file before I comment on it.</p>

<em>Java Web Servlet:</em>
<!-- Code -->
<pre class="code">import java.io.*;
import javax.servlet.*;
<span class = "comments">// allows to add @WebServlet Symbol</span>
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

<span class = "comments">// add routs to servlet name</span>
<span class = "comments">// doesn't require you to add web.xml file to handle routing</span>
@WebServlet(
	    name = "hello",
	    urlPatterns = {"/hello_world"},
	    loadOnStartup = 1
)

public class Hello_World extends HttpServlet {
    private static final String DEFAULT_USER = "Guest";

    <span class = "comments">// Create web page in this method</span>    
    public void doGet(HttpServletRequest request,  HttpServletResponse response)
          throws IOException, ServletException {
	String user = request.getParameter("user");
	if(user == null)
	    user = Hello_World.DEFAULT_USER;
	
	response.setContentType("text/html");
	response.setCharacterEncoding("UTF-8");

	PrintWriter writer = response.getWriter();
	writer.append("&lt;!DOCTYPE html>\r\n")
	    .append("&lt;html>\r\n")
	    .append(" &lt;head>\r\n")
	    .append(" &lt;title>Hello User Application&lt;/title>\r\n")
	    .append(" &lt;/head>\r\n")
	    .append(" &lt;body>\r\n")
	    .append(" Hello, ").append(user).append("!&lt;br/>&lt;br/>\r\n")
	    .append(" &lt;form action=\"hello_world\" method=\"POST\">\r\n")
	    .append(" Enter your name:&lt;br/>\r\n")
	    .append(" &lt;input type=\"text\" name=\"user\"/>&lt;br/>\r\n")
	    .append(" &lt;input type=\"submit\" value=\"Submit\"/>\r\n")
	    .append(" &lt;/form>\r\n")
	    .append(" &lt;/body>\r\n")
	    .append("&lt;/html>\r\n");
    }

    <span class = "comments">// If post method is used, will enter doGet method instead</span>
    public void doPost(HttpServletRequest request, HttpServletResponse response)
           throws IOException, ServletException {
        doGet(request, response);
    }
}</pre>

  <p>This code isn't actually that complicated. Its a bunch of append strings with carriage returns and newline literals to create this html form. The form itself uses the post method and sends the user to '\hello_world' route, which is the name of the servlet which points to this source file.

    <span class = "nl">The routing for the form is handled through our @WebServlet which declares the type of url pattern for the file to be served. This is a way of not depending on using a 'web.xml' file for handling the url mapping. </span>

    <span class = "nl">In our next program we will finally be using JSP which stands for Java Server Pages. It is a templating system for embedding Java within a client side script. The purpose behind using scripts is to allow designers to work with views without having to be bogged down with all the server side programming.</span>

  <span class = "nl">This also allows for seperation of concerns between the business logic and the design aspect of a website.</p>

  <hr />
  <br />
 <a href="Java_Web2.html">Previous Page</a>
<span class = "next"><a href = "Java_Web4.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
