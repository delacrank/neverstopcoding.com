<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Sessions &amp; Auth</title>
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
    
  <h1>Sessions &amp; Auth</h1>

  <h2>Java Sessions</h2>

  <p>In this section we are going to be talking about how to create sessions. This section will include the attachment and ticket classes from our last section. It will also include the config file necessary for our JSP files and our session variables.

    <span class = "nl">Let's start with the web.xml file</span></p>

  <hr />

  <h2>JSP Properties &amp; Session Config</h2>

  <p>The purpose of using the JSP properties is to indicate where the JSP files are located first off. They also define the priority of when to display certain pages based on URL patterns. This also allows you to hide pages which you don't want revealed, or store them in a different property group.</p>

  <em>web.xml</em>
 <pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns="http://xmlns.jcp.org/xml/ns/javaee"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee
                             http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
         version="3.1">

    &lt;display-name>Login Program&lt;/display-name>

    &lt;jsp-config>
        &lt;jsp-property-group>
            &lt;url-pattern>*.jsp&lt;/url-pattern>
            &lt;url-pattern>*.jspf&lt;/url-pattern>
            &lt;page-encoding>UTF-8&lt;/page-encoding>
            &lt;scripting-invalid>false&lt;/scripting-invalid>
            &lt;include-prelude>/WEB-INF/jsp/base.jspf&lt;/include-prelude>
            &lt;trim-directive-whitespaces>true&lt;/trim-directive-whitespaces>
            &lt;default-content-type>text/html&lt;/default-content-type>
        &lt;/jsp-property-group>
    &lt;/jsp-config>

    &lt;session-config>
        &lt;session-timeout>30&lt;/session-timeout>
        &lt;cookie-config>
            &lt;http-only>true&lt;/http-only>
        &lt;/cookie-config>
        &lt;tracking-mode>COOKIE&lt;/tracking-mode>
    &lt;/session-config>

&lt;/web-app></pre>

<p>The session config tag is responsible for handling the duration and constraints of our session variable.</p>

<hr />

<h2>Login Servlet</h2>

<p>This will be our main servlet which will have to handle dealing with incoming and returning users. The purpose of the login servlet is to authenticate either a returning user or as a place to redirect users who didn't have proper session to access a page. In other words it is similar to a portal, which will direct the user to the necessary areas if given the right keys.

<span class = "nl">Thankfully, I have minimized the amount of work necessary to register users by creating a hashmap and adding 4 users and their passwords.</span> </p>

<em>LoginServlet.java</em>
<pre class = "code">import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.io.IOException;
import java.util.Hashtable;
import java.util.Map;

@WebServlet(
        name = "loginServlet",
        urlPatterns = "/login"
)
public class LoginServlet extends HttpServlet
{
    private static final Map<String, String> userDatabase = new Hashtable<>();

    <span class = "comments">// add these users to the hashtable</span>
    static {
        userDatabase.put("Nicholas", "password");
        userDatabase.put("Sarah", "drowssap");
        userDatabase.put("Mike", "wordpass");
        userDatabase.put("John", "green");
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        HttpSession session = request.getSession();
	<span class = "comments">// check if a user wants to logout</span>
        if(request.getParameter("logout") != null)
        {
	    <span class = "comments">// kill his session and redirect</span>
            session.invalidate();
            response.sendRedirect("login");
            return;
        }
	<span class = "comments">// check to see if they're logged in</span>
        else if(session.getAttribute("username") != null)
        {
            response.sendRedirect("tickets");
            return;
        }

	<span class = "comments">// if login fails send back to login JSP</span>
        request.setAttribute("loginFailed", false);
        request.getRequestDispatcher("/WEB-INF/jsp/view/login.jsp")
               .forward(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        HttpSession session = request.getSession();
        if(session.getAttribute("username") != null)
        {
            response.sendRedirect("tickets");
            return;
        }

	<span class = "comments">// validate username &amp; password match</span> 
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        if(username == null || password == null ||
                !LoginServlet.userDatabase.containsKey(username) ||
                !password.equals(LoginServlet.userDatabase.get(username)))
        {
            request.setAttribute("loginFailed", true);
            request.getRequestDispatcher("/WEB-INF/jsp/view/login.jsp")
                   .forward(request, response);
        }
        else
        {
            session.setAttribute("username", username);
	    <span class = "comments">// protect against session fixation attack</span>
            request.changeSessionId();
            response.sendRedirect("tickets");
        }
    }
}</pre>

<p>The login servlet has two functions doGet and doPost, if the user was directed to the page with an existing session, then simply validate the session and send them to the tickets page so they can modify or create new tickets, otherwise boot them back to the login screen. However, if the user is accessing the page via a post method, then we are validating their username and password for the first time, if those parameters match up to the key value pairs in our hashmap create a session and send them to the tickets page, otherwise send them back to the login screen with a failed login attempt.

