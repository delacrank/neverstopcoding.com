<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Moving Data - Assembly Programming</title>
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

        <h1>Moving Data - Assembly Development</h1>
        
        <h2>Moving Data</h2>
        
            <p>In this section we are going to talk about moving data between registers, and the different ways we can manipulate data between variables, registers and memory locations. 
                
    <span class = "nl">The basic format for the mov command is 'movx source, destination' where x symbolizes the amount of bits to be moved. 'x' can be either 'l' for 32 bits, 'w' for 16 bits or 'b' for 8 bits.</span>
                
    <span class = "nl">So far we have been working with '32' bit registers, however there are registers which hold 8, 16 and even 64 bits as well. The 16 bit registers are just the same as the 32 bit registers except without the 'e' in front. So, if %eax is the 32 bit register then %ax would be the 16 bit version.</span>
                
    <span class = "nl">The 8 bit version ends with 'l' so it would be %al or %bl instead of %ax or %bx. The mov command would like like this for moving 8 bits 'movb'. For 16 bits 'movw' and of course for 32 bits 'movl'.</span>
                
    <span class = "nl">There are three distinct pieces of data which can be moved around. An immediate data element which is usually noted by a dollar sign ($), a register noted by a percent sign (%) or a memory location which is refered to by a 'label' (variable name).</span>
                
    <span class = "nl">As a programmer it is important to know that an immediate data can only be moved into a register or a memory location. However, memory locations can be moved into registers and registers can be moved into memory locations. There are several types of registers as well: general purpose, segment, control and debug.</span>
                
    <span class = "nl">Let's look at some exambles of using the move command.</span> </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    movl $0, %eax             <span class = "comments"># immediate data into register</span>
    movl $0x80, %ebx      <span class = "comments"># immediate data into register</span>
    movl $100, height       <span class = "comments"># immediate data into memory location</span>
    movl %eax, %ecx         <span class = "comments"># 32 bits  from register 'eax' into register 'ecx'</span>
    movw %ax, %cx           <span class = "comments"># 16 bits from register 'ax' into register 'cx'</span>
    movb %al, %bl             <span class = "comments"># move 8 bits from register 'al' into register 'bl' </span>
    movl value, %eax        <span class = "comments"># move memory location value into register 'eax'</span>
    </pre>
        
    <p>Now, that we have had some fun looking at different ways to use the mov commands, let's actually test these commands and print the values using our 'c library' functions.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    value:
        .int 5   
    output:
        .asciz "The value is '%d'\n"
    .section .text
    .globl _start
    _start:
        pushl value          <span class = "comments"># push value on to the stack</span>
        pushl $output     <span class = "comments"># push output on to the stack</span>
        call printf             <span class = "comments"># call printf</span>
        addl $8, %esp     <span class = "comments"># clear the stack</span>
        pushl $0
        call exit</pre>
        
    <p>Here is what the program looks like without using the movl command. This program assigns the value of 5 to the memory location value, then it pushes that memory location along with the string on to the stack, from here it calls the 'printf' function and clears the stack and exits. Now let's see an example of moving an immediate value into a memory location.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    value:
        .int 0   
    output:
        .asciz "The value is '%d'\n"
    .section .text
    .globl _start
    _start:
        movl $100, value        <span class = "comments"># mov 100 into memory location value</span>
        pushl value                  <span class = "comments"># push memory location value on to the stack</span>
        pushl $output
        call printf
        addl $8, %esp
        pushl $0
        call exit</pre>
        
    <p>Now, let's try the same example with a register this time. However, let's add an additional step of transfering the value between two general purpose registers. And then pushing that value on to the stack.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data 
    output:
        .asciz "The value is '%d'\n"
    .section .text
    .globl _start
    _start:
        movl $50, %eax       <span class = "comments"># mov 50 into register 'eax'</span>
        movl %eax, %ebx     <span class = "comments"># mov register 'eax' into register 'ebx'</span>
        pushl %ebx               <span class = "comments"># push register 'ebx' on to the stack</span>
        pushl $output
        call printf
        addl $8, %esp
        pushl $0
        call exit</pre>
        
        <hr />        
        <br />
        <a href = "Assembly4.html">Previous</a>
        <span class = "next">
            <a href = "Assembly6.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    