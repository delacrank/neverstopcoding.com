<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Entity Framework Part 2 - .Net Framework</title>
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
<h1>Entity Framework Part 2 - .Net Framework</h1>

<!-- Entity Review -->
<h2>Entity Review</h2>

     <p>Previously we learned the four different approaches to working with entity framework: code first (generating a database), code first (accessing an existing database), model first (generating a database) and database first (mapping to an existing database).
         
         <span class = "nl">We also learned what files are used when working with entity framework: model.designer (generate database), model.sql (write the script for database), model.context.cs (code to link database tables), model.cs (code for each table in our database).</span>
        
        <span class = "nl">Finally, we learned how to access and modify our tables within our database using a seperate class.  This class will link to an instance of our model.context.cs and then we can proceed by using commands within this instance to 'Save' changes to our database.</span></p>


<!-- Transactions -->
<h3>Transactions</h3>

    <p>So what is a transaction?  A transaction is a method which can rollback any data which wasn't properly added to our database.  Let's say that a user tries to add a record which doesn't work with the table or column, causing an error (potentially crashing the program); However, they have also added a record which can be saved. How will the database know which data to remove and which to keep, and how it will communicate this information to the user without crashing?
        
    <span class = "nl">We can add all their activity into our method called a transaction, and save any records which were correctly submitted by the user.  At the same time, we can also reject all data within this transaction if any of it was incorrect or repeating.
        
    <span class = "nl">The beauty of a transaction is that we won't have to worry about either corrupt or repeat records in our database, because all information will be filtered through by process.</p>

<em>Code:</em>
<!-- Code  -->
<pre class="code">
<span class="comments">// 'Using' so memory is released once task is completed</span>
using (var db = new BruteForceEntities())
{
    <span class="comments">// Define and begin our transaction object</span>
    using (var dbTrans = db.Database.BeginTransaction())
    {
        <span class="comments">// Try Catch for error handling</span>
        try
        {
            var query = from b in db.Students
                                 orderby b.StudentID
                                 select b;

            Console.WriteLine("All students in the database:");
            foreach (var item in query)
            { 
                Console.WriteLine("ID = {0}, Name = {1}, Address = {2}", item.StudentID, item.StudentName, item.StudentAddress);
                <span class ="comments">// Add this property to the column StudentPhone</span>
                item.StudentPhone += "871-213-13";
            }
            Console.WriteLine("Your changes we saved.");
            db.SaveChanges();
            <span class="comments">// Commit these records if successful</span>
            dbTrans.Commit();      
        }

        <span class="comments">// Catch our error before our program crashes</span>
        catch (Exception)
        {
            Console.WriteLine("You data was not saved. Please try again.");
            <span class="comments">// Rollback to its original state if unsuccessful</span>
            dbTrans.Rollback();
        }

        Console.WriteLine("Press any key to exit...");
        Console.ReadKey();
    }</pre>

<p>There is also another type of transaction called a distributed transaction, this sort of transaction requires a scope and will rollback all the data if even one database entry is incorrect.  Let's look at that syntax.</p>

<em>Distributed Transaction</em>
<!-- Code -->
<pre class ="code">
using (var db = new BruteForceEntities())
{
    <span class="comments">// Define the transaction scope</span>
    using (var scope = new TransactionScope(TransactionScopeOption.Required))
    { 
        try 
        {
            var query = from b in db.Students
                            orderby b.StudentID
            select b;   

            Console.WriteLine("All students in the database:");
            foreach (var item in query)
            {
                Console.WriteLine("ID = {0}, Name = {1}, Address = {2}, Phone = {3}", 
                item.StudentID, item.StudentName, item.StudentAddress, item.StudentPhone);
                  <span class="comments">// Add a record which can be submitted</span>
                item.StudentPhone += "871-213-13";
            }
            db.SaveChanges();

            var query2 = from b in db.Teachers
                            orderby b.Id
                            select b;
            Console.WriteLine("All Teachers in the database:");
            foreach (var item in query2)
            {
                Console.WriteLine("ID = {0}, Name = {1}, Subject = {2}",
                item.Id, item.Name, item.Subject);
                <span class="comments">// If I add an int to a string column, error</span>
                item.Subject += 5;
            }
            Console.WriteLine("Your changes we saved.");<br />
            db.SaveChanges();   
        }
        catch (Exception)
        {
            Console.WriteLine("You data was not saved. Please try again.");
        }
        <span class="comments">// The scope rollbacked my first data entry, due to the error</span>
        scope.Complete();   
        Console.WriteLine("Press any key to exit...");
        Console.ReadKey();
    }
}</pre>
        
<br />
<hr />

<!-- Stored procedures -->
<h3>Stored procedures</h3>

     <p>A stored procedure is a group of Transact-SQL statements compiled to a single execution plan.  In otherwords, it will return a desired result from any table in the database, you can query data based on the T-SQL statements within your procedure.  Transact-SQL is a Microsoft extension to the language SQL, it included procedural programming, local variables and various functions for string processing, math, etc.
         
         <span class = "nl">In order to create a stored procedure, you simply have open SQLServer Management studio, expand your database, expand programmability and then add it under 'Store Procedures'.  Below, I will show the syntax for a 'Store Procedure'.</span></p>

<em>Stored Procedure:</em>
<!-- Code -->
<pre class="code">
CREATE PROCEDURE GetStudents
    @student_id nvchar(128)
AS
BEGIN
    SET NOCOUNT ON;
    SELECT * FROM dbo.Students WHERE StudentID = @student_id
END
GO</pre>

     <p>You can create a model, based on just a data queried from the stored procedure (if you choose it when creating your model.emdx).</p>

<hr />        
        
<!-- Select Many -->
<h3>Select Many</h3>

     <p>When using Linq or Lambda expressions, it is also possible to select data from multiple tables.  Below, I will show the syntax for using this. </p>

<em>Select Many</em>
<pre class="code">
var query =
    from student in Students
    from teacher in Teachers
    where student.StudentID == teacher.Id
    
select new
{
   TeacherID = teacher.Id,
   StudentID = student.StudentID,
   StudentName = student.StudentName,
   TeacherName = teacher.Name
};

foreach (var obj in query)
{
    Console.WriteLine("StudentId = {0} StudentName = {1} TeacherID = {2}
    TeacherName = {3}", obj.StudentID, obj.StudentName, obj.TeacherID, 
    obj.TeacherName);
}</pre>


<hr />
<br />
<a href="dotNet4.html">Previous</a><span class="next"><a href="dotNet6.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>