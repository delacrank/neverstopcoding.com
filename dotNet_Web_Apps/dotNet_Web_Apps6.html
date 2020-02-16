<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Cart form</title>
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
    
    <h2>Cart Web Form</h2>

    <p>This is going to be our cart web form, it is going to control the items that our currently in our shopping cart, adding and removing those items.
        
    <span class = "nl">The purpose of this form isn't to add or remove items, it is simply to manage the items existing in the cart already and give the customer some idea of how many items are in the cart and how much money will be necessary to purchase the items.</span></p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">&lt;!-- start with the header tag --></span>
    &lt;header>
        <span class="comments">&lt;!-- We can include an image here for style --></span>
        &lt;asp:Image ID="Image1" runat="server" ImageUrl="~/Images/banner.jpg" />
    &lt;/header>
    <span class="comments">&lt;!-- html5 standard and good for SEO --></span>
    &lt;section>  
    &lt;form id="form1" runat="server">
    &lt;h1>Shopping Cart&lt;/h1>
        <span class="comments">&lt;!-- Here we can create a list and store our potential items in it (Cart) --></span>
        &lt;asp:ListBox ID="lstCart" runat="server">&lt;/asp:ListBox>
        &lt;div id="cartbuttons">
        <span class="comments">&lt;!-- one button removes items --></span>
        &lt;asp:Button ID="btnRemove" runat="server" Text="Remove Item"
        onclick="btnRemove_Click" CssClass="button" />
        <span class="comments">&lt;!-- another button empties the cart --></span>
        &lt;asp:Button ID="btnEmpty" runat="server" Text="Empty Button"
        onclick="btnEmpty_Click" CssClass="button" />
        &lt;/div>
        &lt;div id="shopbuttons">
            <span class="comments">&lt;!-- Back to Shopping Menu --></span>
            &lt;asp:Button ID="btnContinue" runat="server" PostBackUrl="~/Order.aspx"
            Text="Continue Shopping" CssClass="button" />
            <span class="comments">&lt;!-- Finished Shopping let's buy our items now --></span>
            &lt;asp:Button ID="btnCheckOut" runat="server" Text="Check Out"
            onclick="btnCheckOut_Click" CssClass="button" />
        &lt;/div>
        &lt;p id="message">
            <span class="comments">&lt;!-- Log potential Errors here --></span>
            &lt;asp:Label ID="lblMessage" runat="server"
            EnableViewState="false">&lt;/asp:Label>
        &lt;/p>
        <span class="comments">&lt;!-- Connection string to our database --></span>
        &lt;asp:SqlDataSource ID="SqlDataSource1" runat="server"
        ConnectionString='&lt;%$ ConnectionStrings:HalloweenConnectionString %>'
        SelectCommand="SELECT [ProductID], [Name], [ShortDescription],
        [LongDescription], [ImageFile], [UnitPrice] FROM [Products] ORDER BY
        [Name]">&lt;/asp:SqlDataSource>
    &lt;/form>
    &lt;/section></pre>
    
    <p>The cart web form basically requires four buttons, one for removing a selected item, one for emptying the cart, one to go back to the order form and one to proceed to the billing section in order to purchase the items.
    
    <span class = "nl">Most of the functionality for the cart page lies in the code behind and some of the supporting classes which we will get into in our next section. For now, let's look at the code behind file.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public partial class Cart : System.Web.UI.Page {
        
        <span class = "comments">// create a private property of type cartitemlist </span>
        private CartItemList cart;
        
        protected void Page_Load(object sender, EventArgs e) {
        <span class = "comments">// initialize that variable with items in the cart  </span>
        cart = CartItemList.GetCart();
        <span class = "comments">// if page hasn't been posted back yet, display items </span>
        if(!IsPostBack)
            this.DisplayCart();
        }
        
        <span class = "comments">// displays the items of the cart in string format to a list on web form </span>
        private void DisplayCart() {
            <span class = "comments">// clear the items in the list first </span>
            lstCart.Items.Clear();
            <span class = "comments">// declare a cartItem variable </span>
            CartItem item;
            for(int i = 0; i &lt; cart.Count; i++) {
                <span class = "comments">// assign this variable to every item in the cart </span>
                item = cart[i];
                <span class = "comments">// display these items to the list on web form </span>
                lstCart.Items.Add(item.Display());
            }
        }
        
        <span class = "comments">// a method which removes items from the list </span>
        protected void btnRemove_Click(object sender, EventArgs e) {
            <span class = "comments">// check the list to see if its empty first </span>
            if(cart.Count > 0) {
                <span class = "comments">// make sure an item is selected first </span>
                if(lstCart.SelectedIndex > -1) {
                    <span class = "comments">// invoke the removeAt method at designated index </span>
                    cart.RemoveAt(lstCart.SelectedIndex);
                    <span class = "comments">// display the cart item list again </span>
                    this.DisplayCart();
                } else {
                    <span class = "comments">// display an error message </span>
                    lblMessage.Text = "Please select the item you want to remove.";
                }
            }
        }
        
        <span class = "comments">// remove all the items in the list </span>
        protected void btnEmpty_Click(object sender, EventArgs e) {
            if (cart.Count > 0) {
                <span class = "comments">// invoke the clear method </span>
                cart.Clear();
                <span class = "comments">// remove the items from the list as well </span>
                lstCart.Items.Clear();
            }
        }
        
        <span class = "comments">// Create this as a placeholder for the future </span>
        protected void btnCheckOut_Click(object sender, EventArgs e) {
            lblMessage.Text = "Sorry, that function hasn't been implemented yet.";
        }
    } </pre>
    
    <p>The code behind file for the cart web form is more concerned with managing the items in our cart and making sure that those changes are being reflected in the interface of the application.
    
    <span class = "nl">One of the ways we are able to actually do this is by creating several classes, one being the CartItemList class and the other being the CartItem class. </span>
    
    <span class ="nl">The CartItemList works by creating a session variable which stores all the items added to the cart. We already know which items are being added to the cart, due to the way our order web form works.  The order form worked by recording the details of each item with a product object, which was based on information provided by the database.</span>
    
    <span class = "nl">Now imagine if we took those product objects are stored them in a container called a list, we could remove or empty that list at any time. Also due to the nature of the list being a session variable that gives us the ability to manage that data between pages. Otherwise we would lose that data everytime we refreshed the page or changed pages.</span>
    
    <span class = "nl">The buttons in this class work by just checking this list to ensure that there are items in it before attempting to remove or clear those items. It also works by populating the list of my web form, so that users can see what is currently in the cart.</span>
    
    <span class = "nl">Let's move on to understanding the 3 classes we created for our app_code file.</span></p>
    
   
    
<hr />
<br />
<a href="dotNet_Web_Apps5.html">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps7.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>