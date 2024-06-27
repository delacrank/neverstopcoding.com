<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Tools of the Trade - Assembly Programming</title>
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

        <h1>Tools of the Trade - Assembly Development</h1>
        
        <h2>Tools</h2>
        
            <p>There are many free tools offered in the GNU package.  These tools include a debugger (GDB), an object code disassembler, a compiler, an assembler, a profiler and an objdump program (binutils). 
        
    <span class = "nl">These tools can be downloaded from the GNU website, they are called <a href  = "https://www.gnu.org/software" target = "_blank">GNU Software</a>. The debugger allows you to go through your code line by line and print out the values of the variables and show the output of the execution line by line. In order to debug code you need to compile or assemble the program using the '-gstabs' option. Once you have an executable file assembled with the -gstabs option you can proceed start debugging it by typing in, GDB in the command line followed by the name of the program exectuable program 'GDB test'. </span>
                
     <span class = "nl">If you want don't have compiler, assembler, or gdb can probably install them using the command line.</span></p> 
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># for GNU collection</span>
    sudo apt-get install build-essential
    
    <span class = "comments"># for binutils</span>
    sudo apt-get install binutils
    
    <span class = "comments"># for GDB</span>
    sudo apt-get install gdb
    
    <span class = "comments"># for kgdb (graphical version of gdb)</span>
    sudo apt-get install kgdb</pre>
        
    <p>When assembling with GNU assembler, you must use the 'as' command to assemble the the source code into an object file. Then you can use the linker by typing in the 'ld' command followed the object code filename. You can also convert an assembly language into object code using the gcc compiler '-c' option.</p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Assemble into object file</span>
    as -o test.o test.s
    
    <span class = "comments"># Link object code to create machine code</span>
    ld -o test test.o
    
    <span class = "comments"># Or do this with gcc</span>
    gcc -c test.s &amp;&amp; gcc -o test test.o</pre>
        
        <p>The amperstamp '&amp;' symbols next to each other means 'and', so do this command 'and' do this command afterwards. 
            
        <span class = "nl">An alternative to manually typing in the commands to assemble and link the object file every singe time would be to use a makefile.  Makefile's work by typing in the word 'make' in the command line in order to execute a number of shell or bash commands.</span>
        
        <span class = "nl">There is a usually the 'target' you want to create and then the 'dependecies' required to create that target. For our example we know that the target is an executable file called 'test'.  The dependencies are the object file and the assembly source code, let's see how I can use a make file to create these targets.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># filename 'makefile'
    
    # target:  dependencies
        # bash commands require to build 'target'</span>
        
    test: test.o    <span class = "comments"># test.o required to build 'test'</span>
        ld -o test test.o   <span class = "comments"># running this command will create file 'test'</span>
        
    test.o: test.s  <span class = "comments"># test.s required to build 'test.o'</span>
        as -o test.o test.s <span class = "comments"># running this command will create file 'test.o'</span>
    </pre>
            
        <p>Let's take a look at how we can take a 'c program' and convert that into both object code, and assembly.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;stdio.h>
    
    int main()
    {
        printf("hello, world!");
        return(0);
    }</pre>    
        
        <p>This is the program, now let's convert it into assembly, and then print the output.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    gcc -S test.c</pre>
        
        <p>Let's take a look at what the program looks like, after this let's take a look at what an assembly program looks like when optimized to use 'c' function calls.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .file "test.c"
    .section
.LCO:
    .string "Helllo, World!"
    .text
    .globl main
    .type main, @function
main:
    pushl %ebp
    movl %esp, %ebp
    andl $-16, %esp
    subl $16, %esp
    movl $16, %esp
    movl $.LCO (%esp)
    call printf
    movl $0, %eax
    leave
    ret
.LFEO
    .size main, .-main
    .ident "GCC: (GNU) 4.8.2"
    .section        .note GNU-stack," ",@progbits</pre>
        
        <p>Now, let's take the same 'hello, world' program and let's look at what happens to a program when we run an object dump to it.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments"># Convert our code into an object file</span>
    gcc -c test.c
    
    <span class = "comments"># Disassble the object code into instruction code</span>
    objdump -d test.o</pre>
        
        <p>Let's see what the object dump command does to our object file.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    test.o:     file format elf32-i386
    
    Disassebly of section .text:
    
    00000000 &lt;main>:
        0:  55                                        push %ebp
        1:  89 e5                                   mov %esp, %ebp
        3:  83 e4 f0                              and $0xfffffff0, %esp
        6:  83 ec 10                              sub $0x10, %esp
        9:  c7 04 24 00 00 00 00     movl $0x0,(%esp)
       10:  e8 fc ff ff ff                        call 11 &lt;main+0x11>
       15:  b8 00 00 00 00               mov $0x0,%eax
       1a:  c9                                        leave
       1b:  c3                                        ret</pre>
        
        <p>On the left, we have our instruction code and on the right we have our assembly code. Notice that our instruction code in written in hexidecimal. In order to convert hexidecimal into binary you just change the number in to patterns of 4 bits or a nibble.
        
        <span class = "nl">So our first hex digit '55' would be converted into 0101 0101. And '89' would be converted into 1000 1001, so on and so forth. </span></p>
        
         <hr />        
        <br />
        <a href = "Assembly.html">Previous</a>
        <span class = "next">
            <a href = "Assembly2.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    