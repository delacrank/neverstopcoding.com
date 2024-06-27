<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Restful Web Services</title>
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

<h1>Restful Web Services</h1>

<h2>Intro to Rest</h2>

<p>This is going to be a relatively large application and it is for this reason that I am going to print out the entire contents of the application before we even get starting diving into code. Many aspects of this new application will be different from prior versions of the taco application.

<span class = "nl">The first of these being how we write our pom and to what extension our main pom intergrates smaller pom into it.</span></p>

<em>directory tree</em>
<pre class = "code">│   mvnw
│   mvnw.cmd
│   pom.xml
│   README.adoc
│
├─.mvn
│   └─wrapper
│           maven-wrapper.jar
│           maven-wrapper.properties
│
├─tacocloud-api
│   │   .gitignore
│   │   mvnw
│   │   mvnw.cmd
│   │   pom.xml
│   │
│   ├─.mvn
│   │   └─wrapper
│   │           maven-wrapper.jar
│   │           maven-wrapper.properties
│   │
│   └─src
│       └─main
│           └─java
│               └─tacos
│                   └─web
│                       └─api
│                               DesignTacoController.java
│                               IngredientController.java
│                               IngredientResource.java
│                               IngredientResourceAssembler.java
│                               OrderApiController.java
│                               RecentTacosController.java
│                               SpringDataRestConfiguration.java
│                               TacoResource.java
│                               TacoResourceAssembler.java
│                               TacoResources.java
│
├─tacocloud-data
│   │   .gitignore
│   │   mvnw
│   │   mvnw.cmd
│   │   pom.xml
│   │
│   ├─.mvn
│   │   └─wrapper
│   │           maven-wrapper.jar
│   │           maven-wrapper.properties
│   │
│   └─src
│       └─main
│           └─java
│               └─tacos
│                   └─data
│                           IngredientRepository.java
│                           OrderRepository.java
│                           TacoRepository.java
│                           UserRepository.java
│
├─tacocloud-domain
│   │   .gitignore
│   │   mvnw
│   │   mvnw.cmd
│   │   pom.xml
│   │   replay_pid3910.log
│   │
│   ├─.mvn
│   │   └─wrapper
│   │           maven-wrapper.jar
│   │           maven-wrapper.properties
│   │
│   └─src
│       └─main
│           └─java
│               └─tacos
│                       Ingredient.java
│                       Order.java
│                       Taco.java
│                       User.java
│
├─tacocloud-security
│   │   .gitignore
│   │   mvnw
│   │   mvnw.cmd
│   │   pom.xml
│   │
│   ├─.mvn
│   │   └─wrapper
│   │           maven-wrapper.jar
│   │           maven-wrapper.properties
│   │
│   └─src
│       └─main
│           └─java
│               └─tacos
│                   └─security
│                           RegistrationController.java
│                           RegistrationForm.java
│                           SecurityConfig.java
│                           UserRepositoryUserDetailsService.java
│
├─tacocloud-ui
│   │   .angular-cli.json
│   │   .editorconfig
│   │   .gitignore
│   │   karma.conf.js
│   │   package.json
│   │   pom.xml
│   │   protractor.conf.js
│   │   README.md
│   │   tsconfig.json
│   │   tslint.json
│   │
│   ├─e2e
│   │       app.e2e-spec.ts
│   │       app.po.ts
│   │       tsconfig.e2e.json
│   │
│   └─src
│       │   favicon.ico
│       │   index.html
│       │   main.ts
│       │   polyfills.ts
│       │   routes
│       │   styles.css
│       │   test.ts
│       │   tsconfig.app.json
│       │   tsconfig.spec.json
│       │   typings.d.ts
│       │
│       ├─app
│       │   │   app.component.css
│       │   │   app.component.html
│       │   │   app.component.spec.ts
│       │   │   app.component.ts
│       │   │   app.module.ts
│       │   │   app.routes.ts
│       │   │   auth.config.ts
│       │   │
│       │   ├─api
│       │   │       ApiService.ts
│       │   │
│       │   ├─big-button
│       │   │       bigbutton.component.css
│       │   │       bigbutton.component.html
│       │   │       bigbutton.component.ts
│       │   │
│       │   ├─cart
│       │   │       cart-item.ts
│       │   │       cart-service.ts
│       │   │       cart.component.css
│       │   │       cart.component.html
│       │   │       cart.component.ts
│       │   │
│       │   ├─cloud-title
│       │   │       cloudtitle.component.css
│       │   │       cloudtitle.component.html
│       │   │       cloudtitle.component.ts
│       │   │
│       │   ├─design
│       │   │       design.component.css
│       │   │       design.component.html
│       │   │       design.component.ts
│       │   │
│       │   ├─footer
│       │   │       cloud-taco.png
│       │   │       footer.component.css
│       │   │       footer.component.html
│       │   │       footer.component.ts
│       │   │
│       │   ├─group-box
│       │   │       groupbox.component.css
│       │   │       groupbox.component.html
│       │   │       groupbox.component.ts
│       │   │
│       │   ├─header
│       │   │       cloud-taco.png
│       │   │       header.component.css
│       │   │       header.component.html
│       │   │       header.component.ts
│       │   │
│       │   ├───home
│       │   │       home.component.css
│       │   │       home.component.html
│       │   │       home.component.ts
│       │   │
│       │   ├─little-button
│       │   │       littlebutton.component.css
│       │   │       littlebutton.component.html
│       │   │       littlebutton.component.ts
│       │   │
│       │   ├─locations
│       │   │       locations.component.css
│       │   │       locations.component.html
│       │   │       locations.component.ts
│       │   │
│       │   ├─login
│       │   │       login.component.css
│       │   │       login.component.html
│       │   │       login.component.ts
│       │   │
│       │   ├─recents
│       │   │       NonWrapsPipe.ts
│       │   │       recents.component.css
│       │   │       recents.component.html
│       │   │       recents.component.ts
│       │   │       RecentTacosService.ts
│       │   │       WrapsPipe.ts
│       │   │
│       │   └─specials
│       │           specials.component.css
│       │           specials.component.html
│       │           specials.component.ts
│       │
│       ├─assets
│       │       .gitkeep
│       │       cart.png
│       │       CloudBackground.png
│       │       Cloud_sm.png
│       │       down-triangle.png
│       │       taco-icon.png
│       │       TacoCloud.png
│       │       TacoPhoto.jpg
│       │
│       └─environments
│               environment.prod.ts
│               environment.ts
│
├─tacocloud-web
│   │   .gitignore
│   │   mvnw
│   │   mvnw.cmd
│   │   pom.xml
│   │
│   ├─.mvn
│   │   └─wrapper
│   │           maven-wrapper.jar
│   │           maven-wrapper.properties
│   │
│   └─src
│       ├─main
│       │   ├─java
│       │   │   └─tacos
│       │   │       │   DiscountCodeProps.java
│       │   │       │
│       │   │       └─web
│       │   │               DiscountController.java
│       │   │               OrderController.java
│       │   │               OrderProps.java
│       │   │               WebConfig.java
│       │   │
│       │   └─resources
│       │       ├─META-INF
│       │       │       additional-spring-configuration-metadata.json
│       │       │
│       │       ├─static
│       │       │   │   styles.css
│       │       │   │
│       │       │   ├─images
│       │       │   │       cloud-taco.png
│       │       │   │       TacoCloud.png
│       │       │   │
│       │       │   ├─mustache
│       │       │   │       ingredients.mst
│       │       │   │       recents.mst
│       │       │   │
│       │       │   └─scripts
│       │       │           ingredients.js
│       │       │           recents.js
│       │       │
│       │       └─templates
│       │               design.html
│       │               discountList.html
│       │               home.html
│       │               layout.html
│       │               login.html
│       │               orderForm.html
│       │               orderList.html
│       │               registration.html
│       │
│       └─test
│           └─java
│               └─tacos
│                       DesignAndOrderTacosBrowserTest.java
│                       DesignTacoControllerBrowserTest.java
│                       HomeControllerTest.java
│
└─tacos
    │   .gitignore
    │   mvnw
    │   mvnw.cmd
    │   pom.xml
    │
    ├─.mvn
    │   └─wrapper
    │           maven-wrapper.jar
    │           maven-wrapper.properties
    │
    └─src
        ├─main
        │   ├─java
        │   │   └─tacos
        │   │           DevelopmentConfig.java
        │   │           TacoCloudApplication.java
        │   │
        │   └─resources
        │           application.yml
        │
        └─test
            └─java
                └─tacos
                        DesignAndOrderTacosBrowserTest.java
                        DesignTacoControllerBrowserTest.java
                        HomeControllerTest.java
                        TacoCloudApplicationTests.java</pre>

