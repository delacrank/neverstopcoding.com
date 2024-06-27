<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Arrays - Java Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">

</head>
<body>

    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Java.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

    <h1>Arrays - Java Programming</h1>
    
    <h2>Arrays</h2>
    
        <p>There are several ways to declare an array in java. First its important to know that if we are going to declare an array we need to allocate space for the amount of elements we want to use in that array.  
    
    <span class = "nl">Each array will be proportional to the type of data its holding and the amount of elements in it. So if it's an array while holds integers and there are ten integers in that array, then it should probably have space for 40 bytes of memory if each int requires 4 bytes. </span>
    
    <span class = "nl">Let's look at an example of declaring an array of ten integer elements and then initializing those elements with a for loop.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    class Array {
        public static void main(String[] args) {
            <span class = "comments">// Declare an array with ten empty integers</span>
            int[] array = new int[10];
            
            <span class= "comments">// Initialize those elements with numbers 1 through ten</span>
            for(int i = 0; i &lt; 10; i++)
            {
                array[i] = i;
                <span class= "comments">// Display those values in the console</span>
                System.out.print(i + " ");
            }
            System.out.println();
        }
    }</pre>
    
    <p>We can also initialize those elements manually using an initialization list. That consists of just openning and closing brackets and placing the values inbetween a delimiter or comma flag.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    class Array {
        public static void main(String[] args) {
            <span class = "comments">// Initialize an array of ten integers</span>
            int[] array = { 0, 1, 2, 3, 4, 5, 6, 7, 8,  9};
            
            <span class= "comments">// Initialize those elements with numbers 1 through ten</span>
            for(int i = 0; i &lt; 10; i++)
            {
                System.out.print(i + " ");
            }
            System.out.println();
        }
    }</pre>
    
    <p>Let's try to create another array this time consisting of strings and this time let's create a for loop that allows us to insert values into each array using the scanner object.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    import java.util.Arrays;
    import java.util.Scanner;
    
    class StringArray {
        public static void main(String[] args) {
            <span class = "comments">// Create scanner object</span>
            Scanner input = new Scanner(System.in);
            <span class = "comments">// Prompt the user</span>
            System.out.println("Enter the number of elements for our array");
            <span class = "comments">// Insert number here</span>
            int x = input.nextInt();
            String[] array = new String[x];
            
            <span class = "comments">// Insert strings here</span>
            for(int i = 0; i &lt; x; i++)
            {
                System.out.println("Enter a string for our string array");
                array[i] = input.next();
            }
            
            <span class = "comments">// Display the results of our array</span>
            System.out.println("Here are our strings");
            for(int i = 0; i &lt; array.length; i++)
            {
                System.out.println(i + ": " + array[i]);
            }
        }
    }</pre>
    
    <p>Let's see if there is a less error prone way to iterate through every item in this array. Maybe if we use the 'for each' loop. It is similar to the 'for each' loop in both C# and Php, or the range loop in c++11, c++14.
    
    <span class = "nl">Let's look at some syntax.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// Array Initialization</span>
    int[] array = { 1, 2, 3, 4, 5};
    
    <span class = "comments">// For each loop</span>
    for(int x : array)
        System.out.println("Element: " + x);</pre>
    
    <hr />
    
    <!-- array functions -->
    <h3>Array Functions</h3>
    
    <p>Let's look at some of the functions of an array, some of them allow us to sort, copy, fill, print out the elements of an array.</p>
    
    <ul id = "li">
        <li><b>toString(): </b> Prints out the elements of an array.</li>
        <li><b>copyOf(): </b> Copies the elements from one array into another, must include the length in second argument.</li>
        <li><b>copyOfRange(): </b> Same thing only you can specify from where you begin and end the copy.</li>
        <li><b>sort():</b> Sorts the array from lowest the highest value, works for strings as well.</li>
        <li><b>binarySearch(): </b> Finds an element specified in the second argument. Uses the binary search algorithm to find it.</li>
        <li><b>fill(): </b> Fills the array with all elements of the type designated in second argument.</li>
    </ul>
    
    <p>Let's look at how we would use these function. In order to use any of them we must first import the 'Arrays' library, 'import.java.util.Arrays;'.  Then you can call the function by accessing it through the Arrays object.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    import java.util.Arrays;
    
    class ArrayFuncs {
        public static void main(String[] args) {
            int[] array = { 3, 4, 2, 10, 121, 301, 9, 13 };
            
            <span class = "comments">// Sort the array</span>
            Arrays.sort(array);
            
            <span class = "comments">// Print out the elements in order</span>
            for(int x : array)
            {
                System.out.print(x + " ");
            }
            
            System.out.println();
            
            int[] array1 = new int[10];
            <span class = "comments">// Fill this array with the number 13</span>
            Arrays.fill(array1, 13);
            
            <span class = "comments">// Print out the elements in order</span>
            System.out.println(Arrays.toString(array1));
            
            <span class = "comments">// Let's declare a new array</span>
            int array2[] = new int[10];
            
            <span class = "comments">// Copy elements from array1 into that new array</span>
            array2 = Arrays.copyOf(array1);
            
            System.out.println("Array 2 elements");
            <span class = "comments">// Print out the elements of array2</span>
            for(int a : array2)
                System.out.print(a + " ");
                
            System.out.println();
        }
    }</pre>
    
    <hr />
    
    <!-- Multidimension Arrays -->
    <h3>Multidimension Arrays</h3>
    
        <p>I suppose we can breifly go over multidimensional arrays. A multidimensional array works by grouping batches of arrays together. 
            
        <span class = "nl">Suppose you wanted to create a data structure to hold every student the school, we would need to organize this information. We could do this using an multidimensional array by creating an index for every class, and then places those students in each class. Basically, you would have an array for every class.
            
        <span class = "nl">Let's look at an example.</span></p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    String[][] students = {
        {"june", "jim", "john", "judy"},
        {"anna", "alison", "ashley", "audrey"},
        {"doug", "dennis", "daniel", "daemon"}
    };
    
    <span class = "comments">// Display the contents</span>
    <span class = "comments">// Using a for loop</span>
    for(int i = 0; i &lt; students.length; ++i) 
    {
        System.out.println("Class: " + i);
        for(int j = 0; j &lt; students[i].length; ++j)
            System.out.println("Student Name: " + students[i][j]);
    }
    
    int i = 0;
    <span class = "comments">// Using a for each loop</span>
    for(String[] s : students)
    {
        System.out.println("")
        for(String j : s)
        {
            System.out.println(j);
        }
    }
    
    <span class = "comments">// Using the Array function</span>
    System.out.println(Arrays.deepToString(students));
    </pre>
    
    
    <br />
    <hr />
    
<a href="Java5.html">Previous</a> 
<span class = "next"><a href="Java7.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>