<?php
    require_once('../connection/connection.php');
    
    class treenode {
        // Member variables
        public $m_postid;
        public $m_title;
        public $m_poster;
        public $m_posted;
        public $m_children;
        public $m_childlist;
        public $m_depth;
        public $m_catid;
        
        // Constructor
        public function __construct($postid, $title, $poster, $posted, $children, $catid, $expand, $depth, $expanded, $sublist) {
            // Initialize the member variables
            $this->m_postid = $postid;
            $this->m_title = $title;
            $this->m_poster = $poster;
            $this->m_posted = $posted;
            $this->m_catid = $catid;
            $this->m_children  = $children;
            $this->m_childlist = array();
            $this->m_depth = $depth;
            
            // Only execute this code if parent post has children replies
            if(($sublist || $expand) && $children ) {
                $conn = db_connect();
                
                $query = "select parent, title, header.catid, children, area, posted, postid, username from header, user, categories where header.userid = user.userid and header.catid = categories.catid and parent = :postid and header.catid = :catid order by posted;";
                $stmt = $conn->prepare($query);
                $stmt->bindValue(':postid', $postid);
                $stmt->bindValue(':catid', $catid);
                $result = $stmt->execute();
                
                // determine which children have been expanded
                for($count = 0; $row = @$stmt->fetch(); $count++) {
                    if($sublist || @$expanded[$row['postid']] == true) {
                        $expand = true;
                    } else {
                        $expand = false;
                    }
                    
                    // populate each element in childlist array w/ information from each reply
                    $this->m_childlist[$count] = new treenode($row['postid'],                   $row['title'],
                                $row['username'], 
                                $row['posted'],
                                $row['children'], 
                                $row['catid'], 
                                $expand,
                                $depth+1, $expanded, $sublist);
                }
            }
        }
        
        function display( $row, $sublist = false) {
            // won't display if post has no replies
            if($this->m_depth > -1 ) {
                echo "<tr><td width ='40%'>";
                
               
                for($i = 0; $i < $this->m_depth; $i++) {
                    echo "<img src = '../Images/spacer.gif' height = 22
                          width = 22 />";
                } 
                
                // display a minus, plus sign or space for no children
                if (!$sublist && $this->m_children && sizeof($this->m_childlist)) {
                    echo "<a href = \"view_post_index.php?collapse=".$this->m_postid."&catid=".$this->m_catid."\">&nbsp; - </a>\n";
                } else if (!$sublist && $this->m_children) {
                    echo "<a href=\"view_post_index.php?expand=".$this->m_postid."&catid=".$this->m_catid."\">&nbsp; + </a>\n";
                } else {
                    echo "<img src = '../Images/spacer.gif' height = 22
                          width = 22 />";
                }
                
                echo "<a name = $this->m_postid ><a href = 
                    'view_post.php?postid=$this->m_postid'>$this->m_title</a></a></td>
                    <td width ='20%'>Started by: $this->m_poster</td><td width ='20%'>Date: ".reformat_date($this->m_posted)."</td>
                    <td width ='20%'>
                    Replies:".(get_post_replies($this->m_postid) - 1)."
                    Views:".display_view_count( $this->m_catid, $this->m_postid)."</td>"; 
                echo '</tr>';
                
                $row++;
            }
                
             // repeat this process for each additional reply
            $num_children = sizeof($this->m_childlist);
            for($i = 0; $i < $num_children; $i++) {
                $row = $this->m_childlist[$i]->display($row, $sublist);
            }
            return $row;
        } 
    }
    ?>