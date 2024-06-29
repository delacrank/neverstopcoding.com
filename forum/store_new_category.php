<?php
    // store_new_category.php
    include_once('Include_function.php');
    
    // check that the store_new_post() function returns a true statement

    if(store_new_category($_POST)) {
        include_once('Index.php');
    } else {
        $error = true;
        include_once('new_category.php');
    }
?>