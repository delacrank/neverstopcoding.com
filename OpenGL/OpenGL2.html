<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Shaders - OpenGL Graphics Programming</title>
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

        <h1>Shaders - OpenGL Graphics Programming</h1>
        
        <h2>Shaders</h2>
        
            <p>OpenGL shaders come in different stages.  The first being: vertex shaders, tessellation control &amp; evualation shaders, geometry shaders and compute shaders.
        
        <span class="nl">The language for creating shaders is called GLSL (GL shader language) and the compiler is built into OpenGL.</span> 
        
        <span class="nl">A vertex is an angular point for a polygon, polyhedron or other figure.  However, it will also work as a cordinate system for placing points in OpenGL.  Each vertex acts as a point inbetween two intersecting lines, these vertices will be the basis for many shapes creating in OpenGL.</span>
        
        <span class="nl">The fragment shader in this example will determine the color of our point.  It uses the same formula as the buffer r,g,b,a (alpha) where the first value is the value of red, the second green, the third blue and alpha is the opacity.</span></p>
                
        <hr />
        
        <!-- Vertex -->
        <h3>Vertex</h3>
              
        <p>Let's take a look at some GLSL functions.  The first one will create a vertex which we will use to plot a location on our window.</p>
           
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #version 410 core
    
    void main(void)
    {
        gl_Position = vec4(0.0, 0.0, 0.5, 1.0);
    }</pre>
        
    <p>Remember this is GLSL not c++ it will eventually be stored in a vector and surrounded by quotes to be compiled later.  gl_Position using a cordinate system to plot its points.
        
        <span class="nl">However its not enough that we write the GLSL code and expect our c++ compiler to understand it.  The next step will consist of storing in a vector, let's look at an example of this.</span>
              </p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    static const GLchar * vertex_shader_source[] = 
    {
        "#version 410 core  <span class="next">\n"</span>
        "      <span class="next">\n"</span>
        "void main(void)    <span class="next">\n"</span>
        "{      <span class="next">\n"</span>
        "    gl_Position = vec4(0.0, 0.0, 0.5, 1.0);    <span class="next">\n"</span>
        "}      <span class="next">\n"</span>
    };</pre>
        
    <p>We have stored are GLSL vertex into a pointer 'GLchar' which our c++ can understand.  Let's do the same for our fragment_shader.</p>
        
    <hr />
        
    <!-- Fragment Shader -->
    <h3>Fragment Shader</h3>
        
        <p>In order to draw anything to our window we need at a least a vertex and a fragment shader.  Below I still store our fragment shader into a char pointer like before with our vertex.
        
        <span class="nl">The main difference between my vertex and fragment shader will be the values stored in the vector.  The vertex refers to cordinates while the fragment refers to color values.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    static const GLchar * fragment_shader_source[] = 
    {
        "#version 410 core  <span class="next">\n"</span>
        "      <span class="next">\n"</span>
        " out vec4 color;     <span class="next">\n"</span>
        "      <span class="next">\n"</span>
        "void main(void)    <span class="next">\n"</span>
        "{      <span class="next">\n"</span>
        "    color = vec4(0.0, 0.8, 0.1, 1.0);    <span class="next">\n"</span>
        "}      <span class="next">\n"</span>
    };</pre>    
        
    <p>Now that we have both our shaders defined to pointers the next step is putting those values in objects so that we can copy, compile, attach, link or delete them.</p>
    
    <hr />    
        
    <!-- Shader Objects -->
    <h3>Shader Functions</h3>
        
        <p>There are several functions we can use once we assign our GLSL values into an object and assign it to a variable.</p>
        
        <ul id="li">
            <li><b>glCreateShader():</b> Creates an empty shader object.</li>
            <li><b>glShaderSource():</b> Copies the shaders source code to the object.</li>
            <li><b>glCompileShader():</b> Compiles the GLSL source code. </li>
            <li><b>glCreateProgram():</b> Creates a program which shader objects can be attached to.</li>
            <li><b>glAttachShader():</b> Attaches a shader object to a program object.</li>
            <li><b>glLinkProgram():</b> Links all the shader objects attached to a program together.</li>
            <li><b>glDeleteShader():</b> Deletes the shader object.</li>
        </ul>
        
        
    <p>In the next example, we will use the char pointers to place our GLSL code into our Shader Objects. Below is an example of how I can assign my glCreateShader object containing the source code for my GL_VERTEX_SHADER to a variable called vertex_shader.
        
    <span class="nl">From here we can take that object and copy it using our glShaderSource object, before compiling the GLSL code using our glCompileShader function.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    vertex_shader = glCreateShader(GL_VERTEX_SHADER);
        glShaderSource(vertex_shader, 1, vertext_shader_source, NULL);
        glCompileShader(vertex_shader);</pre>
        
        <p>Now, let's repeat this process for our fragment shader. Before we try to use our program and attach our shader objects to this GLSL program.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    fragment_shader = glCreateShader(GL_FRAGMENT_SHADER);
        glShaderSource(fragment_shader, 1, fragment_shader_source, NULL);
        glCompileShader(fragment_shader);    
    </pre>    
        
    <p>Alright great, we have compiled both our vertex and fragment shaders. Now we can use those objects containing executeable code and attach them to our program object.  The last step will consist of linking our shader objects containing our GLSL code, allowing us to delete them (GL shader objects) freeing up any memory used to store our shader objects.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    program = glCreateProgram();
    glAttachShader(program, vertex_shader);
    glAttachShader(program, fragment_shader);
    glLinkProgram(program);</pre>
        
    <p>The last step is simple, let's delete the objects we created in order to achieve the executeable code we have stored in our glLinkProgram function.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    glDeleteShader(vertex_shader);
    glDeleteShader(fragment_shader);</pre>
    
    <p>Let's review before moving on to our next section.  We created, compiled and linked two shaders to our glCreateProgram function.  The first step was creating pointers for our shader source code, then we used those shader pointers to create shader objects.  After we created our shader objects we copied the source code before compiling it.  From here, we could our compiled code and attached it to a gl program object.  We used another function to link the glShaderObjects together within our gl program object and then we deleted the shader objects intially used to store our source code.
        
    <span class = "nl">In our next section I will get into using all of these elements together in order to actually render our shaders to a window.</span></p>            
        
        <hr />        
        <br />
        <a href = "OpenGL1.html"> Previous Page</a>
        <span class = "next">
            <a href = "OpenGL3.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>  