<?php

session_start();
include 'database.php';

include 'header.php';



?>

  <body>

    <div style="background: rgba(19, 35, 47, 0.9);
  padding: 180px;
  max-width:2500px;

  margin: 40px auto;
  border-radius: 4px;
 ">
      
     

 
    
        <a href="mainpage.php">Back||</a>
        <a href="login.php">Login|</a>
       
     
       <div style="color:white">
          
        

    <?php









   $user_name=$_POST['Name'];

   $pass=$_POST['password'];

$sql="SELECT user_id FROM user_info WHERE Name='$user_name' AND password='$pass'";

$ans=mysql_query($sql);

    

   echo "<h1>Welcome !   $user_name</h1>";

while ($get=mysql_fetch_array($ans)) {

  if($get['user_id']){

   $_SESSION['user_id']=$get['user_id'];

   $temp=$_SESSION['user_id'];
    
    //echo'loged in';
    //header('Location:single_user.php');
   $r="SELECT * FROM user_info WHERE password='$pass' AND user_id='$temp'";

   $result= mysql_query($r);

   

echo "<table border='4'>";



   
    

 
 while($row = mysql_fetch_array($result))
 {

          echo "<tr>";
    echo"<th>User ID </th>";
    echo "<th>Test</th>";
    echo "<th>Department</th>";
    echo "<th>Attending Physician</th>";
    echo "<th>Referred Physician</th>";
    echo "<th>File Name</th>";
      echo "</tr>";
          echo "<tr>";
          echo "<td>" . $row['user_id'] . "</td> "; 
          echo "<td>" . $row['test'] . "</td>";
          echo "<td>" . $row['Department'] . "</td>"; 
          echo "<td>" . $row['AttendingPhysician'] . "</td> "; 
          echo "<td>" . $row['rAttendingPhysician'] . "</td> "; 
          echo "<td>" . $row['image_path'] . "</td> "; 
          echo "</tr>";


     echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>Sex</th>";
    echo "<th>Password</th>";
    echo "<th>Date</th>";
    echo "<th>Probable Diagnosis</th>";
    echo "<th>Blood Pressure</th>";
    echo"<th>Pulse</th>";
    echo"<th>Weight</th>";
    echo"<th>Energy</th>";
    echo"<th>Blood Group</th>";
    echo "</tr>";
    
         echo "<div style =padding-left:5px>";
          echo "<tr>";
          echo "<td>" . $row['Name'] . "</td>"; 
          echo "<td>" . $row['age'] . "</td>" ;
          echo "<td>" . $row['sex'] . "</td>" ;
          echo "<td>" . $row['password'] . "</td>" ;
          echo "<td>" . $row['dat'] . "</td>" ;
          echo "<td>" . $row['pr_diagnostics'] . "</td>" ;
          echo "<td>" . $row['bloodpressure'] . "</td>" ;
          echo "<td>" . $row['pulse'] . "</td>" ;
          echo "<td>" . $row['weight'] . "</td>" ;
          echo "<td>" . $row['energy'] . "</td>" ;
          echo "<td>" . $row['blood_group'] . "</td>" ;
         echo "</tr>";

         echo"</div>";
         echo "</table>";
        
           

               echo "<h2>Complain:</h2>";
              
               echo "<td><h3> " . $row['complain'] . "</h3></td>" ;
              
           
                echo "<br/>";

                  echo "<h2>Management:</h2>";
                  echo "<td><h3>" . $row['management'] . "</h3></td>" ;
                   echo "<br/>";



                   echo "<h2>History:</h2>";
                    echo "<td><h3>" . $row['history'] . "</h3></td>" ;




         
        //these are the fields that you have stored in your database table employee
  }

 die();
  
}


} 

header('Location:login.php?login_error=yes');

?>

        

        </div>
        
  


     
     

    
  </body>
</html>