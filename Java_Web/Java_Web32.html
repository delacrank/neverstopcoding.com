<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Controller api</title>
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

<h1>Controller api</h1>

<h2>Controller api</h2>

<p>In this section we are going to specifically focus on how to tie our angular code to our backend java code. This will mean highlighting certain aspects of our angular and java code without revealing the entire application for the purposes of explaining this. The section will contain four main objectives: to show how angular fetches and inserts data via the http.client, to show how java will use the requestbody parameter to read json and send that object to our repository.
  
  <span class = "nl">First let's start with our pom.xml file<span></p>

<hr />

<h2>Pom file for web api</h2>

<p>We are going to be looking at our pom and just noticing if there are any main differences to any of our other pom files for the future modules.  </p>

<em>pom.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0
          http://maven.apache.org/xsd/maven-4.0.0.xsd">
	&lt;modelVersion>4.0.0&lt;/modelVersion>

	&lt;artifactId>tacocloud-api&lt;/artifactId>
	&lt;packaging>jar&lt;/packaging>

	&lt;name>tacocloud-api&lt;/name>
	&lt;description>Taco Cloud API&lt;/description>

	&lt;parent>
		&lt;groupId>sia&lt;/groupId>
                &lt;artifactId>taco-cloud-parent&lt;/artifactId>
		&lt;version>0.0.6-SNAPSHOT&lt;/version>
	&lt;/parent>

	&lt;properties>
		&lt;project.build.sourceEncoding>UTF-8&lt;/project.build.sourceEncoding>
		&lt;project.reporting.outputEncoding>UTF-8&lt;/project.reporting.outputEncoding>
		&lt;java.version>1.8&lt;/java.version>
	&lt;/properties>

	&lt;dependencies>
		&lt;dependency>
			&lt;groupId>sia&lt;/groupId>
			&lt;artifactId>tacocloud-data&lt;/artifactId>
			&lt;version>${tacocloud.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>sia&lt;/groupId>
			&lt;artifactId>tacocloud-domain&lt;/artifactId>
			&lt;version>${tacocloud.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>sia&lt;/groupId>
			&lt;artifactId>tacocloud-security&lt;/artifactId>
			&lt;version>${tacocloud.version}&lt;/version>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-web&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-data-rest&lt;/artifactId>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>org.projectlombok&lt;/groupId>
			&lt;artifactId>lombok&lt;/artifactId>
			&lt;scope>provided&lt;/scope>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-test&lt;/artifactId>
			&lt;scope>test&lt;/scope>
		&lt;/dependency>

	&lt;/dependencies>

&lt;/project></pre>

<p>First let's notice the parent element, it shares the same id as our multi module pom of 'sia'. This links it to our main module. The other dependencies: tacocloud-data, tacocloud-domain and tacocloud-security are named of the intial modules names we provided for them. Also, notice that this artifact_id is named tacocloud-api after the module name we gave it in our first pom.</p>

<hr />

<h2>DesignTacoController</h2>

<p>This will be a very import class moving forward, for now we will aspect only certain aspects of the code and trying to understand how it ties into our angular code to read the json and pass this header to method which connects to our repo which can eventually call the method which communicates with our database and store it. 

<span class = "nl">First we will look at a get request and then we will look at a post request.</span></p>

<em>DesignTacoController.java</em>
<pre class = "code">package tacos.web.api;
import java.util.Optional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Sort;
import org.springframework.hateoas.EntityLinks;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;

import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestController;

import tacos.Taco;
import tacos.data.TacoRepository;

@RestController
@RequestMapping(path="/design",                      
                produces="application/json")
@CrossOrigin(origins="*")        
public class DesignTacoController {
  private TacoRepository tacoRepo;
  
  @Autowired
  EntityLinks entityLinks;

  public DesignTacoController(TacoRepository tacoRepo) {
    this.tacoRepo = tacoRepo;
  }

  @GetMapping("/recent")
  public Iterable<Taco> recentTacos() {                
    PageRequest page = PageRequest.of(
            0, 12, Sort.by("createdAt").descending());
    return tacoRepo.findAll(page).getContent();
  }

  @PostMapping(consumes="application/json")
  @ResponseStatus(HttpStatus.CREATED)
  public Taco postTaco(@RequestBody Taco taco) {
    return tacoRepo.save(taco);
  }
  
  @GetMapping("/{id}")
  public Taco tacoById(@PathVariable("id") Long id) {
    Optional<Taco> optTaco = tacoRepo.findById(id);
    if (optTaco.isPresent()) {
      return optTaco.get();
    }
    return null;
  }
  
//  @GetMapping("/{id}")
//  public ResponseEntity<Taco> tacoById(@PathVariable("id") Long id) {
//    Optional<Taco> optTaco = tacoRepo.findById(id);
//    if (optTaco.isPresent()) {
//      return new ResponseEntity<>(optTaco.get(), HttpStatus.OK);
//    }
//    return new ResponseEntity<>(null, HttpStatus.NOT_FOUND);
//  }
}</pre>

<p>So the first thing to notice is some of the new imports being added and the purpose of them. We see there is: '@RestController', '@CrossOrigin', 'Entity Links', 'HttpStatus', 'Path Variable' and 'ResponseStatus'. I will try to explain each as we unpack these new methods, to begin let's start with the very beginning where we declare the class.

  <span class = "nl">Notice that there are three annotations being applied to the declaration of the 'DesignTacoController' class: @RestController, @RequestMapping and @CrossOrigin. RestController is an annotation which allows our handler methods to return their values directly to the body of the reponse. RequestMapping controller is responsible for dealing the the types of requests that will be forwarded via our angular application, also notice that it takes two arguments: 'path' and 'produces'. This means as along the path is '/design' and the content is 'json' then our method handler can deal with it.</span>

  <span class = "nl">The last annotation '@CrossOrigin' is an annotation which deals with applications that may be running on a different host and or port. This is necessary because in our development enviroment we are running two servers 'angular', 'tomcat' and from two ports '4200' and '8080'. Without using the 'CrossOrigin' annotation and allowing CORS (cross origin request sharing) our application will not allow headers from different ports/servers. Basically, using this annotation allows us to send a header from our angular application to our java application.</span></p>

<hr />

<h2>RecentTacos method handler</h2>

<p>This will be the first method we will be looking which is important for handling get requests from the '/design/recent' path. It returns an Iterable type of the 'Taco' class. It calls the findAll method from our tacoRepo object and displays the content in form of json and in the body of the request.

  <span class = "nl">Our angular application can read this json in the body of the request and use it to display our recently created tacos. Now, let's take a moment to look at the original method and then at the angular code.</span></p>

<em>java</em>
<pre class = "code"> @GetMapping("/recent")
       public Iterable<Taco> recentTacos() {
       	      PageRequest page = PageRequest.of(
	          0, 12, Sort.by("createdAt").descending());
	      return tacoRepo.findAll(page).getContent();
       }
}</pre>

<p>We've seen code like this before, now let's look at the angular code.</p>

<em>recentTacosComponent.component.ts</em>
<pre class = "code">import { Component, OnInit, Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { HttpClient } from '@angular/common/http';

@Component({
	selector: 'recent-tacos',
	templateUrl: 'recents.component.html',
	styleUrls: ['./recents.component.css']
})

@Injectable()
export class RecentTacosComponent implements OnInit {
       recentTacos: any;

       constructor(private httpClient: HttpClient) { }

       ngOnInit() {
       		  this.httpClient.get('http://localhost:8080/design/recent')
		  .subscribe(data => this.recentTacos = data);
       }
  }</pre>

<p>The first part are the classes which are being imported from the angular/core, angular/http and angular/common/http libraries. Next we export the recentTacosComponent which takes in the HttpClient parameter. We can use this parameter to make a get request from the url being provided. The n we can use the value from the data to assign this to our recentTacos property. If we look at the template we will later see how what sort of code is being used to render these values.</p>

<hr />

<h2>Posting Data</h2>

<p>Now, let's look at the angular code first and display the java code second to see how we can send information from our form to our java backend.</p>

<em>design.component.ts</em>
<pre class = "code">onSubmit() {
    this.httpClient.post(
        'http://localhost:8080/design',
        this.model, {
            headers: new HttpHeaders().set('Content-type', 'application/json'),
        }).subscribe(taco => this.cart.addToCart(taco));

    this.router.navigate(['/cart']);
}</pre>

<p>Notice how the route is being pointed at the java route 'localhost:8080/design', when we look at the post method for this controller it will explain what type of parameters it will accept in order to read the header file being set. Furthermore, this data is updated via the addToCart method on our angular side of things, and then we navigate to our cart component to see the new item.

  <span class = "nl">Let's take a moment to look at the java post method to understand how it will read this header and submit these values to our repo.</span></p>

<em>DesignTacoController.java</em>
<pre class = "code">@PostMapping(consumes="application/json")
@ResponseStatus(HttpStatus.CREATED)
public Taco postTaco(@RequestBody Taco taco) {
    return tacoRepo.save(taco);
}</pre>

<hr />
<br />
<a href="Java_Web31.html">Previous Page</a>
<span class = "next"><a href = "Java_Web33.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
