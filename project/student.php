<!DOCTYPE html>
    <html>
    <head>
     <title>Table with database</title>
     <link rel="stylesheet" type="text/css" media="screen" href="studyzone.css" />

     <style>
      table {
       border-collapse: collapse;
       
       color: #588c7e;
       font-family: monospace;
       width: 80%;
       font-size: 25px;
       text-align: center;
       margin-left:auto; 
    margin-right:auto;
       
         } 
      th {
       background-color: #588c7e;
       color: white;
        }
      tr:nth-child(even) {background-color: #f2f2f2}
     </style>
    </head>
    <body><img src="kulogo.png" height="50" width="50"> 
    <div id="headersection">
     
     <ul>
             
            <!--<p id="topic">KU EXPRESS</p>-->
         <li><a href="index.php"> Home</li></a>
         <li><a href=""> Notices</li></a>
         <li> <a href="studyzone.php">Study Zone</li></a>
         <li><a href="faculty.html"> Faculty</li></a>
         <li><a href="student.php"> Student</li></a>
         <li><a href="gallery.html">Gallery</li></a>
         <li> <a href="">About US</li></a>
     </ul>
     
     
 </div>
     <table>
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
     <form name="search_form" method="POST" action="student.php">
<input type="text" name="search_box" placeholder="Value To Search"><br><br>
<input type="submit" name="search" value="Filter"><br><br>
</form>
     <?php



    $conn = mysqli_connect("localhost", "root", "", "studentrecords");
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT * from recordsstudent";

      

      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Year"]. "</td><td>" . $row["Semester"] . "</td><td>". $row["Group"]. "</td><td>". $row["Regd.No."]. "</td><td>". $row["Ex.Roll"]. "</td><td>". $row["Name of the student"]. "</td><td>". $row["Nationality"]. "</td><td>"
    . $row["Gender"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();

    
    ?>
    </table>
    </body>
    </html>

