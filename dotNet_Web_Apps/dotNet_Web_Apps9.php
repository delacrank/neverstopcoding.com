<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - CheckOut Continued</title>
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
    
<h2>Customer Class &amp; CheckOut Page 2</h2>
    
    <p>Let's start by looking at the customer class first. This will give us an idea of the properties we are using for our input fields and the types of data that will eventually get submitted into the database. </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public class Customer {
        <span class = "comments">// Create fields for customer information</span>
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string EmailAddress { get; set; }
        public string Phone { get; set; }
        public string Address { get; set; }
        public string City { get; set; }
        public string State { get; set; }
        public string Zip { get; set; }
        
        <span class = "comments">// Create fields for customer information</span>
        public bool NewProductsInfo { get; set; }
        public bool NewRevisionsInfo { get; set; }
        public bool SpecialPromosInfo { get; set; }
        public bool LocalEventsInfo { get; set; }
       
        public string ContactVia { get; set; }
        public bool ContactViaTwitter { get; set; }
        public bool ContactViaFacebook { get; set; }
        public bool ContactViaText { get; set; }
        public bool ContactViaEmail { get; set; }
    }</pre>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;h2>Data in Session State&lt;/h2>
    
    &lt;form id="form1" runat="server">
        &lt;asp:TextBox ID="txtData" runat="server"
        TextMode="MultiLine" Columns="50" Rows="20">&lt;/asp:TextBox>
        &lt;br />&lt;br />
        &lt;asp:Button ID="btnContinue" runat="server" PostBackUrl="~/Order.aspx"
        Text="Continue Shopping" />
    &lt;/form> </pre>
    
    <p>This form basically works as a textarea tag with 20 rows and 50 columns, now let's look at the code behind file.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">public partial class CheckOut2 : System.Web.UI.Page {
        private Customer customer;
        
        protected void Page_Load(object sender, EventArgs e) {
            
            customer = (Customer) Session["Customer"];
    
            string message = 
            "Contact information\n" + 
            "   Email: " + customer.EmailAddress + "\n" + 
            "   First name: " + customer.FirstName + "\n" +
            "   Last name: " + customer.LastName + "\n" +
            "   Phone number: " + customer.Phone + "\n" + 
            "Billing address\n" + 
            "   Address: " + customer.Address + "\n" +
            "   City: " + customer.City + "\n" + 
            "   State: " + customer.State + "\n" + 
            "   Zip code: " + customer.Zip + "\n" +
            "Let me know about\n" + 
            "   New products: " + customer.NewProductsInfor + "\n" + 
            "   Special offers: " + customer.SpecialPromosInfo + "\n" + 
            "   New editions: " + customer.NewRevisionsInfo + "\n" +
            "   Local events: " + customer.LocalEventsInfo + "\n" + 
            "Contact me via\n" + 
            "   Twitter: " + customer.ContactViaTwitter + "\n" + 
            "   Facebook: " + customer.ContactViaFacebook + "\n" + 
            "   Text message: " + customer.ContactViaText" + "\n" + 
            "   Email: " + customer.ContactViaEmail + "\n";
    
            txtData.txt = message;
        }
    }</pre>
    
    <p>Now let's take a look at the customer Class.</p>
    
    


<hr />
<br />
<a href="dotNet_Web_Apps6.php">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps8.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>