<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Validation - Javascript Web Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style>
    .form label {
        width: 100px;
        display: inline-block;
    }    
    
    .form button {
        margin-left:  200px;
    }
</style>
<script type="text/javascript">   
</script>
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Js.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Validation - Javascript Web Development</h1>

<!-- Managing Validation in our forms -->
<h2>Managing Validation in our forms</h2>
    
    <p>In this section we will be talking how to validate our selection objects: checkbox, radio buttons, drop down list, etc.</p>
    
<!-- Drop down selectors -->    
<h3>Drop down selectors</h3>    
    
    <p>In this next example we will use javascript to ensure that the correct drop down element is submitted.</p>

<em>Code:</em>    
<!-- Code -->    
<pre class = "code">
<span class="comments">&lt;!-- Html Markup --></span>    
&lt;form action = "">
    &lt;fieldset>
        &lt;label> Select your favorite color:
        (ctrl-click to select mutliple colors) &lt;/label>
        &lt;select id = "selColor"
                     multiple = "multiple"
                     size = "5">
            &lt;option value = "red">red&lt;/option>
            &lt;option value = "blue">blue&lt;/option>
            &lt;option value = "green">green&lt;/option>
            &lt;option value = "purple">purple&lt;/option>
            &lt;option value = "brown">brown&lt;/option>
        &lt;/select>
    &lt;button type="button" onclick="showChoices()"> Submit &lt;/button>
    &lt;/fieldset>
&lt;/form>
    
&lt;div id = "output"> &lt;/div>

<span class="comments">&lt;!-- Javascript Code --></span>   
&lt;script>
function showChoices() {
    var selColor = document.getElementById("selColor");
    var result = "&lt;h2>Your colors&lt;\/h2>";
    result += "&lt;ul> \n";
    for (i = 0; i &lt; selColor.length; i++ ) {
        currentOption = selColor[i];
        if (currentOption.selected == true) {
            result += " &lt;li>" + currentOption.value + "&lt;\/li> \n";
        } 
    } 
    result += "&lt;\/ul> \n";
    output = document.getElementById("output");
    output.innerHTML = result;
} 
&lt;/script></pre> 
    
<br />    
<!-- Example -->    
<em>Example:</em>

<!-- Html Markup -->
<form action = "Js7.html">
<fieldset>
<label>
Select your favorite color:
(ctrl-click to select mutliple colors)
</label> <select id = "selColor"
multiple = "multiple"
size = "5">
<option value = "red">red</option>
<option value = "blue">blue</option>
<option value = "green">green</option>
<option value = "purple">purple</option>
<option value = "brown">brown</option>
</select>
<button type="button" onclick="showChoices()">
Submit</button>
</fieldset>
</form>

<div id = "output"></div>

<!-- Javascript Code -->
<script>
function showChoices() {
var selColor = document.getElementById("selColor"); 

var result = "<h3>Your colors</\h3>";
result += "<ul> \n";

for (i = 0; i < selColor.length; i++ ) {
currentOption = selColor[i];

if (currentOption.selected == true) {
result += " <li>" + currentOption.value + "<\/li> \n";
}
} 
result += "<\/ul> \n";

output = document.getElementById("output");
output.innerHTML = result;
}
</script>

<p>Let's try to understand what's going on here because we jumped headfirst into a lot of code.
    
    <span class = "nl">In our html markup all we have is a form with a label, a drop down selection and a submit button.  Within our submit button we have an attribute called onclick and we set the value of that attribute equal to our javascript function 'showChoices'.</span>
    
    <span class = "nl">Following our code we open a script tag which begins with a function and then a variable called 'selColor'.  This variable is assigned to an id called 'selColor' which is also the id of our drop down selector.  We can tell our program to look for this element when executing our script.</span>
    
    <span class = "nl">Next we create another variable called result, this variable will display the colors we choose from our drop down list.  One of the ways we are able to accomplish this is by using a if statement and assigning all of the choosen drop down list selectors to our result variable.</span>
    
    <span class = "nl">Finally, we create another variable called output and assign that to an id called output.  That will be assigned to the values stored in result and we can use our output variable to display the results of our selection.</span></p>
    
<hr />