  <span class = "nl">There is also a third situation, if a user has requested to logout, then the doGet method will kill their existing session and direct them to the login screen. Either way the login servlet acts as a traffic controller, directing users to the right pages based on their access.</span>

  <span class = "nl">The purpose for calling the request 'changeSessionId()' method is to protect against a session fixation attack, where the attacker can enter an existing session if the user sends a link to a page where they have an active session.</span></p>

  <hr />

  <h2>Login Form</h2>

<p>Let's take a moment to look at the login form which the user will be sent to in order to access their tickets.</p>

<em>Login.jsp</em>
<pre class = "code">&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Customer Support&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h2>Login&lt;/h2>
        You must log in to access the customer support site.&lt;br />&lt;br />
        &lt;%
            if(((Boolean)request.getAttribute("loginFailed")))
            {
                %>
        &lt;b>The username or password you entered are not correct. Please try
            again.&lt;/b>&lt;br />&lt;br />
                &lt;%
            }
        %>
        &lt;form method="POST" action="&lt;c:url value="/login" />">
            Username&lt;br />
            &lt;input type="text" name="username" />&lt;br />&lt;br />
            Password&lt;br />
            &lt;input type="password" name="password" />&lt;br />&lt;br />
            &lt;input type="submit" value="Log In" />
        &lt;/form>
    &lt;/body>
  &lt;/html></pre>

<p>It first checks the attribute login failed to determine whether or not to display the error message, then it displays the form. The value for the action of the form is '/login' so based on the routing that will display the 'login servlet' class we just read.

  <span class = "nl">Finally, let's take another look at our Ticket Servlet class because ultimately this class will determine whether or not we have access to any of the pages based on what type of session we have.</span></p>

<hr />

<h2>Ticket Servlet</h2>

<p>The first thing you will notice about our new ticket servlet class is that there are checks for the session variable for these method doGet, doPost. This is because these methods are the protected methods which means they can be accessed if we are an HttpServlet class, yet the other methods are private so they can only be access from this page. As long as we ensure that there is session control on our protected methods then there will be no way to access our private methods from without having first validated the session.</p>  

<em>TicketServlet.java</em>
<pre class = "code">package com.wrox;

import javax.servlet.ServletException;
import javax.servlet.ServletOutputStream;
import javax.servlet.annotation.MultipartConfig;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.util.LinkedHashMap;
import java.util.Map;

@WebServlet(
        name = "ticketServlet",
        urlPatterns = {"/tickets"},
        loadOnStartup = 1
)
@MultipartConfig(
        fileSizeThreshold = 5_242_880, //5MB
        maxFileSize = 20_971_520L, //20MB
        maxRequestSize = 41_943_040L //40MB
)
public class TicketServlet extends HttpServlet
{
    private volatile int TICKET_ID_SEQUENCE = 1;

    private Map<Integer, Ticket> ticketDatabase = new LinkedHashMap<>();

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        if(request.getSession().getAttribute("username") == null)
        {
            response.sendRedirect("login");
            return;
        }

        String action = request.getParameter("action");
        if(action == null)
            action = "list";
        switch(action)
        {
            case "create":
                this.showTicketForm(request, response);
                break;
            case "view":
                this.viewTicket(request, response);
                break;
            case "download":
                this.downloadAttachment(request, response);
                break;
            case "list":
            default:
                this.listTickets(request, response);
                break;
        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        <span class = "comments">// validate the session</span>
        if(request.getSession().getAttribute("username") == null)
        {
            response.sendRedirect("login");
            return;
        }

        String action = request.getParameter("action");
        if(action == null)
            action = "list";
        switch(action)
        {
            case "create":
                this.createTicket(request, response);
                break;
            case "list":
            default:
                response.sendRedirect("tickets");
                break;
        }
    }</pre>

<p>Let's also look at how to deactivate a session</p>

<em>Logging out</em>
<pre class = "code"> &lt;a href="&lt;c:url value="/login?logout" />">Logout&lt;/a></pre>

<p>Appending this anchor tag to an existing page allows the user to log out of an existing session. In the next section we are going to go more in depth in the JSP tags and understand how and when to use them, and even create some of our own.</p>


  <hr />
  <br />
 <a href="Java_Web6.html">Previous Page</a>
<span class = "next"><a href = "Java_Web8.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
