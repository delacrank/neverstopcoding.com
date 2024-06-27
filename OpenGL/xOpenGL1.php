<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn program with OpenGL" />
        <meta name="keywords" content="OpenGL" />
    
        <title>Learning OpenGL</title>
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
<?php include('..//Includes//Left_OpenGL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Learning Open GL</h1>
        
        <h2>Our first Program</h2>
        
            <p>The first thing we need to do is include our libraries.  Although you you are using the build I mentioned earlier you won't have to include the folders with all the header files in your .cpp directory.</p>
    
            <!-- Code -->
            <em>Code:</em>
            <div class="code">     
            <span class="comments">// Add our extensions (glew), iostream and glfw libraries</span><br />
            #include &lt;iostream> <br />
            #define GLEW_STATIC <br />
            #include &lt;GL/glew.h> <br />
            #include &lt;GLFW/glfw3.h> <br /><br />
                
            int main()<br />
            {
                <div class="padding">
                <span class="comments">// Initialize the glfw function</span><br />
                glfwInit();<br />
                <span class="comments">// Configure the window using window hint functions</span><br />
                glfwWindowHint(GLFW_OPENGL_FORWARD_COMPAT, GL_TRUE);<br />
                <span class="comments">// Ensures we are using version 3 of OpenGL for major version</span><br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, 3);<br />
                 <span class="comments">// Ensures we are using version 3 of OpenGL for minor version</span><br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, 3);<br />
                 <span class="comments">// Use the core profile to adjust resizing options</span><br />
                glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);<br />              <span class="comments">// Make the window un-resizeable</span><br />
                glfwWindowHint(GLFW_RESIZABLE, GL_FALSE);<br /><br />
                    
                <span class="comments">// Create a window pointer with 800 height, 600 width, named OpenGL </span><br />
                GLFWwindow* window = glfwCreateWindow(800, 600, "OpenGL",                       nullptr, nullptr); <br /><br />
                    
                <span class="comments">// If window pointer turns out to be null, then display this instead </span><br />
                if (window == nullptr)<br />
                {
                <div class="padding">
                    std::cout &lt;&lt; "Failed to create GLFW window" &lt;&lt;                           std::endl;<br />
                    glfwTerminate();<br />
                    return -1; </div>
                }<br />
                <span class="comments">// Create the window using the our pointer as the parameter </span><br />
                glfwMakeContextCurrent(window);<br /><br />

                 <span class="comments">// If we were to draw an object the view port will tell OpenGL the cooridnates</span><br />
                glViewport(0, 0, 800, 600);  <br /><br />

                while(!glfwWindowShouldClose(window))<br />
                {
                <div class="padding">
                     <span class="comments">// Check for any events respond with the proper functions</span><br />
                    glfwPollEvents();<br />
                     <span class="comments">// Buffer the screen to handle the triggered events</span><br />
                    glfwSwapBuffers(window);</div>
                }<br /><br />
                
                 <span class="comments">// End</span><br />
                glfwTerminate();<br />
                return 0;</div>
            }
            </div>
        
        <p>With the first set of lines after we call the 'glfwInit();' function, we are simply telling the program what version to use and the window configuration for our program.<br /><br />
        
        The next few lines of code will be used to create a pointer for our window and then assigning that pointer to a function called create window.  Within the create window function we can specify how large our window will be and the name it will be given. <br /><br />
            
        We can use an if statement to see if our parameters were passed into our window pointer and then terminate the function if they weren't.  Moving forward we pass our pointer into another function which will create our window based on the specifications (parameters) passed into it earlier.  <br /><br />
            
        We can set a view point and then we will tell the program what to do if the window has been closed.  Finally, let's terminate our initial function and end our main function.
        </p>
        
    <ul>
        <li><b>glfwInit()</b> Initializes glfw.</li> 
        <li><b>GLFWwindow</b> This is window object which we used to declare a pointer and assign it to <b>glfwCreateWindow()</b> function.</li> 
         <li><b>glfwMakeContextCurrent()</b> used to create a window.</li> 
         <li><b>glViewport()</b> used for coordinates if you want to draw on to the window.</li> 
         <li><b>glfwTerminate()</b> ends the glfwInit() function.</li> 
    </ul>
