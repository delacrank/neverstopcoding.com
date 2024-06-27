<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Event Handling cont.</title>
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

  <h2>Event Handling Cont.</h2>

  <p>In this section we are going to start diving into understanding input mapping and how we can map inputs via keyboard or mouse to events. One of the first things we want to do is create a class for adding descriptions to our actions and the buttons that trigger them. This can be done by extending the 'AbstractAction' class.

<span class = "nl">Some of the methods we will inherit from the class are the 'putValue()' and 'getValue()' methods. If for example we have an action we want to identify with a name, we can add that using 'putValue(Action.name, "name")'. For now we want to establish an icon and a description for our button.</span>

<span class = "nl">Once the action has be initialized we can add it to our panel using the 'add()' method as we did previously. One of the main differences between our class now and our previous class is them we weren't required to map any external inputs such as keyboard or mouse events to an action, simply clicking the button was enough to trigger the listener.</span>

<span class = "nl">The final step in the process is adding inputMap and actionMap to our buttonPanel. So we first add the action to our JButton, then we add the JButton to our panel, next is adding the input methods to the panel and finally is the action to be taken if those inputs are used.</span></p>

<em>code:</em>
<pre class = "code">package action;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class ActionFrame extends JFrame {
    private JPanel buttonPanel;
    private static final int DEFAULT_WIDTH = 500;
    private static final int DEFAULT_HEIGHT = 500;

    public ActionFrame() {
	setSize(DEFAULT_WIDTH, DEFAULT_HEIGHT);
	buttonPanel = new JPanel();

	<span class = "comments">// create the actions here</span>
	<span class = "comments">// we can add an icon and label to the button via our action class</span>
	Action yellowAction = new ColorAction("Yellow", new ImageIcon("yellow-ball.gif"),
					      Color.YELLOW);
	Action blueAction = new ColorAction("Blue", new ImageIcon("blue-ball.gif"),
					      Color.BLUE);
	Action redAction = new ColorAction("Red", new ImageIcon("red-ball.gif"),
					      Color.RED);

       	<span class = "comments">// add the buttons to our panel</span>				      
      	<span class = "comments">// the action intializes the button properties</span>					 
	buttonPanel.add(new JButton(yellowAction));
        buttonPanel.add(new JButton(blueAction));
	buttonPanel.add(new JButton(redAction));
	add(buttonPanel);

       	<span class = "comments">// add the panel to our input map</span>
       	<span class = "comments">// Specify which input is mapped to which component of our panel</span>
        InputMap imap = buttonPanel.
            getInputMap(JComponent.WHEN_ANCESTOR_OF_FOCUSED_COMPONENT);
	imap.put(KeyStroke.getKeyStroke("ctrl Y"), "panel.yellow");
	imap.put(KeyStroke.getKeyStroke("ctrl B"), "panel.blue");
	imap.put(KeyStroke.getKeyStroke("ctrl R"), "panel.red");

       	<span class = "comments">// identify the actions based on the names we gave earlier</span>
	ActionMap amap = buttonPanel.getActionMap();
	amap.put("panel.yellow", yellowAction);
	amap.put("panel.blue", blueAction);
	amap.put("panel.red", redAction);
    }

    <span class = "comments">// Describe action name and other properties</span>
    public class ColorAction extends AbstractAction {

      public ColorAction(String name, Icon icon, Color c) {
	putValue(Action.NAME, name);
	putValue(Action.SMALL_ICON, icon);
        putValue(Action.SHORT_DESCRIPTION,
            "Set Panel color to " + name.toLowerCase());
	putValue("color", c);
      }

      <span class = "comments">// code to be executed on the event</span>
      public void actionPerformed(ActionEvent event) {
	Color c = (Color) getValue("color");
	buttonPanel.setBackground(c);
      }
    }
}</pre>

<p>In short we can now identify our actions using names. By extending our ColorAction class we can set additional properties to our actions such as image for buttons, description, icon, etc. Additionally, we were able to map these actions to our input map by just using their names.

<span class = "nl">Our input map will map a keystroke our mouse event to action name, but we also need an action map in order for the action to take place after it is mapped to our inputs. Action performed is an inherited method from abstractionAction.</span></p>

  
  <hr />
  <br />
  <a href = "Java_GUI4.html">Previous Page</a>
<span class = "next"><a href = "Java_GUI6.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
