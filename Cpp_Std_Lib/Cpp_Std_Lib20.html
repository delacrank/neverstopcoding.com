<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Smart pointers - Cpp</title>
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
<?php include('..//Includes//Left_Cpp_Std_Lib.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Smart pointers - Cpp Standard Library</h1>
        
        <h2>Smart pointers</h2>
            
            <p>There are two keywords which we haven't talked about yet.  'New' and 'Delete', one of them stores memory for an object, the other one removes that memory.  When we use the 'new' keyword we are asking our program to set aside memory for an object, this memory location will be referred to as the heap.
        
    <span class = "nl">Our computer can only allocate a certain amount of memory on the heap before that location is exhausted.  To avoid this problem we will delete objects stored on the heap once we are done using them.  When we don't delete objects stored on the heap  it is referred to as a memory leak.</span>
        
    <span class = "nl">The act of deleting dynamically allocated memory is called 'garbage collection'.  The 'new' keyword creates an object which is stored on the heap, however in order to access that object we require a pointer.  The pointer will contain the address of the object which is stored on the heap, yet if we delete the object then the pointer is referred to as a dangling pointer.  Therefore, we need to assign the pointer to a null value or zero.</span>
                
    <span class ="nl">Using the standard template library allows us to access a library called 'memory'. This is a library can be used in order to avoid this tedious process of handling garbage collection which is the result of using the 'new' keyword.  The 'memory' header file uses smart pointers which are templates (similar vector or list), are templates which are automatically removed from the stack once we are done using them.</span>
        
    <span class = "nl">In order to understand smart pointers let's first understand what a raw pointer is and why we would use it.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create a class named object</span>
    class Object
    {
    public:
        int x;
        int y;
    };
    
    int main()
    {
        <span class = "comments">// Set a pointer to that class</span>
        Object *P = new Object();
        P->x = 5;
        P->y = 10;
        <span class = "comments">// Remove that pointer from the heap</span>
        delete P;
        
        std::cout &lt;&lt; P->x &lt;&lt; std::endl;
        std::cout &lt;&lt; P->y &lt;&lt; std::endl;
    }</pre>
        
    <p><span class = "nl">There are three forms of smart pointers which we can use, 'shared_pointer', 'unqiue_pointer' and 'weak_pointer'.  The first one we are going to look at is the 'shared_pointer'.</span></p>  
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Remember to include the 'memory' header</span>
    class Object
    {
    public:
        int x;
        int y;
    };
    
    int main()
    {
        <span class = "comments">// Set a shared pointer to that class</span>
        std::shared_ptr&lt;Object> P = std::make_shared&lt;Object>(Object());
        P->x = 5;
        P->y = 10;
        
        std::cout &lt;&lt; P->x &lt;&lt; std::endl;
        std::cout &lt;&lt; P->y &lt;&lt; std::endl;
    }</pre>
               
        <p>Let's look at other examples of using this syntax, both in the raw form and in using the template.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Raw pointer way</span>
    int *num = new int(5);
    
    std::cout &lt;&lt; *num &lt;&lt; std::endl;
    
    <span class = "comments">// Smart Pointer way</span>
    std::shared_ptr&lt;int> num2 = std::make_shared&lt;int>(10);
    
    std::cout &lt;&lt; *num2 &lt;&lt; std::endl;
    
    <span class = "comments">// Smart Pointer without using the make_shared function</span>
    std::shared_ptr&lt;int> num3(new int(15));
    
    std::cout &lt;&lt; *num3 &lt;&lt; std::endl;</pre>
        
        <p>The 'shared_ptr' template differs from the 'unique_ptr' in that it can hold multiple pointers to the same object.  We can use the 'count()' function to check the amount of pointers which refer to the same object.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::shared_ptr&lt;int> p = std::make_shared&lt;int>(10);
    
    std::shared_ptr&lt;int> q (p);
    std::shared_ptr&lt;int> y (p);
    std::shared_ptr&lt;int> z (p);
    
    <span class="comments">// Count the amount of objects to which p refers to</span>
    std::cout &lt;&lt; p.use_count() &lt;&lt; std::endl;
    
    <span class="comments">// Returns a true if the amount of objects is one</span>
    std::cout &lt;&lt; p.unique() &lt;&lt; std::endl;
        
     <span class="comments">// Returns the value of pointer</span>
    std::cout &lt;&lt; *p.get() &lt;&lt; std::endl;</pre>
        
        <p>However, if we want to reduce the amount of pointers which refer to a certain object, we can do this by using the reset function.  Let's see how this would work.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::shared_ptr&lt;int> p = std::make_shared&lt;int>(10);
    
    std::shared_ptr&lt;int> q (p);
    std::shared_ptr&lt;int> y (p);
    std::shared_ptr&lt;int> z (p);
    
    <span class="comments">// Count the amount of objects to which p refers to</span>
    std::cout &lt;&lt; p.use_count() &lt;&lt; std::endl;
    
    <span class="comments">// Reset the pointers which refer to our object</span>
    p.reset();
    
    <span class="comments">// Count the amount of objects to which p refers to</span>
    std::cout &lt;&lt; p.use_count() &lt;&lt; std::endl;</pre>
         
        <hr />
        <br />
        <a href="Cpp_Std_Lib19.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib21.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  