<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Tile Maps - SDL Game Programming</title>
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
<?php include('..//Includes//Left_SDL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Tile Maps - SDL Game Programming</h1>
        
        <h2>Tile Maps</h2>
        
            <p>In this section we are going to start working on tile maps.  One of the ways we are able to create maps without using too much memory is by storing many frames inside one image file (bitmap).
        
        <span class = "nl">Then we can create an array to store the frames we want from the image and load those on top of our background.  Let's take a look at the first example.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
<span class="comments">// Map.h file</span>
    #ifndef MAP_H
    #define MAP_H
    
    #include "Core/Graphics.h"
    #include "Core/Image.h"
    
<span class ="comments">// Create a Map class to hold the data for each tile </span>
    class Map
    {
    private:
        Image tiles;
        int tileWidth;
        int tileHeight;
        int width;
        int height;
    public:
        Map();
        ~Map();
        
        bool init(char imageName[], Graphics* g);
        void draw(Graphics* g);
        void free();
    };
    
    #endif
    </pre>
        
        <p>So, once again we decalred the functions and header files needed, let's look at the cpp files to define these functions.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Map.h"

    Map::Map()
    {
        tileWidth = -1;
        tileWidth = -1;
        width = -1;
        height = -1;
    }

    Map::~Map()
    {
        
    }

    bool Map::init(char imageName[], Graphics* g)
    {
        tileWidth = 32;
        tileHeight = 32;
        width = 27;
        height = 20;
    
        if(!tiles.load(imageName, tileWidth, tileHeight, g))
            return false;
            
        return true;
    }

    void Map::draw(Graphics* g)
    {
        int data[] = {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 37, 37, 37, 0, 0, 37, 37, 37, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 37, 0, 0, 0, 37, 0, 37, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 37, 0, 0, 0, 0, 0, 37, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 37, 37, 37, 0, 0, 37, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 37, 0, 0, 0, 37, 0, 37, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 37, 37, 37, 0, 0, 37, 37, 37, 0, 0, 37, 37, 37, 37, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
        0, 0, 66, 67, 68, 69, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 66, 67, 68, 69, 70, 0, 0,
        0, 0, 0, 83, 84, 85, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 83, 84, 85, 0, 0, 0,
        0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0,
        0, 0, 0, 0, 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 116, 0, 0, 0, 0,
        0, 0, 0, 0, 132, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 132, 0, 0, 0, 0,
        0, 0, 0, 0, 148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 148, 0, 0, 0, 0,
        0, 0, 0, 163, 164, 165, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 163, 164, 165, 0, 0, 0,
        104, 105, 105, 105, 105, 105, 105, 106, 0, 104, 105, 105, 105, 105, 105,
        105, 105, 106, 0, 104, 105, 105, 105, 105, 105, 105, 106,
        120, 121, 121, 121, 121, 121, 121, 122, 0, 120, 121, 121, 121, 121, 121,
        121, 121, 122, 0, 120, 121, 121, 121, 121, 121, 121, 122};

        for(int y = 0; y &lt; height; y++)
        {
            for(int x = 0; x &lt; width; x++)
            {
                int frame = data[y*width+x];
                frame--;

                if(frame >= 0)
                    tiles.draw(x*tileWidth, y*tileHeight, frame, g);
            }
        }
    }

    void Map::free()
    {
        tiles.free();
    }</pre>
        
        <p>Here is where things start to get interesting, let's take a moment to look at this code line by line.
        
        <span class = "nl">The first thing we see is our constructor, all of the variables here are initialized to -1.  This means we don't want to use them until we call our 'init' function.  Then we have our deconstructor which, as you know by now removes the allocated memory when its called.</span>
        
        <span class = "nl">Here we have a boolean fuction, it takes two parameters an array 'imageName' and a pointer 'Graphics'.  We can store the tiles, along with the size and the class for loading the images in this function. </span>
        
        <span class = "nl">The draw function just decides the placement of the tiles being drawn.  It will store this information into an array called data. Then it will initialize an int variable called 'frame' with this data. From here, the class will use the image object 'tiles' to draw these tiles on to our background.</span>
        
        <span class = "nl">Let's look at our last two files, 'MapDemo.h' and 'MapDemo.cpp'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// MapDemo.h file</span>
    #ifndef MAPDEMO_H
    #define MAPDEMO_H
    
    #include "Core/Game.h"
    #include "Map.h"

    class MapDemo : public Game
    {
    private:
        Map map;
        Image background;
    public:
        MapDemo();
        ~MapDemo();
        virtual bool init();
        virtual void update();
        virtual void draw(Graphics* g);
        virtual void free();
    };

    #endif</pre>
        
        <p>Here is our 'MapDemo.h' header file, which calls the functions in our map header as well.  Now let's take a look at our 'MapDemo.cpp' which, defines the functions in our 'MapDemo.h' file. </p>
        
    <em>Code</em>
    <!-- code -->
    <pre class="code">
    #include "MapDemo.h"
    
    MapDemo::MapDemo()
    {
        
    }
    
    MapDemo::~MapDemo()
    {
        
    }
    
<span class="comments">// Here we initialize the tiles, the window, and images</span>
    bool MapDemo::init()
    {
        if(!initSystem("Map Demo 1", 800, 600, false))
            return false;
            
        if(!map.init("graphics/tiles.bmp", getGraphics()))
            return false;
            
        if(!background.load("graphics/background.bmp", getGraphics()))
            return false;
            
        return true;
    }
    
    void MapDemo::update()
    {
    
    }
    
<span class="comments">// We can use our graphics class to draw the files and background</span>
    void MapDemo::draw(Graphics* g)
    {
        background.draw(0, 0, g);
        map.draw(g);
    }
    
<span class="comments">// Garbage collection</span>
    void MapDemo::free()
    {
        map.free();
        background.free();
        freeSystem();
    }</pre>
        
        <p>So, ultimately we added the tiles as well as the functionality to store and draw each of our tiles frame by frame on to our background.  This was accomplished by using a nested for loop, one for loop for our x axis coordinates and another for loop for our y axis coordinates.</p>
        
        <hr />        
        <br />
        <a href = "SDL24.html">Previous</a>
        <span class = "next">
            <a href = "SDL26.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    