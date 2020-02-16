<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Interface Blocks &amp; Tessellation - OpenGL Graphics Programming</title>
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

        <h1>Interface Blocks &amp; Tessellation - OpenGL Graphics Programming</h1>
        
        <h2>Interface Blocks &amp; Tessellation</h2>
        
            <p>In this next section we are going to dive into using interface blocks to move data between shaders.</p>
        
        <hr />
        
        <!-- Interface blocks -->
        <h3>Interface Blocks</h3>
            
            <p>Some sample code.</p>
        
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #version 410 core
    
    layout (location = 0) in vec4 offset;
    layout (location = 1) in vec4 color;
        
    out VS_OUT
    {
        vec4 color;
    }
        
    void main(void)
    {
            const vec4 vertices[3] = vec4[3]( vec4( 0.25, -0.25, 0.5, 1.0),
                                                                         vec4(-0.25, -0.25, 0.5, 1.0),
                                                                         vec4( 0.25,  0.25, 0.5, 1.0)); 
                                                                    
            gl_Position = vertices[gl_VertexID] + offset;
        
            vs_color = color;
    }</pre>
        
        <p>And for our fragment shader.</p>    
     
    <em>Code:</em>
    <!-- Code -->
    <pre class="code">
    #version 410 core
    
    in VS_OUT
    {
        vec4 color;
    } fs_in;
    
    out vec4 color;
    
    void main(void)
    {
        color = fs_in.color;
    }</pre>
        
    <hr />
    
    <h3>Tessellation</h3>
        
        <p>The Tessellation shader draws patches to the screen.  Let's understand what exactly a patch is.  A patch is a grouping of either points, lines or triangles.  This phase in the pipeline follows the vertex phase and is necessary for rasterization which comes later.  The resolution of the Tessellation is decided by the value set for the gl_TessLevel, a higher value results in more points/lines/triangles while a lower value results in a less.
        
        <span class="nl">The 'glPatchParamteri(GLenum pname,GLint value)' will decide the number of control points used to construct each tessellation point. By default the number is usually 3 but can go up as high as 32, in the example below we will se the number to 5.</span> </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Tessellation Control Shader</span>
    #version 410 core
    
    layout (vertices = 3) out;
    
    void main(void)
    {
        if (gl_InvocationID == 0)
        { 
            gl_TessLevelInner[0] = 5.0;
            gl_TessLevelOuter[0] = 5.0;
            gl_TessLevelOuter[1] = 5.0;
            gl_TessLevelOuter[2] = 5.0;
        }
        gl_out[gl_InvocationID].gl_Position =
        gl_in[gl_InovationID].gl_Position;
    }</pre>
        
        <p>Now let's see how the Tessellation Evaluation shader works.  This shader works by taking the coordinates of the gl_Position and using those points to plot out the x,y and z coordinates of our orginial shape.  However, in order to draw this triangle we need to use a function 'glPolygonMode()', which will result in making sure that these coordinates are used only to draw the outline of our shape.</p>
         
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Tessellation Evaluation Shader</span>
    #version 410 core
    
    layout (triangles, equal_spacing, cw) in;
    
    void main(void)
    {
        gl_Position = (gl_TessCoord.x = gl_in[0].gl_Position +
                                   gl_TessCoord.y = gl_in[1].gl_Position +
                                   gl_TessCoord.z = gl_in[2].gl_Position);
    }</pre>
        
        <p>Let's see the entire program in action.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">  
    #include &lt;sb6.h>

    class tessellatedtri_app : public sb6::application
    {
        void init()
        {
            static const char title[] = "OpenGL SuperBible - Tessellated Triangle";
        
            sb6::application::init();
            memcpy(info.title, title, sizeof(title));
        }
    
        virtual void startup()
        {
            static const char * vs_source[] =
            {
                <span class="comments">// Vertex Shader</span>
                "#version 410 core  <span class="next">\n"</span>            
                "  <span class="next">\n"</span> 
                "void main(void) <span class="next">\n"</span> 
                "{  <span class="next">\n"</span> 
                "    const vec4 vertices[] = vec4[](vec4( 0.25, -0.25, 0.5, 1.0),  <span class="next">\n"</span> 
                "                                                           vec4(-0.25, -0.25, 0.5, 1.0),  <span class="next">\n"</span> 
                "                                                           vec4( 0.25,  0.25, 0.5, 1.0)); <span class="next">\n"</span> 
                "   <span class="next">\n"</span> 
                "    gl_Position = vertices[gl_VertexID]; <span class="next">\n"</span>     
                "}  <span class="next">\n"</span> 
            };
        
            static const char * tcs_source[] =
            {
                <span class="comments">// Tessellesation Control Shader</span>
                "#version 410 core <span class="next">\n"</span>                   
                "   <span class="next">\n"</span>                                   
                "layout (vertices = 3) out;   <span class="next">\n"</span>         
                "   <span class="next">\n"</span>                                   
                "void main(void)  <span class="next">\n"</span>                     
                "{  <span class="next">\n"</span>                                   
                "    if (gl_InvocationID == 0)   <span class="next">\n"</span>     
                "    {   <span class="next">\n"</span>                             
                "        gl_TessLevelInner[0] = 5.0;   <span class="next">\n"</span>   
                "        gl_TessLevelOuter[0] = 5.0;    <span class="next">\n"</span>  
                "        gl_TessLevelOuter[1] = 5.0;  <span class="next">\n"</span> 
                "        gl_TessLevelOuter[2] = 5.0;   <span class="next">\n"</span>                               
                "    }    <span class="next">\n"</span>                             
                "    gl_out[gl_InvocationID].gl_Position = <span class="next">\n"</span>
                "           gl_in[gl_InvocationID].gl_Position;    <span class="next">\n"</span> 
                "}  <span class="next">\n"</span> 
            };
        
            static const char * tes_source[] =
            {
                <span class="comments">// Tesellesation Evaluation Shader</span>
                "#version 410 core <span class="next">\n"</span> 
                "  <span class="next">\n"</span>    
                "layout (triangles, equal_spacing, cw) in; <span class="next">\n"</span> 
                "     <span class="next">\n"</span> 
                "void main(void)   <span class="next">\n"</span> 
                "{   <span class="next">\n"</span> 
                "    gl_Position = (gl_TessCoord.x * gl_in[0].gl_Position) + <span class="next">\n"</span> 
                "                              (gl_TessCoord.y * gl_in[1].gl_Position) + <span class="next">\n"</span> 
                "                              (gl_TessCoord.z * gl_in[2].gl_Position);  <span class="next">\n"</span> 
                "}    <span class="next">\n"</span> 
            };
        
            static const char * fs_source[] =
            {   
                <span class="comments">// Fragment Shader</span>
                "#version 410 core  <span class="next">\n"</span> 
                "      <span class="next">\n"</span> 
                "out vec4 color;   <span class="next">\n"</span> 
                "               <span class="next">\n"</span> 
                "void main(void)  <span class="next">\n"</span> 
                "{             <span class="next">\n"</span> 
                "    color = vec4(0.0, 0.8, 1.0, 1.0);  <span class="next">\n"</span> 
                "}                  <span class="next">\n"</span> 
            };
        
            program = glCreateProgram();
            <span class="comments">// Compiling our shaders</span>
            GLuint vs = glCreateShader(GL_VERTEX_SHADER);
            glShaderSource(vs, 1, vs_source, NULL);
            glCompileShader(vs);
        
            GLuint tcs = glCreateShader(GL_TESS_CONTROL_SHADER);
            glShaderSource(tcs, 1, tcs_source, NULL);
            glCompileShader(tcs);
        
            GLuint tes = glCreateShader(GL_TESS_EVALUATION_SHADER);
            glShaderSource(tes, 1, tes_source, NULL);
            glCompileShader(tes);
        
            GLuint fs = glCreateShader(GL_FRAGMENT_SHADER);
            glShaderSource(fs, 1, fs_source, NULL);
            glCompileShader(fs);
        
            glAttachShader(program, vs);
            glAttachShader(program, tcs);
            glAttachShader(program, tes);
            glAttachShader(program, fs);
        
            glLinkProgram(program);
        
            glGenVertexArrays(1, &amp;vao);
            glBindVertexArray(vao);
        
            <span class="comments">// Determines how our Tessellesated Shader will be draw</span>
            glPolygonMode(GL_FRONT_AND_BACK, GL_LINE);
        }
    
        virtual void render(double currentTime)
        {
            static const GLfloat black[] = { 0.0f, 0.0f, 0.0f, 1.0f };
            glClearBufferfv(GL_COLOR, 0, black);
        
            glUseProgram(program);
            glDrawArrays(GL_PATCHES, 0, 3);
        }
    
        virtual void shutdown()
        {
            glDeleteVertexArrays(1, &amp;vao);
            glDeleteProgram(program);
        }
    
    private:
        GLuint          program;
        GLuint          vao;
    };

    DECLARE_MAIN(tessellatedtri_app)</pre>
        
        <hr />        
        <br />
        <a href = "OpenGL5.html"> Previous Page</a>
        <span class = "next">
            <a href = "OpenGL7.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>  