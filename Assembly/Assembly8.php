<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Exchanging Data - Assembly Programming</title>
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

        <h1>Exchanging Data - Assembly Development</h1>
        
        <h2>Exchanging Data</h2>
        
            <p>Moving data from one register to another allows us perform calculations in order to solve problems. There are times a programmer would like to exchange data from one register or memory location to another.  Usually, to perform this type of computation we would require a temporary register or memory location to hold the first value. In 'c' we would do that like this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Swap the values of x and y</span>
    
    temp = x;       <span class = "comments">// assign x to temp</span>
    x = y;              <span class = "comments">// assign y to x</span>
    y = temp;       <span class = "comments">// assign temp to y</span></pre>
        
        <p>Let's see how this code would look like in assembly.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Swap the values of eax and ebx</span>
    
    movl %eax, %ecx        <span class = "comments"># move 'eax' to 'ecx'</span>
    movl %ebx, %eax        <span class = "comments"># move 'ebx' to 'eax'</span>
    movl %ecx, %ebx;       <span class = "comments"># move 'ecx' to 'ebx'</span></pre>
        
        <p>Assembly provides us with a tool that allows us to swap values between two registers or memory locations in one command without having to initialize another register or memory location.
        
    <span class = "nl">Below, are some of the instructions which allow us to perform this action.</span></p>
        
    <ul id ="li">
        <li><b>XCHG :</b> Exchanges the values between two registers, or memory location and a register.</li>
        <li><b>BSWAP :</b> Reverses the byte order of a 32-bit register.</li>  
        <li><b>XADD :</b> Exchanges two values and stores the sum in the desginated operand.</li>  
        <li><b>CPMXCHG :</b> Compares a value with an external value and exchanges it with another.</li>  
        <li><b>CMPXCHG8B :</b> Compares two 64-bit values and exchanges them with one another.</li>  
    </ul>
        
    <p>Let's write a small program to see the output of some of these commands.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $5, %ecx           
        movl $10, %ebx
        xchg %ecx, %ebx     <span class = "comments"># exchange the values between registers 'ecx' and 'ebx'</span>
        movl $1, %eax
        int $0x80</pre>
        
    <p>If we type in 'echo $?' we should see that the 'ebx' value should now be 5 instead of 10. We could also just step through the program, using our debugger to print out the values of each register.
        
    <span class = "nl">Let's try using the bswap command and see the output of that. It reverses the order of the bits in a register or memory location.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $0x12345678, %ebx
        bswap %ebx      <span class = "comments"># reverse the order of the bits</span>
        movl $1, %eax
        int $0x80</pre>
        
    <p>I suggest just stepping through this with a debugger to see the output. Let's look at another instruction, one that exchanges the values of two registers and produces a sum in the destination register.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $30, %ebx
        movl $15, %ecx
        xadd %ecx, %ebx <span class = "comments"># swap the values place the sum in 'ebx'</span>
        movl $1, %eax
        int $0x80</pre>
        
        <p>For this example, we can just run it and type 'echo $?' like before to see the result in our 'ebx' register. To confirm that 30 was places in the 'ecx' register you can either debug the program or switch the registers in the 'xadd' instruction, so that the sum in placed in 'ecx' instead of the 'ebx'.
        
    <span class = "nl">The compare exchange instruction works by comparing two values and then moving the register value into the memory location, if both values are not equal.</span>
        
    <span class = "nl">However, if both values are equal then the value in the memory location will get moved into the 'eax' register.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    .section .data
    var:
        .int 10
    .section .text
    .globl _start
    _start:
        movl $10, %eax 
        movl $5, %ebx
        cmpxchg %ebx, var <span class = "comments"># if values not equal move 'ebx' into 'var'</span>
                                            <span class = "comments"># if values are equal move 'var' into 'eax'</span>
        movl $1, %eax
        int $0x80</pre>    
        
        <p>Let's take a look at the last exchange instruction, compare exchange eight bit or 'cmpxchg8b'. The way this instruction works is by comparing 64 bits, it will take the bits in the 'EAX' and 'EDX' values and compare them with those in our memory location.
        
    <span class = "nl">If the values match then it will move the values loaded in the 'ECX' and 'EBX' registers to that memory location. However, if the values don't match then the values in the memory location will be loaded into the 'EAX' and 'EDX' registers intead.</span>
        
    <span class = "nl">Let's see an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    var:
        .byte 0x11, 0x22, 0x33, 0x44, 0x55, 0x66, 0x77, 0x88
        
    .section .text
    .globl _start
    _start:
        movl $0x44332211, %eax       <span class = "comments"># low order bits</span>
        movl $0x88776655, %edx      <span class = "comments"># high order bits</span>
        movl $0x11111111, %ebx
        movl $0x22222222, %ecx
        cmpxchg8b var
        movl $0, %ebx
        movl $1 %eax
        int $0x80</pre>
        
    <p>Let's look at one last example of how to use the data exchange instructions. Below is a bubble sort program in assembly.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    values:
        .int 105, 235, 61, 315, 134, 221, 53, 145, 117, 5
        
    .section .text
    .globl _start
    _start:
        movl $values, %esi
        movl $9, %ecx
        movl $9, %ebx
    loop:
        movl (%esi), %eax
        cmp %eax, 4(%esi)
        jge skip
        xchg %eax, 4(%esi)
        movl %eax, (%esi)
    skip:
        add $4, %esi
        dec %ebx
        jnz loop
        dec %ecx
        jz end
    movl $values, %esi
        movl %ecx, %ebx
        jmp loop
    end:
        movl $1, %eax
        movl $0, %ebx
        int $0x80</pre>
        
        <hr />        
        <br />
        <a href = "Assembly7.html">Previous</a>
        <span class = "next">
            <a href = "Assembly9.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    