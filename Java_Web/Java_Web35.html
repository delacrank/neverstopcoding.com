<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Hateoas Class</title>
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

<h1>Creating Resources</h1>

<h2>HATEOAS Resource Class</h2>

<p>In order to build the hateoas resources we are going to need to depend on several classes. The first one we will start with is the TacoResource class. What this class allows us to do is create an abstraction of the tacos we need to store in the form of json. Using this 'TacoResource' abstraction we can store the name, createdAt and append our links to the ingredients object via the IngredientResourceAssembler. This is important because we need to build this resources from the ground up and specifying how each one is built is import based on the type of API you want to create.</p>

<em>TacoResource.java</em>
<pre class = "code">package tacos.web.api;
import java.util.Date;
import java.util.List;

import org.springframework.hateoas.ResourceSupport;
import org.springframework.hateoas.core.Relation;

import lombok.Getter;
import tacos.Taco;

@Relation(value="taco", collectionRelation="tacos")
public class TacoResource extends ResourceSupport {

  private static final IngredientResourceAssembler 
            ingredientAssembler = new IngredientResourceAssembler();
  
  @Getter
  private final String name;

  @Getter
  private final Date createdAt;

  @Getter
  private final List&lt;IngredientResource> ingredients;
  
  public TacoResource(Taco taco) {
    this.name = taco.getName();
    this.createdAt = taco.getCreatedAt();
    this.ingredients = 
        ingredientAssembler.toResources(taco.getIngredients());
  }
  
}</pre>

<p>If you look at how we use the @Relation annotation, it simply implies that the resource or hal + json created will generate the parent element of each taco with the value of taco rather then the value of the class name 'TacoResource'.

<span class ="nl">Also, notice that we included an IngredientResourceAssembler for the purpose of providing links for each of our ingredients in case users wanted to modify the content of their tacos. The TacoResouce method initialize's the ingredients object using the 'toResources' method as defined in the IngredientResourceAseembler.</span> </p>

<hr />

<h2>Taco Resource Assembler</h2>

<p>The next class we want to look at is the TacoResourceAseembler class. The first class makes it so that we can use this constructor in order to generate a single taco into a taco resource for our api. However, there's a problem when we want to create a tool which converts a list of taco objects into a single tacoResource. For this we can create an assembler or a TacoResourceAssembler.</p>

<em>TacoResourceAssembler.java</em>
<pre class = "code">package tacos.web.api;

import org.springframework.hateoas.mvc.ResourceAssemblerSupport;

import tacos.Taco;

public class TacoResourceAssembler
       extends ResourceAssemblerSupport&lt;Taco, TacoResource> {

  public TacoResourceAssembler() {
    super(DesignTacoController.class, TacoResource.class);
  }
  
  @Override
  protected TacoResource instantiateResource(Taco taco) {
    return new TacoResource(taco);
  }

  @Override
  public TacoResource toResource(Taco taco) {
    return createResourceWithId(taco.getId(), taco);
  }

}</pre>


<p>The class inherits the ResourceAssemblerSupport class which accepts two types, the object and the resouce we want to convert it into. Using the super method we can call our inherited constructor to pass in the classes we want to use to build this resouce. The reason why we are using the 'DesignTacoController.class' as the instance for our taco class, is because that is where we will be assigning the path's for our links.

<span class = "nl">Our next method 'instantiateResouce' is created in order to create an instance of a tacoResouce giving a taco object. Finally, the toResource method will generate the necessary resource provided that you provide the correct Id and object for generating it. This is the only method which is inherited (other than the constructor) from the ResourceAssemblerSupport class.</span> </p>

<hr />

<h2>Design Taco Controller</h2>

<p>If we look at our final method back in the designTacoController class, you can see how we no longer need to iterate through an object of taco's to generate the proper links.</p>

<em>code</em>
<pre class = "code">import static org.springframework.hateoas.mvc.ControllerLinkBuilder.*;
import java.util.List;

import org.springframework.hateoas.EntityLinks;
import org.springframework.hateoas.Link;
import org.springframework.hateoas.Resources;

@RestController
@RequestMapping(path="/design",                      
                produces="application/hal+json")
@CrossOrigin(origins="*")       
public class DesignTacoController {
  private TacoRepository tacoRepo;
  
  @Autowired
  EntityLinks entityLinks;

  public DesignTacoController(TacoRepository tacoRepo) {
    this.tacoRepo = tacoRepo;
  }

  @GetMapping("/recent")
  public  Resources<TacoResource> recentTacos() {                 //<3>
    PageRequest page = PageRequest.of(
            0, 12, Sort.by("createdAt").descending());

    List<Taco> tacos = tacoRepo.findAll(page).getContent();

    List<TacoResource> tacoResources = 
        new TacoResourceAssembler().toResources(tacos);
    Resources<TacoResource> recentResources = 
	new Resources<TacoResource>(tacoResources);

    
    recentResources.add(
	linkTo(methodOn(DesignTacoController.class).recentTacos())
        .withRel("recents"));
    return recentResources;	     
  }</pre>

<p>Let's understand this code, first we create a list to store the values from our database. Using the TacoResourceAssembler we can store initialize this list of tacos with a name, createdAt value and ingredient list for each taco. Also, notice this time around how I used the linkTo method in order to determine the path of my resource as well as the route to the method. Now our hal + json resource will be more flexiable in terms of the aquiring the correct host and route names.

<span class = "nl">Then we can store this new object as a resouce and populate it with the recent links using the add method. In the situation above, we decided to hardcore each link. In the next section we are going to come up with a way to make these links dynamic so they read the host, currently this code would need to be modified each time we changed the domain name of our application.</span>

<span class = "nl">Below, is the curl command to see the resources we created.</span> </p>

<em>command</em>
<pre class="code">curl localhost:8080/design/recent</pre>

<p> More on HATEOAS can be found in the spring docs <a href="https://spring.io/projects/spring-hateoas" target="_blank">here</a>.</p>

  <hr />
<br />
<a href="Java_Web34.html">Previous Page</a>
<span class = "next"><a href = "Java_Web36.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
