<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>First Application</title>
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

  <h1>Intro to Angular/Typescript</h1>

  <h2>Understanding ES6</h2>

  <p>There have been many new features introduced to the newest version of javascript which is now called ES6. For the purposes of understanding how these features are integrated into Angular I won't cover all of them. One of the features I do want to focus on is the use of classes.</p>

  <em>main.ts</em>
  <pre class = "code">class MyClass {
    constructor(name, title) {
        this.name = name;
        this.title = title;
    }

    printAll() {
        console.log(`Hello ${this.name}, you are the new ${this.title}`);
    }
}

let hello = new MyClass('junior', 'robot');

hello.printAll();</pre>

  <p>This is an example of a simple class.</p>

<hr />

<h2>Modules</h2>

<p>Angular has a concept of a module, this is basically a component which can be coupled with other components. The way to define a module is by creating a class and using the 'export' keyword. The export keyword expands the scope of the class so that it becomes available to other files.

<span class = "nl">Below, I will give an example of how to export and import modules so that we can use mtuliple classes in a single file.</span></p>

<em>NameAndWeather.ts</em>
<pre class = "code">export class Name {
     constructor(first, second) {
         this.first = first;
	 this.second = second;
     }

     get nameMessage() {
         return `hello ${this.first} ${this.second}`;
     }
}

export class Weather {
     constructor(weather) {
         this.weather = weather;
     }

     get weatherMessage() {
         return `the weather is ${this.weather}`;
     }
}</pre>

<p>Here we have two classes where we used the export keyword, now if we want to include this classes in another file, we can simply import them.</p>

<em>main.ts</em>
<pre class = "code">import { Name, Weather } from "./modules/NameAndWeather"

let name = new Name("june", "bug");
let weather = new Weather("rain");

console.log(name.nameMessage);
  console.log(weather.weatherMessage);</pre>

<hr />

<h2>Type Annotations</h2>

  <p>Before we move on to the next section we should probabbly spend some time understanding type annotations. First you should understand that typescript using type annotations for the purposes of defining variable types. We could for example create a class which uses some of these annotations and see what happens when we try to pass a variable which doesn't concide with that type.</p>

  <em>NameAndWeather.ts</em>
  <pre class = "code">export class Name {
    first: string;
    second: string;

    constructor(first: string, second: string) {
        this.first = first;
        this.second = second;
    }

    get nameMessage() : string {
        return `Hello ${this.first} ${this.second}`;
    }
}
    
export class WeatherLocation {
    weather: string;
    city: string;
    constructor(weather: string, city: string) {
        this.weather = weather;
        this.city = city;
    }
    
    get weatherMessage() : string {
        return `It is ${this.weather} in ${this.city}`;
    }
}</pre>

  <p>Notice, how with the functions defined in my classes use annotations to determine what type is being returned. This is also true for the parameters the constructor should accept and the types assigned to the fields. We can go one step further and define access modifiers to each of the fields passed into the constructor (private, for example).

    <span class = "nl">In the next section we will be showing an example of an actual application.</span></p>

	

  <hr />
<a href="Angular.html">Previous Page</a>
<span class="next"><a href="Angular2.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
