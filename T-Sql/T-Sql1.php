<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Views - Transact Sequel</title>
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
<h1>Views - Transact Sequel</h1>
    
<!-- working with views -->
<h2>Working with views</h2>
    
    <p>A view is like a virtual table, it displays the contents of the table.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
USE JcDemoDB
GO
    
CREATE VIEW vEmployeesWithSales
AS    
    SELECT DISTINCT
        Employees.*
    FROM 
        Employees
    JOIN
        Sales ON Employees.EmployeeID = Sales.EmployeeID
GO</pre>
    
<br />
<hr />

<!-- Inserting records into our tables -->
<h3>Inserting Records into our Tables</h3>

    <p>Inserting a record into our table is as simple as using the insert keyword, naming the table, selecting columns and adding the values per column.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
USE JcDemoDB
GO 
    
--Create sample employee records
INSERT Employees SELECT 1, 'John', NULL, 'Shepard', 'Sales Person', '1/1/2010'
INSERT Employees SELECT 2, 'Jane', NULL, 'Shepard', 'Sales Person', '1/1/2010'
    
--Create sample product record
INSERT Products SELECT 1, 'Shirt', 12.99
INSERT Products SELECT 2, 'Shorts', 14.99
INSERT Products SELECT 3, 'Pants', 19.99
INSERT Products SELECT 4, 'Hat', 9.99
    
--Create sample sale records
INSERT Sales SELECT NEWID(), 1, 1, 4, '02/01/2012'
INSERT Sales SELECT NEWID(), 2, 1, 1, '03/01/2012'
INSERT Sales SELECT NEWID(), 3, 1, 2, '02/01/2012'
INSERT Sales SELECT NEWID(), 2, 2, 2, '04/01/2012'
INSERT Sales SELECT NEWID(), 3, 2, 1, '03/01/2012'
INSERT Sales SELECT NEWID(), 4, 2, 2, '01/01/2012'</pre>
    
<br />
<hr />
    
<!-- Creating our view -->
<h3>Modifying our view</h3>
    
    <p>Our view is important to select certain types of information from our database. In the next example let's create another view which will limit the amount of rows we select and also group them together by descending order. </p>
    
<!-- Code -->
<pre class="code">
CREATE VIEW vTop 10ProductSalesByQuantity
AS
    SELECT TOP 10
        Name AS ProductName,
        SUM(Sales.Quantity) AS TotalQuantity
    FROM
        Sales
    JOIN
        Products ON Sales.ProductID = Products.ProductID
    GROUP BY
        Name    
    ORDER BY
        SUM(Sales.Quantity) DESC            
GO</pre>
    
<br />
<hr /><br />
<a href = "T-Sql.html"> Previous Page </a> 
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>