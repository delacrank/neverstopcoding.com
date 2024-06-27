<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Member Functions - C++ Programming</title>
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
    
<h1>Member Functions - C++ Development</h1>
    
<!-- Working with Classes-->    
<h2>Working with Classes</h2>
    
    <p>   In our last section we talked about creating a class and implementing it into the main function by creating instances of that class and passing variables using the '.' (FavoritePen.InkColor = blue;).  In this section we are going to talk about seperating our member functions from our class, so that our class definition doesn't get too cluttered.   </p>
    
<!-- Seperating member functions -->
<h3>Seperating member functions</h3>
    
    <p>    Remeber when we used function prototypes when dividing our work into source files.  We created a seperate source file for each function and then linked them to them main function using a function prototype.    </p>    
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments"> /* Pen Class Header */</span> 
#ifndef PEN_H_INCLUDED 
#define PEN_H_INCLUDED 
using namespace std; 
    
enum Color 
{ 
    blue, 
    red,
    black, 
    clear     
}; 
    
enum PenStyle 
{
    ballpoint, 
    felt_tip,
    fountain_pen
};
    
class Pen 
{ 
public: 
    Color InkColor; 
    Color ShellColor; 
    Color CapColor; 
    PenStyle Style; 
    float Length; 
    string Brand;
    int InkLevelPercent; 
    
    void write_on_paper(string words); 
    void break_in_half();
    void run_out_of_ink(); 
};
    
#endif // PEN_H_INCLUDED</pre>
    
<p>Notice how we added the function prototypes toward the end of the class when we declared our variables. Let's create the functions in the next example below. </p>    

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments"> /* Pen Class functions */</span>
#include &#60;iostream> 
#include "Pen.h"     
using namespace std; 
    
void Pen::write_on_paper(string words) 
{ 
    if (InkLevelPercent &#60;= 0) 
    { 
        cout &lt;&lt; "Oops! Out of ink!" &lt;&lt; endl; 
    } else {
        cout &lt;&lt; words &lt;&lt; endl; 
        InkLevelPercent = InkLevelPercent - words.length(); 
    } 
} 
    
void Pen::break_in_half() 
{ 
    InkLevelPercent = InkLevelPercent / 2; 
    Length = Length / 2.0; 
} 
        
void Pen::run_out_of_ink() 
{
    InkLevelPercent = 0; 
} </pre>

<p>So, something is different, we wrote: Pen::write_on_paper() (className::functionName()), instead of just the function name.  When we call a function from a class we need to use something called a scope resolution operator '::', similar when we used the '.' to pass variables from a class (only this time we are passing functions from the class instead of variables). </p>

<!-- Using public and private -->
<h3>Public vs Private functions/variables</h3>
    
    <p>    In our next example, we are going to create a class called oven.  Only this time, we are going to pass some private functions as well, the reason being is that sometimes we need private functions which users can't access but are necessary for handling certain problems or making changes to the backend of a program. </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream>     
using namespace std; 
    
class Oven
{ 
private: 
    void TurnOnHeatingElement(); 
    void TurnOffHeatingElement(); 
    
public: 
    void Bake(int Temperature);
}; 
    
void Oven::TurnOnHeatingElement() 
{
    cout &lt;&lt; "Heating element is now ON! Be careful!" &lt;&lt; endl; 
}
    
void Oven::TurnOffHeatingElement() 
{ 
    cout &lt;&lt; "Heating element is now off. Relax!" &lt;&lt; endl; 
} 
    
void Oven::Bake(int Temperature)
{
    TurnOnHeatingElement(); 
    cout &lt;&lt; "Baking!" &lt;&lt; endl;
    TurnOffHeatingElement(); 
} 
    
int main()
{
    Oven fred;
    fred.Bake(875); 
    return 0;
}</pre>
    
<p>Above is a simple yet effecient manner of representing the differences between public and private functions.  You don't want people playing with turning the oven on and off, but they still need to bake things.  So, you provide them with a resource that allows them to send data into a function which will turn the oven on and off for them.   by making the controls which turn the oven on and off private.    By making the controls which turn the oven on and off private, reduces the chances of users burning food or themselves. </p>    
    
<hr />
<br />
<a href = "C++28.html">Previous page</a>
<span class ="next">
<a href = "C++30.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>