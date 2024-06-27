<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Reading input - Cpp Programming</title>
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

        <h1>Reading input - Cpp Development</h1>
        
        <h2>Reading input</h2>
        
        <p>In the last section we learned how to use a prepressor directive which included functions outside of our main function.  This allowed us to use a standard function called 'cout' or console output to print the words, 'hello, world'. 
        
        <span class = "nl">In this section we will talk about reading from the console using our input stream and understanding what a manipulator is.</span>
              </p>
        
        <hr />
        
        <!-- variables -->
        <h3>Variables</h3>
        
            <p>Before we decide to use an operand like cin to read from our console, we must first understand how we would store this data.  There is no point in reading information we wouldn't be able to use later, so in order to accomplish this we can allocate space on our stack using something called a variable.
        
        <span class="nl">However, in order to understand what a variable is we have to understand that there a different types of variables for different forms of data.  Some data is large and requires more memory, we can't expect our program to store large chunks of data without describing first how much memory will be required to store this information.</span>
                
        <span class="nl">Furthermore, we can't expect our program to understand how to store the data without describe what type of data it's storing. Let's look at an example below of declaring a variable in cpp.</span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main(){
        int k;
        return 0;
    }  </pre>
        
    <p>Alright, so in this example we defined a variable called k which is an integer.  An integer can hold up to four bytes of information, to find out how many bytes can be stored in a variable you can use the sizeof() funciton. Let's look at the results of our inquiry.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main(){
        int k;
        std::cout &lt;&lt; sizeof(k) &lt;&lt; "\n";
        return 0;
    }  </pre>    
        
    <hr />
        
    <!-- Cin -->
    <h3>Using Cin</h3>

        <p>Now that we understand what a variable is we can use it to store data from out console.  Let's write a program which will take two integers and display the values of those inputs to the output.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main(){
        int k, j;
        std::cin >> k >> j;
        std::cout &lt;&lt; "k is equal to: " &lt;&lt; k &lt;&lt; "\nJ is equal to: " &lt;&lt; j &lt;&lt; std::endl;
        return 0;
    }  </pre>  
        
    <p>You will notice the console is blank once we execute the program.  This is because it is waiting for a value to be input into integer k and integer j.  It will be able to tell the difference between the two variables once you use a space for a blank character or press enter for a newline character.
        
    <span class = "nl">Let's also look into another std operand we used called 'endl'.  'endl' is an operand which clears the buffer and sends the console to a newline. This is important if you want to clear the buffer from either our input stream or outstream.  'endl' is what you would call a manipulator because its purpose is to manipulate either the input or output stream.</span>
        </p>    
        
    <hr />
        
    <h3>Using while condition</h3>
        
        <p>The while condition is a control statement is controls the flow of the program.  It will check to see if an expression is true before executing the code within the code block underneat it. In the next example we will use it to increment a value by one and add it to a sum.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main() {
    int sum = 0, val = 1;
    
        while (val &lt;= 10) {
            sum += val;
            ++val;
        }
        std::cout &lt;&lt; "the value of sum is " &lt;&lt; sum &lt;&lt; std::endl;
        return 0;        
    } </pre>
        
        <p>Based on the program above, can you determine the output?  If we step through the code line by line we might have a better understanding of how it works.
        
        <span class = "nl">The first two variables as initialized to zero and one. We have our while statement to check if val variable is equal to or less than the number ten.  Previously we assigned it to the number one so it is true and the program will execute the code in the code block below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    sum += val;
    
    <span class = "comments">// Is the same as writing</span>
    sum = sum + val;
    
    <span class = "comments">// Check if val is less than or equal to ten</span>
    while(val &lt;= 10)
    
    ++val;
    
    <span class = "comments">// Is the same as writing</span>
    val = val + 1;</pre>
           
        <p>
        <span class="nl">The statement takes the variable sum and sets it equal to the value of val one, plus the value of sum which is zero. So that is just 'sum = 0 + 1'.  Following this we increment the value of val by one 'val = val (1) + 1', so now it's equal to two and sum is equal to one.</span>
            
        <span class="nl">First iteration:<br />
            sum = 0, val = 1; <br />
            sum = 0 + 1;<br />
            val = val + 1;</span>
            
        <span class="nl">Let's look at next iteration of our program.  We now know that the value of sum is one and the value of val is equal to two. So if we repeat what we just did we should recieve a new set of expressions.</span>
            
            <span class="nl">Second iteration:<br />
            sum = 1, val = 2; <br />
            sum = 1 + 2;<br />
            val = val + 1;</span>
            
        <span class="nl">Let's see what the data would look like if I organized it into a table.</span>
              </p>
        
        <table border = "solid" style = "margin-left: 1em; border-collapse: collapse">
        <tr>
        <td>&emsp;SUM&emsp;</td>
        <td>&emsp;VAL&emsp;</td> 
        <td>&emsp;SUM + VAL&emsp;</td> 
        <td>&emsp;++VAL&emsp;</td> 
        </tr>
        <tr>
        <td>0</td>   
        <td>1</td> 
        <td>1</td> 
        <td>2</td> 
        </tr>
         <tr>
        <td>1</td>   
        <td>2</td> 
        <td>3</td> 
        <td>3</td> 
        </tr>
         <tr>
        <td>3</td>   
        <td>3</td> 
        <td>6</td> 
        <td>4</td> 
        </tr>
         <tr>
        <td>6</td>   
        <td>4</td> 
        <td>10</td> 
        <td>5</td> 
        </tr>
         <tr>
        <td>10</td>   
        <td>5</td> 
        <td>15</td> 
        <td>6</td> 
        </tr>
         <tr>
        <td>15</td>   
        <td>6</td> 
        <td>21</td> 
        <td>7</td> 
        </tr>
         <tr>
        <td>21</td>   
        <td>7</td> 
        <td>28</td> 
        <td>8</td> 
        </tr>
         <tr>
        <td>28</td>   
        <td>8</td> 
        <td>36</td> 
        <td>9</td> 
        </tr>
         <tr>
        <td>36</td>   
        <td>9</td> 
        <td>45</td> 
        <td>10</td> 
        </tr>
        <tr>
         <td>45</td>   
        <td>10</td> 
        <td>55</td> 
        <td>11</td> 
        </tr>
        </table>
        
        <p>It's pretty hard to figure out of that math in your head especially if you are unfamilar with programming.  Eventually you get used to seeing algorithms and eventually you will be able to reconginze the output of a sequence of instructions having seen (or computed) it before.</p>
        
        <hr />        
        <br />
        <a href="Cpp1.html">Previous</a>
        <span class = "next">
        <a href = "Cpp3.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  