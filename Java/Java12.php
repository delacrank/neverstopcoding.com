<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Abstract Classes - Java Programming</title>
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

    <h1>Abstract Classes - Java Programming</h1>
    
    <h2>Abstract Classes</h2>
    
        <p>Previously, we spoke about using inheritance to copy over methods and fields from one class to another. The new class or subclass cannot access private fields or private methods from the parent class, unless they use the keyword 'super' to call methods or fields from the super class.
    
    <span class = "nl">In this section, we are going to be talking about abstract classes and abstract methods, why we would use them and what the syntax for these classes and methods is.</span>
    
    <span class = "nl">An abstract class and method is generally used for extending the features of a group of classes which all generally use the same method. Yet, by itself the abstract class really has no function or purpose to serve on its own.</span>
    
    <span class = "nl">An example of this would be if you had different employees and managers they would all require something in common, maybe a desciption. It pointless to constantly include these methods in each employee and manager class.</span>
    
    <span class = "nl">Now, let's look at some syntax.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create our abstract class</span>
    public abstract class Person {
        
        public Person() 
        { 
        }
        
        public abstract String Description();
    } </pre>
    
    <p>Our abstract class, which will be used to extend the employee and manager classes.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public class Employee extends Person {
        
        private String name;
        private String jobTitle;
        
        public Employee(String name, String jobTitle)
        {
            this.name = name;
            this.jobTitle = jobTitle;
        }
    
        <span class = "comments">// Override our abstraction method</span>
        public String Description()
        {
            return name + " job title, is: " + jobTitle;  
        }
    }</pre>
    
    <p>Now, let's see how we could use inheritance to instantiate this class.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    public class Main {
        public static void main(String[] args) {
            
            Person[] P = new Person[2];
            P[0] = new Employee("Bob", "Janitor");
            P[1] = new Employee("Jennifer", "Secretary");
            
            <span class = "comments">// Loop through our Person objects</span>
            for(Person p : P)
                System.out.println(p.Description());
        }
    }</pre>
    
    <br />
    <hr />
    
<a href="Java11.html">Previous</a> 
<span class = "next"><a href="Java13.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>