<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `recordsstudent` WHERE CONCAT(`Year`, `Semester`, `Group`, `Regd.No.`,`Ex.Roll`,`Name of the student`,`Nationality`,`Gender`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `recordsstudent`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "studentrecords");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <link rel="stylesheet" type="text/css" media="screen" href="studyzone.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="student.css" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <style>
            

        </style>
    </head>
    <body>
    <img src="kulogo.png" height="50" width="50"> 
    <div id="headersection">
     
     <ul>
             
            <!--<p id="topic">KU EXPRESS</p>-->
         <li><a href="index.php"> Home</li></a>
         <li><a href="project.html"> Notices</li></a>
         <li> <a href="studyzone.php">Study Zone</li></a>
         <li><a href="faculty.html"> Faculty</li></a>
         <li><a href=""> Student</li></a>
         <li><a href="gallery.html">Gallery</li></a>
         <li> <a href="aboutus.html">About US</li></a>
     </ul>
     
     
 </div>
        <div id="content_search">Looking for Someone. Search here!!! </div>
        
        <form action="filter.php" method="post">
        <div class="buscar-caja"> <input type="text" name="valueToSearch" class="buscar-txt" placeholder="Search for Student..."/> <a class="buscar-btn"> <i class="fas fa-search"></i> </a> </div>

           <div id="enterbutton"> <input type="submit" name="search" value="Go"><br><br></div>
            
           <center> <table id="tabledesign">
            <tr>
      <th>Year</th> 
      <th>Semester</th> 
      <th>Group</th>
      <th>Regd.No.</th>
      <th>Ex.Roll</th>
      <th>Name of the student</th>
      <th>Nationality</th>
      <th>Gender</th>
     </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Year'];?></td>
                    <td><?php echo $row['Semester'];?></td>
                    <td><?php echo $row['Group'];?></td>
                    <td><?php echo $row['Regd.No.'];?></td>
                    <td><?php echo $row['Ex.Roll'];?></td>
                    <td><?php echo $row['Name of the student'];?></td>
                    <td><?php echo $row['Nationality'];?></td>
                    <td><?php echo $row['Gender'];?></td>

                    
                </tr>
                <?php endwhile;?>
            </table></center>
        </form>
        
    </body>
</html>