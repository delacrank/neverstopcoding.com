<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Filters</title>
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

  <h1>Filters</h1>

  <h2>Using Filters</h2>

  <p>In this section we are going to talk about using filters for the first time. First let's explain what a filter actually does, it serves as a mechanism for checking requests and responses to the server and from the server. This is to say that it acts like a man in the middle validating form inputs, session variables, and other types of information.

  <span class = "nl">Creating a filter is simple and can be done in two ways, via a class or though xml. Generally you want the filter to be done via the web.xml file since this ensures that it will be called before the servlet is ever touched. Filters act on servlets through a process called chaining, this means you can have multiple filters on a single request all taking place after one another.</span>

  <span class = "nl">Either way let's look at one example of using a filter to test a form input.</span></p>

<em>index.jsp</em>
<pre class = "code">&lt;%@ page contentType="text/html;charset=UTF-8" language="java" %>

&lt;form action = "${pageContext.request.contextPath}/check">
&lt;label>Name:&lt;/label>
&lt;input type = "text" name="name"/>
&lt;input type = "submit"/>
&lt;/form>></pre>

<p>We created a simple jsp form which allows one input for a parameter called name. It will redirect to a directory called check when submited. Below is the servlet called MyServlet.</p>


<em>MyServlet.java</em>
<pre class = "code">import javax.servlet.*; 
import javax.servlet.http.*;
import java.io.*;
import javax.servlet.annotation.WebServlet;
import java.io.IOException;
import java.io.PrintWriter;

@WebServlet("/check")
public class MyServlet extends HttpServlet {
       protected void doGet(HttpServletRequest request, HttpServletResponse response)
       throws ServletException, IOException {
     		 PrintWriter out = response.getWriter();
		 String name = request.getParameter("name");

		 out.println("Welcome " + name);
       }
}</pre>

<p>The servlet is simple it takes a get method and displays the name parameter using the printWriter method. The filter will ensure that the name field won't remain empty. In the example below we are choosing to display an error message, however we could have done a number of things (i.e., redirected the user to another page). </p>

<em>NameFilter.java</em>
<pre class = "code">import javax.servlet.*; 
import javax.servlet.http.*;
import java.io.*;
import javax.servlet.annotation.WebFilter;;
import javax.servlet.Filter;
import java.io.IOException;
import java.io.PrintWriter;

@WebFilter("/check")
public class FilterName implements Filter {
       public void destroy() {}

       public void doFilter (ServletRequest request, ServletResponse response,
       	      FilterChain chain) 
       	      throws IOException, ServletException {

	      PrintWriter out = response.getWriter();

	      HttpServletRequest req = (HttpServletRequest) request;
	      String name = request.getParameter("name");
	      if(name.equals(null) || name.equals("")) {
	             out.println("name cannot be empty");
	      } else {
	             chain.doFilter(request, response);
	      }
       }
}</pre>

<p>Let's also take a moment to look at a deployment descript for the filter which doesn't require using the 'filter annotation' (@WebFilter).</p>

<em>web.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns="http://xmlns.jcp.org/xml/ns/javaee"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee
                             http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
         version="3.1">

    &lt;filter>
	    &lt;filter-name>nameFilter&lt;/filter-name>
	    &lt;filter-class>FilterName&lt;/filter-class>
    &lt;/filter>

    &lt;filter-mapping>
	    &lt;filter-name>nameFilter&lt;/filter-name>
	    &lt;url-pattern>/check&lt;/url-pattern>
	    &lt;dispatcher>REQUEST&lt;/dispatcher>
    &lt;/filter-mapping>
&lt;/web-app></pre>
  
    <hr />
  <br />
 <a href="Java_Web14.html">Previous Page</a>
<span class = "next"><a href = "Java_Web16.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
