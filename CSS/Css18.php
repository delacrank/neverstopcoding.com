<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>Selectors Part 2 - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style type="text/css">
        .ok li {
            color: red;
        }    
        
        p.ok1 > span {
            color: red
        }
        
        ul.ok1 > li {
            color: blue;
        }
        
        .ok3 li:nth-child(3n) {
            color: red;
        }
        
        p.ok4 + p
        {
            color: red;
        }
    </style>
    </head>
    
<body> <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Css.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Selectors Part 2 - CSS Web Development</h1>
        
        <h2>Selectors Cont.</h2>
        
            <p>Selectors are a good way to apply styles to different elements in our html file. Using css selectors can make our html files smaller, we won't have to worry about applying different classes or identifies to each element we want to select, as long as we know its order in the tree.
        
        <span class = "nl">The html tree starts with the 'html' tag, then it branches off into a 'head' and 'title', or the 'body' tag, within the 'body' tag you can add 'h1, h2, h3' tags or header tags and their children are the 'p' tags, then you have the 'ul, ol' unordered and ordered list tags, from there you can select the 'li' list item tags, and an 'anchor' tag.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;html>
            &lt;head>
                    &lt;title>
                    &lt;/title>
            &lt;/head>
            &lt;body>
                    &lt;h1>
                            &lt;p>
                                    &lt;span>
                                    &lt;/span>
                            &lt;/p>
                    &lt;/h1>
                    &lt;ul>
                            &lt;li>
                                    &lt;a>
                                    &lt;/a>
                            &lt;/li>
                    &lt;/ul>
            &lt;/body>
    &lt;/html></pre>
        
        <p>There are two types of selectors I haven't mentioned yet: Descendant Selectors and Child Selectors. In order to use a descendent selector you use add the parent first and then the child. Only selectors that are descendants of the parent element can be used for those styles.
        
    <span class = "nl">The syntanx for the Descendant Selector is similar to the group selector only without the commas. In the example below, these descendants are being selected because they are list item elements which fall under the class 'ok'.</span>
    </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .ok li {
        color: red;
    }
    
    &lt;ul class = "ok">
        &lt;li> item 1 &lt;/li>
        &lt;li> item 2 &lt;/li>
        &lt;li> item 3 &lt;/li>
    &lt;/ul></pre>
        
    <br />
    <em>Example:</em><br />
    <!-- example -->
    <ul class = "ok">
        <li> item 1 </li>
        <li> item 2 </li>
        <li> item 3 </li>
    </ul>
        
    <p>Alright, now that you know how to use the descendant selector, let's look into how we can use the child selectors.</p>
        
    <hr />
        
    <!-- Child selector -->
    <h3>Child Selectors</h3>
        
        <p>There are several selectors: :first-child, :only-child, :nth-child(), :first-of-type, :last-of-type. These are all in addition to the '>' operator which, selects the immediate child of the parent element.
        
    <span class = "nl">In order to select multiple elements with the '>' operator, then you would need to find another parent for that child. So, two select three paragraph elements you might do something like: 'html > p', 'body > p', 'h1 > p'. Let's see some examples using the '>' to select child elements.  Notice, that every first child element is selected so if you have multiple parent elements then the first child for each parent element will get selected.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    p.ok > span {
        color: red;
    }
    
    ul.ok > li {
        color: blue;
    }
    
    &lt;p class = "ok"> hello, &lt;span> mister &lt;/span> man. &lt;/p>
    
    &lt;ul>
     &lt;li> item 1 &lt;li>
    &lt;/ul>
    </pre>
        
    <br />    
    <em>Example:</em><br />
    <!-- example -->
    <p class = "ok1"> hello, <span> mister </span> man. </p>
    <ul class = "ok1">
        <li> item 1 </li>
    </ul>
        
        <p>I'm not going to go into detail explaing how some of the other child selectors work.  However, I will explain how the :nth-child() selector.  It's actually a function, we can pass several arguments into it which determine which child gets selected. Some of the arguments are numbers, to select the second child you would type ':nth-child(2)', however, to select the every third child element you would type in ':nth-child(3n)', to select the odd elements ':nth-child(odd)' same thing goes for even ':nth-child(even)'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    .ok li:nth-child(3n) {
        color: red;
    }
    
    &lt;ul class = "ok">
        &lt;li> item 1 &lt;/li>
        &lt;li> item 2 &lt;/li>
        &lt;li> item 3 &lt;/li>
        &lt;li> item 4 &lt;/li>
        &lt;li> item 5 &lt;/li>
        &lt;li> item 6 &lt;/li>
        &lt;li> item 7 &lt;/li>
        &lt;li> item 8 &lt;/li>
    &lt;/ul></pre>
        
    <br />
    <em>Example</em><br />
    <!-- exmpale -->
    <ul class = "ok3">
        <li> item 1 </li>
        <li> item 2 </li>
        <li> item 3 </li>
        <li> item 4 </li>
        <li> item 5 </li>
        <li> item 6 </li>
        <li> item 7 </li>
        <li> item 8 </li>
    </ul>
        
        <p>The :nth-of-type() selector refers to the type of element being selected, it is also a function, so you can pass arguments into it: 1, 1n, odd, even.</p>
        
    <!-- siblings -->
    <h3>Siblings</h2>
        
        <p>In order to select another sibiling you can use the addition adjacent sibiling '+' operator. This only works for the adjacent sibiling which, is a child element next to another one ( div + p ).
        
    <span class = "nl">The other sibiling selector is called the general sibiling combinatory selector, it uses '~' operator to selects all the adjacent sibilings ( h2 ~ p { } ).</span>
        
    <span class = "nl">Let's see an example of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    p.ok + p { 
        color: red;    
    }
    
    &lt;p class = "ok"> one paragraph &lt;p>
    &lt;p> an adjacent sibiling &lt;p></pre>
        
    <br />    
    <em>Example:</em><br />
    <!-- example -->
    <p class = "ok4"> one paragraph </p>
    <p> an adjacent sibiling </p>
        
        <hr />        
        <br />
        <a href = "Css17.html"> Previous Page</a>
        <span class = "next">
        <a href = "Css19.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 