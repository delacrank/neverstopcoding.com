<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>XHtml Forms Part 2 - PhP Programming</title>
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
    
<h1>XHtml Forms Part 2 - PhP Programming</h1>
    
<h2>PhP and xHtml forms cont.</h2>
    
    <p> We are going to continue to talk about using forms to store data with php.  In this section I will show you how to store variables with check boxes and radio boxes in addition to our input field. </p>

<hr />        
        
<!-- Build a form with complex Elements -->
<h3>Building a complex form w/ PhP</h3>
    
    <p>Ok, so in our last section there was a lot of code required in order to create a form which sent over just one variable (username).  Now, we're are going to work on a complex form which will send over several variables. </p>
    
    <em>Markup:</em>
    <!-- Code -->
    <pre class="code">
    &lt;h1> Job Application &lt;/h1>
        &lt;form action = "<span class="highlight">Job_Application.php</span>" 
            method = "post"> 
        &lt;fieldset> 
            &lt;p> 
                &lt;label>How much experience do you have&lt;/label>
                &lt;select name = "<span class="highlight">experience</span>"> 
                    &lt;option value = "1 year"> 1 year of experience &lt;/option>
                    &lt;option value = "2 - 3 years"> 2 - 3 years of experience &lt;/option>
                    &lt;option value = "5 + years"> 5+ years of experience &lt;/option>
                &lt;/select>
            &lt;/p>
            
            &lt;p>
                &lt;label>What type position are you looking for? &lt;/label> &lt;br /> 
                &lt;input type = "radio" 
                            name = "<span class="highlight">job</span>" 
                            value = "designer" /> An entry level position as a Designer. &lt;br />
                &lt;input type = "radio" 
                            name = "<span class="highlight">job</span>" 
                            value = "developer" /> An entry level position as a Developer.&lt;br />
                &lt;input type = "radio" 
                            name = "<span class="highlight">job</span>"
                            value = "tester" /> An entry level position as a Tester. &lt;br />
            &lt;/p>
            
            &lt;p> 
                &lt;label>What type of salary are you looking for? &lt;/label> &lt;br />
                &lt;input type = "checkbox" 
                            name = "<span class="highlight">40k</span>" 
                            value = "40k" /> $40k that seems reasonable?&lt;br />
                &lt;input type = "checkbox" 
                            name = "<span class="highlight">60k</span>"
                            value = "60k" /> $60k you need some experience?&lt;br />
                &lt;input type = "checkbox" 
                            name = "<span class="highlight">90k</span>"
                            value = "90k" /> $90k that's a lot of money! &lt;br /> 
            &lt;/p>
            &lt;button type = "submit"> submit &lt;/button>
        &lt;/fieldset> 
    &lt;/form></pre><br />
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    &lt;h1> Job results &lt;/h1> 
    &lt;?php
        
        <span class = "comments">// gather the variables</span>
        $experience = $_REQUEST["<span class="highlight">experience</span>"];
        $job = $_REQUEST["<span class="highlight">job</span>"];

        <span class = "comments">// send some output</span>
$reply = &lt;&lt;&lt; HERE
&lt;p>You have $experience experience.&lt;/p>
&lt;p>The job you want is $job.&lt;/p>
HERE;

        print $reply;
        <span class = "comments">// Did you get the job?</span>
        $success = false;

        if (isset($_REQUEST["<span class="highlight">40k</span>"])) {
            $success = true;
        }

        if (isset($_REQUEST["<span class="highlight">60k</span>"])) {
            $success = false;
            print "&lt;p>Maybe in another 2 years.&lt;/p>";
        } 

        if (isset($_REQUEST["<span class="highlight">90k</span>"])) {
            $success = false;
            print "&lt;p>That's too much money.&lt;/p>";
        } 

        if ($success == true) {
            print "&lt;p>Congralutions you got the job!&lt;/p>";
        } 
    &#63;> </pre>

<p>Alright, let's take a look at this form below. We're going to use the fields in this form to store our information using a php program. I have already highlighted the fields you need to name properly in order for your methods to pass properly. Notice how every field which is highlighted red proceeds 'name = ' (the php program will recognize a 'named' field from our form).<br /><br />
    
Similar to before we used the 'REQUEST' function to store information from our form into our php application.  We also used a new function as well, it's called the 'ISSET' function.  This function will determine whether or not the variable is null and if it isn't what to do with it.<br /><br />
    
The problem with this form is that we have checkboxes, so we can't just initialize variables in our php application without using them, otherwise we will have a runtime error.  Yet, we still want to use these checkboxes in our form in case the user decides to initialize them.  So, we can check to see if they have been used with our 'ISSET' function and then proceed to code as if they had already been intialized. More on this at the php online manual, <a target ="_blank" href ="http://www.php.net/manual/en/function.isset.php">isset function</a></p>
    
<!-- Example -->
<em>Example:</em>
<h1> Job Application </h1>
<form action = "php scripts/php5.php"
method = "post">
<fieldset>
<p>
<label>How much experience do you have</label>
<select name = "experience">

<option value = "1 year">
1 year of experience
</option>
<option value = "2 - 3 years">
2 - 3 years of experience
</option>
<option value = "5 + years">
5+ years of experience
</option>
</select>
</p>
<p>
<label>What type position are you looking for? </label> <br />

<input type = "radio"
name = "job" value = "designer" />
An entry level position as a Designer. <br />
<input type = "radio"
name = "job"
value = "developer" />
An entry level position as a Developer.<br />
<input type = "radio"
name = "job"
value = "tester" />
An entry level position as a Tester. <br />
</p>
<p>
<label>What type of salary are you looking for? </label> <br />

<input type = "checkbox"
name = "40k"
value = "40k" />
$40k that seems reasonable? <br />
<input type = "checkbox"
name = "60k"
value = "60k" />
$60k you need some experience? <br />
<input type = "checkbox"
name = "90k"
value = "90k" />
$90k that's a lot of money! <br />
</p>

<button type = "submit"> submit </button>
</fieldset>
</form> 
<br />    
<hr />    
    
    
<!-- Post, Get, Request methods -->
<h2>Post, Get, Request Methods</h2>
    
    <p>    Remeber when we used the 'method = get' from our form action earlier.  Then we defined a variable with the request function ( $userName = $_REQUEST["userName"]; ).  Let's break that down.    </p>

<dl>
    <dt>Get Method</dt>
    <dd>A list of variables sent through the post method. When the user hits the submit  button data is encoded and then the program creates a URL ( Uniform Resource Locator ) beginning with the action property of the form along with the variable names and their values. 
        
        <span class = "nl">This can be bad if sensitive information is sent via a URL link, such as variable names and their values (username, password, credit card info, etc.)</dd>
    
    <dt>Post Method</dt>
    <dd>Same as the get method only, variable names and their values are not sent, instead the data is sent directly to the server and the name of the php pops up. <span class = "nl">I would suggest changing the methods in the form action and reading the URL to see the differences.</span></dd>
    
    <dt>Request Method</dt>
    <dd>This is only used from the php stand point and it can take either a get or post method.  <span class = "nl">If you specify $_POST["username"] and the xhtml page used the "method = get" then you will either not find the correct field or more likely draw a runtime error.</span></dd>
</dl>    
    
<hr />
<br />
<a href ="PhP4.html">Previous Page</a><span class ="next"><a href = "PhP6.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>