<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Drawing to the Window - OpenGL Graphics Programming</title>
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

        <h1>Drawing to the Window - OpenGL Graphics Programming</h1>

        <h2>Drawing to the Window</h2>
        
            <p>Now we can run our program, which can be broken down into 2 sections.  Section 1 consists of writing and compiling our shaders, section 2 consists of running our gl functions for drawing and clearing the buffer (void render function).</p>
    
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #include "sb6.h"
    
    class my_application : public sb6::application
    {
    public:
        
        <span class="comments">// Create and compile shaders</span>
        GLuint compile_shaders(void)
        { 
            GLuint vertex_shader;
            GLuint fragment_shader;
            GLuint program;
        
            static const GLchar * vertex_shader_source[] = 
            {
                "#version 410 core <span class="next">\n"</span>
                " <span class="next">\n"</span>
                "void main(void) <span class="next">\n"</span>
                "{ <span class="next">\n"</span>
                "    gl_Position = vec4(0.0, 0.0, 0.5, 1.0); <span class="next">\n"</span>
                "} <span class="next">\n"</span>
            };
        
            static const GLchar * fragment_shader_source[] = 
            {
                "#version 410 core <span class="next">\n"</span>
                " <span class="next">\n"</span>
                "out vec4 color; <span class="next">\n"</span>
                " <span class="next">\n"</span>
                "void main(void) <span class="next">\n"</span>
                "{ <span class="next">\n"</span>
                "   color = vec4(0.0, 0.8,  1.0, 1.0); <span class="next">\n"</span>    
                "} <span class="next">\n"</span>
            };
        
            vertex_shader = glCreateShader(GL_VERTEX_SHADER);
            glShaderSource(vertex_shader, 1, vertex_shader_source, NULL);
            glCompileShader(vertex_shader);
        
            fragment_shader = glCreateShader(GL_FRAGMENT_SHADER);
            glShaderSource(fragment_shader, 1, fragment_shader_source, NULL);
            glCompileShader(fragment_shader);
        
            program = glCreateProgram();
            glAttachShader(program, vertex_shader);
            glAttachShader(program, fragment_shader);
            glLinkProgram(program);
        
           glDeleteShader(vertex_shader);
           glDeleteShader(fragment_shader);
        
            return program;
        }
        
        <span class="comments">// Store compiled GL program into GLuint</span>
        void startup()
        {
            rendering_program = compile_shaders();
            glGenVertexArrays(1, &amp;vertex_array_object);
            glBindVertexArray(vertex_array_object);
        }
        
        void shutdown()
        {
            glDeleteVertexArrays(1, &amp;vertex_array_object);
            glDeleteProgram(rendering_program);
            glDeleteVertexArrays(1, &amp;vertex_array_object);
        }
    
        void render(double currentTime)
        {
            const GLfloat color[] = { 0.0f, 0.0f, 0.0f, 1.0f };
            glClearBufferfv(GL_COLOR, 0, color);
            
            glUseProgram(rendering_program);
            
            glDrawArrays(GL_POINTS, 0, 1);
            glPointSize(20.0f);
        }
        
    private:
    
        GLuint rendering_program;
        GLuint vertex_array_object;
    };
        
    DECLARE_MAIN(my_application);</pre>
    
    <hr />
        
    <!-- drawing a triangle -->
    <h3>Drawing a Triangle</h3>
        
        <p>Now that we were able to successfully draw a point on our window, let's draw multiple points and fill the space inside those points with a color.  We can create various shapes depending on the location of our vertices.
        
        <span class="nl">However, in order to draw multiple points we need more than one vertex, and in order to create more than one vertex we need to make changes to our GLSL vertex shader.  We can store our vertices in an array, and simply change the cordinates of each one.</span></p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    static const GLchar * vertex_shader_source[] = 
    {
        "#version 410 core <span class="next">\n"</span>
        " <span class="next">\n"</span>
        "void main(void) <span class="next">\n"</span>
        "{ <span class="next">\n"</span>
        "    const vec4 vertices[3] = vec4[3](vec4( 0.25, -0.25, 0.5, 1.0), <span class="next">\n"</span>
        "                                                 vec4(-0.25, -0.25, 0.5, 1.0), <span class="next">\n"</span>
        "                                                 vec4( 0.25,  0.25, 0.5, 1.0)); <span class="next">\n"</span>
        " <span class="next">\n"</span>
        "    gl_Position = vertices[gl_VertexID];<span class="next">\n"</span>
        "} <span class="next">\n"</span>
    };</pre>
        
        <p>In the future, I won't display the GLSL as a pointer char, rather I will write the code and assume you understand that it has to be stored into a pointer in order to be compiled.
        
        <span class="nl">Now let's change our glDrawArrays arguments to hold a GL_TRIANGLES variable and to hold 3 vertices instead of a single vertex.  If I just added the number of vertices and kept the GL_POINTS enumeration mode, then we would see 3 points instead of a filled triangle. We can also remove the glPointSize() function.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void render(double currentTime)
    {
        const GLfloat color[] = { 0.0f, 0.0f, 0.0f, 1.0f };
        glClearBufferfv(GL_COLOR, 0, color);
        
        glUseProgram(rendering_program);
        
        glDrawArrays(GL_TRIANGLES, 0, 3);
    }</pre>
        
        <hr />        
        <br />
        <a href = "OpenGL3.html"> Previous Page</a>
        <span class = "next">
            <a href = "OpenGL5.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>  