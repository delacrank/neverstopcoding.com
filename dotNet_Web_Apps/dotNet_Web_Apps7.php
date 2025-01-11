<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>.Net Web Applications - Cart Classes</title>
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
    
<h2>Product, CartItem &amp; CartItemList Classes</h2>
    
     <p>The first class we create will be our product class, this is responsible for managing the properties of our items. Each item will contain six different fields. One for the ID, two for the description, one for the name, one for the price and one for the location of the image file.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// define the class name</span>
    public class Product
    {
        <span class = "comments">// declare the getters and setters for our products</span>
        public string ProductID { get; set; }
        public string Name { get; set; }
        public string ShortDescription { get; set; }
        public string LongDescription { get; set; }
        public decimal UnitPrice { get; set; }
        public string ImageFile { get; set; }
    }</pre>
    
    <p>This class loosely defines some of the properties for each product, now let's create another class which can hold the amount of each product in a given cart. We can call this class cartItem.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    public class CartItem
    {
        <span class = "comments">// Define our constructors</span>
        public CartItem() {}
        
        public CartItem(Product product, int quantity) {
            this.Product = product;
            this.Quantity = quantity;
        }
    
        <span class = "comments">// declare our product class our constructors</span>
        public Product Product { get; set; }
        <span class = "comments">// declare a getter/setter for quantity method</span>
        public int Quantity { get; set; }
        
        <span class = "comments">// Define method for increasing our quantity</span>
        public void AddQuantity(int quantity) {
            this.Quantity += quantity;
        }
        
        <span class = "comments">// Display the values for our products and quantities in string format</span>
        public string Display() {
            string displayString = 
                Product.Name + " (" + Quantity.ToString() +
                " at " + Product.UnitPrice.ToString("c") + " each)";
                
            return displayString;
        }
    } </pre>
    
    <p>Notice that this second class creates a two constructors, one which takes no parameters and another which takes a product and an integer type. The second constructor is important for knowing how many items of a given product currently exsist within our application.
    
    <span class = "nl">Some of the methods of our cartItem class include the addQuantity method and the string Display method. The add quantity method simply increases the quantity of the items based on the parameter.</span>
    
    <span class = "nl">The second method formats the product and its quantity as a string, so that it can later be displayed in a webform.</span>
    
    <span class = "nl">Now, let's look at the last class in our application which is the CartItemList.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public class CartItemList
    {
        <span class = "comments">// declare a container for the items in our cart</span>
        private List&lt;CartItem> cartItems;
        
        <span class = "comments">// initialize that list</span>
        public CartItemList() {
            cartItems = new List&lt;CartItem>();
        }
        
        <span class = "comments">// return the count of our list</span>
        public int Count {
            get { return cartItems.Count; }
        }
        
        <span class = "comments">// create a getter and setter for each item in our list</span>
        public CartItem this[int index] {
            get { return cartItems[index]; }
            set { cartItems[index] = value; }
        }
        
        <span class = "comments">// Check the product id to of a cart item to ensure that its valid </span>
        public CartItem this[string id] {
            get {
                foreach (CartItem c in cartItems)
                    if (c.Product.ProductID == id) return c;
                return null;
            }
        }
        
        <span class = "comments">// Check if a session exists for our cart, if not create one </span>
        public static CartItemList GetCart() {
            CartItemList cart = (CartItemList) HttpContext.Current.Session["Cart"];
            if ( cart == null )
                HttpContext.Current.Session["Cart"] = new CartItemList();
            return (CartItemList) HttpContext.Current.Session["Cart"];        
        }
        
        <span class = "comments">// Add an item to our shopping cart call the cartitem Add method</span>
        public void AddItem(Product product, int quantity) {
            CartItem c = new CartItem(product, quantity);
            cartItems.Add(c);
        }
        
        <span class = "comments">// Remove an item</span>
        public void RemoveAt(int index) {
            cartItems.RemoveAt(index);
        }
        
        <span class = "comments">// destory the current shopping cart session</span>
        public void Clear() {
            cartItems.Clear();
        }
    }</pre>
    
     <p>The cart item list class contained many functions which contained the functionality behind remove or adding items from the shopping cart. The code behind file will invoke methods that we created in this class in order to add or remove or clear our cart. 
    
     <span class = "nl">Notice that this class uses </span>     
         
     <span class = "nl">It is very important that we create seperate classes in order to make this shopping cart work. For one we need to know for testing purposes if a call fails which file to find it in, second if we want to expand on our cart item class and add more features, working with an organized structure will allow us easily implementation of these new features.</span></p>


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