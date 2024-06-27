<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Data Directives - Assembly Programming</title>
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
<?php include('..//Includes//Left_Assembly.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Data Directives - Assembly Development</h1>
        
        <h2>Data Directives</h2>
        
            <p>In this section we are going to talk about various directives we can use for assigning memory to variables.  These directives are usually used for the .bss section. Below, I will list the different types of directives and how many bytes they require.</span></p>
   
    <ul id = "li">
        <li><b>.ascii :</b> A text string.</li>
        <li><b>.asciz :</b> A null terminated text string.</li>
        <li><b>.byte :</b> Byte value.</li>
        <li><b>.double :</b> Double precision floating point number.</li>
        <li><b>.float :</b> Single precision floating point number.</li>
        <li><b>.int :</b> 32-bit integer.</li>
        <li><b>.long :</b> 32-bit integer.</li>
        <li><b>.octa :</b> 16-byte integer number.</li>
        <li><b>.quad :</b> 8-byte integer number.</li>
        <li><b>.short :</b> 16-bit integer number.</li>
        <li><b>.single : </b> Single precision floating point number.</li>
    </ul>    
       
        <p>All of these variables follow the same pattern, requiring a 'label:' (name), followed by the '.directive' and then the value.</p>
        
    <em>Code:</em>    
    <!-- code -->  
    <pre class="code">
    .section .data
    
    <span class = "comments"># A string</span>
    output:
        .ascii "A simple string"
    
    <span class = "comments"># A float</span>
    pi:
        .float 3.14
        
    <span class = "comments"># An array of integer</span>    
    sizes:
        .int 23, 34, 55</pre>    
        
        <p>Let's take a moment to notice the difference between the '.section .data' and the '.section .bss' sections. One contains data which must be used and another contains data which if left unitialized won't affect the program.
        
        <span class = "nl">This is because the .bss section is intialized at runtime, while the .data section is initialized at compile time.  A way to see this in action is by printing the size of the program. Let's look at an example of several programs and print out their sizes using the 'ls -al' command.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># A small program</span>
    .section .text
    .globl _start
    _start:
        movl $1, %eax
        movl $0, %ebx
        int $0x80</pre>
        
        <p>Typing in the 'ls -al' command allows you to see the permissions, date, and size of each file size. If we look at the file size, its relatively small 476. 
        
    <span class = "nl">There are two ways to store information in the '.section .bss' area. One is under the '.lcomm' directive, this stands for 'local common' memory, the other is the '.comm' which stands for common memory section. The local common area is resevered for memory that, will not be accessed outside of the local assembly code. </span>
        
    <span class = "nl">Let's look at this program again if we allocate 10,000 bytes to a buffer in a .bss section.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># With .section .bss</span>
    .section .bss
    buffer:
        .lcomm buffer, 10000
        
    .section .text
    .globl _start
    _start:
        movl $1, %eax
        movl $0, %ebx
        int $0x80</pre>
        
    <p>The file this time is only 12 bytes larger than before at 488 bytes. Now, let's do the same thing only this time let's move this data to the initialized section, the '.section .data' and see how large the file grows.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># With .section .bss</span>
    .section .data
    buffer:
        .fill 10000
        
    .section .text
    .globl _start
    _start:
        movl $1, %eax
        movl $0, %ebx
        int $0x80</pre>
        
    <p>The file is now 10488 bytes big.</p>
        
        
        <hr />        
        <br />
        <a href = "Assembly3.html">Previous</a>
        <span class = "next">
            <a href = "Assembly5.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    