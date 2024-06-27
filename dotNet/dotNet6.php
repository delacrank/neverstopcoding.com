<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>ASP.net - .Net Framework</title>
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
<?php include('..//Includes//Left_dotNet.php'); ?>
    
<!-- Right -->
<div id ="rightz">

<h1>ASP.net - .Net Framework</h1>

<!-- ASP.net -->
<h2>Intro to ASP.net</h2>

    <p> ASP.net web forms are not actually websites, they are web applications because they can be coded on the backend.  ASP.net web form is capable of handling many different client side languages: html, css, javascript, and asp.  On the backend, the form is usually requires one of two server side languages: Visual C# or Visual Basic.
        
    <span class = "nl">One of the interesting thing about ASP elements, like button, textbox, link, label, etc. is that they are all enabled with various properties.  Let's look at some of those properties.</p>

<em>ASP properties</em>
<!-- Code  -->
<pre class="code">
&lt;asp:Button ID="Button1" runat="server" Text="Button"
OnClick="Button1_Click" class="button" />
</pre>

<p>So first we have just the name of the element in this case its 'asp:button'.  Then we have the: <b>ID</b> identifies the element for our server side, <b>runat</b> gives it server side functionality, <b>text</b> display this text, <b>OnClick</b> links it to an event, <b>class</b> allows us to style it with 'css'.</p>

<hr />    
    
<!-- ASP life cycle -->
<h3>ASP life cycle</h3>

    <p>An asp web form will go through a series of events before it is even displayed to the user.</p>

    <ul id = "li">
        <li><b>Page Request</b> this is when a user just requests the web form from the server.</li>
        <li><b>Start</b> the page will determine whether it was initially requested or whether it has already been post-back from the server.</li>
        <li><b>Initialization</b> controls become available, masterpage and themes are applied.</li>
        <li><b>Load</b> page is loaded with information from view state and control state. </li>
        <li><b>PostBack event handling</b> if the page has already been posted back to the server (information entered, requesting response) then validation will take place.</li>
        <li><b>Rendering</b> view state is saved and the page is rendered to handle each control method (text is displayed, etc.)</li>
        <li><b>Unload</b> After the page has been fully rendered and sent to the client, request and response are unloaded.</li>
    </ul>

<hr />    
    
<!-- Hidden Field -->
<h3>Hidden Field</h3>

    <p>A hidden field is a way of creating an object on your web application which cannot be viewed by your client.</p>

<em>Hidden Field</em>
<!-- Code  -->
<pre class="code">
&lt;asp:HiddenField ID="HiddenField1" runat="server" /></pre>

<br />
<hr />
    
<!-- ASP states -->
<h3>ASP states</h3>

    <p>For an asp web form, there are various states which it will encounter in order to process the page. The first state which I will be talking about is called the 'view state'.
        
        <span class = "nl">The <b>View State</b> only changes once the page has been 'post-back'.  There is also a 'Save State' which can be used to retrieve a prior view state. The view state comes with its only unqiue value which is auto-generated and the state will follow after the page has been 'Initialized'.</span>
        
        <span class = "nl">It is basically a way to remember what the page looked like before any changes have been made.  Let's say that a user clicked a button for a label to be changed, and upon the page being reloaded (post-back) the original value was lost.  How can the web application still display the changes made even after the memory has been dumped?  It will use the view state.</span> </p>

<hr />
    
<!-- Query String -->
<h3>Query String</h3>

    <p>A query string is a way to search for a variable based a on http request. If the URL is http&#58;//www.domainame.com/default.aspx?<span class="highlight">x=5</span>, in this senerio we are passing the value of five to our variable 'x' via our query string.</p>

<em>Query String</em>
<!-- Code  -->
<pre class="code">
Request.QueryString["x"];</pre>

<br />
<hr />
    
<!-- Cookies -->
<h3>Cookies</h3>

    <p>A cookie is a small bit of text which contains information a web application can read.  A cookie is usually used to pass information between a web server and a browser.
        
        <span class = "nl">For example: if a user is logged into a web server and they want to browser multiple pages on that server, how will the server know that the user is still logged in once they leave a web page?  The web application can create a cookie with the date and time the user logged in and this way the server will know that the user has already entered creditials to view page content because, that user just logged in.</span>
        
        <span class = "nl"> If the user logs out then the server can create another cookie which will indicate that the user is no longer logged in, and then will prompt the next user on that ip address for creditials if that want to access any content.</span></p>

<em>Cookies:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// Create a Cookie</span>
Response.Cookies["userName"].Value = "patrick";
<span class="comments">// Set an expiration date</span>
Response.Cookies["userName"].Expires = DateTime.Now.AddDays(1);

HttpCookie aCookie = new HttpCookie("lastVisit");
aCookie.Value = DateTime.Now.ToString();
aCookie.Expires = DateTime.Now.AddDays(1);
Response.Cookies.Add(aCookie);</pre>

<br />
<hr />
    
<!-- Application State -->
<h3>Application State</h3>

    <p>The application State is a way to store and retrieve data on the server, it is faster than storing and retrieving information in a database and will always apply to the web application reguardless of user, session, etc.</p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
Application["Message"] = "Welcome ASP.net";</pre>

<br />
<hr />
    
<!-- Session State -->
<h3>Session State</h3>

    <p>Session state is the same thing as an application state, the difference between the two being that session state data can only be retrieved in that same session.  For instance, if you leave the session by logging out, accessing the site through a different machine, or on a different day, etc. that information will be lost.  However, information stored on the Application State will remain reguardless of those changes. </p>

<em>Session State</em>
<!-- Code -->
<pre class ="code">
Session["FirstName"] = FirstNameTextBox.Text;</pre>

<br />
<hr />
    
<!-- ASP.net Profiles -->
<h3>ASP.net Profiles</h3>

    <p>The view state applies directly to one web page's display, the application state applies to the entire web application as a means of data storage, the session state applies directly to a single session, and now we have arrived at the profile.  The difference between a session and a profile is that a profile is unqiue in the way that it will apply directly to a single user's authenication.  A session on the other hand can apply to a multitude of different users.
        
    <span class = "nl">Let's like a social media site like MySpace or Facebook, each user has their own page with data such as pictures, text, video, links that apply only to those users.  This is the same idea with ASP.net Profile, information can be saved or accessed based on an unique identifier.</span> </p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// web.config </span>
&lt;profile>
    &lt;properties>
        &lt;add name="PostalCode" />
    &lt;/properties>
&lt;/profile>

<span class="comments">// c# </span>
Profile.PostalCode = txtPostalCode.Text;</pre>

<br />
<hr />    
    
<!-- Caching -->
<h3>Caching</h3>

    <p>Caching is a way to store web page information generated by the server, so that the server doesn't need to create it every time there is a request, instead it will provide the data stored in the cache.
        
    <span class = "nl">Caching is a way to increase performance and shorten page load times.  Items and functionality which is often manipulated by the user such as the header, footer, etc. can be cached for long periods of time.  The next time a page is requested, the sections which have been cached can be access in speed greater than those that have to be generated by the server.</span>

    <span class = "nl">The Application Cache is similar to the Application Session, the difference is that the application cache is more temporary whereas the application state is for the duration of that application. Application Cache allows you to add or remove items.</p>

<em> Application Cache</em>
<!-- Application Cache -->
<pre class="code">
Cache["CacheItem1"] = "Cached Item 1";</pre>

<hr />
<br />
<a href="dotNet5.html">Previous</a><span class="next"><a href="dotNet7.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
         