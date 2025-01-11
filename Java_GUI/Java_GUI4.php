<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Event Handling</title>
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

  <h2>Event Handling</h2>

  <p>In this section we are going to start working with events and listeners. Similar to how a switch statement can handle different values based on the case, event handling is similar, only we are limited to preset events as implemented by the library.

    <span class = "nl">One of the first events we are going to start listening for is a button click. The way we can execute code based on the activation of an event like a button being click is by placing this code in a class which extends the 'ActionListener' class. The ActionListener class will give us access to a method called actionPerformed, it takes in an argument which is the event itself.</span>

    <span class = "nl">In the example program below we will be created a panel which contains 3 buttons labeled yellow, blue and red. Each of the buttons will set the background color to color as described on the button itself. By calling the 'addActionListner()' method on the buttons and then passing in an instance of the action as a parameter we can trigger the event.</span>

    <span class = "nl">However, since our action class and our panel class aren't linked we will add the action class as a private inner class to our panel class. Let's look at the example below.</span></p>
  
<em>code:</em>
<pre class = "code">import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class ButtonFrame extends JFrame {

    public static void main(String[] args)
    {
      EventQueue.invokeLater(() -> {
         JFrame frame = new ButtonFrame();
         frame.setTitle("ButtonTest");
         frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
         frame.setVisible(true);
      });
    }

    <span class = "comments">// create the JPanel here</span>
    private JPanel buttonPanel;
    private static final int DEFAULT_WIDTH = 300;
    private static final int DEFAULT_HEIGHT = 200;

    public ButtonFrame() {
	setSize(DEFAULT_WIDTH, DEFAULT_HEIGHT);

        <span class = "comments">// this is how we create buttons</span>
	JButton yellowButton = new JButton("Yellow");
	JButton blueButton = new JButton("Blue");
	JButton redButton = new JButton("Red");

	buttonPanel = new JPanel();

	<span class = "comments">// adding the buttons to our panel</span>
	buttonPanel.add(yellowButton);
	buttonPanel.add(blueButton);
	buttonPanel.add(redButton);

	<span class = "comments">// this adds the panel to our JFrame</span>
	add(buttonPanel);

	<span class = "comments">// create an object which stores our events</span>
	ColorAction yellowAction = new ColorAction(Color.YELLOW);
	ColorAction blueAction = new ColorAction(Color.BLUE);
	ColorAction redAction = new ColorAction(Color.RED);

	<span class = "comments">// add the events to our buttons using the listener method</span>
	yellowButton.addActionListener(yellowAction);
	blueButton.addActionListener(blueAction);
	redButton.addActionListener(redAction);
    }

    <span class = "comments">// this code contains the event description</span>	
    private class ColorAction implements ActionListener {
	private Color backgroundColor;

	public ColorAction(Color c) {
	    backgroundColor = c;
	}

	public void actionPerformed(ActionEvent event) {
	    buttonPanel.setBackground(backgroundColor);
	}
    }
}</pre>

<p>In the future it might make more sense to start seperating our main class from our JFrame class since the code can eventually start to get really messy. We can keep these classes coupled in a package which is a shared directory. This will be the last example where I will include the main method</p>

  <hr />
  <br />
  <a href = "Java_GUI3.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI5.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
