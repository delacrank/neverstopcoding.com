<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Mouse Events</title>
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

  <h2>Mouse Events</h2>

  <p>In this section we are going to start talking about dealing with mouse events. The small program below will show an example of using some of these events. Events such as mouseMoved and mouseDragged which, are going to be implemented by using our MouseMotionListener interface. Event handling works by first listening to event take place and deciding what action to use in response.
    
    <span class = "nl">We can create another handler which will extend our mouseAdapter class. This class can be used for executing the code to take place after an event has taken place. The two events we will be performing actions for are single and double mouse clicks. This can be achieved by storing the x and y coordinates of the click and then counting the times the mouse was clicked in an short interval.</span>

    <span class = "nl">In the code below we are going to further modularize the example by seperating the class for creating the frame. As our examples expand and become more complex, modularizing the code into chunks makes more sense for readablity and debugging purposes.</span></p>

  <em>code:</em>
  <pre class = "code">package mouse;

import javax.swing.*;

public class MouseFrame extends JFrame {
    public MouseFrame() {
	add(new MouseComponent());
	pack();
    }
}</pre>

  
  <em>code:</em>
  <pre class = "code">package mouse;

import java.awt.*;
import java.awt.event.*;
import java.awt.geom.*;
import java.util.*;
import javax.swing.*;

public class MouseComponent extends JComponent {
    private static final int DEFAULT_WIDTH = 300;
    private static final int DEFAULT_HEIGHT = 200;

    private static final int SIDELENGTH = 10;
    <span class = "comments">// store our squares in an collection</span>
    private ArrayList&lt;Rectangle2D> squares;
    <span class = "comments">// keep track of current square</span>
    private Rectangle2D current;

    
    public MouseComponent() {
	squares = new ArrayList<>();
	current = null;

        <span class = "comments">// JComponent methods for adding the listeners</span>
	addMouseListener(new MouseHandler());
	addMouseMotionListener(new MouseMotionHandler());
    }

    public Dimension getPreferredSize() {
	return new Dimension(DEFAULT_WIDTH, DEFAULT_HEIGHT);
    }

    public void paintComponent(Graphics g) {
	Graphics2D g2 = (Graphics2D) g;

	<span class = "comments">// necessary for redrawing new squares added to the collection</span>
	for(Rectangle2D r : squares)
	    g2.draw(r);
    }

    <span class = "comments">// this code tracks existing squares based on coordinates given</span>
    public Rectangle2D find(Point2D p) {
	for(Rectangle2D r : squares) {
	    if(r.contains(p)) return r;
	}
	return null;
    }

    <span class = "comments">// here we use the point object to store x and y</span>
    public void add(Point2D p) {
	double x = p.getX();
	double y = p.getY();

        <span class = "comments">// create the square</span>
	current = new Rectangle2D.Double(x - SIDELENGTH / 2, y - SIDELENGTH / 2,
	                                 SIDELENGTH, SIDELENGTH);
	<span class = "comments">// add to our collection</span>
	squares.add(current);
	<span class = "comments">// render new and existing squares</span>
	repaint();
    }

    <span class = "comments">// current is used as a pointer to know which square to remove</span>	
    public void remove(Rectangle2D s) {
        <span class = "comments">// only remove if click lands on a square, reset the pointer</span>
        <span class = "comments">// call the render function to show the removed square</span>
	if(s == null) return;
	if(s == current) current = null;
	squares.remove(s);
	repaint();
    }

    <span class = "comments">// uses a lot of the helper functions we previously created</span>	
    private class MouseHandler extends MouseAdapter {
        public void mousePressed(MouseEvent event) {
            <span class = "comments">// sets the pointer to current location if existing square is clicked</span>
	    current = find(event.getPoint());
	    <span class = "comments">// if pointer is null then creates a new square at location</span>
	    if(current == null) add(event.getPoint());
	}
	    
	public void mouseClicked(MouseEvent event) {
	    <span class = "comments">// same behavior</span>
	    current = find(event.getPoint());
    	    <span class = "comments">// checks if pointer was set, and removes if click count exceeds or equals 2</span>
	    if(current != null && event.getClickCount() >= 2) remove(current);
	}
    }

	  
    private class MouseMotionHandler implements MouseMotionListener {
	<span class = "comments">// checks if mouse is inside square</span>
	public void mouseMoved(MouseEvent event) {
            <span class = "comments">// changes cursor if cursor resides inside square</span>
	    if(find(event.getPoint()) == null) setCursor(Cursor.getDefaultCursor());
	    else setCursor(Cursor.getPredefinedCursor(Cursor.CROSSHAIR_CURSOR));
	}

	<span class = "comments">// takes pointer and redraws square at its location as long as mouse button is held</span>
	public void mouseDragged(MouseEvent event) {
	    if(current != null) {
		int x = event.getX();
		int y = event.getY();

		current.setFrame(x - SIDELENGTH / 2, y - SIDELENGTH / 2,
				 SIDELENGTH, SIDELENGTH);
		repaint();
	    }
	}
    }
}</pre>

  <p>The application can be summarized in a few sentences. First we have our listeners which listen for the 'mouseDrag' and 'mouseMove' events. Mouse drag will keep drawing an existing square based on the position of the cursor, mouse move will simply change the cursor icon to a cross if location is placed in an existing square.

    <span class = "nl">The event handlers deal with creating or removing squares if the cursor is clicked once on an empty coordinate or twice on an existing square. Our first event handler is 'mousePressed', it checks to see if the coordinate location is null and then creates a square in the location once the button is pressed. MouseClick handler works differently. A click is only recorded once the button is pressed and then released, this handler is used for removing squares and needs to be clicked twice on an existing square to remove it.</span>

    <span class = "nl">This program can seem a lot more complicated but it shows many important concepts which will be critical for future applications. One of the more critical concepts is how to use existing libraries and classes such as the Point class, and Rectangle class to handle location and rendering. By placing these helper functions in our main class and simply using them in our event classes makes our event methods less bloated. This is important if you want to try to reduce the amount of duplicate code, especially as our event methods expand.

    <span class = "nl">Another concept is this idea that by using an existing library or class we save future developers from constantly having to learn new code. This is only true if they are familiar with core java and java swing. The only problem with this approach is that as libraries become more complex and more code is abstracted, underlying logic can become obscured in libraries.</span></p>

    <hr />
  <br />
  <a href = "Java_GUI5.html">Previous Page</a>
<span class = "next"><a href = "Java_GUI7.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>

