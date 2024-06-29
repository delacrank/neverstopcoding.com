<?php 
    include('../connection/connection.php');

    function filled_out($form_vars) {
        // test that each variable has a value
        foreach($form_vars as $key => $value) {
            if((!isset($key)) || ($value == '')) {
                return false;
            }
        }
        return true;
    }

    function valid_email($address) {
        // check that an email address is valid
        if( preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $address)) {
            return true;
        } else {
            return false;
        }
    }

    function register($username, $email, $passwd) {
        // register new person with db
        // return true or error message
        // connect to db
        $conn = db_connect();
        // check if username is unique
        $query = "select * from user where username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':username', $username);
        $execute = $stmt->execute();
        if(!$execute) {
            throw new PDOException('<p>Could not execute query</p>');
        }
        if($stmt->rowCount()>0) {
            throw new PDOException('<p>That username is taken - go back and choose another one.</p>');
        }
        // if ok, put in db
        $query2 = "insert into user values
                               (default, :username, sha1(:password),
                                :email, default)";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bindValue(':username', $username);
        $stmt2->bindValue(':password', $passwd);
        $stmt2->bindValue(':email', $email);
        $execute2 = $stmt2->execute();
        if(!$execute2) {
            throw new PDOException('<p>Could not register you in database - please try again later.</p>');
        }
        return true;
    }

    function get_random_word($min_length, $max_length) {
        // grab a random word from dictionary between two lengths
        // and return it
        // generate a random word
        $word = '';
        // remeber to change this path to suit your system
        $dictionary = '../dictionary/words'; // the ispell dictionary
        $fp = @fopen($dictionary, 'r');
        if(!$fp) {
            return false;
        }
        $size = filesize($dictionary);
        // go to a random location in dictionary
        $rand_location = rand(0, $size);
        fseek($fp, $rand_location);
        // get the next whole word of the right legnth in the file
        while ((strlen($word) < $min_length) || (strlen($word)>$max_length) || (strstr($word, "'"))) {
            if(feof($fp)) {
                fseek($fp, 0); // if at end, go to start
            }
            $word = fgets($fp, 80);
            $word = fgets($fp, 80);
        }
        $word = trim($word); // trim the trailing \n from fgets
        return $word;
    }

    function reset_password($username) {
        // set password for username to random value
        // return the new password or false on failure
        // get a random dictionary word b/w 6 and 13 chars in length
        $new_password = get_random_word(6, 13);
        if($new_password == false) {
            throw new Exception('<p>Could not generate new password.</p>');
        }
        // add a number between 0 and 999 to it
        // to make it a slightly better password
        $rand_number = rand(0, 999);
        $new_password .= $rand_number;
        // set user's password to this in database or return false
        $conn = db_connect();
        $query = "update user set passwd =
                               sha1(:new_password) 
                               where username = :username"; 
        $stmt = $conn->prepare($query);
        if(!$stmt) {
            throw new PDOException('<p>Error bad query</p>');
        }
        $stmt->bindValue(':new_password', $new_password);
        $stmt->bindValue(':username', $username);
        $execute = $stmt->execute();        
        if(!$execute) {
            throw new Exception('<p>Could not change password.</p>'); // not changed
        } else {
            return $new_password; // changed successfully
        }
    }

    function notify_password($username, $password) {
        // notify the user that their password has been changed
        $conn = db_connect();
        $query = "select email from user where username = :username";
        $stmt = $conn->prepare($query);
        if(!$stmt) {
            throw new PDOException('<p>Error bad query</p>');
        }
        $stmt->bindValue(':username', $username);
        $execute = $stmt->execute();
        if(!$execute) {
            throw new PDOException('<p>Could not find email address.</p>');
        } else if ($stmt->rowCount() == 0) {
            throw new PDOException ('<p>Could not find email address.</p>');
            // username not in db
        } else {
            $row = $stmt->fetchObject();
            $email = $row->email;
            $from = "From: support@neverstopcoding.com \r\n";
            $mesg = "Your password has been changed to ".$password."\r\n".
                "Please change it next time you log in.\r\n";
            if(mail($email, 'Login information', $mesg, $from)) {
                return true;
            } else {
                throw new Exception('<p>Could not send email.</p>');
            }
        }
    }

    function check_valid_user() {
// see if somebody is logged in and notify them if not
    if (isset($_SESSION['valid_user']))  {
      echo "<p>Currently Logged in as ".htmlspecialchars($_SESSION['valid_user']).".</p>";
  } else {
     echo '<h1>Login Failure</h1>
     <p>You are not logged in.
     <span class = "nl">Click here to go back to <a href="login.html">Login</a>.</p>
     <hr /><br /><a href="Index.html">Back to Main</a><br /><br /></div></div>';
        include('Includes//footer.php');
        echo '</body></html>';
     exit;
    
  }
}
    
    function login($username, $password) {
        // check username and password with db
        // if yes, return true
        // else throw exception
        // connect to db
        $conn = db_connect();
        // check if username is unique
        $query = "select * from user where username=:username and passwd = sha1(:password)";
        $stmt = $conn->prepare($query);
        if(!$stmt) {
            throw new PDOException('<p>Invalid Query.</p>');
        }
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);
        $execute = $stmt->execute();
        if(!$execute) {
            throw new PDOException('<p>Could not log you in.</p>');
        }
        if($stmt->rowCount()>0) {
            return true;
        } else {
            throw new Exception('<p>Your password or username is incorrect. Please go back and try again.</p>');
        }
    }

    function change_password($username, $old_password, $new_password) {
        // change password for  username/old_password to new_password
        // return true or false

        // if the old password is right
        // change their password to new_password and return true
        // else throw an exception
        login($username, $old_password);
        $conn = db_connect();
        $query = "update user
                          set passwd = sha1(:new_password)
                          where username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':new_password', $new_password);
        $stmt->bindValue(':username', $username);
        $execute = $stmt->execute();
        if (!$execute) {
            throw new PDOException('<p>Could not change your passwords.</p>');
        } else {
            return true;  // changed successfully
        }
    }
?>