<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />    
<title>Implicit params &amp; Static methods - Java Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">

</head>
<body>

    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Java.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

    <h1>Implicit params &amp; Static methods - Java Programming</h1>
    
    <h2>Implicit params &amp; Static methods</h2>
    
        <p>In this section of classes continued we are going to continue to talk about classes in a more indepth fashion.  We should cover 'implicit vs explicit' parameters.
    
    <span class = "nl">When we call a private variable from within our class, we are actually passing another variable of the same type.  Let's look at an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Employee {
    
        private String name;
        private int badges;

        public Employee(String n, int b)
        {
            <span class = "comments">// Just refers to Employee.name</span>
            this.name = n;
            this.badges = b;
        }
        
        public String getName()
        {
            <span class = "comments">// Return Employee.name</span>
            return this.name;
        }
        
        public int getBadges()
        {
            <span class = "comments">// Return Employee.name</span>
            return this.badges;
        }
    
    }</pre>
    
        <p>The 'this' operator works implicitly by ensuring that only fields or variables of the class are returned to the object being used.  We wouldn't want another variable operating within our methods, the code is slightly easier to read if we use the 'this' operator (other people will know the variables are declared within that class).
    
    <span class = "nl">Let's move on and talk about private and public modifiers.  You know how we place the public keyword before our 'main' method, how would we use the 'private' keyword for our class methods, or rather why would we need to use it?</span>
    
    <span class = "nl">Using the private keyword for a function is usually necessarily if you want to perform a function which does some work inside another function.  We wouldn't want the data in our private function to change, so we declare it private.</span></p>
    
    <hr />
    
    <!-- Static -->
    <h3>Static Fields and Methods</h3>
    
        <p>Alright, now into something a little more complicated. We are going to discuss what exactly is a static method or static field. First let's look at a currently example of a static method, our 'main' method.
    
    <span class = "nl">Notice how we are able to call the main method from many different classes without ever having to initialize it using the 'new' operator?  We can do this because in a sense a 'static' method is similar to a global method.  It doesn't only operate within the scope of a certain class, it can act on any class.</span>
    
    <span class = "nl">To illistrate my point let's create a static method called add.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class staticMethods {
    
        <span class = "comments">// Create our static method to add two 'Employee' objects</span>
        public static int Add(Employee x, Employee y)
        {
            return x.getBadges()  + y.getBadges();
        }
    
        <span class = "comments">// Start our main method</span>
        public static void main(String[] args)
        {
            Employee E =  new Employee(3);
            Employee E2 = new Employee(5);
            
            <span class = "comments"></span>
            E.Display();
            E2.Display();
            
            <span class = "comments">// Here we can display our static method in action</span>
            System.out.println("Badges from employee1 + employee2: " + Add(E, E2));
        }
    }

    <span class = "comments">// Create our Employee Class</span>
    class Employee {
            
        private int badges;
            
        public Employee(int b)
        {
            this.badges = b;
        }
    
        public int getBadges()
        {
            return this.badges;
        }
            
        public void Display()
        {
                System.out.println("Badges :" + badges);
        }
    }</pre>
    
        <p>This may seem confusing, the concept is that when we create a class we can create multiple instances of that class, its fields, and its methods.  This makes the fields and methods of our class 'dynamic', because they can change depending on the current instance of the class we are using.
    
    <span class = "nl">However, when we create a static method or static field, there can only exist one of that type.  Let's look at an example of a static field within a class.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class staticFields {
    
        <span class = "comments">// Start our main method</span>
        public static void main(String[] args)
        {
            <span class = "comments">// Create a new employee object</span>
            Employee E = new Employee();
            
            Employee W = new Employee();
            
            E.Increment();
            
            W.Increment();
            
            E.Increment();
            
            <span class = "comments">// Notice how the value for either object remains the same</span>
            <span class = "comments">// Even thou we incremented our 'e' employee twice</span>
            System.out.print("Object W: ");
            W.getBadges();
            
            System.out.print("Object E: ");
            E.getBadges();
        }
    }
    
    <span class = "comments">// Create our class</span>
    class Employee {
    
        <span class = "comments">// Create our static variable</span>
        public static int badges = 0;
        
        public Employee()
        {
            
        }
        
        <span class = "comments">// Increment our badges by one</span>
        public int Increment() {
            System.out.println("Badges incremented by 1");
            return badges++;
        }
        
        <span class = "comments">// Return total number of badges</span>
        public void getBadges()
        {
            System.out.println("Badges: " + badges);
        }
    } </pre>
    
        <p>Notice, in the example above, we created two Employee objects. This was to show that our static field wasn't default initialized back to zero, once we created another instance of the employee class.  
    
    <span class = "nl">Another thing to notice is that we incremented the field three times between the two objects, but instead of one object showing the fields value as two and the other field value as one, both fields remained equal to three.</span></p>
    
    <br />
    <hr />
    
<a href="Java7.html">Previous</a> 
<span class = "next"><a href="Java9.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>