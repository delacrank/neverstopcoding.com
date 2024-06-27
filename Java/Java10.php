<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Packages &amp; Imports - Java Programming</title>
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

    <h1>Packages &amp; Imports - Java Programming</h1>
    
    <h2>Java Packages &amp; Imports</h2>
    
        <p>Java is a Object Oriented Programming language, this means that all java code must be contained within a class, similar to C#. Yet, with the support of so many classes it can become confusing how to write a class which doesn't already exist.
    
    <span class = "nl">One way this is done is by seperating our classes into packages, so you can have multiple classes all named employee, as long as each class is in a package of its own.</span>
    
    <span class ="nl">To compile the class within the package, simply type in the directory of the package before the source file, let's look at an example of this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// NewYork/Employee.java file name</span>
    package NewYork;
    
    public class Employee {
    
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
    
        <p>This is one class under package 'NewYork', let's look at another class with the same name. Yet, beloning to a different package.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Florida/Employee.java file name</span>
    package Florida;
    
    public class Employee {
    
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
    
        <p>Now, let's look at calling these classes in our main class. Our main class can tell the where the classes are located.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Main {
    
        public static void main (String[] args) {
            
            NewYork.Employee NE = new NewYork.Employee("Jason", 20000);
            Florida.Employee FE = new Florida.Employee("June", 35000);
            
            System.out.printf("Our New York employee: %s %,d\n",
            NE.getName(), NE.getSalary());
            
            System.out.printf("Our Florida employee: %s %,d\n",
            FE.getName(), FE.getSalary());
        
        }
    }</pre>
    
    <hr />
    
    <!-- Import directives -->
    <h3>Import Directives</h3>
    
        <p>Import directives are not like '#include' directives of c or c++. These directives are similar to the 'using' keyword in that it only shortens the amount you have to write when calling a class.
    
    <span class = "nl">Let's look at an example of what our code looks like before and after a using statement.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Without import</span>
    class Input {
        public static void main(String[] args) {
            
            java.util.Scanner in = java.util.Scanner(System.in);
        }
    }</pre>
    
    <p>Now, let's look at the same call with the 'import' statement.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Using import directive</span>
    import java.util.Scanner;
    
    class Input {
        public static void main(String[] args) {
        
            Scanner in = Scanner(System.in);
        }
    }</pre>
    
        <p>Let's look at what a static import looks like.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    import static java.lang.System.out;
    
    class Print {
        public static void main(String[] args) {
            
            <span class = "comments">// Static imports can only import static methods</span>
            out.println("Hello");
        }
    }</pre>
    
    <br />
    <hr />
    
<a href="Java9.html">Previous</a> 
<span class = "next"><a href="Java11.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>