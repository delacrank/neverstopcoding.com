<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Get &#38; Set Accessors - .Net Framework</title>
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
    
<h1>Get &#38; Set Accessors - .Net Framework</h1>

<!-- Accessors -->
<h2>Get &#38; Set Accessors</h2>

    <p>The 'get' and 'set' accessors are necessary for reading and writing variables.  The 'get' accessor acts like a return, the 'set' accessor acts like an assignment. </p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
private string name;
public string Name 
{ 
    get 
    {
        return this.name;
    } 
    set 
    {
        this.name = value;
    }
}</pre>
    
<br />
<hr />

<!-- Creating Lists -->
<h3>Querying information, Linq &#38; Lambda</h3>

       <p>There are multiple ways we can query information from a collection such as a list, an array or even a database table. Below, I will explain what Linq is and following that I will explain how to use lambda expresions.
           
           <span class = "nl">Linq is a way to query values from a collection which can be in the form of: a List, an Array, a Database Table, etc.  Linq performs similar to SQL statements in the sense that it uses 'SELECT' statement, 'FROM', 'WHERE' clause, 'ORDERBY', etc. Below, I will use an example of how to query from an Array.</span>
        
        <span class = "nl">Lambda expressions are different from Linq <u>when being used to query a collection</u>.  This is because, they can only be used in a method-based query using the 'Enumerable::Where' standard query operator. A regular lambda expression looks similar to this 'x => x * x;'.  Take parameter 'x' and assign it to be equal to itself multipled by itself.</span>
        
    <span class = "nl">Below I will create a collection of a list to show some examples of Linq and Lambda Expression Queries.</p>

<em>Code:</em>
<!-- code -->
<pre class ="code">
public class Student
{        
    public string ID { get; set; }
    public string Name { get; set; }

    public static void Main()
    {
        List&lt;Student> students = new List&lt;Student>
        { new Student{ ID = "1", Name = "June"}, 
        &nbsp;&nbsp;&nbsp;new Student{ ID = "2", Name = "Bug"}, 
        &nbsp;&nbsp;&nbsp;new Student{ ID = "3", Name = "Jack"},
        &nbsp;&nbsp;&nbsp;new Student{ ID = "4", Name = "Blue"}, };
        
        <span class="comments">//Linq query</span>
        var studentsQuery = 
            from student in students
            select student;

        <span class="comments">// Execute the query</span>
        foreach (var student in students)
        {
            Console.WriteLine("ID = {0} Name = {1}", student.ID, student.Name); 
        }

        <span class="comments">// Lambda Query</span>
        var studentQuery2 = students.Where(s => s.ID == "1");
        
        <span class="comments">// Execute the query</span>
        foreach (var student in studentQuery2)
        {
            Console.WriteLine("ID = {0}, Name = {1}", student.ID, student.Name);
        }</pre>

<br />
<hr />
    
<!-- ADO.net -->
<h3>ADO.net</h3>

       <p>ADO.net, is a way to connect and manipulate data sources like SQL server. There are several classes which can enable you to query data from a server: SqlConnection, SqlCommand, SqlReader.
           
    <span class = "nl">SqlConnection, opens the connection between your program and the server you wish to access.
        
        <span class = "nl">SqlCommand enables you to write queries using SQL statements in order to access tables, columns and rows from your database.  SQLCommand, also allows for updates and alterations on existing tables, such as: inserting new rows or deleting tables, columns, etc.
            
        <span class = "nl">SQLReader, will enable you to read information from these queries and allow you to display that information. Below, I will show some examples of how to connect to a Sql Server.
            
        <span class = "nl">SQLAdpater, allows you to create a link between your data sets and your connection string.</p>

<em>SQL Data Reader:</em>
<!-- Code -->
<pre class="code">
static void Main()
{
    <span class ="comments">//Instantiate the connection</span>
SqlConnection conn = new SqlConnection
    ("Data Source='ServerName';Initial Catalog='DatabaseName';Integrated Security=SSPI;");

    <span class ="comments">// Open the connection</span>
    conn.Open();

    <span class ="comments">// Pass the connection to a command object</span>
    SqlCommand cmd = new SqlCommand("select * from Table", conn);
           
    <span class="comments">// Start the reader </span>
    SqlDataReader rdr = cmd.ExecuteReader();

    <span class ="comments">// Display the data</span>
    while (rdr.Read())
    { 
        <span class="comments">// Display results</span>
        Console.WriteLine("\t{0}\t{1}\t{2}", rdr.GetString(0),
        rdr.GetString(1), rdr.GetString(2));
    }
        
    <span class="comments">// End while loop</span>
    rdr.NextResult();
    <span class="comments">// Close the reader</span>
    rdr.Close();
    <span class="comments">// Close the connection</span>
    conn.Close();
}</pre>

<p>Now that we've used the data reader, let's try working with the data set, and let's look at the differences.</p>

<em>SQL Data Set:</em>
<!-- Code -->
<pre class="code">
static void Main() 
{ 
    <span class="comments">// Instantiate the connection</span>
    SqlConnection conn = new SqlConnection
        ("Data Source='ServerName';Initial Catalog='DatabaseName';Integrated Security=SSPI");

    <span class="comments">// query the data</span>
    string queryString = "SELECT * FROM Student";

    <span class="comments">// Link the Dataset to the server using the DataAdapter</span>
    SqlDataAdapter adapter = new SqlDataAdapter(queryString, conn);

    <span class="comments">// Instantiate the Data set</span>
    DataSet students = new DataSet();

    <span class="comments">// Populate the set with Table Student</span>
    adapter.Fill(students, "Student");

    <span class="comments">// Display the data</span>
    foreach (DataRow row in students.Tables["Student"].Rows)
    { 
        Console.WriteLine
        ("\t{0}\t{1}\t{2}", row["StudentID"], row["StudentName"], row["StudentAddress"]);
    } 
        
    <span class="comments">// Close the connection</span>
    conn.Close();
} </pre>
            
<p>So far we have managed to access our database using a SQL Reader and a SQL Data Set, in the example below, we will access our database using Linq.</p>

<em>Linq &amp; SQL:</em>
<pre class="code">
namespace ConsoleApplication3
{
     <span class="comments">// Declare our table</span>
    [Table]
    class Student
    {
        <span class="comments">// Declare column names</span>
        [Column]
        public string StudentID { get; set; }
        [Column]
        public string StudentName { get; set; }
        [Column]
        public string StudentAddress { get; set; }
        [Column]
        public string StudentPhone { get; set; }
    }
    
    class Program
    {
        static void Main(string[] args)
        {
            <span class="comments">// Establish a connection</span>
            DataContext db = new DataContext
            ("Data Source='Server';Initial Catalog='Database';Integrated Security=SSPI");

            <span class="comments">// Link our table to our connection</span>
            Table&lt;Student> Students = db.GetTable&lt;Student>();

            <span class="comments">// Create our Linq Query</span>
            var query =
                from student in Students
                select student;

            <span class="comments">// Display the results</span>
            foreach (var student in query)
                Console.WriteLine("id = {0}, Name = {1}",
                student.StudentID, student.StudentName);
        }
    }
}</pre>

<p>So finally, we managed to connect to our database using a Linq Query.  We were able to accomplish this by first creating a list and then populating that list with a table from our database.</p>
       
<hr />
<br />
<a href="dotNet2.html">Previous</a><span class="next"><a href="dotNet4.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>     