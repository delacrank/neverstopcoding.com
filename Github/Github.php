<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Use Github to add to existing programming projects. Contribute or store programming files online either privately or for others to view. Share and watch other projects unfold using github." />
        <meta name="keywords" content="GDB" />
        <meta name="author" content="Juan Arias" />
        <title>Setting up - Github</title>
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
<?php include('..//Includes//Left_Github.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
        
        <h1>Setting up - GitHub</h1>
        
            <p>In order to run github you first need a github account their website <a href="http://www.github.com" target ="_blank">Github</a> and register a username and password. You would also have to installed github and then you can proceed to using their tutorial. They actually have a tutorial on their site <a href="https://guides.github.com/activities/hello-world/" target ="_blank">Here</a>.
        
        <span class = "nl">Of course you can always follow along with my tutorial if you prefer. There is another site which contains much of the documentation and even a free PDF version of ProGit (published by Apress) <a target="_blank" href ="https://git-scm.com">Here</a>.</span></p>
        
    <hr />           
	
    <h2>Phases of Git</h2>

    <p>Github is a distributed version control system. This means that a version of the codebase will exist not only on their main repository which is github servers but also on your own files as well as the files of those involved in the project. This is good since if a file every becomes corrupted or a harddisk destroyed the backups are numerous.

    <span class = "nl">There are three phases to uploading content to your github repository. The first area is your local database, which is where the files are stored on your machine. In order to track your local files use the git init command. Git will notice when files are modified, added or removed based on this tracking system. You can move files in and out of the next area which is called the staging area. In order to do this you would need to type 'git add &lt;filename>'. </span>

    <span class = "nl">The final phase is the repository itself and files can only get on to the repository after they have been commited. Commiting a file means you have finalized any changes you wanted from the staging area. Lastly, if you want move files from your staging area to the github repo you need to push them 'git push'. They will be pushed on or pulled from using something called a stream, let's see how we can proceed to do this with our readme file.</span>	
        
  <span class = "nl">After we add the file next we type in 'git commit -m "first commit"', but in order to add this commit to our online repository we must remotely connect. This can be accomplished using 'git remote add origin https://github.com/username/repository.git'. Where username and repository are the name of the your own account and the name of the repository you want to push this file to.  </span>
        
        <span class = "nl">We can finally push this branch to our master, using the 'git push' command, or for completion 'git push'. Let's look at these commands below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Create the readme markdown file</span>
    echo "# First Repository" >> README.md
    <span class = "comments"># Initialize github</span>
    git init
    <span class = "comments"># Add the readme file</span>
    git add README.md
    <span class = "comments"># Commit it to the repository locally</span>
    git commit -m "first commit"
    <span class = "comments"># Connect to the online repository</span>
    git remote add origin https://github.com/username/reponame.git
    <span class = "comments"># Push the file on to that repository</span>
    git push</pre>
        
        <p>If you want to know where github is installed on your machine. Simply go to '/Users/Username/.git', where username is your account of course.
                
        <span class = "nl">From here on we can create new repositories, push new files on to our existing repository, clone our repository to our desktop or connect to another repository.  Let's take a look at our second option.</span></p>
        
    <hr />
        
    <!-- git clone -->
    <h3>Git Clone</h3>
        
        <p>One of the trickest parts of github is trying to understand why files with your origin won't sync or merge with the master. A lot of these problems are due to users initializing git in another directory and then adding files outside of that directory and trying to commit them. 
        
     <span class = "nl">Github doesn't know the location of every single file and directory on your machine, this is why when you use the 'git init' command it creates a .git folder for that specific directory. Once you move out of that directory it will have trouble tracking the necessary files. To see which files are added, you can always check using the 'git status' command.</span>
        
     <span class = "nl">To avoid complications when pulling or pushing files from the origin to the master or when merging folders use the 'git clone' command. Pass the name of the repository to clone that correct one so 'git clone "https://www.github.com/username/reponame.git".</span>
        
     <span class = "nl">Of course you will still need to add the remote connection for that repo, use 'git remote -v' to check the connection and 'git remote set-url "https://www.github.com/username/reponame.git"' to change the name if it hasn't already done so.</span></p>
    
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Create a clone of your online repo for your local machine</span>
    git clone "https://www.github.com/username/reponame.git" </pre>
              
    <hr />
    <br />
        
    <a href ="Github1.html">Next Page</a>
        
    <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
