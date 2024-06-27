<!doctype html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>Styling Tables - CSS Web Development</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    <style>
        
        .table {
           border-collapse: collapse;
        }
        
        .table th, .table td {
            border: 1px solid black;
        }
        
        #col1, #col2, #col3 {
            width: 200px;
        }
        
        .table2 {
            border-spacing: 10px;
        }
        
        .table2 th, .table2 td {
            width: 200px;
            border: 1px solid black;
        }
        
        .table3 {
           border-collapse: collapse;
            font-family: "Trebuchet MS"
        }
        
        .table3 th, .table3 td {
            border: 1px solid black;
            padding: 4px 7px 4px 7px;
            text-align: left;
        }
        
        .table4 {
            font-family: "Trebuchet MS";
            border-collapse: collapse;
        }
        
        .table4 th, .table4 td {
            border: 1px solid black;
            padding: 4px 7px 4px 7px;
            text-align: left;
        }
        
        .table4 th {
            text-transform: uppercase;
            background: linear-gradient(to bottom, red, brown);
            color: white;
            padding: 8px 7px;
        }
        
        .table4 tr:nth-of-type(even) {
            background-color: rgba(255,155,255,.4);
        }
        
        .table4 tr:nth-of-type(odd) {
            background-color: rgba(155,255,255,.4);
        }
        
        #col1, #col2, #col3 {
            width: 200px;
        }
        
    </style>
    </head>
    <body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Css.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Styling Tables - CSS Web Development</h1>
        
        <h2>Styling Tables</h2>
        
            <p>In this section we are going to learn how to style a table. This means working with borders, positioning text within table rows, styling the columns, etc.
        
        <span class = "nl">First, let's look on how to actually create a table in html. A table consists of four main elements: table (table) tag, table row (tr) tag, table header (th) tag and table data (td) tag. The header and data tags are used to hold the cells, the table row is used to organize the rows for each cell. </span>
        
        <span class = "nl">Alright, let's look at an example of a table, below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;table>
        &lt;tr>
            &lt;th> Table header 1 &lt;/th>
            &lt;th> Table header 2 &lt;/th>
            &lt;th> Table header 3 &lt;/th>
        &lt;/tr>
        &lt;tr>
            &lt;td> Table row 1 col 1 &lt;/td>
            &lt;td> Table row 1 col 2 &lt;/td>
            &lt;td> Table row 1 col 3 &lt;/td>
        &lt;/tr>
        &lt;tr>
            &lt;td> Table row 2 col 1 &lt;/td>
            &lt;td> Table row 2 col 2 &lt;/td>
            &lt;td> Table row 2 col 3 &lt;/td>
        &lt;/tr>
    &lt;/table></pre>
        
    <br />
    <em>Example:</em><br /><br />
     <table>
        <tr>
            <th> Table header 1 </th>
            <th> Table header 2 </th>
            <th> Table header 3 </th>
        </tr>
        <tr>
            <td> Table row 1 col 1 </td>
            <td> Table row 1 col 2 </td>
            <td> Table row 1 col 3 </td>
        </tr>
        <tr>
            <td> Table row 2 col 1 </td>
            <td> Table row 2 col 2 </td>
            <td> Table row 2 col 3 </td>
        </tr>
    </table>
        
        <p>Ok so this is very ugly example. Let me add some style to this table to make it look a little nicer. There are table borders, cell padding, and background colors can spruce things up a bit.</p>
        
    <hr />    
        
        <h3>Colgroup</h3>
        
            <p>First let's add some columns for controlling each column and lets add some borders in our style.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;style>
        .table {
           border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid black;
        }
        #col1, #col2, #col3 {
            width: 200px;
        }
    &lt;/stlye>
    
    &lt;table class = "table">
        <span class = "comments">&lt;!-- colgroup used to select columns --></span>
        &lt;colgroup>
			&lt;col id="col1">
			&lt;col id="col2">
			&lt;col id="col3">
        &lt;/colgroup>
        <span class = "comments">&lt;!-- scope attribute defines th as the header of a column --></span>
        &lt;tr>
            &lt;th scope ="col"> Table header 1 &lt;/th>
            &lt;th scope ="col"> Table header 2 &lt;/th>
            &lt;th scope ="col"> Table header 3 &lt;/th>
        &lt;/tr>
        &lt;tr>
            &lt;td> Table row 1 col 1 &lt;/td>
            &lt;td> Table row 1 col 2 &lt;/td>
            &lt;td> Table row 1 col 3 &lt;/td>
        &lt;/tr>
        &lt;tr>
            &lt;td> Table row 2 col 1 &lt;/td>
            &lt;td> Table row 2 col 2 &lt;/td>
            &lt;td> Table row 2 col 3 &lt;/td>
        &lt;/tr>
    &lt;/table></pre>
        
    <br />    
    <em>Example:</em><br /><br />   
        
    <table class = "table">
        <colgroup>
			<col id="col1">
			<col id="col2">
			<col id="col3">
        </colgroup>
        <tr>
            <th scope ="col"> Table header 1 </th>
            <th scope ="col"> Table header 2 </th>
            <th scope ="col"> Table header 3 </th>
        </tr>
        <tr>
            <td> Table row 1 col 1 </td>
            <td> Table row 1 col 2 </td>
            <td> Table row 1 col 3 </td>
        </tr>
        <tr>
            <td> Table row 2 col 1 </td>
            <td> Table row 2 col 2 </td>
            <td> Table row 2 col 3 </td>
        </tr>
    </table>
        
        <p>By creating a colgroup you can style the columns for the various tables. You can just set the 'span' attribute in the colgroup tag and set the value to span as many columns as you would like to style.
        
        <span class = "nl">Or you can style the columns individually by using additional 'col' tags under the colgroup tag.</span>
        
        <span class = "nl">In the example above we only set three styles width for our columns, border for our table cells and table headings, and border collapse to ensure that the borders aren't doubled. You can adjust the border attribute using something called border-spacing. </span></p>
        
    <hr />
        
    <!-- border-spacing -->
    <h3>Border-spacing</h3>
        
            <p>Let's see what our table would look like if we set the spacing to 10px.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;style>
        .table {
           border-spacing: 10px;
        }</pre>
        
        <br />
        <em>Example:</em><br />
        <!-- example -->
        <table class = "table2">
        <tr>
            <th> Table header 1 </th>
            <th> Table header 2 </th>
            <th> Table header 3 </th>
        </tr>
        <tr>
            <td> Table row 1 col 1 </td>
            <td> Table row 1 col 2 </td>
            <td> Table row 1 col 3 </td>
        </tr>
        <tr>
            <td> Table row 2 col 1 </td>
            <td> Table row 2 col 2 </td>
            <td> Table row 2 col 3 </td>
        </tr>
    </table>
        
        <p>Alright, so without the 'border-collapse' property, we would need to set the 'border-spacing' property to zero pixels. Even then the borders would be doubled in their width because, they are next to each other.
        
        <span class = "nl">Let's see how can start to align some of this text and add padding or margins to our cells.</span></p>
        
    <hr />    
        
    <!-- cell padding -->
    <h3>Cell padding &amp; Text-align</h3>
        
        <p>The html on my code isn't going to change so, I will just show the 'css' styles for the remainder of this tutorial. Let me add some padding to some of the cells in my table and align the words to the left. 
            
    <span class = "nl">There is another attribute called 'vertical align' which allows me to place the words at the top or near the bottom of the cell. Yet, with proper padding this shouldn't be an issue.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;style>
     .table {
            font-family: "Trebuchet MS";
           border-collapse: collapse;
        }
        
        .table th, .table td {
            border: 1px solid black;
            padding: 4px 7px 4px 7px;
            text-align: left;
        }
        
        #col1, #col2, #col3 {
            width: 200px;
        }
    &lt;/stlye></pre>
        
    <br />    
    <em>Example:</em><br /><br />
    <table class = "table3">
        <colgroup>
			<col id="col1">
			<col id="col2">
			<col id="col3">
        </colgroup>
        <tr>
            <th scope ="col"> Table header 1 </th>
            <th scope ="col"> Table header 2 </th>
            <th scope ="col"> Table header 3 </th>
        </tr>
        <tr>
            <td> Table row 1 col 1 </td>
            <td> Table row 1 col 2 </td>
            <td> Table row 1 col 3 </td>
        </tr>
        <tr>
            <td> Table row 2 col 1 </td>
            <td> Table row 2 col 2 </td>
            <td> Table row 2 col 3 </td>
        </tr>
    </table>
        
    <hr />    
    <!-- adding color -->    
    <h3>Adding Color</h3>
        
        <p>We can add a few more rows and add some color to make it look fancy.  Let's see an example of this.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;style>
     .table {
            font-family: "Trebuchet MS";
            border-collapse: collapse;
        }
        
        .table th, .table td {
            border: 1px solid black;
            padding: 4px 7px 4px 7px;
            text-align: left;
        }
        
        .table th {
            text-transform: uppercase;
            background: linear-gradient(to bottom, red, brown);
            color: white;
            padding: 8px 7px;
        }
        
        .table tr:nth-of-type(even) {
            rgba(255,155,255,.4);
        }
        
        .table tr:nth-of-type(odd) {
            rgba(155,255,255,.4);
        }
        
        #col1, #col2, #col3 {
            width: 200px;
        }
    &lt;/stlye></pre>
     
    <br />
    <em>Example:</em><br /><br />
    <table class = "table4">
        <colgroup>
			<col id="col1">
			<col id="col2">
			<col id="col3">
        </colgroup>
        <tr>
            <th scope ="col"> Table header 1 </th>
            <th scope ="col"> Table header 2 </th>
            <th scope ="col"> Table header 3 </th>
        </tr>
        <tr>
            <td> Table row 1 col 1 </td>
            <td> Table row 1 col 2 </td>
            <td> Table row 1 col 3 </td>
        </tr>
        <tr>
            <td> Table row 2 col 1 </td>
            <td> Table row 2 col 2 </td>
            <td> Table row 2 col 3 </td>
        </tr>
        <tr>
            <td> Table row 3 col 1 </td>
            <td> Table row 3 col 2 </td>
            <td> Table row 3 col 3 </td>
        </tr>
        <tr>
            <td> Table row 4 col 1 </td>
            <td> Table row 4 col 2 </td>
            <td> Table row 4 col 3 </td>
        </tr>
        <tr>
            <td> Table row 5 col 1 </td>
            <td> Table row 5 col 2 </td>
            <td> Table row 5 col 3 </td>
        </tr>
        <tr>
            <td> Table row 6 col 1 </td>
            <td> Table row 6 col 2 </td>
            <td> Table row 6 col 3 </td>
        </tr>
    </table>
        
        
        <hr />        
        <br />
        <a href = "Css25.html"> Previous Page</a>
        <span class = "next">
        <a href = "Css27.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 