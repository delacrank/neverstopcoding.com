<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to Algorithms" />
<meta name="keywords" content="Algorithms" />
<meta name="author" content="Juan Arias" />  
<title>Linked Lists Cont. - Algorithms</title>
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

<h1>Linked Lists cont. - Algorithms</h1>
    
    <p>In this section we are going to create two new functions one of traversing the elements of our linked list. By passing an existing instance of a linked list along with the value, we can return that index.
    
    <span class = 'nl'>Another function serves to remove an elements in our list. These functions will give us the ability to manipulate lists we create by allowing us to add, remove and traverse this data structure.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// locate the node paired with this value</span>
    <span class = "comments">// otherwise iterate once through the list</span>
    Node Node::find (Node **head, int data) {
        Node *elem = *head;
        <span class = "comments">// make sure we are not at the end of the list</span>
        while(elem != NULL &amp;&amp; elem->value() != data) {
            elem = elem->next;
        }
        return *elem;
    }</pre>
    
    <p>Now, let's look at how we can create a function which deletes existing elements in our linked list.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// let's use a boolean type for safety purposes</span>
    bool Node::deleteNode( Node **head, Node *deleteMe) {
        Node *elem;

        <span class = "comments">// if either reference is missing, stop</span>
        if(!head || !*head || !deleteMe ) {
           return false;
        }

        <span class = "comments">// otherwise initialize our instance</span>
        elem = *head;
        <span class = "comments">// if our instance refers to our list</span>
        if(deleteMe == *head) {
            <span class = "comments">// if either reference is missing, stop</span>
            *head = elem->next;
            <span class = "comments">// release the memory</span>
            delete deleteMe;
            return true;
        }
        
        <span class = "comments">// traverse the nodes until we find our reference</span>
        while (elem) {
           if( elem->next == deleteMe ) {
               elem->next = deleteMe->next;
               delete deleteMe;
               return true;
           }
           <span class = "comments">// otherwise keep checking</span>
           elem = elem->next;
        }
        <span class = "comments">// if the reference doesn't exist, stop</span>
        return false;
   }</pre>
    
    <p>This function is clearly much larger, it has a lot of responsibilities. It is tasked with finding whether the node exists, and then deleting it while still referencing the next node in the list. Furthmore, if the list isn't in the correct location, it will be tasked with traversing every element until it finds the correct one.
    
    <span class = "nl">Let's see some of these functions in action.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int main() {
        Node *head = new Node(1);
        Node *second = new Node(2);
        Node *third = new Node(3);
        head->setNext(second);
        second->setNext(third);
        head->printList(head);
        head->deleteNode(&amp;head, second);
        head->printList(head);
    }</pre>
    
    <p>Let's see an implementation of the delete function which actually deletes the entire list. This is a tricky task to accomplish because if we delete the first then we no longer have the access to the pointer which addresses the next element. Yet, if try to advance the pointer first, then we are unable to remove the element.
    
    <span class = "nl">The solution lies in using two pointers.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void deleteList ( Node **head ) {
        <span class = "comments">// assign a pointer to the head of our list</span>
        Node *deleteMe = *head;
        
        while( deleteMe ) {
            <span class = "comments">// create a new pointer which points to our initial pointer</span>
            Node *next = deleteMe->next;
            <span class = "comments">// we can remove the element now</span>
            delete deleteMe;
            <span class = "comments">// move the pointer forward</span>
            deleteMe = next;
        }
        
        <span class = "comments">// derefence the initial pointer</span>
        *head = null;
    }</pre>
    
    <p>This is great so far we have learned how to implement several features of a linked list. These features include adding nodes, removing nodes, traversing the list and finding out of a node exists within the list given a value.
    
    <span class = "nl">In the next section we are going to be talking about how to create a stack, this functions similar to a linked list with the exception that a stack data structure has a LIFO. That stands for last in first out, meaning that elements are added on the the end of the list and removed from the front of it (i.e. stack of cards or plates.)</span></p>
    
<hr />
<br />
<a href="Algorithms2.html">Previous</a>
<span class = "next"><a href='Algorithms4.html'>Next</a></span>
    
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
