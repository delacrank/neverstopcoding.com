<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sortable View - PhP Programming</title>
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

        <h1>Sortable View - PhP Programming</h1>
        
        <h2>Making a Sortable View</h2>
        
        <p>Creating a view which is sortable allows the user to control which records are displayed.  Basically how the records are ordered, this is used quite often with e-commerce sites sorting by price or youtube videos sorting by view count, etc.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    &lt;?php # Sortable View
    
        &lt;h1> Registered Users &lt;/h1>
    
        require_once ('connection_string.php');
        $display = 3;
    
        if (isset($_GET['p']) &amp;&amp; is_numeric($_GET['p'])) {
            $pages = $_GET['p'];
        } else {
            $query = "SELECT COUNT(user_id) FROM users";
            $result = $mysqli_query ($dbc, $query);
            $row = $mysqli_fetch_array ($result, MYSQLI_NUM);
            $records = $row[0];
        
            if ($records > $display ) {
                $pages = ceil ($records/$display);
            } else {
                $pages = 1;
            }
        } 
    
        if (isset($_GET['s']) &amp;&amp; is_numeric($_GET['s'])) {
            $start = $_GET['s'];
        } else {
            $start = 0;
        }
    
        $sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';
    
        switch ($sort) {
            case 'id':
                $order_by = 'user_id ASC';
                break;
            case 'un':
                $order_by = 'username ASC';
                break;
            case 'rd':
                $order_by = 'registration_date ASC';
                break;
            default:
                $order_by = 'registration_date ASC';
                $sort = 'rd';
                break;
        }
    
        $query = "SELECT user_id, username, registration_date FROM users 
        ORDER BY $order_by LIMIT $start, $display";
        $result = @mysqli_query ($dbc, $query);
    
        echo '&lt;table width="100%">
        &lt;tr>
            &lt;td>Edit&lt;/td>
            &lt;td>Delete&lt;/td>
            &lt;td>&lt;a href="view_users.php?sort=id">User ID&lt;/a>&lt;/td>
            &lt;td>&lt;a href="view_users.php?sort=un">User Name&lt;/a>&lt;/td>
            &lt;td>&lt;a href="view_users.php?sort=rd">Registration Date&lt;/a>&lt;/td>
        &lt;/tr>';
    
        $bg = '#eeeeee';
        while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
            $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
                echo '&lt;tr bgcolor="' . $bg . '">
                &lt;td>&lt;a href="edit_user.php?=' . $row['user_id'] .
                '">Edit&lt;/a>&lt;/td>
                &lt;td>&lt;a href="delete_user.php?id=' . $row['user_id'] .
                '">Delete&lt;/a>&lt;/td>
                &lt;td>' . $row['user_id'] . '&lt;/td>
                &lt;td>' . $row['username'] . '&lt;/td>
                &lt;td>' . $row['registration_date'] . '&lt;/td>
            &lt;/tr>';
        }
        
        echo '&lt;/table';
        mysqli_free_result ($result);
        mysqli_close ($dbc);
    
        if ($pages > 1) {
            echo '&lt;br />&lt;p>';
            $current_page = ($start/$display) + 1;
        
            if ($current_page != 1 ) {
                echo'&lt;a href="view_users.php?s=' . ($start - $display) . '&amp;p='
                . $pages . '&amp;sort=' . $sort . '">Previous&lt;/a> ';
            }
        
            for ($i = 1; $i &lt;= $pages; $i++) {
                if ($i != $current_page) {
                    echo '&lt;a href="view_users.php?s=' . (($display * ($i - 1 ))) .
                    '&amp;p=' . $pages . '&amp;sort=' . $sort . '"> . $i . '&lt;/a>';
                } else {
                    echo $i . ' ';
                }
            }
        
            if ($current_page != $pages) {
                echo '&lt;a href="view_users.php?s=' . ($start + $display) .
                '&amp;p=' . $pages . '&amp;sort=' . $sort . '">Next&lt;/a>';
            }
            echo '&lt;/p>';
        }
    &#63;></pre>
        
    <?php # Sortable View
    /*
    echo '<h1> Registered Users </h1>';
    
    require_once ('connection_string.php');
    
    $display = 3;
    
    if (isset($_GET['p']) && is_numeric($_GET['p'])) {
        $pages = $_GET['p'];
    } else {
        $query = "SELECT COUNT(user_id) FROM users";
        $result = @mysqli_query ($dbc, $query);
        $row = @mysqli_fetch_array ($result, MYSQLI_NUM);
        $records = $row[0];
        
        if ($records > $display ) {
            $pages = ceil ($records/$display);
        } else {
            $pages = 1;
        }
    } // end of p IF
    
    if (isset($_GET['s']) && is_numeric($_GET['s'])) {
        $start = $_GET['s'];
    } else {
        $start = 0;
    }
    
    $sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';
    
    switch ($sort) {
        case 'id':
            $order_by = 'user_id ASC';
            break;
        case 'un':
            $order_by = 'username ASC';
            break;
        case 'rd':
            $order_by = 'registration_date ASC';
            break;
        default:
            $order_by = 'registration_date ASC';
            $sort = 'rd';
            break;
    }
    
    $query = "SELECT user_id, username, registration_date FROM users 
    ORDER BY $order_by LIMIT $start, $display";
    $result = @mysqli_query ($dbc, $query);
    
    echo '<table width="100%">
    <tr>
        <td>Edit</td>
        <td>Delete</td>
        <td><a href="view_users.php?sort=id">User ID</a></td>
        <td><a href="view_users.php?sort=un">User Name</a></td>
        <td><a href="view_users.php?sort=rd">Registration Date</a></td>
    </tr>';
    
    $bg = '#eeeeee';
    while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
        $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
            echo '<tr bgcolor="' . $bg . '">
            <td><a href="edit_user.php?=' . $row['user_id'] .
            '">Edit</a></td>
            <td><a href="delete_user.php?id=' . $row['user_id'] .
            '">Delete</a></td>
            <td>' . $row['user_id'] . '</td>
            <td>' . $row['username'] . '</td>
            <td>' . $row['registration_date'] . '</td>
        </tr>';
    }
        
    echo '</table>';
    mysqli_free_result ($result);
    mysqli_close ($dbc);
    
    if ($pages > 1) {
        echo '<br /><p>';
        $current_page = ($start/$display) + 1;
        
        if ($current_page != 1 ) {
            echo'<a href="view_users.php?s=' . ($start - $display) . '&p='
            . $pages . '&sort=' . $sort . '">Previous</a> ';
        }
        
        for ($i = 1; $i <= $pages; $i++) {
            if ($i != $current_page) {
                echo '<a href="view_users.php?s=' . (($display * ($i - 1 ))) .
                '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a>';
            } else {
                echo $i . ' ';
            }
        }
        
        if ($current_page != $pages) {
            echo '<a href="view_users.php?s=' . ($start + $display) .
            '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
        }
        echo '</p>';
    } */
    ?>
        
        <hr />        
        <br />
        <a href = "PhP26.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP28.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 