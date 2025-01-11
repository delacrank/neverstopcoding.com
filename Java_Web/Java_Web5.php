<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First JSP Program</title>
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
    
  <h1>Java Server Pages</h1>

  <h2>Ticketing system</h2>

    <p>In this section we are going to create an entire ticketing system application which takes text, and files and stores that information in a hashmap.

    <span class = "nl">I'll start with the index page, the ticketServlet page and the classes for the attachment and ticket objects.<span></p>


    <em>index.jsp</em>
<pre class = "code">&lt;%@ page contentType="text/html;charset=UTF-8" language="java" %>
&lt;html>
  &lt;head>
    &lt;title>Customer Support Application Index File&lt;/title>
  &lt;/head>
  &lt;body>
      &lt;a href="tickets">Go to tickets&lt;/a>.
  &lt;/body>
&lt;/html></pre>

<hr />

<h2>Directory &amp; JSPF</h2>

	      <p>Since we are using JSP's I want to show the new directory for handling these files. As well as a new file type called a JSPF.</p>

<em>base.jspf</em>
<pre class = "code">&lt;%@ page import="com.wrox.Ticket, com.wrox.Attachment" %>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %></pre>

<p>As for the directory here's a look at the structure.</p>

<pre class = "code">Directory_name
    |__WEB-INF/
           |__classes/
	          |__Attachment.java
		  |__Ticket.java
		  |__TicketServlet.java
           |__jsp/
           |__base.jspf
                  |__view/
		       |__listTickets.jsp
		       |__ticketForm.jsp
		       |__viewTicket.jsp</pre>


<hr />

<h2>Ticket Servlet Class</h2>

<p>Let's look at the TicketServlet class now, which is the heart of the program. It's main purpose to handle routing for displaying the different forms, create ticket, view tickets and list tickets. Bear in mind that this pages deals with handling many of the post and get values being sent to and from each of the forms.</p>

<em>TicketServlet.java</em>
<pre class = "code">import javax.servlet.ServletException;
import javax.servlet.ServletOutputStream;
import javax.servlet.annotation.MultipartConfig;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.Part;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.util.LinkedHashMap;
import java.util.Map;

<span class = "comments">// routing for this page</span>
@WebServlet(
        name = "ticketServlet",
        urlPatterns = {"/tickets"},
        loadOnStartup = 1
)
@MultipartConfig(
        fileSizeThreshold = 5_242_880,<span class = "comments">// 5MB</span>
        maxFileSize = 20_971_520L, <span class = "comments">// 20MB</span>
        maxRequestSize = 41_943_040L <span class = "comments">// 40MB</span>
)
public class TicketServlet extends HttpServlet
{
    private volatile int TICKET_ID_SEQUENCE = 1;
    <span class = "comments">// tickets will be stored in this hashmap</span>
    private Map<Integer, Ticket> ticketDatabase = new LinkedHashMap<>();

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
	<span class = "comments">// page is routed based on get params </span>
        String action = request.getParameter("action");
        if(action == null)
            action = "list";
        switch(action)
        {
            case "create":
                this.showTicketForm(request, response);
                break;
            case "view":
                this.viewTicket(request, response);
                break;
            case "download":
                this.downloadAttachment(request, response);
                break;
            case "list":
            default:
                this.listTickets(request, response);
                break;
        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        String action = request.getParameter("action");
        if(action == null)
            action = "list";
        switch(action)
        {
            case "create":
                this.createTicket(request, response);
                break;
            case "list":
            default:
		<span class = "comments">// redirects the browser to route</span>
                response.sendRedirect("tickets");
                break;
        }
    }
    
    private void showTicketForm(HttpServletRequest request,
                                HttpServletResponse response)
            throws ServletException, IOException
    {
	<span class = "comments">// sends the user to this resource</span>
        request.getRequestDispatcher("/WEB-INF/jsp/view/ticketForm.jsp")
               .forward(request, response);
    }

    private void viewTicket(HttpServletRequest request,
                            HttpServletResponse response)
            throws ServletException, IOException
    {
        String idString = request.getParameter("ticketId");
        Ticket ticket = this.getTicket(idString, response);
        if(ticket == null)
            return;

	<span class = "comments">// sets request object to these value</span>
        request.setAttribute("ticketId", idString);
        request.setAttribute("ticket", ticket);

	<span class = "comments">// forwards the request values to resource</span>
        request.getRequestDispatcher("/WEB-INF/jsp/view/viewTicket.jsp")
               .forward(request, response);
    }

