<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>JSP tags &amp; El Syntax</title>
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

  <h1>JSP tags &amp; El Syntax</h1>

  <h2>JSP tags &amp; El Syntax</h2>

  <p>In this section we are going to recreate our earlier applications. However this time we are going to use JSP core tags instead of java scriptlet syntax as well as using El syntax to add variables. First let's look at how we can use the jstl (java standard tag library) to implement these core tags. </p>
  
  <em>directory</em>
  <pre class = "code">index.jsp
WEB-INF/
     |__lib/
           |__taglibs-standard-impl-1.2.5
           |__taglibs-standard-spec-1.2.5
     |__jsp/
           |__view/
           |__base.jspf
		    |__listTickets.jsp</pre>

  <p>In order to have our jsp read our new tag library we need to first include it in our base.jspf file. Notice how I added another lib tag to handle functions. We will use both of these tags in the next section.</p>

    <em>base.jspf</em>
  <pre class = "code">&lt;%@ page import="com.wrox.Ticket, com.wrox.Attachment" %>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
&lt;%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>
  </pre>

  <p>There is also the case of using the El syntax. Let's see a few examples using a variable from servlet, passed as a post parameter and computing an expression in El.</p>

<em>test.jsp</em>
<pre class = "code">${hello}
<span class = "comments">// as a parameter</span>
${param.hello}
<span class = "comments">// as an expression</span>
${5 + 5}</pre>

<p>Now let's see a few example of using core tag lib to display xml escaped variables, and conduct some if statements. First in order to get these taglib to work, you need to go to the <a target="_blank" href="http://tomcat.apache.org/download-taglibs.cgi">Tomcat Website</a> and download the first two tag jar files named 'taglibs-standard-impl-1.2.5.jar' and 'taglibs-standard-spec-1.2.5.jar', place those files in your 'WEB-INF/libs' directory. Test the file below to see if it works.</p>

<em>test.jsp</em>
<pre class = "code">&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
&lt;%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>

<span class = "comments">// set x equal to 5</span>  
&lt;c:set var="x" scope="page" value="${5}"/>
&lt;c:set var="display" scope="page" value="hello"/>

<span class = "comments">// check if x is less then 10</span>
&lt;c:if test="${x < 10}">
   &lt;c:out value="${display}"/>
&lt;/c:if>

<span class = "comments">// unset x</span>
&lt;c:remove var="x" scope="page"/></pre>

<p>Here is an example of our previous tickList.jsp using the new core tag library.</p>
		     

  <em>listTickets.jsp</em>
  <pre class = "code">&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Customer Support&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;a href="&lt;c:url value="/login?logout" />">Logout&lt;/a>
        &lt;h2>Tickets&lt;/h2>
        &lt;a href="&lt;c:url value="/tickets">
            &lt;c:param name="action" value="create" />
        &lt;/c:url>">Create Ticket&lt;/a>&lt;br />&lt;br />
        &lt;c:choose>
            &lt;c:when test="${fn:length(ticketDatabase) == 0}">
                &lt;i>There are no tickets in the system.&lt;/i>
            &lt;/c:when>
            &lt;c:otherwise>
                &lt;c:forEach items="${ticketDatabase}" var="entry">
                    Ticket ${entry.key}: &lt;a href="&lt;c:url value="/tickets">
                        &lt;c:param name="action" value="view" />
                        &lt;c:param name="ticketId" value="${entry.key}" />
                    &lt;/c:url>">&lt;c:out value="${entry.value.subject}" />&lt;/a>
                    (customer: &lt;c:out value="${entry.value.customerName}" />)&lt;br />
                &lt;/c:forEach>
            &lt;/c:otherwise>
        &lt;/c:choose>
    &lt;/body>
&lt;/html></pre>

<p>In the next section we are going to learn how to create our own custom tag library.</p>
  <hr />
  <br />
 <a href="Java_Web10.php">Previous Page</a>
<span class = "next"><a href = "Java_Web12.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
