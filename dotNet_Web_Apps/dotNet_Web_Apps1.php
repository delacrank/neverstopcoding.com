<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Calculator</title>
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
    
<h2>Calculate the Interest</h2>
    
    <p>This is going to be a first application. Here we are going to introduce a bunch of new concepts and tools. Our application will be capable of taking input, excuting a calculationg and then submitting an ouput upon pressing a button (event).
    
    <span class = "nl">Let's start by looking at the web form first.</span></p>
   
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;form id="form1" runat="server">
    &lt;div>
        <span class = "comments">&lt;!-- Include an image --></span>
        &lt;img src ="Images/murach.png" />
        <span class = "comments">&lt;!-- title of the application --></span>
        &lt;h1>401K Future Value Calculator&lt;/h1>

    <span class = "comments">&lt;!-- Using a table for formating options only --></span>
    &lt;table>
        &lt;tr>
            &lt;td>Monthly Investments&lt;/td>
            &lt;td>
                <span class = "comments">&lt;!-- This is an ASP tag for a drop down list --></span>
                &lt;asp:DropDownList ID="ddlMonthlyInvestment" runat="server">
                &lt;/asp:DropDownList>
            &lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td>Annual Intrest Rate&lt;/td>
            &lt;td>
                <span class = "comments">&lt;!-- An input field for text --></span>
                &lt;asp:TextBox ID="txtInterestRate" runat="server">&lt;/asp:TextBox>
            &lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td>Number of Years&lt;/td>
            &lt;td>
                <span class = "comments">&lt;!-- Input field for text --></span>
                &lt;asp:TextBox ID="txtYears" runat="server">&lt;/asp:TextBox>
            &lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td>Future Value&lt;/td>
            &lt;td>
                <span class = "comments">&lt;!-- A label --></span>
                &lt;asp:Label ID="lblFutureValue" runat="server">&lt;/asp:Label>
            &lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td colspan="2">&lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td>
                <span class = "comments">&lt;!-- An input field for submit the form --></span>
                &lt;asp:Button ID="Button1" runat="server"
                Text="Calculate" Width="99px" OnClick="Button1_Click" />
            &lt;/td> &lt;td>
                <span class = "comments">&lt;!-- An input field for reseting fields --></span>
                &lt;asp:Button ID="Button2" runat="server"
                Text="Clear" Width="100px" OnClick="Button2_Click"/>
            &lt;/td>
        &lt;/tr> &lt;tr>
            &lt;td>
                <span class = "comments">&lt;!-- Generates javascript validation based on attributes --></span>
                <span class = "comments">&lt;!-- JS validation for interest rate --></span>
               &lt;asp:RequiredFieldValidator ID="RequiredFieldValidator1"
                runat="server" ErrorMessage="Interest Rate is Required"
                ControlToValidate="txtInterestRate" ForeColor="Red">
            &lt;/asp:RequiredFieldValidator>
            &lt;/td>
            &lt;td>
                <span class = "comments">&lt;!-- Validation for interest range values --></span>
                &lt;asp:RangeValidator ID="RangeValidator1" runat="server"
                ErrorMessage="Interest Rate is Required Interest must be between 1 - 20"
                ControlToValidate="txtInterestRate" ForeColor="Red" 
                MaximumValue="20" MinimumValue="1" Type="Double">&lt;/asp:RangeValidator>
            &lt;/td>
         &lt;/tr> &lt;tr>
              &lt;td>
                <span class = "comments">&lt;!-- JS validation for years --></span>
                  &lt;asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server"
                ErrorMessage="Years Required" ControlToValidate="txtYears"
                ForeColor="Red">
                  &lt;/asp:RequiredFieldValidator>
            &lt;/td> &lt;td>
                <span class = "comments">&lt;!-- JS validation for years range values --></span>
                 &lt;asp:RangeValidator ID="RangeValidator2" runat="server"
                ErrorMessage="Years must be between 1 and 45"
                ControlToValidate="txtYears" ForeColor="Red"
                MaximumValue="45" MinimumValue="1" Type="Integer">
                 &lt;/asp:RangeValidator>
            &lt;/td>
        &lt;/tr>
    &lt;/table>
    &lt;/div>
    &lt;/form></pre>
    
    <p>This may look like a lot of code, but most of this code is generated by draggin icons in the tools panel. Let's look at the six tags being used so far: asp:dropdownlist, asp:textbox, asp:button, asp:label and asp:requiredfieldvalidator and asp:rangefieldvalidator.</p>
    
    <ul id='li'>
        <li><b>Asp:DropDownList</b> - Generates a selection field which can be filled with the code behind file.</li>
        <li><b>Asp:TextBox</b> - Generates an input field which accepts text.</li>
        <li><b>Asp:Button</b> - Generates a input field which submits data to the server.</li>
        <li><b>Asp:RequiredFieldValidator</b> - Generates javascript which checks input field to ensure it doesn't remain blank.</li>
        <li><b>Asp:RangeFieldValidator</b> - Generates javascript which checks input field for numbers between a set range.</li>
    </ul>
    
    <p>These first three tags: dropdownlist, textbox and button find in the toolbox and considered 'standard' tools. The last two required tools are in the 'validation' selection of the toolbox.
    
    <span class ="nl">So basically we have an image 2 textboxes and 2 buttons one for submitting data and one for clearing the fields. Now, let's look at the code behind file to see what happens when we actually submit this data to our form.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// include the necessary files</span>
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Web;
    using System.Web.UI;
    using System.Web.UI.WebControls;

    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            <span class = "comments">// Set this value for our jquery validation tags</span>
            UnobtrusiveValidationMode = System.Web.UI.UnobtrusiveValidationMode.None;
            <span class = "comments">// check if the form has been submitted yet</span>
            if(!IsPostBack)
                for(int i = 50; i &lt;= 500; i += 50)
                {
                    <span class = "comments">// add these values to our drop down list</span>
                    ddlMonthlyInvestment.Items.Add(i.ToString());
                }
        }

        <span class = "comments">// execute this action when the button is pressed</span>
        protected void Button1_Click(object sender, EventArgs e)
        {   
            <span class = "comments">// Check our fields to see if data has been validated</span>
            if(IsValid)
            {
                <span class = "comments">// Convert these values to ints or decs and store them in variables</span>
                int monthlyInvestment =
                Convert.ToInt32(ddlMonthlyInvestment.SelectedValue);
                decimal yearlyInterestRate = Convert.ToDecimal(txtInterestRate.Text);
                int years = Convert.ToInt32(txtYears.Text);
                decimal futureValue = 
                this.CalculateFutureValue(monthlyInvestment, yearlyInterestRate, years);
                <span class = "comments">// Set this value to a string with format 'currency'</span>
                lblFutureValue.Text = futureValue.ToString("c");
            }
        }

        <span class = "comments">// Calculate the value of interest rate</span>
        protected decimal CalculateFutureValue (int monthlyInvestment, decimal yearlyInterestRate, int years)
        {
            int months = years * 12;
            decimal monthlyInterestRate = yearlyInterestRate / 12 / 100;
            decimal futureValue = 0;
            for(int i = 0; i &lt; months; i++)
            {
                futureValue = futureValue + monthlyInvestment * (1 + monthlyInterestRate);
            }
            return futureValue;
        }

        <span class = "comments">// reset the fields</span>
        protected void Button2_Click(object sender, EventArgs e)
        {
            ddlMonthlyInvestment.SelectedIndex = 0;
            txtInterestRate.Text = "";
            txtYears.Text = "";
            lblFutureValue.Text = "";
        }
    }</pre>
    
    <p>Let's start at the beginning, our first function page load assigns a value to 'unobtrusivevalidation' mode. Doing this allows us to import a jQuery library and use it for a asp:validation tools. To import libraries use the NuGet package manager, that can be found by right clicking on the project solution name.
    
    <span class = "nl">Next we need to provide values for our drop down list, and we do this using a for loop. Our ddlMonthInvestment was the 'id' used for our drop down list and it comes equipped with certain methods which allow us to add items to it. We can call these methods similar to the way you would call them in java, by just adding a dot to the name.</span>
    
    <span class = "nl">Next we have our first button click event. First we need to see if the fields our valid before we can try to submit them to our server. Next we call a calculate future value method, which takes the fields and performs some multiplication and division.  Then we assign the text value of our lable future value to that value which was returned from that function.</span>
    
    <span class = "nl">We convert it to a string and use 'c' for currency formating.</span>
    
    <span class = "nl">The final method our clear button simply takes the fields and assigns them to empty strings or zero if one of our drop down list items was selected.</span>
        
        
    </p>
    
    
<hr />
<br />
<a href="dotNet_Web_Apps.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps2.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>()