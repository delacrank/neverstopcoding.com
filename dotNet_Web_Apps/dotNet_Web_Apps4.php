<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Web Forms</title>
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
    
<h2>Setting up the database connection</h2>
    
    <p>Since we've built the database, the next step is to create our web form and possibly create a connection string from our database to our application.
    
    <span class = "nl">First we actually want to either create or attach an existing database to our server. To find the source code for these files and for the Murach Database I am using for this application you can find those resources <a href="https://www.murach.com/shop/murach-s-asp_net-4_5-web-programming-with-c-2012-detail" target="_blank">here</a>.</span></p>
    
    <img style='width:100%' src='../Images/sql_studio.PNG'/>
        
    <p>From there you can simply go to SQL Server Management Studio, open it up as administrator, make sure that you have allowed for the priviledges for the database file (halloween.mdf). Then you can go to the Databases directory right click and attach it there. Or if that doesn't work simply open the script and run it, then you should have the access to the database.</p>
    
     <img style='width:100%' src='../Images/attach_db.PNG'/>
        
    <p>Once you have created the database you want to connect to it from the visual studio stand point. First create a folder and name it App_data, then add an item to that folder and search for existing item, and navigate to the folder where the database is stored.</p>
    
    <img style='width:100%' src='../Images/halloween.PNG'/>
    
    <p>That's one way to create a connection to the database, another way is to simply create a connection string to the database using the data tools. First find the SQLDataSource and drag it on to the designer view.  Then click on the arrow tag and select configure data source.
    
    <span class = "nl">From here you can select the table, the column, the rows you want selected and the order in which they are sorted by.</span></p>
    
    <img style='width:100%' src='../Images/Connection.PNG'/>
    
    <p>In the next section we are going to focus on building our order form and the code behind file for that web form.</p>
    
    
<hr />
<br />
<a href="dotNet_Web_Apps3.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps5.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>