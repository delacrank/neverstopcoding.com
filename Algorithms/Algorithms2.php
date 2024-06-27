<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to Algorithms" />
<meta name="keywords" content="Algorithms" />
<meta name="author" content="Juan Arias" />  
<title>Linked Lists - Algorithms</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
<!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

 
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Algorithms.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Linked Lists - Algorithms</h1>
    
    <p>A linked list is data structure which can store multiple amounts of and be traversed to call this data in the future. The elements in this data structure are usually linked sequentially and from front to back, the simplest implementation of a linked list in c++ is bellow. </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a structure for our elements</span>
    #include &lt;iostream>
    using namespace std;
    
    <span class = "comments">// this is our linked list</span>
    class Node {
    public:
        <span class = "comments">// one variable for data</span>
        int data;
        <span class = "comments">// a pointer to reference the next element</span>
        Node *next;
        <span class = "comments">// a method to print all of the elements</span>
        void printList(Node *n) {
            while(n != NULL) {
                cout &lt;&lt; n->data &lt;&lt; endl;
                n = n->next;
            }
        }
    };
    
    int main() {
        Node *head = new Node();
        Node *second = new Node();
        Node *third = new Node();
        
        head->data = 1;
        head->next = second;
        second->data = 2;
        second->next = third;
        third->data = 3;
        third->next = NULL;
    }</pre>
    
    <p>Let's see on we can further expand on this concept by providing the users of our class to add elements to our linked list simply by calling a method within our class. As appose to creating a new instance and using those instances to refer to each other.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Node {
    public:
        <span class = "comments">// let's first create a constructor</span>
        Node( int value ) : next(NULL), data( value ) {}
        ~Node() {}
        void printList(Node *n);

        <span class = "comments">// we can implement some getters and setters</span>
        Node *getNext() const { return next; }
        int value() const { return data; }
        void setNext( Node *elem ) { next = elem; }
        void setValue( int value ) { data = value; }

        <span class = "comments">// finally a way to add new elements</span>
        Node insertInFront (Node **head, int data) {
                Node *newElem = new Node(data);
                if(!newElem) {
                    return NULL;
                }
                newElem->data = data;
                newElem->next = *head;
                *head = newElem;
                return **head;
        }

    private:
        Node *next;
        int data;
    };
    
    <span class = "comments">// let's keep our printList method</span>
    void Node::printList(Node *n) {
         while(n != NULL) {
             cout &lt;&lt; n->data &lt;&lt; endl;
             n = n->next;
         }
    }

    int main() {
        Node *head = new Node(1);
        *head = head->insertInFront(&amp;head, 2);
        *head = head->insertInFront(&amp;head, 3);
        *head = head->insertInFront(&amp;head, 4);
        head->printList(head);
        
        <span class ="comments">// we can also add nodes using our functions</span>
        Node *second = new Node(5);
        <span class ="comments">// use the set next function</span>
        head->setNext(second);
        head->printList(head);
    } </pre>
    
    <p>I know this probably seems like a lot of information to take in. Let's first examine the insertToFront() function which takes two arguments as a data value and a reference to another class. 
    
    <span class = "nl">The reason why I used a double pointer here is due to how pointers and references work in c++. By creating a parameter which accepts a pointer to a pointer, I can initialize a new instance of a class within my function and then return that value. Otherwise, I would end up simply returning the address, and that's not what we want in this situation.</span>
    
    <span class = "nl">Next, let's check this new instance of our class to ensure that it isn't empty. By returning a NULL value we reduce the chances of our programming crashing. Finally, we can initialize the data value of our new instance along with the next pointer.</span>
    
    <span class = "nl">By returning an instance of our new class with its data initialize we can add elements to our linked list by assigning our old list to the value of our new list. In the next section, we will go over functions for traversing this list as well as understanding how to delete elements from our list.</span></p>
    
<hr />
<a href="Algorithms1.html">Previous</a>
<span class = "next"><a href="Algorithms3.html"> Next page</a> </span>

<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
