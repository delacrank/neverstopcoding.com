<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Understand how databases work, use an open source query language MySQL to create a database to store information on your web application." />
        <meta name="keywords" content="MySQL" />
        <meta name="author" content="Juan Arias" />  
        <title>Introduction to MySQL Relational Database</title>
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
<?php include('..//Includes//Left_MySQL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Introduction to MySQL Relational Database</h1>
        
        <h2>What is MySQL?</h2>
        
            <p>SQL stands for Structured Language Query and this language specializes in dealing with data.  Specificly dealing with a Database, a Database is a structure which can store data in an organized manner.  The type of databases which are programmed with SQL are called relational databases.
        <span class = "nl"> This is because they can organize data based on its relationship to other data.  The data in a database is organized into three types of structures: a record, a field and a table.</span>
                
<span class = "nl">Below, I will draw a chart of what this could look like.</p>

        <table style="text-align: left; border-spacing:20px">  
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                <tr>       
                    <td>Juan</td>
                    <td>Queens</td>
                    <td>555-234-5679</td>
                </tr>
                <tr>
                    <td>June</td>
                    <td>Brooklyn</td>
                    <td>555-493-4932</td>                
                </tr>
                <tr>
                    <td>Jake</td>
                    <td>Manhattan</td>
                    <td>555-903-2812</td>
                </tr>
        </table>
        
    <p>We notice 3 rows and 4 columns, the first row representing a list of names, the second addresses and the third row for telephone numbers.
                
        <span class = "nl">In a database each row is considered a record, and each column is a field within that record.  So in our first record we have 3 fields, a name, an address and a telephone number (Juan, Queens, 555-234-5679).</span>
            
        <span class = "nl">However, we have more than one record, we actually have 3 records each pertaining to a different person with their own seperate name, address and phone number.  When you have a collection of records this is called a table.</span>
            
        <span class = "nl">Can you guess what a collection of tables is called, that's right a collection of tables is called a database.</span>  </p>
        
        <hr />
        
        <!-- data types -->
        <h2>Data Types</h2>
        
            <p>In the table above we have a table consisting of three records with three fields for each record.  However, data has to be organized by its data type like whether a number will be stored as a string or an integer.
    
        <span class = "nl"> Below are some basic data types used for common databases.</span> </p>
        
        <ul class = "li">
            <li><b>INT</b> positive or negative whole numbers.</li>
            <li><b>DOUBLE</b> holds a decimal point for fractions.</li>
            <li><b>DATE</b> Stores dates in various formats YYYY-MM-DD.</li>
            <li><b>TIME</b> Similar to date HH:MM:SS.</li>
            <li><b>CHAR</b> fixed length text.</li>
            <li><b>VARCHAR</b> Limited to 256 characters of text.</li>
        </ul>

        <hr />
        
        <!-- primary key -->
        <h3>Primary Keys &amp; Table Structure</h3>
        
            <p>A primary key is a unqiue identifier used to locate a record or a field within a record.  Sometimes we may have multiple fields with the same name, so how will our database know which field to select?  Primary keys. 
                
    <span class = "nl">Let's look at an example of a table with a list of primary keys. </span></p>
        
    <table style="text-align: left; border-spacing:20px">  
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Telephone</th>
        </tr>
        <tr>       
            <td>1</td>
            <td>Juan</td>
            <td>Queens</td>
            <td>555-234-5679</td>
        </tr>
        <tr>
            <td>2</td>
            <td>June</td>
            <td>Brooklyn</td>
            <td>555-493-4932</td>                
        </tr>
        <tr>
            <td>3</td>
            <td>Jake</td>
            <td>Manhattan</td>
            <td>555-903-2812</td>
        </tr>
        </table>
        
            <p>Now, let's look at the data types and length of our records by looking at the table structure.</p>
        
           <table style="text-align: left; border-spacing:20px">  
                <tr>
                    <th>Field Name</th>
                    <th>Type</th>
                    <th>Length</th>
                </tr>
                <tr>       
                    <td>ID</td>
                    <td>INT</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>VARCHAR</td>
                    <td>30</td>              
                </tr>
                <tr>
                    <td>Address</td>
                    <td>VARCHAR</td>
                    <td>30</td>              
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>VARCHAR</td>
                    <td>30</td>              
                </tr>
        </table>

        <hr />
        
        <!-- Types of dbs -->
        <h3>Types of RDBMS</h3>
        
            <p>RDBMS stands for Relational Database Managment System, and below are a list of several types which exist, some are free others aren't and some only work on certain operating systems.</p>
        
        <ul class = "li">
            <li><b>Oracle</b> a very popular but expensive database system.</li>
            <li><b>MS SQL Server</b> A Microsoft Database which works with .NET enviroment and IIS Server.</li>
            <li><b>MS Access</b> Comes with MS office and is outdated now as it has scaling problems and isn't updated.</li>
            <li><b>My SQL</b> An open source database which is catching up to some of the features of the other popular database systems.</li>
            <li><b>SQLite</b> A small fast open source database.</li>
        </ul>
   
        <hr />
        
        <!-- Understanding 3 tier architecture -->
        <h3>The three Tier architecture</h3>
        
            <p>Often when web sites or web applications are built, some of the better larger and scalable web applications are built on a three tier architecture.
                
                <span class = "nl">This consists of your Client side (web-page: HTML, CSS, JS), Server side (apache/iis: PhP, C#) and your Data (Data Server: MySQL, MS SQL Server).</span>
            
            <span class = "nl">The three tiers usually refer to the presentation layer (user interface), the application layer (application interface) and the business layer (database).</span>
            
            <span class = "nl"> A programmer who works on the client side is considered a front end developer.  These people usually consist of programmers who can take the work of a graphic designer and replicate it with code so that a browser will display the content properly. Their job is to ensure that the user has a fun and interactive experience.  Most of the code they write will be relayed from a HTML form into a server and then displayed back on to the clients web browser.</span>
        
            <span class = "nl">You also have your backend developer, this person's job is to ensure that information sent from the client is properly and securely transfered to the database and that information sent from the database to the client will be rendered to the clients browser.  Their job also consists of building the database, optimizing data queries, storage, design (of the database). They will deal with making sure that the clients machine is able to communicate with the hosts machine (server) which entails that they will have to be familiar with a server side language as well as SQL.</span></p>
        
        <hr />        
        <br />
        <a href = "MySQL1.html">Next Page</a></span>
        <br />
        <br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 