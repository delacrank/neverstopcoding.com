<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Code Behind</title>
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
    
<h2>Order Form &amp; Code Behind File</h2>
 
    <p>Let's look at the first web form and the and code behind for that form. We can set this to our default page by right clicking on our order page and setting it as 'Set as Start Page'.</span>
        
    <span class = "nl">This is our order form, we will be using this to actually make purchases on the items placed in our cart. It is usually here that most users are directed to after they have placed the items in their cart and pushed the order button.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;header>
        &lt;img src="Images/banner.jpg" alt="Halloween Store" />
   &lt;/header>
    &lt;section>
    &lt;form id="form1" runat="server">
        <span class = "comments">&lt;!-- Create a list of our proucts --></span>
        &lt;label>Please select a product &lt;/label>
        &lt;asp:DropDownList ID="ddlProducts" runat="server"
        AutoPostBack="True" DataSourceID="SqlDataSource1"
        DataTextField="Name" DataValueField="ProductID" >
        &lt;/asp:DropDownList>&lt;br />
        <span class = "comments">&lt;!-- Use this data source for our drop down list --></span>
         &lt;asp:SqlDataSource ID="SqlDataSource1" runat="server"
         ConnectionString="&lt;%$ ConnectionStrings:HalloweenConnectionString %>"
         SelectCommand="SELECT [ProductID], [Name], [ShortDescription],
         [LongDescription], [ImageFile], [UnitPrice] FROM [Products]
         ORDER BY [Name]">&lt;/asp:SqlDataSource>
        &lt;div id="productData">
            <span class = "comments">&lt;!-- Bind the products as read from the DB to these labels --></span>
            &lt;asp:Label ID="lblName" runat="server">&lt;/asp:Label>
            &lt;asp:Label ID="lblShortDescription" runat="server">&lt;/asp:Label>
            &lt;asp:Label ID="lblLongDescription" runat="server">&lt;/asp:Label>
            &lt;asp:Label ID="lblUnitPrice" runat="server">&lt;/asp:Label>
            &lt;label id="lblQuantity" runat="server">Quantity&lt;/label>
            <span class = "comments">&lt;!-- Insert the quantity of items here --></span>
            &lt;asp:TextBox ID="txtQuantity" runat="server">&lt;/asp:TextBox>
                <span class = "comments">&lt;!-- Validation for our input box --></span>
                &lt;asp:RequiredFieldValidator ID="RequiredFieldValidator1"
                CssClass="validator" runat="server" 
                ControlToValidate="txtQuantity" Display="Dynamic"
                ErrorMessage="Quantity is a required field.">
                &lt;/asp:RequiredFieldValidator>
                &lt;asp:RangeValidator ID="RangeValidator1" runat="server" 
                CssClass="validtor"
                    ControlToValidate="txtQuantity" Display="Dynamic"
                    ErrorMessage="Quantity must Range from 1 to 500"
                    MaximumValue="500" MinimumValue="1" Type="Integer">
                    &lt;/asp:RangeValidator>
            <span class = "comments">&lt;!-- Button event to add item to cart --></span>
            &lt;asp:Button ID="btnAdd" runat="server" Text="Add to Cart" />
            <span class = "comments">&lt;!-- Go to the cart page --></span>
            &lt;asp:Button ID="btnCart" runat="server" 
            Text="Go To Cart" CausesValidation="false"
                PostBackUrl="~/Cart.aspx" />
         &lt;/div>
        &lt;asp:Image ID="imgProduct" runat="server" />
    &lt;/form>    
    &lt;/section></pre>
    
    <p>To understand the way this page works, there is a drop down list which uses the database as a source of names, descriptions, image file locations, and prices. 
        
    <span class = "nl">Using labels as placeholders we will be able to update our labels with the data pertaining to each product. Our SqlDataSource tag uses a connection string to query to our database and read the values based on the product id selected from our dropdownlist.</span>
        
    <span class = "nl">The input box and the validators serve as a control for the clients to select the amount items they want to purchase. Once a client has selected the amount of items they wish to purchase and presses the 'Add to Cart' button, they will be redirected to the cart page.</span>
        
    <span class = "nl">If a user inputs too many items the page won't be processed until they change the number, or if the user tries to submit the page without inputing a quantity then the page won't be processed either. </span>    
        
    <span class="nl">Let's look at the code behind page to understand how the page loads and what events are programmed into the buttons when pressed.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public partial class Order : System.Web.UI.Page
    {
        <span class = "comments">// Create an instance or an object of the product class</span>
        private Product selectedProduct;

        <span class = "comments">// If page hasn't been posted back, bind our products to the labels on our form</span>
        protected void Page_Load(object sender, EventArgs e)
        {
            <span class = "comments">// Remember to add Jquery UnobstrusiveValidation </span>
            UnobtrusiveValidationMode = 
                System.Web.UI.UnobtrusiveValidationMode.None;
            if (!IsPostBack) ddlProducts.DataBind();
            selectedProduct = this.GetSelectedProduct();
            lblName.Text = selectedProduct.Name;
            lblShortDescription.Text = selectedProduct.ShortDescription;
            lblLongDescription.Text = selectedProduct.LongDescription;
            lblUnitPrice.Text = selectedProduct.UnitPrice.ToString("c") + " each";
            imgProduct.ImageUrl = "Images/Products/" + selectedProduct.ImageFile;
        }

        <span class = "comments">// Write a query to select product values from our database</span>
        private Product GetSelectedProduct()
        {
            DataView productsTable = (DataView)
          SqlDataSource1.Select(DataSourceSelectArguments.Empty);
            productsTable.RowFilter =
                "ProductID = '" + ddlProducts.SelectedValue + "'";
            DataRowView row = (DataRowView)productsTable[0];

            <span class = "comments">// Convert those values to either Strings or numbers and return the values</span>
            Product p = new Product();
            p.ProductID = row["ProductID"].ToString();
            p.Name = row["Name"].ToString();
            p.ShortDescription = row["ShortDescription"].ToString();
            p.LongDescription = row["LongDescription"].ToString();
            p.UnitPrice = (decimal)row["UnitPrice"];
            p.ImageFile = row["ImageFile"].ToString();
            return p;
        }

        <span class = "comments">// Check to ensure our input box is validated</span>
        protected void btnAdd_Click(object sender, EventArgs e) { 
            if(Page.IsValid)
            {
                CartItemList cart = CartItemList.GetCart();
                CartItem cartItem = cart[selectedProduct.ProductID]; 

                <span class = "comments">// Check the cart to see if the item already exists, if not add it</span>
                if(cartItem == null)
                {
                    cart.AddItem(selectedProduct,
                        Convert.ToInt32(txtQuantity.Text));
                } else {
                    <span class = "comments">// If the item does exsist increase the quantity of it</span>
                    cartItem.AddQuantity(Convert.ToInt32(txtQuantity.Text));
                }
                Response.Redirect("Cart.aspx", false);
            }
        }
    } </pre>
    
    <p>If we look at the code behind file you will notice that straight off we create a private variable which will be used as our product object. 
    
    <span class = "nl">We can use this object for several things, first we can use it to display the products from our database in our drop down list.  Simply by creating a method which retrieves the values from our SqlDataSource and storing them in in an product object, we now have access to our database.</span>
        
    <span class = "nl">Its also important to convert these values into strings if we wish to display them on our form. The 'GetSelectedProduct' method has two purposes. It's able to load the values for our page_load event by substituting the labels for the correct product in our database.</span>

    <span class = "nl">Also, its able to send the correct values to our cart page for when we want to actually purchase the items. The values are sent to the button add event. The 'cart' class has the definitions for dealing with item quantities, and managing all the items in the cart. </span>
        
    <span class = "nl">Let's look at our cart web form and the code behind file for that form in our next section.</span>
    </p>
    
<hr />
<br />
<a href="dotNet_Web_Apps4.html">Previous Page</a>
<span class = "next"><a href="dotNet_Web_Apps6.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>