<!-- Working with Reuglar Expressions -->
<h2>Working with Regular Expressions</h2>

    <p>A regular expression will check to for the correct format of information.  For example a phone number should have 3 digits enclosed in parantheses, followed by 3 digits and then 4 more afterwards.  Also you have to decide what symbol will seperate those characters and when symbols should be included, like in an email address the '@' and '.com' should be used.
        
    <span class = "nl">Let's take a look at some code.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">&lt;!-- HTML markup --></span>
&lt;form action="">
    &lt;fieldset>
    &lt;label>Name&lt;/label>
        &lt;input type="text" id="name"> &lt;br />
        &lt;label>Email&lt;/label>
        &lt;input type="text" id="email">&lt;br />
        &lt;label>Phone Number&lt;/label>
        &lt;input type="text" id="phone">&lt;br />
        &lt;button onclick="validate()"
                       type="button">Submit&lt;/button>
        &lt;/fieldset>
&lt;/form>
    
<span class="comments">&lt;!-- Javascript --></span>
&lt;script>
function validate() {
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    phone = document.getElementById("phone").value;
    
    if (name == "") {
        alert("Please enter a name");
    } else {
        if (email.match("^.*\..{2,4}") == null) {
            alert("That's not a valid email address");
        } else {
            phoneRE = /\(\d{3}\) *\d{3}-\d{4}/
            if (phone.match(phoneRE) == null) {
                alert("That was not a valid phone number");
            } else {
                alert("processing form . . .");
            }
        }
    }
}
&lt;/script></pre><br />

<!-- Example -->
<em>Example:</em><br />
<form class = "form" action="Js7.html">
<fieldset>
<p>
<label>Name</label>
<input type="text" id="name"> 
</p>
<p>
<label>Email</label>
<input type="text" id="email">
</p>
<p>
<label>Phone Number</label>
<input type="text" id="phone"><br />
</p>
    <button onclick="validate()" type="button">Submit</button>
</fieldset>
</form>    
    
<script>
function validate() {
name = document.getElementById("name").value;
email = document.getElementById("email").value;
phone = document.getElementById("phone").value;
    
if (name == "") {
    alert("Please enter a name");
} else {
    if (email.match("^.*\..{2,4}") == null) {
        alert("That's not a valid email address");
    } else {
        phoneRE = /\(\d{3}\) *\d{3}-\d{4}/
        if (phone.match(phoneRE) == null) {
            alert("That was not a valid phone number");
        } else {
            alert("processing form . . .");
        }
    }
}
}
</script>

<p>Alright, well we can work through this code after we understand what regular expressions are.</p>

<ul id = "li">
    <li><b>.(period):</b> can replace any single character except for newline '/n'</li>
    <li><b>^(caret):</b> Used for the beginning of a string, a word like hello can be used with ^h but not a word like ok, we would need ^o for that.</li>
    <li><b>$(dollar sign):</b> Used for the end of a string like ^ only the word must end with the letter, for hello we would use o$ for ok we would use k$.</li>
    <li><b>[abcABC]:</b> Used for any combination of characters within the brackets, so we can use either lower or upper case a, b or c but not d because it wasn't included in the brackets.</li>
    <li><b>[a-zA-Z](range):</b> Similar to our earlier reg expression, only this covers the entire range of characters from a to z.</li>
    <li><b>\d:</b> any numerical character and we can specify the amount of characters by using our curly brackets.</li>
    <li><b>\b:</b> A word boundary.</li>
    <li><b>+(plus sign):</b> One or more occurances of the previous character, so we can use this with our digit expression like so /d+ and add one or more numbers like 1,000 or 2.</li>
    <li><b>*(asterisk):</b> Zero or more occurances of the previous character, more flexiable than our previous statement because it allows us to either add additional characters or write none at all.</li>
    <li><b>{digit}:</b> This just allows you to sepecify the amount of times you want to use the /d expression so instead of writing /d/d/d you can use it once /d{3}.</li>
    <li><b>{min,max}:</b> The next character must either be the specified amount of mininum or maxium characters declared.</li>
    <li><b>(pattern segment):</b> Stores the results in a pattern.</li>
</ul>

<br />
<hr />
<a href="Js6.html">Previous Page</a>  <span class="next"><a href="Js8.html"> Next page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>