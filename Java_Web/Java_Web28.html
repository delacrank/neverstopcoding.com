<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring Security</title>
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

  <h1>Spring Security</h1>

  <h2>Spring Security</h2>

  <p>Spring security is about structuring some of the security aspects of our web application. These include authentication, authorization and other similar pratices. The first thing we should do is add the dependency to our pom.xml file.</p>

  <em>pom.xml</em>
  <pre class = "code">&lt;dependency>
      &lt;groupId>org.springframework.boot&lt;/groupId>
      &lt;artifactId>spring-boot-starter-security&lt;/artifactId>
  &lt;/dependency></pre>

  <p>One of the first things we want to be able to do is to be able to register users and give them the ability to log in to the application. In order to do this we want to give those users access to our database, but we must also becareful how much access each individual has so not as to harm our application.</p>

  <hr />

  <h2>User class</h2>

  <p>In the class below there are several fields each refering to data we would want to store about an individual using our web application. You will also notice that there are several new libraries being imported namely: GrantedAuthority, SimpleGrantedAuthority and UserDetails.

    <span class = "nl">Each of these libraries refer to limitations being imposed on the new users we create and their priviledges in being able to access the database. There are also several functions for determining whether accounts are locked, expired or the ability of their credentials.</span></p>
  
<em>User.java</em>
<pre class = "code">package com.juan.spring;

import java.util.Arrays;
import java.util.Collection;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import lombok.AccessLevel;
import lombok.Data;
import lombok.NoArgsConstructor;
import lombok.RequiredArgsConstructor;

@Entity
@Data
@NoArgsConstructor(access=AccessLevel.PRIVATE, force=true)
@RequiredArgsConstructor
public class User implements UserDetails {

    private static final long serialVersionUID = 1L;

    @Id
    @GeneratedValue(strategy=GenerationType.AUTO)
    private Long id;

    private final String username;
    private final String password;
    private final String fullname;
    private final String street;
    private final String city;
    private final String state;
    private final String zip;
    private final String phoneNumber;

    @Override
    public Collection&lt;? extends GrantedAuthority> getAuthorities() {
	return Arrays.asList(new SimpleGrantedAuthority("ROLE_USER"));
    }

    @Override
    public boolean isAccountNonExpired() {
	return true;
    }

    @Override
    public boolean isAccountNonLocked() {
	return true;
    }

    @Override
    public boolean isCredentialsNonExpired() {
	return true;
    }

    @Override
    public boolean isEnabled() {
	return true;
    }
  }</pre>

<p>Let's look at the repository which is necessary for actually inserting a new user into the database or validating a user.</p>

<em>UserRepository</em>
<pre class = "code">package com.juan.spring.data;

import org.springframework.data.repository.CrudRepository;
import com.juan.spring.User;

public interface UserRepository extends CrudRepository<User, Long> {
    User findByUsername(String username);
}</pre>

<p>The one function refers to the a select statement which searches the database based on the string username which is a column in the database under the 'user' table.</p>

<hr />

<h2>User Details Service</h2>

<p>The next class will be the first service class we will have created thus far.  The purpose of this class is to be able to check and see whether or not the user exists in the database. For this we will want to add some configuration in our security config file (more on this later).

<span class = "nl">For now let's take a look at the class.</span></p>

<em>UserRepositoryUserDetailsService</em>
<pre class = "code">package com.juan.spring.security;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import com.juan.spring.User;
import com.juan.spring.data.UserRepository;

@Service
public class UserRepositoryUserDetailsService implements UserDetailsService {
    private UserRepository userRepo;

    @Autowired
    public UserRepositoryUserDetailsService(UserRepository userRepo) {
	this.userRepo = userRepo;
    }

    @Override
    public UserDetails loadUserByUsername(String username)
	throws UsernameNotFoundException {
	User user = userRepo.findByUsername(username);
	if(user != null) {
	    return user;
	}
	throw new UsernameNotFoundException(
					    "User '" + username + "' not found");
    }
}</pre>

<p>By injecting the userRepo into the constructor and invoking the function findByUsername from the repo, we can use this service to see if a user exists or not. In order to actually encode our password in the database we need to see a snipet of code from our securityConfig.java file. </p>

<em>SecurityConfig.java</em>
<pre class = "code">@Bean
public PasswordEncoder encoder() {
    return new StandardPasswordEncoder("53cr3t");
}

@Override
protected void configure(AuthenticationManagerBuilder auth)
    throws Exception {

    auth
	.userDetailsService(userDetailsService)
	   .passwordEncoder(encoder());
}</pre>

<p>This method ensures that when we call future classes which utilize the service bean like in our UserRepositoryUserDetailsService class, that it knows where to look. Meaning had we not configured this service first, the future registration and registrationController classes would be at a loss for knowing what form type of encoder to use and whether or not a certain user handle was active or had the correct priviledges for accessing certain pages.</p>
  
    <hr />
<br />
<a href="Java_Web27.html">Previous Page</a>
<span class = "next"><a href = "Java_Web29.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>