<hr />
     
        <!-- Setting a callback function -->
        <h3>Setting a CallBack function</h3>        
        
            <p>Let's add a few more lines of code to this .cpp file, we will add a callback function as well as glewInit() function in order to retrieve any pointers or functions.  The purpose of adding this callback function is to allow input from the user, in this case we are only allowing the user to close the application by pressing the escape key. Any new lines will be colored red.</p>    
        
        
            <!-- Code -->
            <em>Code:</em>
            <div class="code">     
            <span class="comments">// Add our extensions (glew), iostream and glfw libraries</span><br />
            #include &lt;iostream> <br />
            #define GLEW_STATIC <br />
            #include &lt;GL/glew.h> <br />
            #include &lt;GLFW/glfw3.h> <br /><br />
                
            <span class="red">    
            <span class ="comments">// Create a prototype for our function </span><br />
void key_callback(GLFWwindow* window, int key, int scancode, int action, int mode);<br /><br />    
                
                <span class ="comments">// Set the dimesions for our width and height</span><br />
const GLuint WIDTH = 800, HEIGHT = 600;<br /><br /></span>    
                
            int main()<br />
            {
                <div class="padding">
                glfwInit();<br />
                glfwWindowHint(GLFW_OPENGL_FORWARD_COMPAT, GL_TRUE);<br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, 3);<br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, 3);<br />
                glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);<br />             
                glfwWindowHint(GLFW_RESIZABLE, GL_FALSE);<br /><br />
                    
                GLFWwindow* window = glfwCreateWindow(800, 600, "OpenGL",                       nullptr, nullptr); <br /><br />
                    
               if (window == nullptr)<br />
                {
                <div class="padding">
                    std::cout &lt;&lt; "Failed to create GLFW window" &lt;&lt;                           std::endl;<br />
                    glfwTerminate();<br />
                    return -1; </div>
                }<br />
                glfwMakeContextCurrent(window);<br /><br />
                    
                <span class="red">    
                <span class="comments">// Set the correct pointer for our callback function</span><br />
                glfwSetKeyCallback(window, key_callback);<br /><br />

                    <span class="comments">// Let's use GLEW for retrieving our function pointers and extensions</span><br />
                glewExperimental = GL_TRUE;<br />
                if (glewInit() != GLEW_OK)<br />
                { 
                <div class="padding">
                    std::cout &lt;&lt; "Failed to initialize GLEW" &lt;&lt; std::endl;<br />
                    return -1;</div>
                } <br /><br />   </span>

                glViewport(0, 0, WIDTH, HEIGHT);<br /><br />

                while(!glfwWindowShouldClose(window))<br />
                {
                <div class="padding">
                     glfwPollEvents();<br /><br />
                    
                    <span class="red">
                    <span class="comments">// set the color of the buffer </span><br />
                    glClearColor(0.2f, 0.3f, 0.3f, 1.0f);<br />
                    <span class="comments">// initialize the new buffer </span><br />
                    glClear(GL_COLOR_BUFFER_BIT);</span><br /><br />
                    
                     glfwSwapBuffers(window);</div>
                }<br /><br />
                
                 <span class="comments">// End</span><br />
                glfwTerminate();<br />
                return 0;</div>
            } <br /><br />
                
            <span class="red">    
             <span class="comments">// Create a callback function for our window </span><br />
            void key_callback(GLFWwindow* window, int key, int scancode,                int action, int mode)<br />
            { 
                <div class = "padding">
                std::cout &lt;&lt; key &lt;&lt; std::endl; <br />
                 <span class="comments">// If escape key is pressed, then close the window </span><br />
                if (key == GLFW_KEY_ESCAPE && action == GLFW_PRESS)<br />
                glfwSetWindowShouldClose(window, GL_TRUE); </div>
            }    </span>
            </div>        
        
        <p>If we run the new application, we should see a dark green background and you should also be able to close the window by pressing the escape key.</p>
        
        <ul>
            <li><b>key_callback</b> Input handling for glfw, will let the program know when a key is pressed.</li>
            <li><b>GLuint</b> An OpenGL object for setting integers.</li> 
            <li><b>glewExperimental</b> used to activate our glew library allowing for retrieving pointer functions and using extensions.</li> 
            <li><b>glClearColor</b> used set the color for the buffer <b>glClear</b> is used to change the bugger color.</li> 
            <li><b>void key_callback</b> name of the function we used for our key, the key is set to GLFW_KEY_ESCAPE and the action is set to GLFW_PRESS.</li> 
        </ul>
        
        <hr />        
        <br />
        <a href = "OpenGL.html"> Previous Page</a>
        <span class = "next">
        <a href = "OpenGL2.html">Next Page</a>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    
    