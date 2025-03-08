<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Python - Intro to Python Programming</title>
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
<?php include('..//Includes//Left_Python.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Lists and Loops - Python Development</h1>
    
<h2>Lists sorting, Reverse</h2>

    <p> In this section we will go into collections in python. One of the easiest form of a collection is a list.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code">fruits = ['apple','pear', 'orange']
print(fruits[0])</pre>    

<p>In python indexes are zero based, so we can use this to locate elements in the list and display them based on their order. Additionally, we can use a negative value to find the last or display items by the their items relative to the end of the list.</p>

<em>Code:</em>    
<!-- Code -->
<pre class="code">fruits = ['apple','pear', 'orange']
fruits.append('melon');
fruits.sort();
print(fruits)
fruits.reverse()
print(fruits)</pre>   

<h2>Appending, removing items from List</h2>

<p>We can use append and del to add or remove elements from the list. The insert function lets us insert an element at any order, adding the index to the pop function lets us remove an item based on its location or just from the end if we use it without a parameter.</p>

<em>Code:</em>    
<!-- Code -->
<pre class="code">fruits = []
fruits.append('melon')
fruits.append('mango')
fruits.append('berry')
berry = fruits.pop()
print(berry)
del fruits[0]
print(fruits)
fruits.insert(1, 'banana')
banana = fruits.remove('banana')</pre> 

<h2>Iteratoring through a list</h2>

<p>Let's look at an example that we talked about previously and see if we can print all the elements of that list. </p>

<em>Code:</em>    
<!-- Code -->
<pre class="code">toys = ['car', 'boat', 'train', 'doll']
for toy in toys:
    print(toy)</pre>

<p>Notice that the loop only begins because we use a colon and it will function within the indent of the statement. In python code blocks are executed within indentations, we don't use begin, end or curly braces like in other languages. But what if we only want to iterate through a set amount of elements or change how we advance the iterator. 

<span class ="nl">For this we can use the range function. We can also combine the range function with a list function in order to store and initialize elements in an array.</span></p>

<em>Code:</em>    
<!-- Code -->
<pre class="code">for value in range(1,11):
    print(value)

numbers = list(range(4,10))
for number in numbers:
    print(number)</pre>

<br />
<hr />
    
<a href="Python.php">Previous Page</a>
<span class = "next"><a href="Python2.php">Next Page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>