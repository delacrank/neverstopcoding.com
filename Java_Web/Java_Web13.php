<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Defining Custom Tags cont.</title>
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

  <h1>Defining Custom Tags cont.</h1>

  <h2>Defining Custom Tags Attributes</h2>

  <p>This is the continuation on creating custom tags. In this new tag we are going to create a tag which takes two attributes and produces the sum of these numbers. Let's start by looking at our new tag lib definition.</p> 

<em>delacrank.tld</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;taglib xmlns="http://java.sun.com/xml/ns/j2ee"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://java.sun.com/xml/ns/j2ee http://java.sun.com/xml/ns/j2ee/web-jsptaglibrary_2_0.xsd"
version="2.0">

    &lt;tlib-version>1.0&lt;/tlib-version>
    &lt;short-name>delacrank&lt;/short-name>
    &lt;uri>WEB-INF/tld/delacrank.tld&lt;/uri>

    &lt;tag>
	&lt;name>add&lt;/name>
	&lt;tag-class>AddTag&lt;/tag-class>
	&lt;body-content>empty&lt;/body-content>
	&lt;attribute>
		&lt;name>op1&lt;/name>
		&lt;required>true&lt;/required>
		&lt;rtexpvalue>true&lt;/rtexpvalue>
	&lt;/attribute>
	&lt;attribute>
		&lt;name>op2&lt;/name>
		&lt;required>true&lt;/required>
		&lt;rtexpvalue>false&lt;/rtexpvalue>
	&lt;/attribute>
    &lt;/tag>
	
&lt;/taglib></pre>

<p>Above we can see that the tag now has two attribute elements. If required is marked as true then that attribute always needs to be added. The rtexpvalue element allows El tags to be inserted meaning that dynamic content can be inserted in the attribute.

  <span class = "nl">We have two attributes for our tag, however we need a class which will tell those attributes how to behave.  It should have a constructor, an initializer for each attribute and a doTag() function.</p>

<em>AddTag.java</em>
<pre class = "code">package com;

import javax.servlet.jsp.JspWriter;
import javax.serlvet.jsp.tagtext.SimpleTagSupport

public class AddTag extends SimpleTagSupport {
       int op1, op2;

       public AddTag() {
       	      op1 = op2 = 0;
       }

       public void setOp1( int i ) {
       	      op1 = i;
       }

       public void setOp2( int i ) {
       	      op2 = i;
       } 

       public void doTag() throws JspException, IOException {
       	      JspWriter out = getJspContext().getOut();
	      out.print( op1 + op2 );
       }
}</pre>

<p>Finally, we need to create a jsp file which will use this new tag we created. Remeber to keep the URI the same as the tag definition.</p>

<em>index.jsp</em>
<pre class ="code">&lt;%@ page language = "java" contentType="text/html; charset-ISO-8859-1"
     pageEncoding="ISO-8895-1"%>

&lt;%@ taglib prefex="delacrank" uri="WEB-INF/tld/delacrank.tld" %>

  &lt;delacrank:add op1="5" op2="10" /></pre>

<p>In the next and final section on custom tags we are going to create a .tag file.</p>

  <hr />
  <br />
 <a href="Java_Web12.php">Previous Page</a>
<span class = "next"><a href = "Java_Web14.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
