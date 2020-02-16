<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>MVC - PhP Programming</title>
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
    
<h1>MVC - PhP Programming</h1>
    
<h2>Model View Controller Pattern</h2>    
    
    <p>This section is going to be able using the MVC pattern or model view controller. I will explain what each of those words stand for and how structuring your web application using this pattern can be used for scaling applications.
    
    <span class = "nl">In order to better understand model view controller, lets look at a typical web application which can add, subtract, multiply or divide numbers and see and hows differs when we decide to use a pattern.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// the web form in html</span>
    &lt;!doctype html>
    &lt;html>
    &lt;head>
        &lt;title> Calculator &lt;/title>
    &lt;/head>
    &lt;body>
        &lt;main>
        &lt;h1> Calculator Application&lt;/h1>
            &lt;p> Insert two numbers and choose an operator. &lt;/p>
            
            &lt;form action = "results.php" method = "post">
                &lt;label>First Number:&lt;/label>
                &lt;input type = "text" name = "num1" />
                &lt;label>Second Number:&lt;/label>
                &lt;input type = "text" name = "num2" />
                &lt;select name = "operator">
                    &lt;option value="add">Add&lt;/option>
                    &lt;option value="sub">Subtract&lt;/option>
                    &lt;option value="multiply">Multiply&lt;/option>
                &lt;/select>
                &lt;input type ="submit" value="calculate"/>
            &lt;/form>
        &lt;/main>            
    &lt;/body>
    &lt;/html> </pre>
    
    
    <p>Now let's take a look at the php file necessary to handle all of these calculations and send back a result.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// php code</span>
    &lt;?php
    
        $num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_INT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_INT);
        $operator = filter_input(INPUT_POST, "operator");
        
        switch($operator)
            case "add": 
                $answer = $num1 + $num2;
                break;
            case "sub":
                $answer = $num1 - $num2;
                break;
            case "multiply":
                $answer = $num1 * $num2;
                break;
            default:
                echo "invalid operator selection";
    ?>
    &lt;h1>Results Page&lt;/h1>
    
        &lt;p>Here are the results of your calculations&lt;/p>
        
        &lt;p> Answer is &lt;?php echo $answer ?> &lt;/p>
        
    &lt;a href="calculator.html">Back to main&lt;/a></pre>
    
    <p>Alright, well you see the problem here is that all this code is really messy. There is html mixed in with html, and also are code isn't divided into functions. Image how long our page would be if all of our functions were in the results.php file.  Let's start by creating something called a model, this is where we can store our functions.</p>
    
    <hr />
    
    <!-- model -->
    <h3>The Model</h3>
    
        <p>Since this is a simple calculator application we will probably only need 3 functions to perform the addition, subtraction and multplication.</p>
                
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;?php
    <span class = "comments">// model</span>    
     function add($num1, $num2) {
        $sum = 0;
        $sum = $num1 + $num2;
        return $sum;
    }
    
    function sub($num1, $num2) {
        $diff = 0;
        $diff = $num1 - $num2;
        return $diff;
    }
    
    function multiply($num1, $num2) {
        $product = 0;
        $product = $num1 * $num2;
        return $product;
    }
    ?></pre>
    
    <p>Now lets look at the views we are going to be using for our controller.</p>
    
    <hr />
    
    <!-- views -->
    <h3>Views</h3>
             
        <p>The views should be short and consist of the html necessary for each possible result from the web application.</p>
    
        <em>Code</em>
        <!-- code -->
        <pre class="code">
        <span class = "comments">// header.php</span>
        &lt;!doctype html>
        &lt;html>
        &lt;head>
            &lt;title> Calculator &lt;/title>
        &lt;/head>
        &lt;body>
            &lt;main>
        
        <span class = "comments">// footer.php</span>
            &lt;/main>
            &lt;/body>
        &lt;/html>
    
        
        <span class="comments">// main_input.php</span>
        &lt;?php include('header.php'); ?>
        &lt;h1> Calculator Application&lt;/h1>
            &lt;p> Insert two numbers and choose an operator. &lt;/p>
            
            &lt;form action = "." method = "post">
                &lt;label>First Number:&lt;/label>
                &lt;input type = "text" name = "num1" />
                &lt;label>Second Number:&lt;/label>
                &lt;input type = "text" name = "num2" />
                <span class = "comments">&lt;!-- action input here --></span>
                &lt;select name = "action">
                    &lt;option value="add">Add&lt;/option>
                    &lt;option value="sub">Subtract&lt;/option>
                    &lt;option value="multiply">Multiply&lt;/option>
                &lt;/select>
                &lt;input type ="submit" value="calculate"/>
            &lt;/form>
        
        &lt;?php include('footer.php'); ?>
        
        <span class = "comments">// add.php</span>
        &lt;?php include('header.php'); ?>
        &lt;h1> Addition Results &lt;/h1>
        &lt;p>Here are the results from your addition calculation,
        &lt;?php echo $num1 . ' + ' . $num2 . ' = ' . $sum ?>&lt;/p>
        &lt;?php include('footer.php'); ?>
        
        <span class = "comments">// sub.php</span>
        &lt;?php include('header.php'); ?>
        &lt;h1> Subtraction Results &lt;/h1>
        &lt;p>Here are the results from your subtraction calculation,
        &lt;?php echo $num1 . ' - ' . $num2 . ' = ' . $diff ?>&lt;/p>
        &lt;?php include('footer.php'); ?>
        
        <span class = "comments">// multiply.php</span>
        &lt;?php include('header.php'); ?>
        &lt;h1> Multiplication Results &lt;/h1>
        &lt;p>Here are the results from your multiplication calculation,
        &lt;?php echo $num1 . ' * ' . $num2 . ' = ' . $product ?>&lt;/p>
        &lt;?php include('footer.php'); ?>
        
        <span class = "comments">// errors.php</span>
        &lt;?php include('header.php'); ?>
        &lt;h1> Error &lt;/h1>
        &lt;p>You have made an invalid selection please try again.&lt;/p>
        &lt;?php include('footer.php'); ?></pre>
    
        <p>Now let's look at the controller to see how all these files tie in to each other.</p>
    
    <hr />
    
    <!-- controller -->
    <h3>Controller</h3>
    
        <p>The controller decides which views to show and which values to return to our application. It might seem complicated at first, but after reading it a couple of times, it should start to make more sense.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// index.php</span>
    &lt;?php
    
        require_once('model.php');
    
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_INT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_INT);
    
        <span class = "comments">// the action variable is returned from the select input in 'main_input.php' view</span>
        $action = filter_input(INPUT_POST, 'action');
        if($action == NULL) {
            $action = 'main_input';
        }
        
        if($action == 'main_input') {
            include('main_input.php');
        } else if($action == 'add') {
            $sum = add($num1, $num2);
            include('add.php');
        } else if ($action == 'sub') {
            $diff = sub($num1, $num2);
            include('sub.php');
        } else if ($action == 'multiply') {
            $product = multiply($num1, $num2);
            include('multiply.php');
        } else {
            include('error.php');
        }
    ?> </pre>
    
    <p>You would store the model files in the models directory, same with views the controller can be the index.php file. While it does require a little more work to set up the application as an MVC, it is almost necessary for larger applications. 
    
    <span class = "nl">It will be very easy to identify the source of a problem when the debugger points to a file located in a model, view or controller. Ideally this pattern is also good for working with a team of people, so so a front end developer can work on the views, while a backend developer works on the models, controller, etc.</span></p>
     
<hr />
<br />
<a href = "PhP37.html">Previous Page</a>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     