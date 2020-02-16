<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Model Classes - Asp.net MVC</title>
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
<h1>Model Classes - Asp.net MVC</h1>

<h2>Adding Model Classes</h2>    
    
    <p> Alright, let's move on to adding models to our project, from here we can start using these models to store information from our views.  First go to the 'models' folder and add a new class, let's name this class Registration.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code">
using System;
using System.Data.Entity;
    
namespace MvcApplication1.Models
{
    public class Registration
    {
        public int ID { get; set; }
        public string UserName { get; set; }
        public string Password { get; set; }
    }
    
    public class RegistrationDbContext : DbContext
    {
        public DbSet&lt;Registration> Register { get; set; }
    }
}</pre>
    
<p>So I added a another reference to this class which was system.data.entity because eventually we will link this model to a database.  However, in order to do this, we need to be able access a class called Database context from Entity Framework first.  If you haven't already installed Entity Framework from NuGet Packages I would suggest installing it now, although I would recommend installing version 5.0.0.
    
    <span class = "nl">Alright, so now we just need to add a connection string to our web.config file in order to secure a connection to our database.  If you want to know the name of your connection string you can just add a new connection in 'Server Explorer', select the properties of that connection and copy, paste the connection string from there.</span>
    
    <span class = "nl">However, it is also possible to create a connection string to an existing database, Entity Framework will create a Local Database for you.  If you have any unresolved keywords like DbContext, you can right click the keyword select resolve and use the System.Data.Entity to resolve them.</span></p>
    
<hr />    
    
<!-- Adding a controller -->
<h3>Adding a Controller for our Model</h3>

    <p>This next step took me quite some time because the current version of Entity Framework doesn't work with my MVC, so I had to install Entity Framework version 6.1.3 and then install Entity Framework version 5.0.0 to get this feature to work.
        
    <span class = "nl">Go to our controllers folder and add a controller, only this time we are going to add a controller with 'MVC read/write actions and views, using Entity Framework'. Below are the code for the controller and the views it generated.</span></p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code">
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using MvcApplication1.Models;

namespace MvcApplication1.Controllers
{
    public class RegistrationController : Controller
    {
        <span class="comments">// Create an instance of our Database Context assign it to 'db'</span>
        private RegistrationDbContext db = new RegistrationDbContext();

        <span class="comments">// Return a view which displays a list of every user in our 
        // database in our regestration controller</span>
        public ActionResult Index()
        {
            return View(db.Register.ToList());
        }

        <span class="comments">// Display details of a selected username</span>
    public ActionResult Details(int id = 0)
        {
            Registration registration = db.Register.Find(id);
            if (registration == null)
            {
                return HttpNotFound();
            }
            return View(registration);
        }

        <span class="comments">// Return a the create view</span>  
        public ActionResult Create()
        {
            return View();
        }
        
        <span class="comments">// Post data submitted in our create view and save it to the database</span>
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Registration registration)
        {
            if (ModelState.IsValid)
            {
                db.Register.Add(registration);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(registration);
        }

        <span class="comments">// Return the edit view for editing a user</span>
        public ActionResult Edit(int id = 0)
        {
            Registration registration = db.Register.Find(id);
            if (registration == null)
            {
                return HttpNotFound();
            }
            return View(registration);
        }

        <span class="comments">// Save changes made in our edit view to the database</span>
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit(Registration registration)
        {
            if (ModelState.IsValid)
            {
                db.Entry(registration).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(registration);
        }

        <span class="comments">// Return the delete view for deleting a user</span>
        public ActionResult Delete(int id = 0)
        {
            Registration registration = db.Register.Find(id);
            if (registration == null)
            {
                return HttpNotFound();
            }
            return View(registration);
        }
        
        <span class="comments">// Save changes made from our delete view to the database</span>  
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Registration registration = db.Register.Find(id);
            db.Register.Remove(registration);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            db.Dispose();
            base.Dispose(disposing);
        }
    }
}</pre>
    
<p>Alright, where do I start by trying to explain exactly what we created.  The first thing you should know is that this controller is considered a CRUD: create, read, update and delete.  The next thing you should know is how we went about creating this CRUD; Scaffolding, which works by auto-generating code, code which can interact with our models.
    
    <span class = "nl">If we click on 'View' tab and select our SQL Server Object Explorer we will be able to see the Database Entity Framework created for us.  Also if we open up are Web.config file we will be able to see the Default Connection String also created by Entity Framework.</span>
    
    <span class = "nl">Next, let's take a look at other files which were generated by this code generation, but in our next section.</span></p>
    
<hr /><br />
<a href = "Mvc2.html"> Previous Page </a> 
    <span class ="next"><a href = "Mvc4.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>