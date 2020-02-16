<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Vertex Shader - OpenGL Graphics Programming</title>
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

        <h1>Vertex Shader - OpenGL Graphics Programming</h1>

        <h2>Passing Data to Vertex Shader</h2>
        
            <p>In this section we will talk about how we can send data to our GLSL code using reference keywords like 'in' and 'out'.  One of the shaders we want to send data to is the vertex shader.  By modifying the cordinates of the vertex shader we can control the position of objects located within our window.
                
            <span class="nl">One of the ways we can do this is by adding attributes to our shaders.</span>
                
        <hr />        
                
        <!-- Vertex attribute -->
        <h3>Vertex Attribute</h3>
        
            <p>In the next example we are going to use the 'in' keyword to define a variable as input for our GLSL shader.  This will allow us to send a value from our render function to our GLSL shader source code.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #version 410 core
    
    layout (location = <span class="red">0</span>) in vec4 offset;
    
    void main(void)
    {
        const vec4 vertices[3] = vec4[3]( vec4( 0.25, -0.25, 0.5, 1.0),
                                                                    vec4(-0.25, -0.25, 0.5, 1.0),
                                                                    vec4( 0.25,  0.25, 0.5, 1.0)); 
                                                                    
        gl_Position = vertices[gl_VertexID] + offset;
    }</pre>    
    
            <p>Now, let's make some changes to our rendering function in order to pass a value to this offset variable. We are going to use the 'glVertexAttrib4fv()' function in order to pass this value to our offset variable. Notice how the location assigned to zero (in our GLSL code) matches the zero in the first argument for our glVertexAttrib.  In our second argument we store the value to pass to that value.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    virtual void render(double currentTime)
    {
        const GLfloat color[] = { 0.0f, 0.0f, 0.0f, 1.0f };
        glClearBufferfv(GL_COLOR, 0, color);
        
        glUseProgram(rendering_program);
        
        GLfloat attrib[] = { (float)sin(currentTime) * 0.5f,
                                            (float)cos(currentTime) * 0.6f, 0.0f, 0.0f };
        glVertexAttrib4fv(<span class="red">0</span>, attrib);
        
        glDrawArrays(GL_TRIANGLES, 0, 3);
    } </pre>
        
        <p>If our code runs correctly then the x and y coordinates should be changing frame by frame making the triangle appear to be moving in a circle everytime it is rendered.</p>
        
    <hr />
        
    <!-- Passing Data stage to stage -->
    <h3>Passing Data during stages</h3>
        
        <p>The way openGL works is through a graphics pipeline.  Each phase in the pipeline is called a stage, the pipeline will fetch information based on the stage its currently in, we already know of the vertex and the fragment stages of the pipeline.
        
        <span class="nl">In the next example we will use data passed into our vertex shader and then send that same data into our fragment shader, recycling the value in a sense.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #version 410 core

    layout (location = 0) in vec4 offset;
    layout (location = 1) in vec4 color;
    
    void main(void)
    {
        const vec4 vertices[3] = vec4[3]( vec4( 0.25, -0.25, 0.5, 1.0),
                                                                    vec4(-0.25, -0.25, 0.5, 1.0),
                                                                    vec4( 0.25,  0.25, 0.5, 1.0)); 
                                                                    
        gl_Position = vertices[gl_VertexID] + offset;
        
        vs_color = color;
    }</pre>    
        
        <p>In the code above we were able to assign the variable color to location 1 and then we reassigned that value to the variable vs_color.  Let's see what happens when we use the variable in vs_color as part of our fragment shader code.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #version 410 core

    in vec4 vs_color;
    out vec4 color;
    
    void main(void)
    {
        color = vs_color;
    }</pre>        
        
        <hr />        
        <br />
        <a href = "OpenGL4.html"> Previous Page</a>
        <span class = "next">
            <a href = "OpenGL6.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>  