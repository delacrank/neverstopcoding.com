<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Splines, Triangles &amp; Polygons - Allegro Game Programming</title>
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
<?php include('..//Includes//Left_Allegro.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

    <h1>Splines, Triangles &amp; Polygons - Allegro Game Development</h1>    
    
    <h2>Splines, Triangles &amp; Polygons</h2>    
        
        <p>A spline is a line which curves, in this next section we are going to learn how to render a few of each. Let's start with the spline, it works by passing an array of integers into the function.
        
        <span class = "nl">In order to draw a spline you need to create an integer array of eight points. Each point will correspond to a pair of x and y coordinates, so four points on one spline.</span>
        
        <span class = "nl">Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int points[8] = {0, 200, 200, 50, 400, 400, 600, 100};
    
    spline(screen, points, 10 );</pre>
        
        <p>The points in the array which are list initialized work like this: 'x1, y1', 'x2,'y2', 'x3, y3', 'x4, y4'.
        
        <span class = "nl">In the examle above I kept changing the x coordinate to increase incrementally by 200, so that the line moves from left to right. If I want the line to move from top to bottom, then I would need to start the y coordinate at zero and then increase it until it reaches the bottom of the screen.</span>
        
        <span class = "nl">Let's take a look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// This should draw a swiggly line from top to bottom</span>
    int points[8] = {320, 0, 0, 200, 640, 400, 0, 600 };
    
    spline(screen, points, 10);</pre>
        
        <p>Now let's take a look of an example of rendering a few triangles. The triangles require 3 different pairs of coordinates for each vertex in the shape.
        
        <span class = "nl">The function is similar to the others which draw primitive shapes composed of vectors, just the name of the shape followed by the bitmap, followed by coordinates and finally the color code.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// bitmap, x1, y1, x2, y2, x3, y3, color</span>
    triangle(screen, 10, 10, 10, 50, 50, 50, 10);</pre>
        
        <p>Quickly, we can move on to understanding how to draw our own unique shapes which can be composed of multiple vertices and have many sides.
        
        The function is similar to a traingle only you have to specify the amount of vertices  the shape will contain, and you will also have to pass an array which contains the coordinates of each vertex.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// Polygon function</span>
    int vertices[10] = {50, 50, 20, 70, 35, 90, 65, 90, 80, 70};
    
    <span class = "comments">// A trapezoid</span>
    polygon(screen, 5, vertices, 10);</pre>
        
     <hr />        
        <br />
        <a href = "Allegro2.html">Previous Page</a>
        <span class = "next"><a href="Allegro4.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    