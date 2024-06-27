<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Multi Modules</title>
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

<h1>Multi Modules</h1>

<h2>Multi module spring angular</h2>

<p>In this section we are going to make an attempt to understand how to make a multi module in order to modularize our java applications. This will also include making modules which will be able to compile our angular application. Let's first start by looking at a template to construct our pom (project object model).</p>

<em>Code:</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 https://maven.apache.org/xsd/maven-4.0.0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>

  &lt;groupId>net.gamedevforums&lt;/groupId>
  &lt;artifactId>gamedev-forums-parent&lt;/artifactId>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;packaging>pom&lt;/packaging>

  &lt;parent>
    &lt;groupId>org.springframework.boot&lt;/groupId>
    &lt;artifactId>spring-boot-starter-parent&lt;/artifactId>
    &lt;version>2.3.0.RELEASE&lt;/version>
    &lt;relativePath/>
  &lt;/parent>

  &lt;modules>
    &lt;module>backend&lt;/module>
    &lt;module>frontend&lt;/module>
  &lt;/modules>

&lt;/project></pre>

<p>Let's first look at this pom notice the differences between other poms we have worked with in the past. First notice that there is a section called modules. Here we can add the modules that we want to include in our parent pom. Currently we have two modules, one called frontend and another one called backend. Next, let's notice that the groupId will have to remain constent for our children poms, and the packaging is a pom not a jar or tar file. This is important because we eventually decide to build our jar file you will see how we decide to connect some of the other modules to it.

  <span class = "nl">Now, let's look at our frontend module.</span></p>

<hr />

<h2>Frontend pom</h2>

<p>This pom will contain the information for not only building our angular application but for also moving it into the resources directory of our java spring application. In order to understand how this pom will compile our jar we need to understand some of the regular command line tools when compiling an angular application. This will be important later because when we have an opportunity to deploy this application to an indendepent server we will need to install node and npm.

<span class = "nl">Notice some of the key tags that keep our pom together, in our parent pom we used the groupId of 'net.gamedevforums', so we will repeat the use of that groupId in our frontend module. The next thing to notice is the artifactId this matches up with the 'frontend' module tag used in our parent forum. However, the artifactId for in our parent tag will remain the gamedev-forum-parent since we need to know the groupId and artifactId for our parent pom.</span>

<span class = "nl">Let's spend some time looking at the pom before I explain some of the other aspects of it.</span></p>

<em>Code:</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://maven.apache.org/POM/4.0.0
			     http://maven.apache.org/xsd/maven-4.0.0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  
  &lt;artifactId>frontend&lt;/artifactId>
  &lt;packaging>jar&lt;/packaging>

  &lt;parent>
    &lt;groupId>net.gamedevforums&lt;/groupId>
    &lt;artifactId>gamedev-forums-parent&lt;/artifactId>
    &lt;version>0.0.1-SNAPSHOT&lt;/version>
    &lt;!-- &lt;relativePath>../&lt;/relativePath> -->
  &lt;/parent>

  &lt;name>frontend&lt;/name>
  &lt;description>angular ui&lt;/description>

  &lt;properties>
    &lt;node.version>v13.3.0&lt;/node.version>
    &lt;npm.version>6.14.4&lt;/npm.version>
    &lt;frontend-maven-plugin.version>1.4&lt;/frontend-maven-plugin.version>
    &lt;environment>dev&lt;/environment>
  &lt;/properties>
  
 &lt;build>

      &lt;plugin>
        &lt;groupId>com.github.eirslett&lt;/groupId>
        &lt;artifactId>frontend-maven-plugin&lt;/artifactId>
        &lt;version>${frontend-maven-plugin.version}&lt;/version>
        &lt;executions>
          &lt;execution>
            &lt;id>install node and npm&lt;/id>
            &lt;goals>
              &lt;goal>install-node-and-npm&lt;/goal>
            &lt;/goals>
            &lt;configuration>
              &lt;nodeVersion>${node.version}&lt;/nodeVersion>
              &lt;npmVersion>${npm.version}&lt;/npmVersion>
            &lt;/configuration>
          &lt;/execution>
          &lt;execution>
            &lt;id>npm install&lt;/id>
            &lt;goals>
              &lt;goal>npm&lt;/goal>
            &lt;/goals>
            &lt;configuration>
              &lt;arguments>install&lt;/arguments>
            &lt;/configuration>
          &lt;/execution>
          &lt;execution>
            &lt;id>build&lt;/id>
            &lt;goals>
              &lt;goal>npm&lt;/goal>
            &lt;/goals>
            &lt;configuration>
              &lt;arguments>run-script build&lt;/arguments>
            &lt;/configuration>
            &lt;phase>generate-resources&lt;/phase>
          &lt;/execution>
        &lt;/executions>
      &lt;/plugin>
    &lt;/plugins>
  &lt;/build>

