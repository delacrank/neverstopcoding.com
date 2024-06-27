<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Intro to Angular 6</title>
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

<h1>Setting up Angular 6</h1>
    
<!-- Directives -->    
<h2>Setting up Angular 6</h2>    
    
<p>In this section we are simply going to downloading and installing tools which will allow us to work with the Angular 6 framework. Some of the tools we will need are <a target="_blank" href="https://nodejs.org/en/download/">Node</a> which comes with the npm package manager.

<span class = "nl">You can check to see if these are installed by typing into the command line 'node -v' and 'npm -v'. Additonally, you should install the angular cli tools. </span> </p>

<em>checking node/angular:</em>
<pre class = "code">node -v
npm -v
<span class = "comments"># to install angular cli</span>
npm install -g @angular/cli
<span class = "comments"># check angular cli version</span>
ng --version</pre>

<p>You should probably download and install <a href="https://git-scm.com/download" target="_blank">git</a> at this point as well</p>

<em>checking git:</em>
<pre class = "code">git --version</pre>

<p>If you need to configure your github name or email account you can do that now by typing in 'git config --global user.name "f_name l_name"' and 'git config --global user.email 'email@example.com'. After angular has finished setting up your application you may want to install some packages, for this project I am going to be using bootstrap.

<span class = "nl">NPM is a package manager so it will install packages into your angular package via the command line, this means if bootstrap has any dependencies like popper.js or jQuery.js you will need to install those packages. You can install bootstrap by typing 'npm i --save bootstrap'. You should aslo upgrade your core js 'npm i --save core-js@^3'. </span>

<span class = "nl">In order to make your bootstrap work you need to configure your angular.json file to include bootstrap in your css styles. It should be located in at 'todo/angular.json'. Open this file and then add "node_modules/bootstrap/dist/css/bootstrap.min.cc" to the 'styles' object.</span>

<span class = "nl">To start up your angular project type in 'ng server --port 3000 --open'. To modifiy the angular.json file once you have built your project.</p>

<em>Angular.json</em>
<pre class = "code">"styles": [
    "src/styles.css",
    "node_modules/bootstrap/dist/css/bootstrap.min.css"
],</pre>

<p>Below are some of the commands spoken about earlier in the chapter.</p>

<em>Command line:</em>
<pre class = "code"><span class = "comments"># config your git</span>
git config --global user.name "first_name last_name"
git config --global user.email "email@example.com"
<span class = "comments"># to start a new app</span>
ng new todo
<span class = "comments"># install boostrap</span>
npm i --save bootstrap
<span class = "comments"># spin up angular server</span>
ng serve --port 3000 --open</pre>

<p>Once you have completed these steps you can make changes to your angular app by navigating to your 'todo' folder and going to the 'src' folder. You can open the index.php file and start modifying it, we will start by working with a simple todo app.</p>


    <hr />
<a href="Angular1.php">Previous Page</a>
<span class="next"><a href="Angular1.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>

