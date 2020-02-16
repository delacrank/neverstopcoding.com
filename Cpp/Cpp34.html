<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Explicit Constructors - Cpp Programming</title>
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

        <h1>Explicit Constructors - Cpp Development</h1>
        
        <h2>Explicit Constructors</h2>
        
        <p>When we create either a class or structure and define member variables we are saying that we want to work with a variables of that type.  Meaning if I declare a class called 'Person' and then pass a variable into the parameter for the constructor of that class, then my constructor needs to pass that parameter as a 'Person' type.
            
        <span class="nl">Similar to the way a function returning a int would implicitly convert a double for the purposes of executing the code within.  Our constructors do this as well.</span>
        
        <span class ="nl">Let's take a look at this, below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>

    class Person {
    public:
        <span class = "comments">// Passing an integer x, converts that integer 'x' into a person type as well</span>
         Person(int x) : number(x) { }
         int getNumber() { return number; }
    private:
        int number;
    };
    
    int main()
    {
        <span class="comments">// Passing a value to the constructor initializes member variable</span>
        Person p(5);
        std::cout &lt;&lt; p.getNumber() &lt;&lt; std::endl;
    }</pre>
        
        <p>So, nothing new in this example.  I only added some comments explaining the conversions which are implicitly happening in the background.
        
        <span class = "nl">Let's say for example we created a void function which has no type in order to pass a person type into it.  Could we get away with calling that function in our main function?</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>

    class Person {
    public:
         Person(int x) : number(x) { }
         int getNumber() { return number; }
    private:
        int number;
    };
    
    <span class="comments">// Create a function to pass an object from our class into it</span>
    void change (Person x)
    {
        <span class="comments">// We can pass our object into an integer</span>
        int i = x.getNumber();
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    }

    int main()
    {
        <span class="comments">// Let's pass a value from our class into our void function</span>
        change(10);
    }</pre>
        
        <p>The value in that example first gets passed to the Person constructor initialized as a person type, then it gets called into change function and converted again into an integer.
        <span class = "nl">Let's say for example that we declared our constructor as explicit, it wouldn't allow copy initialization (=) and it wouldn't allow those types of implicit conversions to happen.</span>
        
        <span class = "nl">Let's take a look at this below.</span></p>
        
    <pre class="code">
    #include &lt;iostream>

    class Person {
    public:
         <span class="red">explicit</span>Person(int x) : number(x) { }
         int getNumber() { return number; }
    private:
        int number;
    };
    
    void change (Person x)
    {
        int i = x.getNumber();
        std::cout &lt;&lt; i &lt;&lt; std::endl;
    }

    int main()
    {
        <span class="comments">// We have to first initialize the value before calling our function</span>
        change( Person(10) );
    }</pre>
        
        <hr />
        
        <!-- Static data members -->
        <h2>Static Data Members</h2>
        
            <p>A static variable is a variable which only exists in the class or structure it was declared.  Static members cannot be initialized within the current class. One of the ways we can initialize a static member variable is by creating a function where we can pass the value through a parameter in our main function.
        
        <span class = "nl">Let's take a look at an example of that below.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    class Person {
    public:
        <span class="comments">// Declare a public function to access our private static member</span>
        static int getNumber() { return number; }
        <span class="comments">// Overloading the function allows us to pass a value to that static member</span>
        static void getNumber(int);
    private:
        <span class="comments">// A declaration</span>
        static int number;
    };
    
    <span class="comments">// We don't need to use the static qualifer anymore</span>
    void Person::getNumber(int x)
    {
        <span class="comments">// Initialize our static member here outside the class</span>
        number = x;
    }
    
    <span class="comments">// Don't forget to declare this so we can use it in our main function</span>
    int Person::number;
    
    int main()
    {
        Person p;
        p.getNumber(5);
        std::cout &lt;&lt; p.getNumber() &lt;&lt; std::endl;
    }</pre>
        
        <p>Let's say for example that we wanted to instead pass the value of our static member within our class.  We could do this by using an in class static function and then passing that value outside the scope of our class.
        
        <span class = "nl">Once again I will show an example of this below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Person {
    public:
        static int getNumber() { return number; }
    private:
        <span class="comments">// Pass the value here instead</span>
        static int initNumber( ) { return 5; }
        static int number;
    };
    
      <span class="comments">// Now we can initialize our static member</span>
    int Person::number = initNumber();
    
    int main()
    {
        Person p;
        std::cout &lt;&lt; p.getNumber() &lt;&lt; std::endl;
    }</pre>
        
        <p>To read more about static members you can check this ink out <a href=""</p>
    
        <hr />
        <br />
        <a href="Cpp33.html">Previous</a>
        <span class = "next">
        <a href = "Cpp35.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  