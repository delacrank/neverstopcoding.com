<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Views Part 2 - Asp.net MVC</title>
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

<h2>Views Part 2 - Asp.net MVC</h2>
    
    <p>We are going to talk about html helpers, and how to passing information from our controller to our view.</p>
    
<hr />    
    
<!-- Strongly typed Views -->
<h3>Strongly typed Views</h3>
    
    <p>The difference between a strongly typed view and a weakly typed view is the implementation of our Intellisense and using our models to request data via our razor syntax from our model page (as appose to using the view bag and retrieving information from our controller).
        
        <span class = "nl"> Let's look at how we can create a list from a collection located in our controller.</span></p>

<em>Controller:</em>    
<!-- code -->    
<pre class="code">
namespace MvcApplication1.Controllers
{
    public class AlbumsController : Controller
    {
        public ActionResult ListWeaklyTyped()
        {
            var albums = new List&lt;Album>();
            for (int i = 0; i &lt; 10; i++)
            {
                <span class="highlight">albums</span>.Add(new Album { <span class="highlight2">Title</span> = "Album " + i });
            }
                <span class="comments">// Storing the data in a view bag</span>
            ViewBag.Albums = albums;
            return View();
        }
        public ActionResult ListStronglyTyped()
        {
            var albums = new List&lt;Album>();
            for (int i = 0; i &lt; 10; i++)
            {
            <span class="highlight">albums</span>.Add(new Album { <span class="highlight2">Title</span> = "Album " + i });
            }
            return View(albums);
        }
    }
}</pre>
<br />
    
<em>Model:</em>    
<!-- code -->    
<pre class="code">
namespace MvcApplication1.Models
{
    public class <span class="highlight3">Album</span>
    {
        public string <span class="highlight2">Title</span> { get; set; }
    }
}</pre>
<br />    
    
<em>Strongly typed view:</em>
<!-- code -->    
<pre class="code">   
@using <span class="highlight4">MvcApplication1.Models</span>;
@model IEnumerable&lt;<span class="highlight3">Album</span>>

&lt;ul>
<span class="comments">// Retrieves the data from the model</span>>
    @foreach(<span class="highlight3">Album</span> p in <span class="highlight4">Model</span>)
{
    &lt;li>@p.<span class="highlight2">Title</span>&lt;/li>
}
&lt;/ul></pre>
<br />
    
<em>Weakly Typed View:</em>
<!-- code -->    
<pre class="code">
@using MvcApplication1.Models;

&lt;ul>
<span class="comments">// Retrieves the data from the view bag</span>
@foreach(Album p in (ViewBag.Albums as IEnumerable&lt;Album>))
{
    &lt;li>@p.Title&lt;/li>
}
&lt;/ul></pre>
<br />
    
<em>Example:</em>
<!-- Example -->
<ul>
    <li>Album 0</li>
    <li>Album 1</li>
    <li>Album 2</li>
    <li>Album 3</li>
    <li>Album 4</li>
    <li>Album 5</li>
    <li>Album 6</li>
    <li>Album 7</li>
    <li>Album 8</li>
    <li>Album 9</li>
</ul>
    
<hr />    
<!-- Understanding Razor Syntax -->
<h3>Understanding Razor Syntax</h3>
    
    <p>When working with our views we are constantly using the '@' symbol to access our models and change the flow of are web application by imbedding our html page with c sharp.<br /><br />
    
    Let's see what an inline example of a model would look like.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code">
@{
    var <span class="highlight">items</span> = new string [] {"one", "two", "three"}; 
}

&lt;html>
    &lt;head>
        &lt;title>Example&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h1>Listing @items.Length items.&lt;/h1>
            &lt;ul>
                @foreach(var item in <span class="highlight">items</span>)
                {
                    &lt;li>The item name is @item.&lt;/li>
                }
            &lt;/ul>
    &lt;/body>
&lt;/html></pre>
    
    
<br />
<hr /><br />
<a href = "Mvc1.html"> Previous Page </a> 
    <span class ="next"><a href = "Mvc3.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>