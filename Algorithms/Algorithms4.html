<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to Algorithms" />
<meta name="keywords" content="Algorithms" />
<meta name="author" content="Juan Arias" />  
<title>Stack structure - Algorithms</title>
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

<h1>Stack - Algorithms</h1>
    
    <p>Building a stack data structure will consist of four functions: one for stack creation, stack removal, stack add (push) and stack delete (pop). Below, is a class constructed for these purposes in c++.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;stdexcept>
    
    class Stack {
    public:
        <span class = "comments">// functions for stack interface</span>
        Stack() : head( NULL ) {};
        ~Stack();
        void push ( void *data );
        void *pop();
        
    protected:
        <span class = "comments">// base class for linked list</span>
        class Element {
        public:
            Element( Element *n, void *d ): next( n ), data( d ) {}
            Element *getNext() const { return next; }
            void *value() const { return data; }
        private: 
            Element *next;
            void *data;            
        };
        
        <span class = "comments">// use this pointer to refer to our nested class</span>
        Element *head;
    };
    
    <span class = "comments">// destructor for our stack</span>
    Stack::~Stack() {
        while( head ) {
            Element *next = head->getNext();
            delete head;
            head = next;
        }
    }
    
    <span class = "comments">// a push function for adding elements to our stack</span>
    void Stack::push( void *data ) {
        Element *element = new Element(head, data);
        <span class = "comments">// store the new element in the head </span>
        head = element;
    }
    
    <span class = "comments">// a pop function for removing elements from the tail of the stack</span>
    void *Stack::pop() {
        Element *popElement = head;
        void *data;
        
        <span class = "comments">// throw an exception if stack is empty</span>
        if( head == NULL )
            throw out_of_range("no more elements left in the stack");
            
        <span class = "comments">// we can also return the value of that element</span>
        data = head->value();
        <span class = "comments">// iterate to next element</span>
        head = head->getNext();
        <span class = "comments">// delete it</span>
        delete popElement;
        return data;
    }</pre>
    
    
    <p>So far we have implemented several functions for adding elements to and removing elements from the stack as well as a destructor to entirely remove all the elements from the stack.
    
    <span class = "nl">One thing to note is that in order to return the values from the stack, we would need to cast the elements and derefence them first.</span>
    
    <span class = "nl">Let's look at an example of how we would create the stack add elements to it and then pop those elements and view the results.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int main() {
        <span class = "comments">// create a pointer to the stack class</span>
        Stack *head = new Stack();
        int x = 1;
        int y = 2;
        int z = 3;
        <span class = "comments">// requires a reference for this argument </span>
        head->push(&amp;x);
        head->push(&amp;y);
        head->push(&amp;z);
        <span class = "comments">// cast the values to a integer pointer and dereference them</span>
        cout &lt;&lt; *((int*)head->pop()) &lt;&lt; endl;
        cout &lt;&lt; *((int*)head->pop()) &lt;&lt; endl;
        cout &lt;&lt; *((int*)head->pop()) &lt;&lt; endl;</pre>
    
    <hr />
    
    <h2>Maintain Linked List Tail Pointer</h2>
    
        <p>Let's go back to our prior implementation of a linked list. Remember how we were able to create a class which held two variables a pointer and a integer data type.  
    
        <span class = "nl">In this implementation of the linked list we will be able to track the head and tail of the list. We can do this by checking the element we want to delete first and comparing it to the head element.</span>
    
        <span class = "nl">Let's look at an example of this code below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    bool delete (Element *elem) {
        Element *curPost = head;
        
        if(!elem) {
            return false;
        }
        
        if( elem == head ) {
            head = elem->next;
            delete elem;
            
            if( !head ) {
                tail = NULL;
            }
            return true;
        }
        
        while( curPos ) {
            if( curPos->next == elem ) {
                curPost->next = elem->next;
                delete elem;
                if( curPos->next = NULL )
                    tail = curPos;
                return true;
            }
            curPost = curPos->next;
        }   
        return false;
    }</pre>
    
<hr />
<br />
<a href="Algorithms3.html">Previous</a>
<span class = "next"><a href='Algorithms5.html'>Next</a></span>
    
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
