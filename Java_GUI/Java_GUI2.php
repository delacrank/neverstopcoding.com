<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Fonts & Color</title>
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

  <h2>Fonts and Color</h2>

  <p>Previously we covered how to add a component to our java frame. In addition to that we also learned how to add and draw shapes to this new component. In this new application we are going to create an application that incorporates fonts and manipulating the size and color of those fonts.

    <span class = "nl">Let's look at a small application below.</span></p>

  <em>fonts:</em>
  <pre class = "code">import java.awt.*;
import java.awt.font.*;
import java.awt.geom.*;
import javax.swing.*;

public class FontTest {

  public static void main(String[] args) {

    EventQueue.invokeLater(() ->
    {
      JFrame frame = new FontFrame();
      frame.setTitle("FontTest");
      frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
      frame.setVisible(true);
    });
  }
}

class FontFrame extends JFrame {

  public FontFrame() {
    add(new FontComponent());
    pack();
  }
}

class FontComponent extends JComponent {

  private static final int DEFAULT_WIDTH = 300;
  private static final int DEFAULT_HEIGHT = 200;

  public void paintComponent(Graphics g) {
    Graphics2D g2 = (Graphics2D) g;

    String message = "Hello, World!";

    <span class = "comments">// Use the font class to determine type, size and of format of font</span>
    Font f = new Font("Serif", Font.BOLD, 36);
    g2.setFont(f);

    <span class = "comments">// obtains data on how this font is rendered on user's screen device</span>
    FontRenderContext context = g2.getFontRenderContext();
    Rectangle2D bounds = f.getStringBounds(message, context);

    <span class = "comments">// getWidth() / getHeight() return the width and height of the window</span>
    <span class = "comments">// bounds contains data in reference to the font dimensions in the window</span>
    double x = (getWidth() - bounds.getWidth()) / 2;
    double y = (getHeight() - bounds.getHeight()) / 2;
    
    double ascent = -bounds.getY();

    double baseY = y + ascent;

    g2.drawString(message, (int) x, (int) baseY);
    g2.setPaint(Color.LIGHT_GRAY);

    <span class = "comments">// draws a line along the base of the message</span>
    g2.draw(new Line2D.Double(x, baseY, x + bounds.getWidth(), baseY));

    <span class = "comments">// draws a rect around the message</span>
    Rectangle2D rect = new Rectangle2D.Double(x, y, bounds.getWidth(), bounds.getHeight());
    g2.draw(rect);

  }

  public Dimension getPreferredSize() {
    return new Dimension(DEFAULT_WIDTH, DEFAULT_HEIGHT);
  }
}</pre>

<p>Basically, we have an example of how to set the font type, size and format. Next we have a function which uses a function called 'getFontRenderContext', this function is able to take the message and get the exact dimensions based on the font and size given and then store them in an Rectangle object.

<span class = "nl">We use some of the bounds values to store the x and y axis for our message. Then we can use those values and divide them by 2 in order to center our message. After we call the 'drawString' message we call the 'setPaint' function to color our message.</span></p>

  
    <hr />
  <br />
  <a href = "Java_GUI1.html">Previous Page</a>
<span class = "next"><a href = "Java_GUI3.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
