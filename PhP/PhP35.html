<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Classes Part 2  - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Classes Part 2 - PhP Programming</h1>
    
<h2>Abstraction</h2>
    
    <p>In php you can create your own getter and setter methods. Doing this will allow you to control the visibility of your member variables. Let's look at an example below.</p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class ClassName {
    
        private $attribute;
        public function getVar() {
            return $this->attribute;
        }
        
        public function setVar($value) {
            $this->attribute = $value;        
        }
    }   
    
    $a = new ClassName;
    <span class = "comments">// These two calls won't work because variable is private</span>
    $a->attribute = 5;
    echo $a->attribute;
    <span class = "comments">// Use the get or set methods instead </span>
    $a->setVar(10);
    echo $a->getVar();
    </pre>
    
    <p>Using abstraction you can control the value your private variables by ensuring that they cannot be altered unless directly invoked using the set function.</p>
    
    <hr />
    
<!-- Inheritance -->
<h3>Inheritance</h3>
    
    <p>Let's look at another class feature called inheritance, this is useful if we have a class which has features we would like to use in other classes. 
    
    <span class = "nl">Php uses inheritance similar to the way java does by using the extends keyword. Let's look at an example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class ParentClass {
        public function hello() {
            echo "Say hello from parent";
        }
    }
    
    class ChildClass extends ParentClass {
    
    }
    
    $a = new ChildClass;
    $a->hello(); </pre>
    
    <p>In this example, we can clearly see that we can call functions from the parent class. They are essentially copied over, this only works with protected and public functions or variables. It would not work with a private function/variable.
    
    <span class = "nl">Let's see how this would work when using inheritance and constructors together.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
     class ParentClass {
        private $attribute;
        public function __construct($attribute) {
            $this->attribute = $attribute;
        }

        <span class = "comments">// This function to see the value of our variable</span>
        public function display() {
            echo $this->attribute;
        }
    }
    
    class ChildClass extends ParentClass {
        <span class = "comments">// We use the '::' scope operator to ensure that parent constructor is called</span>
        public function __construct($attribute) {
            parent::__construct($attribute);
        }
    }
    
    $a = new ParentClass(5);
    $a->display();
    $b = new ChildClass(10);
    $b->display();    </pre>
    
    <p>So we can create new instances of the 'attribute' variable with different values. However, if I were to call the 'attribute' value from the parent class then I would need to create an instance of that class first. 
    
    <span class = "nl">Let's look at an example of that.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    class ParentClass {
        <span class = "comments">// Change this accessor to protected in order see it in child class</span>
        protected $attribute;
        public function __construct($attribute) {
            $this->attribute = $attribute;
        }

        public function display() {
            echo $this->attribute;
        }
    }
    
    class ChildClass extends ParentClass {
        public function __construct($attribute) {
            parent::__construct($attribute);
        }
        
        <span class = "comments">// Here we can create an instance of the parent class</span>
        public function getParent(ParentClass $a) {
            return $a->attribute;
        }
    }
    
    $a = new ParentClass(5);
    <span class = "comments">// Display parent variable</span>
    $a->display();
    $b = new ChildClass(10);
    <span class = "comments">// Display child variable</span>
    $b->display();
    <span class = "comments">// Call the parent element via the child object</span>
    echo $b->getParent($a);    </pre>
    <br />
    <hr />
    
    <!-- Final keyword -->
    <h3>Overriding</h3>
    
        <p>Alright so in most object oriented programming languages there is this feature called overriding which allows both functions and variables to be overriden with new instructions or values.  
            
    <span class = "nl">In our next example, we are going to show how to override a member function and a member variable. Let's look at an example of this.</span></p>
            
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class A {
        public $attribute = "hello";
        public function operation {
            echo $this->attribute . '&lt;br />';
            echo 'Say this &lt;br />';
        }
    }
    
    class B extends A {
        <span class = "comments">// By assigning a new value to attribute we can override it</span>
        public $attribute = "goodbye";
        <span class = "comments">// We override the operation function by providing it with new instructions</span>
        public function operation {
            echo $this->attribute . '&lt;br />';
            echo 'Say that instead &lt;br />';
        }
    } 
    
    $a = new A;
    $a->operation();
    <span class = "comments">// We can see the differences by calling the operation function</span>
    $b = new B;
    $b->operation();</pre>
    
     <p> One way to prevent inheritance overriding is by using the final keyword. This is similar to using const keyword to prevent a variable from changing its value, only we are keeping a variable within the scope of its class.
    
    <span class = "nl">If we try to override either the memeber variable or function variable in another sub class then php will throw an error message.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class A {
        public $attribute = "hello";
        <span class = "comments">// Use the final keyword to prevent overriding</span>
        <span class = "red">final</span> public function operation {
            echo $this->attribute . '&lt;br />';
            echo 'Say this &lt;br />';
        }
    }
    
    class B extends A {
        public $attribute = "goodbye";
        <span class = "comments">// This will now throw an error</span>
        public function operation {
            echo $this->attribute . '&lt;br />';
            echo 'Say that instead &lt;br />';
        }
    } </pre>
    
<br />  
<hr />
<br />
<a href = "PhP34.html">Previous Page</a>
<span class="next"><a href = "PhP36.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>