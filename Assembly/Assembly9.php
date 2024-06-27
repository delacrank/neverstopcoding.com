<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>The Stack - Assembly Programming</title>
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

        <h1>The Stack - Assembly Development</h1>
        
        <h2>The Stack</h2>
        
        <p>The Stack is an area of memory that is reserved for placing data. One of the ways we place data on to the stack is by using a 'push' instruction and to retrieve data from the stack we can 'pop' it to either a register or a memory location. You can 'push' an immediate data value, a register or a memory location on to the stack.
        
    <span class = "nl">Think of the stack as a temporary storage unit sort of like a register or a memory location, only much larger. However, data that is placed on the stack can only be retrieved if it is at the very bottom of the stack.</span>
        
    <span class = "nl">The stack grows downward so data placed on the stack earlier will be towards the top of it, and data placed on it later will be towards the bottom of it. Let's look of an example of using stack.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    data:
        .int 125
        
    .section .text
    .globl _start
    _start:
        movl $24420, %ecx   <span class = "comments"># 'esp' 0xbffff4c0</span>
        movw $350, %bx      
        movb $100, %eax
        pushl %ecx
        pushw %bx                <span class = "comments"># 'esp' 0xbffff4bc</span>
        pushl %eax                <span class = "comments"># 'esp' 0xbffff4ba</span>
        pushl data                 <span class = "comments"># 'esp' 0xbffff4b6</span>
        pushl $data              <span class = "comments"># 'esp' 0xbffff4b2</span>
        
        popl %eax                <span class = "comments"># 'esp' 0xbffff4ae</span>
        popl %eax                <span class = "comments"># 'esp' 0xbffff4b2</span>
        popl %eax                <span class = "comments"># 'esp' 0xbffff4b6</span>
        popw %ax                <span class = "comments"># 'esp' 0xbffff4ba</span>
        popl %eax                <span class = "comments"># 'esp' 0xbffff4bc</span>
        movl $0, %ebx        <span class = "comments"># 'esp' 0xbffff4c0</span>
        movl $1, %eax
        int $0x80</pre>
        
        <p>By debugging the program and monitoring the value of the 'esp' register we can see the stack pointer increase and decrease in value.  The changes are happening in intervals of 4 bytes for each push or pop, if a value is pushed on to the stack then the stack pointer is decremented by 4 bytes, if a value is poped then the register is incremented by 4 bytes.
        
    <span class = "nl">The memory location gets lower as more values are pushed on to the stack, this is because we add things to the bottom of the stack. However, in one of the examples I added only 2 bytes to the stack using the 'pushw' instruction, and in this instance the stack was only decremented by 2 bytes.</span>
        
    <span class = "nl">There are several commands that allow us to push or pop all the registers, let's look at a list of this.</span></p>
        
    <ul id ="li">
        <li><b>PUSHA / POPA :</b> Push or pop all the 16-bit general purpose registers.</li>
        <li><b>PUSHAD / POPAD :</b> Push or pop all the 32-bit general purpose registers.</li>
        <li><b>PUSHF / POPF :</b> Push or pop the lower 16 bits of the 'EFLAGS' register</li>
        <li><b>PUSHFD / POPFD :</b> Push or pop the entire 32 bits of the 'EFLAGS' register.</li>
    </ul>
        
    <p>The next section will be a heavy one, controlling the flow of execution.</p>
        
        <hr />        
        <br />
        <a href = "Assembly8.html">Previous</a>
        <span class = "next">
            <a href = "Assembly10.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    