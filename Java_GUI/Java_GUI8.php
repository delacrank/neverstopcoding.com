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

  <h2>Handling Input</h2>

  <p>In this section we are going to be creating a program in order to handle text input and validate that input, futhermore we can go one step further in being able to have different types of inputs, which can include password inputs.</p>

  <em>Code:</em>
  <pre class = "code">package input;

import java.awt.*;
import javax.swing.*;

public class Input {

    public static void main(String[] args) {
	EventQueue.invokeLater(() -> {
		JFrame frame = new InputFrame();
		frame.setTitle("Input");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setVisible(true);
	    });
    }
 }</pre>

  <br />
  <hr />

  <h2>Input Frame Class</h2>

  <p>Here we will go display some of the code for actually rendering and taking input for GUI application</p>

  <em>Code:</em>
  <pre class = "code">package input;

import java.awt.BorderLayout;
import java.awt.GridLayout;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import javax.swing.SwingConstants;

public class InputFrame extends JFrame {

    <span class = "comments">// number of rows to render</span>
    public static final int TEXTAREA_ROWS = 8;
    <span class = "comments">// number of columns to render</span>
    public static final int TEXTAREA_COLUMNS = 20;

    <span class = "comments">// constructor which will initialize many of the fields</span>
    public InputFrame() {
	JTextField textField = new JTextField();
	JPasswordField passwordField = new JPasswordField();
        JPanel northPanel = new JPanel();
        <span class ="comments">// Create the grid layout, since we will only need two fields
	// for our inputs and an additional field for output</span>
	northPanel.setLayout(new GridLayout(2,2));
	northPanel.add(new JLabel("User name: ", SwingConstants.RIGHT));
	northPanel.add(textField);
	northPanel.add(new JLabel("Password: ", SwingConstants.RIGHT));
	northPanel.add(passwordField);

	add(northPanel, BorderLayout.NORTH);

	JTextArea textArea = new JTextArea(TEXTAREA_ROWS, TEXTAREA_COLUMNS);
	JScrollPane scrollPane = new JScrollPane(textArea);

	add(scrollPane, BorderLayout.CENTER);

	JPanel southPanel = new JPanel();

	JButton insertButton = new JButton("Insert");
	southPanel.add(insertButton);
	insertButton.addActionListener(event ->
	    textArea.append("User name: " + textField.getText() + " Password: "
	    + new String(passwordField.getPassword()) + "\n"));

	add(southPanel, BorderLayout.SOUTH);
	pack();
    }
}</pre>

  <p>Essentially the application is composed of a 2x2 grid laytout and a textArea underneath it which is 8x20. The first field is a label which is right aligned and its for the user, the second field is a text input.

    <span class = "nl">The third field which is underneath the first is the password label and its followed by the password input. Finally, we take all these fields and use the add function to pass them to the north part of our border layout.</span>

    <span class = "nl">The lower half of the program is concerned only with displaying the contents of these fields once the submit button is pressed. It does this by appending the text field and password field to the text area.</span></p>
  
    <hr />
  <br />
  <a href = "Java_GUI7.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI9.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
