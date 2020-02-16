<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />      
<title>Views and Layout - Asp.net MVC</title>
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
<h1>Views and Layout - Asp.net MVC</h1>

<!-- Working with views -->
<h2>Working with views</h2>    
    
    <p>View templates are added using the Razor view Engine.  Using this Engine we can generate views with our C# language embedded into our html.  This will provide our views with programming functionality like running loops, storing variables, etc.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
routes.MapRoute(
    name: "Default",
    url: "{controller}/{action}/{id}",
    defaults: new { controller = "Home", action = "Index", id = UrlParameter.Optional } 
);</pre>
    
<p>Let's create a new controller for our view.  Instead of creating a string method, we will return a view so let's create an ActionResult method capable of returning a view.  Give this view a name other than Index so it won't get confused with our original controller, maybe we can name it 'View1'.</p>    
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
public <span class="highlight">ActionResult</span> View1()
{
    return View();
}</pre>
    
<p>Okay, now let's create a folder and name it after one of our controllers.  In my situation, the first controller I created was named Default1. In the 'Views' folder I added view called 'View1' below is the syntax for that view. </p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
@{
    ViewBag.Title = "Index";
}

&lt;h2>Index&lt;/h2>
</pre>
    
<p>The '@' symbol allows you to break out of the html code and access C# code to store our view in a view bag called 'Index'.</p>

<hr />    
    
<!-- View Data and View Bag -->
<h3>View Data and View Bag</h3>
    
    <p>Both view data and view bag accomplish one thing, they allow you to pass data from the controller to the view.  Their purpose to is to serve as a form of communication between the controller and view.  Let's look at examples of how to access each.</p>
   
<em>ViewData:</em>    
<!-- Code -->
<pre class="code">
public ActionResult Index()
{
    ViewData["Name"] = "Juan Carlos";
    return View();    
}
    
<span class ="comments">// To access this in the view </span>
@ViewData["Name"];</pre>
<br />

<em>ViewBag:</em>
<!-- Code -->
<pre class="code">
public ActionResult Index()
{
    ViewBag.Name = "Juan Carlos";
    return View();
}
    
<span class ="comments">// To access this in the view</span>
@ViewBag.Name </pre>
    
<br />
<hr />
    
    
<!-- Adding a Layout -->    
<h3>Adding a Layout</h3>
    
    <p>In ASP.net there is something called MasterPage which allows you to control how all the pages are displayed allowing each page to have a header, footer, menu and navigation bar.  
        
        <span class = "nl">We can do something similar using ASP.net MVC, its called adding a layout.  The layout will determine how which CSS style page to add, Javascripts to add, meta tags, and any additional links for the navigating to other pages.</span>
    
        <span class = "nl">In order to add a layout to our project let's first start by adding a shared folder to our views folder.  Then we can add the layout by creating a view in our layout folder called '_Layout.cshtml'.  Below I will display a default 'layout' which is what is provided with the generic MVC application.</span> </p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;!DOCTYPE html>
    &lt;html>
    &lt;head>
        &lt;meta charset="utf-8" />
        &lt;meta name="viewport" content="width=device-width" />
        &lt;title>@ViewBag.Title&lt;/title>
    &lt;/head>
    &lt;body>
        @RenderBody()
    &lt;/body>
&lt;/html></pre>

    <p>This is just a basic template I have removed some of the content from a more developed MVC application, we will add more as we progress.</p>
  
<em>Code:</em>
<!-- Code -->
<pre class="code">
@{
    Layout = "~/Views/Shared/_Layout.cshtml";
}</pre>
    
<br />
<hr />    
    
<!-- Passing information from the controller to the view -->
<h3>Passing information from controller to view</h3>
    
    <p>Let's learn how we can use our controllers to add data to our view. Remeber when we created our first view in our Default1 controller and named it 'View1'.  Well, we are going to use that same method to pass information from our controller to our view.</p>
    
    
<em>Code:</em> 
<!-- Code -->
<pre class="code">
public ActionResult View1()
{
    <span class ="comments">// Adding a String under ViewData</span>
    ViewData["UserName"] = "Juan";
    return View();
}</pre>

<p>We stored a string under "UserName", now let's invoke that ViewData in our view .cshtml file.</p>
    
<em>Markup:</em>
<!-- Markup -->
<pre class="code">
@{
    Layout = "~/Views/Shared/_Layout.cshtml";
}
    
@{
    ViewBag.Title = "Index";
}

&lt;h2>Index&lt;/h2>
    
<span class="comments">// Invoking our ViewData from our controller</span>
&lt;p>@ViewData["UserName"]&lt;/p> </pre>
    
<p>Don't get confused with '@' tags and '&lt;%' tags when working with our .cshtml file.  The only time the razor view engine requires the '&lt;%' tags is when we are working with .aspx files.</p>

<hr /><br />
<a href = "Mvc.html"> Previous Page </a> 
    <span class ="next"><a href = "Mvc2.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>