<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Introduction to Classes - C++ Development</title>
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
<?php include('..//Includes//Left_C++.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Introduction to Classes - C++ Development</h1>
    
<!-- Working with Classes-->    
<h2>Working with Classes</h2>
    
    <p>    What exactly is a class, and how can we use classes to create programs?  To start, let me say that in the first chapter we explained a class as being an abstract representation of something.  We also said that an object is a usable example of a class or an instance of a class.
    
        <span class = "nl"> So what does that all mean, and how can we use that explaination to create anything? Below, I am going to create a class for a pen.</span>  </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments"> /* Pen Class Header */</span>
#ifndef PEN_H_INCLUDED 
#define PEN_H_INCLUDED     
using namespace std; 
    
enum <span class ="highlight">Color</span> 
{ 
    blue,
    red, 
    black, 
    clear
};
    
enum <span class="highlight2">PenStyle</span> 
{ 
    ballpoint,
    felt_tip, 
    fountain_pen 
}; 
    
class <span class ="highlight3">Pen</span>
{
public:
    <span class ="highlight">Color</span> InkColor; 
    <span class ="highlight">Color</span> ShellColor; >
    <span class ="highlight">Color</span> CapColor; 
    <span class ="highlight2">PenStyle</span> Style; 
    float Length; 
    string Brand; 
    int InkLevelPercent;
        
    void write_on_paper(string words)
    {
        if (InkLevelPercent &#60;= 0)
        {
            cout &lt;&lt; "Oops! Out of ink!" &lt;&lt; endl;
        } else {
            cout &lt;&lt; words &lt;&lt; endl; 
            InkLevelPercent = InkLevelPercent - words.length(); 
        } 
    } 
    
    void break_in_half() 
    { 
        InkLevelPercent = InkLevelPercent / 2; 
        Length = Length / 2.0;
    } 
        
    void run_out_of_ink() 
    {
        InkLevelPercent = 0; 
    } 
}; 

#endif // PEN_H_INCLUDED</pre>
    
    <p>So this is just a header which is a description of the pen class. You must always end a class with a semicolon.  Before we go any further let me try to explain some of the new concepts we are using in this header.  This can become very complicated in a very short amount of time.
        
        <span class = "nl">Let's start with enum Color.  An enum is an enumeration, basically, it is allows you to create your own data type and then set a value to that type.</span>
        
        <span class = "nl">In the heading above we declared <span class ="highlight">'Color'</span> a data type, and then we gave <span class ="highlight">'Color'</span> four possible values (blue, red, black and clear).<br /><br />Then we declared another enum <span class ="highlight2">'PenStyle'</span> and gave this data type three possible values (ballpoint, felt_tip and fountain_pen).</span>
        
    <span class = "nl">After these enum declarations we have eight possible data types to work with: string, int, double, float, bool, char, Color and PenStyle.  I have highlighted our new data types for you. 
        
        <span class = "nl">In the header we declared three variables as the <span class ="highlight">'Color'</span> type (InkColor, ShellColor, CapColor) and one variable as the <span class ="highlight2">'PenStyle'</span> type (Style).  Pay attention because, when we create our main function, we will be using these variables with the values in the curly braces for our enum datatypes.</span>
        
        <span class = "nl">Now, let's move on to the actual class itself <span class ="highlight3">'Pen'</span>.  We declare the member variables of this class 'public' and then we proceed to name our variables.  I gave three names to the datatype <span class ="highlight">'Color'</span>, and one name to the datatype <span class ="highlight2">'PenStyle'</span> notice it's highlighted in red and purple respectively.  These names are now considered variables and their values have already been listed above in our header under our enum curly braces.</span>
        
        <span class = "nl">Below, we are going to begin by creating two objects or instances of the Pen class.</span></p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments"> /* Pen Class Main Function */</span>
#include &#60;iostream>
#include "Pen.h" 
using namespace std; 

int main() 
{ 
    <span class ="highlight3">Pen</span> FavoritePen;
        
    <span class ="highlight3">FavoritePen</span>.<span class ="highlight">InkColor</span> = blue;
    <span class ="highlight3">FavoritePen</span>.<span class ="highlight">ShellColor</span> = clear; 
    <span class ="highlight3">FavoritePen</span>.<span class ="highlight">CapColor</span> = black; 
    <span class ="highlight3">FavoritePen</span>.<span class ="highlight2">Style</span> = ballpoint; 
    FavoritePen.Length = 6.0; 
    FavoritePen.Brand = "Pilot"; 
    FavoritePen.InkLevelPercent = 90; 
    
    <span class ="highlight3">Pen</span> WorsePen;
        
    <span class ="highlight3">WorsePen</span>.<span class ="highlight">InkColor</span> = blue; 
    <span class ="highlight3">WorsePen</span>.<span class ="highlight">ShellColor</span> = red; 
    <span class ="highlight3">WorsePen</span>.<span class ="highlight">CapColor</span> = black; 
    <span class ="highlight3">WorsePen</span>.<span class ="highlight2">Style</span>  = felt_tip; 
    WorsePen.Length = 3.5; 
    WorsePen.Brand = "Acme Special"; 
    WorsePen.InkLevelPercent = 100; 

    cout &lt;&lt; "This is my favorite pen" &lt;&lt; endl; 
    cout &lt;&lt; "Color: " &lt;&lt; FavoritePen.<span class ="highlight">InkColor</span> &lt;&lt; endl;
    cout &lt;&lt; "Brand: " &lt;&lt; FavoritePen.Brand &lt;&lt; endl; 
    cout &lt;&lt; "Ink Level: " &lt;&lt; FavoritePen.InkLevelPercent &lt;&lt; "%" &lt;&lt; endl; 
        
    FavoritePen.write_on_paper("Hello I am a pen"); 
    cout &lt;&lt; "InkLevel: " &lt;&lt; FavoritePen.InkLevelPercent &lt;&lt; "%" &lt;&lt; endl; 
        
    return 0; 
}</pre>

<p>  Okay, now let's take a look at the class we created.  Notice how we created two instances of the class <span class ="highlight3">'Pen'</span> (FavoritePen and WorsePen).  Also take note of the how we are writing our member variables, we use a captial for the varible name and then another capital to remind us of it's orgin (e.g., for FavoritePen we used a capital for Favorite and then another for the Pen class).  
    
    <span class = "nl">We did the same thing for our <span class ="highlight">'Color'</span> variables (e.g., InkColor recieved a capital for its name and another for its datatype).  This form of writing is also know as CamelCase, where you write a compound word or phrase so that each word in the phrase or word begins with a capital (example:  Power Point). There is another form of writing words called snake case which uses underscores (e.g, camel_case).</span>
    
    <span class = "nl">Now let's take a look at how we are able to access these member variables from our header.  Notice, that when we declared our instance of FavoritePen we were <u>only</u> able to use variables from our header file where the Pen class was stored.  However, accessing those variables requires another trick, we used a period (dot) such as the one which will finish this sentence.</span>
        
    <span class = "nl">So when we write: 'FavoritePen.InkColor = blue;', our compiler will check our Pen class to find InkColor along with its possible values.  Try and define FavoritePen.InkColor as any color other than the ones we used in our enum (red, blue, black, clear).  Did you get a compiler error, not declared in this scope? </span>
        
    <span class = "nl">Let's take a look at our other variables: Length (int), Brand (string) and InkLevelPercent (int).  These were also declared in our class but aren't restricted to using a fixed set of values, why?  Their datatypes haven't been declared using enumeration, so they can use <u>any</u> value a string or int could contain.</span></p>
 
<hr />
<br />
<a href = "C++27.html">Previous page</a>
<span class ="next">
<a href = "C++29.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>