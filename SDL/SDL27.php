<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Scrolling Tile Maps - SDL Game Programming</title>
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

        <h1>Scrolling Tile Maps - SDL Game Programming</h1>
        
        <h2>Scrolling Tile Maps</h2>
        
            <p>We are going to create more tile maps, only this time we are going to give ourselves the ability to create a larger level.  However, with a level so large and our window being limited it might make more sense to be able to scroll through it.
        
        <span class = "nl">Let's start by looking at any changed made to our last files, mapdemo.h, mapdemo.cpp, map.h, and map.cpp.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// MapDemp.h file</span>
    #ifndef MAPDEMO_H
    #define MAPDEMO_H
    
    #include "Core/Game.h"
    #include "Map.h"
    
    class MapDemo : public Game
    {
    private:
        Map map;
        Image background;
        <span class = "comments">// Keep track of the map in terms of its x and y coordinates</span>
        int mapX, mapY;
        
        <span class = "comments">// We can use a static variable to manage our scroll speed</span>
        static const int SCROLL_SPEED = 10;
    public:
        MapDemo();
        ~MapDemo();
        virtual bool init();
        virtual void update();
        virtual void draw(Graphics* g);
        virtual void free();
    };
    
    #endif</pre>
        
        <p>There are only really two changes to this header file, these changes include two new integer member variables mapX, and mapY. Also, there is a static member variable which monitors the speed of our scrolling capabilities.
        
        <span class = "nl">Let's take a look at the source file now.</span></p>
   
    <em>Code:</em>
    <!-- code -->
    <pre class="code"> 
    <span class="comments">// MapDemp.cpp file</span>
    #include "MapDemo.h"

    <span class = "commnets">// Our constructor</span>
    MapDemo::MapDemo()
    {
        mapX = mapY = 0;
    }
    
    MapDemo::~MapDemo()
    {
    
    }
    
    bool MapDemo::init()
    {
        if(!initSystem("Map Demo 3", 800, 600, false))
            return false;
                    
        if(!map.load("graphics/platformer.map", "graphics/tiles.bmp", getGraphics()))
            return false;
        
        if(!background.load("graphics/background.bmp", getGraphics()))
            return false;
        
        return true;
    }
    
    <span class = "comments">// We've added code to our update function</span>
    void MapDemo::update()
    {
        <span class = "comments">// We can use this pointer to pass keyboard input to our game</span>
        Input* in = getInput();
        
        <span class = "comments">// We can move the map up, down, left or right</span>
        if(in->keyDown(SDL_SCANCODE_UP))
            mapY -= SCROLL_SPEED;
            
        if(in->keyDown(SDL_SCANCODE_DOWN))
            mapY += SCROLL_SPEED;
            
        if(in->keyDown(SDL_SCANCODE_LEFT))
            mapX -= SCROLL_SPEED;
            
        if(in->keyDown(SDL_SCANCODE_RIGHT))
            mapX += SCROLL_SPEED;
    }
    
    <span class = "comments">// Our draw function is based on our x and y coordinates</span>
    void MapDemo::draw(Graphics* g)
    {
        background.draw(0, 0, g);
        <span class = "comments">// This is a very important function</span>
        <span class = "comments">// This will constantly re-draw the map</span>
        <span class = "comments">// Based on the x and y input from the upper left corner</span>
        map.draw(mapX, mapY, g);
    }

    void MapDemo::free()
    {
        map.free();
        background.free();
        freeSystem();
    }</pre>
        
        <p>So we have an update function now, as well as a different draw function.  Let's look at our map header and map source file.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Map.h file</span>
    #ifndef MAP_H
    #define MAP_H
    
    #include "Core/Graphics.h"
    #include "Core/Image.h"
    #include &lt;fstream>
    #include &lt;cstdlib>
    
    class Map
    {
    private: 
        Image tiles;
        int tileWidth;
        int tileHeight;
        int width;
        int height;
        int* data;
    public:
        Map();
        ~Map();
        
        bool load(char mapName[], char imageName[], Graphics* g);
        <span class = "comments">// Our new draw function</span>
        void draw(int xOffset, int yOffset, Graphics* g);
        void free();
    };
    
    #endif</pre>
        
        <p>We have only added some parameters to our draw function. Now let's look at the source code file.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Map.cpp file</span>
    #include "Map.h"
    
    Map::Map()
    {
        tileWidth = -1;
        tileHeight = -1;
        width = -1;
        height = -1;
        data = NULL;
    }
    
    Map::~Map()
    {
    
    }
    
    <span class = "comments">// Some changes made here</span>
    bool Map::load(char mapName[], char imageName[], Graphics* g)
    {
        data = NULL;
        
        std::ifstream in(mapName);
        
        if(!in.good())
            return false;
            
        std::string buffer;
        
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        width = atoi(buffer.c_str());
        
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        height = atoi(buffer.c_str());
        
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        tileWidth = atoi(buffer.c_str());
        
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        tileHeight = atoi(buffer.c_str());
        
        getline(in, buffer, '\n');
        getline(in, buffer, '\n');
        getline(in, buffer, '\n');
        
        data = new int[width * height];
        
        int i = 0;
        for(int y = 0; y &lt; height; y++)
        {
            for(int x = 0; x &lt; width; x++)
            {
                char delim = ',';
                
                if(x == width-1)
                    delim = '\n';
                    
                getline(in, buffer, delim);
                data[i] = atoi(buffer.c_str());
                i++;
            }
        }
        
        in.close();
        
        if(!tiles.load(imageName, tileWidth, tileHeight, g))
            return false;
            
        return true;  
    }
    
    <span class = "comments">// By passing x and y offset parameters we can draw new maps</span>
    void Map::draw(int xOffset, int yOffset, Graphics* g)
    {
        <span class = "comments">// </span>
        int startY = yOffset/tileHeight;
        int startX = xOffset/tileWidth;
        
        int rows = (g->getHeight()/tileHeight) + 2;
        int columns = (g->getWidth()/tileWidth) + 2;
        
        for(int y = startY; y &lt; startY + rows; y++)
            for(int x = startX; x &lt; startX+columns; x++)
            {
                int frame = -1;
                            
                if(x >= 0 &amp;&amp; y >= 0 &amp;&amp; x &lt; width &amp;&amp; y &lt; height)
                frame = data[y*width+x]-1;
                
                if(frame >= 0)
                    tiles.draw(x*tileWidth - xOffset, y*tileHeight - yOffset, frame, g);
            }
    }

    void Map::free()
    {
        if(data != NULL)
        {
            delete[] data;
            data = NULL;
        }
        tiles.free();
    }</pre>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    width 50
    height 50
    tile_width 32
    tile_height 32
    solid_tiles
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 37, 38, 39, 40, 41, 42,
    43, 44, 45, 46, 47, 48, 49, 50, 52, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 73, 74, 75, 76, 77, 78, 79, 80,
    81, 82, 83, 84, 85, 86, 87, 88, 91, 92, 93, 103, 104, 105, 106, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120,
    121, 122, 123, 124, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 145, 146, 147, 148, 149, 150,
    151, 152, 153, 154, 155, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 
    181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 193, 194, 195, 196
    layer1
    5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5 
    5, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110,
    110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 127, 128, 129, 130, 131, 132, 128, 129, 130, 131, 132, 128, 129, 130, 131, 132, 133, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 99, 100, 101, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 127, 128, 129, 130, 130, 131, 132, 128, 129, 130, 131, 132, 133, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110,     5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 181, 0, 0, 0, 0, 0, 0, 0, 73,   74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 99, 100, 101, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 181, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 99, 100, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 97, 98, 0, 73, 74, 0, 0, 99, 100, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, 98, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 181, 181, 181, 181, 181, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, 98, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 181, 181, 181, 181, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 181, 181, 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 181, 181, 181, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 24, 25, 26, 27, 28, 26, 27, 28, 27, 28, 26, 26, 27, 28, 29, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 105, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 105, 0, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 105, 105, 105, 105, 105, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 73, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 26, 27, 28, 27, 28, 26, 26, 27, 26, 27, 28, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 0, 104, 0, 104, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 104, 104, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 104, 104, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 26, 27, 28, 29, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 0, 0, 0, 110, 5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 104, 104, 0, 0, 110,     5
    5, 110, 0, 0, 0, 0, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 0, 0, 0, 0, 0, 0, 0, 0, 104, 104, 104, 104, 104, 0, 0, 110,     5
    5, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110,    110, 110, 110, 110, 110, 110, 110, 110, 110, 110,
    110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 5
    5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5
    </pre>
    
        <hr />        
        <br />
        <a href = "SDL26.html">Previous</a>
        <span class = "next">
            <a href = "SDL28.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    