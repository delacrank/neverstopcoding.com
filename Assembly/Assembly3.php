<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Debugging &amp; C lib Functions - Assembly Programming</title>
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

        <h1>Debugging &amp; C lib Functions - Assembly Development</h1>
        
        <h2>Debugging &amp; C lib Functions</h2>
            
            <p>In order to debug our program we need to assemble it using the -gstabs option.  Debugging is important in solving problems which the assembler might not be able to detect. The debugger will also reveal information from the values of the registers.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    as -gstabs -o test.o test.s
    ld -o test test.o</pre>
        
        <p>You can open the debugger using the 'gdb' command, in order to debug type 'gdb program_name'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    gdb test</pre>
        
    <br />
        
    <img width  = "650" src = "../Images/asm1.png">
        
        <p>Then you set a break point and start stepping through the program. In order to make the break point work in an 'assembly' program you can type in 'b' for break point followed by '_start'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    break _start</pre>
    
    <br />
        
    <img src ="../Images/asm2.png">
            
        <p>In order to start the program type in 'run'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    run</pre>
        
    <br />
        
    <img src ="../Images/asm3.png">
        
    <p>Once the program has began under 'gdb' you can start stepping through instructions using the 'next' command. You can step into instructions using the 'step' command.  And you can also print the value of a memory location or register by typing in the name of the of register/memory location's address followed by the 'print' command.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    next
    print/x $ebx
    step</pre>
        
    <br />
        
    <img src = "../Images/asm4.png">
        
        <p>To view the registers, type in 'info registers', you can also type in 'print/x' followed by the name of the register, to display the the value of a specific register. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    info registers</pre>
        
    <br />
        
    <img src ="../Images/asm5.png">
        
        <p>We are going to learn more about the other registers and the 'eflags' as we progress through this tutorial. To quit the debugger just type in 'q' or 'quit'.</p>
        
    <hr />
        
    <!-- using c library functions -->
    <h3>Using C lib functions</h3>
        
        <p>We can display the same cpuid instruction without having the use the system calls. Let's see how this works by using the 'printf' function.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># cpuid assembly program with printf</span>
    .section .data
    output:
        .asciz "The processor Vendor ID is '%s'\n"
    .section .bss
        .lcomm buffer, 12
    .section .text
    .globl _start:
    _start:
        movl $0, %eax
        cpuid
        movl $buffer, %edi
        movl %ebx, (%edi)
        movl %edx, 4(%edi)
        movl %ecx, 8(%edi)
        pushl $buffer
        pushl $output
        call printf
        addl $8, %esp
        pushl $0
        call exit</pre>
        
        <p>In order to compile this program, we must use something called 'dynamic linking' in order to link our 'c libraries' to our assembly program. Our assembly program doesn't know where the 'printf' function is stored, so when we call our linker we need to tell the program where these libraries are stored.
        
    <span class = "nl">Let's look at the command line options necessary to call it.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    as -o test.o test.s
    ld -dynamic-linker /lib/ld-linux.so.2 -o test1 -lc test1.o</pre>
        
        <p>Calling the '-lc' command before 'test1.o' links our 'c library' to our assembly program. Then calling '-dynamic-linker' tells the linker where to look for our 'c lib' functions.
    
    <span class = "nl">Let's take a moment to inspect our assembly program. The first thing to notice is that our intialized variable 'output' is stored in '.asciz' string instead of a '.ascii' string.  The difference between these two variables is that '.acsiz' is a null terminated string.</span>
            
    <span class = "nl">Next, let's look at how we use the '.lcomm' directive to store a 12 byte value, into a buffer. We can store this buffer variable in the '.section .bss' section because it hasn't been initialized.</span>
            
    <span class = "nl">First let's call the 'cupid' instruction just like before, we are going to store it in the '$output' variable again. And just like before we are going to store this variable in a pointer register so that we can move it into our string later. </span>
            
    <span class = "nl">This time, we are going to use a new command 'pushl'. This moves data on to something called a stack. The stack is an area of memory we can use to perform changes on two or more operands. By adding both the '$output' variable on the stack as well as the '$buffer' we can move our 'cpuid' instruction into our string. Finally, we call our 'printf' function in order to call our string.</span>      
    
    <span class="nl">We can then clear our stack by calling the 'addl' command to move the value '$8' into the '%esp' register.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    pushl $buffer           <span class="comments"># push buffer on to the stack</span>
    pushl $output          <span class="comments"># push output on to the stack</span>
    call printf                  <span class="comments"># call the printf function</span>
    addl $8, %esp          <span class="comments"># clear the parameters from 'printf' by adding '8' to '%esp'</span></pre>
        
    <p>Remeber that the 'esp' register is the stack pointer register.</p>
        
        <hr />        
        <br />
        <a href = "Assembly2.php">Previous</a>
        <span class = "next">
            <a href = "Assembly4.php">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    