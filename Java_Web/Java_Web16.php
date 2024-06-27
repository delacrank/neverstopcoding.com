 <!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Sockets</title>
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
<?php include('..//Includes//Left_Java_Web.php'); ?>
    
<!-- Right -->
<div id ="rightz">

<h1>Web Sockets</h1>

<h2>Web Sockets Explained</h2>

<p>This is a small application dealing with only one class and one html page. The purpose of this application is to see how to connect our client side page to our server side java class using a protocol called web sockets. What a web socket allows you to do, is create a secure bi-directional relationship thereby removing the client, server side dichotomy.

  <span class = "nl">The benefits of using web sockets is speed but some of the disadvantages in using bi-directional communications lack of security. However, this works by first using http and changing the protocol to 'upgrade' via a handshake. This means either party can leave the bi-directional communication at any time, going back to the http protocol. There are two types of secure communication are ws (web socket) and wss (web socket secure), similar to http and https where one is encrypted (wss) and the other isn't (ws). The class below will demonstrate the ways we can use web sockets.</span></p> 

<em>EndPointDemo.java</em>
<pre class = "code">import javax.websocket.OnClose;
import javax.websocket.OnError;
import javax.websocket.OnMessage;
import javax.websocket.OnOpen;
import javax.websocket.server.ServerEndpoint;

@ServerEndpoint("/endpointdemo")
public class EndPointDemo {
       <span class = "comments">// Display on server side client is connected</span>
       @OnOpen
       public void onOpen() {
       	      System.out.println("client is now connected ...");
       }
       <span class = "comments">// return a string to client side</span>
       @OnMessage
       public String onMessage(String message) {
       	      System.out.println("recieve from client: " + message);
	      String replyMessage = "echo " + message;
	      System.out.println("send to client: " + replyMessage);
	      return replyMessage;
       }
       <span class = "comments">// let server know that client disconnected</span>
       @OnClose
       public void onClose() {
       	      System.out.println("client is now disconnected ...");
       }
       <span class = "comments">// display errors</span>
       @OnError
       public void onError(Throwable t) {
       	      t.printStackTrace();
       }
}</pre>

<p>In order to use the web socket you will need to compile the application using the websocket api, which will be displayed below. First, let's understand the code. The serverEndpoint annotation will describe where the client needs to be redirected to in order to communicate with the server. Each annotation above the functions onOpen, onMessage, onClose and onError will describe the behavior of the server when the client uses the web socket to perform those tasks.</p>

<em>Compile</em>
<pre class = "code"><span class = "comments">// add the class path to compile</span>
  javac -cp ".;C:\path\to\lib\websocket-api.jar;" EndPointDemo.java</pre>

<p>Great, now that we have completed that task let's move on to writing some of the client side code which may actually be more confusing.</p>

<em>index.html</em>
<pre class = "code">&lt;!DOCTYPE html>
&lt;html>
	&lt;head>
		&lt;title>Web sockets&lt;/title>
	&lt;/head>
&lt;body>
	&lt;h1>Web Socket test&lt;/h1>
	&lt;form>
		&lt;input id="textMessage" type="text"/>
		&lt;input onclick="sendMessage();" value="Send Message" type="button">
	&lt;/form>

	&lt;textarea id="messagesTextArea" rows="10" cols="50">&lt;/textarea>

  	&lt;script>
		<span class = "comments">// describe the uri for the server side code</span>
		var webSocket = new WebSocket("ws://localhost:8080/web/endpointdemo");
		var messagesTextArea = document.getElementById("messagesTextArea");
		<span class = "comments">// annotations will line up with each of these calls</span>
	        webSocket.onopen = function(message) { processOpen(message);};
                webSocket.onmessage = function(message) { processMessage(message);};
		webSocket.onclose = function(message) { processClose(message);};
		webSocket.onerror = function(message) { processError(message);};

		<span class = "comments">// append this to textarea</span>
		function processOpen(message) {
			 messagesTextArea.value += "Server Connect..."+"\n";
		}

		<span class = "comments">// append this to textarea</span>
	        function processMessage(message) {
		         messagesTextArea.value += "Send to Server ==> " + message.data + "\n";
	        }

		<span class = "comments">// checks value to see if it's close</span>
		<span class = "comments">// sends message to server, appends it to textarea</span>
		function sendMessage() {
		    if(textMessage.value != "close") {
			webSocket.send(textMessage.value);
			messagesTextArea.value += "Send to Server ==> " + textMessage.value + "\n";
			textMessage.value = "";
		    } else {
			webSocket.close();
		    }
		}

		<span class = "comments">// triggers when websocket.close() is called</span>
		function processClose(message) {
		    webSocket.send("client disconnected ...");
		    messagesTextArea.value += "Server Disconnect..."+"\n";
		}

		function processError(message) {
			 messagesTextArea.value += "error ...\n";
		}
	&lt;/script>
&lt;/body>
&lt;/html></pre>

<p>In the next section we are going to expand on this simple application by building a full blown chat application.</p>


  <hr />
  <br />
 <a href="Java_Web15.php">Previous Page</a>
<span class = "next"><a href = "Java_Web17.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
