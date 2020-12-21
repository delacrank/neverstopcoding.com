<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Drawing a Component</title>
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

  <h1>Learning Java for Desktop Applications</h1>

  <h2>Drawing a Component</h2>

  <p>In this section we are going to draw our first component. We can do this by extending the JComponent class to our components class. Then we can add our component to our existing frame by using the 'add' method in the constructor of our JFrame.

    <span class = "nl">Another thing to note is how we draw graphics on to the component is by using the graphics object. This object contains several methods but for the purpose of simplying displaying a string within the component we will only need to use the 'drawString("string", x, y)'  method. Finally, the new 'pack()' method just resizes the window taking into account the size of the components.</span></p>

  <em>Component:</em>
  <pre class = "code">import java.awt.*;
import javax.swing.*;

public class HelloWorld {

  public static void main(String[] args) {
     EventQueue.invokeLater(() ->
     {
        JFrame frame = new HelloWorldFrame();
	frame.setTitle("HelloWorld");
	frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	frame.setVisible(true);
     });
  }
}

class HelloWorldFrame extends JFrame {
    <span class = "comments">// add the component in the constructor</span>
    public HelloWorldFrame() {
	add(new HelloWorldComponent());
	pack();
    }
}

class HelloWorldComponent extends JComponent {

    public static final int MESSAGE_X = 75;
    public static final int MESSAGE_Y = 100;

    private static final int DEFAULT_WIDTH = 300;
    private static final int DEFAULT_HEIGHT = 200;

    <span class = "comments">// We use the graphics object to draw our text</span>
    public void paintComponent(Graphics g) {
	g.drawString("Hello world", MESSAGE_X, MESSAGE_Y);
    }

    <span class = "comments">// Override the preferred size with our method, to set the height/width </span>
    public Dimension getPreferredSize() {
        return new Dimension(DEFAULT_WIDTH, DEFAULT_HEIGHT);
    }    
}</pre>

  <hr />

  <h2>Drawing Shapes</h2>

  <p>In this section we are going to use some of the shape classes to be able to display different shapes based on the coordinates of x and y axis and given a height and width. Some shapes will be drawn from the top left but others like circles or ellipses will be drawn from their center points.</p>

  <em>Shapes:</em>
  <pre class = "code">import java.awt.*;
import java.awt.geom.*;
import javax.swing;

public class DrawTest {

  public static void main(String[] args) {
    EventQueue.invokeLater(() ->
    {
      JFrame frame = new DrawFrame();
      frame.setTitle("DrawTest");
      frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
      frame.setVisible(true);
    });
  }
}

class DrawFrame extends JFrame {

  public DrawFrame() {
    add(new DrawComponent());
    pack();
  }
}

class DrawComponent extends JComponent {

  private static final int DEFAULT_WIDTH = 400;
  private static final int DEFAULT_HEIGHT = 400;

  public void paintComponent(Graphics g) {
    Graphics2D g2 = (Graphics2D) g2;

    <span class = "comments">// X coordinate represents the left (starting)</span>
    double leftX = 100;
    <span class = "comments">// Y coordinate represents the top (starting)</span>
    double topY = 100;
    double width = 200;
    double height = 150;

    Rectangle2D rect = new Rectable2D.Double(leftX, topY, width, height);
    g2.draw(rect);

    Ellipse2D ellipse = new Ellipse2D.Double();

    <span class = "comments">// set frame sets starting position top left</span>
    ellipse.setFrame(rect);
    g2.draw(ellipse);
    g2.draw(new Line2D.Double(leftX, topY, leftX + width, topY + height));

    double centerX = rect.getCenterX();
    double centerY = rect.getCenterY();
    double radius = 150;

    Ellipse2D circle = new Ellipse2D.Double();
    <span class = "comments">// this time, coordinates origin is set to center (starting)</span>
    circle.setFrameFromCenter(centerX, centerY, centerX + radius, centerY + radius);
    g2.draw(cricle);
  }

  public Dimension getPreferredSize() {
    return new Dimension(DEFAULT_WIDTH, DEFAULT_HEIGHT);
  }
}</pre>

  <p>In the drawing shapes program, this is similar to any other graphic programming library. Some things to note is that we can draw these shapes using either floats or doubles. If we were to use floats, then we would require the values to be labeled as floats (float x = 4F).

  <span class = "nl">Also notice that when drawing round objects, there is a distinction between setting the point of origin as either the center or top left. In the next section we are going to introduce color and fill.</span></p>

  <hr />
  <br />
  <a href = "Java_GUI.html">Previous Page</a>
<span class = "next"><a href = "Java_GUI2.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
