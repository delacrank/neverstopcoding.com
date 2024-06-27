<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Configuring Spring</title>
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

  <h2>Configuring Spring</h2>

<p>In order to create a spring application we need to first declare our dependencies in our maven project object model, we will also require a deployment descriptor and a servletContext to configure our spring application.</p>

<hr />

<h2>Maven, Deployment Descriptor &amp; servletContext</h2>

<p>Let's first start by looking at our maven dependency which will include several spring libraries: spring-aop, spring-beans, spring-context, spring-core, spring-expression, spring-web, spring-webmvc.</p>

<em>pom.xml</em>
<pre class = "code">&lt;dependency>
  &lt;groupId>org.springframework&lt;/groupId>
  &lt;artifactId>spring-webmvc&lt;/artifactId>
  &lt;version>4.0.6.RELEASE&lt;/version>
  &lt;scope>compile&lt;/scope>
&lt;/dependency></pre>

<p>Next let's include our deployment descriptor which should contain the location to our servletContext xml file. The deployment descriptor is important for several reasons, for one we want to know how to access javascript, images, and css files. For this reason if we store those file in a /resource/ directory our descriptor will be able to access them later.

<span class = "nl">Second, we need to be able to access our wiring to the other beans and this needs to be done on loadup. So our descriptor needs to know where our servletContext.xml file is in order to access the wiring. We will see how our wiring will let our application know which routes lead to which controllers after this initial example.</p>

<em>web.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns="http://xmlns.jcp.org/xml/ns/javaee"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee
                             http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
         version="3.1">

    &lt;display-name>Spring Application&lt;/display-name>

    &lt;servlet-mapping>
        &lt;servlet-name>default&lt;/servlet-name>
        &lt;url-pattern>/resource/*&lt;/url-pattern>
    &lt;/servlet-mapping>

    &lt;servlet>
        &lt;servlet-name>springDispatcher&lt;/servlet-name>
        &lt;servlet-class>org.springframework.web.servlet.DispatcherServlet&lt;/servlet-class>
        &lt;init-param>
            &lt;param-name>contextConfigLocation&lt;/param-name>
            &lt;param-value>/WEB-INF/servletContext.xml&lt;/param-value>
        &lt;/init-param>
        &lt;load-on-startup>1&lt;/load-on-startup>
    &lt;/servlet>
    &lt;servlet-mapping>
        &lt;servlet-name>springDispatcher&lt;/servlet-name>
        &lt;url-pattern>/&lt;/url-pattern>
    &lt;/servlet-mapping>

    &lt;session-config>
        &lt;session-timeout>30&lt;/session-timeout>
        &lt;cookie-config>
            &lt;http-only>true&lt;/http-only>
        &lt;/cookie-config>
        &lt;tracking-mode>COOKIE&lt;/tracking-mode>
    &lt;/session-config>

    &lt;distributable />

&lt;/web-app></pre>

<p>Possibly, the most important file of the group is the servletContext.xml file which contains information pertaining to the various spring beans, as each spring bean is a controller and some controllers have shared concerns we would also use our spring expression language here for aspect oriented programming concerns. For now we just want to declare the controllers. </p>

<em>servletContext.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
       xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
       xmlns:mvc="http://www.springframework.org/schema/mvc"
       xsi:schemaLocation="http://www.springframework.org/schema/beans
            http://www.springframework.org/schema/beans/spring-beans-4.0.xsd
            http://www.springframework.org/schema/mvc
            http://www.springframework.org/schema/mvc/spring-mvc-4.0.xsd">

    &lt;mvc:annotation-driven />

    &lt;bean name="greetingServiceImpl" class="com.juan.GreetingServiceImpl" />

    &lt;bean name="helloController" class="com.juan.HelloController">
        &lt;property name="greetingService" ref="greetingServiceImpl" />
    &lt;/bean>

&lt;/beans></pre>

<p>Below is an example of what our directory looks prior to being compiled and packaged.</p>

<pre class = "code">demo
   │  pom.xml
   │
   └─src
       └─main
	     ├─java
	     │   └─com
	     │       └─juan
	     │            GreetingService.java
	     │            GreetingServiceImpl.java
	     │            HelloController.java
	     │
	     └─webapp
		   │   index.jsp
		   │
		   └─WEB-INF
 		         servletContext.xml
		         web.xml</pre>

<p>This should pretty much build the entire application if you want to type in mvn compile and mvn package and deploy the .tar file to your web server, you can either navigate to your folder name 'localhost:8080/demo' or to the custom controller 'localhost:8080/demo/custom?name=' and include the name you want to be displayed.

<span class = "nl">Let's take a final look at what the web application looks like at this point.</span></p>

<em>deployed directory</em>
<pre class = "code">C:.
├─META-INF
│   │   MANIFEST.MF
│   │   war-tracker
│   │
│   └─maven
│         └─com.juan
│             └─demo
│                   pom.properties
│                   pom.xml
│
└─WEB-INF
    │   servletContext.xml
    │   web.xml
    │
    ├─classes
    │     └─com
    │         └─juan
    │               GreetingService.class
    │               GreetingServiceImpl.class
    │               HelloController.class
    │
    └─lib
            aopalliance-1.0.jar
            commons-logging-1.1.3.jar
            spring-aop-4.0.6.RELEASE.jar
            spring-beans-4.0.6.RELEASE.jar
            spring-context-4.0.6.RELEASE.jar
            spring-core-4.0.6.RELEASE.jar
            spring-expression-4.0.6.RELEASE.jar
            spring-web-4.0.6.RELEASE.jar
            spring-webmvc-4.0.6.RELEASE.jar</pre>

<hr />
<br />
<a href="Java_Web19.html">Previous Page</a>
<span class = "next"><a href = "Java_Web21.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
