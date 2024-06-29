<?php
    function expand_all(&$expanded) {
        // mark children as expanded
        $conn = db_connect();
        $query = "select postid from header where children = 1";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();
        for($i = 0; $i < $num; $i++ ) {
            $this_row = $stmt->fetch();
            $expanded[$this_row[0]] = true;
        }
    }
    
    function get_post($postid) {
        // extract one post from the database and return as an array
        if(!$postid) {
            return false;
        }
        $conn = db_connect();
        // get all header information from 'header'
        $query = "select parent, header.catid, title, children, area, posted, postid, username from header, user, categories where header.userid = user.userid and header.catid = categories.catid and postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        }
        
        if($stmt->rowCount() != 1) {
           return false;
        }
        
        $post = $stmt->fetch();
        // get message from body and add it to the previous result
        $query = "select * from body where postid = :postid";
        $stmt2 = $conn->prepare($query);
        $stmt2->bindValue(':postid', $postid);
        $result2 = $stmt2->execute();
        if(!$result2) {
            return false;
        }
        
        if($stmt2->rowCount() > 0) {
            $body = $stmt2->fetch();
            if($body) {
                $post['message'] = $body['message'];
            }
        }
        return $post;
    }
    
    
    function get_post_title($postid) {
        // return post title
        if(!$postid) {
            return '';
        }
        
        $conn = db_connect();
        $query = "select title from header where postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid);
        $stmt->execute();
        if($stmt->rowCount() != 1) {
            return '';
        }
        $this_row = $stmt->fetch();
        return $this_row[0];
    }
    
    function get_post_message($postid) {
        // return message
        if(!$postid) {
            return '';
        }
        
        $conn = db_connect();
        $query = "select message from body where postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            $this_row = $stmt->fetch();
            return $this_row[0];
        }
    }

    function add_quoting($string, $pattern = '> ') {
        return $pattern.str_replace("\n", "\n$pattern", $string);
    }

    function get_categories() {
        $conn = db_connect();
        $query = "select * from categories";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();
        if($stmt->rowCount() > 0) {
            $row = $stmt->fetchAll();
        } else {
            return false;
        }  
        
        return $row;
    }


    function store_new_category($post) {
        $conn = db_connect();
    
        // check that form is filled out
        if(!filled_out($post)) {
            return false;
        }
        $post = clean_all($post);
        $query = "select cat_title from categories where cat_title = :cat_title";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':cat_title', $post['cat_title']);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            return false;
        }
        
        // insert values into header table
        $query = "insert into categories values
            ( default,
                :cat_title,
                :cat_desc,
                now())";
        $stmt2 = $conn->prepare($query);
        $stmt2->bindValue(':cat_title', $post['cat_title']);
        $stmt2->bindValue(':cat_desc', $post['cat_desc']);
        $result = $stmt2->execute();
    
        if(!$result) {
            return false;
        } else {
            return true;
        }
    } 

    function get_category_id($postid) {
        $conn = db_connect();
        $query = "select catid from header where postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid);
        $result = $stmt->execute();
        if(!$result) return false;
        if($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
        } else {
            return false;
        }
        return $row[0];
    }

    function get_reply_count($catid) {
        $conn = db_connect();
        $query = "select count(header.postid) from header, categories where header.catid = categories.catid and header.catid = :catid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':catid', $catid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        }
        
        $row = $stmt->fetch();
        
        return $row;
    }

    function get_user_id($username) {
        $conn = db_connect();
        $query = "select userid from user where username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':username', $username);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        } 
        
        $row = $stmt->fetch();
        if($row > 0){
            return $row;    
        } else {
            return false;
        }
    }

    function store_new_post($post) {
        $conn = db_connect();
    
        // check that form is filled out
        if(!filled_out($post)) {
            return false;
        }
        $post = clean_all($post);
    
        // check that topic exists in database
        if($post['parent'] != 0 ) {
            $query = "select postid from header where postid = :post_parent";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':post_parent', $post['parent']);
            $stmt->execute();
            if($stmt->rowCount() != 1) {
                return false;
            }
        }
    
        // Check for duplicate topics
        $query = "select header.postid, header.userid from header, body, user where
              header.postid = body.postid and
              user.userid = header.userid and 
              header.parent = :parent and
              header.userid = :user_id and
              header.title = :title and
              header.area = :area and 
              body.message = :message";
        $stmt2 = $conn->prepare($query);
        $stmt2->bindValue(':parent', $post['parent']);
        $stmt2->bindValue(':user_id', $post['userid']);
        $stmt2->bindValue(':title', $post['title']);
          $stmt2->bindValue(':area', $post['area']);
        $stmt2->bindValue(':message', $post['message']);
        $result = $stmt2->execute();
        if(!$result) {
            return false;
        }
    
        if($stmt2->rowCount() > 0 ) {
            $this_row = $stmt2->fetch();
            return $this_row;
        }
        
        // insert values into header table
        $query = "insert into header values
             ( :post_parent,
               :post_title,
               0,
               :post_area,
               now(),
               default,
               :user_id,
               :cat_id
               )";
        $stmt3 = $conn->prepare($query);
        $stmt3->bindValue(':post_parent', $post['parent']);
        $stmt3->bindValue(':post_title', $post['title']);
        $stmt3->bindValue(':post_area', $post['area']);
        $stmt3->bindValue(':user_id', $post['userid']);
        $stmt3->bindValue(':cat_id', $post['catid']);
        
        $result = $stmt3->execute();
    
        if(!$result) {
            return false;
        }
        
        // topic now has a child
        $query = "update header set children = 1 where postid = :post_parent";
    
        $stmt4 = $conn->prepare($query);
        $stmt4->bindValue(':post_parent', $post['parent']);
        $result = $stmt4->execute();
        if(!$result) {
            return false;
        }
    
        // check for duplicate topic posts
        $query = "select header.postid, user.userid from user join header using (userid) left join body on header.postid = body.postid 
                    where parent = :parent
                    and header.userid = :user_id
                    and title = :title
                    and body.postid is NULL";
        $stmt5 = $conn->prepare($query);
        $stmt5->bindValue(':parent', $post['parent']);
        $stmt5->bindValue(':user_id', $post['userid']);
        $stmt5->bindValue(':title', $post['title']);
    
        $result = $stmt5->execute();
        if(!$result) {
            return false;
        }
    
        if($stmt5->rowCount() > 0 ) {
            $this_row = $stmt5->fetch();
            $id = $this_row[0];
        }
    
        // insert rows into body table
        if($id) {
            $query = "insert into body values( :id, :message )";
            $stmt6 = $conn->prepare($query);
            $stmt6->bindValue(':id', $id);
            $stmt6->bindValue(':message', $post['message']);
            $result = $stmt6->execute();
            if(!$result) {
                return false;
            }
         return $id;
        }
    } 

    function get_post_replies($postid) {
        $conn = db_connect();
        $query = "select * from header where postid = :postid or parent = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':postid', $postid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        }
        
        $count = $stmt->rowCount();
        return $count;
    }

    function get_user_ip( $userip, $catid, $postid = 0) {
        $conn = db_connect();
        $query = "select *  from views where userip = :userip and catid = :catid and postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':userip', $userip);
        $stmt->bindValue(':catid', $catid);
        $stmt->bindValue(':postid', $postid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        } 
        
        if($stmt->rowCount() != 0) {
            return false;
        }
        
        $query = "insert into views values (default, :postid, :catid, :userip)";
        $stmt2 = $conn->prepare($query);
        $stmt2->bindValue(':postid', $postid);
        $stmt2->bindValue(':catid', $catid);
        $stmt2->bindValue(':userip', $userip);
        $result = $stmt2->execute();
        if(!$result) {
            return false;
        } else {
            return true;
        }
    }

    function display_view_count( $catid, $postid = 0) {
        $conn = db_connect();
        $query = "select *  from views where catid = :catid and postid = :postid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':catid', $catid);
        $stmt->bindValue(':postid', $postid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        } 
        $amount = $stmt->rowCount();
        return $amount;
    }

     function display_view_cat_count( $catid) {
        $conn = db_connect();
        $query = "select *  from views where catid = :catid";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':catid', $catid);
        $result = $stmt->execute();
        if(!$result) {
            return false;
        } 
        $amount = $stmt->rowCount();
        return $amount;
    }
?>