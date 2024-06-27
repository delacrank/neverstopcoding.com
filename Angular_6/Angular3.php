<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Template &amp; Component</title>
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

<h1>Template &amp; Component</h1>


<hr />

<h2>Template &amp; Component</h2>

<p>Previously we used the index.html file in order to include an entire angular application by naming the directory and adding app to the tag (&lt;todo-app>&lt;/todo-app>). However within our application we have another template which works by building an entire UI component together. In this sense we can have several components which can be reused for any single page application.

<span class = "nl">Below is an example of how we will build this component.</span></p>

<em>app.component.html</em>
<pre class = "code">&lt;h3 class="bg-primary p-1 text-white">{{ getName() }}'s To Do List&lt;/h3></pre>

<p>The getName() won't work just yet we still need to build out the component which has the function definition, most likely it will return the name from the model. Let's look at the app.component.ts file now. </p>

<em>app.component.ts</em>
<pre class = "code">import { Component } from "@angular/core";
import { Model, TodoItem } from "./model";

<span class ="comments">// a descripter</span>
@Component ({
    selector: "todo-app",
    templateUrl: "app.component.html"
})

export class AppComponent {
    model = new Model();

    getName() {
        return this.model.user;
    }
}</pre>

<p>Okay so the template calls the getName function from the app.component.ts file and that file imports the model.ts file, which contains the value for the property of name. The next thing we want to do is include a form, but to do this we need to first add a forms module to our app.module.ts file.

<span class = "nl">Let's see an example of this below before we finish this section.</span></p>

<hr />

<h2>Module &amp; Bootstrap</h2>

<p>The module will import the forms module but it also imports our first component which is the AppComponent and says where to find these files as well.</p>

<em>app.module.ts</em>
<pre class = "code">import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
<span class = "comments">// import the forms module</span>
import { FormsModule } from '@angular/forms';
import { AppComponent } from './app.component';

@NgModule({
    declarations: [AppComponent],
    <span class = "comments">// include it in the imports</span>
    imports: [BrowserModule, FormsModule],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule { }</pre>

<p>Let's briefly look at the main.ts file which is considered a bootstrap file (required to start the application) before ending this section. Contains information pertaining to the platform, enviroment and an error handler, meaning that angular can run on different environments (not just web based). </p>

<em>main.ts</em>
<pre class = "code">import { enableProdMode } from '@angular/core';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';

import { AppModule } from './app/app.module';
import { environment } from './environments/environment';

if(environment.production) {
    enableProdMode();
}

platformBrowserDynamic().bootstrapModule(AppModule)
    .catch(err => console.log(err));</pre>

   <hr />
<a href="Angular2.php">Previous Page</a>
<span class="next"><a href="Angular4.php"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
