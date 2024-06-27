<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Copy Constructor - Cpp Programming</title>
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

        <h1>Copy Constructor - Cpp Development</h1>
        
        <h2>The Copy Constructor</h2>
        
            <p>There are two forms of initialization, copy initialization and direct initialization.  One form copy initialization is when we pass the value on to a copy of the object, direct initialization is when we initialize the object directly using a reference.
        
        <span class = "nl">In the example below, we are going to understand how to copy a user defined object into another object.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Define our class</span>
    class Person {
    
    public:
        <span class = "comments">// Define our copy constructor</span>
        Person(const Person&amp; obj) : x( obj.x ) { }
        <span class = "comments">// Create a constructor for setting our private number</span>
        Person(int num) : x(num) { }
        int getNum ( ) { return x; }
        
    private:
        int x;
    };

    int main()
    {
        <span class = "comments">// Initialize x</span>
        Person P(5);
        <span class = "comments">// Initialize person object x with person object P</span>
        Person X(P);
        
        <span class = "comments">// Print the value of x variable in object P</span>
        std::cout &lt;&lt; P.getNum() &lt;&lt; std::endl;
        
        <span class = "comments">// Print the value of x variable in object X</span>
        std::cout &lt;&lt; X.getNum() &lt;&lt; std::endl;
    }</pre>
        
        <p>What we did is create a constructor which took a user type of our class as const reference.  We can take that reference value use it to initialize private member variables of the same type.
        
        <span class = "nl">In the example below we first initialized the value of x using our constructor which handles integers.  Then we used the overloaded version of our constructor in order to copy all the member variables previously initialized in object P, into object X.</span>
        
        <span class = "nl">Now we can call the 'getX()' function to return the value of our private member variable in each of our class objects.</span></p>
        
    <hr />    
        
    <!-- overloaded operators -->    
    <h3>Overloaded Operators</h3>
            
        <p>In the next example we are going to look at working with an 'overloaded operator' in order to assign this object to another using the assignment  operator.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Person {
    
    public:
        <span class = "comments">// Define our copy-assignment operator</span>
        Person&amp; operator=(const Person&amp; obj) { 
            x = obj.x;
        }
        Person(int num) : x(num) { }
        int getNum ( ) { return x; }
        
    private:
        int x;
    };

    int main()
    {
        <span class = "comments">// We can now use the assignment operator to assign values to our objects</span>
        Person P = 5;
        Person X = P;
        
        std::cout &lt;&lt; P.getNum() &lt;&lt; std::endl;
        std::cout &lt;&lt; X.getNum() &lt;&lt; std::endl;
    }</pre>
        
        <p>In the example above, I simply substituted the function call operator for an assignment operator.  The two operators serve the same purpose but operate using different symbols.</p>
        
        <hr />    
    
        <!-- Destructors -->
        <h3>Destructors</h3>
        
            <p>Let's take a moment to look at a destructor.  The compiler automatically generates these, yet sometimes we want to define them within our class.  To understand what a destructor does, it simple destroys all member variables and other objects used once we leave the scope.
        
        <span class ="nl">To understand this, let's look at a small program.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Person {
    public:
        <span class = "comments">// Display this when we call our constructor</span>
        Person() { std::cout &lt;&lt; "Our constructor was called" &lt;&lt; std::endl; }
        
        <span class = "comments">// Display this when our destructor is called</span>
        ~Person() { std::cout &lt;&lt; "Our destructor was called" &lt;&lt; std::endl; }
    };
    
    int main()
    {
        Person P;
        
        std::cout &lt;&lt; "\nOur program does some processing, within this scope" &lt;&lt;
        "\nLet's see what happens when we leave the scope\n" &lt;&lt; std::endl;
    }</pre>
        
        
        <hr />
        <br />
        <a href="Cpp34.html">Previous</a>
        <span class = "next">
        <a href = "Cpp36.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  