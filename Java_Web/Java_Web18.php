 <!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Logging</title>
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

  <h1>Logging</h1>

  <h2>Logging using Log4j-api</h2>

  <p>Logging in Java is very important for finding and reporting errors. One of the main uses for logging is being able to detect problems which happen at runtime. Loggin is also a way to understand problems which may not happen under controlled circumstances. Some of the way to log errors is via: console, email or storing logs in a database. However, it is very important to note that too many logs can overshadow other higher priority errors.

  <span class = "nl">Below are some of the maven dependencies necessary for using our log4j api.</span></p>

  <em>Dependencies</em>
  <pre class = "code">&lt;dependency>
  &lt;groupId>org.apache.logging.log4j&lt;/groupId>
  &lt;artifactId>log4j-api&lt;/artifactId>
  &lt;version>2.0&lt;/version>
  &lt;scope>compile&lt;/scope>
&lt;/dependency>
&lt;dependency>
  &lt;groupId>org.apache.logging.log4j&lt;/groupId>
  &lt;artifactId>log4j-core&lt;/artifactId>
  &lt;version>2.0&lt;/version>
  &lt;scope>runtime&lt;/scope>
&lt;/dependency>
<span class = "comments">&lt;!-- Optional dependencies below --></span>
&lt;dependency>
  &lt;groupId>org.apache.logging.log4j&lt;/groupId>
  &lt;artifactId>log4j-jcl&lt;/artifactId>
  &lt;version>2.0&lt;/version>
  &lt;scope>runtime&lt;/scope>
&lt;/dependency>
&lt;dependency>
  &lt;groupId>org.apache.logging.log4j&lt;/groupId>
  &lt;artifactId>log4j-slf4j-impl&lt;/artifactId>
  &lt;version>2.0&lt;/version>
  &lt;scope>runtime&lt;/scope>
&lt;/dependency>
&lt;dependency>
  &lt;groupId>org.apache.logging.log4j&lt;/groupId>
  &lt;artifactId>log4j-taglib&lt;/artifactId>
  &lt;version>2.0&lt;/version>
  &lt;scope>runtime&lt;/scope>
&lt;/dependency></pre>

<hr />

<h2>Configuration File</h2>

  <p>Log4j will require a class file for producing the logs as well as a configuration file for determining where we should store our logging file.  Logs can either be output to our console, the log file or stored in a database. There are 5 different levels of logging: DEBUG, INFO, WARN, ERROR, and FATAL (increasing in importance). Below we will look at a xml configuration file necessary for determining which events to log and where to log them. </p>

<em>log4j2.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;configuration status="WARN">
  &lt;appenders>
    &lt;Console name="Console" target="SYSTEM_OUT">
      &lt;PatternLayout
	  pattern="%d{HH:mm:ss.SSS} [%t] %-5level %logger{36} - %msg%n" />
    &lt;/Console>
    <span class = "comments">&lt;!-- create a logging file at tomcat logs directory --></span>
    &lt;RollingFile name="FileAppender" fileName="../logs/application.log"
		 filePattern="../logs/application-%d{MM-dd-yyy}-%i.log">
      &lt;PatternLayout>
	&lt;pattern>%d{HH:mm:ss.SSS} [%t] %X {username} %-5level %c{36} %l: %msg%n&lt;/pattern>
      &lt;/PatternLayout>
      &lt;Policies>
	&lt;SizeBasedTriggerPoliciy size="10 MB" />
      &lt;/Policies>
      &lt;DefaultRolloverStrategy min="1" max="4" />
    &lt;/RollingFile>
  &lt;/appenders>
  &lt;loggers>
    &lt;root level="warm">
      &lt;appender-ref ref="Console" />
    &lt;/root>
    &lt;logger name="com.juan" level="info" additivity="false">
      &lt;appender-ref ref="Console">
	&lt;MarkerFilter marker="CONSOLE" onMatch="NEUTRAL"
		      onMismatch="DENY" />
      &lt;/appender-ref>
    &lt;/logger>
    <span class = "comments">&lt;!-- create a logger for our logging file --></span>
    &lt;logger name="org.apache" level="info">
      &lt;appender-ref ref="FileAppender" />
    &lt;/logger>
  &lt;/loggers>
&lt;/configuration></pre>

