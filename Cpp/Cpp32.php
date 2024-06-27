<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Friend functions - Cpp Programming</title>
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

        <h1>Friend functions - Cpp Development</h1>
        
        <h2>Understanding Friend functions</h2>
 
            <p>What happens when we want to use a function we wrote outside of our class, meaning not even a part of the struct or class, can we still use the private members of that struct or class?
        
        <span class = "nl">Let's take a look at what that would look like.</span>
              </p>
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
        
    struct Person {
        <span class="comments">// Declare the friend function passing the Person struct as a reference param</span>
        friend int add(Person&amp;);
        
        Person() = default;
        Person(int x, int y) : var1(x), var2(y) { }
            
        private:
            int var1, var2;
        };
        
        <span class="comments">// Using the Person struct as a reference we can access objects (var1, var2)</span>
        int add(Person &amp;p) { return p.var1 + p.var2; }  
        
        int main()
        {
            <span class="comments">// Initialize var1 and var2</span>
            Person a(5, 10);
            
            <span class="comments">// Now pass the struct object to our friend function</span>
            std::cout &lt;&lt; add(a) &lt;&lt; std::endl;
        }</pre>
        
        <p>Friend functions are interesting because they allow us to use multiple objects from different classes and structures.
        
        <span class = "nl">Let's take a look at what something like that would look like.</span></p>
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
        
    <span class="comments">// Declare struct Person2 first before using it in struct Person1</span>    
    struct Person2;    
        
     <span class="comments">// Our first struct</span>    
    struct Person1 {
        friend int add(Person1&amp;, Person2&amp;);
        
        Person1() = default;
        Person1(int x) : var(x) { }
            
        private:
            int var;
        };
        
    <span class="comments">// Our second struct</span>  
    struct Person2 {
        friend int add(Person1&amp;, Person2&amp;);
        
        Person2() = default;
        Person2(int x) : var(x) { }
            
        private:
            int var;
        };
        
        <span class="comments">// Our friend function</span>  
        int add(Person1 &amp;p1, Person2 &amp;p2) { return p1.var + p2.var; }  
        
        int main()
        {
            Person1 a(5);
            Person2 b(10);
            
            std::cout &lt;&lt; add(a, b) &lt;&lt; std::endl;
        }</pre>
              
    <hr />
    
        <!-- Mutable members -->
        <h3>Mutable data members</h3>
        
            <p>A 'mutable' data member or a mutable variable is a variable which is never constant, even if it is the member of a constant function.
        
        <span class = "nl">It is very important to have constant variables when working with classes, we want to ensure that the private variables aren't going to change values after we initialize them using our constructor.</span>
                
        <span class="nl">However, there are also times when we want to ensure that some variables do change, like when working with a string which can hold different characters.  For these types of variables we have a qualifer called 'mutable'.</span>
                
        <span class="nl">Let's look at an example of this below.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Person {
    public:
        void varFunction() const;
    private:
        int x;
    };

    void Person::varFunction() const 
    {
        <span class="comments">// Constant function will produce an error because we can't increment 'x'</span>
        ++x;
    }</pre>  
        
        <p>If we look at the first function, it produces an error because anything within a constant function cannot altered.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Person {
    public:
        void varFunction() const;
    private:
        <span class="red">mutable</span> int x;
    };

    void Person::varFunction() const 
    {
        <span class="comments">// 'x' can be incremented now because it's mutable</span>
        ++x;
    }</pre>      
        
        <hr />
        <br />
        <a href="Cpp31.html">Previous</a>
        <span class = "next">
        <a href = "Cpp33.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  