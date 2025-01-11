 <!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Sockets Chat App</title>
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

  <h1>Web Sockets Chat App</h1>

  <h2>Chat App</h2>

  <p>This application will be comparably much more complicated and will require the use of json (javascript object notation) in order to quickly write and read to the chat. In order to use json in our application we require the use of two jars, these can be downloaded at the links in the next paragraph.

    <span class = "nl">The json jar file can be downloaded <a href="http://www.java2s.com/Code/Jar/j/Downloadjavaxjson10jar.htm" target="_blank">here</a> add the json jar to your lib folder. In order to run the file you also need to add the processing jar to your lib folder, it can be downloaded <a href="https://download.oracle.com/otndocs/jcp/json_p-1_1-pr-spec/index.html" target="_blank">here</a></span>

    <span class = "nl">Before we show any of the code, we should go over some other web socket features. One is that web sockets has its own form of session handling, meaning that we want to be able to keep track of users so that we know when they come and go. Meaning that a single user can not join the chat multiple times from the same computer.</span>

    <span class = "nl">The session has several functions called getUserProperties and getBasicRemote, which we will use these to track the user's name (userProperties) and to send messages to our server (BasicRemote). There is also the new JsonObect class and StringWriter class, these work in tandem to generate our messages as json. This is what our last private function does, it takes our message and transforms it into json.</span></p>

  
  <em>ChatroomServerEndpoint.java</em>
  <pre class = "code">import java.util.Collections;
import java.util.HashSet;
import java.util.Set;
import java.util.Iterator;
import javax.websocket.server.ServerEndpoint;
import javax.websocket.OnClose;
import javax.websocket.OnMessage;
import javax.websocket.OnOpen;
import javax.websocket.Session;
import javax.json.Json;
import javax.json.JsonObject;
import javax.json.JsonWriter;
import java.io.StringWriter;
import java.io.IOException;

@ServerEndpoint("/chatroomServerEndpoint")
public class ChatroomServerEndpoint {
       static Set&lt;Session> chatroomUsers = Collections.synchronizedSet(new HashSet<Session>());

       <span class = "comments">// add a user to the chatroom</span>
       @OnOpen
       public void OnOpen(Session userSession) {
       	      chatroomUsers.add(userSession);
       }

       <span class = "comments">// check the userSession to see if it's null</span>
       <span class = "comments">// if it's null add this user to the userSession</span>
       <span class = "comments">// otherwise send a message to the server</span>
       @OnMessage
       public void Message(String message, Session userSession) {
       	      String username = (String) userSession.getUserProperties().get("username");
	      if(username == null) {
	             userSession.getUserProperties().put("username", message);
		     try {
			 userSession.getBasicRemote().sendText(buildJsonData("System", "you are now connected as " + message));
		     } catch (IOException e) {
			 e.printStackTrace();
	             }
              } else {
                      <span class = "comments">// Using an iterator ensures that new users get the entire conversation</span>
	       	      Iterator&lt;Session> iterator = chatroomUsers.iterator();
		      while(iterator.hasNext()) {
			  try {
			      iterator.next().getBasicRemote().sendText(buildJsonData(username, message));
			  } catch (IOException e) {
			      e.printStackTrace();
			  }
		      }
	       }
       }

       <span class = "comments">// remove the user from the session</span>	   
       @OnClose
       public void OnClose(Session userSession) {
       	      chatroomUsers.remove(userSession);
       }

       <span class = "comments">// transforms the username and user message into json</span>
       private String buildJsonData(String username, String message) {
       	       JsonObject jsonObject = Json.createObjectBuilder().add("message", username + ": " + message).build();
	       StringWriter stringWriter = new StringWriter();
	       try(JsonWriter jsonWriter = Json.createWriter(stringWriter)) {
	              jsonWriter.write(jsonObject);
	       }
       	       return stringWriter.toString();
       }
}</pre>

<p>Let's move on to the client side code in order to better understand it as well.</p>  

 <em>index.html</em>
 <pre class = "code">&lt;!DOCTYPE html>
       &lt;html>
       &lt;head>
		&lt;title>Web Socket Chat App&lt;/title>
       &lt;/head>
&lt;body>
&lt;script>
	var websocket = new WebSocket("ws://localhost:8080/web/chatroomServerEndpoint");
        <span class = "comments">// take the json sent from the server and parse it</span>
	<span class = "comments">// then append this data to our text box</span>
	websocket.onmessage = function processMessage(message) {
	        var jsonData = JSON.parse(message.data);
		if(jsonData.message != null) {
		    messagesTextArea.value += jsonData.message + "\n";
		}
	}
	
	<span class = "comments">// sends the message to the server</span>
	function sendMessage() {
		 websocket.send(messageText.value);
		 messageText.value = "";
	}
&lt;/script>
&lt;textarea id="messagesTextArea" readonly="readonly" rows="10" cols="45">
&lt;/textarea>&lt;br />
&lt;input type="text" id="messageText" size="50" />
&lt;input type="button" value="Send" onclick="sendMessage();" />
&lt;/body></pre>

<p>The client side is much simpler to understand this time. It takes the JSON which is built on the server parses that and appends it to the textarea field. Similarly it takes messages sent from the input box and sends it to the server. In the case that the message is a new user it adds that user to the users Session (set), if that user is already in the set it appends their name to the message and builds it in json to be sent back.</p>

<em>Compile</em>
<pre class = "code"><span class = "comments">// add the json jar to your lib</span>
  <span class = "comments">// add the class path to compile</span>
javac -cp ".;C:\path\to\lib\websocket-api.jar;.;C:\path\to\lib\javax.json-api-1.0.jar" ChatroomServerEndpoint.java</pre>

<p>Since we require two jars to build this class one for the socket api and one for the json api I've added those to the class path for you.</p>

  <hr />
  <br />
 <a href="Java_Web16.php">Previous Page</a>
<span class = "next"><a href = "Java_Web18.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
