<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Inheritance &amp; Polymorphism - Java Programming</title>
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

    <h1>Inheritance &amp; Polymorphism - Java Programming</h1>
    
    <h2>Inheritance &amp; Polymorphism</h2>
    
        <p>Inheritance is simply copying the methods and fields from one class into another.  This is a very good use of the code reuse of Object Oriented Programming.  The way Java inherits classes is by using the keyword 'extends', so in essence one class will be extended into another.
    
    <span class = "nl">Generally, when one class is copied into another it is called the base class.  The copied version is called the derived class.  There are other names as well, such as Parent class and child class, or Super class and sub class.</span>
    
    <span class = "nl">Let's take a look at inheritance in action, we are going to be using the same classes as before, 'Employee'.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class  ="comments">// Super Class 'Employee'</span>
    package Employee;
    
    class Employee {
        
        private String name;
        private int Salary;
        
        public Employee(String name, int Salary) 
        {
            this.name = name;
            this.Salary = Salary;
        }
        
        public String getName()
        {
            return name;
        }
        
        public int getSalary()
        {
            return Salary;
        }
    }</pre>
    
        <p>Okay, this is our employee class, looks pretty familar and simple.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    package Employee;
    
    class Manager extends Employee {
    
        public Manager(String name, int Salary)
        {
            <span class = "comments">// The super works by calling fields from 'Employee' class</span>
            super(name, Salary);
        }
    }</pre>
    
        <p>This is our manager class, one of the things you will notice is the constructor uses the 'super' keyword, which works by calling the fields from our super class or parent class.</p>
    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    package Employee;
    
    class Inheritance {
        public static main void(String[] args)
        {
            <span class = "comments">// </span>
            Employee E = new Employee("June", 20000);
            Manager M = new Manager("Jason", 50000);
            
            <span class = "comments"></span>
            System.out.println("Employee: " + E.getName() + " " + E.getSalary());
            System.out.println("Manager: " + M.getName() + " " + M.getSalary());
        }
    }</pre>
    
        <hr />
    
    <!-- Polymorphism -->
    <h3>Polymorphism</h3>
    
        <p>Polymorphism is the act of overriding a super class method, this means you can call the same method from a sub class and have it behave differently.
    
    <span class = "nl">What makes the concept of polymorphism interesting, is that you can still use the super class object to call the subclass methods. In order to understand this concept more clearly, let's a look at some code.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Manager extends Employee {
    
        private bonus = 5000;
    
        public Manager(String name, int Salary)
        {
            super(name, Salary);
        }
        
        <span class = "comments">// Use the 'super' keyword to return a private field from employee</span>
        public int getSalary()
        {
            System.out.println("Being called from Manager class");
            return super.getSalary() + bonus;
        }
    }</pre>
    
        <p>Now, let's look at our 'main' method again, let's see what happens when we call the manager function from an employee object.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Polymorphism {
        public static void main(String[] args) {
        
            <span class = "comments">// Create a manager object</span>
            Manager M = new Manager("Jack", 60000);
            Employee[] E = new Employee[3];
            
            E[0] = new Employee("Jill", 30000);
            E[1] = new Employee("Johnson", 60000);
            <span class = "comments">// We can pass a Manager object into an Employee array</span>
            E[2] = M;
            
            <span class = "comments">// Call the 'getSalary()' method for our Manager object</span>
            for(Employee e : E)
                System.out.printf("Employee : %s %,d\n", e.getName(), e.getSalary());
        }
    }</pre>
    
    <hr />
    
    <!-- Preventing Inheritance -->
    <h3>Preventing Inheritance</h3>
    
        <p>In order to prevent inheritance, you need only use the 'final' keyword, this can be done in front of a class or a method.  Making it so that the class or method cannot be copied into a sub/child class.
    
    <span class = "nl">The syntax for that would look like this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// For a class</span>
    public final class Employee {
    
        public Employee() {
        
        }
    
        <span class = "comments">// For a method</span>
        public final String getName() {
        
        }
    }</pre>
    
    <br />
    <hr />
    
<a href="Java10.html">Previous</a> 
<span class = "next"><a href="Java12.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>