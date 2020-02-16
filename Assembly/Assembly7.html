<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Conditional Instructions - Assembly Programming</title>
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

        <h1>Conditional Instructions - Assembly Development</h1>
        
        <h2>Conditional Instructions</h2>
            
            <p>There are several instructions which we can can use to control the flow of our programs. The first one I am going to talk about is the 'cmp' (compare) command. We can use the 'cmp' (compare) command to compare the size of two values, these values can be any combination of immediate data, registers or memory locations.
        
    <span class = "nl">Let's look at a very small example of how we can we use this compare command. Instead of printing to the console I am going to place the value in the '%ebx' registers. We can use the 'echo $?' command to print the value within our 'ebx' register. Let's look at an example of doing just that first.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $5, %ebx       <span class = "comments"># Move 5 into the 'ebx' register</span>
        movl $1, %eax       <span class = "comments"># Call the exit command using the 'eax' register</span>
        int $0x80               <span class = "comments"># Using the linux system command to end the program</span></pre>
        
    <p>If we type this program, assembly it and link it nothing will happen. However, if we type in 'echo $?' afterwards, it will display the value located in our 'ebx' register.
        
    <span class = "nl">Let's use this same methodology to show how the 'cmov' command works. The 'cmov' command works by comparing two values and moving the value based on whether one is greater than, equal to, less than, etc. 
        
    <span class ="nl">However, the only way the computer can detect whether two values are greater than, less than or equal to each other is based on flags set by 'EFLAGS' register. Let's see what some of these flags are and how they are set.</span></span></p>
        
    <ul id="li">
        <li><b>CF (Carry flag) :</b> Used to determine if a number has to be carried over or borrowed.</li>
        <li><b>OF (Overflow flag) :</b> If an integer is too large or too small.</li>
        <li><b>PF (Parity flag) :</b> If the register contains corrupt data.</li>
        <li><b>SF (Signed flag) :</b> If the result is negative or positive.</li>
        <li><b>ZF (Zero flag) :</b> If the result is zero.</li>
    </ul>
        
        <p>Now that we know how the 'EFLAGS' registers work we can understand how the 'cmov' command works as well. The 'cmov' command will be able to determine which course of action to take based on the values passed in the 'EFLAGS' registers.
        
    <span class ="nl">For this I will show another chart with all the 'cmov' commands and the values present in each register in order for the command to pass successfully. However conditional move statements are broken up into two sections one section contains unsigned numbers and another section contains signed numbers. The chart below describes commands pertaining to unsigned numbers.</span></p>
        
    <ul id="li">    
        <li><b>CMOVA &amp; CMOVNBE :</b> Condition will move if value is either above or not below or equal. Carry Flag or Zero Flag must equal '0'.</li>
        <li><b>CMOVAE &amp; CMOVNB :</b> Will move if value is above equal or not below. 'CF = 0'.</li>
        <li><b>CMOVNC :</b> Not carry. 'CF = 0'.</li>
        <li><b>CMOVC :</b> Carry. 'CF = 1'.</li>
        <li><b>CMOVB &amp; CMOVNAE :</b> Will move is value is below or not above or equal. 'CF = 1'.</li>
        <li><b>CMOVBE &amp; CMOVNZ :</b> Below or equal, not above. 'CF or ZF = 1'.</li>
        <li><b>CMOVE &amp; CMOVZ :</b> Equal or zero. 'ZF = 1'. </li>
        <li><b>CMOVNE &amp; CMOVNZ :</b> Not equal, not zero. 'ZF = 0'.</li>
        <li><b>CMOVP &amp; CMOVPE :</b> Parity or Parity Even. 'PF = 1'.</li>
        <li><b>CMOVNP &amp; CMOVPO :</b> Not parity or parity odd. 'PF = 0'.</li>
    </ul>
        
    <p>Let's move on to signed conditions, where a number can be either negative or positive as appose to the unsigned numbers which can only be positive. These conditions rely on a different set of 'EFLAGS' registers to determine whether the to move the value or not.
        
    <span class = "nl">Quick note about the 'xor' operator, it works by comparing two values true and false or 1 and 0. If both values are either 1 or 0 then the value will be a 0. However if both values are different then the value returned will be a true or 1. So 1 xor 1 = 0, 0 xor 0 = 0, 1 xor 0 = 1, 0 xor 1 = 1.</span></p>
        
    <ul id= "li">
        <li><b>CMOVGE &amp; CMOVNL :</b> Greater than or equal but not less. 'SF xor OF = 0'. This means that a combination of the signed flag and the overflow flag must be both 1 or both 0.</li>
        <li><b>CMOVL &amp; CMOVGE :</b> Less or not greater or not equal. 'SF xor OF = 1' This means either one of the values is a signed flag and the other not an overflow flag, or one of the values is unsigned flag and the other is an overflow flag.</li>
        <li><b>CMOVLE &amp; CMOVNG :</b> Less or equal to, or not greater. 'SF xor OF, or ZF = 1'. </li> 
        <li><b>CMOVO :</b> Overflow. 'OF = 1'.</li> 
        <li><b>CMOVNO :</b> Not overflow. 'OF = 0'.</li> 
        <li><b>CMOVS :</b> Signed flag or negative. 'SF = 1'.</li> 
        <li><b>CMOVNS :</b> Not signed, not negative. 'SF = 0'.</li> 
    </ul>
        
        <p>I know that was a lot of information to take in, it gets easier from here on out. You don't necessarily need to know which flags are being set in order to determine the output of the cmp condition. The information on the registers is there so that you can know what is happening behind the scenes when two values are being compared.
        
    <span class = "nl">Let's look at a small program.</span></p>
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $10, %ecx             <span class = "comments"># move 10 into 'ecx' register</span>
        movl $5, %ebx               <span class = "comments"># move 5 into 'ebx' register</span>
        cmp %ebx, %ecx            <span class = "comments"># compare these two registers</span>
        cmova %ecx, %ebx        <span class = "comments"># move the larger value into the 'ebx' register</span>
        movl $1, %eax
        int $0x80</pre>
        
        <p>This output should always return the larger value into the 'ebx' register reguardless of how we initially stored the values. To see the output type in 'echo $?'. Let's test this by placing the larger value in 'ebx' register, and trying to move a smaller value into it using the same commands.</p>
        
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $5, %ecx                <span class = "comments"># move 5 into 'ecx' register</span>
        movl $10, %ebx              <span class = "comments"># move 10 into 'ebx' register</span>
        cmp %ebx, %ecx            <span class = "comments"># compare these two registers</span>
        cmova %ecx, %ebx        <span class = "comments"># move the larger value into the 'ebx' register</span>
        movl $1, %eax
        int $0x80</pre>
        
        <p>Now, let's see how we can modify this program in order to return the smallest value possible. We can use the CMOVB command for this.</p>
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    .section .text
    .globl _start
    _start:
        movl $10, %ecx              <span class = "comments"># move 10 into 'ecx' register</span>
        movl $5, %ebx               <span class = "comments"># move 5 into 'ebx' register</span>
        cmp %ebx, %ecx            <span class = "comments"># compare these two registers</span>
        cmovb %ecx, %ebx        <span class = "comments"># move the smaller value into the 'ebx' register</span>
        movl $1, %eax
        int $0x80</pre>
        
        <p>Let's look at one more example where we can loop through an array and return the values from lowest to highest. In the next section we will talk about exchaning data.</p>
        
    <em>Code:</em> 
    <!-- code -->
    <pre class="code">
    .section .data
    output:
        .asciz "The largest value is '%d'\n"
    values:
        .int 105, 235, 61, 315, 134, 221, 53, 145, 117, 5    
    .section .text
    .globl _start
    _start:
        movl values, %eax 
        movl $1, %edi
    loop:
        values(, %edi, 4), %eax
        cmp %ebx, %eax
        cmova %eax, %ebx
        inc %edi
        cmp $10, %edi
        jne loop
        pushl %ebx
        pushl $output
        call printf
        addl $8, %esp
        pushl $0
        call exit
        </pre>
        
        <hr />        
        <br />
        <a href = "Assembly6.html">Previous</a>
        <span class = "next">
            <a href = "Assembly8.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    