<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>C Sharp Methods and Functions - .Net Framework</title>
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
<?php include('..//Includes//Left_dotNet.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>C Sharp Methods and Functions - .Net Framework</h1>

<!-- Parameters and Arguements -->
<h2>Methods and Functions</h2>

        <p>  A method can be void which means it doesn't return a value or it can be a string, int, object, etc. which means it returns a value consistent with its data type.
            
    <span class = "nl">We can also use classes to store our methods and variables.  However, if we do try to call a method or variable from another method such as main, or from another class then it needs to be public, unless it is contained in the same class or is inherited from a parent class. </p>

<em>Code:</em> 
<!-- Code -->
<pre class="code">
<span class="comments">//A void method</span>
<span class="highlight">public</span> void GetSome()
{
    i = 10; 
}

<span class="comments">//returning an integer</span>
<span class="highlight">public</span> int GetSomeNum()
{
    i = 11;
    return 0;
}

<span class="comments">//returning an object</span>
<span class="highlight">public</span> paramss GetSomeObj()
{
    return new paramss();
}</pre>
    
<br />
<hr />

<!-- Accessing methods/variables from other classes -->
<h3>Accessing methods/variables from other classes</h3>

        <p>If we want to use variables or methods from another class, we can access those methods by using a '.'(period/dot). Below, I will access the integer i from my paramss class.</p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
public class paramss
{
    public int <span class="highlight">i</span>;
}

public class Program
{
    public int x;
    public void GetSome(int i)
    {
        o.<span class="highlight">i</span> = 9;
    }
}</pre>
    
<br />
<hr />

<!-- Calling functions -->
<h3>Calling functions</h3>

        <p>Calling a function from a class requires you to instanciate the class first using the new variable.  Once the class is instanciated it is considered an object, using this object as a point of reference you can then call methods or functions from the class.  Realize, that any functions you call must contain the same amount of arguements equal to the number of parameters.</p>

<em>Code:</em>
<!-- Code  -->
<pre class="code">
public class Program
{
    <span class="comments">//<span class="highlight">One</span> parameter an 'int'</span>
    public void GetSome(int i)
    {
        i = 10;
    }
}

public class Program2
{
    <span class="comments">//Create an instance of Program class</span>
    <span class="comments">//Assign that instance to variable P</span>
    public Program P = new Program();
    
    public void Main()
    { 
        <span class="comments">//Use P variable to call function 'GetSome'
        </span>
        <span class="comments">//<span class="highlight">One</span> arguement '10'</span>
        P.GetSome(10);
    }
}</pre>
    
<br />
<hr />
    
<!-- Primitive Data type And Operators -->
<h3>Primitive Data type And Operators</h3>

        <p>There are a few primitive data types and operators in c#.  Primitive data types include: int, double, long, float, string, char, bool.  Operators include: +, -, *, /, =. There are also comparsion operators used for boolean values: ==, >, &lt;, =>, =&lt;, !=. </p>

<!-- Arrays and Lists -->
<h2>Arrays and Lists</h2>

        <p>Arrays and Lists, are two forms of collections in c#.  An array can hold a number of values with place holders starting at magic number 0.  A list can contain a variety of strings, integers, objects, etc.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
<span class="comments">//Declaring an int array of five numbers</span>
int[] numbers = new int[5] { 1, 2, 3, 4, 5};

<span class="comments">//Assigning variable 'x' to the third element in the array</span>
int x = numbers[2];

<span class="comments">//Declaring a list of five numbers</span>
List&lt;int> digits = new List&lt;int> { 1, 2, 3, 4, 5};

<span class="comments">//Assigning variable 'a' to the third element in the list</span>
int a = digits[2];</pre>
    
<br />
<hr />

<!-- Boxing and UnBoxing -->
<h3>Boxing and UnBoxing</h3>

    <p>Boxing is when you create a variable which refers to another variable which contains a value.  In this situation, the variable has become boxed because, it is now a reference type and we can longer perform operations with it.
        
<span class = "nl">In order to perform an operation we need to unbox the objects and one of the ways we can do that is by casting them.</span></p>

<em>Code:</em>
<!-- code -->
<pre class ="code">
int i = 123;
<span class="comments">// The following line boxes i.</span>
object o = i;

o = 123;
<span class="comments">// unboxing </span>
i = (int)o; </pre>
        
<br />
<hr />
    
<!-- Structures -->
<h2>Structures</h2>

     <p>Structures can also store variables and methods like classes.  However, the two differ because a class is a reference type whereas a structure is a value type.  References are stored on the heap and values are stored on the stack, once classes are done being used there is a lot of excess memory be used to store those references. 
         
    <span class = "nl">Another difference between the two is that reference types will copy the reference and not the value (unless we specify otherwise by using 'ref' or 'out' parameters). When creating a structure which is a value type, the value will be passed instead of the reference.  This can be convenient due to not having to unbox any objects afterwards. However, be careful when using structures as variables cannot be initialized inside a structure.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
public struct MyStruct
{
    public int i;
}

public static void Main()
{
    MyStruct ms;
    ms.i = 10;
} </pre>

<br />
<hr />
    
<!-- Interface -->
<h2>Interface</h2>

    <p>An interface is a place to store functions or methods.  It cannot hold fields or handle access modifiers.</p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
public interface Car
{
    void Start();
}</pre>

<!-- Inheritance -->
<h2>Inheritance</h2>

    <p>Inheritance is when you declare a class and you want another class to inherit the methods or variables of the parent class.</p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
public class Car
{
    void Start();
}

public class ChildCar : Car
{
    <span class="comments">// inherits the start function from class Car</span>
}</pre>

<br />
<hr />
    
<!-- String functions -->
<h3>String functions</h3>

      <p>Instance functions vs Structure functions. Some System functions are stored in a structure (System.int32) where as instance functions are stored in a class (System.string).  The main difference is that you don't have to instanciate an int function, whereas with a class function they require instanciation due to their functions being stored in a class.
          
          <span class = "nl">When we use a string function such as 'IndexOf', we have already instanced it by using a string before the function. </span>
        
          <span class = "nl">System.String.IndexOf finds the finds the first instance of the character inside a string. System.String.Format, formats the string based on variables input.</span></p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
int i = 10;
int j = 3;

<span class="comments">//formats the string</span>
string s = System.String.Format("{0} = variable i, {1} = variable j", i, j);

<span class="comments">//checks to see if a string is null or empty</span>
if (String.IsNullOrEmpty(s))
{
}
</pre>

<br />
<hr />    
    
<!-- String Escape Sequences -->
<h3>String Escape Sequences</h3>

        <p>A string escape sequence is a way of writing characters inside double quotes and not have those characters be mistaken for strings, in otherwords they can escape the string quotes. </p>

      <ul>
          <li>@, declares everything in quotes a string</li>
          <li>\n, new line</li>
          <li>\t, new tab</li>
          <li>\', single quote</li>
          <li>\\, forward slash</li>
          <li>\0, null</li>
      </ul>

<br />
<hr />
    
<!-- Enumerations -->
<h2>Enumerations</h2>

        <p>An enumeration is a way to store create your own data type.  An enum  is useful for storing data and is similar to other collections such as Lists and Arrays.</p>

<em>Code:</em>
<!-- Code -->
<pre class ="code">
<span class ="comments">// A collection (each day equal to a number starting with zero)</span>
enum Days {Sat, Sun, Mon, Tue, Wed, Thu, Fri};</pre>

<hr />
<br />
<a href="dotNet.html">Previous</a><span class="next"><a href="dotNet2.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>  