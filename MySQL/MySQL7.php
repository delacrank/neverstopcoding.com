<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Normalization - MySQL Relational Database</title>
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

        <h1>Normalization - MySQL Relational Database</h1>
        
        <h2>Understanding Normalization</h2>
        
            <p>The first thing you should know about normalization is that it is all about reducing redundancy and other errors which would jeopordize the integerity of the database.
                
                
    <span class = "nl">The first thing I will cover when talking about normalization are the types of relationships that exist between tables.</span></p>
        
        <hr />
        
    <!-- Relationships -->
    <h3>Relationships</h3>
        
        <p>There are three types of relationships that exist between tables. The one to one relationship, one to many relationship and the many to many relationship.
        
            <span class = "nl">Examples of a one to one relationship would be if there is one student for one class, or one husband for one wife.  If we were using two tables it would mean that only field in one table is related to one and only one other field in another table.</span>
        
            <span class = "nl">Alright but how do these tables share relationships?  Earlier I mentioned how a field in a record could be designated a primary key.  So if I have two tables which share a one to one relationship then one table has a primary key and the other table has that same key only it is called a foreign key, in this other table.</span>
    
            <span class = "nl">Moving forward the next relationship is called a one to many relationship.  This is when one table has a relationship with many tables, so one primary key in one table is a foreign key in multiple tables.</span>
        
            <span class = "nl">The way we indicate this in database design is with a notation called crows foot notation. Examples one one to many relationship can be one student many classes, or one teacher many students.</span>
        
            <span class = "nl">Our last type of relationship is the many to many relationship, this deals with one table having multiple foreign keys in other tables and those tables having multiple foreign keys in other tables as well.</span>
                
            <span class = "nl">I know this sounds confusing but an example of this would be if we had many students with many desks.  Each student could decide to sit at a different desk and each desk could occupy a different student.</span></p>
        
    <ol id = "li2" style="padding-left: 3em">
        <li><b>One to One:</b> One table relating to one other table.</li>
        <li><b>One to Many:</b> One table relating to more than one other table.</li>
        <li><b>Many to Many:</b> More than one table relating to more than one other table.</li>
        </ol>
        
    <hr />
        
    <!-- first form -->
    <h3>First Normal Form 1NF</h3>
        
        <p>In order for a database to be 1NF compliant tables must have which contain only one value (one name, one message, one phone number, etc.) and cannot contain repeating or related groups of data. 
            
    <span class = "nl">This doesn't mean that people cannot create databases which don't fit in to this process of normalization.  It just means that there could be the possibility for redundancy or repeating fields when running queries.</span></p>
        
          <table style="text-align: left; border-spacing:10px">  
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                <tr>       
                    <td>1</td>
                    <td>Juan Bonne</td>
                    <td>Queens, NY</td>
                    <td>555-234-5679</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>June Bug</td>
                    <td>Brooklyn, NY</td>
                    <td>555-493-4932</td>                
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jake Millhouse</td>
                    <td>Manhattan, NY</td>
                    <td>555-903-2812</td>
                </tr>
        </table>
        
        <p>Above is an example of a form which wouldn't be considered 1NF compliant due to the nature of the double values in both the name and address.  Let's change this form so that it is normalized. </p>
        
        <table style="text-align: left; border-spacing:10px">  
                <tr>
                    <th>ID</th>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Telephone</th>
                </tr>
                <tr>       
                    <td>1</td>
                    <td>Juan</td>
                    <td>Bonne</td>
                    <td>NY</td>
                    <td>Queens</td>
                    <td>555-234-5679</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>June</td>
                    <td>Bug</td>
                    <td>NY</td>
                    <td>Brooklyn</td>
                    <td>555-493-4932</td>                
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jake</td>
                    <td>Millhouse</td>
                    <td>NY</td>
                    <td>Manhattan</td>
                    <td>555-903-2812</td>
                </tr>
        </table>
        
        <p>The purpose of normalizing this table is to reduce the chance that two records have the same state or same last name when a query was run.  We have more control over these repeatitions by seperating the name and address into multiple fields.</p>
        
    <hr />
        
    <!-- first form -->
    <h3>Second Normal Form 2NF</h3>
        
            <p>Alright, now in order for a database to be in second normal form all tables must already be in first normal form and all fields must be key dependent.  
        
        <span class = "nl">This means that tables who have columns which aren't a foreign keys or aren't a primary key must be linked to a primary key. Below is an example of a database containing two tables which can be considered 1NF complaint but not 2NF compliant.</span></p>
        
        <table style="text-align: left; border-spacing:10px">  
            <tr>
                <th>Order_id</th>
                <th>Item</th>
                <th>State</th>
                <th>City</th>
            </tr>
            <tr>
                <td>312</td>
                <td>Ball</td>
                <td>NY</td>
                <td>Brooklyn</td>
            </tr>
             <tr>
                <td>313</td>
                <td>Rope</td>
                <td>NY</td>
                <td>Queens</td>
            </tr>
             <tr>
                <td>314</td>
                <td>Box</td>
                <td>NY</td>
                <td>Brooklyn</td>
            </tr>
             <tr>
                <td>315</td>
                <td>Printer</td>
                <td>NY</td>
                <td>Manhattan</td>
            </tr>
        </table>
        
        <table style="text-align: left; border-spacing:10px">  
            <tr>
                <th>fName</th>
                <th>lName</th>
                <th>Charge</th>
               
            </tr>
            <tr>
                <td>Blaine</td>
                <td>Christian</td>
                <td>$10.00</td>
          
            </tr>
             <tr>
                <td>John</td>
                <td>Jinx</td>
                <td>$5.00</td>
            </tr>
             <tr>
                <td>Jason</td>
                <td>Bingo</td>
                <td>$3.00</td>
            </tr>
             <tr>
                <td>Niel</td>
                <td>Hide</td>
                <td>$40.00</td>
            </tr>
        </table>
        
        <p>Our first table is fine because it has a Primary key (order_id) but if you look at our second table, it contains niether a foreign key nor a primary key so therefore it isn't compliant with the 2NF standard.
            
            <span class = "nl">Let's see if we can make it complaint by adding a key to the table. Now we know that if there is more than one user with the same name or more than one user with the same charge, we can seperate the two by using a primary key.</span>
        
            <span class = "nl">Additionally, we were able to ensure that the tables were linked by creating a foreign key in our users table.</span></p>
        
    <table style="text-align: left; border-spacing:10px">  
            <tr>
                <th>Order_id</th>
                <th>Item</th>
                <th>State</th>
                <th>City</th>
            </tr>
            <tr>
                <td>312</td>
                <td>Ball</td>
                <td>NY</td>
                <td>Brooklyn</td>
            </tr>
             <tr>
                <td>313</td>
                <td>Rope</td>
                <td>NY</td>
                <td>Queens</td>
            </tr>
             <tr>
                <td>314</td>
                <td>Box</td>
                <td>NY</td>
                <td>Brooklyn</td>
            </tr>
             <tr>
                <td>315</td>
                <td>Printer</td>
                <td>NY</td>
                <td>Manhattan</td>
            </tr>
        </table>
        
            <table style="text-align: left; border-spacing:10px">  
            <tr>
                <th>User_id</th>
                <th>fName</th>
                <th>lName</th>
                <th>Charge</th>
                <th>FK Order_id</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Blaine</td>
                <td>Christian</td>
                <td>$10.00</td>
                <td>312</td>
            </tr>
             <tr>
                <td>2</td>
                <td>John</td>
                <td>Jinx</td>
                <td>$5.00</td>
                <td>313</td>
            </tr>
             <tr>
                 <td>3</td>
                <td>Jason</td>
                <td>Bingo</td>
                <td>$3.00</td>
                <td>314</td>
            </tr>
             <tr>
                 <td>4</td>
                <td>Niel</td>
                <td>Hide</td>
                <td>$40.00</td>
                 <td>315</td>
            </tr>
        </table>
        
        <hr />
        
        <!-- 3NF -->
        <h3>Third Normal Form 3NF</h3>
        
            <p>The final and third process in normalization deals with making sure that each table can be mutually independent.  This means that changing a field in one record won't affect another record. 
                
    <span class = "nl">This can happen when there is are two tables which shares a field that relates those two tables to each other.  For example, earlier I had two tables a Orders table and a Users table, what if one of those tables contained a shipping method.  Let's say that by chaning information in my orders field shipping method I would be affecting data in my users charge field.
        
        <span class = "nl">To solve this problem we would need to create a third table which would be called our billing table, with a seperate billing primary key.  This would ensure that changes made in one field would only affect our billing table and we could update that table accordingly and link that to our users table.</span>
            
        <span class = "nl">However, without this table we would have to constantly change or remove data from our users table due to our charge field being dependent on another table (orders).</span>  </p>
        
    <table style="text-align: left; border-spacing:10px">  
            <tr>
                <th>Order_id</th>
                <th>Item</th>
                <th>State</th>
                <th>City</th>
                <th>Shipping</th>
            </tr>
            <tr>
                <td>312</td>
                <td>Ball</td>
                <td>NY</td>
                <td>Brooklyn</td>
                <td>Fed_Ex</td>
            </tr>
             <tr>
                <td>313</td>
                <td>Rope</td>
                <td>NY</td>
                <td>Queens</td>
                 <td>Ups</td>
            </tr>
             <tr>
                <td>314</td>
                <td>Box</td>
                <td>NY</td>
                <td>Brooklyn</td>
                 <td>Fed_Ex</td>
            </tr>
             <tr>
                <td>315</td>
                <td>Printer</td>
                <td>NY</td>
                <td>Manhattan</td>
                 <td>Ups</td>
            </tr>
        </table>
        
            <table  style="text-align: left; border-spacing:10px">  
            <tr>
                <th>User_id</th>
                <th>fName</th>
                <th>lName</th>
                <th>FK Charge_id</th>
                <th>FK Order_id</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Blaine</td>
                <td>Christian</td>
                <td>1</td>
                <td>312</td>
            </tr>
             <tr>
                <td>2</td>
                <td>John</td>
                <td>Jinx</td>
                <td>2</td>
                <td>313</td>
            </tr>
             <tr>
                 <td>3</td>
                <td>Jason</td>
                <td>Bingo</td>
                <td>3</td>
                <td>314</td>
            </tr>
             <tr>
                <td>4</td>
                <td>Niel</td>
                <td>Hide</td>
                <td>4</td>
                <td>315</td>
            </tr>
        </table>
        
         <table  style="text-align: left; border-spacing:10px">  
             <tr>
                <th>Billing_id</th>
                <th>Charge</th>
             </tr>
             <tr>
                <td>1</td>
                 <td>$12.00</td>
             </tr>
             <tr>
                 <td>2</td>
                 <td>$5.00</td>
             </tr>
                 <tr>
                 <td>3</td>
                 <td>$5.00</td>
             </tr>
                 <tr>
                 <td>4</td>
                 <td>$40.00</td>
             </tr>
        </table>
        
        <hr />        
        <br />
        <a href = "MySQL6.html"> Previous Page</a>
        <span class = "next">
        <a href = "MySQL8.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html> 