<p>A basic configuration can be found <a target="_blank" href="https://logging.apache.org/log4j/2.x/manual/configuration.php">here</a>. This can also be called an appender file as it will continue to append new logs to your existing file. Let's look at some source files to see how we store logs.</p>

<hr />

<h2>Action Servlet & Logging Filter</h2>

<p>The next two classes will demostrate how we can create a logger instance and use this instance in order to store logs in either our console or log files.</p>

<em>Code:</em>
<pre class = "code">package com.juan;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;
import org.apache.logging.log4j.MarkerManager;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.File;
import java.io.IOException;
import java.nio.file.Files;

@WebServlet(name = "actionServlet", urlPatterns = "/files")
public class ActionServlet extends HttpServlet
{
    <span class = "comments">// defines the creates the logger (can also work for other classes)</span>
    private static final Logger log = LogManager.getLogger();

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        String action = request.getParameter("action");
        if(action != null)
        {
            log.info("Received request with action {}.", action);
            String contents = null;
            switch(action)
            {
                case "readFoo":
                    contents = this.readFile("../foo.bar", true);
                    break;
                case "readLicense":
                    contents = this.readFile("../LICENSE", false);
                    break;
                default:
                    contents = "Bad action " + action + " specified.";
		    <span class = "comments">// this is a warning log</span>
                    log.warn("Action {} not supported.", action);
            }
            if(contents != null)
                response.getWriter().write(contents);
        }
        else
        {
	    <span class = "comments">// this is an error log</span>
            log.error("No action specified.");
            response.getWriter().write("No action specified.");
        }
    }

    protected String readFile(String fileName, boolean deleteWhenDone)
    {
        log.entry(fileName, deleteWhenDone);

        try
        {
            byte[] data = Files.readAllBytes(new File(fileName).toPath());
	    <span class = "comments">// this is an info log</span>
            log.info("Successfully read file {}.", fileName);
            return log.exit(new String(data));
        }
        catch(IOException e)
        {
            log.error(MarkerManager.getMarker("CONSOLE"),
                    "Failed to read file {}.", fileName, e);
            return null;
        }
    }
}</pre>

<p>Below we created a and added some fish tags in order to check the request status of each of our logs. The fish tags use a unique randomn number generator UUID and append that to a username and an id.</p>

<pre class = "code">package com.juan;

import org.apache.logging.log4j.ThreadContext;

import javax.servlet.DispatcherType;
import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebFilter;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.io.IOException;
import java.util.UUID;

@WebFilter(urlPatterns = "/*", dispatcherTypes = {
        DispatcherType.REQUEST, DispatcherType.ERROR, DispatcherType.FORWARD,
        DispatcherType.INCLUDE
})
public class LoggingFilter implements Filter
{
    @Override
    public void doFilter(ServletRequest request, ServletResponse response,
                         FilterChain chain) throws IOException, ServletException
    {
        boolean clear = false;
        if(!ThreadContext.containsKey("id"))
        {
            clear = true;
            ThreadContext.put("id", UUID.randomUUID().toString());
            HttpSession session = ((HttpServletRequest)request).getSession(false);
            if(session != null)
                ThreadContext.put("username",
                        (String)session.getAttribute("username"));
        }

        try
        {
            chain.doFilter(request, response);
        }
        finally
        {
            if(clear)
                ThreadContext.clearAll();
        }
    }

    @Override
    public void init(FilterConfig filterConfig) throws ServletException
    {

    }

    @Override
    public void destroy()
    {

    }
}</pre>

<p>Finally I will show a directory layout of our logging application.</p>

<em>directory structure</em>
<pre class = "code">index.jsp
&#9492;&#9472;&#9472;WEB-INF\
         &#9500;&#9472;&#9472;web.xml
	 &#9500;&#9472;&#9472;lib\
         &#9492;&#9472;&#9472;classes\
	          &#9500;&#9472;&#9472;log4j2.xml
		  &#9492;&#9472;&#9472;com\
		           &#9492;&#9472;&#9472;juan\
			            &#9500;&#9472;&#9472;ActionServlet.class
				    &#9492;&#9472;&#9472;LoggingFilter.class</pre>


  <hr />
  <br />
 <a href="Java_Web17.php">Previous Page</a>
<span class = "next"><a href = "Java_Web19.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
