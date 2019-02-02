<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!doctype <!DOCTYPE html>
<html>
<head>
    <title>KU EXPRESS HOME</title>
    <link rel="stylesheet" type="text/css" media="screen" href="homepage.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
</head>
<body ><img src="kulogo.png" height="50" width="50"> 
    <div id="headersection">
     
        <ul>
        <?php  if (isset($_SESSION['username'])) : ?>
    	<li id="welcomeword">Welcome <strong><?php echo $_SESSION['username']; ?></strong></li>
    <?php endif ?>
                
               <!--<p id="topic">KU EXPRESS</p>-->
            <li><a href=""> Home</li></a>
            <li><a href="project/project.html"> Notices</li></a>
            <li> <a href="studyzone.php">Study Zone</li></a>
            <li><a href="faculty.html"> Faculty</li></a>
            <li><a href="filter.php"> Student</li></a>
            <li><a href="gallery.html">Gallery</li></a>
            <li> <a href="aboutus.html">About US</li></a>
            <li id="logout_word"> <a href="index.php?logout='1'" style="color: red;">logout</a> </li>

        </ul>
        
    </div>
    <div class="kuhomepage"> 
        
            <h2 class="content1"> Information Connection Recreation</h2>
            <h1 class="content2"> Welcome to</h1>
            <div class="btn">
            <button type="button" class="content3"> KU EXPRESS </button>
            </div>
            <h3 class="content4"> Get news, study materials & connect with KU students</h3>
    
        
    </div>

    
    
    <div class="box">
            <span></span>
            <span></span>
            <span></span>
    </div>
    <div id="frequentlyvisited">
        <ul>
            <h1> Frequently visited</h1>
            <li><a href="faculty.html">Faculty</li></a>
            <li><a href="filter.php">Find Student</li></a>
            <li> <a href="studyzone.php">Syllabus for End Semester</li></a>
            <li> <a href="studyzone.php">Study Material</li></a>
            <li> <a href="project/project.html">Old Notices</li></a>
            <li> <a href="">KU calendar</li></a>
            <li> <a href="contact.html">Contact KU</li></a>
            <li> <a href="faculty.html">Teachers INFO</li></a>
        </ul>
    </div>
    <div id="kunotices">
        <ul>
        <h1> News And Notices</h1>
        <li><a href="project/project.html"> CALL FOR IT-MEET VOLUNTEER held at kathmandu university. [01-01-2019 & 02-01-2019]</li></a>
        <li><a href="project/project.html">One day PYTHON WORKSHOP FOR BEGINEERS. [02-02-2019]</li></a>
        <li><a href="project/project.html">Vacancy Announcement for Researchers(TTL). [15-11-2018]</li></a>
        <li><a href="project/project.html">Accomodation HOSTEL  for  girls and boys INTERVIEW.</li></a>
        <li><a href="project/project.html">Notice for Bus Route for bus students. [03-01-2019 to 11-01-2019].</li></a>
        <li><a href="project/project.html">ADMISSION OPEN FOR under-graduated ENGINEERING programmes. [08-08-2019 to 13-08-2019]</a></li>
        <li><a href="project/project.html">One day JAVA WORKSHOP for absolute begineers. [04-03-2019]</li></a>
        <li id="seemore"> <a href="project/project.html">See more </a></li>
  
    </ul>
    </div>
    <div id="kuarticles">
        <ul>
        <h1>Students Thought This Week</h1>
        
            <li><a href="stdth.html">SWC: What is it Upto?</li></a>
            <li> <a href="best.html">Changing Rules in KU</li></a>
            <li> <a href="best.html">Is KU the best UNiversity in Nepal?</li></a>
            <li> <a href="best.html">Projects in KU</li></a>
            <li> <a href="engku.html">Engineering in KU</li></a>
            <li> <a href="kuhostel.html">Problem with KU mess</li></a>
            <li> <a href="kuhostel.html">KU Hostels</li></a>
           
        </ul>
        You can enter your thoughts,experience and complain here.
        <form action="" method="">
               
            <textarea placeholder="You can Write Here....." rows="16" cols="70"></textarea></br></br>
            <a href="index.php"><input type="button" value="Submit" ></a>
        </form>
    </div>
    <div id="footer">
        <ul >
            <li  ><a href="aboutus.html">About Kathmandu University </a></li>
            <li><a href="gallery.html">Gallery </a></li>
            <li><a href="project/project1.html">Courses Outline </a></li>
            <li><a href="contact.html">Contact Us </a></li>
        </ul>
        &copy; Kathmandu University, Dhulikhel, Nepal.
        <div id="media"> 
        <ul>
            <li><a href="https://github.com/meashishpokhrel/kuexpress"><i class="fa fa-github" aria-hidden="true"></i> </a></li>
            <li><a href="https://twitter.com/0boltar1"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
            <li><a href="https://www.youtube.com/channel/UCebCurEBgQ8BNdrhx-XNM9A"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            <li><a href="https://www.facebook.com/kathmanduniversity/"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
        </ul>
    </div>

    </div>
    
</body>
</html>