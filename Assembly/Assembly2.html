<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Registers &amp; Commands - Assembly Programming</title>
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

        <h1>Registers &amp; Commands - Assembly Development</h1>
        
        <h2>Registers &amp; Commands</h2>
        
            <p>Previously, we looked at an assembly program in the process of being compiled into a c program using the 'gcc -S'. Now, let's take a moment to write an assembly program from stratch in order to return the CPU id. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># cpuid.s file</span>
     .section .data
     output:
        .ascii "The processor Vendor ID is 'xxxxxxxxxxxx'\n"
    
    .section .text
    
    .globl _start
    _start:
        movl $0, %eax
        cpuid                                    <span class = "comments"># Call the cpuid instruction</span>
        movl $output, %edi          <span class = "comments"># Create a pointer in register edi</span>
        movl %ebx, 28(%edi)       <span class = "comments"># Move characters of cupid  into register edi</span>
        movl %edx, 32(%edi)       <span class = "comments"># Move characters of cpuid into register edi</span>
        movl %ecx, 36(%edi)        <span class = "comments"># Move characters of cpuid into register edi</span>
        movl $4, %eax                    <span class = "comments"># Putting 4 in the 'eax' register is the sys call to write</span>
        movl $1, %ebx                    <span class = "comments"># 1 in the 'ebx' register, file descriptor for STDOUT </span>
        movl $output, %ecx          <span class = "comments"># Move the contents of the pointer register 'ecx'</span>
        movl $42, %edx                 <span class = "comments"># Declare the length of the string '42' characters</span>
        int $0x80                            <span class = "comments"># Call a soft interrupt to write to the console</span>
        movl $1, %eax                    <span class = "comments"># 1 is the system call to exit</span>
        movl $0, %ebx
        int $0x80</pre>
        
        <p>First, notice the dollar signs ($) and the percent signs (%), in front of each number is a dollar sign and in front of each register is a percent sign.  These symbols are unique to assembly programs written for UNIX operating systems.
        
    <span class = "nl">Each instruction is broken into 3 parts, the first is a command, the second is the value and last is the register. So our first command is 'movl $0, %eax', it moves the value of zero into the register eax. Below, I will describe some of the 'E registers' and their purpose.</span>
        
        <span class ="nl">Let's look at a few of the registers and what they mean.</span></p>
        
    <ul id = "li">
        <li><b>EAX :</b> Accumulator register for operands and results data.</li>
        <li><b>EBX :</b> Pointer to data in data memory segment.</li>
        <li><b>ECX :</b> Counter for string and loop operations.</li>
        <li><b>EDX :</b> I/O pointer.</li>
        <li><b>EDI :</b> Data pointer for destination of string operations.</li>
        <li><b>ESI :</b> Data pointer for source of string operations.</li>
        <li><b>ESP :</b> Stack pointer.</li>
        <li><b>EBP :</b> Stack data pointer.</li>
    </ul>
        
        <p>Now, let's look through the program and understand what everything means. For the purposes of our current program: EAX contains the system call value, EBX contains the file descriptor to write to, ECX contains the start of the string, EDX contains the length of the string.
        
    <span class = "nl">First, I should note that each assembly program is broken into 3 sections. The first is '.section .data', it is used to store initialized data elements. In the program above we used it to store our 'string value' as a variable called output.</span>
        
    <span class = "nl">The second section '.section .bss' is the section that we use to describe uninitialized data or data initialized to null or zero value. This section is used to create variables which values we will assign later.</span>
        
    <span class = "nl">The last section is called the '.section .text', it is required for all assembly programs. It is where we store the instruction codes for our executable program. The other two sections are optional.</span>
        
    <span class = "nl">In assembly comments are created by adding a semicolon after your line, anything after the semicolon isn't read by the assembler. Let's look at how some of the registers were used in this program to display the cpuid.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    movl $0, %eax
    cpuid</pre>
        
    <p>The EAX register contains the system call value, moving values into EAX register performs different system calls. Placing a zero in this register gives us the option to call the CPUID instruction.
        
    <span class = "nl">Next we call the CPUID, however we need to store the return value of this command into a variable.  For this we placed our '$output' variable into a pointer register. Using this register we can modify our existing string and place the characters from out CPUID into our string.</span>
        
    <span class = "nl">We start at the 28'th byte of our string using our pointer register to place the first four characters returned from calling our CPUID command. This continues until the x's in our string our replaced by the CPUID of our machine.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    movl $output, %edi
    movl %edx, 28(%edi)         <span class = "comments"># Store 4 bits at a time 'Genu'</span>
    movl %ebx, 32(%edi)          <span class = "comments"># Store 4 bits at a time 'ineI'</span>
    movl %ecx, 36(%edi)          <span class = "comments"># Store 4 bits at a time 'ntel'</span></pre>
        
        <p>Next we make another system call, placing the value of 4 into the 'EAX' registers lets our program know that we want to write to the console. Placing a 1 to our 'EBX' register is the file descriptor for writing to the console of our current terminal.
            
        <span class = "nl">Since we let our system know that we are ready to write and told it we can now call our string variable.  Here we can place that variable into our 'ECX' register, because it will hold the starting location for our string. Then we need to be able to tell the 'EDX' register the length of our string, so for this purpose we place the number 42 in it.</span>
        
    <span class = "nl">The command after that is a Linux system call, which will be used to determine the value in our 'EAX' register (soft interrupt to display output). It makes it easier to display the output of our string, otherwise we would have to write each byte our individually.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    movl $4, %eax
    movl $1, %ebx
    movl $output, %ecx          <span class = "comments"># Move our string to the 'ecx' register</span>
    movl $42, %edx                 <span class = "comments"># Hard core the amount of bits in the string</span>
    int $0x80                            <span class = "comments"># Determine the value of the 'eax' register </span></pre>
        
        <p></p>
        
         <hr />        
        <br />
        <a href = "Assembly1.html">Previous</a>
        <span class = "next">
            <a href = "Assembly3.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    