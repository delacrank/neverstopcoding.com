<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Controlling the Flow of Execution - Assembly Programming</title>
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

        <h1>Controlling the Flow of Execution - Assembly Development</h1>
        
        <h2>Controlling the Flow of Execution</h2>
        
            <p>The flow of execution in your programs is decided by the 'EIP' register or the instruction pointer. The instruction pointer cannot be modified by a programmer directly, and it cannot be altered using a 'mov' instruction.
        
    <span class = "nl">However, there are two ways to alter the instruction pointer or the 'EIP' register, this is by using something called a branch.  There are two types of branches, a conditional branch and an unconditional branch. A conditional branch will change the flow of execution if a certain condition is true or false, where as an unconditional branch just changes the flow of execution reguardless if a condition exists.</span><p>
        
    <hr />
        
    <h3>Unconditional Branches (jump)</h3>
        
    <p>There are three types of uncondition branches: jumps, calls, and interrupts.  The jump instruction jumps from one area in memory to another location, and there are usually three types of jumps: short, near and far.</span>
        
    <span class ="nl">Let's look at an example of a program that uses the jump instruction.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $1, %eax
        jump overhere
        movl $10, %ebx
        int $0x80
    overhere:
        movl $20, %ebx
        int $0x80</pre>
        
    <p>If we assemble this program and type in 'echo $?' we can see the value in the 'ebx' register. If the jump command suceeded then it will be 20 instead of 10.  Let's go one step further and disassmble this program to see the instruction codes. We can do this using the 'objdump -D (program name)'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    test:     file format elf32-i386
    
    Disassembly of section .text:

  08048054 &lt;_start>:
    8048054:	b8 01 00 00 00       	mov    $0x1,%eax
    8048059:	eb 07                	        jmp    8048062       &lt;overhere>
    804805b:	bb 0a 00 00 00       	mov    $0xa,%ebx
    8048060:	cd 80                	        int       $0x80

  08048062 &lt;overhere>:
    8048062:	bb 14 00 00 00       	mov    $0x14,%ebx
    8048067:	cd 80                	        int       $0x80</pre>
        
        <p>If we take a look at the memory locations in our program, you see that they increase incrementally for every instruction used. Imagine that each instruction is two digits in hexidecimal, our first five instructions are: 'b8', '01', '00', '00', '00'. So our program has to move five places in memory in order to store each of those instructions.
            
    <span class = "nl">Imagine each instruction is a byte 1 digit in hex is a nibble, there are 14 instructions from '_start' to 'overhere', so if we started at memory location '8048054' then we should be at '8048062' before we hit 'overhere'. Yet, notice that we can jump from location '8048059' to '8048062' skipping seven instructions, using this unconditional branch (jump).</span>
        
    <span class = "nl">Alright, let's debug this program and print out the value of the 'EIP' register to see the memory locations.</span></p>
        
    <img src="../Images/asm6.png">
        
        <p>Notice how the 'EIP' register stores the memory locations. Now, we should have more of an understanding of how the 'ESP' and the 'EIP' registers work. One tracks the current location of the stack and the other tracks the location of our instruction pointer. We can alter the stack register by pushing or poping things on and off the stack, and we can modify our instruction pointer by using branches to move the pointer to a different area in our program.</p>
        
    <hr />
        
    <!-- Call -->
    <h3>Unconditional Branch 'Call'</h3>
        
    <p>Let's look at another type of uncondition branch called, 'call'. The unconditional 'call' branch works by moving the program to a different area in order to execute a set of instructions and then back to the main program once those instructions have been executed.
        
    <span class = "nl">It does this by storing the location of the 'EIP' register on the stack, performing the function instructions and returning to the line after the 'call' was first executed.  In order to return to that point in the program it requires the use of an instruction called 'ret' (return), but the 'ret' instruction needs the 'EIP' register (instruction pointer) to tell it where to go.  However, since the 'EIP' register is stored on the stack if the function moves the stack down or up, then the 'ret' instruction it won't be able to access it.</span>
        
    <span class = "nl"> We can solve this problem by placing the location of the stack into another register 'EBP'. Then, we can access that 'EIP' register reguardless to changes made on the stack within our function. Let's look at a template for how this is achieved.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function_label:
        pushl %ebp                <span class = "comments"># push the 'ebp' register on to the stack</span>
        movl %esp, %ebp     <span class = "comments"># move the stack pointer register to 'ebp'</span>
        &lt; function code >     <span class = "comments"># function instructions can be stored here</span>
        movl %ebp, %esp     <span class = "comments"># move the 'ebp' register back into stack pointer register</span>
        popl %esp                  <span class = "comments"># pop the 'esp' register</span>
        ret                                <span class = "comments"># ret can now access 'EIP' register stored on the stack</span></pre>
        
    <p>In the snippet of code above, it shows what a template for a storing a function should look like.  Typically a 'call' would move the program to this 'function_label' address. We want to be able to make use of the stack within the function, but we don't want its address to be altered so that when we get back to our main program none of our prior resources are inaccessible.
        
    <span class = "nl">Let's look at a program which uses the 'call' branch, to see how it works in action.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .sectoin .data
    output:
        .asciz "This is section '%d'\n"
    
    .section .text
    .globl _start
    _start:
        pushl $1                
        pushl $output
        call printf         <span class = "comments"># prints 'This is section 1'</span>
        addl $8, %esp
        call overhere    <span class = "comments"># moves program to label: 'overhere'</span>
        pushl $3           <span class = "comments"># move here from 'ret' instruction</span>
        pushl $output
        call printf         <span class = "comments"># prints 'This is section 3'</span>
        addl $8, %esp
        pushl $0
        call exit
    overhere:             <span class = "comments"># executes these instructions</span>
        pushl %ebp
        movl %esp, %ebp
        pushl $2
        pushl $output
        call printf         <span class = "comments"># prints 'This is section 2'</span>
        addl $8, %esp
        movl %esp, %ebp
        popl %ebp
        ret                     <span class = "comments"># returns program back to 'eip' pointer</span></pre>
        
        <p>The output of this program should print: 'This is section 1', 'This is section 2', 'This is section 3', in that order. This is because we used a call instruction. Even thou, 'This is section 3' instruction came before, 'This is section 2', our program could not execute that print statement because it had to follow the instruction pointer.
        
    <span class = "nl">Since we modified the 'EIP' register or instruction pointer, our program jumped to a different section of memory executed the instructions there, and then jumped back.</span>
        
    <span class = "nl">Before we talk about conditional branches, there is one more unconditional branch that I forgot to mention. This type of branch is called an interrupt. There are two types of interrupts: software interrupts and hardware interrupts.</span>
        
    <span class = "nl">A hardware device will generate a hardware interrupt, like plugging in a headphone or putting in a cdrom, or attaching a monitor, etc. An interrupt is a signal that gets sent to OS in order to hand control over to another program. </span>
        
    <span class = "nl">A software interrupt will happen between programs, a signal will be sent to stop one program in order to gain functionality of the OS.  The interrupt usually puts the program on hold until the process is complete.  For many MS DOS applications this interrupt is 0x21, for Linux its 0x80. The instruction for the interrupt is 'int'.</span>
          </p>
        
        <hr />        
        <br />
        <a href = "Assembly9.html">Previous</a>
        <span class = "next">
            <a href = "Assembly11.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    