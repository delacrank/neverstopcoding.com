<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Juan Arias" />  
<title>SEO - Tools</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Seo.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Seo Tools</h1>
    
    <p>One of the most important tools that you can look forward to in trying to understand and build your page rank is the google webmaster tools. Probably one of the first things you want to do once you have built and deployed your website is get the thing indexed by the popular search engines.
    
    <span class = "nl">This can happen one of two ways, the first way is by the search engines spider just crawling naturally on its own and finding your site. The second way is by creating a sitemap xml file (literally named sitemap.xml) storing it in your root directory and registering your site to google's <a href='https://www.google.com/webmasters/' target='_black'>webmaster tools</a>.</span></p>
    
    <hr />
    
    <h2>Verify and Analytics</h2>
    
    <p>If you don't already have an existing <a href='https://accounts.google.com/SignUp?hl=en' target='_blank'>google account</a>, you can just create one. Once you create a console with your domain name, you can verify the site using a confirmation link. Next you should also create an <a href='https://www.google.com/analytics' target="_blank">analytics account</a> and add this script to your header tag or later on in the body.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;!-- Global Site Tag (gtag.js) - Google Analytics -->
    <span class = "comments">// Replace the GA_TRACKING_ID with your tracking ID</span>
    &lt;script async 
    src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID">
    &lt;/script>
    &lt;script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      <span class = "comments">// Replace the GA_TRACKING_ID with your tracking ID</span>
      gtag('config', 'GA_TRACKING_ID');
    &lt;/script></pre>
    
    <p>You should now be able to track the amount of visitors that come to your site on a given day. Remember that by having other websites or forms of social media such as youtube, twitter, facebook, instagram (platforms which have large amounts of users) you can increase the amount of traffic to your site and increase your ranking within the search engines.</p>
    
    <hr />
    
    <h2>Robots.txt file</h2>
    
        <p>The 'Robots' text file is a file which can deny access to certain pages a web master doesn't want crawled. This can include css, javascript, or just private directories. Certain pages can also be denied simply by the use of Sessions or Cookies (crawlers can't access those either).
    
        <span class = "nl">Let's look at an example of how we can create a robots.txt file and set certain features on it to deny or enable spiders to crawl certain pages.</span></p>
    
    <hr />    
    
    <h2>Google Adsense</h2>
    
        <p>Setting up a google Adsense account is a way to generate passive income everytime a person clicks on an advertisement. Notice that certain websites competing for similar themes or topics will be competing for users, so it is good to research this type of information. The type of adsense you use on your website can either generate a lot or a little amount of money per click, depending on how much competition there is for that topic.
    
        <span class = "nl">Once again you can set up an <a href='https://www.google.com/adsense/start/' target='_blank'>adsense account</a> and then add the following javascript to your inside of your body tag.</span>
    </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;script async 
    src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
    &lt;/script>
    &lt;script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "your_client_id",
            enable_page_level_ads: true
          });
    &lt;/script> </pre>
    
        <p>However, you can avoid the billing aspect of adsense if you just never add this code into your site and still use the keyword planner.</p>
    
    <hr />
    
    <h2>Google Adwords</h2>
    
        <p>Google adwords is the company that businesses actually use in order to get traffic to their sites and convert clicks into purchases. This is idea commonly referred to as the click through rate (rate at which a click can turn into a profit).
    
        <span class = 'nl'>In order to <a href='https://adwords.google.com/home/' target="_blank">set up an account using adwords</a>, users will require a website and a credit card. Although, once you create an account you can pause your campaign (halting being charged for clicks) allowing a you to use their tools in order to perform research. </span>
    
        <span class = 'nl'>There are many other companies who have created software to track keywords and traffic on search engines, although this type of data is usually extremely expensive.</span></p>
    
    <hr />
    
    <h2>Google Trends</h2>
    
        <p>One last area to find out which topics are currently treading. If you are running a site it is probably best if you catered to your audiences preferences. However, constantly finding new and interesting topics to talk about a speific topic can be difficult over a long period of time.
    
        <span class = "nl">By finding out about lastest trends, what people are talking or searching about, you can create content which can garner a larger audience.</span>
    
        <span class = "nl">That's all for now, in the next section we are going to be diving into site architecture, internal link structures and site duplication. Basically, how to avoid reducing your SEO ranking.</span></p>
    
<hr />
<br />
<a href="Seo.php">Previous</a>
<span class = "next"><a href="Seo2.php">Next Page</a></span>
<br /><br />    
    
</div>
</div>
<!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>