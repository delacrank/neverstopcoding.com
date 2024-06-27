<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Entity Framework - .Net Framework</title>
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
<?php include('..//Includes//Left_dotNet.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Entity Framework - .Net Framework</h1>

<!-- Entity Framework -->
<h2>Entity Framework approaches</h2>

    <p>Entity Framework is a way to create and use Relational Databases through Visual Studio. One approach to create an 'ADO.net Entity Data Model', connecting it to a server and then proceed to auto-generate a database based on this model (can have: tables, relationships between those tables).  Futhermore, visual studio will also auto-generate the code in c# based on this model.
        
    <span class = "nl">Below, I have listed several different approaches in which to use entity framework.</span></p>
    
    <ul id = "li">
        <li>One of the ways consists by creating a models in the designer, then using those models to generate a Database and finally auto-generating the code based on those models. </li>
        <li>The second way is to already have a database created and then using the models to modify our database.  From here, we can auto-generate the code necessary. </li>
        <li>The third way, is to define the classes and mapping first by writing out the code. Then, creating the database based on the models.</li>
        <li>The final way is to create classes through code and then mapping to an already existing database.</li>
    </ul> 
    
<hr />    
    
<!-- Model.edmx file -->
<h2>Model.edmx File</h2>

<p>If we decide to go with the database first approach, we will have to create a Entity Data Model.  In the design view of this file, we can simply create tables, add columns, configure the properties of those columns, create relationships between the tables, etc.  Then, we can auto-generate a  database after we have created a connection string to our server.
    
<span class = "nl">Creating the database will also generate several files:</span> </p>
    
    <ul id = "li">
        <li><b>App.config</b> Provides a lot of the backend information in terms of which framework libraries to access, what connection string to use, which server to use, etc. </li>
        <li><b>Model.emdx.sql</b> Tells the program which server to use and will write the Sql scripts for: creating, altering, establishing relationships, and querying information for our tables. </li>
        <li><b>Model.Context.tt</b> Contains the template for our entire model.</li>
        <li><b>Model.Context.cs</b> Contains the c# code for mapping our database tables to our web application.</li>
        <li><b>Model.tt</b> Contains the template for each 'cs' file pertaining to <u>individual</u> tables in our database.</li>
        <li>The other files undernearth our template just contain classes which pertain to every table in our database, one class file per table.</li>
    </ul>

<hr />    
    
<!-- App.Config file -->
<h2>App.Config file</h2>

    <p>Let's start by looking at this 'app.config' file, which is sort of the backbone of many of the connections going on between our server and our web application. There will be three things which are of value in this 'app.config' file: Connection strings, default connection, and providers.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;configuration> 

    <span class="comments">// Added as part of installing entity framework through NuGet Packages </span>
  &lt;configSections>
    &lt;section name="entityFramework"
    type="System.Data.Entity.Internal.ConfigFile.EntityFrameworkSection,
    EntityFramework, Version=6.0.0.0, Culture=neutral, 
    PublicKeyToken=b77a5c561934e089" requirePermission="false" />
  &lt;/configSections>

<span class="comments">// Tells our application which version of .NetFramework to use </span>
  &lt;startup>
    &lt;supportedRuntime version="v4.0" sku=".NETFramework,Version=v4.5" />
  &lt;/startup>

<span class="comments">// Our connection strings to link to our server </span>
  &lt;connectionStrings>
    &lt;add name="<span class="highlight">ModelContainer</span>" connectionString="metadata=res://*/Model1.csdl|
    res://*/Model1.ssdl|res://*/Model1.msl;provider=System.Data.SqlClient;
    provider connection string=&quot;data source=JUAN-HP\SQLEXPRESS;
    initial catalog=BruteForce;integrated security=True;MultipleActiveResultSets=True;
    App=EntityFramework&quot;" providerName="System.Data.EntityClient" />
  &lt;/connectionStrings>

<span class="comments">// Where to look for the database if a connection string hasn't been added </span>
  &lt;entityFramework>
    &lt;defaultConnectionFactory
    type="System.Data.Entity.Infrastructure.SqlConnectionFactory, EntityFramework" />

<span class="comments">// Registers our service provider (SQLServer) </span>
    &lt;providers>
      &lt;provider invariantName="System.Data.SqlClient"
      type="System.Data.Entity.SqlServer.SqlProviderServices, EntityFramework.SqlServer" />
    &lt;/providers>
  &lt;/entityFramework>
&lt;/configuration></pre>

<br />
<hr />
    
<!-- Model.emdx.sql -->
<h2>Model.emdx.sql</h2>

    <p>Let's take a look at the script which creates tables in our database, this will all be written using SQL. Once you add an entity in the designer, you will need to create a script for it.  The script will look like this, after you execute the script, the table will be added to your database.</p>

<em>Code:</em>
<!-- Code Model.emdx.sql -->
<pre class="code">
-- --------------------------------------------------
-- Entity Designer DDL Script for SQL Server 2005, 2008, 2012 and Azure
-- --------------------------------------------------

<span class="comments">// Use this database</span>
SET QUOTED_IDENTIFIER OFF;
GO
USE [BruteForce];
GO
IF SCHEMA_ID(N'dbo') IS NULL EXECUTE(N'CREATE SCHEMA [dbo]');
GO

-- --------------------------------------------------
-- Creating all tables<br />
-- --------------------------------------------------

<span class="comments">// Create this table, set the column attributes</span>
CREATE TABLE [dbo].[Classes] (
    [Id] int IDENTITY(1,1) NOT NULL,
    [Name] nvarchar(max)  NOT NULL,
    [Count] int  NULL
);
GO

-- --------------------------------------------------
-- Creating all PRIMARY KEY constraints
-- --------------------------------------------------

<span class="comments">// Declare constraints</span>
ALTER TABLE [dbo].[Classes]
ADD CONSTRAINT [PK_Classes]
    PRIMARY KEY CLUSTERED ([Id] ASC);
GO

-- --------------------------------------------------
-- Script has ended
-- --------------------------------------------------
</pre>

<br />
<hr />

<!-- Model.Context.cs -->
<h2>Model.Context.cs</h2>

<p>This file is responsible for linking every class file pertaining to database tables in our model. Let's look at some auto-generated code from our 'model.context.tt' file.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
namespace ConsoleApplication1 
{ 
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Infrastructure;
    
    public partial class <span class="highlight">ModelContainer</span> : DbContext
    { 
        public <span class="highlight">ModelContainer</span>() : base("name=<span class="highlight">ModelContainer</span>")
        {
        }
    
        protected override void OnModelCreating (DbModelBuilder modelBuilder)
        { 
            throw new UnintentionalCodeFirstException();
        }
    
        <span class="comments">// Links the table 'Class' in our database to our program </span>
        public virtual DbSet&lt;Class> <span class="highlight3">Classes</span> 
        { get; set; }
    }
}</pre>
    
<br />
<hr />

<!-- Table.cs file -->
<h2>Table.cs file</h2>

<p>Each table will contain its own .cs file, below is an example of just one table. The the last line of our code we had a method which linked to a class file, lets look at that code to understand what's going on.</p>

<em>Code:</em>
<!-- code -->
<pre class ="code">
namespace ConsoleApplication1
{
    using System;
    using System.Collections.Generic;
    
    <span class="comments">// If I have a many to many association
    // Then this method will be created as well to link the tables
    </span>public Class()
    {
        this.<span class="highlight2">Students</span> = new HashSet&lt;Student>();
    }

    <span class="comments">// A table named 'Class'</span>
    [Table("Class")]
    public partial class <span class="highlight3">Class</span>
    {
        <span class="comments">// Primary Key</span>
        [Key]
        public int Id { get; set; }
        <span class="comments">// Column Name</span>
        public string Name { get; set; }
        <span class="comments">// Nullable Column</span>
        public Nullable&lt;int> Count { get; set; }

        <span class="comments">// Shared table</span>
        public virtual ICollection&lt;Student> <span class="highlight2">Students</span> { get; set; }
    }
}</pre>

<br />
<hr />
    
<!-- Code first Entity Framework -->
<h2>Code first Entity Framework (adding Data) </h2>

    <p>Let's say that we already have a database and we just want to link our database to our code.  We still need to create an 'ADO.net Entity model' only this time we will choose 'code first' approach.
        
<span class = "nl">The model will map our database by creating our 'Model.Context.cs', and a class for every table in our database.  All that is left is to write some code to access our database, now we can actually <b>add</b> data to our tables via the console, or our web application.</span> </p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
class Program
{
    static void Main(string[] args)
    {
        <span class="comments">// Create an instance of a Model.Context.cs method</span>
        using (var db = new <span class="highlight">ModelContainer</span>())
        {
            <span class="comments">// Check to see that primary key exists before adding data</span>
            int id = 1;
            if (db.Students.Count() > 0)
            {
                id = db.Students.Max(x => x.Id) + 1;   
            }

            <span class="comments">// Ask the user to input data into column</span>
            Console.Write("Enter an ID for Student: ");
            var <span class="highlight2">id</span> = Console.ReadLine();
               
            Console.Write("Enter a name for Student: ");
            var <span class="highlight2">name</span> = Console.ReadLine();
          
            Console.Write("Enter an address for Student: ");
            var <span class="highlight2">address</span> = Console.ReadLine();

            <span class="comments">// Set the variables equal to column names in our table</span>
            var <span class="highlight3">student</span> = new Student
            { Id = <span class="highlight2">id</span>,
                 Name = <span class="highlight2">name</span>, Address = <span class="highlight2">address</span> };
            <span class="comments">// Add our collection to the table via our context method</span>
            db.Students.Add(<span class="highlight3">student</span>);
            <span class="comments">// Commit those records to the table</span>
            db.SaveChanges();

            <span class="comments">// Query the data</span>
            var query = from b in db.Students
                            orderby b.Name
                            select b;

            <span class="comments">// Display it</span>
            Console.WriteLine("All students in the database:");
            foreach (var item in query)
            {
                <span class="comments">// We can also modify existing data in our query</span>
                item.Address += " Updated";
                Console.WriteLine("Name = {0}, Address = {1}", item.Name, item.Address);
            }

            Console.WriteLine("Press any key to exit...");
            Console.ReadKey(); 
         }
    }
}</pre>

<hr />
<br />
<a href="dotNet3.html">Previous</a><span class="next"><a href="dotNet5.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>