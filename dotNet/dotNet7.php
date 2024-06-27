<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>ASP.net Part 2 - .Net Framework</title>
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

<h1>ASP.net Part 2 - .Net Framework</h1>

<h2>User Controls</h2>

    <p>A user control is simply a variety of 'asp' elements which can be saved on a .ascx page.  The purpose of creating this control is being able to use it on multiple pages without having write the or drag the elements each time.
        
    <span class = "nl">Futhermore, the beauty of creating a user control is that it has a .cs file (code behind).  This .cs file will enable the web master to provide his control with server side functionality.</span></p>

<em>Web user Control:</em>
<!-- Code  -->
<pre class="code">
<span class="comments">// Control Page has a different heading </span>
&lt;%@ Control Language="C#" AutoEventWireup="true"
CodeBehind="PageControl.ascx.cs" Inherits="WebApplication1.PageControl" %>

<span class="comments">// Register the control in your .aspx page first  </span>
&lt;%@ Register Src="~/PageControl.ascx" TagPrefix="uc1"
TagName="PageControl" %>

<span class="comments">// The control has the same name as it's .asxc file </span>
&lt;uc1:PageControl runat="server" id="PageControl" /></pre>

<br />
<hr />    
    
<!-- Place holders -->
<h3>Place Holders</h3>

    <p>ASP also has elements called 'place holders'.  These can be very useful for adding user controls to your web form via your .cs or codebehind files.  You can drag a place holder from your toolbox to your web form, later you can access that location using your codebehind in c#.</p>

<em>Place Holder</em>
<!-- code -->
<pre class="code">
&lt;asp:PlaceHolder ID="PlaceHolder1" runat="server">&lt;/asp:PlaceHolder></pre>
    
<br />
<hr />

<!-- partial caching -->
<h3>Partial Caching</h3>

    <p>Caching as we learned before, is a way to save the state of a web page so that the application won't have to constantly generate one everytime the page is reloaded.  There is also a way to partially cache certain items of a web application, such as a control which may be upgraded more often then the header or main page.</p>

<em>Parital Caching</em>
<!-- Code -->
<pre class="code">
<span class="comments">// This can be applied to the control or the page</span>    
&lt;% OutputCache Duration="120" VaryByParam="None" %></pre>

<br />
<hr />
    
<!-- Server Controls -->
<h2>Server Controls</h2>

    <p>A server control is similar to a textbox or a label from the toolbox.  It is an element we can use to modify our web application.  Adding a server control is like creating our own element and then being able to use it whenever necessary. 
        
        <span class = "nl">One of the main differences between the user control and the server control, is that the user controls are like a partial page in the sense that you can add many server controls to them.  Whereas, the server control is limited to one customizable element.</span>
    
        <span class = "nl">Below, we will look at some code necessary for creating a server control.</span></p>

<em>Server control:</em>
<!-- Code -->
<pre class="code">
namespace <span class="highlight3">ServerControl1</span>
{
    [DefaultProperty("Text")]
    <span class ="comments">// Displays the name of the control</span>
    [ToolboxData("&lt;{0}:<span class="highlight">WelcomeLabel</span> runat=server>&lt;/{0}:<span class="highlight">WelcomeLabel</span>")]
     <span class ="comments">// Inherits the label class (isn't limited to that class though)</span><br />
    public class WelcomeLabel : Label
    {
        [ Bindable(true),
        Category("Appearance"),
        DefaultValue(""),
        Description("The text to display when the user is not logged in."),
        Localizable(true) ]
        public virtual string DefaultUserName
        {
            get
            {
                string s = (string)ViewState["DefaultUserName"];
                return (s == null) ? String.Empty : s;
            }
            set
            {
                ViewState["DefaultUserName"] = value;
            }
        }
        
