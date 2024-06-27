<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Styles</title>
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
<?php include('..//Includes//Left_dotNet_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>.NET Web Applications</h1>
    
<h2>Styling Our Web Apps</h2>
    
    <p>This will be a relatively short section explaining how to add css styles not only to our html tags but only to our asp tags.  The first thing we need to do to our calculator application is add a link to our stylesheet.  This can be done by clicking on the project name and selecting add file and choosing stylesheet from there. 
    
    <span class ="nl">Once a style sheet has been created we can either drag that sheet into our project or simply type in the link tag in our head section like so.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;head runat="server">
    &lt;title>&lt;/title>
    &lt;link rel ="stylesheet" type="text/css" href="StyleSheet.css" />
    &lt;/head></pre>
    
    <p>To ensure that our styles are added to our our html elements we just add the class like we would normally do with a regular html element. Then we create the rule in our style sheet like so.
    
    <span class = "nl">However, if we want to add a css style to an asp element then we need to first add a CssClass attribute to it. It is case sensitive so be sure to capitalize the first letter for both the first and second word of the attribute.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">&lt;!-- A regular class --></span>
    &lt;input class = "style" type="text"/>
    
    <span class = "comments">&lt;!-- An asp class --></span>
    &lt;asp:TextBox CssClass = "style" runat="server">&lt;/asp:TextBox></pre>
    
    <p>Now let's look at the same application again, only this time without the table and let's add our style sheet afterwards. Notice, this is only how I would style the form, you can choose to style it anyway you like.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    &lt;form id="form1" runat="server">
    
    &lt;img style="display: block; margin: auto" src ="Images/murach.png" />
    &lt;h1>401K Future Value Calculator&lt;/h1>

    &lt;p>
    &lt;label>Monthly Investments&lt;/label>
    &lt;asp:DropDownList ID="ddlMonthlyInvestment" runat="server" CssClass="entry">
    &lt;/asp:DropDownList>
    &lt;/p>

    &lt;p>
    &lt;label>Annual Intrest Rate&lt;/label>
    &lt;asp:TextBox ID="txtInterestRate" runat="server" 
    CssClass="entry">&lt;/asp:TextBox>
    
    &lt;asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server"
    ErrorMessage="Interest Rate is Required" ControlToValidate="txtInterestRate"
    ForeColor="Red" CssClass="valid">&lt;/asp:RequiredFieldValidator>

    &lt;asp:RangeValidator ID="RangeValidator1" runat="server" 
    ErrorMessage="Interest Rate is Required Interest must be between 1 - 20"
    ControlToValidate="txtInterestRate" ForeColor="Red" 
    MaximumValue="20" MinimumValue="1" Type="Double" CssClass="valid">
    &lt;/asp:RangeValidator>
    &lt;/p>

    &lt;p>
    &lt;label>Number of Years&lt;/label>

    &lt;asp:TextBox ID="txtYears" runat="server" CssClass="entry">&lt;/asp:TextBox>

     &lt;asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server"
    ErrorMessage="Years Required" ControlToValidate="txtYears"
    ForeColor="Red" CssClass="valid">&lt;/asp:RequiredFieldValidator>

    &lt;asp:RangeValidator ID="RangeValidator2" runat="server" 
    ErrorMessage="Years must be between 1 and 45" ControlToValidate="txtYears"
    ForeColor="Red" MaximumValue="45" MinimumValue="1" Type="Integer"
    CssClass="valid">&lt;/asp:RangeValidator>
   &lt;/p>

    &lt;p>
    &lt;label>Future Value&lt;/label>

    &lt;asp:Label ID="lblFutureValue" runat="server">&lt;/asp:Label>
    &lt;/p>

    &lt;asp:Button ID="Button1" runat="server" Text="Calculate" Width="99px"
    OnClick="Button1_Click" CssClass="button" />

    &lt;asp:Button ID="Button2" runat="server" Text="Clear" Width="100px"
    OnClick="Button2_Click" CssClass="button" />

    &lt;/form></pre>
    
    <p>Finally, let's look at the css styles before we move on to the next section.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    form {
        margin: 0 auto;
        width: 550px;
    }

    label {
        float: left;
        width: 10em;
    }

    .entry {
        margin-left: 1em;
        width: 10em;
    }

    .valid {
        margin-left: 1em;
        font-size: 95%;
    }

    .button {
        width: 10em;
        margin-left: 1em;
        margin-right: 3.7em;
    }</pre>
    
    <p>You see nothing to fancy, I used the label tag for our labels, entry class for our input fields, valid class for our validators and finally button class for obviously our buttons.
    
    <span class=  "nl">You may also notice a class for our form and some inline styles for our img.</span>
        
    <span class = "nl">One final note, in order to account for older browsers which can't handle html5 elements. You can use this javascript shiv, look below for adding it.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">&lt;/script></pre>
    
    
    <p>In the next section we are going to jump straight into using databases and how to connect and move data from our client to the server and vice versa.</p>
    
    
<hr />
<br />
<a href="dotNet_Web_Apps1.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps3.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>()