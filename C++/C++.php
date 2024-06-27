<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn how to code with one of the most powerful object oriented programming languages, C++. Used for fast applications like games and graphics, C++ remains one of the most difficult languages to maser." />
<meta name="keywords" content="C++" />
<meta name="author" content="Juan Arias "/>
<title>Introduction to C++ Development</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type="text/css">

    dt {
        font-weight: bold;
        margin-top: 1em;
    }
    
    dd {
        margin-left: 2em;
        margin-top: .6em;
    }
    
</style>
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_C++.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Introduction to C++ Development</h1>
    
<p>Intro to C++. The first thing I am going to talk about before I even get into programming in C++ is: "Programming".
    
<span class = "nl"> You should first understand that whether you program in: C++, C, Java, Python, PhP, Javascript, Pascal or Perl; programming is programming. All programming languages use the similar concepts and all programming languages translate into one singular code (machine code).</span>
    
    <span class = "nl">There are over a hundred programming languages, the ones I mentioned are simply the most popular languages.  Each language has advantages and disadvantages: some are slower, or more web based as opposed to application based, some can be run on multiple platforms as apposed to one, some are simple and easy to learn, while others can take years to master, etc. etc. </span>
        
<span class = "nl"> What exactly seperates one language from another?  Syntax, rules.  Similar to human languages each programming language has its own set of rules which need to be followed. However, all programming languages have the common goal of communicating with the cpu in order to: perform functions which make our lives easier or more enjoyable (playing games, doing taxes, writing documents/spreadsheets, selling/buying merchandise, managing banking accounts, etc.). </span>
        
<span class = "nl">So why I am saying all of this?  Well, it doesn't necessarily matter that much which language you choose to program with, most professional programmers will know more than one language.  Reguardless of what language you choose to learn, programming is programming.  Below are some concepts which are used in every day programming. </span>
    </p>
    
<dl> 
    <dt>IDE (Intergrated Development Enviroment)</dt>
        <dd>You are going to need either an IDE (code blocks, eclipse, visual studio) or a text editor (notepad, sublime, vim, emacs, etc.) and a compiler in order to program in c++ or any other language.</dd>
       <dd> I would recommend using a simple IDE if you are just learning how to program for the first time, an IDE will provide a lot of support for those who have never programmed before. </dd> 
    
    <dt>OOPL (Object Oriented Programming Language)</dt>
        <dd>C++ is an object oriented programming language.  It uses classes and objects in order to access and modify data.  The benefits of OOPL's are code re-useability, organization, encapsulation, design and maintance.</dd>
       <dd> The alternative is structured or procedural programing.  'C' is considered a structured programming language. </dd> 
    
    <dt>Compiled language</dt>
        <dd>C++ is a compiled language which means it uses a compiler to translate the code you type into something called machine code, which is what the computer understands.</dd>
        <dd>The alternative is a programming language which uses an intrepreter in addition to a compiler like python or java. The difference being that an intrepreted language will execute instructions directly, while a compiled language required the entire source code to be compiled in order for it to run.</dd>
    
    <dt>Portability</dt>
        <dd>C++ is a portabile language, these means you can create code for different platforms such as Windows, Macintosh or Linx.</dd>
        <dd>The alternative is working with languages like Microsofts Visual C++, or DirectX (Direct3D, DirectDraw, DirectMusic, DirectPlay, DirectSound).  These languages can only be run on a Windows machine.</dd>
    
    <dt>Classes</dt>
    <dd>A class is an abstract representation of something.</dd>
    <dd>If I had a class called car, it contain blue prints for how to create a car.</dd>
    
    <dt>Objects</dt>
    <dd>An object is a usable example of a class.</dd>
    <dd>An example of an object for the class car would be to create a car, the car would be the 'object' in this case. We could also have multiple cars if we wanted, or multiple objects (instances) of the class 'car'.</dd> 
    
    <dt>Attributes</dt>
    <dd>Attributes (fields) represent information which the object contains.</dd>
    <dd>Some of the attributes for the car could be it's speed, color, size, or transmission (automatic or standard).</dd>
    
    <dt>Functions</dt>
    <dd>Functions (methods) represent actions that an object can perform.</dd>
    <dd>Can the car be 'turned on', drive 'forward', 'reverse', etc.
    </dd> 
    
    <dt>Events</dt>
        <dd>Events are notifications an object either recieves or transmits to other objects or applications.  An event can enable an object to perform an action.</dd>
        <dd>Gas tank notifies car is out of fuel (event), car can be triggered to fill up on gas (method).</dd>
        <dd>Speedometer notifies car is over the speed limit (event), car can be triggered to slow down (method).</dd>
    
    
    <dt>Inhertiance</dt>
    <dd>Enables classes to take on properties of existing objects.</dd>
    <dd>Class 'Truck' has 2 doors, 6 tires, trunk space and a standard engine.</dd>
    <dd>Class 'Car' has 4 doors, 4 tires and an automatic engine. </dd>
    <dd>Class 'Van' has 4 doors, 4 tires, trunk space and a standard engine.</dd>
    <dd> My first class would be considered my Super or Parent Class while the two additional classes would be considered my Sub or Child Classes.</dd> 
    <dd>Both classes 'Car' and 'Van' inherit <u>doors</u>, and  <u>tires</u> from class 'Truck' so they would be considered my child classes.</dd>
    
    <dt>Encapsulation</dt>
        <dd> Encapsulation refers to a group of related attributes, functions and other memebers being treated as a single unit or object.</dd>
    <dd>Rather than having every person who used the object car, move the pistons up and down, which turn the gears, which turn the axels, which turn the wheels, which move the car forward.  We would just have them press down on the gas pedal.</dd>
    <dd> All those methods and attributes are encapsulated into pressing down on the gas.</dd>
    
     <dt>Abstraction</dt>
        <dd> Abstraction is the concept of taking a specific detailed problem and implementing a general solution.</dd>
        <dd>For our object car which is composed of many different components, we wouldn't need to know each component works specifically and interact with each other in order to move our car.  We would only need to know how to interact with them in order to achieve our result.</dd>
       <dd> Turn car on , press gas pedal to move, press break pedal to stop, turn wheel right or left to change direction. We don't need to know how an internal combustion engine works in order to operate the car, etc. </dd>
    
    <dt>Polymorphism</dt>
        <dd>A programming language's ability to present the same interface for differing data types.</dd>
    <dd>An integer and a float data type can both be added, subtracted, multiplied or divided.  Different data types with the same capabilties.</dd> 
</dl>

<hr />
<br />
<span class ="next"> <a href = "C++1.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>