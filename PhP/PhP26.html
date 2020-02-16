<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Paginating Query Results - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Paginating Query Results - PhP Programming</h1>
        
        <h2>Paginating Query Results</h2>
        
            <p>Pagination is the process of limiting the amount of records returned in a single query.  This techinque is used quite often with e-commerce sites like ebay, or amazon where only 10 records are returned on the page per search unless otherwise specified.
                
    <span class ="nl">We are going to attempt to do this with our website but we need to add more users to our table first.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    INSERT INTO users VALUES 
        (null, 'john', 'john', 'john@email.com', CURDATE() ),
        (null, 'jake', 'jake', 'jake@email.com', CURDATE() ),
        (null, 'bill', 'bill', 'bill@email.com', CURDATE() ),
        (null, 'dune', 'dune', 'dune@email.com', CURDATE() ),
        (null, 'phil', 'phil', 'phil@email.com', CURDATE() ),
        (null, 'jenny', 'jenny', 'jenny@email.com', CURDATE() ),
        (null, 'mike', 'mike', 'mike@email.com', CURDATE() ); </pre>
        
        <p>Alright now that we have a fair amount of users let's start the script.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # View Users Script Pagination
        require_once('connection_string.php');    
        $display = 3;
    
        if (isset($_GET['p']) &amp;&amp; is_numeric($_GET['p'])) {    
            $pages = $_GET['p'];        
        } else {    
            $query = "SELECT COUNT(user_id) FROM users";
            $result = @mysqli_query ($dbc, $query);
            $row = @mysqli_fetch_array ($result, MYSQLI_NUM);
            $records = $row[0];
            if ($records > $display) {
                $pages = ceil ($records/$display);
            } else {
                $pages = 1;
            }        
        } 
    
        <span class = "comments">// Determine where to start returning results</span>
        if (isset($_GET['s']) &amp;&amp; is_numeric($_GET['s'])) {
            $start = $_GET['s'];
        } else {
            $start = 0;
        }
    
        $query = "SELECT username, email, registration_date, user_id FROM users 
        ORDER BY registration_date ASC LIMIT $start, $display";
        $results = @mysqli_query ($dbc, $query);
            
        echo '&lt;table>
        &lt;tr>
            &lt;td>Edit&lt;/td>
            &lt;td>Delete&lt;/td>
            &lt;td>UserName&lt;/td>
            &lt;td>Email&lt;/td>
            &lt;td>Registration Date&lt;/td>
        &lt;/tr>';
        
        $bg = '#eeeeee';
    
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {    
            $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');            
            echo '&lt;tr bgcolor="' . $bg . '">
                &lt;td>&lt;a href="edit_user.php?id=' . $row['user_id'] . '">Edit&lt;/a>&lt;/td>
                &lt;td>&lt;a href="delete_user.php?id=' . $row['user_id'] . '">Delete&lt;/a>&lt;/td>
                &lt;td>' . $row['username'] . '&lt;/td>
                &lt;td>' . $row['email'] . '&lt;/td>
                &lt;td>' . $row['registration_date'] . '&lt;/td>
            &lt;/tr>';        
        }
    
        echo '&lt;/table>';
        mysqli_free_result ($result);
        mysqli_close ($dbc);
    
        if ($pages > 1) {
            echo '&lt;br />&lt;p>';
            $current_page = ($start/$display) + 1;                    
            if ($current_page != 1) {
                echo '&lt;a href="view_users.php?s=' . ($start - $display) . '&amp;p=' .
                $pages . '">Previous&lt;a> ';
            }
            
            for ($i = 1; $i &lt;= $pages; $i++) {
                if ($i != $current_page) {
                    echo'&lt;a href="view_users.php?s=' . (($display * ($i - 1))) . 
                    '&amp;=' . $pages . '">' . $i . '&lt;/a> ';
                } else {
                    echo $i . ' ';
                }
            }
            
            if ($current_page != $pages) {
                 echo '&lt;a href="view_users.php?s=' . ($start + $display) .
                 '&amp;p=' . $pages . '">Next&lt;/a>';
            }            
            echo '&lt;/p>';
        } 
    &#63;></pre>
        
