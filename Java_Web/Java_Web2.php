<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First Servlet</title>
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
    
  <h1>Our first Servlet</h1>

  <p>In this section we are going to go over how to build our first web page, how to compile it and then how to navigate to it in our tomcat server.

    <span class = "nl">First let's look at the source code for our first web servlet page and understand what it all means.</span></p>

    <em>Java Web Servlet:</em>
  <!-- Code -->
  <pre class="code"><span class = "comments">// Import the necessary libraries for servlets</span>
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

<span class = "comments">// Extend the Servlet class</span>
public class Hello_World extends HttpServlet {
    <span class = "comments">// Reads Get Requests</span>
    public void doGet (HttpServletRequest request,  HttpServletResponse response)
    	   throws IOException, ServletException
    {
        response.setContentType("text/html");
	<span class = "comments">// Create a writer instance to print to web page</span>
        PrintWriter out = response.getWriter();
        out.println("hello world");
    }

    <span class = "comments">// Reads post Requests</span>
    public void doPost (HttpServletRequest request, HttpServletResponse response)
    	   throws IOException, ServletException
    {
        doGet(request, response);
    }
}</pre>
 

	<p>Let's examine this code, first notice that there are two functions, one which is a doGet the other is doPost. These handle different types of requests for the server. If the user sends the data embedded into the url then it is a get request, we can store this information and post it back to our web page using the getWriter method. Same is true for a post method, we'll look at an example where we create an input form and post data to that form to be displayed by our servlet.

	<span class = "nl">In order to actually compile this file we are going to either add a library to our path or simply append it to our command line when calling javac. This is because the httpServlet library isn't located in this directory and the compiler doesn't know where to search for it.</span></p>

<em>Compling Java file:</em>
<!-- Code -->
<pre class="code"><span class = "comments">// Compiling our hello_world.java source file</span>
javac -cp ".;C:\path\to\Tomcat\lib\servlet-api.jar" web-inf\classes\hello_world.java</pre>

      <p>Our final step once setting up the directory and compiling our java source file, is setting up our web.xml. This is a very important file moving forward. It will be necessary for handling a lot of the routing for many of our class files, it will also be responsible for handling input parameters and other tasks releveant to our url in the future.</p>

<em>Web.xml file:</em>
<!-- Code -->
<pre class="code">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns="http://xmlns.jcp.org/xml/ns/javaee"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee
                             http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
         version="3.1">
    &lt;servlet>
      <span class = "comments">// Name of the servlet (Arbitary)</span>
      &lt;servlet-name>SayHello&lt;/servlet-name>
      &lt;servlet-class>Hello_World&lt;/servlet-class>
    &lt;/servlet>
    &lt;servlet-mapping>
        &lt;servlet-name>SayHello&lt;/servlet-name>
	<span class = "comments">// url matching pattern</span>
        &lt;url-pattern>/*&lt;/url-pattern>
    &lt;/servlet-mapping> 
&lt;/web-app></pre>

<p>In the example above I choose to name my servlet 'SayHello', this means everytime that name is referenced our application should look for the class which was set to it (Hello_World). If we have multiple classes, then it will be important to come up with distinctive names for each of those servlets. Next we have the servlet mapping tags which will tell our application which class to invoke once a certain pattern has been typed in.

      <span class = "nl">For now to display the page, you just need to navigate to 'localhost:8080/hello_world/x' where x can be any number or character since I placed an asterisk star in our url pattern. The first directory must be the name of the directory where you store your files.</span>

      <span class = "nl">In our next section we are going to show how to read input from our get headers and store them in our program as well as adding multiple files to our program, which can talk to each other.</span></p>


<hr />
  <br />
 <a href="Java_Web.php">Previous Page</a>
<span class = "next"><a href = "Java_Web3.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