    private void downloadAttachment(HttpServletRequest request,
                                    HttpServletResponse response)
            throws ServletException, IOException
    {
        String idString = request.getParameter("ticketId");
        Ticket ticket = this.getTicket(idString, response);
        if(ticket == null)
            return;

        String name = request.getParameter("attachment");
	<span class = "comments">// sends user back to ticket, if name missing</span>
        if(name == null)
        {
            response.sendRedirect("tickets?action=view&ticketId=" + idString);
            return;
        }

        Attachment attachment = ticket.getAttachment(name);
	<span class = "comments">// sends user back to ticket, if file not submitted</span>
        if(attachment == null)
        {
            response.sendRedirect("tickets?action=view&ticketId=" + idString);
            return;
        }

	<span class = "comments">// set header and stream for file</span>
        response.setHeader("Content-Disposition",
                "attachment; filename=" + attachment.getName());
        response.setContentType("application/octet-stream");

        ServletOutputStream stream = response.getOutputStream();
	<span class = "comments">// writes stream to object attachment</span>
        stream.write(attachment.getContents());
    }

    private void listTickets(HttpServletRequest request,
                             HttpServletResponse response)
            throws ServletException, IOException
    {
        request.setAttribute("ticketDatabase", this.ticketDatabase);

        request.getRequestDispatcher("/WEB-INF/jsp/view/listTickets.jsp")
                .forward(request, response);
    }

    private void createTicket(HttpServletRequest request,
                              HttpServletResponse response)
            throws ServletException, IOException
    {
        Ticket ticket = new Ticket();
	<span class = "comments">// initialize name, subject, body</span>
        ticket.setCustomerName(request.getParameter("customerName"));
        ticket.setSubject(request.getParameter("subject"));
        ticket.setBody(request.getParameter("body"));

	<span class = "comments">// if file downloaded, process it</span>
        Part filePart = request.getPart("file1");
        if(filePart != null && filePart.getSize() > 0)
        {
            Attachment attachment = this.processAttachment(filePart);
            if(attachment != null)
                ticket.addAttachment(attachment);
        }

        int id;
	<span class = "comments">// executes both lines, w/o interuptions</span>
        synchronized(this)
        {
            id = this.TICKET_ID_SEQUENCE++;
            this.ticketDatabase.put(id, ticket);
        }

        response.sendRedirect("tickets?action=view&ticketId=" + id);
    }

    private Attachment processAttachment(Part filePart)
            throws IOException
    {
        InputStream inputStream = filePart.getInputStream();
        ByteArrayOutputStream outputStream = new ByteArrayOutputStream();

        int read;
        final byte[] bytes = new byte[1024];

	<span class = "comments">// writes the contents of the stream to a bye array</span>
        while((read = inputStream.read(bytes)) != -1)
        {
            outputStream.write(bytes, 0, read);
        }

        Attachment attachment = new Attachment();
        attachment.setName(filePart.getSubmittedFileName());
	<span class = "comments">// set contents in the object</span>
	attachment.setContents(outputStream.toByteArray());

        return attachment;
    }

    private Ticket getTicket(String idString, HttpServletResponse response)
            throws ServletException, IOException
    {
        if(idString == null || idString.length() == 0)
        {
            response.sendRedirect("tickets");
            return null;
        }

        try
        {
            Ticket ticket = this.ticketDatabase.get(Integer.parseInt(idString));
            if(ticket == null)
            {
                response.sendRedirect("tickets");
                return null;
            }
            return ticket;
        }
        catch(Exception e)
        {
            response.sendRedirect("tickets");
            return null;
        }
    }
}</pre>

<p>This probably looks really confusing. The gist of the problem is that you create tickets using a form. The ticket is stored in a hashmap which can be accessed via links in the view tickets page. The tickets are tracked with their own id's, each ticket has a name, subject body and possibly file. There is a ticket class which contains methods for setting and getting these values as well as a class for storing our files (name, contents).

<span class = "nl">Below I will show each form and some of the JSP files responsible for displaying the ticket contents.</span></p>

<hr />

<h2>Create Ticket Form</h2>

	   <p>This is the form for creating tickets. Everytime this form is submitted a new ticket instance is created and initialized with the request values for each of these fields.

<span class = "nl">The download is optional.</span></p>

