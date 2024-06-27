<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn how to create databases using Transact Sequel. Write powerful subroutines, tables, records, views, and stored procedures for windows web applications." />
<meta name="keywords" content="T-Sql" />
<meta name="author" content="Juan Arias" />
<title>Creating Tables - Transact Sequel</title>
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
<?php include('..//Includes//Left_T-Sql.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<!-- Heading -->
<h1>Creating Tables - Transact Sequel</h1>
    
    <p>Hello, welcome to learning Transact Sequel, otherwise known as T-Sql.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
USE JcDemoDB
GO
    
CREATE TABLE Employees
(   EmployeeID int NOT NULL,
    FirstName nvarchar(50) NOT NULL,
    MiddleName nvarchar(50) NULL,
    LastName nvarchar(75) NOT NULL, 
    Title nvarchar(100) NULL,
    HireDate datetime NOT NULL,
    VacationHours smallint NOT NULL, 
    Salary decimal (19, 4) NOT NULL )  
GO 
    
CREATE TABLE Products
(   ProductID int NOTNULL,
    Name nvchar(255) NOT NULL,
    Price decmial (19,4) NOT NULL )
GO
    
CREATE TABLE Sales 
(   SaleID uniqueidentifier NOT NULL,
ProductID int NOT NULL,
Quantity smallint NOT NULL )
GO</pre>   
    
<br />
<hr />

<!-- altering tables -->
<h3>Altering Tables</h3>
    
    <p>To alter tables we need to write a different script.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
USE JcDemoDB
GO
    
ALTER TABLE Employees
ADD
    ActiveFlag bit NOT NULL,
    ModifiedDate datetime NOT NULL
    
ALTER TABLE Products
    ALTER COLUMN Price money
    
EXEC sp_rename 'Sales', 'SaleOrder'</pre>

<br />
<hr /><br />
<a href = "T-Sql1.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>