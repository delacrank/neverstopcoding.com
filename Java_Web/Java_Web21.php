<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Controllers &amp; Views</title>
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

  <h1>Spring Framework</h1>

  <h2>Controllers &amp; Views</h2>

  <p>Great, now that we have set up our maven pom.xml file, the deployment descriptor as well as the servletContext.xml file we can finally get around to writing the classes for our spring beans. Let's take a look first at the GreetingService.java file.</p>

<em>GreetingService.java</em>
<pre class = "code">package com.juan;

public interface GreetingService
{
    public String getGreeting(String name);
}</pre>

<p>We have just created a service which takes a method for a string, let's create a class to implement that service now. The point of creating the service is to make our code modular.</p>

<em>GreetingService.java</em>
<pre class = "code">package com.juan;

public class GreetingServiceImpl implements GreetingService
{

    @Override
    public String getGreeting(String name)
    {
        return "Hello, " + name + "!";
    }
}</pre>

<p>Great so this is our first bean, theres an interface for it which means we need to use the getGreeting method. Let's look at the second bean, the helloController bean, which if you noticed in our servletContext.xml file had a property value with the first bean (GreetingServiceImpl).</p>

<em>helloController.java</em>
<pre class = "code">package com.juan;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class HelloController
{
    private GreetingService greetingService;

    @ResponseBody
    @RequestMapping("/")
    public String helloWorld()
    {
        return "Hello, World!";
    }

    @ResponseBody
    @RequestMapping("/custom")
    public String helloName(@RequestParam("name") String name)

    {
        return this.greetingService.getGreeting(name);
    }

    public void setGreetingService(GreetingService greetingService)
    {
        this.greetingService = greetingService;
    }
}</pre>

<p>Notice how this bean has several annotation's and a private field for initializing the greeting service bean. Since the two beans were wired we can now use the method from our service bean (getGreeting). In the next section we will learn how to configure the application using annotations instead of the xml configuration.</p>

  
<hr />
<br />
<a href="Java_Web20.html">Previous Page</a>
<span class = "next"><a href = "Java_Web22.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>

