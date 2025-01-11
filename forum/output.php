<?php
    function reformat_date($datetime) {
        list($year, $month, $day, $hour, $min, $sec) = preg_split( '/[: -]/', $datetime );
        return "$hour:$min: $month/$day/$year";
    }
    
    function display_tree($expanded, $catid, $row = 0, $start = 0) {
        
        if($start > 0) {
            $sublist = true;
        } else {
            $sublist = false;
        }
        
        $tree = new treenode($start, '', '', '', 1, $catid, true, -1, $expanded, $sublist);
        
        $tree->display($row, $sublist);
        
        echo '</table>';
        
    }
    
    function display_replies_line() {
        global $table_width;
    ?>
        <table width="<?php echo $table_width ?>" cellpadding="4" 
        cellspacing="0" bgcolor="#cccccc">
        <tr><td><strong>Replies to this message</strong></td></tr>
        </table>
    <?php
    }

    function display_cat_toolbar() {
    ?>
        <ul class = "forum_cats_toolbar">
            <li><a href="new_category.php">
                    Create a new category</a></li>
        </ul>
    <?php
    }
    
    function display_cat_tree() {
        $categories = get_categories();
        if($categories) {
        ?>
        <table class = "forum_table">
            <tr>
                <th colspan="4">Categories</th>
            </tr>
        <?php foreach($categories as $cat) : ?>  
            <tr>
                <td width ="20%">
                    <a href="view_post_index.php?catid=<?php echo $cat['catid'] ?>"><?php echo $cat['cat_title']?></a></td>
                <td width="40%">
                    <?php echo $cat['cat_desc']; ?>
                </td>
                <td width="20%">
                    <?php echo "date posted:<br />".reformat_date($cat['cat_date']); ?>
                </td>
                <td>
                    <?php echo "Replies: ".get_reply_count($cat['catid'])[0];
                          echo "<br />Views: ".display_view_cat_count($cat['catid']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
        <?php 
        } else {
            echo '<p>Sorry, no categories presently.</p>';
        }
        
    }

    function display_post_toolbar() {
        global $catid;
        ?>
    
        <ul class = "forum_posts_toolbar">
            <li><a href="new_post.php?parent=0&catid=<?php echo $catid; ?>">
                    Create a new post</a></li>
            <li><a href="view_post_index.php?expand=all&catid=<?php echo $catid; ?>">
                    Expand all Posts</a></li>
            <li><a href="view_post_index.php?collapse=all&catid=<?php echo $catid; ?>">
                    Collapse all Posts</a></li>
        </ul>
    <?php
    }

    function display_new_category_form($cat_title ='', $cat_desc='') {
    ?>
        <p>Create a new Category right here.</p>

        <form class = "forum-new_category" action="store_new_category.php" method="post">
        <fieldset>
            <p>
                <label>Category Title:</label>
                <input type="text" name="cat_title" value="<?php echo $cat_title ?>" size = "20" maxlength="20" />
            </p>
            <p>
                <label>Category Description:</label>
                <input type="text" name="cat_desc" value="<?php echo $cat_desc ?>" size = "100" maxlength="100" />
            </p>
            <input type="submit" name="cat"  value = "CREATE CATEGORY" alt="Create Cateogory"/>
        </fieldset>
        </form>
    <?php
    }
    
    function display_post($post) {
        if(!$post) {
            return;
        }    
        
    ?>
        <table class = "forum_table_view">
        <tr>
            <th colspan="3">
                <?php echo $post['title']; ?>
            </th>
        </tr>
        <tr>
            <td width="25%">
                From: <?php echo $post['username'];?><br />
                On: <?php echo $post['posted'];?>
            </td>
            <td colspan ="2">
                <?php echo nl2br($post['message']);?>
            </td>
        <tr>
            <td colspan = "3" align="right">
                <a href="new_post.php?parent=0&catid=<?php echo $post['catid']; ?> "> new post </a>
                <a href="new_post.php?parent=<?php echo $post['postid']; ?>&catid=<?php echo $post['catid']; ?>">
                reply </a>
            <a href="view_post_index.php?expanded=<?php echo $post['postid']; ?>&catid=<?php echo $post['catid']; ?>">
            index </a>
            </td>
        </tr>
        </table>
    <?php    
    }
    
    function display_new_post_form($parent = 0, $area = 1, $title='',
    $message, $userid, &$catid) {
    ?>

    <p>Create a new post here.</p>
        
    <form class = "forum-new_post" action="store_new_post.php?expand=<?php echo $parent;?>&catid=<?php echo $catid; ?>" method = "post">
    <fieldset>
    <p>
        <label>Post Title:</label>
        <input type="text" name="title" value="<?php echo $title ?>" size = "20" maxlength="20" />
    </p>
    <p>
        <label>Message:</label>
    </p>
    <textarea name="message" rows="10" cols="55"><?php echo stripslashes($message);?></textarea>
    <p>
        <input type="submit" name="post"  value = "POST MESSAGE" alt="Post Message"/>
    </p>
        <input type="hidden" name="parent" value="<?php echo $parent; ?>">
        <input type="hidden" name="area" value="<?php echo $area; ?>">
        <input type="hidden" name="userid" value="<?php echo $userid; ?>">
        <input type="hidden" name="catid" value="<?php echo $catid; ?>">
    </fieldset>
    </form>
<?
    }
?>