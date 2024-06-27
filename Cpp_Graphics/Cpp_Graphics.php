<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Intro to Graphic Programming</title>
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
<?php include('..//Includes//Left_Cpp_Graphics.php'); ?>

<!-- Right -->
    
  <div id ="rightz">
  
    <h1>Intro to Cpp Graphics</h1>

    <h2>A simple PPM</h2>

    <p>Welcome to my introduction to graphic programming using cpp. I am going to be using the text from raycasting in one weekend book. In the first section we are going to be creating a file which is going to be of a ppm format, which stands for portable pixel map.

      <span class = "nl">The purpose of creating this file is to understand how graphics files and written and read. I have emacs installed so I will use that program to be able to view the file but you can use GIMP or photoShop or other types of programs to view it.</span>

      <span class ="nl">Let's start with writting the code to generate the file.</span></p>

<em>Code:</em>
<pre class ="code">#include &lt;iostream>

int main() {

    const int image_width = 256;
    const int image_height = 256;

    std::cout &lt;&lt; "P3\n" &lt;&lt; image_width &lt;&lt; ' ' &lt;&lt; image_height &lt;&lt; "\n255\n";

    for (int j = image_height-1; j >= 0; --j) {
        for (int i = 0; i &lt; image_width; ++i) {
            auto r = double(i) / (image_width-1);
            auto g = double(j) / (image_height-1);
            auto b = 0.25;

            int ir = static_cast&lt;int>(255.999 * r);
            int ig = static_cast&lt;int>(255.999 * g);
            int ib = static_cast&lt;int>(255.999 * b);

            std::cout &lt;&lt; ir &lt;&lt; ' ' &lt;&lt; ig &lt;&lt; ' ' &lt;&lt; ib &lt;&lt; '\n';
        }
    }
}</pre>

    <p>You can run and compile this program using whatever you want. I have choosen to use MinGW for windows, so just g++ plus the name of the file. Then run the executable.

      The file generated will look something like this.</p>

<em>Code:</em>
<pre class ="code">P3
256 256
255
0 255 63
1 255 63
2 255 63
3 255 63
4 255 63</pre>

    <p>Here are a few things to note about this file format. The first thing is the name on the top of the file "P3", this indicates the type of file. Next is the numbers which follow, 256 by 256. this means 256 pixels wide and 256 pixels high. Basically the x coordinate has a range from 0 through 256 and y coordinate has a range of 0 through 256.

<span class = "nl">The last thing to note is the number 255, this indicates the range of colors being used. Let's move on to understanding our actual program now. If you think about it, based on the output of our file its not too complicated to understand. First it prints out the ir value followed by a space, followed by the ig value, followed by a space and then the ib value followed by a newline character.</span>
    
<span class = "nl">Let's start by understanding our for loop to see how our values are being generated. The first for loop starts at ny-1, so we know the ny variable stands for our y axis and our y value starts at 256. Basically its counting backwards from 256 to 0, I'm guessing this will generate all the values for a single row and then once it decrements it will generate the values for another row.</span>

<span class = "nl">This is important to note since our files will be read from left to right. So it really doesn't matter how you decide to add the numbers if you add them in 3 columns like we have done in this program for the red, green, blue values or add 3 * 256 columns to symbolize each plotted pixel. Next let's look at the nested for loop.</span>

<span class = "nl">Here we see the i value starts at zero and increments until it reaches the value of nx which is set at 256. Here is where we will be manipulating some of the values. First we start with the r variable for red which takes the i iterator (columns) and and the nx (length of columns) and divides them. Well i is set to 0 divided by 256, we will take this value and then multiply it by the our color range 255 and cast it back into an int.</span>

<span class = "nl">Basically, we we are trying to do is get a slice of x axis and define that as a value in our color range. Following this, we take our j iterator (rows) divide that by 100 and then similarily multiply it by our color range before casting it to an int. This will take the inverse of our y axis and convert that value to a shade of green. Finally, we take a default value .2 for blue and just multiply that and cast it to an int.</span>

<span class = "nl">This should produce a file which contains 2003 lines for our ppm file. The first 3 lines referring again to the type of file format, the number of columns (256) by rows (256), and the range of color values 255.</span>

<span class = "nl">We can output the programs contents to a file using the less than command on the command line.</span></p>

<em>command:</em>
<pre class = "code">g++ main.cpp -o graphics
graphics > image.ppm</pre>
	

  <hr />
  <br />
  <a href="Cpp_Graphics1.php">Next Page</a>
  <br /><br />
  </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
