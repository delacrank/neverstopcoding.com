<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>ArrayList - Java Programming</title>
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

    <h1>ArrayList - Java Programming</h1>
    
    <h2>ArrayList</h2>
    
        <p>An Arraylist is a container similar to the way 'vector' is a container for holding objects or primitive types in c++.  An array list is good because the size can be changed constantly, unlike a fixed array which remains static at runtime.
    
    <span class = "nl">In order to initialize an Arraylist, call it and then use the 'add' method to start adding objects to it.  The Arraylist will grow in size for each new object added or you can simply allocate space beforehand by passing the amount you want to have in the paranethese or by calling the 'ensureCapacity()' method.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Be sure to import 'java.util.ArrayList'</span>
    ArrayList&lt;Employee> emp = new ArrayList&lt;Employee>();
    
    <span class = "comments">// We can add employee's using the 'add' method</span>
    emp.add(new Employee("John", 30000));
    emp.add(new Employee("Susan", 60000));
    emp.add(new Employee("Billy", 40000));
    
    for(Employee e : emp)
    {
        System.out.println(e);
    }</pre>
    
        <p>To check the size of the ArrayList, to retrieve an element, or to change an element you must call the 'size', 'get' or 'set' methods.  Let's look at some examples of this. We can also use the 'remove' method to delete an existing element.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Reserve space for ten elements</span>
    <span class = "comments">// We don't need to pass the 'objects' name twice</span>
    ArrayList&lt;Employee> emp = new ArrayList&lt;>(10);
    
    emp.add(new Employee("Julia", 20000));
    emp.add(new Employee("Jason", 35000));
    emp.add(new Employee("Randy", 65000));
    
    System.out.println("Emp Size: " + emp.size());
    
    <span class = "comments">// We can retrieve the results using the get method</span>
    System.out.println("emp.get(0): " + emp.get(0));
    
    <span class = "comments">// Let's change Julia's Salary</span>
    emp.set(0, new Employee("Julia", 40000));
    
    <span class = "comments">// Remove the last employee</span>
    emp.remove(2);
    
    int i = 0;
    
    <span class ="comments">// Print the list, let's see the changes made</span>
    for(Employee e : emp)
    {
        System.out.println(i + " " + e);
        ++i;
    }</pre>
    
        <p>In the code above we created an ArrayList with 10 reserved spaces.  Then we added 3 employee objects and initialized those objects.
    
    <span class = "nl">I could display the size of the allocated memory using the 'size' method.  Then I used the 'get' method to call the values of the first element in our ArrayList.</span>
    
    <span class = "nl">To show how the 'set' method works, I changed the values of that first element in my List.  Finally, I removed the third element and displayed the list again to see the changes made to it.</span></p>
    
    <hr />
    
    <!-- Wrapper Classes -->
    <h3>Wrapper Classes</h3>
    
        <p>There are times when we want to add primitive types to an ArrayList, but java doesn't allow this.  Only an array can hold an 'int' or a 'double', ArrayLists are reserved for only objects.
    
    <span class = "nl">In order to store primitive types in classes Java has several 'Wrapper Classes' for our types, they are called: Integer, Long, Float, Double, Short and Byte.  This is also called 'boxing'. When we take primitive type and cast it to object. </span>
    
    <span class = "nl">If we want to use these objects to perform computations we need to 'unbox' them, or otherwise cast them back to being a primitive type.</span>
    
    <span class = "nl">Let's look at an example of this.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ArrayList&lt;Integer> list = new ArrayList&lt;>;
    
    for(int i = 0; i &lt; 10; ++i)
    {
        list.add(i);
    }
    
    for(int i : list)
        System.out.println(i);</pre>
    
        <p>Even though the list looks like it's adding primitive integers, its actually autoboxing the number in every call to the add method. </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// list.add(Integer.valueOf(3));</span>
    list.add(3);</pre>
    
        <p>So, now we know what autoboxing is, when a call made to a method converts the an unboxed primitive type into an object. Let's see what an example of autoboxing.
    
    <span class  ="nl">Perhaps if we for example make this same call using the 'get' method to display an integer from our list.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// list.get(3).intValue()</span>
    list.get(3);</pre>
    
    <p>In order to return the primitive value our compiler has to call the 'intValue()' method, similar to calling the 'toString()' method when trying to return a String from an object.
    
    <span class = "nl">Also, note that when trying to compare two objects using the equality operator '==', the Wrapper classes won't compare the values, instead they will compare the 'addresses' of those objects.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    Integer a = 1000;
    Integer b = 1000;

    System.out.println(a == b);</pre>
    
        <p>One final thing to note, on top of being able to return the value of an object using 'valueOf()' method, these wrapper classes can also convert a String to an Integer, Float, Double, etc. This is accomplished using the parseInt(), or parseDouble(), etc. calls.
    
    <span class = "nl">Let's look at another example before ending this section.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    String s = "5";
    
    <span class = "comments">// Convert a string using the parseInt() method</span>
    int x = Integer.parseInt(s);

    <span class = "comments">// These numbers should add if it has worked correctly</span>
    System.out.println(x + 5);
    
    <span class = "comments">// Even if I call the method inside the println method it should work</span>
    System.out.println(Integer.parseInt(s) + 5);</pre>
    
    
    <br />
    <hr />
    
    <a href="Java14.php">Previous</a>
      <span class = "next"><a href="Java16.php">Next</span></a>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
