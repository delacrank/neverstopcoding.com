<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Intro to Spring</title>
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

  <h1>Spring Framework</h1>

  <h2>Intro to Spring framework</h2>

  <p>There are several ideas which I want to introduce in this section. These will be very broad and complex ideas which may actually take several chapters before the concept can be thoroughly understood. The first idea is called IoC or inversion of control the second idea is called aspect oriented programming.</p>

<hr />

<h2>Dependency Injection</h2>

  <p>When you think of a large program, some people would think of a various subsystems being held together by a few structures which have access to those smaller systems. This type of interaction is called tight coupling, since in order to use a particular a small program an instance would need to be created and the program would need to be recompiled. Imagine a paradigm where we could create programs which weren't bound to any system, but could exist simply to provide a certain function we could call this type of program a component.

    <span class = "nl">To take it one step further, imagine if we could attach and detach these components at runtime. Then our programs could be loosely coupled. This type of interaction is called dependency injection. Where components can be injected or removed at will from various systems.  Using dependency injection allows for projects to be built in a much faster pace, since programmers can simply download components via the internet and inject them into their systems based on their needs. </span>

  <span class = "nl">Let's look at an example of dependency injection below. We will give an example of first a class which is tightly coupled and then we can give an example of a class which is loosely coupled.</p>

<em>Dependency Injection:</em>
<pre class = "code">package com.springinaction.knight;

public class DamselRescuingKnight implements Knight {
        private RescueDamselQuest quest;

	<span class = "comments">// here we create an instance of the quest</span>
	public DamselRescuingKnight() {
	       this.quest = new RescueDamselQuest();
	}
	public void embarkOnQuest() {
	       quest.embark();
	}
}</pre>

<p>The reason this knight is tightly coupled is because everytime we want it to perform an action we are limited to passing the quest into one of our methods, so essentially we are hardcoding the questing capabilities into one method. Let's look at a scenario where we can create a method for a knight which can use a variety of different quests.</p>

<em>Dependency Injection:</em>
<pre class = "code">package com.springinaction.knights;

public class BraveKnight implements Knight {
	private Quest quest;

	<span class = "comments">// notice here we created an arguement to pass quest in</span>
	public BraveKnight(Quest quest) {
	       this.quest = quest;
	}

	public void embarkOnQuest() {
	       quest.embark();
	}
}</pre>

<p>In the second option we created a pattern where our quest class could be expanded to handle a variety of different quests, in this sense our knight has a lot more versatility. There is still an issue of how would we go about wiring these different spring beans. For one we could either create an java file to handle those types of configurations or we could use something like xml in this instance.

<span class = "nl">Let's look an the xml example in this instance.</span></p>

<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.springframework.org/schema/beans
http://www.springframework.org/schema/beans/spring-beans.xsd">

<span class = "comments">// a bean for our knight class</span>
&lt;bean id="knight" class="com.springinaction.knights.BraveKnight">
	 &lt;constructor-arg ref="quest" />
&lt;/bean>

<span class = "comments">// a bean for our quest class</span>
&lt;bean id="quest" class="com.springinaction.knights.SlayDragonQuest">
	&lt;constructor-arg value="#{T(System).out}" />
&lt;/bean>
&lt;/beans></pre>

<p>Using xml to be able to connect the beans together is called wiring. This will be very important later, xml is one way to wire beans, however another way to wire beans together would be if we used spring annotations. Let's look at the java file required to upload this xml to our application.</p>

<em>KnightMain.java</em>
<pre class = "code">package com.springinaction.knights;
import org.springframework.context.support.ClassPathXmlApplicationContext;
public class KnightMain {

       public static void main(String[] args) throws Exception {
       	     ClassPathXmlApplicationContext context =
	     new ClassPathXmlApplicationContext("META-INF/spring/knight.xml");
	     Knight knight = context.getBean(Knight.class);
	     knight.embarkOnQuest();
	     context.close();
	}
}</pre>

<hr />