        protected override void RenderContents(HtmlTextWriter writer)
        {
            writer.WriteEncodedText(Text);

            string displayUserName = DefaultUserName;
            if (Context != null)
            {
                string userName = Context.User.Identity.Name;
                if (!String.IsNullOrEmpty(userName))
                {
                    displayUserName = userName;
                }
            }
            if (!String.IsNullOrEmpty(displayUserName))
            {
                writer.Write(", ");
                writer.WriteEncodedText(displayUserName);
            }
            writer.Write("!");
        }
    }
}</pre>

<p>When adding a server control, make sure that you add it to another project first, and then add it in your references to your main project (otherwise it will not work).
    
<span class ="nl">Server controls are adding from the toolbox instead of solution explorer like the user controls.</p>

<em>Server Control:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// Registering a Server control, assembly is the name of the project</span>
&lt;%@ Register assembly="ServerControls" 
namespace="<span class="highlight3">ServerControl1</span>" tagprefix="<span class="highlight2">cc1</span>" %>

<span class="comments">// Using the control </span>
&lt;<span class="highlight2">cc1</span>:<span class="highlight">WelcomeLabel</span> ID="WelcomeLabel" runat="server">
My Text &lt;/<span class="highlight2">cc1</span>:<span class="highlight">WelcomeLabel</span>></pre>

<br />
<hr />
    
<!-- Master Page -->
<h3>Master Page</h3>

    <p>A master page is a way to format your web from/application.  It also provides your page with the ability to repeat controls, a header or a footer.  This is great for large websites, it saves you time writing out a navigation and menu bar for each page.
        
        <span class = "nl">Once you create a master page, be sure to use content tags for each new web form.  These tags will ensure that each page will have its own content while still keeping the overall style of your masterpage outside of those tags.</span></p>

<em>Master Page</em>
<!-- Code -->
<pre class="code">
&lt;%@ Master Language="C#" AutoEventWireup="true"
CodeFile="MasterPage.master.cs" Inherits="<span class="highlight">MasterPage</span>" %>

&lt;!DOCTYPE html>

&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head id="Head1" runat="server">
    &lt;title>&lt;/title>
    &lt;asp:ContentPlaceHolder id="head" runat="server">
    &lt;/asp:ContentPlaceHolder>
&lt;/head>
&lt;body>
    &lt;form id="form1" runat="server">
    &lt;div>
        &lt;asp:ContentPlaceHolder id="ContentPlaceHolder1" runat="server">
        
        &lt;/asp:ContentPlaceHolder>
    &lt;/div>
    &lt;/form>
&lt;/body>
&lt;/html></pre>

<p>Pages which use the master page will require the master page in their definition as well as content place holders.</p>

<em>Content Pages</em>
<!-- Code -->
<pre class ="code">
&lt;%@ Page Language="C#"
    MasterPageFile="~/<span class="highlight">MasterPage</span>.master"
    AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="Default" %>

&lt;asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1"
Runat="Server">
    Place your content in here!
&lt;/asp:Content></pre>

<br />
<hr />
    
<!-- Themes -->
<h3>Themes</h3>

    <p>Themes are ways to change the look and feel of our content.  One way to add a new theme to our web application is by adding an ASP.net folder to our solution, select 'Theme' from the options.  Once you have created a 'Theme' add a 'skin file' to it.  You can apply your theme by simply adding the name of the folder under 'App_Themes' to your web.config file.</p>

<em>Theme:</em>
<!-- Code -->
<pre class="code">
&lt;asp:Textbox ID="Textbox1" runat="server"
  BackColor="Red"
  ForeColor="White"
  Font-Name="Arial"
  Font-Size="9px" /></pre>

<br />    
    
<em>Applying theme:</em>
<!-- Code  -->
<pre class ="code">
&lt;configuration>
 &lt;system.web>
   &lt;pages theme="<span class="highlight">Theme1</span>" />
    &lt;compilation debug="true" targetFramework="4.0"/>
  &lt;/system.web>
&lt;/configuration></pre>

<hr />
<br />
<a href = "dotNet6.html">Previous Page</a>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 