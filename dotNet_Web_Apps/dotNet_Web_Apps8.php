<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - CheckOut Page</title>
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
    
<h2>Check Out Page</h2>
    
    <p>In this section we are going to create the checkout page for customers to input their data after they have selected all the items they wish to purchase. The way this form works is by creating an interface for users to submit their information. 
        
    <span class = "nl">There are four fields for the customer email, first name, last name and phone number. Each field has a validation for the input and then there is a checkbox list and a radio button group for customers to submit the method of contact.</span>
    
    <span class = "nl">Notice that the form has a default focus of email, and the drop down list is generated by the database source.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;header>
        &lt;img src="Images/banner.jpg" alt="Halloween Store" />
    &lt;/header>
    &lt;section>
        &lt;h1>CheckOut Page 1&lt;/h1>
        &lt;form id="form1" runat="server" defaultfocus="txtEmail1"
        defaultbutton="btnCheckOut">
            &lt;h2>Contact information:&lt;/h2>
            
            <span class = "comments">&lt;!-- Email Input --></span>
            &lt;label>Email address:&lt;/label>
            &lt;asp:TextBox ID="txtEmail" runat="server" CssClass="entry"
            TextMode="Email">&lt;/asp:TextBox>
                <span class = "comments">&lt;!-- Email validation --></span>
                &lt;asp:RequiredFieldValidator ID="rfvEmail" runat="server"
                ErrorMessage="Email is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtEmail">
                &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            <span class = "comments">&lt;!-- Email confirmation --></span>
            &lt;label>Email Re-entry:&lt;/label>
            &lt;asp:TextBox ID="txtEmail2" runat="server" CssClass="entry"
            TextMode="Email">&lt;/asp:TextBox>
                <span class = "comments">&lt;!-- Email confirmation validation --></span>
                &lt;asp:RequiredFieldValidator ID="rfvEmail1" runat="server"
                ErrorMessage="Email is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtEmail2">
                &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            <span class = "comments">&lt;!-- First Name Input --></span>
            &lt;label>First Name: &lt;/label>
            &lt;asp:TextBox ID="txtFirstName" runat="server" CssClass="entry">
            &lt;/asp:TextBox>
                &lt;asp:RequiredFieldValidator ID="rfvFirstName" runat="server"
                ErrorMessage="First name is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtFirstName">
                &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            <span class = "comments">&lt;!-- Last Name Input --></span>
            &lt;label>Last Name: &lt;/label>
            &lt;asp:TextBox ID="txtLastName" runat="server" CssClass="entry">
            &lt;/asp:TextBox>
                &lt;asp:RequiredFieldValidator ID="rfvLastName" runat="server"
                ErrorMessage="Last name is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtLasttName">
                &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            <span class = "comments">&lt;!-- Phone Input --></span>
            &lt;label>Phone Number:&lt;/label>
            &lt;asp:TextBox ID="txtPhone" runat="server" CssClass="entry"
            TextMode="Phone">&lt;/asp:TextBox>
            &lt;asp:RequiredFieldValidator ID="rfvLastName" runat="server" 
            ErrorMessage="Phone number is required" CssClass = "validator"
            Display="Dynamic" ControlToValidate="txtAddress">
            &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            &lt;h2>Billing address&lt;/h2>
            
            <span class = "comments">&lt;!-- Address Input --></span>
            &lt;label>Address: &lt;/label>
            &lt;asp:TextBox ID="txtAddress" runat="server" CssClass="entry">
            &lt;/asp:TextBox>
                &lt;asp:RequiredFieldValidator ID="rfvStreetAddress" runat="server"
                ErrorMessage="Street Address is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtAddress">
                &lt;/asp:RequiredFieldValidator>
           &lt;br />
           
           <span class = "comments">&lt;!-- City Input --></span>
           &lt;label>City: &lt;/label>
           &lt;asp:TextBox ID="txtCity" runat="server"
           CssClass = "entry">&lt;/asp:TextBox>
                &lt;asp:RequiredFieldValidator ID="rfvCity" runat="server"
                ErrorMessage="City is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtCity">
                &lt;/asp:RequiredFieldValidator>
            &lt;br />
            
            <span class = "comments">&lt;!-- Drop Down List for State --></span>
            &lt;label>State: &lt;/label>
            &lt;asp:DropDownList ID="ddlState" runat="server" CssClass="entry"
                AppendDataBoundItems="True" DataSource="SqlDataSource1"
                DataTextField="StateName" DataValueField="StateCode">
                &lt;asp:ListItem Text="" Value="" Selected="True">&lt;/asp:ListItem>
            &lt;/asp:DropDownList>
                &lt;asp:RequiredFieldValidator ID="rfvState" runat="server"
                ErrorMessage="State is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="ddlState">
                &lt;/asp:RequiredFieldValidator>&lt;br />
                
            <span class = "comments">&lt;!-- Sql Data Source for List --></span>
            &lt;asp:SqlDataSource ID="SqlDataSource1" runat="server"
                ConnectionString="&lt;% ConnectionStrings:HalloweenConnection %>"
                SelectCommand="SELECT [StateCode], [StateName] 
                FROM [States] ORDER BY [StateCode]">
                &lt;/asp:SqlDataSource>
                
            <span class = "comments">&lt;!-- Zip Code --></span>
            &lt;label>Zip code: &lt;/label>
            &lt;asp:TextBox ID="txtZip" runat="server" CssClass="entry" MaxLength="5">
            &lt;/asp:TextBox>
                &lt;asp:RequiredFieldValidator ID="rfvZip" runat="server"
                ErrorMessage="Zip is required" CssClass="validator"
                Display="Dynamic" ControlToValidate="txtZip">
                &lt;/asp:RequiredFieldValidator>
                
            <span class = "comments">&lt;!-- Check Box List Promotions --></span>
            &lt;h2>Optional data&lt;/h2>
            &lt;div id="optionalData">
                Please let me know about:
                &lt;asp:CheckBoxList ID="cblAboutList" runat="server" RepeatColumns="2">
                    &lt;asp:ListItem Value="New" Selected="True">New products&lt;/asp:ListItem>
                    &lt;asp:ListItem Value="Special">Speical offers&lt;/asp:ListItem>
                    &lt;asp:ListItem Value="Revisions">New editions&lt;/asp:ListItem>
                    &lt;asp:ListItem Value="Local">Local events&lt;/asp:ListItem>
                &lt;/asp:CheckBoxList>
                
            <span class = "comments">&lt;!-- Radio Button Social Media --></span>
            Please contact me via:&lt;br />
            &lt;asp:RadioButtonList ID="rblContactVia" runat="server" 
                repeatDirection="horizontal">
                &lt;asp:ListItem selected="true">Twitter&lt;/asp:ListItem>
                &lt;asp:ListItem>Facebook&lt;/asp:ListItem>
                &lt;asp:ListItem value="Text">Text message&lt;/asp:ListItem>
                &lt;asp:ListItem>Email&lt;/asp:ListItem>
                &lt;/asp:RadioButtonList>
            &lt;/div>
            
            <span class = "comments">&lt;!-- Submit, Cancel or Continue buttons --></span>
            &lt;asp:Button ID="btnCheckOut" runat="server" Text="Check Out"
            CssClass="button" OnClick="btnCheckOut_Click" />
            &lt;asp:Button ID="btnCancel" runat="server" Text="Cancel Order"
                CausesValidation="False" OnClick="btnCancel_Click" CssClass="button" />
            &lt;asp:LinkButton ID="lbtnContinueShopping" runat="server"
                PostBackUrl="~/Order.aspx" CausesValidation="False">
                Continue Shopping&lt;/asp:LinkButton>            
        &lt;/form>
    &lt;/section></pre>
    
    <p>So we have input fields which include checkboxes and radio buttons. We also have validation for those fields, now we just need a way to store that information. In order to store that information in an organized manner we can create a customer class. 
    
    <span class = "nl">I will go into the details of the customer class in the next page, for now we are going to just be initializing fields in the customer object to the values passed into our input text boxes, checkboxes and radio buttons.
        
    <span class = "nl">In order to make this information available to multiple pages its best we save in it a session variable, similar to what we did with our cart information. Lastly, let's make life easier on our customers if they decide to order something else and revisit this page. We can check if they have already initialized this customer object and just assign those values to the input boxes, checkboxes and radio buttons as submitted prior.</span></span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public partial class CheckOut : System.Web.UI.Page {
    
        <span class = "comments">// Create an instance of our customer class</span>
        private Customer customer;
        
        <span class = "comments">// Create an instance of our customer class</span>
        protected void Page_Load(object sender, EventArgs e) {
            <span class = "comments">// initialize the object with a session instance </span>
            if(!IsPostBack) {
                customer = (Customer)Session["Customer];
                <span class = "comments">// Load the data from our object to the form</span>
                this.LoadCustomerData();
            }
        }
        
        <span class = "comments">// Intialize our object with data from our form</span>
        protected void btnCheckOut_Click(object sender, EventArgs e) {
            if(Page.IsValid) {
                this.GetCustomerData();
                <span class = "comments">// Send the user to the next step</span>
                Response.Redirect("~/CheckOut2.aspx");
            }
        }
        
        <span class = "comments">// Delete the data in our Session Objects</span>
        protected void btnCancel_Click(object sender, EventArgs e) {
            Session.Remove("Cart");
            Session.Remove("Customer");
            <span class = "comments">// Send the user back to the order page</span>
            Response.Redirect("~/Order.aspx");
        }
        
        <span class = "comments">// If the object has data, copy that data into the form</span>
        private void LoadCustomerData() {
            if(customer != null) {
                txtFirstName.Text = customer.FirstName;
                txtLastName.Text = customer.LastName;
                txtEmail.Text = customer.EmailAddress;
                txtPhone.Text = customer.Phone;
                txtAddress.Text = customer.Address;
                txtCity.Text = customer.City;
                ddlState.SelectedValue = customer.State;
                txtZip.Text = customer.Zip;
                <span class = "comments">// This includes the radio button values</span>
                cblAboutList.Items[0].Selected = customer.NewProductsInfo;
                cblAboutList.Items[1].Selected = customer.SpecialPromosInfo;
                cbkAboutList.Items[2].Selected = customer.NewRevisionsInfo;
                cbkAboutList.Items[3].Selected = customer.LocalEventsInfo;
                <span class = "comments">// And method of communication</span>
                rblContactVia.SelectedValue = customer.ContactVia;
            }
        }
        
        <span class = "comments">// If the customer object hasn't been initialized with data yet</span>
        private void GetCustomerData() {
            <span class = "comments">// Initialize that object by calling the customer</span>
            if(customer == null) {
                customer = new Customer();
            }
            <span class = "comments">// Assign the form values to the object</span>
            customer.FirstName = txtFirstName.Text;
            customer.LastName = txtLastName.Text;
            customer.EmailAddress = txtEmail1.Text;
            customer.Phone = txtPhone.Text;
            customer.Address = txtAddress.Text;
            customer.City = txtCity.Text;
            customer.State = ddlState.SelectedValue;
            customer.Zip = txtZip.Text;
            <span class = "comments">// This is how assign checkbox values to variables</span>
            customer.NewProductsInfo = cblAboutList.Items[0].Selected;
            customer.SpecialPromosInfo = cblAboutList.Items[1].Selected;
            customer.NewRevisionsInfo = cblAboutList.Items[2].Selected;
            customer.LocalEventsInfo = cblAboutList.Items[3].Selected;
            <span class = "comments">// Assign radio buttons to variables</span>
            if (rblContactVia.SelectedValue == "Twitter") { customer.ContactViaTwitter = true; }
            if (rblContactVia.SelectedValue == "Faceboook") { customer.ContactViaFacebook = true; }
            if (rblContactVia.SelectedValue == "Text") { customer.ContactViaText = true; }
            if (rblContactVia.SelectedValue == "Email") { customer.ContactViaEmail = true; }
            <span class = "comments">// Initialize the session variable to this data</span>
            Session["Customer"] = customer;
        }
    }</pre>
    
    <p>Let's go to our next page where we will create another checkout form and display the inner workings of our customer class.  Remember that most if not all of these fields were already established when I showed you how to create the database for this web application.</p>
    
    
<hr />
<br />
<a href="dotNet_Web_Apps7.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps9.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>