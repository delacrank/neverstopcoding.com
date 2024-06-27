<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Const in functions - Cpp Programming</title>
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

        <h1>Const in functions - Cpp Development</h1>
        
        <h2>Using const in functions</h3>
        
            <p>In this section we are going to write a function takes three parameters, the string variable, the character and a string::size_type object to hold its position in our character array. The job of this function is to locate a character and tell us where in the string this character is located.
        
        <span class ="nl">Let's look at this function below and try to understand how it works.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    #include &lt;string>

    using namespace std;
    
    <span class="comments">// Function prototype</span>
    string::size_type find_char(const string&amp;, char,
    string::size_type&amp;);

    int main()
    {
        string::size_type ctr = 0;
        string s("hello");
        <span class="comments">// Calling the function, let's find the position for character 'o'</span>
        cout &lt;&lt; "Char 'o' position in our string is: " &lt;&lt; find_char(s, 'o', ctr) &lt;&lt; endl;
        cout &lt;&lt; "Char 'o' occurs: " &lt;&lt; ctr &lt;&lt; " time(s)." &lt;&lt; endl;
    }

    <span class="comments">// Take three variables: const string ref, char, and size_type ref</span>
    string::size_type find_char(const string &amp;s, char c,
    string::size_type &amp;occurs)
    {
        <span class="comments">// Store the size of the string in variable</span>
        auto ret = s.size();
        occurs = 0;
        <span class="comments">// Increment our loop by 1 for every char in our string</span>
        for(decltype(ret) i = 0; i != s.size(); ++i) {
            <span class="comments">// If our string is equal to the character</span>
            if(s[i] == c) {
                <span class="comments">// If are size_type is equal to our string length </span>
                if(ret == s.size())
                    ret = i;
                ++occurs;
            }
        }
        return ret;
    }</pre>
        
    <p>Similar to before we create a function prototype to let main know of the function.  Next we proceed by defining a size_type variable to use as a parameter in our function.  From here we initialized the variable 's' to a string literal 'hello'.
        
        <span class="nl">Last in our main function we call the 'find_char' function to display the location of our character as well as displaying the amount of times that character has occured in our string.</span>
        
    <span class = "nl">Let's move on to understanding the find char function.  It takes 3 parameters: the string as a const reference, the character we wish to find as a char, and the size_type reference to see how many times our character occures in our character array.</span>
        
    <span class="nl">We define the type of function as a string::size_type function, a size_type can hold a very large number of elements as many as an unsigned long long I believe thats 8 bytes so 2^<sup>64</sup>.</span>
        
    <span class="nl">Which is good because we have no idea how many characters will be stored in our string and we wouldn't want to close data by using smaller data type. From this point we assigned a variable 'ret' equal to the length of our string (char array) and we also intiailize our occurs variable to zero cause we don't want it to store any garbage before running our loop.</span>
        
    <span class="nl">Our loop looks complicated but its actually simple, we take the data type from our ret variable which is 'string::size_type' and apply it to the variable i.  Then we set the loop to end once i is equal to the length of our string, finally we increment our variable by one for every char or element in our string.</span>
        
    <span class="nl">We write an if statement to check to see if any element being incremented by our variable is equal to the character passed by one of our parameters. If the character is equal to one of our elements then we check to see if our ret variable is equal to the length of our string.  This is to ensure that we are working with the write string, if the string length matches up to our ret variable then we can set our ret variable equal to the iteration which matched up our characters (the one in our argument and in our char array). </span>
        
    <span class="nl">Finally, we can return that number or iteration as well as the number of times that char occured in our string.</span>
          </p>
        
    <hr />    
        
        <!-- when not to use const -->
        <h3>When not to use Const Params</h3>
        
            <p>There are also times when using const is a bad idea, especially if we want to change some of the characteristics or elements of a container such as an array, string or vector.
        
    <span class = "nl">Say for example if we want to change the first char to a string from lower to uppercase.  Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    #include &lt;string>
    
    using namespace std;
    
    void upper(string&amp;);
    
    int main()
    {
        string s("hello");
        
        upper(s);
        
        cout &lt;&lt; s &lt;&lt; endl;
    }
    
    void upper(string &amp;x)
    {
        x[0] = toupper(x[0]);
    }</pre>    
        
        <p>In the example above we didn't want to use a const because if we changed the first letter to uppercase it would remain lowercase. You just have to becareful when doing this because we cannot pass const values into a non-const function.
        
    <span class = "nl">There is a way, if we use a cast_const to convert the data type, but that isn't recommended way of coding as it can lead to more issues then solutions.</span>
          </p>
    
        
        <hr />
        <br />
        <a href="Cpp22.html">Previous</a>
        <span class = "next">
        <a href = "Cpp24.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  