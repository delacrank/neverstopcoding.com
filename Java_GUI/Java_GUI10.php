<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Swing Inputs</title>
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

  <h2>Menu Items</h2>

  <p>In this section we are going to go over how to create a drop down menu, and set accelators or shortcut keys to activate those items in the menu.

    <span class = "nl">I'm going to start with several menu items and a pop up menu as well.</span></p>

  <em>Code:</em>
  <pre class = "code">package menu;

import java.awt.event.*;
import javax.swing.*;

public class MenuFrame extends JFrame {

    public static final int DEFAULT_WIDTH = 300;
    public static final int DEFAULT_HEIGHT = 200;

    private Action saveAction;
    private Action saveAsAction;
    private JCheckBoxMenuItem readonlyItem;
    private JPopupMenu popup;

    class TestAction extends AbstractAction {

      public TestAction(String name) {
	super(name);
      }

      public void actionPerformed(ActionEvent event) {
        System.out.println(getValue(Action.NAME) + " selected.");
      }
    }
    
    public MenuFrame() {
      setSize(DEFAULT_WIDTH, DEFAULT_HEIGHT);

      JMenu fileMenu = new JMenu("File");
      fileMenu.add(new TestAction("New"));

      JMenuItem openItem = fileMenu.add(new TestAction("Open"));
      openItem.setAccelerator(KeyStroke.getKeyStroke("ctrl O"));

      fileMenu.addSeparator();

      saveAction = new TestAction("Save");
      JMenuItem saveItem = fileMenu.add(saveAction);
      saveItem.setAccelerator(KeyStroke.getKeyStroke("ctrl S"));
    
      saveAsAction = new TestAction("Save as");
      fileMenu.add(saveAsAction);
      fileMenu.addSeparator();

      fileMenu.add(new AbstractAction("Exit") {
        public void actionPerformed(ActionEvent event) {
          System.exit(0);
        }
      });

    readonlyItem = new JCheckBoxMenuItem("Read-only");
    readonlyItem.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent event) {
        boolean saveOk = !readonlyItem.isSelected();
	saveAction.setEnabled(saveOk);
	saveAsAction.setEnabled(saveOk);
     }
    });

    ButtonGroup group = new ButtonGroup();

    JRadioButtonMenuItem insertItem = new JRadioButtonMenuItem("Insert");
    insertItem.setSelected(true);
    JRadioButtonMenuItem overtypeItem = new JRadioButtonMenuItem("Overtype");

    group.add(insertItem);
    group.add(overtypeItem);

    Action cutAction = new TestAction("Cut");
    cutAction.putValue(Action.SMALL_ICON, new ImageIcon("cut.gif"));
    Action copyAction = new TestAction("Copy");
    copyAction.putValue(Action.SMALL_ICON, new ImageIcon("copy.gif"));
    Action pasteAction = new TestAction("Paste");
    pasteAction.putValue(Action.SMALL_ICON, new ImageIcon("paste.gif"));

    JMenu editMenu = new JMenu("Edit");
    editMenu.add(cutAction);
    editMenu.add(copyAction);
    editMenu.add(pasteAction);

    JMenu optionMenu = new JMenu("Options");
    optionMenu.add(readonlyItem);
    optionMenu.addSeparator();
    optionMenu.add(insertItem);
    optionMenu.add(overtypeItem);

    editMenu.addSeparator();
    editMenu.add(optionMenu);

    JMenu helpMenu = new JMenu("Help");
    helpMenu.setMnemonic('H');

    JMenuItem indexItem = new JMenuItem("Index");
    indexItem.setMnemonic('I');
    helpMenu.add(indexItem);

    Action aboutAction = new TestAction("Action");
    aboutAction.putValue(Action.MNEMONIC_KEY, Integer.valueOf('A'));
    helpMenu.add(aboutAction);

    JMenuBar menuBar = new JMenuBar();
    setJMenuBar(menuBar);

    menuBar.add(fileMenu);
    menuBar.add(editMenu);
    menuBar.add(helpMenu);

    popup = new JPopupMenu();
    popup.add(cutAction);
    popup.add(copyAction);
    popup.add(pasteAction);

    JPanel panel = new JPanel();
    panel.setComponentPopupMenu(popup);
    add(panel);
  }
}</pre>

<p>The applicatoin boils down to 3 or 4 classes. The first and probably the most important class is the TestAction class extends the Abstract Action class. Each time a menu item is selected the TestAction class will be initialized and then the method under actionPerformed will be excuted. It is good that this is an abstract method since we can overwrite this based on the action being passed in.

<span class=  "nl">Next we have the constructor which basically creates the file menu, this will be used to insert the proceeding menu items. Some of our menu items will contain: 'open item', 'save item', 'save as item'. For each of these menu items we will add an accelerator to them in order to access them quickly via the keyboard.</span>

<span class = "nl">The file seperator just acts like a linebreak in order to draw some distinction in between each one of the menu items. Following these items there is another menu item created called 'edit menu'. It will consist of cut, copy and paste values.</span>

<span class = "nl">However, there is also the option of adding a feature which will determine if our file is an readonly option or not. If the readonly option is selected then we will create an action listener which will be used to disable the save and save as options.</span>

<span class = "nl">Towards the end of the class we have the menu bar object will be used to add all of the prior menu items we created (file menu, edit menu and help menu). Finally, there is also a Popup menu class which can be used to display options for cutting, pasting or copying features if the user right clicks the mouse anywhere inside the frame.</span></p>


    <hr />
  <br />
  <a href = "Java_GUI10.php">Previous Page</a>
<span class = "next"><a href = "Java_GUI12.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
