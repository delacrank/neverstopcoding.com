<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Juan Arias" />  
<title>SEO - Friendliness</title>
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

<h1>Seo Site Friendliness</h1>
    
    <p>There are several ways to ensure that spiders and users will be able to accurately browse articles on your website. One being site architecture (articles link to each other), relevance to a topic (staying on topic), simple URLs and informative tag usage.</p>
    
    <hr />
    
    <h2>Site Architecture</h2>
    
        <p>A good site architecture will ensure that users have an understanding of how to navigate the site in order to aquire the content they desire. Another feature of good architecture will have inbound links which usually point to a landing page. 

        <span class = "nl">Flat versus deep site architecture, a flat site architecture is where a user only needs to maybe navigate to 2 - 3 pages before getting to the information they need. Sometimes the page is under one or two directories, deep site architecture is where files require at least 4 - 5 clicks.</span>

        <span class = 'nl'>Not only is this bad for users, who don't want to get confused in navigating your website, it is also bad for crawlers which can give certain pages higher ranking then your landing or category pages.</span></p>
    
    <hr />
    
    <h2>Revelance</h2>
    
        <p>It's usually good to produce content which remains relevant throughout. Users who are browsing will be interested in browsing your other content and there is a higher likelihood that your site can be used as a reference by other wbesites or through word of mouth.
    
        <span class = "nl">This is important if you are targeting a certain demographic of users ones who may be interested in health. If you want to add a section on movies, then it may be necessary to create another website which addresses those concerns. Rather then having two groups of users navigate content which may not be relevant to them.</span></p>
    
    <hr />
    
    <h2>Simple URLs</h2>
        
        <p>Simple URLs refer to sites that may add session id's using get requests in order to maintain a users state. Search engines get confused by these and also by sites which may pass in too many variables in the query string (?name=john&amp;category=seo&amp;features=urls).

        <span class ='nl'>Choosing a URL name which is relevant to the type of content you are creating is important. Be sure that directories created refer to topics help not only users but also the spiders. Make sure that a URL you choose isn't already trademarked, also if you find a URL which users may use to search for content pertaining to your site, you can purchase it and redirect (HTTP 301) users to your main site.</span></p>
    
    <hr />
    
    <h2>Important tag usage</h2>
    
        <p>There are going to be certain HTML tags which will be able to determine how well your site is ranked. Spiders generally use these tags in order to determine how to send users to their desired location. If you have an article about web development then labeling the 'title' and 'h1' tags to suit that definition is extremely important.
    
        <span class ='nl'>It is also important to name your 'anchor' tags with relevant descriptions (not 'click here'), all of these go together for the spider in being able to determine whether your content is relevant to the users needs. Adding 'alt' tags and describing images, videos in those tags is also very important. Spiders can't read images or video content, make it simple for them to understand what is happening, these tags also help rank your images higher when users perform an image search.</span>
    
        <span class = 'nl'>If there is potential that your article is being reference on another website then it may be important to use the 'link' tag and set the rel attribute to 'canonoical'. Search engines will know to rank the original poster above another site which may have a larger audience.</span>
    
        <span class = 'nl'>If you want to include your company name in the title tag, be sure to include the topic first and then user a delimiter ('|' or '-') to separate the topic from the company name. This will rank higher in the topic, of course if you want the company name to rank higher then reverse the order.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;link rel = 'canonical' href = 'http://www.yoursite.com'></pre>
    
        <p>It is also important to fill out your 'meta description' and 'meta keyword' tags. Also I don't think google ranks the meta keyword tag highly anymore due to spamming abuse.
    
        <span class = "nl">Be sure to make your first heading tag contain the most relevant keyword to your article, as spiders rank by the order of heading tags, not the type of heading tag. Also, be sure to use many synonyms and descriptive language to stay on topic and keep the content interesting. Search engines will rank you lower if you repeat a keyword too much, seeing this as an exploitative and spam. </span></p>
    
    <hr />
    
    <h2>Keyword Cannibalization</h2>
    
        <p>Keyword cannibalization refers to when you have a popular keyword being referred to on multiple pages of a site. This can be problematic due to the nature of ranking system and how competing with your own content can water down your overall ranking.
    
        <span class = "nl">One way to avoid this problem is by creating a visual flow chart of which keywords you want to rank higher and then create internal links everytime those words are mentioned back to the page you want at the top of the ranking.</span></p>
    
    <hr />
    
    <h2>Long Tail Keyword Targeting</h2>
    
        <p>Long and short tail refer to the amount of times a certain phrase or word gets search. While short tail searches may on average generate a lot of users on any given day, the competition and frequency of visits might be short and may not always lead to a conversion.
    
        <span class ='nl'>Long tail searches on the other hand pertain to content which is rarely searched and may in fact be very valuable to users who require information which may not be available in other resources (books, video, etc.).</span>
    
        <span class = 'nl'>Generally a user who maintains a blog or a website which focuses on a topic and gets in depth with that particular information (maybe even an expert in that field) can bring in users from both ends of the graph, long and short tail. One of the major benefits of creating long tail content is that competition for this information is rare, so its easy to dominate a keyword or phrase. </span></p>
    
<hr />
<br />
<a href="Seo1.php">Previous</a>
<span class = "next"><a href="Seo3.php">Next Page</a></span>
<br /><br />    
    
</div>
</div>
<!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>