&lt;/project></pre>

<p>Underneath our parent tag we have a simple name and description tag to explain the purpose of this jar. The properties tag is important for specifying some of the version id's of our node, npm and plugin version; although its not really necessary. We can finally move on to the build, the groupId is the location of the plugin followed by the artifactId (the name) and the version number. 

<span class = "nl">The way execution works is by determining the commands to be typed in as well as the goal those commands will achieve. Typically we just need to run install node and npm, followed by the version numbers of that software. Since we already have scripts built into our angular application, running these commands will trigger the scripts they have, at this point we just need to specify where the compiled resource will be stored.</span>

<span class = "nl">Since we are using maven and packaging this entire application into a target we will name it target/frontend and specify that the name of the folder in our spring application is called 'static'. We are using the 'static' directory since our frontend components will be stored in static/resources in our spring boot application.</span>

<span class = "nl">Let's make some final changes to our angular.json and package.json files.</span></p>

<em>Angular.json</em>
<pre class = "code"><span class = "comments">// change the 'outputPath'</span>
"build": {
  "builder": "@angular-devkit/build-angular:browser",
  "options": {
  "outputPath": "./static",</pre>        

<p>Also the change the 'build' to production.</p>

<em>Package.json</em>
<pre class = "code">"scripts": {
    "ng": "ng",
    "start": "ng serve",
    <span class = "comments">// change the build to production</span>
    "build": "ng build --prod",
    "test": "ng test",
    "lint": "ng lint",
    "e2e": "ng e2e"
  },</pre>


<hr />

<h2>Backend maven pom</h2>

<p>This will probably be an extremely long and complicated pom to deal with since it will contain many of the necessary jar files for you to be able to compile. Let's first look at some of the important components which will link this pom to the other jars we previously compiled. Similar to our frontend module the artifactId is named the same as our module, our parent tag also matches our frontend pom in that the groupId, artifactId and version match our original parentId.

<span class = "nl">One thing to notice is that I changed the java version to 11 since that was compatible with the version of ubuntu of my server. Here in the dependencies I can add the jar file for our frontend dependency, this is very important if you want the two to be in sync, otherwise your main pom will just produce to seperate jar files. The rest of the dependencies are just jars which are necessary for my application to run.</span></p>

<em>Code:</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 https://maven.apache.org/xsd/maven-4.0.0.xsd">
	&lt;modelVersion>4.0.0&lt;/modelVersion>

	&lt;artifactId>backend&lt;/artifactId>
	&lt;packaging>jar&lt;/packaging>

	&lt;parent>
	  &lt;groupId>net.gamedevforums&lt;/groupId>
	  &lt;artifactId>gamedev-forums-parent&lt;/artifactId>
	  &lt;version>0.0.1-SNAPSHOT&lt;/version>
	  &lt;relativePath>../&lt;/relativePath>
	&lt;/parent>

	&lt;name>backend&lt;/name>
	&lt;description>spring-boot backend&lt;/description>

	&lt;properties>
		&lt;java.version>11&lt;/java.version>
	&lt;/properties>

	&lt;dependencies>
	  &lt;dependency>
	    &lt;groupId>net.gamedevforums&lt;/groupId>
	    &lt;artifactId>frontend&lt;/artifactId>
	    &lt;version>${project.version}&lt;/version>
	    &lt;scope>runtime&lt;/scope>
	  &lt;/dependency>
	    
	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-data-jpa&lt;/artifactId>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-security&lt;/artifactId>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-data-rest&lt;/artifactId>
	    &lt;/dependency>

	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-actuator&lt;/artifactId>
	    &lt;/dependency>
	    
	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-validation&lt;/artifactId>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-web&lt;/artifactId>
	    &lt;/dependency>

	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-devtools&lt;/artifactId>
	      &lt;scope>runtime&lt;/scope>
	      &lt;optional>true&lt;/optional>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>com.h2database&lt;/groupId>
	      &lt;artifactId>h2&lt;/artifactId>
	      &lt;scope>runtime&lt;/scope>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>mysql&lt;/groupId>
	      &lt;artifactId>mysql-connector-java&lt;/artifactId>
	      &lt;scope>runtime&lt;/scope>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.projectlombok&lt;/groupId>
	      &lt;artifactId>lombok&lt;/artifactId>
	      &lt;optional>true&lt;/optional>
	    &lt;/dependency>
	    &lt;!-- Password Validation -->
	    &lt;dependency>
	      &lt;groupId>org.passay&lt;/groupId>
	      &lt;artifactId>passay&lt;/artifactId>
	      &lt;version>1.0&lt;/version>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>com.google.guava&lt;/groupId>
	      &lt;artifactId>guava&lt;/artifactId>
	      &lt;version>20.0&lt;/version>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.jboss.aerogear&lt;/groupId>
	      &lt;artifactId>aerogear-otp-java&lt;/artifactId>
	      &lt;version>1.0.0&lt;/version>
	      &lt;scope>compile&lt;/scope>
	    &lt;/dependency>

	    &lt;dependency>
	      &lt;groupId>org.springframework.boot&lt;/groupId>
	      &lt;artifactId>spring-boot-starter-test&lt;/artifactId>
	      &lt;scope>test&lt;/scope>
	      &lt;exclusions>
		&lt;exclusion>
		  &lt;groupId>org.junit.vintage&lt;/groupId>
		  &lt;artifactId>junit-vintage-engine&lt;/artifactId>
		&lt;/exclusion>
	      &lt;/exclusions>
	    &lt;/dependency>
	    &lt;dependency>
	      &lt;groupId>org.springframework.security&lt;/groupId>
	      &lt;artifactId>spring-security-test&lt;/artifactId>
	      &lt;scope>test&lt;/scope>
	    &lt;/dependency>
	  &lt;/dependencies>

	&lt;build>
		&lt;plugins>
		      &lt;plugin>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-maven-plugin&lt;/artifactId>
		      &lt;/plugin>
                      
                      <span class = "comments">&lt;!-- be sure to add this plugin --></span>
                      &lt;plugin>
			&lt;artifactId>maven-resources-plugin&lt;/artifactId>
			&lt;executions>
			  &lt;execution>
			    &lt;id>copy-resources&lt;/id>
			    &lt;phase>validate&lt;/phase>
			    &lt;goals>
			      &lt;goal>copy-resources&lt;/goal>
			    &lt;/goals>
			    &lt;configuration>
			      &lt;outputDirectory>${basedir}/target/classes/static/&lt;/outputDirectory>
			      &lt;resources>
				&lt;resource>
				  &lt;directory>${basedir}/../frontend/static&lt;/directory>
				&lt;/resource>
			      &lt;/resources>
			    &lt;/configuration>
			  &lt;/execution>
			&lt;/executions>
		      &lt;/plugin>	
		&lt;/plugins>
	&lt;/build>

&lt;/project></pre>

<p>If we want to build and run our application then navigate to the directory where we created our multi module pom and run this command.</p>

<em>Code:</em>
<pre class = "code">mvn clean package
<span class = "comments"># run the created jar</span>
java -jar backend\target\backend-0.0.1-SNAPSHOT.jar</pre>

<p>However, if you want to run the application for just testing purposes then go to our main pom again and use the install method. Followed by going to the backend module and running the spring-boot:start or spring-boot:run command.</p>

<em>Code:</em>
<pre class = "code">mvn install
<span class = "comments"># navigate to backend</span>
cd backend
mvn spring-boot:start</span></pre>
  
<hr />
<br />
<a href="Java_Web36.php">Previous Page</a>
<span class = "next"><a href = "Java_Web38.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
