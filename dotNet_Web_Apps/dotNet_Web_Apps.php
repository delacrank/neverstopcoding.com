<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Intro</title>
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
<?php include('..//Includes//Left_dotNet_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>.NET Web Applications</h1>
    
    <h2>Setting up and Requirements</h2>
    
    <p>Before we do anything let's establish to things first, setup and installation. The two programs you will need to have are Visual Studio and SQL Server, which can be downloaded and installed for free. The version of visual studio necessary is called <a href="https://www.visualstudio.com/downloads/" target="_blank">Visual Studio Community Edition</a>, simply create an account with microsoft and by logging in you version won't expire after the 180 trial period.
    
    <span class = "nl">As for downloading SQL Server, you must have the right operating in order to match the version of SQL Server. SQL Server 2016 - 2017 only run on windows operating system of Windows 8 and above (Windows 10). SQL Server 2014 and 2012 should work fine on Windows 7. The Developer and Express edition's for <a href="https://www.microsoft.com/en-us/sql-server/sql-server-downloads" target="_blank">SQL Server</a> is free. Just type in the name of the version in your search bar and I'm sure it should pop up as a first or second result. </span>
    
    <span class = "nl">Once you have properly installed Visual Studio Community Edition, you might want to be able to follow along with this tutorial. So, in order to do that I suggest you create a new project. You can do this by clicking file -> new -> project. Then you can scroll down to templates -> visual C# -> Asp.net Web Application.</span>
    </p>
    
    <img style="width: 100%" src="../Images/New%20Project.PNG"/>
    
    <p>Once you have managed to create an empty project you can start by adding a web form to your project. This can be accomplished by clicking solution explorer and selecting add -> web form.</p>
    
    <img style="width: 100%" src="../Images/Web_form.PNG"/>
    
    <hr />
    
    <h2>Introduction to Web Forms</h2>
    
    
    
    
    <p>There are several ways to run .Net web applications. There is a option which using something called razor forms. This is where you can embed C# into your html code, similar to the way PhP works with its opening and closing tags (&lt;?php ... ?>). 
        
    <span class = "nl">The Razor tags look similar to the php tags in that they use less then greater then symbols to start and close the tags, only they use percentage signs instead of question marks. Razor pages use the '.htmlcs' file ending.</span>
    
    <span class = "nl">Let's look at an example of this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// write hello world using the response.write method</span>
    &lt;% response.write('hello world'); %></pre>
    
    <p>In this tutorial we are going to be working with a form of ASP which is called web forms. They use the '.aspx' ending for the files, and the coding is contained in files that end with '.apsx.cs'. 
    
    <span class = "nl">Let's look at the layout of a typical web form its coding file. Also, let's see what happens when we inspect our web browser to see the html which is generated from our form.</span></p>
    
    <em>Code:</em>
    <!--  Code  -->
    &lt;<pre class="code">
    <span class = "comments">&lt;!-- Default.aspx --></span>
    &lt;%@ Page Language="C#" AutoEventWireup="true"
    CodeFile="Default.aspx.cs" Inherits="Default" %>

    &lt;!DOCTYPE html>

    &lt;html xmlns="http://www.w3.org/1999/xhtml">
    <span class = "comments">// head includes attribute 'runat="server"'</span>
    &lt;head runat="server">
        &lt;title>&lt;/title>
    &lt;/head>
    &lt;body>
        <span class = "comments">// form includes attribute 'runat="server"'</span>
        &lt;form id="form1" runat="server">
        &lt;div>

        &lt;/div>
        &lt;/form>
    &lt;/body>
    &lt;/html></pre>
    
    <p>The main differences here is that there is some razor syntax at the very beginning of the page which declares the langage (could be visual basic), sets AutoEventWireup equal to true, links the codefile to the file's name plus the .cs extenstion and makes it inherit its own file name.
    
    <span class = "nl">There are also some other differences, the head and form tags contains an attribute called ' runat="server" '. ASP.Net web forms use an IIS (Internet Information Services) server instead of a Apache server like PHP does.</span>
    
    <span class = "nl">Now, let's look at the code behind file (Default.aspx.cs).</span></p>
    
    <em>Code:</em>
    <!--  Code  -->
    <pre class="code">
    <span class = "comments">// Include necessary files</span>
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Web;
    using System.Web.UI;
    using System.Web.UI.WebControls;

    <span class = "comments">// Inherit from System.Web.UI.Page</span>
    public partial class Default : System.Web.UI.Page
    {
        <span class = "comments">// This method performs actions upon loading the page</span>
        protected void Page_Load(object sender, EventArgs e)
        {
            <span class = "comments">// Let's test something out</span>
            Response.Write("Hello, World");
        }
    }</pre>
    
    <p>This isn't that complicated, there are a few methods from .net library but everything else is basically just C#. Our first method just simply invokes the Page_Load, which performs any actions upon the page being loaded by the broswer. If I typed in 'response.write('hello world');' here it would display that in my html page when it was loaded.
    
    <span class = "nl">Code written in the code behind file will not appear on our aspx page, it will simly be rendered at runtime when the html is being dynamically genrated by our IIS server and then that page will be sent to our clients server using http. </span>
        
    <span class="nl">Of course we can send the page to ourselves to see what it would look like. Thats why we test these pages using our local server. Let's look at the html which is generated by using these pages (aspx and code behind aspx.cs).</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">&lt;!-- Our response.write("hello world"); --></span>
    hello world

    &lt;!DOCTYPE html>

    &lt;html xmlns="http://www.w3.org/1999/xhtml">
    &lt;head>&lt;title>

    &lt;/title>&lt;/head>
    &lt;body>
    <span class = "comments">&lt;!-- What active server pages generated --></span>
        &lt;form method="post" action="./Default.aspx" id="form1">
    <span class = "comments">&lt;!-- A hidden field which sends the information for the view state --></span>
    &lt;div class="aspNetHidden">
    &lt;input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" 
    value="+hH59Zv/D2MHrfiGI1R0bUIhlcOTyj9dYd0NFSlTxONQeDQmUv
    CKPZCknUde4B7+DnbEQlNLv+kitp2BITkhkYHROe0AW2v6xF0AydnNGuY=" />
    &lt;/div>
        &lt;div>

        &lt;/div>

    <span class = "comments">&lt;!-- Apparently the view state generator --></span>
    &lt;div class="aspNetHidden">
        &lt;input type="hidden" name="__VIEWSTATEGENERATOR" 
        id="__VIEWSTATEGENERATOR" value="0564CA07" />
    &lt;/div>&lt;/form>

    &lt;!-- Visual Studio Browser Link -->
    &lt;script type="application/json" id="__browserLink_initializationData">
        {"appName":"Chrome","requestId":"2efd9bec92314f3faa4c0eec882bdc60"}
    &lt;/script>
    &lt;script type="text/javascript" src="http://localhost:52780/719ff9a1ea73404
    c8d273225a97dd9d8/browserLink" async="async">&lt;/script>
    &lt;!-- End Browser Link -->

    &lt;/body>
    &lt;/html></pre>
    
    <p>This looks really complicated, but its really not. First let's understand what a view state is. Http is a stateless protocal, which means that it can't remember what happened in that last request or post. A way to combat this is by using the server to store information, however to do this and remain secure the server needs some form of encrpytion, that is the key you are seeing being generated by the view state.
        
        <span class = "nl">There is also a session state which we will find out about later. Let's move on to our next application.</span></p>
    
    
<hr />
<br />
<a href="dotNet_Web_Apps1.php">Next Page</a>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>()