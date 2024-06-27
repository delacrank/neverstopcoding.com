<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring Security part 2</title>
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

  <h1>Spring Security part 2</h1>

  <h2>Register Controller</h2>

  <p>First we will look at the registration controller but the next class which is probably more crucial to security is the config. The config class allows users to access certain pages based on their authentication.</p>

  <em>RegistrationController.java</em>
  <pre class = "code">package com.juan.spring.security;

import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import com.juan.spring.data.UserRepository;

@Controller
@RequestMapping("/register")
public class RegistrationController {

    private UserRepository userRepo;
    private PasswordEncoder passwordEncoder;

    public RegistrationController(
		  UserRepository userRepo, PasswordEncoder passwordEncoder) {
	this.userRepo = userRepo;
	this.passwordEncoder = passwordEncoder;
    }

    @GetMapping
    public String registerForm() {
	return "registration";
    }

    @PostMapping
    public String processRegistration(RegistrationForm form) {
	userRepo.save(form.toUser(passwordEncoder));
	return "redirect:/login";
    }

}</pre>

  <p>The purpose of this controller is to allow users to access the registration template and also to save their user details into the database once they have properly registered their handle and password. Also note that there is a function for encoding their password called from the 'RegistrationForm class'. Let's take a quick peek at this class.</p>

  <em>RegistrationForm.java</em>
  <pre class = "code">package com.juan.spring.security;

import org.springframework.security.crypto.password.PasswordEncoder;
import lombok.Data;
import com.juan.spring.User;

@Data
public class RegistrationForm {

    private String username;
    private String password;
    private String fullname;
    private String street;
    private String city;
    private String state;
    private String zip;
    private String phone;

    public User toUser(PasswordEncoder passwordEncoder) {
	return new User(
		username, passwordEncoder.encode(password),
		fullname, street, city, state, zip, phone);
    }
}</pre>

  <p>This class is nothing special really, it simply encodes the passwords and returns the fields from the user to be properly inserted into the database. In otherwords its sort of a helper class to say the least.</p>

  <hr />

  <h2>CSRF token</h2>

  <p>Now on to possibly the most important and maybe one of the more complicated classes thus far. The security config class is responsible for providing access to different pages in our application. It also allows use of a cross site request forgery token, which is a hidden token that is checked each time a user wants to access a certain page. It will be created for you once you use the 'login' page in your template 'action' with thymeleaf, however if you wanted to create it seperately it would look something like this.</p>

  <em>CSRF token form</em>
  <pre class = "code">&lt;input type="hidden" name="_csrf" th:value="${_csrf.token}"/></pre>

  <p>Let's actually take a moment to look at our login template to see what the form for creating the csrf token looks like, when spring is generating the token for you.</p>

  <em>login.html</em>
  <pre class = "code">&lt;form method="POST" th:action="@{/login}" id="loginForm">

      &lt;label for="username">Username: &lt;/label>
      &lt;input type="text" name="username" id="username" />&lt;br/>
      
      &lt;label for="password">Password: &lt;/label>
      &lt;input type="password" name="password" id="password" />&lt;br/>
      
      &lt;input type="submit" value="Login"/>
    &lt;/form></pre>

<hr />

  <h2>SecurityConfig class</h2>

  <p>The security class focuses primarily on ensuring that the right user account has priviledges to access certain pages. We can accomplish this task by using some configuration methods. There are quite a few of these if you want to do more research on the topic I would suggest looking <a target="_blank" href="https://docs.spring.io/spring-security/site/docs/4.2.13.RELEASE/apidocs/org/springframework/security/config/annotation/web/builders/HttpSecurity.php">here</a>.

<span class = "nl">In this class we will be focusing on using methods from the HttpSecurity class. Many of those methods are highlighted in the link to the documentation above. The ones used in this class are 'authorizedRequests()', 'antMatchers()', 'access()', 'formLogin()', 'loginPage()', 'logout()', 'headers()', 'frameOptions()' and 'sameOrigin()'.</span>

<span class = "nl">Some of these methods also take SpEL which is the spring expression language allowing you to extend the capabilities of any method called by embedding the SpEL into the parameters of the method. Examples of this used below include 'permitAll', and 'hasRole()'. Some of the code you can write inside the configure method can actually get extremely complicated so be forewarned.</span>   </p>

<em>SecurityConfig.java</em>
<pre class = "code">package com.juan.spring.security;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;

import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.crypto.password.StandardPasswordEncoder;

@SuppressWarnings("deprecation")
@Configuration
@EnableWebSecurity
public class SecurityConfig extends WebSecurityConfigurerAdapter {

    @Autowired
    private UserDetailsService userDetailsService;

    @Override
    protected void configure(HttpSecurity http) throws Exception {
	http
	    .authorizeRequests()
	        .antMatchers("/design", "/orders")
	            .access("hasRole('ROLE_USER')")
	                .antMatchers("/", "/**").access("permitAll")

	    .and()
	        .formLogin()
	            .loginPage("/login")

	    .and()
	        .logout()
	            .logoutSuccessUrl("/")
	    
	    .and()
	        .csrf()
	            .ignoringAntMatchers("/h2-console/**")

            .and()
	        .headers()
		    .frameOptions()
		        .sameOrigin();
    }

    @Bean
    public PasswordEncoder encoder() {
        return new StandardPasswordEncoder("53cr3t");
    }

    @Override
    protected void configure(AuthenticationManagerBuilder auth)
	throws Exception {

	auth
	    .userDetailsService(userDetailsService)
	        .passwordEncoder(encoder());
    }

}</pre> 

<p>The first line of code inside the configure function uses the 'authorizedRequests()' method to check the routes for '/design' and '/orders'. Meaning that unless you are authorized you won't be able to access those pages. Calling the access method and passing some SpEL for the 'hasRole()' method checks to see if the user is a 'ROLE_USER'.  

<span class = "nl">The 'and' method allows you to extend the http security to allow for additional configuration. We use this to route our default login page to the '/login' route. Similarily we change the default logout page when calling the 'logout' method to route us back to '/' (or our starting page). Spring security allows you to logout by simply creating a form which takes '/logout' as an action.</span></p>

<em>logout form</em>
<pre class = "code">&lt;form method="POST" th:action="@{/logout}">
&lt;input type="submit" value="Logout"/>
&lt;/form></pre>

<p>We can add this form to any page we previously enabled in our security authorizedRequests (i.e., /design, /orders).

<span class = "nl">Proceeding the logout method call is a the csrf method which allows us to use the 'h2-console' our embedded database. Appending the .csrf and .ignoringAntMatchers() method to this call makes it so that we can access this page without having a cross site forgery token to access our database.</span> 

<span class = "nl">The final method calls the '.headers()' and 'frameOptions()' method to prevent an attack called clickJacking.  Let's look at the final method which overloads the configure method.</span>

<span class = "nl">In the next section we will dive into the orderController and understand how working with the AuthenticationPrincipal works.</span></p>
  
      <hr />
<br />
<a href="Java_Web28.php">Previous Page</a>
<span class = "next"><a href = "Java_Web30.php">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
