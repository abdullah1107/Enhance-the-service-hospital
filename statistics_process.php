<?php


include 'database.php';

include 'header.php';



?>

  <body>


   <div class="form">
      
      <ul class="tab-group">
        <li ><a href="mainpage.php">Sign Up</a></li>
        <li ><a href="login.php">Login</a></li>
        <li><a href="doctor_information.php">DoctorInformation</a></li>
        <li><a href="statistics_process.php">Statistics</a></li>
      </ul>



</div>
  <div style="background: rgba(19, 35, 47, 0.9);
  padding: 220px;
  max-width:1000px;
  max-height:100%;

  margin: 40px auto;
  border-radius: 4px;

 ">


 <a href="show_statisticsdepartment.php" class="button">Department </a>
 <br/>

 <a href="date_search2.php" class="button"> Department According to Date </a>
 <br/>


  <a href="show_attendingphysicianstatistics.php" class="button">Physician</a>

 <br/>
 <a href="date_search3.php" class="button">Physician According to Date</a>
 <br/>

   <a href="show_teststatistics.php" class="button">Test</a>
 <br/>

 <a href="date_search1.php" class="button"> Test According to Date </a>
 <br/>




 
     

 
    
</div>
 </body>
</html>