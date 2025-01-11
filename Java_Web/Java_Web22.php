<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Java Config</title>
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

<h1>Java Config</h2>

<h2>Spring Annotation Config</h2>

<p>Let's look at another way to config spring without having to use xml. In this scenario we would require one directory to store our controller and service classes and another directory to store our configuration classes. The directory for the service classes can be called 'site', while the directory for the controller classes can be called 'config'. Below will be an example of all the config classes.</p>

<em>Bootstrap.java</em>
<pre class = "code">package com.wrox.config;

import org.springframework.web.WebApplicationInitializer;
import org.springframework.web.context.ContextLoaderListener;
import org.springframework.web.context.support.AnnotationConfigWebApplicationContext;
import org.springframework.web.servlet.DispatcherServlet;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.ServletRegistration;

@SuppressWarnings("unused")
public class Bootstrap implements WebApplicationInitializer
{
    @Override
    public void onStartup(ServletContext container) throws ServletException
    {
        container.getServletRegistration("default").addMapping("/resource/*");

        AnnotationConfigWebApplicationContext rootContext =
                new AnnotationConfigWebApplicationContext();
        rootContext.register(RootContextConfiguration.class);
        container.addListener(new ContextLoaderListener(rootContext));

        AnnotationConfigWebApplicationContext servletContext =
                new AnnotationConfigWebApplicationContext();
        servletContext.register(ServletContextConfiguration.class);
        ServletRegistration.Dynamic dispatcher = container.addServlet(
                "springDispatcher", new DispatcherServlet(servletContext)
        );
        dispatcher.setLoadOnStartup(1);
        dispatcher.addMapping("/");
    }
}</pre>

<p>The bootstrap class is probably the most important class. We no longer require the use of the deployment descriptor to load our servletContext.xml or where to find the dispatcher. This is all handled here, furthermore it implements the WebAppInitializer which will be vital for setting up the spring dispatcher as well as the servlet context.

<span class ="nl">Next we have the rootContextConfig class which is going to handle performing the component scan our site directory in order to exclude various @Controller classes.</span> </p>

<em>RootContextConfigation.java</em>
<pre class = "code">package com.wrox.config;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.stereotype.Controller;

@Configuration
@ComponentScan(
        basePackages = "com.juan.site",
        excludeFilters = @ComponentScan.Filter(Controller.class)
)
public class RootContextConfiguration
{
}</pre>

<p>Finally, oue servletContextConfig class does the opposite enabling various annotations for web MVC features like the controllers and parameters, etc.</p>

<em>ServletContextConfiguration.java</em>
<pre class = "code">package com.wrox.config;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.stereotype.Controller;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;

@Configuration
@EnableWebMvc
@ComponentScan(
        basePackages = "com.juan.site",
        useDefaultFilters = false,
        includeFilters = @ComponentScan.Filter(Controller.class)
)
public class ServletContextConfiguration
{
}</pre>

<p>Since, we will be using spring boot for the rest of the project I won't get into much detail about using the @injection or @controller annotations. Just know that @Controller annotations literally go right before the class name of the controller and the @Inject goes before using dependency injections methods.

<span class = "nl">For the rest of our java programming we will be focusing on spring boot.</span></p>

<hr />
<br />
<a href="Java_Web21.php">Previous Page</a>
<span class = "next"><a href = "Java_Web23.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>

