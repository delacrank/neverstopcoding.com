<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Creating a Window - DirectX Game Development</title>
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
<?php include('..//Includes//Left_DirectX.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Creating a Window - DirectX Game Development</h1>
        
        <h2>Our first Window</h2>
        
        <p>This code will print out our first 'Windowed' application using the 'Win32' API. In order to run this program under the command line, be sure to add the version of c++ using the -std option and link the gib library as well using the -lgib option after source file.
            
            <span class="nl">The command line should look something like this below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    g++ -std=c++11 -o test main.cpp -lgib</pre>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int WinAPI WinMain(HINSTANCE hinstance, HINSTANCE hPrevInstance, 
    LPSTR lpcmdLine, int nCmdShow )
    {
        MSG msg;
        
        MyRegisterClass(hinstance);
        
        if(!InitInstance(hInstance, nCmdDhow)) return FALSE;
        
        while(GetMEssage(&amp;msg, NULL, 0, 0))
        {
            TranslateMessage(&amp;msg);
            DispatchMessage(&amp;msg);            
        }
        
        return msg.wParam;
    }</pre>
        
        
        
        <hr />        
        <br />

        <a href="DirectX.html">Previous Page</a>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    