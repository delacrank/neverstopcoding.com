<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>If, Else Statements - C++ Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type ="text/css">
    
td {
    text-align: center;
    width: 10em;
    height: 3em;
}
 
</style>
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
    
<h1>If, Else Statements - C++ Development</h1>
    
<!-- Directly C++ Program Flow -->
<h2>Directing your program flow</h2>
    
    <p>    We know how to use variables, operators, input and output.  Yet, all these tools allow us to simply do things in a linear fashion, once the code runs out the program is done.  What if we want to repeat steps or back track in our program, this is the concept of flow.</p>
    
<hr />    

<!-- if and else -->
<h3>IF and ELSE statements</h3>
    
    <p>  In the last section we talked about conditional operators and conditions.  IF and ELSE are used in conjuction with these conditional operators, they will help determine the flow of the program based on inputs by the user.
  
    <span class="nl">Below, is a very simply example of how we can use the if else statement.</span></p>

<!-- Example -->    
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main(){
    int x;
    cout &lt;&lt; "Type any number: ";
    cin >> x;
    if (x &lt; 10)
    {
        cout &lt;&lt; "Your number is less than 10" &lt;&lt; endl;
    } else {
        cout &lt;&lt; "Your number is greater than 10" &lt;&lt; endl;
    }
    return 0;
  }</pre>
    
    <p>  The program informs the user about the value of their number.  If these circumstances are true than write 'this', otherwise write 'that'.
        
    <span class="nl">Suppose we combined the if else statements to check if one condition wasn't true than check for this condition instead.  In the example below, we are going to check if our number is greater than 100, however if its not than we are still going to check to see if our number is greater than 10.  We can accomplish this by using an <strong>ELSE IF</strong> statement.</span> </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main()
{
    int x;
    cout &lt;&lt; "Type any number: ";
    cin >> x;
    if (x > 100)
    {
        cout &lt;&lt; "Your number is greater than 100." &lt;&lt; endl;
    } else if ( x > 10 ) {
        cout &lt;&lt; "Your number is greater than 10" &lt;&lt; endl;
    } else {
        cout &lt;&lt; "Your number is niether greater than 100 nor greater than 10." &lt;&lt; endl;
    }
    return 0;
}</pre>
    
<br />
<hr />

<!-- Logical operators -->
<h3>Using logical operators</h3>

    <p>   If you have ever taken a math course in logic then you will understand the concept of 'or' and 'and' and logical operators used to compare two seperate conditions.  In this section I will talk about two symbols '| |' and '&amp;&amp;' (ampersand ampersand), where '| |' refers to 'or' and '&amp;&amp;' refers to 'and'.

<span class="nl">   How do we use logical operators?  If we have two sets of conditions and we want to compare them in order to direct the flow of our program, we need to decide which logical operator to use.

    <span class="nl"> Let's say that one condition is the boy walks, and another condition is the dog walks.  However, in order to pass the condition, the boy gets paid allowance we need to compare the two conditions in order to ensure the proper outcome.  For this situation, we will use 'and'. The boy must be walking the dog in order to be paid an allowance.</span>

    <span class="nl"> However, if only one of two conditions is necessary then we use 'or'.  The boy can walk or dog can walk in order to get paid an allowance.  In this situation, it doesn't matter if the boy walks the dog or if we walks and the dog doesn't walk, or if the dog walks and the boy doesn't walk as long as one of them is walking (as long as one of the two conditions is true).</span>

    <span class="nl">  Below I will draw a truth table in order to better display the possibilities for the 'and' sequence, where the true false values will refer to whether or not he gets paid an allowance.</span>   </p>

<!-- Table1 -->
<caption>Condition to be true 'boy' get's paid allowance</caption>
<table border ="1">
   <tr>
        <th></th>
        <th>Boy</th>
        <th>Dog</th>
        <th>Boy and Dog</th>
        <th>Boy or Dog</th>
    </tr>

<tr>
    <td>Walks</td>
    <td>False</td>
    <td>False</td>
    <td><div style ="color: red">True</div></td>
    <td>False</td>
</tr>

<tr>
    <td>Doesn't Walk</td>
    <td>False</td>
    <td>False</td>
    <td>False</td>
    <td>False</td>
</tr>
</table>
<br />

    <p>
    Now, lets see what would happen if we passed the condition <strong>'or'</strong>.
    </p>

<!-- Table2 -->
<caption>Condition to be true 'boy' get's paid allowance</caption>
<table border ="1">
   <tr>
        <th></th>
        <th>Boy</th>
        <th>Dog</th>
        <th>Boy and Dog</th>
        <th>Boy or Dog</th>
    </tr>

<tr>
    <td>Walks</td>
    <td><div style ="color: red">True</div></td>
    <td><div style ="color: red">True</div></td>
    <td><div style ="color: red">True</div></td>
    <td><div style ="color: red">True</div></td>
</tr>

<tr>
    <td>Doesn't Walk</td>
    <td>False</td>
    <td>False</td>
    <td>False</td>
    <td>False</td>
</tr>
</table>

    <p>
    In the previous programs we could determine if our number was greater than ten, but we could not determine if our number was negative.  Using the logical operator ampersand ampersand we can now rule out any negative numbers by adding an additional condition to our if statement.
    </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main()
{
    int x;
    cout &lt;&lt; "Type any number: ";
    cin >> x;
    if (x &lt; 10 &amp;&amp; x > 0)
    {
        cout &lt;&lt; "Your number is less than 10, but greater than 0." &lt;&lt; endl;
    } else {
        cout &lt;&lt; "Your number is either greater than 10 or negative." &lt;&lt; endl;
    }
    return 0;
 }</pre>


    <p> This is a good example, now we can determine if our number is 1 - 9, before we were limited to only knowing whether or not our number was greater than 10.   </p>

<hr />
<br />

<a href = "C++10.html"> Previous page</a>
<span class = "next">
<a href = "C++12.html"> Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>