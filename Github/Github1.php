<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="keywords" content="GDB" />
        <meta name="author" content="Juan Arias" />
        <title>Adding and Removing files - Github</title>
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
        
        <h1>Working with Git Files and Folders</h1>
        
            <p>The best way to really get familiar with github is to try testing some of the features. Let's try doing this by creating a directory initializing it and then trying adding and removing file from the staging area.</p>
        
        <h2>Adding and Removing files</h2>
        
        <p>Once you create a repository, you will want to add and remove files and even folders.

	  <span class = "nl">One of the first things we want to be able to understand is how to remove or add files from our staging area. One of first things to understand about using github is that files being tracked are different from files being added or remove from our staging area.</span>

	  <span class = "nl">An example of this would be if I decided to remove a file that I added to my staging area which was still on my local harddisk. I can simulate this by using 'git add test.txt' and then typing 'git rm test.txt'. What do you think will happen in this situation.</span>

	  <span class ="nl">An error will be thrown in this situation since the file still remains on the local harddisk, it will complain that only by using the cached argument '--cached' can we remove the file.</span>

	<span class = "nl">However, what do you think will happen if we first delete the file from our harddisk and then run the 'git rm test.txt' command. Well, there shouldn't be a problem since the staging area and the tracked files are in alignment. If we had actually decided to commit the staging area then there would be a conflict next time we tried to merge our repo with our localhard disk.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments"># removing files from the staging area</span>
    git add &lt;filename>
    git status
    git rm --cached &ltfilename></pre>

    <p>Another way to remove a file from the staging area is to use 'git reset HEAD test.txt'. This will take a file out of the staging area and place it back in the tracking area (or local harddisk).

    <h2>Commit files</h2>

	<p>Next we are going to talk about commit files to our repo. The way we can do this is by using the git commit command. Generally, it requires that you type in a message so that you know why changes were made to the repository.

    <span class = "nl">In order to commit a file to the repository we need to first make sure that its in the staging area first, 'git add test.txt'. One thing to note is that when we make a commit, then all the files that are either modified, added or deleting in the staging area will impact the files on our reporitory. Let's commit 'git commit -m "added test file".</span></p>

    <em>Code:</em>
    <pre class = "code">
    <span class = "comments"># git commit</span>
    git add test.txt
    git commit -m "added a test file"</pre>

    <p>Once we have commited the files we can see a log of all the commits we made. This is done by using the log command 'git log'. Each commit has a reference number in order to keep track of what was commited, who commited it and what changes were made. Typing in git log --stat will provide more information on the insertions or deletions from each file.

    <span class = "nl">However, what if you wanted to remove a commit you just made. You would need to reset the commit by typing in 'git reset &lt;commit ref>'</span>.</p>

    <em>Code:</em>
    <pre class = "code">
    <span class = "comments"># git commit</span>
    echo "ok" > test3.txt
    <span class = "comments"># -a skips the staging process</span>
    git commit -a -m "added a test file"
    git log
    git reset --soft HEAD~1</pre>

    <p>This would take commit back to the staging area. From here we can remove staged files by using the 'git reset HEAD &lt;filename>' and then re-commit our other files.</p>

  <hr />

  <h2>Unmodifying files</h2>

	<p>In this last section I will quickly go over how to umodify changes to a file pulled from a repository. Say for example you just clone a repo make changes to a file and then realize that you want to undo those changes. This can be done with 'git checkout -- &lt;filename>'.</p>

    <em>Code:</em>
    <pre class = "code">    <span class = "comments"># staging area to localdisk</span>
    git checkout -- test3.txt</pre>      
	
    <hr />
    <br />
        
    <a href ="Github.php">Previous Page</a>
    <span class = "next"><a href="Github2.php">Next Page</a>	
        
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
