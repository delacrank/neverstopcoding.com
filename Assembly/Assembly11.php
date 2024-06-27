<!DOCTYPE html>
<html>  
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Conditional Branches - Assembly Programming</title>
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

        <h1>Conditional Branches - Assembly Development</h1>
        
        <h2>Conditional Branches</h2>
        
            <p>A conditional branch is similar to a unconditional branch where the branch alters the 'EIP' registers moving the instruction pointer to another area in the program. The difference between the two, is that a conditional branch basis its movements on whether a condition is true or not. 
        
    <span class = "nl">Earlier we learned about conditions, the compare instruction and the 'EFLAGS' (carry flag, zero flag, parity flag, overflow flag, and signed flag). A conditional branch is similar to a conditional move where the condition must be true in order for the branch or movement to take place.</span>
        
    <span class = "nl">Let's take a look at some conditional jump instructions.</span></p>
        
    <ul id = "li">
        <li><b>JA :</b> Jump if above. CF = 0 &amp; ZF = 0</li> 
        <li><b>JAE :</b> Jump if above or equal. CF = 0</li> 
        <li><b>JB :</b> Jump if below. CF = 1</li> 
        <li><b>JBE :</b> Jump if below or equal. CF = 1 or ZF = 1</li> 
        <li><b>JC :</b> Jump if carry. CF = 1</li> 
        <li><b>JCXZ :</b> Jump if CX = 0.</li> 
        <li><b>JECXZ :</b> Jump if ECX = 0.</li> 
        <li><b>JE :</b> Jump if equal. ZF = 1</li> 
        <li><b>JG :</b> Jump if greater. ZF = 0 &amp; SF = OF</li> 
        <li><b>JGE :</b> Jump if greater or equal. SF = OF</li> 
        <li><b>JL :</b> Jump if less. SF &lt;> OF</li> 
        <li><b>JLE :</b> Jump if less or equal. ZF = 1 or SF &lt;> OF</li> 
        <li><b>JNA :</b> Jump if not above. CF = 1 or ZF = 1</li> 
        <li><b>JNAE :</b> Jump if not above or equal. CF = 1</li> 
        <li><b>JNB :</b> Jump if not below. CF = 0</li> 
        <li><b>JNBE :</b> Jump if not below or equal. CF = 0 &amp; ZF = 0</li> 
        <li><b>JNC :</b> Jump if not carry. CF = 0</li> 
        <li><b>JNE :</b> Jump if not equal. ZF = 0</li> 
        <li><b>JNG :</b> Jump if not greater. ZF = 1 or SF &lt;> OF </li> 
        <li><b>JNGE :</b> Jump if not greater or equal. SF &lt;> OF</li> 
        <li><b>JNL :</b> Jump if not less. SF = OF</li> 
        <li><b>JNLE :</b> Jump if not less or equal. ZF = 0 &amp; SF = OF</li> 
        <li><b>JNO :</b> Jump if not overflow. OF = 0</li> 
        <li><b>JNP :</b> Jump if not parity. PF = 0</li> 
        <li><b>JNS :</b> Jump if not sign. SF = 0</li> 
        <li><b>JNZ: </b> Jump if not zero. ZF = 0</li> 
        <li><b>JO :</b> Jump if overflow. OF = 1</li> 
        <li><b>JP :</b> Jump if parity. PF = 1</li> 
        <li><b>JPE :</b> Jump if parity even. PF = 1</li>
        <li><b>JPO :</b> Jump if parity odd. PF = 0</li>
        <li><b>JZ :</b> Jump if sign. SF = 1</li>
        <li><b>JZ :</b> Jump if zerp. ZF = 1</li>
    </ul>
        
        <p>This conditions just indicate whether the program will jump to the address if the flags in the register match up after the 'cmp' instruction.
        
    <span class = "nl">The way the compare instruction works is by subtracting operand2 from operand1. Where the left operand can be either a register, memory location or immediate data values and the right operand is a register.</span>
        
    <span class = "nl">Let's look at an example of this below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $15, %eax
        movl $10, %ebx
        cmp %eax, %ebx      <span class = "comments"># compare these values, jump to greater if 'ebx' is greater</span>
        jge greater
        movl $1, %eax
        int $0x80
    greater:
        movl $20, %ebx      <span class = "comments"># place 20 in 'ebx' register is 'ebx' is greater</span>
        movl $1, %eax
        int $0x80</pre>
        
    <hr />
        
    <!-- EFLAGS -->    
    <h3>Setting the 'EFLAGS' registers</h3>
        
        <p>Let's talk about some of the 'EFLAGS' and how they are set. First let's look at the zero flag and see how we can use the jump if zero instruction to check to see if a register is zero.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    movl $30, %eax
    subl $30, %eax      <span class = "comments"># subtract 30 from 'eax'</span>
    jz overthere            <span class = "comments"># will jump to 'overthere' label if the last register was zero</span></pre>
        
        <p>Another way the zero flag register is used, is when decrementing a pointer. Let's see an example of decrementing a pointer to zero signifying the end of a loop.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    output:
        .asciz "The value is %d\n"
    value:
        .int 10
    .section .text
    .globl _start
    _start:        
        movl $10, %edi   <span class = "comments"># set counter to ten</span>
    loop:
        pushl value
        pushl $output
        call printf             <span class = "comments"># print the value of memory location</span>
        addl $8, %esp
        subl $1, value      <span class = "comments"># subtract one from memory location</span>
        dec %edi               <span class = "comments"># decrement the counter</span>
        jz out                     <span class = "comments"># if counter is zero, jump to out label</span>
        jmp loop               <span class = "comments"># otherwise jump to beginnning of loop</span>
    out:
        pushl $0
        call exit</pre>
        
        <p>Above is an example of how we can use loops to decrement a number and print it to the console.  The 'c' equivalent of this program would look something like this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;stdio.h>
    
    int main()
    {
        for(int i = 10;; i--)
        {
            if (i == 0) goto out;
            printf("%d\n", i);
        }
        out:
        return 0;
    }</pre>
        
        <p>Let's look at the how to set the overflow flag. The overflow flag is used when working with signed numbers, meaning numbers which can be either positive or negative, based on their signed bit.
        
        The overflow flag is set when the value is too large for the register, let's look at an example below.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
        movl $1, %eax
        movb $0x7f, %bl   <span class = "comments"># move 127 into 'bl' register</span>
        addb $10, %bl        <span class = "comments"># add ten to that number making it overflow</span>
        jo overhere             <span class = "comments"># jump if overflow to 'overhere' label</span>
        int $0x80
    overhere:
        movl $0, %ebx
        int $0x80</pre>
        
    <p>In the example above we tested see what will happen if we made the number in a 8 bit signed register exceed 127. If that 'jo' instruction works then the 'ebx' register would be set to zero, otherwise it should remain at '137'.
        
    <span class = "nl">Next, let's talk about the 'parity' flag. The parity flag checks to see the amount of one bits in a register is either odd or even, if the number one bits is even, then the parity bit is set to one.  If the number of bits is odd, the parity bit is set to zero.</span>
        
    <span class = "nl">The number 2 in binary is 00000010, so the amount of one bits is an odd number. If we look at the number 3 in binary 00000011, an even number of bits. Now, let's look at an example of using this with a jump instruction.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $1, %eax
        movl $4, %ebx       <span class = "comments"># 4 '00000100' parity not set</span>
        subl $3, %ebx         <span class = "comments"># 1 '00000001' parity not set</span>
        jp overhere
        int $0x80
    overhere:
        movl $100, %ebx
        int $0x80</pre>
        
    <p>Since the parity flag was not set, the program should return with a '1' in the 'ebx' register, instead of a 100.</p>       
        
        <hr />        
        <br />
        <a href = "Assembly10.html">Previous</a>
        <span class = "next">
            <a href = "Assembly12.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    