<em>ticketForm.jsp</em>
<pre class = "code">&lt;%@ page session="false" %>
&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Customer Support&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h2>Create a Ticket&lt;/h2>
        &lt;form method="POST" action="tickets" enctype="multipart/form-data">
            &lt;input type="hidden" name="action" value="create"/>
            Your Name &lt;br/>
            &lt;input type="text" name="customerName"> &lt;br/>&lt;br/>
            Subject &lt;br/>
            &lt;input type="text" name="subject"> &lt;br/>&lt;br/>
            Body &lt;br/>
            &lt;textarea name="body" rows="5" cols="30">&lt;/textarea> &lt;br/>&lt;br/>
            &lt;b>Attachments &lt;/b>&lt;br/>
            &lt;input type="file" name="file1"/> &lt;br/>&lt;br/>
            &lt;input type="submit" value="Submit"/>
        &lt;/form>
    &lt;/body>
&lt;/html></pre>

<hr />

<h2>List Ticket JSP</h2>

	<p>The next JSP file's purpose is to list tickets jsp which should display along a link to display the contents of each ticket. The way this JSP form works is by checking the values within the ticket object, each ticket object is paired with an interger value (that value being the ticketId).

<span class = "nl">Once the ticket has been requested we can append the customers name, their ticket Id, and their ticket subject to the list.<span class = "nl">

<span class = "nl">A for loop ensures that each ticket is printed in the hashmap.</span></p>

<em>listTickets.jsp</em>
<pre class = "code">&lt;%@ page session="false" import="java.util.Map" %>
&lt;%
    @SuppressWarnings("unchecked")
    Map&lt;Integer, Ticket> ticketDatabase =
            (Map&lt;Integer, Ticket>)request.getAttribute("ticketDatabase");
%>
&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Customer Support&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h2>Tickets&lt;/h2>
        &lt;a href="&lt;c:url value="/tickets">
            &lt;c:param name="action" value="create" />
        &lt;/c:url>">Create Ticket&lt;/a> &lt;br />&lt;br />
        &lt;%
            if(ticketDatabase.size() == 0)
            {
                %>&lt;i>There are no tickets in the system.&lt;/i>&lt;%
            }
            else
            {
                for(int id : ticketDatabase.keySet())
                {
                    String idString = Integer.toString(id);
                    Ticket ticket = ticketDatabase.get(id);
                    %>Ticket #&lt;%= idString %>: &lt;a href="&lt;c:url value="/tickets">
                        &lt;c:param name="action" value="view" />
                        &lt;c:param name="ticketId" value="&lt;%= idString %>" />
                    &lt;/c:url>">&lt;%= ticket.getSubject() %>&lt;/a> (customer:
        &lt;%= ticket.getCustomerName() %>)&lt;br />&lt;%
                }
            }
        %>
    &lt;/body>
&lt;/html></pre>

<p>Like all our forms the link goes back to our main ticketServlet class which then routes our client based on the value of their action. In this case we know that we will be forwarded to the view ticket page from our main function with the ticketId.</p>

<hr />

<h2>View Ticket JSP</h2>

	 <p>Here our final JSP before going over the classes to store the attachment and ticket objects.

</p>

<em>viewTicket.jsp</em>
<pre class = "code">&lt;%@ page session="false" %>
&lt;%
    String ticketId = (String)request.getAttribute("ticketId");
    Ticket ticket = (Ticket)request.getAttribute("ticket");
%>
&lt;!DOCTYPE html>
&lt;html>
    &lt;head>
        &lt;title>Customer Support&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h2>Ticket #&lt;%= ticketId %>: &lt;%= ticket.getSubject() %>&lt;/h2>
        &lt;i>Customer Name - &lt;%= ticket.getCustomerName() %>&lt;/i> &lt;br />&lt;br />
        &lt;%= ticket.getBody() %>&lt;br />&lt;br />
        &lt;%
            if(ticket.getNumberOfAttachments() > 0)
            {
                %>Attachments: &lt;%
                int i = 0;
                for(Attachment a : ticket.getAttachments())
                {
                    if(i++ > 0)
                        out.print(", ");
                    %>&lt;a href="&lt;c:url value="/tickets">
                        &lt;c:param name="action" value="download" />
                        &lt;c:param name="ticketId" value="&lt;%= ticketId %>" />
                        &lt;c:param name="attachment" value="&lt;%= a.getName() %>" />
                    &lt;/c:url>">&lt;%= a.getName() %>&lt;/a>&lt;%
                }
                %>&lt;br /> &lt;br />&lt;%
            }
        %>
        &lt;a href="<c:url value="/tickets" />">Return to list tickets&lt;/a>
    &lt;/body>
&lt;/html></pre>

<p>The classes for the ticket and attachment will be included in the next section where we add authentication and sessions. This will pretty much do it for our ticket program.</p>


<hr />
  <br />
 <a href="Java_Web4.php">Previous Page</a>
<span class = "next"><a href = "Java_Web6.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>


