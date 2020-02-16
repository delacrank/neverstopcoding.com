<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Indexed Memory locations - Assembly Programming</title>
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

        <h1>Indexed Memory locations - Assembly Development</h1>
        
        <h2>Indexed Memory location</h2>
        
            <p>Our data directives can be used to store more than one value. However, accessing those other values requires us to offset the memory location. The location is to be offset by adding number of certain number of bytes, if each value is four bytes long then that number is four.
        
        <span class = "nl">Let's look at the format to necessary to retrieve these values, 'base address (offset_address, index, size)'. The parameters for the 'offset address' and the 'index' must be stored in registers, if the offset address is zero then it can be left blank. Let's look at an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    values:
        .int 10, 15, 20, 25, 30
    output:
        .asciz "The value is '%d'\n"
        
    .section .text
    .globl _start:
    _start:
        movl $0, %edi                   <span class = "comments"># move zero into 'edi'</span>
        pushl values(, %edi, 4)    <span class = "comments"># push  (0, 0, 4 bytes long) from value</span>
        pushl $output
        call printf                           <span class = "comments"># call printf</span>
        addl $8, %esp
        pushl $0
        call exit</pre>
        
            <p>In this first example, we just moved zero into our 'edi' register so that we could use that register as a placeholder for our indexing our array of integers. I'm going to show you how to increment that register by one using the 'inc' command. 
        
    <span class ="nl">This will allow us to print out the value of every element in our 'value' array. In the example below, we are going to call the same instructions 5 times, incrementing the 'edi' register once every time to print out all the values from our array.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    values:
        .int 10, 15, 20, 25, 30
    output:
        .asciz "The value is '%d'\n"
        
    .section .text
    .globl _start:
    _start:
        movl $0, %edi        
        pushl values(, %edi, 4)    <span class = "comments"># push  (0, 0, 4 bytes long) from value</span>
        pushl $output
        call printf                           <span class = "comments"># call printf</span>
        inc %edi                             <span class = "comments"># incremebt register 'edi' by one</span>
        addl $8, %esp                   <span class = "comments"># Clear the stack pointer</span>
        pushl values(, %edi, 4)   <span class = "comments"># push  (0, 1, 4 bytes long) from value</span>
        pushl $output
        call printf
        addl $8, %esp
        inc %edi
        pushl values(, %edi, 4)   <span class = "comments"># push  (0, 2, 4 bytes long) from value</span>
        pushl $output
        call printf
        addl $8, %esp
        inc %edi
        pushl values(, %edi, 4)   <span class = "comments"># push  (0, 3, 4 bytes long) from value</span>
        pushl $output
        call printf
        addl $8, %esp
        inc %edi
        pushl values(, %edi, 4)   <span class = "comments"># push  (0, 4, 4 bytes long) from value</span>
        pushl $output
        call printf
        addl $8, %esp
        pushl $0
        call exit</pre>
        
    <p>Calling the instruction five times can be a waste of time, so let's try to use a 'loop' command instead to repeat the call.  However, in order to use the 'loop' command we must be able to end the loop somehow.  In order to end the loop we will also require the use of a 'cmp' command or a compare command. 
        
    <span class = "nl">Using the 'cmp' command will allow us to check the status of our 'edi' register and stop the loop once it becomes too large. There is a another new command as well, called the jump command. We will use the 'jne' which takes the comparison command value and passes it before performing any action. The 'jne' command will jump to the 'loop' reference, if the value returned by the 'cmp' command is not equal.
        
        <span class = "nl">So if '$5' isn't equal to the value of register 'edi' then the 'jne' will jump back to the 'loop' reference. Let's look at some code now.</span></span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    values:
        .int 10, 15, 20, 25, 30
    output:
        .asciz "The value is '%d'\n"
        
    .section .text
    .globl _start:
    _start:
        movl $0, %edi
    loop:                                        <span class = "comments"># Start the loop here</span>
        pushl values(, %edi, 4)    <span class = "comments"># push an element from our array</span>
        pushl $output
        call printf                           <span class = "comments"># call printf</span>
        addl $8, %esp
        inc %edi                              <span class = "comments"># increment 'edi'</span>
        cmpl $5, %edi                    <span class = "comments"># compare 6 to register 'edi'</span>
        jne loop                               <span class = "comments"># jump to loop if 'edi' and $5 are not equal </span>
        pushl $0
        call exit</pre>
        
    <p>Now let's talk about using indirection in order to decide which address we need to access for the elements in our array. When ever we refer to an variable using the '$' (dollar sign) we are referring to that variables address. To see an example of this, let's print out the address of value. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    var:
        .int 10
    output:
        .asciz "The address of var is '%d'\n"
    output2:
        .asciz "The value of var is '%d'\n"
    .section .text
    .globl _start
    _start:
        pushl $var          <span class = "comments"># Return the address</span>
        pushl $output
        call printf
        addl $8, %eax
        push var            <span class = "comments"># Return the value</span>
        pushl $output2
        addl $8, %eax
        pushl $0
        call exit</pre>
        
        <p>So the address is just a 9 digit number. Let's see how we can add bytes to this address in order to access the next number in our array. To do this, we will require the use of our pointer register 'edi'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    value:
        .int 10, 15, 20, 25, 30
    output:
        .asciz "The value of var is '%d'\n"
    .section .text
    .globl _start
    _start:
        movl $0, %edi
        movl $values, %edi    <span class = "comments"># move address of value into 'edi'</span>
        pushl (%edi)                <span class = "comments"># Print the value of the first element</span>
        pushl $output
        call printf
        pushl 4(%edi)               <span class = "comments"># Print second value</span>
        pushl $output
        call printf
        addl $8, %eax
        movl $values, %edi
        pushl 8(%edi)               <span class = "comments"># Print third value</span>
        pushl $output
        call printf
        addl $8, %eax
        movl $values, %edi
        pushl 12(%edi)              <span class = "comments"># Print forth value</span>
        pushl $output
        call printf
        addl $8, %eax
        movl $values, %edi
        pushl 16(%edi)              <span class = "comments"># Print fifth value</span>
        pushl $output
        call printf
        addl $8, %eax
        pushl $0
        call exit</pre>
        
    <p>Note, that in order to use indirection it is import to place parantheses around the 'edi' register. Everytime we add four bytes to the 'edi' register it will move on to the next address in memory. This is how are memory location stores multiple values, by allocating bytes to each element in our array.
        
    <span class = "nl">We can use this same concept to change the values of a memory location as well. Let's change the third element to 100.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .section .data
    value:
        .int 10, 15, 20, 25, 30
    output:
        .asciz "The value of var is '%d'\n"
    .section .text
    .globl _start
    _start:
        movl $0, %edi
        movl $values, %edi                 <span class = "comments"># move address of value into 'edi'</span>
        movl $100, 8(%edi)                <span class = "comments"># move a 100 into third element</span>
        pushl 8(%edi)                          <span class = "comments"># push value of third element on to the stack</span>
        pushl $output
        call printf
        addl $8, %eax
        pushl $0
        call exit</pre>
        
        <hr />        
        <br />
        <a href = "Assembly5.html">Previous</a>
        <span class = "next">
            <a href = "Assembly7.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    