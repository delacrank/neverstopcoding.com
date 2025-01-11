<!DOCTYPE html>
<html>  
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn how to do web development using code igniter." />
        <meta name="keywords" content="Code Igniter" />
        <meta name="author" content="Juan Arias" />
        <title>Controllers</title>
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
    
<!-- Left -->
<?php include('..//Includes//Left_Ci.php'); ?>

    <!-- Right -->
    <div id ="rightz">

        <h1>CI Controller</h1>

            <p>In this section we are going to start understanding how to build a controller for rendering these views. The view is just a file, our controller will let our web server know where to find these files based on the url they type in.</p>

        <hr />

        <h2>First Controller</h2>

            <p>So let's see how we can build a controller which can display the two template views we created so far. First, it might make some sense to create an additional view which we can use to hold our body.

            <span class ="nl">It probably makes sense to create an additional directory to hold this new view for our body. Organizing our directories is very important especially as the project starts to increase. You don't want to be in a situation where locating and managing files becomes a mess. </span>

            <span class = "nl">Let's create another directory called pages and store this new view in there. Maybe we can name it index.php. </span>
            </p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// pages/index.php</span>
    &lt;p>This is the body of our application.&lt;/p></pre>

    <p>The controller we can name it pages after the directory which its displaying. This is one way to link our controllers and views together. That way we won't forget which controller renders which views and the same will hold true for our future models.
    </p>

    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// controllers/pages.php</span>  
    &lt;?php
    class Pages extends CI_Controller {
        <span class = "comments">// view returns based on string used as url</span>
        public function view($page = 'index') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
            <span class = "comments">// uses the 'load' method to return a view</span>
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
    }
    ?> </pre>

    <p>In the example above we used a controller to render three views, but another way to think of a controller is a way of executing code.

    <span class = "nl">Let's say we create a controller named 'boo' and provided it with functions 'hi' and 'ok'. Everytime someone navigated to the folder 'boo/hi' or 'boo/ok' the code in those controllers would get executed. Adding a parameter would take us to the next layer in the URL: 'book/ok/hi'.</span>
    </p>

    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    &lt;?php
    <span class = "comments">// controllers should always have first letter uppercase</span>
    class Boo extends CI_Controller {
        <span class = "comments">// navigate to 'boo/ok/$var'</span>
        public function ok($var) {
            echo $var;
        }
        <span class = "comments">// navigate to 'boo/dude'</span>
        public function dude() {
            echo "dude";
        }
    }
    ?></pre>

    <hr /><br />
    <a href="ci2.php">Previous Page</a>
    <span class ="next"><a href="ci4.php">Next Page</a></span>
    <br /><br />
    </div>

</body>
</html>