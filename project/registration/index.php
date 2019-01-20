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
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<img src="kulogo.png" height="50" width="50"> 
    <div id="headersection">
     
        <ul>
                
               <!--<p id="topic">KU EXPRESS</p>-->
            <li><a href=""> Home</li></a>
            <li><a href=""> Notices</li></a>
            <li> <a href="studyzone.php">Study Zone</li></a>
            <li><a href=""> Faculty</li></a>
            <li><a href=""> Student</li></a>
            <li><a href="">Gallery</li></a>
            <li> <a href="">About US</li></a>
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
            <li><a href="">Faculty</li></a>
            <li><a href="">Find Student</li></a>
            <li> <a href="">Syllabus for End Semester</li></a>
            <li> <a href="">Study Material</li></a>
            <li> <a href="">Old Notices</li></a>
            <li> <a href="">KU calendar</li></a>
            <li> <a href="">Contact KU</li></a>
            <li> <a href="">Teachers INFO</li></a>
        </ul>
    </div>
    <div id="kunotices">
        <ul>
        <h1> News And Notices</h1>
        <li><a href=""> Notice - PhD dissertation of Mr. Khadka is in Central Library ...... [2018-12-25]</li></a>
        <li><a href="">Notice for Document Verification and admission ME/MTECH Program - 2018 (Dept. of Computer Scien ...... [2018-12-23]</li></a>
        <li><a href="">Invitation to KULS-42 on Inflatable Rubber Dam at Kathmandu University ...... [2018-12-22]</li></a>
        <li><a href="">School of Engineering signed Letter of Agreement with NEAEC ......  [2018-12-19]</li></a>
        <li><a href="">Aviyantaa 2018 and 7th Anniversary of Turbine Testing Lab was held successfully ......  [2018-12-17]</li></a>
        <li><a href="">DLR Lab team published a research paper in a journal ......  [2018-12-15]</a></li>
        <li><a href="">Notice for 24th Convocation ( Second Phase) ...... [2018-12-13]</li></a>
        <li id="seemore"> <a href="">See more </a></li>
  
    </ul>
    </div>
    <div id="kuarticles">
        <ul>
        <h1>Students Thought This Week</h1>
        
            <li><a href="">SQC: What is it Upto?</li></a>
            <li> <a href="">Changing Rules in KU</li></a>
            <li> <a href="">Is KU the best UNiversity in Nepal?</li></a>
            <li> <a href="">Projects in KU</li></a>
            <li> <a href="">Engineering in KU</li></a>
            <li> <a href="">Problem with KU mess</li></a>
            <li> <a href="">KU Hostels</li></a>
           
        </ul>
        You can enter your thoughts,experience and complain here.
        <form action="" method="">
               
            <textarea placeholder="You can Write Here....." rows="16" cols="70">Say here</textarea></br></br>
            <input type="button" value="Submit" >
        </form>
    </div>
    <div id="footer">
        <ul >
            <li  ><a href="">About Kathmandu University </a></li>
            <li><a href="">Gallery </a></li>
            <li><a href="">Help </a></li>
            <li><a href="">Contact Us </a></li>
        </ul>
        &copy; Kathmandu University, Dhulikhel, Nepal.
        <div id="media"> 
        <ul>
            <li><a href=""><i class="fa fa-github" aria-hidden="true"></i> </a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
            <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
        </ul>
    </div>

    </div>
    




		
</body>
</html>