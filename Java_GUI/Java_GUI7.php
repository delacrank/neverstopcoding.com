<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Swing Layout</title>
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

  <h2>Calculator Program</h2>

      <p>In this section we are going to be focusing on building an calculator application in order to better understand how to create layout for our swing applications.

	<span class = "nl">The first thing that we will need to establish is the entry point for our main application, so let's do this by creating a main class and a package to be able to link that class to some of the components that the calculator application is going to be using.</span></p>


      <em>Code</em>
      <pre class = "code">package calculator;

import java.awt.*;
import javax.swing.*;

public class Calculator {

    public static void main(String[] args) {
	EventQueue.invokeLater(() -> {
		CalculatorFrame frame = new CalculatorFrame();
		frame.setTitle("Calculator");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setVisible(true);
	    });
    }
}</pre>

      <br />
      <hr />

      <h2>Adding a panel</h2>
      
  <p>Now, let's add some other components to the calcuator class.</p>

  <em>Code:</em>
  <pre class = "code">package calculator;

import javax.swing.*;

public class CalculatorFrame extends JFrame {
    public CalculatorFrame() {
	add(new CalculatorPanel());
	pack();
    }
}</pre>

  <p>Here we created a frame class which extends the JFrame, then the next step would be to add an instance of the panel class to the frame by using the add method.</p>

  <hr />
  <br />

  <h2>Programming the Panel</h2>

  <p>Here in the panel itself will be where the main work will be done. First let's take a look at the code and then we can go futher into it and understand the implementation.</p>

  <em>Code:</em>
  <pre class = "code">package calculator;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class CalculatorPanel extends JPanel {

    <span class = "comments">// use this for number and operator buttons</span>
    private JButton display;
    <span class = "comments">// for creating the layout of buttons and text field</span>
    private JPanel panel;
    <span class = "comments">// store the result of the computation </span>
    private double result;
    private String lastCommand;
    private boolean start;

    public CalculatorPanel()  {
        <span class = "comments">// set Layout method inherit in the JPanel class</span>
	setLayout(new BorderLayout());

	result = 0;
	lastCommand = "=";
	start = true;

	<span class = "comments">// creating a button to store the values of our new
	// computations</span>
	display = new JButton("0");
	display.setEnabled(false);
	<span class = "comments">// assign this field to the north side of our panel</span>
	add(display, BorderLayout.NORTH);

	<span class = "comments">// two instances, one for insertions
	// one for operations</span>
	ActionListener insert = new InsertAction();
	ActionListener command = new CommandAction();

	<span class= "comments">// create the panel and the grid layout</span>
	panel = new JPanel();
	panel.setLayout(new GridLayout(4, 4));

	addButton("7", insert);
	addButton("8", insert);
	addButton("9", insert);
	addButton("/", command);
	
	addButton("4", insert);
	addButton("5", insert);
	addButton("6", insert);
	addButton("*", command);

	addButton("1", insert);
	addButton("2", insert);
	addButton("3", insert);
	addButton("-", command);

	addButton("0", insert);
	addButton(".", insert);
	addButton("=", command);
	addButton("+", command);

	<span class = "comments">// we can place othis grid in the center of our panel</span>
	add(panel, BorderLayout.CENTER);
    }

    <span class = "comments">// we can use this method in order to add new
    // buttons to our panel, it has parameters for label and listener</span>
    private void addButton(String label, ActionListener listener) {
	JButton button = new JButton(label);
	button.addActionListener(listener);
	panel.add(button);
    }

    <span class = "comments">/* this inner class has a method which takes the event
    determine if the start value is true and then changes the text of the
    display button, then resets the start back to false
    this allows us to calculate only two values at a time */</span>
    private class InsertAction implements ActionListener {
	public void actionPerformed(ActionEvent event) {
	    String input = event.getActionCommand();
	    if(start) {
		display.setText("");
		start = false;
	    }
	    display.setText(display.getText() + input);
	}
    }

    <span class = "comments">/* finally the command action should  create a method
    which takes the event, determines the type of action to be performed,
    if based on the event. It takes the exception of the -  symbol though,
    since this can also be used to set the value to a negative */</span>  
    private class CommandAction implements ActionListener {
	public void actionPerformed(ActionEvent event) {
	    String command = event.getActionCommand();

	    if(start) {
		if(command.equals("-")) {
		    display.setText(command);
		    start = false;
		} else {
		    lastCommand = command;
		}
	    } else {
		calculate(Double.parseDouble(display.getText()));
		lastCommand = command;
		start = true;
	    }
	}
    }

    <span class = "comments">// this method performs the necessary computations</span>
    public void calculate(double x) {
	switch(lastCommand) {
	case "+":
	    result += x;
	    break;
	case "-":
	    result -= x;
	    break;
	case "*":
	    result *= x;
	    break;
        case "/":
	    result /= x;
	    break;
        case "=":
	    result = x;
	    break;
	}
	display.setText("" + result);
    }
}</pre>

  <p>This application does several different tasks. First it creates the layout of the buttons for the calculator. Next it initializes each of the buttons with either numbers or operators, finally it has a two listener classes. One for executing the two computation between two numbers and one for determining the type of compuation to be performed.</p>
    

      
    <hr />
  <br />
  <a href = "Java_GUI6.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI8.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
