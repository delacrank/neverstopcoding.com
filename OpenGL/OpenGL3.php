<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Vertex Array Object - OpenGL Graphics Programming</title>
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

        <h1>Vertex Array Object - OpenGL Graphics Programming</h1>
        
        <h2>Using shaders in our C++ program</h2>
        
            <p>In our last section we learned how to write two shaders, a vertex shader (position) and a fragment shader (color).  This section talks about how to implement our glCreateProgram function in order to render these shaders to a window. </p>
        
        <hr />
        
        <!-- VAO init -->
        <h3>Vertex Array Object</h3>
        
            <p>Before we can draw anything to our window, we need to create a 'vertex_array_object', this object is used to represent the vertex fetch stage of the OpenGL pipeline.  We need to first create the vertex array, and then attach it to our program using the two functions below.</p>
        
        <ul id="li">
            <li><b>glGenVertexArrays(GLsizei n, GLuint * arrays):</b> Creates the vertex array object.</li>
            <li><b>glBindVertexArray(GLuint array):</b> Tells OpenGL that which arrays we want to use.</li>
        </ul>
        
        <p>Below is an example of how we can create and bind our Vertex_Array_Object (vao) in order to draw objects to our window.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    glGenVertexArrays(1, &amp;vertex_array_object);
    glBindVertexArray(vertex_array_object);</pre>    
        
        <hr />
        
        <!-- Startup function -->
        <h3>Start Up/Shutdown functions</h3>
        
        <p>The 'startup()' function is a way to call our compiled GLSL code so we don't need to recompile it everytime we want to draw something. We can store all of our GLSL source code, its functions and our Vertex Array Object in this function.</p>
                
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void startup()
    {
        rendering_program = compile_shaders();
        glGenVertexArrays(1, &amp;vertex_array_object);
        glBindVertexArray(vertex_array_object);
    }</pre>
                    
        <p>Similarly, we can also use a 'shutdown()' function to delete our program or any values stored in our Vertex Array Object.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void shutdown()
    {
        glDeleteVertexArrays(1, &amp;vertex_array_object);
        glDeleteProgram(rendering_program);
        glDeleteVertexArrays(1, &amp;vertex_array_object);
    }</pre>
        
        <hr />
        
        <h3>Drawing gl Functions</h3>
        
            <p>Let's put all of code together into a C++ application. However, in order to do this we need to call some more functions in order to execute our compiled shaders, and also to tell OpenGL how to use the shaders we have compiled.</p>
        
        <ul class="li">
            <li><b>glUseProgram():</b> Executes the compiled shader code.</li>
            <li><b>glDrawArrays(GLenum mode, GLint first, GLsize count):</b> The first parameter determines the type of primitive graphics we want to use for our vertex shader. The second parameter represents which vertex shader we are using.  The final paramter determines the amount of vertexes to be rendered.</li>
            <li><b>glPointSize(GLfloat size):</b> Sets the diameter of the point in pixels.</li>
        </ul>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        void render (double currentTime)
        {
            const GLfloat black[] = {0.0f, 0.0f, 0.0f, 1.0f};
            glClearBufferfv(GL_COLOR, 0, black);
            
            glUseProgram(rendering_program);
            
            glDrawArrays(GL_Points, 0, 1);
            glPointSize(20.0f);
        } </pre>
        
        <p>In my next section, I am going to organize all the code into 3 sections so that we can run this program and actually draw some shapes or points on to the screen.</p>        
        
        <hr />        
        <br />
        <a href = "OpenGL2.html"> Previous Page</a>
        <span class = "next">
            <a href = "OpenGL4.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>  