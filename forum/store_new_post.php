<?php
    session_start();
    // store_new_post.php
    include_once('Include_function.php');
    
    // check that the store_new_post() function returns a true statement
    if($id = store_new_post($_POST)) {
        include_once('view_post_index.php');
    } else {
        $error = true;
        include_once('new_post.php');
    }
?>