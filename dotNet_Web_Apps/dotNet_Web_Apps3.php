<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Database</title>
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
    
<h2>Understanding our database</h2>
    
    <p>Alright so first let's start with our database. First I want to establish that there are different syntaxes for different databases. The syntax for working with Ms SQL is called Transact Sequel and is more of an extension to SQL, in that is has some scripting capabilities.
    
    <span class = "nl">Let's look at the script first and then I can start to break down the code.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">-- Drop the database if it exists</span>
    IF DB_ID('Halloween') IS NOT NULL
	DROP DATABASE Halloween
	
    <span class = "comments">-- Create the database, Go simply means execute that command</span>
    CREATE DATABASE Halloween
    GO

    <span class = "comments">-- Use the database halloween</span>
    USE [Halloween]
    GO
    
    /****** Object:  Table [dbo].[Categories]  ******/
    <span class = "comments">-- Ensures that null values aren't returned or compared to other values</span>
    SET ANSI_NULLS ON
    GO
    
    <span class = "comments">-- Allows quoted values to be passed as string literals</span>
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table Categories as a Database object</span>
    CREATE TABLE [dbo].[Categories](
        [CategoryID] [varchar](10) NOT NULL,
        [ShortName] [varchar](15) NOT NULL,
        [LongName] [varchar](50) NOT NULL,
    <span class = "comments">-- Assign primary key to CategoryID in ascending order</span>
     CONSTRAINT [PK_Categories] PRIMARY KEY CLUSTERED 
    (
        [CategoryID] ASC
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[Customers]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table Customers</span>
    CREATE TABLE [dbo].[Customers](
        [Email] [varchar](25) NOT NULL,
        [LastName] [varchar](20) NOT NULL,
        [FirstName] [varchar](20) NOT NULL,
        [Address] [varchar](40) NOT NULL,
        [City] [varchar](30) NOT NULL,
        [State] [char](2) NOT NULL,
        [ZipCode] [varchar](9) NOT NULL,
        [PhoneNumber] [varchar](20) NOT NULL,
    <span class = "comments">-- Assign primary key to Email in ascending order</span>
     CONSTRAINT [PK_Customers] PRIMARY KEY CLUSTERED 
    (
        [Email] ASC
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[InvoiceData]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table InvoiceData</span>
    CREATE TABLE [dbo].[InvoiceData](
        [SalesTax] [money] NOT NULL
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[Invoices]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table Invoices</span>
    CREATE TABLE [dbo].[Invoices](
        [InvoiceNumber] [int] IDENTITY(1000,1) NOT NULL,
        [CustEmail] [varchar](25) NOT NULL,
        [OrderDate] [datetime] NOT NULL,
        [Subtotal] [money] NOT NULL,
        [ShipMethod] [varchar](50) NOT NULL,
        [Shipping] [money] NOT NULL,
        [SalesTax] [money] NOT NULL,
        [Total] [money] NOT NULL,
        [CreditCardType] [varchar](10) NOT NULL,
        [CardNumber] [varchar](20) NOT NULL,
        [ExpirationMonth] [smallint] NOT NULL,
        [ExpirationYear] [smallint] NOT NULL,
     <span class = "comments">-- Set primary key to InvoiceNumber</span>
     CONSTRAINT [PK_Invoices] PRIMARY KEY CLUSTERED 
    (
        [InvoiceNumber] ASC
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[LineItems]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create Table LineItems</span>
    CREATE TABLE [dbo].[LineItems](
        [InvoiceNumber] [int] NOT NULL,
        [ProductID] [char](10) NOT NULL,
        [UnitPrice] [money] NOT NULL,
        [Quantity] [int] NOT NULL,
        [Extension]  AS ([UnitPrice]*[Quantity]) PERSISTED,
    <span class = "comments">-- Set primary key to InvoiceNumber and ProductID</span>
     CONSTRAINT [PK_LineItems] PRIMARY KEY CLUSTERED 
    (
        [InvoiceNumber] ASC,
        [ProductID] ASC
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[Products]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table Products</span>
    CREATE TABLE [dbo].[Products](
        [ProductID] [char](10) NOT NULL,
        [Name] [varchar](50) NOT NULL,
        [ShortDescription] [varchar](200) NOT NULL,
        [LongDescription] [varchar](2000) NOT NULL,
        [CategoryID] [varchar](10) NOT NULL,
        [ImageFile] [varchar](30) NULL,
        [UnitPrice] [money] NOT NULL,
        [OnHand] [int] NOT NULL,
    <span class = "comments">-- Set primary key to ProductID</span>
     CONSTRAINT [PK_Products] PRIMARY KEY CLUSTERED 
    (
        [ProductID] ASC
    ) ON [PRIMARY]
    GO
    
    /****** Object:  Table [dbo].[States]  ******/
    SET ANSI_NULLS ON
    GO
    
    SET QUOTED_IDENTIFIER ON
    GO
    
    <span class = "comments">-- Create table States</span>
    CREATE TABLE [dbo].[States](
        [StateCode] [char](2) NOT NULL,
        [StateName] [varchar](20) NOT NULL,
    <span class = "comments">-- Set primary key to StatesCode</span>
     CONSTRAINT [PK_States] PRIMARY KEY CLUSTERED 
    (
        [StateCode] ASC
    ) ON [PRIMARY]
    GO
    
    <span class = "comments">-- Inserting values into table Categories</span>
    INSERT [dbo].[Categories] ([CategoryID], [ShortName], [LongName]) 
    VALUES (N'costumes', N'Costumes', N'Costumes')
  
    <span class = "comments">-- Identity Insert allows you to insert any value into the primary key </span>
    SET IDENTITY_INSERT [dbo].[Invoices] ON 

    INSERT [dbo].[Invoices] ([InvoiceNumber], [CustEmail], [OrderDate], [Subtotal],
    [ShipMethod], [Shipping], [SalesTax], [Total], [CreditCardType], [CardNumber],
    [ExpirationMonth], [ExpirationYear]) VALUES (1000, N'Albert@masterxmlrad.com',
    CAST(0x0000A1B200000000 AS DateTime), 119.9700, N'UPS', 4.2500, 9.0000, 133.2200,
    N'VISA', N'1111-2222-3333-4444', 7, 2017)
    
    <span class = "comments">-- Turning identity insert off allows the primary keys to auto increment the value</span>
    SET IDENTITY_INSERT [dbo].[Invoices] OFF
    
    INSERT [dbo].[LineItems] ([InvoiceNumber], [ProductID], [UnitPrice], [Quantity]) 
    VALUES (1000, N'frankc01  ', 39.9900, 3)
    
    INSERT [dbo].[Products] ([ProductID], [Name], [ShortDescription], [LongDescription],
    [CategoryID], [ImageFile], [UnitPrice], [OnHand]) VALUES (N'arm01     ', 
    N'Freddie Arm', N'Life-size Freddy arm',
    N'This arm will give people nightmares, and not just on Elm street!', N'props',
    N'arm1.jpg', 20.9500, 200)
    
    INSERT [dbo].[States] ([StateCode], [StateName]) VALUES (N'AK', N'Alaska')
    
    <span class = "comments">-- Adds a foreign key to the table customers which refers to table state</span>
    ALTER TABLE [dbo].[Customers]  WITH CHECK ADD  
    CONSTRAINT [FK_Customers_States] FOREIGN KEY([State])
    REFERENCES [dbo].[States] ([StateCode])
    GO
    
    <span class = "comments">-- Verifies that the first foreign key was added</span>
    ALTER TABLE [dbo].[Customers] CHECK CONSTRAINT [FK_Customers_States]
    GO
    
    <span class = "comments">-- On update cassade changes foreign keys where the primary key was altered </span>
    ALTER TABLE [dbo].[Invoices]  WITH CHECK ADD  
    CONSTRAINT [FK_Invoices_Customers] FOREIGN KEY([CustEmail])
    REFERENCES [dbo].[Customers] ([Email])
    ON UPDATE CASCADE
    GO
    
    ALTER TABLE [dbo].[Invoices] CHECK CONSTRAINT [FK_Invoices_Customers]
    GO
    
    ALTER TABLE [dbo].[LineItems]  WITH NOCHECK ADD  
    CONSTRAINT [FK_LineItems_Invoices] FOREIGN KEY([InvoiceNumber])
    REFERENCES [dbo].[Invoices] ([InvoiceNumber])
    GO
    
    ALTER TABLE [dbo].[LineItems] CHECK CONSTRAINT [FK_LineItems_Invoices]
    GO
    
    ALTER TABLE [dbo].[LineItems]  WITH NOCHECK ADD  
    CONSTRAINT [FK_LineItems_Products] FOREIGN KEY([ProductID])
    REFERENCES [dbo].[Products] ([ProductID])
    ON UPDATE CASCADE
    GO
    
    ALTER TABLE [dbo].[LineItems] CHECK CONSTRAINT [FK_LineItems_Products]
    GO
    
    <span class = "comments">-- Adds a foreign key constratin without the restriction of checking  </span>
    ALTER TABLE [dbo].[Products]  WITH NOCHECK ADD  
    CONSTRAINT [FK_Products_Categories] FOREIGN KEY([CategoryID])
    REFERENCES [dbo].[Categories] ([CategoryID])
    ON UPDATE CASCADE
    GO
    
    ALTER TABLE [dbo].[Products] CHECK CONSTRAINT [FK_Products_Categories]
    GO</pre>
    
    <p>In order to understand the script, you should probably know SQL. This sql script does several things. First it drops any existing database named halloween if it exists, then it creates a new one.
    
    <span class = "nl">Some of the commands like 'set ansi_nulls on' or 'set quoted_identifier on' are explained by comments I added to the script. The first command simply implies that null values aren't going to be returned or used for in comparsion expressions.  The second statement allows string literals to be passed if they are quoted.</span>
        
    <span class = "nl">These commands are generated by the engine used to generate the script for creating the database.</span></p>
        
    <hr />
    
    <h3>Creating the Tables</h3>
        
    <p>Alright, let's create a table or several. First, we create a table called Categories with rows CategoryID, Shortname and Longname. Then we add a constraint for the primary key. All the columns in this table contain varchar values which means they contain large strings. This table will be used for the different categories of items being sold in on the e-commerce store.
    
    <span class = "nl">The next table is called customers, it has 6 columns and its organized by the customers email address. The column names are email, lastname, firstname, address, city, state, zipcode and phonenumber. This table also has varchar values with the exception of state which is a char data type. Customers obviously contains information pertaining to customers.</span>
    
    <span class = "nl">Then there is the InvoiceData table, it contains just a single column 'salesTax' and the value is money. SQL Server actually has a data type called money. This table is used to hold the values for different sales taxes.</span>
    
    <span class = "nl">Another table contains information for invoices, this one has 12 columns and is organized by the InvoiceNumber. The column names are InvoiceNumber, CustEmail, OrderDate, Subtotal, ShipMethod, Shipping, SalesTax, Total, CreditCardType, CardNumber, ExpirationMonth, ExpirationYear. The data values for invoices table: InvoiceNumber is int, orderdate is a datetime value, subtotal money, shipping money, salestax money, total money, expiration date and expiration year both small int. The rest of the values are varchar. </span>
        
    <span class = "nl">The Invoice table contains the billing information for the product and the customers credit card information for that order.</span>
        
    <span class = "nl">Here we have a table called LineItems which contains two primary keys, one which holds the InvoiceNumber and another ProductId. The table contains 5 columns, the two primary keys already mentioned then the unit price as money, the quanity as int and extension as a product of the quanity and price.  Note, that the persisted keyword implies that new values will be calculated as they are inserted into the table. </span>
        
    <span class = "nl">Now we have the products table, this table contains eight columns starting with ProductID, name, ShortDecription, LongDescript, CategoryID, ImageFile, UnitPrice and OnHand. The short and long description simply refers to what the user will be seeing when they are just browsing the products as appose to if they were to click on a product. The imagefile column contains data relevant to the location and name of the file, and onhand I am assuming refers to if the item is currently in stock. The unitprice column data type is money, onhand is int, and productid is char, the rest are varchar data types.</span></p>
    
    <hr />
    
    <h3>Inserting Values and Adding Constratints</h3>
        
    <p>Here we insert the values into each columns, as I mentioned in the comments of the script. Setting identity insert to on or off refers to the values inserted into the primary key. Usually a primary key is autoincremented, so setting the identity insert to on allows the developer to insert any value into this column.
        
    <span class = "nl">Finally, we add our foreign key constrains. Which are important for maintaining the integrity of our data. Whats the point of us having a table which has a product of mask and product key of 1 in one table and that same product key equal to two in another table. </span>
        
    <span class = "nl">Using references and constraints ensures that the item mask will have its product key as 1 reguardless of the table or who is inserting the data.</span>
    </p>

    
<hr />
<br />
<a href="dotNet_Web_Apps2.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps4.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>