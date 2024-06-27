<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Multi-Layered Tile Maps</title>
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

        <h1>Multi-Layered Tile Maps - SDL Game Programming</h1>
        
        <h2>Multi-Layered Tile Maps</h2>
        
            <p></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #ifndef MAPDEMO_H
    #define MAPDEMO_H
    
    #include "Core/Game.h"
    #include "Map.h"
    
    class MapDemo : public Game
    {
    private:
        Map map;
        Image background;
        int mapX, mapY;
        
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
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include "MapDemo.h"
    
    MapDemo::MapDemo()
    {
        mapX = mapY = 0;
    }
    
    MapDemo::~MapDemo()
    {
    
    }
    
    bool MapDemo::init()
    {
        if(!initSystem("Map Demo 4", 800, 600, false))
            return false;
            
        if(!map.load("graphics/platformer.map", "graphics/tiles.bmp", getGraphics()))
            return false;
            
        if(!background.load("graphics/background.bmp", getGraphics()))
            return false;
            
        return true;
    }
    
    void MapDemo::update()
    {
        Input* in = getInput();
        
        if(in->keyDown(SDL_SCANCODE_UP))
            mapY -= SCROLL_SPEED;
            
        if(in->keyDown(SDL_SCANCODE_DOWN))
            mapY += SCROLL_SPEED;
        
        if(in->keyDown(SDL_SCANCODE_LEFT))
            mapX -= SCROLL_SPEED;
            
        if(in->keyDown(SDL_SCANCODE_RIGHT))
            mapX += SCROLL_SPEED;
    }
    
    void MapDemo::draw(Graphics* g)
    {
        background.draw(0,0, g);
        map.draw(1,mapX, mapY, g);
        map.draw(2,mapX, mapY, g);
        map.draw(3,mapX, mapY, g);
        map.draw(0,mapX, mapY, g);
    }
    
    void MapDemo::free()
    {
        map.free();
        background.free();
        freeSystem();
    }</pre>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #ifndef MAP_H
    #define MAP_H
    
    #include "Core/Graphics.h"
    #include "Core/Image.h"
    #include &lt;fstream>
    #include &lt;cstdlib>
    #include &lt;cstring>
    #include &lt;vector>
    
    using namespace std;
    
    class Map
    {
    private:
        Image tiles;
        int tileWidth;
        int tileHeight;
        int width;
        int height;
        int* layer1, *layer2, *layer3,
        *solidLayer;
        vector&lt;int> solidTiles;
        
        void loadDimensions(ifstream *in);
        void loadSolidTiles(ifstream *in);
        void loadLayer(int* layer, ifstream *in);
        void generateSolidLayer();
    public:
        Map();
        ~Map();
        
        bool load(char mapName[], char imageName[], Graphics* g);
        void draw(int layer, int xOffset, int yOffset, Graphics* g);
        void free();
        
        bool isTileSolid(int tile);
        bool checkSolid(int x, int y);
    };
    
    #endif</pre>
    
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include "Map.h"

    Map::Map()
    {
        tileWidth = -1;
        tileHeight = -1;
        width = -1;
        height = -1;
        layer1 = layer2 = layer3 = solidLayer = NULL;
    }
    
    Map::~Map()
    {
    
    }
    
    bool Map::load(char mapName[], char imageName[], Graphics* g)
    {
        layer1 = layer2 = layer3 = solidLayer = NULL;
        
        ifstream in(mapName);
        
        if(!in.good())
            return false;
            
        string buffer;
        
        loadDimensions(&amp;in);
        loadSolidTiles(&amp;in);
        
        layer1 = new int[width * height];
        layer2 = new int[width * height];
        layer3 = new int[width * height];
        solidLayer = new int[width * height];
        
        loadLayer(layer1, &amp;in);
        loadLayer(layer2, &amp;in);
        loadLayer(layer3, &amp;in);
        generateSolidLayer();
        
        in.close();
        
        if(!tiles.load(imageName, tileWidth, tileHeight, g))
            return false;
            
        return true;
    }
    
    void Map::loadDimensions(ifstream *in)
    {
        string buffer;
        
        getline(*in, buffer, ' ');
        getline(*in, buffer, '\n');
        width = atoi(buffer.c_str());
        
        getline(*in, buffer, ' ');
        getline(*in, buffer, '\n');
        height = atoi(buffer.c_str());
        
        getline(*in, buffer, ' ');
        getline(*in, buffer, '\n');
        tileWidth = atoi(buffer.c_str());
        
        getline(*in, buffer, ' ');
        getline(*in, buffer, '\n');
        tileHeight = atoi(buffer.c_str());
    }
    
    void Map::loadSolidTiles(ifstream *in)
    {
        string buffer;
        
        getline(*in, buffer, '\n');
        getline(*in, buffer, '\n');
        
        char* string = new char[buffer.size() + 1];
        strcpy(string, buffer.c_str());
        
        char* token = strtok(string, " ,");
        while(token != NULL)
        {
            solidTiles.push_back(atoi(token));
            token = strtok(NULL, " ,");
        }
        
        delete[] string;
    }
    
    void Map::loadLayer(int* layer, ifstream *in)
    {
        string buffer;
        
        getline(*in, buffer, '\n');
        
        int i = 0;
        
        for(int y = 0; y &lt; height; y++)
        {
            for(int x = 0; x &lt; width; x++)
            {
                char delim = ',';
                
                if(x == width-1)
                    delim = '\n';
                    
                getline(*in, buffer, delim);
                layer[i] = atoi(buffer.c_str());
                i++;
            }
        }
    }

    void Map::generateSolidLayer()
    {
        for(int i = 0; i &lt; width*height; i++)
        {
            if(isTileSolid(layer1[i]) || isTileSolid(layer2[i]) || isTileSolid(layer3[i]))
                solidLayer[i] = 1;
            else
                solidLayer[i] = 0;
        }
    }
    
    void Map::draw(int layer, int xOffset, int yOffset, Graphics* g)
    {
        int* drawLayer = NULL;
        
        if(layer == 0)
            drawLayer = solidLayer;
        else if(layer == 1)
            drawLayer = layer1;
        else if(layer == 2)
            drawLayer = layer2;
        else if(layer == 3)
            drawLayer = layer3;
        else 
            return;
            
        int startY = yOffset/tileHeight;
        int startX = xOffset/tileWidth;
        
        int rows = (g->getHeight()/tileHeight) + 2;
        int columns = (g->getWidth()/tileWidth) + 2;
        
        for(int y = startY; y &lt; startY+rows; y++)
            for(int x = startX; x &lt; startX+columns; x++)
            {
                int frame = -1;
                
                if(x >= 0 &amp;&amp; y >= 0 &amp;&amp; x &lt; width &amp;&amp; y &lt; height)
                    frame = drawLayer[y*width+x]-1;
                    
                if(frame >= 0)
                {
                    if(layer == 0)
                    {
                        g->drawRect(x*tileWidth - xOffset, y*tileHeight-yOffset, tileWidth, tileHeight, 255, 0, 0);
                    }
                    else
                    {
                        tiles.draw(x*tileWidth - xOffset, y*tileHeight - yOffset, frame, g);
                    }
                }
            }
    }

    void Map::free()
    {
        if(layer1 != NULL)
        {
            delete[] layer1;
            layer1 = NULL;
        }
        
        if(layer2 != NULL)
        {
            delete[] layer2;
            layer2 = NULL;
        }
        
        if(layer3 != NULL)
        {
            delete[] layer3;
            layer3 = NULL;
        }
        
        if(solidLayer != NULL)
        {
            delete[] solidLayer;
            solidLayer = NULL;
        }
        
        solidTiles.clear();
        tiles.free();
    }

    bool Map::isTileSolid(int tile)
    {
        for(unsigned int i = 0; i &lt; solidTiles.size(); i++)
        {
            if(solidTiles[i] == tile)
                return true;
        }
        
        return false;
    }

    bool Map::checkSolid(int x, int y)
    {
        if(x &lt; 0 || x > width || y &lt; 0 || y > height)
            return false;
        
        return solidLayer[y*width + x];
    }</pre>
        
        
        <hr />        
        <br />
        <a href = "SDL27.html">Previous</a>
        <br /><br />

    </div>    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    