<h2>Aspect Oriented Programming</h2>

  <p>In order to understand aspect oriented programming we must first refer back to our components. Imagine if we have several components which require some sort of security aspect, then we would require some way to keep the scope of those components relative to the security feature. Similarly, some other components may share similar concerns related not to security maybe but maybe access to a database. Still there may be a third group which would require aspects of both security and database access. These types of concerns are called cross-cutting corcerns and spring provides us with some tools for dealing with these concerns.

<span class = "nl">Let's look at an example where we might want to use aspect oriented programming.</p>

<pre class = "code">package com.springinaction.knights;
public class BraveKnight implements Knight {
	private Quest quest;
	private Minstrel minstrel;
	<span class = "comments">// inject two dependencies into this class</span>
	public BraveKnight(Quest quest, Minstrel minstrel) {
		this.quest = quest;
		this.minstrel = minstrel;
	}
	
	public void embarkOnQuest() throws QuestException {
	       minstrel.singBeforeQuest();
	       quest.embark();
	       minstrel.singAfterQuest();
	}
}</pre>

<p>This bloats our code and also gives knight the ability to call on the minstrel methods, maybe we don't want to give it full control to do this. Let's look at an example of what it would like if we simply wired both the minstrel and quest features using the spring expression language via the xml.</p>

<em>AOP</em>
<pre class = "code">&lt;?xml version="1.0" encoding="UTF-8"?>>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xmlns:aop="http://www.springframework.org/schema/aop"
xsi:schemaLocation="http://www.springframework.org/schema/aop
  http://www.springframework.org/schema/aop/spring-aop-3.2.xsd
  http://www.springframework.org/schema/beans
  http://www.springframework.org/schema/beans/spring-beans.xsd">

&lt;bean id="knight" class="com.springinaction.knights.BraveKnight">
      &lt;constructor-arg ref="quest" />
&lt;/bean>

&lt;bean id="quest" class="com.springinaction.knights.SlayDragonQuest">
      &lt;constructor-arg value="#{T(System).out}" />
&lt;/bean>

&lt;bean id="minstrel" class="com.springinaction.knights.Minstrel">
      &lt;constructor-arg value="#{T(System).out}" />
&lt;/bean>

<span class = "comments">// notice how we describe which methods our knight can use</span>
&lt;aop:config>
	&lt;aop:aspect ref="minstrel">
		    &lt;aop:pointcut id="embark" expression="execution(* *.embarkOnQuest(..))"/>
		    &lt;aop:before pointcut-ref="embark" method="singBeforeQuest"/>
		    &lt;aop:after pointcut-ref="embark" method="singAfterQuest"/>
        &lt;/aop:aspect>
&lt;/aop:config>
&lt;/beans></pre>

<p>I wouldn't be too concerned with this confusing use of the spring expression language right now, we will see more examples of it as we keep progressing through the tutorial.</p>

  <hr />

  <h2>Application Context</h2>

  <p>Using the jsp servlets model we had a heirarchy of different scopes: request, session, page, application etc. Similarly in spring we have different application contexts which have different levels of access. Below I will show the interfaces which implement our main context (Application Context).</p>

  <ul class ="li">
    <li><b>ConfigurableApplicationContext:</b> Configures the application context (only readable).</li>
    <li><b>org.springframework.web.context &amp; ConfigurableWebApplicationContext:</b> Provides access to the ServletContext and ServletConfig.</li>
    <li><b>ClassPathXmlApplicationContext &amp; FileSystemXmlApplicationContext:</b> Loads spring config (fileSysXmlApp), while XmlWebAppPath does the same for JavaEE web apps.</li>
    <li><b>AnnotatioonConfigApplicationContext &amp; AnnotationConfigWebApplicationContext:</b> Provides annotations for configuring spring using annotations instead of using xml.</li>
  </ul>

  <p>We will soon see the difference or tradeoffs in configuring a spring application using xml as appose to annotations. For now let's look at an example of a simple web application. We'll do this in our next section.</p>

<hr />
<br />
<a href="Java_Web18.php">Previous Page</a>
<span class = "next"><a href = "Java_Web20.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
