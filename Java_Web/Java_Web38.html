<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Spring Security part 4</title>
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

<p>In this section I want to go over understanding exactly everything that is happening with spring authorization to have a better grasp of knowing whats going on behind the scenes. For this it will be important to go over several of the tables which are created when creating new users and assigning them to roles and permissions.

  <span class = "nl">This will be important in the future as we look to expand our security to using oAuth and building an authorization server. Furthermore understanding these concepts of storing permissions and roles in a database will make the encoding and storing of JWT (json web tokens) less complex. To start let's look at a the permission and role tables.</span></p>

<em>code:</em>
<pre class = "code"><span class = "comments">/* Sql code */</span>
CREATE TABLE `privilege` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
  
CREATE TABLE `roles_privileges` (
  `role_id` bigint(20) NOT NULL,
  `privilege_id` bigint(20) NOT NULL,
  KEY `fk_privilege` (`privilege_id`),
  KEY `fk_role1` (`role_id`),
  CONSTRAINT `fk_privilege` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`),
  CONSTRAINT `fk_role1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
);

CREATE TABLE `user_account` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `enabled` bit(1) NOT NULL,
  `password` varchar(90) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `user_roles` (
  `user_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  KEY `fk_role2` (`role_id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  CONSTRAINT `fk_role2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
);</pre>

<p>Let's also look at an Entity Relational Diagram for this database.</p>

<img width="100%" src="../Images/spring_erd.png"/>
  
<p>If we look at the scheme above notice that there are two tables which define authorization. These tables are privileges and roles. Using this system we can assign an arbitary amount of privileges to a particular role, this information will be stored in the privilege_role table. If we look at the user table is contains information pertaining only to the name, pass, email and whether or not the account is enabled.

<span class = "nl">The last three fields in the user table are necessary for managing a system which can contain thousands of users and is important for setting restrictions based on the behavior of the users in the system. Some of these will pertain to whether an account is expired (user hasn't logged in x amount of days), credentials expired (refers to a password or token being expired), and account non locked (for managing users which have their account locked).</span>

<span class = "nl">The final table refers to the ability to assign a user a certain amount of roles based on the privileges we want them to have or not have. For example we can create a role called admin, which has all the privileges and another role called support which limited privileges. This table just makes it easier to manage privileges.</span></p>

<hr />

<h2>Hibernate Classes</h2>

<p>Let's look at how we would go about creating this schema using our ORM hibernate. Let's start with the user_account table</p>

<em>Code:</em>
<pre class = "code">@Entity
@Table(name = "user_account")
public class User {
 
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
 
    private String firstName;
    private String lastName;
    private String email;
    private String password;
    private boolean enabled;
    private boolean tokenExpired;
 
    @ManyToMany 
    @JoinTable( 
        name = "users_roles", 
        joinColumns = @JoinColumn(
          name = "user_id", referencedColumnName = "id"), 
        inverseJoinColumns = @JoinColumn(
          name = "role_id", referencedColumnName = "id")) 
    private Collection&lt;Role> roles;
}</pre>

<p>Since our user can have several roles we need to create the join table user_roles which uses the user_id and the inverse table is the role_id coming from the role table.</p>

<hr />

<h2>Role</h2>

<p>Role entity.</p>

<em>Code:</em>
<pre class = "code">@Entity
public class Role {
 
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
 
    private String name;
    @ManyToMany(mappedBy = "roles")
    private Collection&lt;User> users;
 
    @ManyToMany
    @JoinTable(
        name = "roles_privileges", 
        joinColumns = @JoinColumn(
          name = "role_id", referencedColumnName = "id"), 
        inverseJoinColumns = @JoinColumn(
          name = "privilege_id", referencedColumnName = "id"))
    private Collection&lt;Privilege> privileges;   
}</pre>

<p>Our role table also uses a join table which as we noticed was previously linked to the user_roles table, the mappedBy argument using the collection we created in our users class. By creating the mapping on this side we are making it bidirectional. Also let's note that the mapped table uses a collection or a bag so there can be multiple instances of a user in the user_roles table. Finally, we create another join table for our roles_privileges.</p>

<hr />

<h2>Privilege</h2>

<p>The final class, which makes the roles_privileges bidirectional and contains the columns for the id and name of our privilege.</p>

<em>Code:</em>
<pre class = "code">@Entity
public class Privilege {
 
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
 
    private String name;
 
    @ManyToMany(mappedBy = "privileges")
    private Collection&lt;Role> roles;
}</pre>

<hr />
<br />
<a href="Java_Web37.html">Previous Page</a>
<span class = "next"><a href = "Java_Web39.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>
