<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Shopping Cart Application 1</title>
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
<?php include('..//Includes//Left_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Web Applications</h1>
    
<h2>Building a Shopping Cart Application</h2>

    <p>The shopping cart application, is an extremely large application. I might possibly go back and re-edit this section, to ensure that newest functions and safest methods are being used.
    
    <span class = "nl">In order to build this application let's understand first the type of database that we will be using for users, orders, and items.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create administrator table</span>
    CREATE TABLE `admin` (
    `username` char(16) NOT NULL,
    `password` char(40) NOT NULL,
    PRIMARY KEY (`username`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 </pre>
    
    <p>This first table is primary used for controlling adminstrative access to the shopping cart application. The reason for having a user with admin priviledges is to allow certain users to add or remove items from the database.
    
    <span class = "nl">Say for example a new item is in stock, or changing prices, etc. Let's look at the next table which holds the items.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create books (items) table</span>
    CREATE TABLE `books` (
    `isbn` char(13) NOT NULL,
    `author` char(80) DEFAULT NULL,
    `title` char(100) DEFAULT NULL,
    `catid` int(10) unsigned DEFAULT NULL,
    `price` float(4,2) NOT NULL,
    `description` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`isbn`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1</pre>
    
    <p>Doesn't necessarily need to be books, but this is just a hypothetical example of what sorts of items our online store could contain. The next table categories further divides the books into different sections. We will have a deeper understanding once we see the relationships between the tables.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create categories table</span>
    CREATE TABLE `categories` (
    `catid` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `catname` char(60) NOT NULL,
    PRIMARY KEY (`catid`)
    ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1</pre>
    
    <p>This data is important for creating differences between our items, without categories it would be difficult to distinguish between two types of books or a book and a basketball for example. At least we know that both books would have the same categories id, but the basketball should have a different id because it is in a different category.
    
    <span class = "nl">Since this is a small online store, I would imagine that we will just have different genres of books. Now, let's look at another table customers.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create customers table</span>
    CREATE TABLE `customers` (
    `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` char(60) NOT NULL,
    `address` char(80) NOT NULL,
    `city` char(30) NOT NULL,
    `state` char(20) DEFAULT NULL,
    `zip` char(10) DEFAULT NULL,
    `country` char(20) NOT NULL,
    PRIMARY KEY (`customerid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1</pre>
    
    <p>Here we can store information on our customers, say for example if a customer makes a purchase and we need to be able to contact them. Maybe the item isn't in stock or their address was incorrect.
    
    <span class='nl'>Let's look at our final two tables orders and order-items.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create orders table</span>
    CREATE TABLE `orders` (
    `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `customerid` int(10) unsigned NOT NULL,
    `amount` float(6,2) DEFAULT NULL,
    `date` date NOT NULL,
    `order_status` char(10) DEFAULT NULL,
    `ship_name` char(60) NOT NULL,
    `ship_address` char(80) NOT NULL,
    `ship_city` char(30) NOT NULL,
    `ship_state` char(20) DEFAULT NULL,
    `ship_zip` char(10) DEFAULT NULL,
    `ship_country` char(20) NOT NULL,
    PRIMARY KEY (`orderid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1</pre>
    
    <p>Orders table is important for establishing the shipping details of the item. Let's say the customer is sending a gift to someone else, or if they are shipping the item to their job instead of their home.
    
    <span class = 'nl'>Our final table is an interesting one, because it acts like a join between two different tables, orders and items. I'll explain how after you've seen the code.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = 'comments'># Create order items table</span>
    CREATE TABLE `order_items` (
    `orderid` int(10) unsigned NOT NULL,
    `isbn` char(13) NOT NULL,
    `item_price` float(4,2) NOT NULL,
    `quantity` tinyint(3) unsigned NOT NULL,
    PRIMARY KEY (`orderid`,`isbn`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1</pre>
    
    <p>This table establishes the pricing, destination and quantity for a set item. By looking solely at this table an employee can determine how much, what type and what to charge for the item being sent. Yet, they wouldn't know who to bill or where to ship the item too without the customers or orders table. This is why its important to have primary keys.
    
    <span class ='nl'>In order to organize our data.</span>
    </p>
    
    
<hr />
<br />
<a href = "Web_Apps6.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps8.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     