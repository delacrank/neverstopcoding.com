<?php
    // Check each variable to see if its empty
    function filled_out($form_vars) {
        foreach($form_vars as $key => $value) {
            if (!isset($key) || ($value === '')) {
                return false;
            }
        }
        return true;
    }
    
    // Clean the string for html or javascript
    function clean($string) {
        $string = trim($string);
        $string = htmlentities($string);
        $string = strip_tags($string);
        return $string;
    }
    
    // clean all the variables by passing them into an array
    function clean_all($form_vars) {
        foreach ($form_vars as $key => $value) {
            $form_vars[$key] = clean($value);
        }
        return $form_vars;
    }
?>