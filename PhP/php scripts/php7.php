 <p>You are working on a software project. Let's see how you do...</p>

<?php

$DubsDie = rand(1,10);
$DucesDie = rand(1,10);
print "</p><img src=\"/Images/Cover$DubsDie.jpg\" height = \"50px\" width = \"50px\" />
<img src =\"/Images/Cover$DucesDie.jpg\" height = \"50px\" width = \"50px\"/><br />";

if($DucesDie == 10)
    $DucesDie = 0;
//if duces die == 10, make it zero

if($DubsDie == 10) {
    if($DucesDie != 0) {
    print "You rolled a $DucesDie</p>";
    } else {
        print "You rolled a 100</p>";
    }
} else {
    print "Your rolled $DubsDie$DucesDie</p>";
}

print "<p>";
if($DubsDie != 10) {
    if($DubsDie <= 4) {
        print "Your project is a failer. <br /> It is $DubsDie years late and " . $DucesDie . "00% over budget before it finally gets canceled. <br /> All your co-workers are disgrunted and send each other's code to worsethanfailure.com";
    } else if($DubsDie <= 7) {
        print "Your project is only a partial success.<br /> It is " . $DubsDie * 3 . " months late and " . $DucesDie . "0% overbudget.<br /> It is incredibly successfully implemented, but it puts food on the table.";
    } else if($DubsDie < 9) {
        print "Your project is a success.<br /> It is only $DubsDie weeks late and has " . $DucesDie . "% of features originally planned, but it survices through. " . ($DubsDie + $DucesDie) . " more releases before it is obsolete.";
    } else {
        print "Your project is a huge success!";
        if($DucesDie == 9) {
            print " It is purchased by Google, and you are snatched up  along with it.<br /> You lucky entrepreneur you . . . ";
        } else {
            print " It remains an industry standard for the next $DucesDie years, making you filthy rich.";
        }
    }
} else {
    if($DucesDie == 0) {
        print "When you were born, your mother christened you \"William Gates\", and the rest is history.";
    } else {
print "Someone burns your office down and you lose your job.<br /> Better luck next time.";
    }
}
print "<p>";

?>

<a href="php7.php">Try Again!</a><br /><br />

<a href = "../PhP7.html">Back to Main Page</a>