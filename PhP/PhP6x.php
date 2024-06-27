<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn program with PhP" />
        <meta name="keywords" content="PhP" />
    
        <title>Learning PhP</title>
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

        <h1>Learning PhP</h1>
        
        <h2>Handling forms</h2>
        
        <p>In this section we are going to continue to work with forms, this section will focus on handling information within the form in order to help our client.<br /><br />
        
        One example will be a math problem, where a user will submit two numbers and be given the option to add those numbers together.<br /><br />
        
        In the form validation of the program we use two functions to check if the input box is filled out, the first is the 'isset' function which will check to see if a variable is something other than null, then we use the 'is_numeric' function which will check to see if the value is an integer.<br /><br />
            
        By leaving the form action blank or setting it to our page, we ensure that the information in this form will be processed and the result will be posted back to the same page instead of making them open a new one.</p>
        
        <em>Code:</em>
        <!-- Code -->
        <div class="code">
            
        &lt;h1> Addition Program &lt;/h1><br /><br />
            
        &lt;form action="" method="post"><br /><br />
            
        &lt;label> Enter your first number &lt;/label> <br />
        &lt;input type="text" name="number1" />&lt;br /> <br /><br />
        &lt;label> Enter your second number &lt;/label><br />
        &lt;input type="text" name="number2" />&lt;br /> <br /><br />
        &lt;input type="Submit" value="Calculate!" /> <br /><br />   
            
        &lt;?php<br /><br />
            
        <span class="comments">// Check for form submission</span><br />    
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            <div class="padding">
            <span class="comments">// Form validation</span><br />
            if (isset($_POST['number1'], $_POST['number2']) &amp;&amp; is_numeric($_POST['number1']) &amp;&amp; is_numeric($_POST['number2']) ) {
            <div class="padding">
                <span class="comments">// Store the values</span><br />
                $number1 = $_POST['number1'];<br />
                $number2 = $_POST['number2'];<br />
                $sum = $number1 + $number2;<br /><br />
                
                <span class="comments">// Print the results</span><br />
                echo "&lt;p> Your total is equal to $sum &lt;/p>";</div>
                
                } else {
                <div class="padding">
                 <span class="comments">// Error Message</span><br />
                echo '&lt;p> Please enter a valid integer for number one and number two.&lt;/p>';</div>
                } </div>
            } <br /><br />
            
        &#63;>  
        </div><br />
        
        <em>Example:</em><br />        
        <!-- Example -->
        
<h1> Addition Program </h1>

<form action="" method="post">

<label> Enter your first number </label> 
<input type="text" name="number1" /><br /> 

<label> Enter your second number </label>
<input type="text" name="number2" /><br /> 

<input type="Submit" value="Calculate!" /> <?php

// Check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
// Form validation
if (isset($_POST['number1'], $_POST['number2']) && is_numeric($_POST['number1']) && is_numeric($_POST['number2']) ) {
// Store the values
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$sum = $number1 + $number2;

// Print the results
echo "<p> Your total is equal to $sum </p>";
} else {
// Error Message
echo '<p> Please enter a valid integer for number one and number two.</p>';
}
} 

?>
        
    <hr />
    
    <!-- Sticky forms -->
    <h3>Creating a Sticky Form</h3>
        
        <p>If you want to make a form which remembers what the user last filled out in the input box, you can create a sticky form.  The purpose of this form is to save users time on filling out information they have already submitted. </p>    
    
        <em>Code:</em>
        <!-- Code -->
        <div class="code">
        &lt;h1> Addition Program &lt;/h1><br /><br />
            
        &lt;form action="" method="post"><br /><br />
            
        &lt;label> Enter your first number &lt;/label> <br />
        <span class="comments">// Set the value equal to the last value in the input box</span><br />
        &lt;input type="text" name="number1" value="&lt;?php if(isset($_POST['number1'])) echo $_POST['number1']; &#63;>" />&lt;br /> <br /><br />
        &lt;label> Enter your second number &lt;/label><br />
        <span class="comments">// Set the value equal to the last value in the input box</span><br />
        &lt;input type="text" name="number2" value="&lt;?php if(isset($_POST['number1'])) echo $_POST['number2']; &#63;>" />&lt;br /> <br /><br />
        &lt;input type="Submit" value="Calculate!" /> 
        </div><br />        
    
    <em>Example:</em><br />
    <!-- Example -->

    <h1> Addition Program </h1>

<form action="" method="post">

<label> Enter your first number </label> 
<input type="text" name="number1" value="<?php if(isset($_POST['number1'])) echo $_POST['number1']; ?>" /><br /> 

<label> Enter your second number </label>
<input type="text" name="number2" value="<?php if(isset($_POST['number2'])) echo $_POST['number2']; ?>" /><br /> 

<input type="Submit" value="Calculate!" />
    
    <?php

// Check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
// Form validation
if (isset($_POST['number1'], $_POST['number2']) && is_numeric($_POST['number1']) && is_numeric($_POST['number2']) ) {
// Store the values
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$sum = $number1 + $number2;

// Print the results
echo "<p> Your total is equal to $sum </p>";
} else {
// Error Message
echo '<p> Please enter a valid integer for number one and number two.</p>';
}
} 

?>
    
    <p>If we refresh the page, you will notice that the values in the second input box will remain while the values in the first input box have disappeared.  Of course, you wouldn't want to use these sticky forms on sensitive information such as passwords or credit card information. <br /><br />
    
    In this example, I am only going to show the difference in the form because the PhP code will remain the same.</p>
    
        <hr />        
        <br />
        <a href = "../PhP/PhP6.html"> Previous Page</a>
        <span class = "next">
        <a href = "../PhP/PhP7.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html> 