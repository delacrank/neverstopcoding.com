<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Tag File</title>
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

  <h1>Creating a Tag File</h1>

  <h2>Creating Tag Files</h2>

<p>What if we want to use the tag library definition file without having to create a seperate java class to run it. In this section we are going to learn how to do that using something called tags. First let's look at the directory for our file tag project.</p>

  <em>directory</em>
  <pre class = "code">index.jsp
WEB-INF/
     |__tags/
            |__delacrank.tag
     |__tld/
            |__delacrank.tld</pre>

<p>Great but how are we able to create the custom tag without writing a class. Below is what a tag file looks like, we can define the body content, any attributes as well as the variable for our body.</p>

<em>delacrank.tag</em>
<pre class = "code">&lt;%@ tag body-content="scriptless" %>
&lt;%@ attribute name="name" required="true" %>
&lt;jsp:doBody var="message" />

${message}, ${name}!</pre>

<p>So far so good, our final step is creating the definition for our tag in our tld file, for this we use the 'tag-file' element as well as a name and a path (fyi, the path should point to the tag file).</p>

<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;taglib xmlns="http://java.sun.com/xml/ns/j2ee"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://java.sun.com/xml/ns/j2ee http://java.sun.com/xml/ns/j2ee/web-jsptaglibrary_2_0.xsd"
version="2.0">

    &lt;tlib-version>1.0&lt;/tlib-version>
    &lt;short-name>delacrank&lt;/short-name>
    &lt;uri>WEB-INF/tld/delacrank.tld&lt;/uri>

    &lt;tag-file>
	&lt;name>greeting&lt;/name>
	&lt;path>/WEB-INF/tags/delacrank.tag&lt;/path>
    &lt;/tag-file>
    
&lt;/taglib></pre>

<p>Finally let's see a display of using the tag file in action.</p>

<em>index.jsp</em>
<pre class = "code">&lt;%@ page contentType="text/html;charset=UTF-8" language="java" %>

&lt;%@ taglib prefix="delacrank" uri="WEB-INF/tld/delacrank.tld" %>

&lt;delacrank:greeting name="june"> Hello &lt;/delacrank:greeting></pre>

 
  <hr />
  <br />
 <a href="Java_Web13.html">Previous Page</a>
<span class = "next"><a href = "Java_Web15.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
