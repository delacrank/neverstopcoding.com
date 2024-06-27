<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Reference Returns are Lvalues - Cpp Programming</title>
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

        <h1>Reference Returns are Lvalues - Cpp Development</h1>
        
        <h2>Reference Returns are Lvalues</h2>
        
            <p>Generally when we return a value from a function we have to declare the return type of the function, so either int, double, string, void, bool, etc.
        
        <span class ="nl">After we pass the correct parameters to our function, our function will make some computations and then return or value either by copying its value and storing it in an object (pass by value) or directly through the address of our initial object (pass by reference).</span>
                
        <span class = "nl">Typically the type of value which is returned is considered an Rvalue, because it will be located to the right of the assignment operator '='. We can look at an example below.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    string Upper(string x)
    {
        x[0] = toupper(x[0]);
        return x;
    }
    
    int main()
    {
        string s("hello");
        <span class="comments">// notice the location of the function, it is on the right side making it an Rvalue</span>
        string u = Upper(s);
        cout &lt;&lt; u &lt;&lt; endl;
    }</pre>
        
        <p>Now let's imagine that we could create a function which allowed us to declare use the function on as an Lvalue instead of an Rvalue.  Here is an example of something we could do with a function like this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    char &amp;get_val(string &amp;x, string::size_type ix)
    {
        return x[ix];
    }
    
    int main()
    {
        string s("hello");
        <span class="comments">// Here we can place get_val on the left hand side of the expression</span>
        <span class="comments">// We define H as a char and change the string at the same time.</span>
        get_val(s, 0) = 'H';
        cout &lt;&lt; s &lt;&lt; endl;
    }</pre>
        
        <p>I could make the code snippet even simpler if I were to use just an int or a string as a reference with no parameters.</p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int x = 0;
    
    int &amp;Lvalue()
    {
        return;
    }
    
    int main()
    {
        Lvalue() x = 5;
    }</pre>
        
        <p>I suppose the next question one would as is why do we need to use these reference functions?  Reference return functions are important for returning a class type or for making use of the Call operator '.'.  To read more about reference returns look <a target ="_blank" href= "http://stackoverflow.com/questions/2379859/in-c-what-does-mean-after-a-functions-return-type">here</a>.</p>
        
        <hr />
        <br />
        <a href="Cpp24.html">Previous</a>
        <span class = "next">
        <a href = "Cpp26.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  