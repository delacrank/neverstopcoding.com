<?php
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
?>

    <h1>Something happenings</h1>
    
        <p>here we can display the data</p>
        
<?php 
    echo "<p>Let's display the first element here " . $input1 . "</p>";
    echo "<p>Let's display the second element here " . $input2 . "</p>";
    $total = $input1 + $input2;
    echo '<p>The sum of these elements is ' . $total . '</p>';
?>