<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Forum part 5</title>
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
<?php include('..//Includes//Left_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Web Applications</h1>
    
<h2>Building a Forum part 5</h2>
    
    <p>This section is going to go over all the functions necessary for creating the html on the page.  Some of it will be really confusing so let's take our time and go over each section slowly. I will start will the treenode class because many of the functions are used from that class.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// treenode_class.php Script</span>
    &lt;?php
    
    class treenode {
        <span class = "comments">// Member variables</span>
        public $m_postid;
        public $m_title;
        public $m_poster;
        public $m_posted;
        public $m_children;
        public $m_childlist;
        public $m_depth;
        
        <span class = "comments">// Constructor</span>
        public function __construct($postid, $title, $poster, $posted, $children,
        $expand, $depth, $expanded, $sublist) {
            <span class = "comments">// Initialize the member variables</span>
            $this->m_postid = $postid;
            $this->m_title = $title;
            $this->m_poster = $poster;
            $this->m_posted = $poster;
            $this->m_children  = $children;
            $this->m_childlist = array();
            $this->m_depth = $depth;
            
            <span class = "comments">// Only execute this code if parent post has children replies</span>
            if(($sublist || $expand) &amp;&amp; $children ) {
                $conn = db_connect();
                
                $query = "select * from header where parent = :postid order by posted";
                $stmt = $conn->prepare($query);
                $stmt->bindValue(':postid', $postid);
                $result = $stmt->execute();
                
                <span class = "comments">// determine which children have been expanded</span>
                for($count = 0; $row = $stmt->fetch(); $count++) {
                    if($sublist || $expanded[$row['postid']] == true) {
                        $expand = true;
                    } else {
                        $expand = false;
                    }
                    
                    <span class = "comments">// populate each element in childlist array w/ information from each reply</span>
                    $this->m_childlist[$count] = new treenode($row['postid'], $row['title'],
                                $row['poster'], $row['posted'],
                                $row['children'], $expand,
                                $depth+1, $expanded, $sublist);
                }
            }
        }
        
        function display( $row, $sublist = false) {
            <span class = "comments">// won't display if post has no replies</span>
            if($this->m_depth > -1 ) {
                <span class = "comments">// assign alternating colors for each reply</span>
                echo "&llt;tr>&lt;td bgcolor=\"";
                if($row % 2) {
                    echo "#cccccc\">";
                } else {
                    echo "#ffffff\">";
                }
                
                <span class = "comments">// indent each reply based on depth</span>
                for($i = 0; $i &lt; $this->m_depth; $i++) {
                    echo "&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;";
                }
                
                <span class = "comments">// display a minus, plus sign or space for no children</span>
                if (!$sublist &amp;&amp; $this->m_children &amp;&amp; sizeof($this->m_childlist)) {
                    echo "&lt;a href = \"index.php?collapse=".$this->m_postid."#"
                    .$this->m_postid."\"> - &lt;/a>\n";
                } else if (!$sublist &amp;&amp; $this->m_children) {
                    echo "&lt;a href=\"index.php?expand=".$this->m_postid."#"
                    .$this->m_postid."\"> + &lt;/a>\n";
                } else {
                    echo "&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;";
                }
                
                 <span class = "comments">// display the time of the post formatted properly</span>
                echo "&lt;a name=\"".$this->m_postid."\">&lt;a href=
                \"view_post.php?postid=".$this->m_postid."\">"
                .$this->m_title." - ".$this->m_poster." - ".
                reformat_date($this->m_posted)."&lt;/a>&lt;/td>&lt;/tr>";
                $row++;
            }
                
             <span class = "comments">// repeat this process for each additional reply</span>
            $num_children = sizeof($this->m_childlist);
            for($i = 0; $i &lt; $num_children; $i++) {
                $row = $this->m_childlist[$i]->display($row, $sublist);
            }
            return $row;
        }
    }
    ?></pre>
    
    <p>Alright let's try to understand this class which looks overly complex. The first thing we should notice is that it has 7 public member variables. Five of those variables are ones that we can initialize using the constructor.
    
    <span class = "nl">The first variable refers to a column postid which stands for the primary key of a post, title refers to the title of a post, poster is the name of the poster, posted refers to the date of the post, children is the amount of replies the post has.</span>
    
    <span class = "nl">If we look at the constructor we see three more parameters which can be passed into the object: expand, depth and childlist. Expand refers to if the post has replies which are hidden or shown, depth refers to the alignment of the post (the more the depth the further over to the right it is).</span>
    
    <span class = "nl">Let's look at the first condition, it checks to see if either the sublist or expand variable are true and if the child variable is true.  This indicates that the post has replies, it will not execute if the post has no replies. First it creates a connection to the database and requests all the information from the header table.</span>
        
    <span class = "nl">Using a for loop we can determine which posts are in the 'expanded' array by passing their postid's as elements and checking the value of each element (true or false). This means if the post has a reply which the user has selected to see then display it, and if the user hasn't selected the reply then hide it.</span>
        
    <span class = "nl">The final line in the constructor is the recursive part of this function which calls itself. It will keep filling in the elements of childlist array with information pertaining to each post from the header table ( postid, title, poster, posted, children, etc. ). However, the for loop will end when there are not more replies left.</span>
    
    <span class = "nl">The for loop will simply end because it won't be able to initialize any more row variables (since the table cannot fetch any more rows from the database). </span>
        
    <span class ="nl"><u>Display Method</u></span>    
        
    <span class = "nl">Let's move on to a method of our treenode class called display. It's job is create the html necessary for allowing the user to expand or collapse replies to posts. </span>
        
    <span class = "nl">The function is also a recursive function, which means it calls itself. First it checks the length of the depth (how many indentations), if that number is less than one it does nothing, because it doesn't need to create links for replies. </span>
        
    <span class = "nl">If the row has a depth greater than negative one, it will style the replies with altenating colors. Then it will create an indentation for each reply, so if the reply is the fifth down from the parent post, then it will need to give that reply five indentations. </span>
        
    <span class = "nl">Next it will check if the sublist returns a false value, if the children variable is true if the size of the childist array is greater than zero. If all is correct, it will give the user an option to collapse the rows below it, however if only the sublist is false and there are children, then it will give an option to expand the rows. Finally, if there are no children, then the condition will just create a blank indentation.</span>
        
    <span class = "nl">Following that check, the post needs a time to be posted and formated, so that is what it does next. It will also create a link which displays the name of the poster and title of the post in order to view the post's message.</span>
        
    <span class = "nl">The last line of the display method assigns the number of replies to a variable and then calls itself recursively for every reply to the post.</span></p>
    

<hr />
<br />
<a href = "Web_Apps3.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps5.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     