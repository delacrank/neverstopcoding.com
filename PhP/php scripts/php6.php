    <h1> Number Game </h1>
    <p> Welcome to the number game </p> 
    
    <?php 
        $userNumber = rand(1,5); 

        if($userNumber) {
            print "<p><img src=\"/Images/Cover$userNumber.jpg\"
                                    height = \"150\"
                                    width = \"150\"/> </p>"; 
            if($userNumber == 1) { 
                print "<p>You selected the first cover.</p>";  }

            if($userNumber == 2) {
                print "<p>You selected the second cover.</p>";  }

            if($userNumber == 3) { 
                print "<p>You selected the third cover.</p>"; }
                
            if($userNumber == 4) { 
                print "<p>You selected the forth cover.</p>";  }

            if($userNumber == 5) { 
                print "<p>You selected the fifth cover.</p>";  }

            if($userNumber == 6) { 
                print "<p>You selected the sixthed cover.</p>";  }
        } 
    ?> 
    
    <p><a href ="php6.php">Please Try Again!</a></p>
    
    <p><a href ="../PhP6.html"> Back to main page </a></p>