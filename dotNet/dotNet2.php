<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Events and delegates - .Net Framework</title>
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
<?php include('..//Includes//Left_dotNet.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Events and delegates - .Net Framework</h1>

<!-- Events -->
<h2>Events and delegates</h2>

        <p>Let's start from the beginning.  When working with GUI applications, there are many possible outcomes for users to input actions or for their actions to trigger situations.  For example, if a user is playing a video game, and he makes a decision choose one path instead of the the other: how does the game know which path to load, or what sound file should be playing, or what monsters to generate.  There are just too many variables so there was a system created to handle the flow of the program based on events.  Computers no longer need to relay on 'if else' or 'switch' statements, especially in large and oftentimes complication programs.
            
        <span class = "nl">Modern applications are designed by 'Event-driven' programming.  This means that instead of saying do option 'A' first, then I can get ready for option 'B', a user can choose either option 'A', or 'B' and the program will be equipped to change its entire routine reguardless of which option is picked. The system is optimal because it functions reguardless of the chronical or linear order in which, events take place.</span>
            
        <span class = "nl">An event is an way to notify other classes or objects if something happens (i.e., user clicks button, notify this class). Events can be considered publishers in which other classes or objects subscribe to in order to be updated of circumstances which change.</span>
            
        <span class = "nl"> A delegate is a reference type which, refers to a method.  The method in the situation of 'event driven programming' is an event, this is behavior is known as encapsulating the method.  The user doesn't have to know how to make the event occur, they simply deal with the delegates, which talk to the events and tell them how and when to behave.</span></p>

<hr />    
    
<!-- Events Handler-->
<h3>Event Handler</h3>

    <p> An Event Handler is bound to an event, and will contain a procedure: instructions or a subroutine for how the event will act should it be triggered. Below, the event handler lets us know to type in a string of words into 'TextBox1', if 'Button1' is clicked.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
protected void Button1_Click(object sender, EventArgs e)
{ 
    TextBox1.Text =  "The button was clicked";
}</pre>
    
<br />
<hr />
    
<h3>Creating our own events, delegates and event handlers</h3>

        <p>Let's create seperate class to handle the delegates and events and then add our events to the class which is linked to our forms page.  We can have multiple forms so why would we create multiple delegates and events for every form when we can organize them all in one class.  Let's call that class program.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
public class Program
{
    <span class="comments">//Declaring a delegate 'MyEventHandler'</span>
    public delegate void <span class ="highlight">MyEventHandler1</span>();

    <span class="comments">//Declaring an event 'MyEvent1'</span>
    public event <span class ="highlight">MyEventHandler1</span> <span class ="highlight2">MyEvent1</span>;
}

<span class ="comments">// This is the class linked to our web form</span>
public class Form
{
    <span class ="comments">// Create a reference for our program class</span>
    Program p = new Program();

    <span class ="comments">// Use a Constructor to add our Events</span>
    public Form()
    {
        <span class="comments">// Add our events to our form class</span>
        p.<span class ="highlight2">MyEvent1</span> += p_MyEvent1;
    }

    <span class="comments">// This is the Event Handler we created for  MyEvent1</span>
    private void p_MyEvent1()
    {
        TextBox1.Text =  "The button was clicked"; 
    }   

    <span class ="comments">// Our original button click event</span>
    protected void Button1_Click(object sender, EventArgs e)
    { 

    } 
}</pre>

<br />
<hr />

<!-- Raising An Event -->
<h3>Raising an Event</h3>

        <p>So far, we understand how to create: an 'Event Handler', a 'Event' and a 'Delegate'.  However, how do we actually raise the event itself?  Some events are triggered by keyboard strokes, or timers, or other events, all of those triggers are considered 'Raising' an Event.
        
    <span class = "nl">Bellow, I am going to raise the event we created using our button click event, by adding a new method to our Program class which stores are delegates and events.  In addition, I will call that class from my button click event to show that it works.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
public class Program
{
    public delegate void <span class ="highlight">MyEventHandler1</span>();
    public event <span class ="highlight">MyEventHandler1</span> <span class ="highlight2">MyEvent1</span>;

    <span class="comments">// Storing our event in a method</span>
    public void TriggerMyEvent1()
    {   
        <span class="comments">//Raising our event</span>
        MyEvent1();
    }
}

public class Form
{
    Program p = new Program();

    public Form()
    {
        p.<span class ="highlight2">MyEvent1</span> += p_MyEvent1;
    }

    private void p_MyEvent1()
    {
            TextBox1.Text =  "The button was clicked";
    }  

    protected void Button1_Click(object sender, EventArgs e)
    { 
        <span class="comments">//Raising our event from the program class</span>
        this.p.TriggerMyEvent1();
    }
}</pre>

<hr />
<br />
<a href="dotNet1.html">Previous</a>   <span class="next"><a href="dotNet3.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
         