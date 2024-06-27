<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Java Beans</title>
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

  <h1>Java Beans</h1>

  <h2>Using Java Beans</h1>

<p>In this section we are going to talk about using java beans. How they provide an alternative to writing raw jsp scripts in view pages.  Additionally how they provide modularity and reuseability when using classes meaning that classes don't need to be invoked everytime we require the use of an instance. Based on the scope of the java bean, it only requires invokation once if it is used in either a session, or request scope.

  <span class ="nl">Simply put, once you create a java bean to do some sort of server side computation or access a database, you can keep reusing that class without having to always create an instance of it and call it in the jsp.</span></p>


<em>Directory structure:</em>
<pre class = "code">Directory_name
     |__WEB-INF/
         |__index.jsp
         |__classes/
             |__com/
                 |__Student/
                     |__Student.class</pre>

<p>One of the difficulties in using java beans is making sure that your application knows where to find that particular class. In order to use a java bean be sure to include it in a package and provide a folder for it as well. If you see the directory created above the Student bean has been given two additional folders, one for the package and one for the name of the class.

  <span class = "nl">Let's look at my index.jsp file in order to see how we can create our bean tags.</span></p>

<em>Index.jsp</em>
<pre class = "code">&lt;jsp:useBean id="student" class = "com.Student" scope="page">
	     &lt;jsp:setProperty name="student" property="name" value="cool"/>
&lt;/jsp:useBean>

&lt;p>Display the value of our students name:
&lt;jsp:getProperty name="student" property="name"/> &lt;/p></pre>

<p>As you can see in order to define a bean we must use the 'useBean' jsp tag. In the tag we defined 3 attributes: id, class, and scope. The id attribute will be used to refer to the id we created for identifying the class, this is useful for setting or getting values from the class. We can also refer back to this initial class with the name attribute.

  <span class = "nl">The name of the class should have its location in it, so in our case its our package directory and class directory. The final attribute scope will contain the scope for the use of the class. If we decided to extend this jsp page using a &lt;jsp:include> or &lt;jsp:forward> tag then we would need to increase the scope of the bean to behind the page. In this scenario it would have to be for the request of the page.

<span class = "nl">The two additional scopes are session and application, for now let's just see what the class looks like.</p>

<em>Student.java</em>
<pre class = "code">package com;

public class Student {

    private String name;

    public void setName(String name) {
	this.name = name;
    }
    
    public String getName() {
	return name;
    }
}</pre>

<p>The above class was a relatively simple class, but the purpose was for demonstrating how to use our setter and getting methods to set the field or name or get that field.

  <span class = "nl">In the next section we are going to go over how to use databases to add some additional functionality to jsp pages.</p>


  <hr />
  <br />
 <a href="Java_Web7.html">Previous Page</a>
<span class = "next"><a href = "Java_Web9.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
