<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Inheritance - Cpp Programming</title>
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
<?php include('..//Includes//Left_Cpp.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Inheritance - Cpp Development</h1>
        
        <h2>Inheritance</h2>
        
            <p>First let's understand what inheritance is. Inhertiance is when one class inherits either the member functions or member variables from another class. This can be displayed using the colon sign ':'.
                
        <span class = "nl">Generally, the class which is inheriting the other class is called the child or derived class.  The class being inherited from is called the parent or base class.</span>
        
        <span class = "nl">Using inheritance is important if you want to save time not rewritting code for each class, however, it can be difficult to read and understand especially if the code that is being read isn't one that you wrote.</span>
        
        <span class="nl">Let's look at an example.</span></p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    <span class = "comments">// Create the parent class and parent member variables/functions</span>
    class Parent {
    public:
        int x;
        int y;
        void display() { 
            std::cout &lt;&lt; "This is the value of x " &lt;&lt; x &lt;&lt;
            " This is the value of y " &lt;&lt; y &lt;&lt; std::endl;
        }
    };
    
    <span class = "comments">// Create the child class and inherit everything as public</span>
    class Child : public Parent
    {
    
    };
    
    <span class = "comments">// We can now use member variables and functions from our parent class</span>
    int main()
    {
        Child C;
        C.x = 5;
        C.y = 10;
        C.display();
    }</pre>
        
    <hr />    
        
    <!-- access modifers -->
    <h3>Access Modifiers</h3>
        
    <p>Let's understand protected and private access modifiers in respect to inheritance.  If you notice the way we inherited the parent class was by using the 'public' access modifier, this means that all the member variables and member functions are being copied into that class as public.
        
        <span class = "nl">If for example we tried to copy these variables and functions as protected, that would mean that every function and member variable would be copied into our derived class as protected. In order to understand how protected members behave let's look at some code.</span>
        
        <span class = "nl">Let's look at an exmaple of this.</span></p>  
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    <span class = "comments">// Create the base class with protected member variables</span>
    class Parent {
    protected:
        int a = 5;
        int b = 10;
    };
    
    <span class="comments">// We can work with these variables only in our derived or base class</span>
    class Child : public Parent {
    public:
        int getVar1() { return a; }
        int getVar2() { return b; }
    };
    
    int main()
    {
        Child c;
        std::cout &lt;&lt; c.getVar1() &lt;&lt; " " &lt;&lt; c.getVar2() &lt;&lt; std::endl;
        
        <span class = "comments">// This code will not work because it is outside the base or derived class</span>
        // Parent p;
        // std::cout &lt;&lt; p.a &lt;&lt; " " &lt;&lt; p.b &lt;&lt; std::endl;
    }</pre>
        
    <hr />    
        
    <!-- Derived constructors functions -->
    <h3>Derived constructors &amp; functions</h3>
        
        <p>Let's take a look at passing parameters to another function or even a constructor. One thing we should take into account, our access modifier can be private and we can still pass these variables into our dervied class. 
        
        <span class = "nl">Let's look at some code to demostrate what I mean. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>

    using namespace std;
    
    <span class = "comments">// Let's create the base class and add a base constructor</span>
    class Parent {
    protected:
        int height = 5;
        int width = 10;
        
    public: 
        Parent();
        Parent(int x, int y) {
            height = x;
            width = y;
        }
    };
    
    <span class = "comments">// Create a derived class and add a derived constructor</span>
    class Child : public Parent {
    public:
        string name;
    public:
        Child();
        Child(string s, int width, int height) : Parent(width, height) {
            name = s;
            
        }
        
        <span class = "comments">// Create a function to display the values of our variables</span>
        void display() {
            cout &lt;&lt; " " &lt;&lt; name &lt;&lt; " " &lt;&lt; width &lt;&lt; " " &lt;&lt; height &lt;&lt; endl;
        }
    };
    
    int main()
    {
        <span class ="comments">// Call our derived constructor</span>
        Child c("carlos", 20, 40);
        <span class ="comments">// Call our derived function</span>
        c.display();
    }</pre>
        
        <p>Alright, notice the syntax 'Derived Class : Base Class (base variables)', using this syntax we can pass variables from our parent or base class to our child or dervied class.
        
        <span class = "nl">Using this syntax we were able to pass the variables from our base class to our parent class.  Notice, how we made the member variables from our base class as protected to allow our derived class to access them.</span></p>
        
        <hr />
        <br />
        <a href="Cpp35.html">Previous</a>
        <span class = "next">
        <a href = "Cpp37.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  