<?php # View Users Script Pagination
    /*
    require_once('connection_string.php');
    $display = 3;
    if (isset($_GET['p']) && is_numeric($_GET['p'])) {
            $pages = $_GET['p'];
    } else {    
            $query = "SELECT COUNT(user_id) FROM users";
            $result = @mysqli_query ($dbc, $query);
            $row = @mysqli_fetch_array ($result, MYSQLI_NUM);
            $records = $row[0];
        
            if ($records > $display) {
                    $pages = ceil ($records/$display);
            } else {
                    $pages = 1;
            }        
    } // End of p IF
    
    // Determine where to start returning results
    if (isset($_GET['s']) && is_numeric($_GET['s'])) {
            $start = $_GET['s'];
    } else {
            $start = 0;
    }
    
    $query = "SELECT username, email, registration_date, user_id FROM users 
    ORDER BY registration_date ASC LIMIT $start, $display";
    $result = @mysqli_query ($dbc, $query);
            
    echo '<table width=100%>
    <tr>
        <td>Edit</td>
        <td>Delete</td>
        <td>UserName</td>
        <td>Email</td>
        <td>Registration Date</td>
   </tr>';
        
    $bg = '#eeeeee';    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {    
        $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');            
        echo '<tr bgcolor="' . $bg . '">
            <td><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
            <td><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
            <td>' . $row['username'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['registration_date'] . '</td>
        </tr>';
        
    } // End of While Loop
    
    echo '</table>';
    mysqli_free_result ($result);
    mysqli_close ($dbc);    
    if ($pages > 1) {                
            echo '<br /><p>';                    
            $current_page = ($start/$display) + 1;                    
            if ($current_page != 1) {
                    echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' .
                    $pages . '">Previous<a> ';
            }
            
            for ($i = 1; $i <= $pages; $i++) {
                    if ($i != $current_page) {
                            echo'<a href="view_users.php?s=' . (($display * ($i - 1))) . 
                            '&=' . $pages . '">' . $i . '</a> ';
                    } else {
                            echo $i . ' ';
                    }
            } // End for loop
            
            if ($current_page != $pages) {
                    echo '<a href="view_users.php?s=' . ($start + $display) .
                    '&p=' . $pages . '">Next</a>';
            }
            echo '</p>';
    } // End links section   */ 
    ?>        
        
        <hr />
        
        <!-- ternary operator -->
        <h3>Ternary operator</h3>
        
            <p>For our background color assignment we used a ternary operator.  This operator will assign a value to a variable based on a boolean value.  Let's look at the code below.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');</pre>
        
    <p> Okay, what does this mean.  If the variable $bg is equal to this value '#eeeeee' then assign it to the value '#ffffff' otherwise assign it to '#eeeeee'.
    
    <span class = "nl">The way this will work with our table is that for every table row a new background color will be assigned.  If the color is equal to grey then the ternary operator will assign it to white and if it's equal to white then the operator will assign it to grey.</span></p>
        
    <hr />
        
    <!-- Ceil -->
    <h3>Ceil</h3>
        
        <p>We used the keyword 'ceil' in our second if statement, and all that 'ceil' does is round a fraction up.</p>
        
    <hr />
        
    <!-- Understanding the Code -->
    <h3>Understanding the Code</h3>
        
        <p>We start by defining this variable '$display = 3;' this will allow us to determine the number of records which we will use to populate the page.  One of the way we figure out the amount of records we will use to per page is by taking the total number of existing records and dividing it by the display amount.
            
            <span class = "nl">We can find out the total numer of records by using the MySQL count function and selecting the 'user_id' from our users table.  Then we can take this value and store it in a variable called $records.</span>
            
            <span class = "nl">The next code we have is the isset($_GET['p']) and then assigning that value to a variable called $pages.  The purpose of this $pages variable is to determine which page we are on in order to know which records to display.</span>        
        
        <span class = "nl">If the $pages value can't be assigned through the $_GET['p'] value then we can assign $pages equal to our $display number divided by our $records variable in order to determine the amount of pages required to display all the results.</span>
        
        <span class = "nl">Our next variable is called $start and it will be used to determine at which record to continue displaying results.  For example, if we displayed 3 records then our $start variable should be set to 4 and using our SQL query we should be able to SELECT records after the third user_id and LIMIT those to the variable stored in our display.</span>
        
        <span class = "nl">Next we build our table using html and embedding php scripts in our links along with the matching username and email for those links. By using the mysqli_fetch_array() function we can store our user_id's in a variable called $row and then pass the user_id value to the url of our link using php $_GET method.</span>
        
        <span class = "nl">The final section of the code is probably the most complicated and it is used to determine which page we are currently on as well.  The first variable we use is the $current page variable, which is $start divided by $display plus one in order to determine which page we are on.  So if we have 20 records and we are displaying 5 records at a time, there should be 4 pages.  Let's say we displayed 2 pages already so there are only 10 records left to be displayed 10 divided by 5 equals 2 then plus one equals 3 so our current page is the third one.</span>
        
        <span class = "nl">Once we have figured out our current page we can also determine which links to display at the bottom.  In the case of having 20 records and 4 pages we would require 4 links at any given time, one for each page.  The way we know what records are on each page is with our $start variable and the records remaining contained in our $display variable.</span>
        
    <span class = "nl">Let's look at the code again.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    if ($pages > 1) {                
        echo '&lt;br />&lt;p>';                    
        $current_page = ($start/$display) + 1;                    
        if ($current_page != 1) {
            echo '&lt;a href="view_users.php?s=' . ($start - $display) . '&amp;p=' .
            $pages . '">Previous&lt;a> ';
        }
        
        for ($i = 1; $i &lt;= $pages; $i++) {
            if ($i != $current_page) {
                echo'&lt;a href="view_users.php?s=' . (($display * ($i - 1))) .
                '&amp;=' . $pages . '">' . $i . '&lt;/a> ';
            } else {
                echo $i . ' ';
            }
        } 
        
        if ($current_page != $pages) {
            echo '&lt;a href="view_users.php?s=' . ($start + $display) .
            '&amp;p=' . $pages . '">Next&lt;/a>';
        }
        echo '&lt;/p>';
    }</pre>
        
    <p>There's 3 sets of if statements, the first conditional creates the previous page link, the second if statement creates the numbers for each page and the third if statement creates the next page link. </p>
    
        <hr />        
        <br />
        <a href = "PhP25.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP27.html">Next Page</a></span>
        <br />
        <br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 