<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Displaying an Image</title>
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
<?php include('..//Includes//Left_Java_GUI.php'); ?>
    
<!-- Right -->
<div id ="rightz">

  <h1>Java Swing Programming</h1>

  <h2>Displaying an Image</h2>

  <p>In this section we are going to be working with images and try to understand how to display them.</p>

<em>Code:</em>
<pre class = "code">import java.awt.*;
import javax.swing.*;

public class ImageTest {

  public static void main(String[] args) {

    EventQueue.invokeLater(() ->
    {
      JFrame frame = new ImageFrame();
      frame.setTitle("ImageTesT");
      frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
      frame.setVisible(true);
    });
  }
}

class ImageFrame extends JFrame {

  public ImageFrame() {
    add(new ImageComponent());
    pack();
  }
}

class ImageComponent extends JComponent {

  private static final int DEFAULT_WIDTH = 300;
  private static final int DEFAULT_HEIGHT = 200;

  private Image image;

  public ImageComponent() {
    image = new ImageIcon("blue-ball.gif").getImage();
  }

  public void paintComponent(Graphics g) {
    if(image == null) return;

    <span class = "comments">// store the width and height in these variables</span>
    int imageWidth = image.getWidth(this);
    int imageHeight = image.getHeight(this);

    <span class ="comments">// draws the image on the x and y coordinate</span>
    g.drawImage(image, 0, 0, null);

    <span class ="comments">// copies the image original until it fills the entire screen</span>
    for(int i = 0; i * imageWidth <= getWidth(); i++)
      for(int j = 0; j * imageHeight <= getHeight(); j++)
	if(i + j > 0) 
	  g.copyArea(0, 0, imageWidth, imageHeight, i * imageWidth, j * imageHeight);
  }

  public Dimension getPreferredSize() {
    return new Dimension(DEFAULT_WIDTH, DEFAULT_HEIGHT);
  }
}</pre>  

 <p>In the example above we have a simple example of how to store an image using the ImageIcon class. Then we used the 'drawImage' function to draw it. Finally we used the 'copyArea' function to fill the screen with the inital drawing.</p> 
				     
  <hr />
  <br />
  <a href = "Java_GUI2.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI4.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
