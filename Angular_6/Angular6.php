<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>SportsStore</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css"> 
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Angular_6.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

  <h1>SportsStore</h1>

  <h2>Intro to api</h2>

  <p>In this section we are going to be creating a restful application. To start let's create a new angular project called SportsStore. In this app we are going to need to install boostrap, font-awesome, json-server and jsonwebtoken.</p>

  <em>commands</em>
  <pre class = "code">mkdir SportsStore
cd SportsStore
ng new SportsStore
npm i --save bootstrap
npm i --save font-awesome
npm i --save-dev json-server
npm i --save-dev jsonwebtoken</pre>

  <p>Using the '--save-dev' argument indicates that these packages are used during development and won't be part of the application. Next we need to add the style sheets for our bootstrap and font-awesome minified version to our styles. So go into our angular.json file and add them.</p>

   <em>commands</em>
  <pre class = "code">"styles": [
"src/styles.css",
"node_modules/bootstrap/dist/css/bootstrap.min.css",
"node_modules/font-awesome/css/font-awesome.min.css"
],</pre>

  <hr />

  <h2>Restful Web Service</h2>

  <p>Next we need to add a script to our package.json file. This is necessary for our restful web service. Let's first create this script along with the data.js file which will contain some of the data we want to load into our application.

    <span class = "nl">Let's start first by looking at the data.js file to see the contents of the data which will load or change.</span></p>

  <em>data.js</em>
  <pre class = "code">module.exports = function () {
    return { 
        products: [
            { id: 1, name: "Kayak", category: "Watersports", 
                description: "A boat for one person", price: 275 },
            { id: 2, name: "Lifejacket", category: "Watersports", 
                description: "Protective and fashionable", price: 48.95 },
            { id: 3, name: "Soccer Ball", category: "Soccer", 
                description: "FIFA-approved size and weight", price: 19.50 },
            { id: 4, name: "Corner Flags", category: "Soccer", 
                description: "Give your playing field a professional touch", 
                price: 34.95 },
            { id: 5, name: "Stadium", category: "Soccer", 
                description: "Flat-packed 35,000-seat stadium", price: 79500 },
            { id: 6, name: "Thinking Cap", category: "Chess", 
                description: "Improve brain efficiency by 75%", price: 16 },
            { id: 7, name: "Unsteady Chair", category: "Chess", 
                description: "Secretly give your opponent a disadvantage", 
                price: 29.95 },
            { id: 8, name: "Human Chess Board", category: "Chess", 
                description: "A fun game for the family", price: 75 },
            { id: 9, name: "Bling Bling King", category: "Chess", 
                description: "Gold-plated, diamond-studded King", price: 1200 }
        ],
        orders: []
    }
}</pre>

  <p>First, let's take a look at what the function returns. When invoked it will return two objects, one is called products the other is called orders. Let's look at the second file we will need in order to run our json server.

  <span class = "nl">This file is called 'authmiddleware.js'. We will need to include this script in our 'package.json' file.</span></p>  

  <em>authMiddleware.js</em>
  <pre class ="code">const jwt = require("jsonwebtoken");

const APP_SECRET = "myappsecret";
const USERNAME = "admin";
const PASSWORD = "secret";

module.exports = function (req, res, next) {

    if ((req.url == "/api/login" || req.url == "/login") 
            && req.method == "POST") {
        if (req.body != null && req.body.name == USERNAME 
                && req.body.password == PASSWORD) {
            let token = jwt.sign({ data: USERNAME, expiresIn: "1h" }, APP_SECRET);
            res.json({ success: true, token: token });
        } else {
            res.json({ success: false });
        }
        res.end();
        return;
    } else if ((((req.url.startsWith("/api/products") 
                || req.url.startsWith("/products")) 
           || (req.url.startsWith("/api/categories") 
                || req.url.startsWith("/categories"))) && req.method != "GET")
        || ((req.url.startsWith("/api/orders") 
            || req.url.startsWith("/orders")) && req.method != "POST")) {
        let token = req.headers["authorization"];
        if (token != null && token.startsWith("Bearer<")) {
            token = token.substring(7, token.length - 1);
            try {
                jwt.verify(token, APP_SECRET);
                next();
                return;
            } catch (err) { }
        }
        res.statusCode = 401;
        res.end();
        return;
    }
    next();
}</pre>

<p>To understand the code first lets understand some of the predefined constants in the beginning. We have several constants defined APP_SECRET, USERNAME, and PASSWORD. The function takes three arguments 'req, res, next'. Req is stands for http requests, so req.url stands for the route which is being used to access a page, the first if statement checks to see if request is coming from /api/login and /login or if the method being used is post.

<span class = "nl">The next nested if statement checks to see that the body isn't null, and that the body password and username match up with the predefined strings. If those prior conditions are met then we can finally create a token. This token will be signed with our username and is only valid for an hour.</span>

<span class = "nl">Res stands for response, we can set the json response to be successful if the token was created otherwise we can set it equal to false. Now, let's look at the next situation, this is if we access any of the pages. Meaning that the request contains these values in the url: 'products', 'categories', 'orders'. The categories request is coupled with the get method and the orders is coupled with the post method.</span>

<span class = "nl">In the situation where any of the pages with the proper method is requested then the next step is to check the value of the token. We can use the 'verify' method of the jwt object to determine. </span>

<span class = "nl">One final thing to note is that in order to get this scripts to run properly we need to be able to add them to the 'package.json' file.</p>

<em>package.json</em>
<pre class = "code">scripts: {
...
 "json": "json-server data.js -p 3500 -m authMiddleware.js"
}</pre>

<p>The final step in this process is to be able to actually call the api. To do this we need to first deploy the application to our localhost. Then navigate to the page we want to request data from. The final step would be to go to the actual directory from the command prompt and run 'npm run json'.</p>

<em>commands</em>
<pre class = "code">ng serve --port 3000 --open
cd sportsstore
npm run json
<span class = "comments">// navigate to https://localhost:3500/products/1</span></pre>

<p>In the browser you should be able to see the values for the product you pulled up, the command prompt should be able to display the method.</p>
  
<hr />
<a href="Angular5.html">Previous Page</a>
<span class="next"><a href="Angular7.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
