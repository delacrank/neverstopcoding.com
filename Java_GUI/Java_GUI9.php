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

  <h2>Radio, Checkbox, Slider Inputs</h2>

  <p>In this section we are going to go over some of the different input controls to handle different types of desktop forms. Below, is an example of an application which uses two checkboxes and sets the font style based on whether one of them is selected or not. I'm not going to use the initializer code for creating the Frame since you can reuse the same one we did in the last program.</p>

  <em>Code:</em>
  <pre class = "code">package input;

import java.awt.BorderLayout;
import java.awt.GridLayout;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JCheckBox;
import java.awt.Font;
import java.awt.event.ActionListener;

public class InputFrame extends JFrame {

    private JLabel label;
    private JCheckBox bold;
    private JCheckBox italic;
    private static final int FONTSIZE = 24;
    
    
    public InputFrame() {
	label = new JLabel("The quick brown fox jumps over the lazy dog");
	label.setFont(new Font("Serfi", Font.BOLD, FONTSIZE));
	add(label, BorderLayout.CENTER);

	ActionListener listener = event -> {
	    int mode = 0;
	    if(bold.isSelected()) mode += Font.BOLD;
	    if(italic.isSelected()) mode += Font.ITALIC;
	    label.setFont(new Font("Serif", mode, FONTSIZE));
	};

	JPanel buttonPanel = new JPanel();
	bold = new JCheckBox("Bold");
	bold.addActionListener(listener);
	bold.setSelected(true);
	buttonPanel.add(bold);

	italic = new JCheckBox("Italic");
	italic.addActionListener(listener);
	buttonPanel.add(italic);

	add(buttonPanel, BorderLayout.SOUTH);
	pack();
    }
}</pre>


  <p>Let's go over some of these lines in order to better understand what we are looking at. First we have a label which we can use to define the font we want to manipulate, next we apply a font style of serfi to the label along with the intial font style and font size which is set to 24 pixels.

    <span class = "nl">Following this we want to use the ActionListerner to determine where the check box selected is applying the correct style (bold or italic). Each checkbox has a method which determines whether the value is checked or not. This method is called the 'isSelected' method.</span>

    <span class = "nl">The Action listener simply checks the value of the checkbox and then applys the correct style to the variable 'mode' based on two if statements. Following this we can apply the mode variable to the label using it as a parameter towards the bottom of the action listener.</span>

    <span class = "nl">So far we have one object and a listener. Now we need a panel and two checkboxes to listern for either bold or italic. The first checkbox we create has a bold text and is set as the default selected value as well as the listener we created earlier. We do the same with the second checkbox and we apply a buttonPanel to the south of our border layout.</span>
    </p>
  
    <hr />
  <br />
  <a href = "Java_GUI8.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI10.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
