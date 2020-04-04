<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Updating api</title>
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
<?php include('..//Includes//Left_Java_Web.php'); ?>
    
<!-- Right -->
<div id ="rightz">


<h2>Enabling Hypermedia</h2>

<p>In this section we are gonig to be explaining something called Hypermedia as the Engine of the Application State or HATEOAS. The concept of hateoas is an interface whereby we can accurately describe state without constantly having to check the database. In otherwords it promotes loose coupling between client and server via hypertext/json.

<span class = "nl">This is done through something known as links which vary based on the state of our application. Using links or the lack of certain links makes communicating different states of the application more viable for our client. I know this seems confusing but as first, let's look at some examples below.</span></p>

<em>ingredients json</em>
<pre class = "code">[
{
    "id": 4,
    "name": "Veg-Out",
    "createdAt": "2018-01-31T20:15:53.219+0000",
    "ingredients": [
	{"id": "FLTO", "name": "Flour Tortilla", "type": "WRAP"},
	{"id": "COTO", "name": "Corn Tortilla", "type": "WRAP"},
	{"id": "TMTO", "name": "Diced Tomatoes", "type": "VEGGIES"},
	{"id": "LETC", "name": "Lettuce", "type": "VEGGIES"},
	{"id": "SLSA", "name": "Salsa", "type": "SAUCE"}
      ]
    },
    ...
]</pre>

<p>Here we see that we have some json code which defines: id, name, createAt, and ingredients. These are different fields in our database and we can use the json to represent these fields to our client. The problem is that we can't properly change the values of any of these ingredients because we don't know the location of ingredient, so trying to append a value to an existing taco means that we need to communicate with the server and change it via the method provided.

  <span class = "nl">What if we were provided with a link to where the value was located and could send a value to the route via the client? Maybe then we could perform an http action via the url alone. In this instance we have hardcoded some of the urls under a new field called '_links'.</span></p>

<em>ingredients json</em>
<pre class = "code">{
    "_embedded": {
    "tacoResourceList": [
      {
        "name": "Veg-Out",
        "createdAt": "2018-01-31T20:15:53.219+0000",
        "ingredients": [
              {
		"name": "Flour Tortilla", "type": "WRAP",
		"_links": {
		  "self": { "href": "http://localhost:8080/ingredients/FLTO" }
		}
	      },
	      {
	        "name": "Corn Tortilla", "type": "WRAP",
	        "_links": {
		  "self": { "href": "http://localhost:8080/ingredients/COTO" }
	        }
	      },
	      {
	        "name": "Diced Tomatoes", "type": "VEGGIES",
	        "_links": {
	          "self": { "href": "http://localhost:8080/ingredients/TMTO" }
	        }
	      },
	      {
	        "name": "Lettuce", "type": "VEGGIES",
	        "_links": {
	          "self": { "href": "http://localhost:8080/ingredients/LETC" }
	        }
	      },
	      {
	        "name": "Salsa", "type": "SAUCE",
	        "_links": {
	          "self": { "href": "http://localhost:8080/ingredients/SLSA" }
	        }
	      }
	    ],
	    "_links": {
	      "self": { "href": "http://localhost:8080/design/4" }
	    }
	  },

	  ...
	  ]
      },
      "_links": {
        "recents": {
          "href": "http://localhost:8080/design/recent"
        }
      }
   }</pre>

<p>In order To add HATEOAS to our application, let's add this pom. This will serve as a way of speeding up our application.</p>

<em>HATEOAS dependency</em>
<pre class = "code">&lt;dependency>
  &lt;groupId>org.springframework.boot&lt;/groupId>
  &lt;artifactId>spring-boot-starter-hateoas&lt;/artifactId>
&lt;/dependency></pre>

<p>Before we move on let's take a quick look at the method we are calling to handle the appending of links to our json resouce.</p>

<hr />

<h2>recentTacos method</h2>

<p>If we take a look at the recent Tacos method, you will notice that it is a method which takes our original list of tacos and inserts them into a series of other method calls. The purpose of this is to embed links into our json resource. One of the reasons we would want to embed a link into a resource is so that clients can still make http requests on certain tacos without having to depend on hitting the server side code. 

<span class = "nl">This will significantly speed up our application, in the next section we will take a look at how we can create this links and make them so that we don't have to hardcore their location into our method.</span></p>

<em>DesignTacoController</em>
<pre class = "code"> @GetMapping("/recent")
  public  Resources<TacoResource> recentTacos() {                 
    PageRequest page = PageRequest.of(
            0, 12, Sort.by("createdAt").descending());

    List<Taco> tacos = tacoRepo.findAll(page).getContent();

    List<TacoResource> tacoResources = 
        new TacoResourceAssembler().toResources(tacos);
    Resources<TacoResource> recentResources = 
	new Resources<TacoResource>(tacoResources);
    
    recentResources.add(
	new Link("http://localhost:8080/design/recent", "recents"));
    return recentResources;
  }</pre>

<p>

  <hr />
<br />
<a href="Java_Web33.html">Previous Page</a>
<span class = "next"><a href = "Java_Web35.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
