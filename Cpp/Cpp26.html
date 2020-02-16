<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Function Overloading - Cpp Programming</title>
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

        <h1>Function Overloading - Cpp Development</h1>
        
        <h2>Function Overloading</h2>
        
            <p>Function overloading can happen in multiple ways, but first let's understand what exactly it means to overload a function.  Functions that are overloaded are functions that are being called multiple times for different purposes.  Similar to the way a chess piece can be overloaded if it is protecting multiple pieces, we can use the same function for multiple purposes.
        
        <span class = "nl">Function overloading is useful because it allows you to write the same function name to do different things.  This is good because the programmer doesn't have to remember fifteen different function names, let's look at any example below. </span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    int add(int x, int y) { return x + y; }
        
    double add(double x, double y) { return x + y; }
    
    int main()
    {
        cout &lt;&lt; add(5, 10) &lt;&lt; endl;
        cout &lt;&lt; add(5.5, 10.5) &lt;&lt; endl;
    }</pre>    
        
        <p>In that example we overloaded the add function to handle both integers and doubles, now when we add a double the function can process it. The compiler will be able to tell the difference based on the types of parameters being passed.
        
        <span class = "nl">In the first version of add we passed only integers as parameters so the compiler knows to use the integer add function. When we called the add function function again and passed in some mixed numbers (whole number and fraction) then the compiler used the double add function. </span>
            
        <span class="nl">Let's look at another example this time we will change the amount of parameters being used.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    int compute(int x, int y) { return x - y; }
    
    int compute(int x, int y, int z, int z1 ) { return x + y + z + z1; }
    
    int main()
    {
        cout &lt;&lt; compute(5, 10) &lt;&lt; endl;
        cout &lt;&lt; compute(5, 10, 15, 20) &lt;&lt; endl;
    } </pre>  
        
        <p>In this example I changed the function based on how many arguments were passed into the function.  If the user only passes two arguments then we subtract, if the user passes four arguments then we add all four.
        
        <span class = "nl">So we can overload functions if we change the types of parameters being passed, this also applies to const and pointer parameters, or the number of parameters being passed into a function.</span>    
            
        <span class="nl">Let's look at an example of what a const or pointer overloaded function looks like.</span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    <span class="comments">// Declare compute function passing x and y references</span>
    int compute(int &amp;x, int &amp;y) { return x - y; }
    
    <span class="comments">// Redeclare compute function passing const x and const y references</span>
    int compute(const int &amp;x, const int &amp;y) { return x + y; }
    
    int main()
    {
        const int i = 5;
        const int j = 10;
        int w = 5;
        int z = 10;
        
        <span class="comments">// Matches the function based on const or non-const arguments</span>
        cout &lt;&lt; compute(i, j) &lt;&lt; endl;
        cout &lt;&lt; compute(w, z) &lt;&lt; endl;
    } </pre>  
        
        <p>With overloading const functions we must used references because passing by value will only create a copy of the argument in the parameter of the function, making const values irrelevant.  
            
        <span class="nl">In our main function our compiler was able to choose which of the two functions to used based on the arguments we passed, if we passed const variables then the overloaded function will add the two, otherwise it will add them.</span>
        </p>
        
    <hr />
        
    <!-- candidate and viable function -->
    <h3>Candidate vs Viable functions</h3>
        
        <p>When overloading functions are compiler chooses the function based on the arguements being passed into the function.  So far we know this much.  We will be able to tell that a function which requires 4 parameters will only work if 4 arguments are passed into it when we call that function.  
        
        <span class = "nl">However, what if we have one function which requires 4 integer values and we pass 3 integers and 1 double.  The function will still work but a data conversion will have to happen in order for the function to excute the instructions.</span>
            
        <span class="nl">How will our compiler be able to choose which function to use if we have a function which accepts 4 integers and another one which accepts 4 doubles and we try to pass 2 integers and 2 doubles into an overloaded function?</span>
            
        <span class="nl">This is the difference between Candidate and Viable functions. If any parameter matches the overloaded function it will go from being a candidate function into a viable function.  A viable function is an overloaded function which matches the parameters most closely by data type and amount of parameters.</span>
            
        <span class="nl">Let's look at an example.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    using namespace std;
    
    void print(const string &amp;s) { cout &lt;&lt; s &lt;&lt; endl; };
    
    void print(int s, int t) { cout &lt;&lt; s &lt;&lt; endl; };
    
    void print(double s) { cout &lt;&lt; s &lt;&lt; endl; };
    
    void print(char s) { cout &lt;&lt; s &lt;&lt; endl; };
    
    int main()
    {
        print('s');
    }
    </pre>
        
        <p>The way the compiler decides which function is a candidate function is by checking first to see if the function name matches, for this example calling print will call one of four functions so all four functions are candidate functions.
        
        <span class = "nl">Next the compiler will see if the parameters match the amount of arguments being passed, only 1 argument is passed so the print function which takes 2 ints isn't viable anymore. Also, the compiler cannot convert a char type into a string type so the const string function isn't viable either.</span>
            
        <span class="nl">The compiler will then see if the argument can be promoted, or converted. As it turns out the char 's' can be promoted to the number 115, so the compiler must check to see which one of the two functions is the closest match.  The last function which takes a single char parameter is, so it will return just the char 's' instead of 115.</span>
              </p>
        
        <hr />
        <br />
        <a href="Cpp25.html">Previous</a>
        <span class = "next">
        <a href = "Cpp27.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  