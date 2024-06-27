<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <title>Data types - C Programming</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet" href="../testcss.css">
     </head>
    
<body>

 <!-- Header -->
<?php include('../Includes//header.php'); ?>
        
<!-- Navigation -->
<?php include('../Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('../Includes//nav2.php'); ?>
    
 <!-- Left --><div class = "mainWrapper">
<?php include('../Includes//Left_C.php'); ?>
    
<!-- Right -->

    <div id ="rightz">
        
        <h1>Data types - C Development</h1>
        
        <h2>Data types</h2>
        
            <p>C has several data types, each data type can only hold a certain amount of data, we can start with the types which hold the least amount one byte (not bit, a byte is eight bits) and move on to the large types 32 bits (or 4 bytes).
        
                <span class ="nl">In order to understand how what a bit looks like imagine a single element capable of holding either a zero or one.  We can store two forms of data based on this information or every bit can be stored in powers of 2.</span>
        
        <span class = "nl">Here is what 4 bits looks like in binary 2<sup>4</sup>.</span></p>
        
        <ol style = "margin-left: 2em">
            <li>0000</li>
            <li>0001</li>
            <li>0010</li>
            <li>0011</li>
            <li>0100</li>
            <li>0101</li>
            <li>0110</li>
            <li>0111</li>
            <li>1000</li>
            <li>1001</li>
            <li>1011</li>
            <li>1010</li>
            <li>1101</li>
            <li>1100</li>
            <li>1101</li>
            <li>1111</li>
        </ol>
        
        <p>Some of the data types in C are: char (1 byte), int (16 bits or 32 bits), float, double.  There is also short, long, signed and unsigned.  Short means it will use only 16 bits, long at least 32 bits, signed means it can contain negative and possible numbers, unsigned is for positive numbers only. </p>
        
        <hr />
        
        <h3>Type Conversations</h3>
        
            <p>In C if you try to compute two numbers of different data types, then one type will have to be converted to the other in order for computation to happen.
        
        <span class="nl">The way C decides which data type will be converted is based on the one which holds more data or can store more bits.  For example, if I try to add an int to a double, if the answer is an int, then there is a possibilty that data can be lost.  This is because an int can only up to 32 bits, but a double can store 52 bits.  If the sum of the two numbers exceeds 2<sup>33</sup> then the rest of the data will be lost. </span>
        </p>
        
        <hr />
        
    <h3>Bit Wise Operators</h3>
        
        <p>I have already covered logical, increment/decrement and arithmetic operators in other areas of this site.  So I am going to cover bitwise operators.
        
        <span class = "nl">A bitwise operator compares two bits and produces the result based on the operator.  There are six forms of bitwise operators: AND, OR, exclusive OR, left shift, right shift, and one's complement.</span></p>
        
        <ul class = "li">
        <li><b>AND &amp;:</b> Compares two bits and only returns a one bit if both are one, otherwise it will return a zero bit. </li>
        <li><b>OR | :</b> Compares two bits and stores a one bit if either bit is equal to a one bit.</li>
        <li><b>exclusive OR ^:</b> Only stores a one bit if both operands are different, but stores a zero bit if both operands are the same. So two zero bits will be stored as a zero bit, and two one bits will be stored as a zero bit.  However, if either one of those bits is one and the other is a zero the result will always be a one bit.</li>
        <li><b>Left Shift &lt;&lt;:</b> Shifts the left operand by the number of positions equal to the right operand, filling in the remainding positions with zero. So if I took this number 0010 (2) and shifted it over by one 0100 (4), it would be as if I multiplied it by 2. ( 2 &lt;&lt; 1; )</li>
        <li><b>Right Shift >>:</b> Shifts the left operand by the number of the positions equal to the right operand. So, conversely if we moved a bit one place over to the right, it would be like dividing the number by 2. Of course the more places we moved it the more we would be dividing the number, so if i took the number 16 and used the right shift bitwise operator on it and set the right operand equal to 4 (for four positions) the quotient would be equal to 1 (2 one place, 4 two places, 8 three places, 16 four places).</li>
        <li><b>One's complement ~:</b> This is basically changes every zero bit to a one bit and every one bit to a zero bit.  The binrary number is opposite in terms of its ones and zeros, so 1111 is equal to 0000.</li>
        </ul>
        
    <p>Let's look at an example of this right shift bitwise operator before we move on.</p>       
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;stdio.h>
   
    main () {
        int x = 16;
        x = x >> 4;
        printf("%d ok\n", x);
    }</pre>    
        
    <hr />
    <br />
    
<a href = "C4.html">Previous page</a>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>