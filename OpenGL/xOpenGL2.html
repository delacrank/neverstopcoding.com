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
        
        <!--Creating shapes -->
        <h2>Creating shapes</h2>
        
            <p>So far we have learned how to create a window, set a title to that window, configure the size of it and change the background color.  Furthermore we created input for our users to interact with the program using a callback function in order to close our program by pressing the escape key.</p>
        
        <!-- Drawing shapes -->
        <h3>Drawing shapes</h3>
            
            <p>Similar to before I will provide a sample code below and mark any new code with the color red.</p>
        
            <!-- Code -->
            <em>Code:</em>
            <div class="code">     
            #include &lt;iostream> <br />
            #define GLEW_STATIC <br />
            #include &lt;GL/glew.h> <br />
            #include &lt;GLFW/glfw3.h> <br /><br />
                
            
            void key_callback(GLFWwindow* window, int key, int scancode, int action, int mode);<br /><br />    
                
            const GLuint WIDTH = 800, HEIGHT = 600;<br /><br />   
                
            <span class="red">
            const GLchar* vertexShaderSource = "#version 330 core\n"
            <div class="padding">
                "layout (location = 0) in vec3 position;\n"
                "void main()\n"
                "{\n"
                "gl_Position = vec4(position.x, position.y, position.z, 1.0);\n"
                "}\0";</div>

            const GLchar* fragmentShaderSource = "#version 330 core\n"
            <div class="padding">
                "out vec4 color;\n"
                "void main()\n"
                "{\n"
                "color = vec4(1.0f, 0.5f, 0.2f, 1.0f);\n"
                "}\n\0";</div><br />
            </span>
            
            int main()<br />
            {
                <div class="padding">
                glfwInit();<br />
                glfwWindowHint(GLFW_OPENGL_FORWARD_COMPAT, GL_TRUE);<br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, 3);<br />
                glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, 3);<br />
                glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);<br />             
                glfwWindowHint(GLFW_RESIZABLE, GL_FALSE);<br /><br />
                    
                GLFWwindow* window = glfwCreateWindow(WIDTH, HEIGHT, "OpenGL", nullptr, nullptr); <br />
                glfwMakeContextCurrent(window);<br /><br />
                    
                glfwSetKeyCallback(window, key_callback);<br /><br />

                glewExperimental = GL_TRUE;<br />
                glewInit();<br /><br />

                glViewport(0, 0, WIDTH, HEIGHT);<br /><br />
                    
    <span class="red">
    // Build and compile our shader program<br />
    // Vertex shader<br />
    GLuint vertexShader = glCreateShader(GL_VERTEX_SHADER);<br />
    glShaderSource(vertexShader, 1, &amp;vertexShaderSource, NULL);<br />
    glCompileShader(vertexShader);<br />
    // Check for compile time errors<br />
    GLint success;<br />
    GLchar infoLog[512];<br />
    glGetShaderiv(vertexShader, GL_COMPILE_STATUS, &amp;success);<br />
    if (!success)<br />
    {
    <div class="padding">               
        glGetShaderInfoLog(vertexShader, 512, NULL, infoLog);<br />
        std::cout &lt;&lt; "ERROR::SHADER::VERTEX::COMPILATION_FAILED\n" &lt;&lt; infoLog &lt;&lt; std::endl;</div>
    }<br />
                    
    // Fragment shader<br />
    GLuint fragmentShader = glCreateShader(GL_FRAGMENT_SHADER);<br />
    glShaderSource(fragmentShader, 1, &amp;fragmentShaderSource, NULL);<br />
    glCompileShader(fragmentShader);<br />
    // Check for compile time errors<br />
    glGetShaderiv(fragmentShader, GL_COMPILE_STATUS, &amp;success);<br />
    if (!success)<br />
    {
    <div class="padding">
        glGetShaderInfoLog(fragmentShader, 512, NULL, infoLog);<br />
        std::cout &lt;&lt; "ERROR::SHADER::FRAGMENT::COMPILATION_FAILED\n" &lt;&lt; infoLog &lt;&lt; std::endl;</div>
    }<br />
    // Link shaders<br />
    GLuint shaderProgram = glCreateProgram();<br />
    glAttachShader(shaderProgram, vertexShader);<br />
    glAttachShader(shaderProgram, fragmentShader);<br />
    glLinkProgram(shaderProgram);<br />
    // Check for linking errors<br />
    glGetProgramiv(shaderProgram, GL_LINK_STATUS, &amp;success);<br />
    if (!success) {
    <div class="padding">
        glGetProgramInfoLog(shaderProgram, 512, NULL, infoLog);<br />
        std::cout &lt;&lt; "ERROR::SHADER::PROGRAM::LINKING_FAILED\n" &lt;&lt; infoLog &lt;&lt; std::endl;</div>
    }<br />
    glDeleteShader(vertexShader);<br />
    glDeleteShader(fragmentShader);<br /><br />


    // Set up vertex data (and buffer(s)) and attribute pointers<br />
    //GLfloat vertices[] = {<br />
    //  // First triangle<br />
    //   0.5f,  0.5f,  // Top Right<br />
    //   0.5f, -0.5f,  // Bottom Right<br />
    //  -0.5f,  0.5f,  // Top Left <br />
    //  // Second triangle<br />
    //   0.5f, -0.5f,  // Bottom Right<br />
    //  -0.5f, -0.5f,  // Bottom Left<br />
    //  -0.5f,  0.5f   // Top Left<br />
    //}; <br />
    GLfloat vertices[] = {<br />
         0.5f,  0.5f, 0.0f,  // Top Right<br />
         0.5f, -0.5f, 0.0f,  // Bottom Right<br />
        -0.5f, -0.5f, 0.0f,  // Bottom Left<br />
        -0.5f,  0.5f, 0.0f   // Top Left <br />
    };<br />
    GLuint indices[] = {  // Note that we start from 0!<br />
        0, 1, 3,  // First Triangle<br />
        1, 2, 3   // Second Triangle<br />
    };<br />
    GLuint VBO, VAO, EBO;<br />
    glGenVertexArrays(1, &amp;VAO);<br />
    glGenBuffers(1, &amp;VBO);<br />
    glGenBuffers(1, &amp;EBO);<br />
    // Bind the Vertex Array Object first, then bind and set vertex buffer(s) and attribute pointer(s).<br />
    glBindVertexArray(VAO);<br /><br />

    glBindBuffer(GL_ARRAY_BUFFER, VBO);<br />
    glBufferData(GL_ARRAY_BUFFER, sizeof(vertices), vertices, GL_STATIC_DRAW);<br /><br />

    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, EBO);<br />
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, sizeof(indices), indices, GL_STATIC_DRAW);<br /><br />

    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 3 * sizeof(GLfloat), (GLvoid*)0);<br />
    glEnableVertexAttribArray(0);<br /><br />

    glBindBuffer(GL_ARRAY_BUFFER, 0); // Note that this is allowed, the call to glVertexAttribPointer registered VBO as the currently bound vertex buffer object so afterwards we can safely unbind<br /><br />

    glBindVertexArray(0); // Unbind VAO (it's always a good thing to unbind any buffer/array to prevent strange bugs), remember: do NOT unbind the EBO, keep it bound to this VAO<br /><br />


    // Uncommenting this call will result in wireframe polygons.<br />
    //glPolygonMode(GL_FRONT_AND_BACK, GL_LINE);<br /><br /></span>
    

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
        
        <hr />        
        <br />
        <a href = "OpenGL/OpenGL.html"> Previous Page</a>
        <span class = "next">
        <a href = "OpenGL/OpenGL2.html">Next Page</a>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    