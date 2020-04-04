<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring Boot</title>
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

  <h2>Spring Boot</h2>

  <p>In this section we are going to create a very simple utitlizing the spring framework. Mostly, this will be to demonstrate what some of the dependencies/libs necessary to run spring and talk about some of the benefits of using spring over servlets.

<hr />

<h2>Maven Dependencies</h2>

<p>Let's start with some of the dependencies for creating our spring application.</p>

  <em>Mvn Dependencies</em>
  <pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 https://maven.apache.org/xsd/maven-4.0.0.xsd">
	&lt;modelVersion>4.0.0&lt;/modelVersion>
	&lt;parent>
		&lt;groupId>org.springframework.boot&lt;/groupId>
		&lt;artifactId>spring-boot-starter-parent&lt;/artifactId>
		&lt;version>2.2.2.RELEASE&lt;/version>
		&lt;relativePath/> &lt;!-- lookup parent from repository -->
	&lt;/parent>
	&lt;groupId>com.juan&lt;/groupId>
	&lt;artifactId>demo&lt;/artifactId>
	&lt;version>0.0.1-SNAPSHOT&lt;/version>
	&lt;name>demo&lt;/name>
	&lt;description>Demo project for Spring Boot&lt;/description>

	&lt;properties>
		&lt;java.version>1.8&lt;/java.version>
	&lt;/properties>

	&lt;dependencies>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-thymeleaf&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-web&lt;/artifactId>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-devtools&lt;/artifactId>
			&lt;scope>runtime&lt;/scope>
			&lt;optional>true&lt;/optional>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-test&lt;/artifactId>
			&lt;scope>test&lt;/scope>
			&lt;exclusions>
				&lt;exclusion>
					&lt;groupId>org.junit.vintage&lt;/groupId>
					&lt;artifactId>junit-vintage-engine&lt;/artifactId>
				&lt;/exclusion>
			&lt;/exclusions>
		&lt;/dependency>
	&lt;/dependencies>

	&lt;build>
		&lt;plugins>
			&lt;plugin>
				&lt;groupId>org.springframework.boot&lt;/groupId>
				&lt;artifactId>spring-boot-maven-plugin&lt;/artifactId>
			&lt;/plugin>
		&lt;/plugins>
	&lt;/build>

&lt;/project></pre>

<hr />

<h2>Spring Initialzr</h2>

<p>This file can be created by the Spring Initialzr found <a href="https://start.spring.io/" target="_blank">here</a>, simply download the application you can always config the pom afterwards. Once you have downloaded the application you will have a directory structure as so.</p>

<em>directory structure</em>
<pre class = "code">spring
&#9474;   .gitignore
&#9474;   HELP.md
&#9474;   mvnw
&#9474;   mvnw.cmd
&#9474;   pom.xml
&#9474;
&#9500;&#9472;.mvn
&#9474;   &#9492;&#9472;&#9472;wrapper
&#9474;           maven-wrapper.jar
&#9474;           maven-wrapper.properties
&#9474;           MavenWrapperDownloader.java
&#9474;
&#9492;&#9472;src
    &#9500;&#9472;main
    &#9474;   &#9500;&#9472;java
    &#9474;   &#9474;   &#9492;&#9472;com
    &#9474;   &#9474;       &#9492;&#9472;example
    &#9474;   &#9474;           &#9492;&#9472;demo
    &#9474;   &#9474;                   DemoApplication.java
    &#9474;   &#9474;
    &#9474;   &#9492;&#9472;resources
    &#9474;           application.properties
    &#9474;
    &#9492;&#9472;test
        &#9492;&#9472;java
            &#9492;&#9472;com
                &#9492;&#9472;example
                    &#9492;&#9472;demo
                            DemoApplicationTests.java</pre>


<p>My structure turned out this way because my groupId was 'com.juan' and my artifactId was 'demo' so those directories correspond to my groupId and artifactId.

<span class = "nl">However, if you prefer to use the command line, you can easily set up a spring project using the curl command (client url). Below, I'll provide an example of how to do so.</span></p>

<em>spring initialzr cmd</em>
<pre class = "code">curl https://start.spring.io/starter.zip -o my-project.zip
<span class = "comments"># unzip the file 
jar xf my-project.zip</pre>

<p>You can add dependencies or specifiy other parameters in terms of the pom.xml file generated using the '-d [dependencies]' or '-d [bootVersion]'. To read up more on using the spring.io commands just type 'curl https://start.spring.io'.</p>

<hr />

<h2>First Controller &amp; Template</h2>

<p>From here we can create our first controller class, it will be responsible for returning a view. The controller class should be located under a new directory named after our artifactId ('demo').</p>

<em>GreetingController.java</em>
<pre class = "code"><span class = "comments">// main/java/com/juan/demo/GreetingController.java</span>
package com.juan.demo;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class GreetingController {

	@GetMapping("/greeting")
	public String greeting(@RequestParam(name="name", required=false, defaultValue="World") String name, Model model) {
		model.addAttribute("name", name);
		return "greeting";
	}

}</pre>

<p>Before we create can create a template let's first make a directory for that template in src/main/resources/templates. Then we should name the view after what the controller was returning, in this cause the controller returns a template called 'greeting'. So we can name this file 'greeting.html'.</p>

<em>greeting.html</em>
<pre class = "code"><span class = "comments">&lt;!-- main/resources/templates/greeting.html --></span>
&lt;!DOCTYPE HTML>
&lt;html xmlns:th="http://www.thymeleaf.org">
&lt;head>
    &lt;title>Getting Started: Serving Web Content&lt;/title>
    &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
&lt;/head>
&lt;body>
    &lt;p th:text="'Hello, ' + ${name} + '!'" />
&lt;/body>
&lt;/html></pre>

<p>Understanding the main function, the way spring boot works is that it uses a single class as its starting point for the entire application. For our program that class was created by the initialzr, its called ServingWebContextApplication.java.</p>

<em>ServingWebContextApplication.java</em>
<pre class = "code"><span class = "comments">// main/java/com/juan/demo/ServingWebContentApplication.java</span>
package com.example.servingwebcontent;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class ServingWebContentApplication {

    public static void main(String[] args) {
        SpringApplication.run(ServingWebContentApplication.class, args);
    }

}</pre>

<p>To run this we should first clean and compile the program first 'mvn clean compile'. You should also package it, if you plan on deploying it. In order to test it type in 'mvnw spring-boot:run'.</p>

<em>cmd line</em>
<pre class = "code">mvnw spring-boot:run</pre>

<p>Navigate to 'localhost:8080/greeting' which is the name of the view. You can type in the query string to change the name 'localhost:8080/greeting?name=june'.

  <span class = "nl">Before we end this section, let's look at the one test case that is provided with the initialzr.</span></p>

<em>test</em>
<pre class = "code">import org.junit.jupiter.api.Test;
import org.springframework.boot.test.context.SpringBootTest;

@SpringBootTest
class ApplicationTests {

        @Test
        void contextLoads() {
        }

}</pre>

<p>Here we see the test checks to see that the application context loaded. In order to actually run this test case you should just type in mvn test. Its probably best to clean and then run the test. Just note that when you run mvn pacakge, the test case are ran right before. Chances are if it was packaged then you should be fine.</p>

<em>running test</em>
<pre class = "code">mvn test</pre>

<hr />
<br />
<a href="Java_Web22.html">Previous Page</a>
<span class = "next"><a href = "Java_Web24.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
