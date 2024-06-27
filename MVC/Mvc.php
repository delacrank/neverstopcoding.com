<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Use patterns to create amazing web applications with Microsofts MVC asp.net. MVC stands for model view controller, it is a way to scale web applications by dividing the project into separate layers. " />
<meta name="keywords" content="Asp.net MVC" />
<meta name="author" content="Juan Arias" />  
<title>Introduction to Asp.net MVC</title>
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
<?php include('..//Includes//Left_Mvc.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<!-- Heading -->
<h1>Introduction to Asp.net MVC</h1>
    
    <p>Welcome to my Asp.net MVC section.  In this section we will learn about the Model View Controller Pattern and how to create dynamic webpages.  The purpose of using a Model (business layer), View (presentation layer), Controller (Control layer) is seperation of concerns.  By seperating each component you can have a more organized web application for larger scaling capabilities.</p>
    
<hr />    
    
<!-- Empty web application -->
<h2>Creating a Project</h2>
    
    <p>In order to create a project using Visual Studio, we can go to Create new Project, then under 'web' options select 'ASP.NET MVC 4 Web Application'. Then there are several options, for now let's just create an 'Empty web Application' which will provide us with the folders.<br /><br />
    
From here we have an empty web application with several folders, App_data, App_Start, Controllers, Models, and Views.  Let's start by creating a controller.</p>
    
<hr />    
    
<!-- Adding a controller -->
<h2>Adding a Controller</h2>
        
    <p>Go to the controller folder and add a new controller by right clicking on the folder, you can name it whatever you want.  Change the code from 'public ActionResult Index()' to 'public string Index()'. </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace MvcApplication1.Controllers
{
    public class Default1Controller : Controller
    {
        <span class = "comments">// GET: /Default1/</span>
        public string Index()
        {
            return "this is my Default action ...";
        }
        
        public string Welcome()
        {
            return "this is my Welcome Page . . .";
        }
    }
}</pre>
    
<p>Now run the application, and change the url to include your controller name after the local host.  I left my controller name with the 'Default1' hence the class name is Default1Controller.  So I will type '/Default1' after my local host.  This will also be known as the route.

    <span class ="nl">To access my welcome page, I just need to add '/Welcome' after my controller name so it would look like: '/Default1/Welcome'.</span></p>
    
<hr />

<!-- Adding a Route -->    
<h2>Adding a Route</h2>
        
    <p>Previously we added a controller and we were able to direct our users to the page using a url named after the controller class name ('Default1').
    
        <span class ="nl">Did you know we can add query strings to our url page by adding parameters to our controller.  Let's test this out first by adding parameters to our Welcome method in our Default controller.</span>   </p>
 
<em>Code:</em>    
<!-- code -->    
<pre class="code">
public string Welcome(string name, int numTimes = 1)
{
    return HttpUtility.HtmlEncode("Hello " + name + ", NumTimes is: " + numTimes);
}</pre>
    
<p>HttpUtility and HtmlEncode are just there to protect against any type of malicious code injections.
    
    <span class ="nl"> We can now type a name and a number in our url to select what type of information will be displayed once our page is rendered.</span>
    
    <span class ="nl"> From here we can just type in the url of our method name along with the name and numTime we want displayed.</span> </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
    Localhost:/Default1/Welcome?name = <span class="highlight">Name</span>&#38;numTimes = <span class="highlight">5</span>  </pre>
    
<p>Now everytime we want to browse a view for certain information whether it be a price or a name we can add parameters in our controller class to find that information.  Let's move on to understanding how we can add a route.
    
    <span class ="nl"> First we have to go to our App_start/RouteConfig.cs file.  Notice how are url is broken into 3 sections, the name of the controller (Default1), the action (its a string method), and the id (numTimes).</span></p>    
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Routing;

namespace MvcApplication1
{
    public class RouteConfig
    {
        public static void RegisterRoutes(RouteCollection routes)
        {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");

            routes.MapRoute(
                name: "Default",
                url: "{controller}/{action}/{id}",
                defaults: new { controller = "Home", action = "Index", id = 
                UrlParameter.Optional }
            );
    
            <span class="comments">// This is a route we just added</span>
            routes.MapRoute(
                    name: "Hello",
                    url: "{controller}/{action}/{name}/{numTimes}"
            );
        }
    }
}</pre>

<p>Now that we've added our new route let's try and type it in the url address bar and see what's rendered.</p>
    
<em>Code:</em>    
<!-- code -->
<pre class="code">
Localhost:/Default1/Welcome/Juan/5 </pre>
    
<br />
<hr /><br />
<a href = "Mvc1.html"> Next Page </a>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>