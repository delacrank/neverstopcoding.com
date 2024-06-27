<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Curl Commands</title>
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

<h1>Curl Commands</h1>

<h2>Using curl</h2>

<p>In this section we are going to finish our application. This will include adding some configuration for using to be able to access different aspects of our api as well as adding another maven dependency to automatically build api's for each function of our repository. In otherwords with this new dependency an api will be generated for each type form of interaction relative to our database, clients can use get requests (select), put requests (insert), patch requests (update), and delete requests (delete).

  <span class = "nl">Let's add this dependency now.</span></p>

<em>Rest Api</em>
<pre class = "code">&lt;dependency>
  &lt;groupId>org.springframework.boot&lt;/groupId>
  &lt;artifactId>spring-boot-starter-data-rest&lt;/artifactId>
&lt;/dependency></pre>

<p>This relieves us from the duty of adding in the @RestController Annotations for each method to generate the necessary json or hal resources. We can also configure our application.yml file to handle the api calls by adding 'spring.data.rest.base-path' property.</p>

<em>application.yml</em>
<pre class = "code">spring:
  data:
    rest:
      base-path: /api</pre>

<p>Now when we make our api calls we need to prepend '/api' to our path. For our current application we can perform a curl request like so.</p>

<em>commands</em>
<pre class = "code">curl http://localhost:8080/api/ingredients/</pre>

<p>If you want to learn more about how to use the curl command to submit post, put, delete or get requests you can do so <a href="https://curl.haxx.se" target="_blank">here</a>. We can even add parameters to our existing curl requests by adding a question mark and typing in the parameter name and value.</p>

<em>commands</em>
<pre class = "code">curl "localhost:8080/api/tacos?size=5"</pre>

<p>In our next section we are going to spend some time learning about how to consume rest services.</p>

  <hr />
<br />
<a href="Java_Web35.php">Previous Page</a>
<span class = "next"><a href = "Java_Web37.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
