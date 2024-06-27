<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn how to use the windows communcation foundation to create powerful and secure web applications for windows." />
<meta name="keywords" content="Windows Communication Foundation" />
<meta name="author" content="Juan Arias" />    
<title>Learning WCF</title>
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
<?php include('..//Includes//Left_Wcf.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Learning WCF</h1>

<!-- What is WCF -->    
<h2>What is WCF</h2>
    
    <p>WCF is an acronyn for Windows Communication Foundation. First let's talk about what a service is and what exactly is SOA (service oriented architecture/application).
        
        <span class = "nl">What does that mean, when we talk about SOA, we are talking about the exposure of an API (application programming interface) for your system.  Having a web api makes it so that your client has limited access functionality by making service calls.</span>
    
        <span class = "nl">When we talk about service we are talking about machine to machine communication.  However, we need to protect our machines by manipulation or access from other machines by using a firewall.  Hence the premise of a Service layer which provides our client with access to our machine with limited information through a system of contracts or calls.</span>
    
        <span class = "nl">Using this system we provide our clients with services from our machine to theirs which they can consume, while protecting both our machines in the process.</span> </p>
    
<!-- Data Contracts -->
<h3>Data Contracts</h3>    
    
    <p>Let's start by building our first data contract. Be sure to add the System.Runtime.Serialization to our references in our solution explorer in order to use our 'DataContract' keywords.</p>
  
<em>Code:</em>
<!-- Code -->
<pre class="code">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.Text;
using System.Threading.Tasks;
    
namespace GeoLib.Contracts
{ 
    [DataContract]
    <span class="comments">// Should end method with Data</span>
    public class ZipCodeData
    {
        [DataMember]
        public string City { get; set; }
        [DataMember]
        public string State { get; set; }
        [DataMember]
        public string ZipCode { get; set; }
    }
}</pre>

    <p>Good, now that we have our data contracts let's create a method from which to call these contracts.  This time let's add an interface to our project which is a virtual class.  Also, we should add a reference to the project which is 'System.ServiceModel'.</p>
     
<br />
<hr /><br />
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>