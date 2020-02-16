    <?php    
        if (!empty($_REQUEST["userName"])) {
            $userName = $_REQUEST["userName"]; 
            print "<h1> Hi, $userName!</h1>"; 
        } else {
            $userName = null;
            echo 'Please enter a username.<br /><br />';
        }    
        
        print '<a href="../PhP4.html">Click here to go Back</a>';
    ?>