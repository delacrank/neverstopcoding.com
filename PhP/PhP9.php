<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Arrays - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Arrays - PhP Programming</h1>
    
<h2>Working with Arrays</h2>
    
    <p>An array is a place to store an collection of strings, numbers or objects.  The way an array stores information is by using slots, the first beginning with the number 0, then going up depending on how many slots you want to use. 
        
        <span class = "nl">Creating an array in PhP is similar to initializing an object in C++ or C#.</span></p>
    
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    $var = array();
    $var[0] = "first";
    $var[] = "second";
    print $var[0] . "&lt;br /> " . $var[1];</pre>

    <br />
    <em>Example:</em><br /><br />  
    <!-- example -->
    <?php
        $var = array();
        $var[0] = "first";
        $var[] = "second";
        print $var[0] . "<br />" . $var[1]; 
    ?>

<p>You can also initialize the of the array elements as you define it.</p>
    
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    $two = 2; 
    $var = array("first", $two, 3);
    print $var[0] . "&lt;br /> " . $var[1] . "&lt;br />" . $var[2];</pre>
    
    <br />
    <em>Example:</em><br /><br />   
    <!-- example -->
<?php
$two = 2;
$var = array("first", $two, 3);
print $var[0] . "<br /> " . $var[1] . "<br />" . $var[2]; 
?>

<p>Notice how we can use mulitple data types when working with arrays in php. What if we want to decide which elements of our array are set with values and we can do this in any order.</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $var = array(3 => "5" , 2 => 4 , 1 => "three" );   
    print $var[1] . "&lt;br />" . $var[2] . "&lt;br /> . $var[3];</pre>

<br />
<em>Example:</em><br /><br />  
<!-- example -->
<?php
$var = array(3 => "5" , 2 => 4 , 1 => "three" );
print "$var[1]" . "<br />" . $var[2] . "<br />" . $var[3];
?>
    
<p>We used a new symbol '=>' this is similar to the symbol used in lambda expressions in c# or using pointer function in c++, it just means take this variable assign it to this value in php.
    
    <span class = "nl">Let's look at another function which can print out all of the elements in our array without having to write out each one.  It's called the print_r function.</span></p>
    
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    $var = array( 1, 2, 3, 4, 5);
    print_r($var);</pre>
    
    <br />
    <em>Example:</em><br /><br />
    <!-- Example -->
    <?php
        $var = array( 1, 2, 3, 4, 5);
        print_r($var); 
    ?>
    
<br />
<hr />
    
<!-- Associative Arrays -->
<h3>Associative Arrays</h3>
    
<p>If you have every worked with enumerations, then you will see the similarilities between enums and associative arrays. 
    
<span class = "nl">One of the main differences between the regular and associative arrays, is that an associative array doesn't depend on using 'magic number' for its indexing.  Rather with this sort of an array you can create your own names for the index of each element in the array. </span>   
    </p> 
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    $var = array();
    $var["name"] = "carlos";
    $var["phone"] =  "555-5555";
    $var["address"] = "55 boogie st";
    print_r(var$);</pre>
    
<br />
<em>Example:</em><br /><br />   
<!-- Example -->
<?php
$var = array();
$var["name"] = "carlos";
$var["phone"] = "555-5555";
$var["address"] = "55 boogie st";
print_r($var); 
?>
    
<br />
<hr />
    
<!-- Multi Dimenisional Arrays -->
<h3>Using Multidimensional Arrays</h3>
    
    <p>Okay, let's get into multidimensional arrays.  The basic array is composed of slots which can store values starting at slot zero.
        
<span class = "nl">Imagine now that each slot can store an array of its own let's say that our first slot would contain 6 different slots or half a carton of eggs.  Then each egg would have either 0, 1, or 2 slots for each yolk inside the egg.
    
    <span class = "nl">If you wanted to find out how many different combinations of yolks you could have in a carton of 6 eggs it would be 20 because <sup>6</sup>C<sub>3</sub> is equal to 20.</p>
    
    <em>Code:</em>
    <!-- Code -->    
    <pre class="code">
    &lt;?php
        $egg = array(
        array(1, 1),
        array(2, 2),
        array(3, 1),
        array(4, 0),
        array(5, 1),
        array(6, 1),
        array(7, 2),
    );

        print "egg number: " . $egg[0][0] . " yolk per egg: " . $egg[0][1];
        print "&lt;br />" . "egg number: " . $egg[1][0] . " yolk per egg: " . $egg[1][1];
        print "&lt;br />" . "egg number: " . $egg[2][0] . " yolk per egg: " . $egg[2][1];
        print "&lt;br />" . "egg number: " . $egg[3][0] . " yolk per egg: " . $egg[3][1];
        print "&lt;br />" . "egg number: " . $egg[4][0] . " yolk per egg: " . $egg[4][1];
        print "&lt;br />" . "egg number: " . $egg[5][0] . " yolk per egg: " . $egg[5][1];
        print "&lt;br />" . "egg number: " . $egg[6][0] . " yolk per egg: " . $egg[6][1];
    &#63;> </pre>
    
<br />    
<em>Example:</em><br /><br />
<!-- Example -->    
<?php
$egg = array(
array(1, 1),
array(2, 2),
array(3, 1),
array(4, 0),
array(5, 1),
array(6, 1),
array(7, 2),
);
print "egg number: " . $egg[0][0] . " yolk per egg: " . $egg[0][1];
print "<br />" . "egg number: " . $egg[1][0] . " yolk per egg: " . $egg[1][1];
print "<br />" . "egg number: " . $egg[2][0] . " yolk per egg: " . $egg[2][1];
print "<br />" . "egg number: " . $egg[3][0] . " yolk per egg: " . $egg[3][1];
print "<br />" . "egg number: " . $egg[4][0] . " yolk per egg: " . $egg[4][1];
print "<br />" . "egg number: " . $egg[5][0] . " yolk per egg: " . $egg[5][1];
print "<br />" . "egg number: " . $egg[6][0] . " yolk per egg: " . $egg[6][1];
?>    
    
<hr />
<br />
<a href ="PhP8.html">Previous Page</a><span class ="next"><a href = "PhP10.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>