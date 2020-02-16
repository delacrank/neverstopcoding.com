
<?php 
    include_once('../forum/Include_function.php');
    $categories = get_categories();
    if(!$categories) {
    ?>
    <div id ="leftz">
    <ul> <li onmouseover="" id="menu_title">Forum Topics
        <ul>
            <li><a href="new_category.php">Create a Category</a></li>
            </ul></li></ul>
        </div>
    <?php
    } else {
    ?>
    <div id ="leftz">
    <ul> <li onmouseover="" id="menu_title">Forums
        <ul>
        <?php foreach($categories as $cat) : ?>  
        <li><a href="view_post_index.php?catid=<?php echo $cat['catid'] ?>"><?php echo $cat['cat_title']?></a></li>
        <?php endforeach; ?>
        </ul></li></ul>
    </div>
    <?php 
    }
    ?>