<p>The application is broken down into these directories: tacoclould-api, tacocloud-data, tacocloud-domain, tacocloud-security, tacocloud-ui, tacocloud-web, and tacos. Understanding the purpose of each of these directories will eventually become pretty self explanatory.

<span class = "nl">In terms of each directory we will spend a seperate section exploring the contents of each in seeing how it applies to our application. However, in this section we want to look at the main files which will be acting like wiring for the smaller components.</span>

<span class = "nl">Let's start by looking at the pom.xml in our main directory.</span></p>

<hr />

<h2>Mult Module Project</h2>

<p>This pom is a special type of pom which is called multi module project, the group id which all the other poms will share will be called 'sia' and they will each get their own artifact id's. We can list the other module's in the modules section.  Currently, there are 7 modules which we described earlier. Each of these modules will contain their own pom's which are responsible for including the necessary dependencies for building themselves. You will see how this gets interesting later as we include a pom for building our angular application. </p>

<em>pom.xml</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd">
    &lt;modelVersion>4.0.0&lt;/modelVersion>

    &lt;groupId>sia&lt;/groupId>
  	&lt;artifactId>taco-cloud-parent&lt;/artifactId>
  	&lt;version>0.0.6-SNAPSHOT&lt;/version>
    &lt;packaging>pom&lt;/packaging>

    &lt;parent>
  		&lt;groupId>org.springframework.boot&lt;/groupId>
  		&lt;artifactId>spring-boot-starter-parent&lt;/artifactId>
  		&lt;version>2.0.4.RELEASE&lt;/version>
  		&lt;relativePath/>
  	&lt;/parent>

    &lt;properties>
      &lt;maven.compiler.source>1.8&lt;/maven.compiler.source>
      &lt;maven.compiler.target>1.8&lt;/maven.compiler.target>
      &lt;tacocloud.version>${project.version}&lt;/tacocloud.version>
    &lt;/properties>

    &lt;modules>
      &lt;module>tacos&lt;/module>
      &lt;module>tacocloud-api&lt;/module>
      &lt;module>tacocloud-data&lt;/module>
      &lt;module>tacocloud-domain&lt;/module>
      &lt;module>tacocloud-security&lt;/module>
      &lt;module>tacocloud-web&lt;/module>
      &lt;module>tacocloud-ui&lt;/module>
    &lt;/modules>

&lt;/project></pre>

<p>In the next section we will start to dive writting some of the code for these controllers and understand how they are able to use our api along with certain types of http requests to pull or push data from the data base. To build the project and run it, use these commands.</p>

<em>commands</em>
<pre class = "code">mvnw clean package
java -jar tacos/target/taco-cloud-0.0.6-SNAPSHOT.jar</pre>

<hr />
<br />
<a href="Java_Web30.html">Previous Page</a>
<span class = "next"><a href = "Java_Web32.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
