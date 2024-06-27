<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Loading Tile Maps - SDL Game Programming</title>
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

        <h1>Loading Tile Maps - SDL Game Programming</h1>
        
        <h2>Loading Tile Maps</h2>
        
            <p>Previously we created source files that had every map tile re-recorded into an array. This, is very tedious thou, everytime we want to load a different map we have to change the values in the array.  
        
        <span class = "nl">What if we could load our map tiles by using a file, then we could change files for different stages of our game.  Making it much easier to organize our maps.</span>
        
        <span class = "nl">Let's look at some of these source files.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments">// MapDemo.h</span>
    #ifndef MAPDEMO_H 
    #define MAPDEMO_H
    
    #include "Core/Game.h"
    #include "Map.h"
    
    <span class = "comments">// Create our game class</span>
    class MapDemo : public Game
    {
    private:
        <span class = "comments">// Aggregating other classes into our game class </span>
        Map map;
        Image background;
    public:
        MapDemo();
        ~MapDemo();
        <span class = "comments">// Virtual functions for function overloading between classes, or polymorphism</span>
        virtual bool init();
        virtual void update();
        virtual void draw(Graphics* g);
        virtual void free();    
    };
    
    #endif
    </pre>
        
        <p>Not much to see here in our MapDemo class, we use inheritance from our Game class and some virtual functions in order to initialize, update, draw or free memory.
        
        <span class = "nl">This class also creates two private variables for access the map or image objects. Let's look at the MapDemo.cpp source file next.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// MapDemo.cpp file</span>
    #include "MapDemo.h"
    
    <span class = "comments">// Constructor </span>
    MapDemo::MapDemo()
    {
    
    }
    
    <span class = "comments">// Destructor </span>
    MapDemo::~MapDemo()
    {
    
    }
    
    <span class = "comments">// Our init function</span>
    bool MapDemo::init()
    {
        if(!initSystem("Map Demo 2", 800, 600, false))
            return false;
            
        if(!map.load("graphics/map.map", "graphics/tiles.bmp",
        getGraphics()))
            return false;
            
        if(!background.load("graphics/background.bmp", getGraphics()))
            return false;
            
        <span class = "comments">// Only return true if all our files load</span>    
        return true;
    }

    void MapDemo::update()
    {
    
    }
    
    <span class = "comments">// Draw the graphics </span>
    void MapDemo::draw(Graphics* g)
    {
        background.draw(0, 0, g);
        map.draw(g);
    }
    
    <span class = "comments">// Garbage collection</span>
    void MapDemo::free()
    {
        map.free();
        background.free();
        freeSystem();
    }</pre>
        
        <p>Pretty much similar to our last source file, now let's look to see where any changes were made.  This will most likely be in our map.h and map.cpp files.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Map.h file</span>
    #ifndef MAP_H
    #define MAP_H
    
    #include "Core/Graphics.h"
    #include "Core/Image.h"
    <span class = "comments">// Include this 'filestream' header files to load our map file</span>
    #include &lt;fstream>
    #include &lt;cstdlib>
    
    class Map
    {
    private:
        <span class = "comments">// Contains details for our tile images</span>
        Image tiles;
        int tileWidth;
        int tileHeight;
        int width;
        int height;
        int* data;
    public:
        Map();
        ~Map();
        
        <span class = "comments">// Our overloaded functions inherited from our Game class</span>
        bool load(char mapName[], char imageName[], Graphics* g);
        void draw(Graphics* g);
        void free();
    };
    
    #endif</pre>
        
        <p>Alright, so let's get into the meat of this program. First let's look at the source code and then try to understand it afterwards.</p>

     <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Map.cpp file</span>
    #include "Map.h"
    
    <span class="comments">// Constructor</span>
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
    
    bool Map::load(char mapName[], char imageName[], Graphics* g)
    {
        <span class="comments">// An pointer to an integer</span>
        data = NULL;
        
        <span class="comments">// Filename stored here</span>
        std::ifstream in(mapName);
        
        if(!in.good())
            return false;
            
        std::string buffer;
        
        <span class="comments">// Read width value convert it into an integer from a string </span>
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        width = atoi(buffer.c_str());
        
        <span class="comments">// Read height value convert it into an integer from a string </span>
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        height = atoi(buffer.c_str());
        
        <span class="comments">// Read tile Width value convert it into an integer from a string </span>
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        tileWidth = atoi(buffer.c_str());
        
        <span class="comments">// Read tile Height value convert it into an integer from a string </span>
        getline(in, buffer, ' ');
        getline(in, buffer, '\n');
        tileHeight = atoi(buffer.c_str());
        
        <span class="comments">// Skip three lines</span>
        getline(in, buffer, '\n');
        getline(in, buffer, '\n');
        getline(in, buffer, '\n');
        
        <span class="comments">// Store the value of height * width of integer array on the heap </span>
        data = new int[width * height];
        
        int i = 0;
        
        <span class="comments">// Take the number of rows iterate threw them</span>
        for(int y = 0; y &lt; height; y++)
        {
            <span class="comments">// Take the number of columns iterate threw them</span>
            for(int x = 0; x &lt; width; x++)
            {
                <span class="comments">// Read the string value until I hit comma</span>
                char delim = ',';
                
                <span class="comments">// Change the delimiter to newline when we max columns</span>
                if(x == width-1)
                    delim = '\n';
                    
                <span class="comments">// Store these values into 'buffer' string variable</span>
                getline(in, buffer, delim);
                
                <span class="comments">// Convert the string into an integer and store that in the array</span>
                data[i] = atoi(buffer.c_str());
                i++;
            }
        }
        
        in.close();
        
        if(!tiles.load(imageName, tileWidth, tileHeight, g))
            return false;
            
        return true;
    }
    
    <span class="comments">// Use the values from our map.map file to draw our tiles</span>
    void Map::draw(Graphics* g)
    {
        for(int y = 0; y &lt; height;  y++)
            for(int x = 0; x &lt; width; x++)
            {
                int frame = data[y*width+x];
                frame--;
                
                if(frame >= 0)
                    tiles.draw(x*tileWidth, y*tileHeight, frame, g);
            }
    }
    
    <span class="comments">// Garbage collection</span>
    void Map::free()
    {
        if(data != NULL)
        {
            delete[] data;
            data = NULL;
        }
        tiles.free();
    }</pre>
        
        <p>Alright, so there is a lot to go through in this section. One of the first things to notice is our constructor.  The purpose of this class is to be able to read the values of our map tiles and store them into the proper variables.  
        
        <span class = "nl">Our constructor will start off by initializing five variables, two of these variables are used to describe the amount of rows and columns of our map tiles.  Each tile will represent a different type of tile from our sprite sheet.  Furthermore, the tile locations are arranged based on their position of order in our map.map file.</span>
        
        <span class = "nl">Using our 'readline' function and the 'fstream' header we can load the values from our map.map file into our class member variables. And use these member values to populate our game with the correct sprite tiles.  The readline function works by storing a text into a string and stopping at the char specified in the third argument (delimiter).</span>
        
        <span class = "nl">The for loop allows us to read every character or string in our document and store those values into an integer array.  We use a pointer to an integer in order to pass these values to our draw function. The draw function can then load the correct sprite tiles from our sprite sheet and render them to the buffer.</span>
        
        <span class = "nl">Remember to use the free function for garbage collection.  Let's take a look at the actual map.map file in order to understand what's being loaded and why.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Map.map file</span>
    width 27
    height 20
    tile_width 32
    tile_height 32
    solid_tiles

    layer1
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
    0, 0, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1,    2, 3, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 37, 37, 0, 37, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 37, 37, 0, 37, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 37, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 37, 37, 37, 37, 37, 37, 37, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 37, 37, 37, 37, 37, 37, 37, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0
    0, 0, 66, 67, 68, 69, 70, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 66, 67, 68, 69, 70, 0, 0
    0, 0, 0, 83, 84, 85, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 83, 84, 85, 0, 0, 0
    0, 0, 0, 0, 100, 0, 0, 37, 0, 37, 0, 0, 0, 0, 0, 0, 0, 37, 0, 37, 0, 0, 100, 0, 0, 0, 0
    0, 0, 0, 0, 116, 0, 0, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37,  37, 0, 0, 116, 0, 0, 0, 0
    0, 0, 0, 0, 132, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 132, 0, 0, 0, 0
    0, 0, 0, 0, 148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 148, 0, 0, 0, 0
    0, 0, 0, 163, 164, 165, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 163, 164, 165, 0, 0, 0
    104, 105, 105, 105, 105, 105, 105, 106, 0, 104, 105, 105, 105, 105, 105,
    105, 105, 106, 0, 104, 105, 105, 105, 105, 105, 105, 106
    120, 121, 121, 121, 121, 121, 121, 122, 0, 120, 121, 121, 121, 121, 121,
    121, 121, 122, 0, 120, 121, 121, 121, 121, 121, 121, 122</pre>
        
        <p>There are 27 chars across not including spaces or commas, and 20 lines down, I seperated the last two lines into four cause they were too long to display on a small screen.  You can almost make out the image based on the zeros and the numbers, for our game those numbers will be replaced by tile sprites being 32 pixels long and tall.
        
        <span class ="nl">The main file hasn't changed since.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// main.cpp</span>
    #include "MapDemo.h"

    int main(int argc, char *argv[])
    {
        MapDemo game;

        if(!game.init())
        {
            game.free();
            return 0;
        }

        game.run();

        return 0;
    }</pre>
        
        <p>It might be a good idea to include a makefile to build all of your files at this point.  Running all those commands into the command line is eventually going to get very tedious.  This is what my makefile looks like.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// makefile</span>
    all:
        g++ -std=c++11 -o game 
       -framework sdl2 -framework sdl2_image -framework sdl2_ttf -framework sdl2_mixer 
       core/audio.cpp core/game.cpp core/graphics.cpp core/image.cpp core/input.cpp 
       core/music.cpp core/outlinefont.cpp core/rasterfont.cpp core/sound.cpp
       main.cpp map.cpp mapdemo.cpp 
    </pre>
        
        <hr />        
        <br />
        <a href = "SDL25.html">Previous</a>
        <span class = "next">
            <a href = "SDL27.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    