<?php


include 'database.php';

include 'header.php';



?>

  <body>


       <div style="background: rgba(19, 35, 47, 0.9);
  padding: 180px;
  max-width:1400px;

  margin: 40px auto;
  border-radius: 4px;
 ">


    <div style="
 
 /*Step 2: Basic Button Styles*/

 
 display: block;
 height: 50px;
 width: 200px;
 background: #34696f;
 border: 2px solid rgba(33, 68, 72, 0.59);

 
 /*Step 3: Text Styles*/
 color: rgba(0, 0, 0, 0.55);
 text-align: center;
 padding-top:10px;


 
 /*Step 4: Fancy CSS3 Styles*/
 background: -webkit-linear-gradient(top, #34696f, #2f5f63);
 background: -moz-linear-gradient(top, #34696f, #2f5f63);
 background: -o-linear-gradient(top, #34696f, #2f5f63);
 background: -ms-linear-gradient(top, #34696f, #2f5f63);
 background: linear-gradient(top, #34696f, #2f5f63);
 
 -webkit-border-radius: 50px;
 -khtml-border-radius: 50px;
 -moz-border-radius: 50px;
 border-radius: 50px;
 
 -webkit-box-shadow: 0 8px 0 #1b383b;
 -moz-box-shadow: 0 8px 0 #1b383b;
 box-shadow: 0 8px 0 #1b383b;
 
 text-shadow: 0 2px 2px rgba(255, 255, 255, 0.2);



"><a href="date_search1.php"><i><b><<-Back</b></i></a></div>

        

       <div style="color:white; padding-top:10px">
          
        

    <?php









    $from_date =$_GET["dat1"];

 

    $to_date=$_GET["dat2"];



      $sql= "SELECT test,Count(test) FROM user_info WHERE dat BETWEEN '" . $from_date . "' AND  '" . $to_date . "'group by test";

 //$sql="select  test,Count(test),Department,Count(Department) AttendingPhysician, Count(AttendingPhysician), from user_info  WHERE dat between '".$date1."' and '".$date2."'";

   //$sql="SELECT Count(test),COUNT(Department),COUNT(AttendingPhysician) FROM user_info WHERE  dat>= " . $date1 . " AND  dat<= " . $date2 . " ";

   $result=mysql_query($sql);

    


   

echo "<table border='1'>";

echo "<tr>";

   echo "<th>Test</th>";
    echo "<th>Quantity of Test</th>";
   //  echo "<th> Department</th>";
/// echo "<th>Quantity of Department</th>";
  //  echo"<th>AttendingPhysician_Name</th>";
    //echo "<th>Quantity of Attending Physician</th>";
    
    echo "</tr>";
    
    

 
       
 while($row = mysql_fetch_array($result))
 
{

  
  
        
   echo "<tr>";  
     echo "<td> " .$row['test']. "</td>"; 
    echo "<td> " .$row[Count('test')]. "</td>"; 
   // echo "<td> " . $row['Department'] . "</td>"; 
   // echo "<td> " . $row[COUNT('Department')] . "</td>"; 
   // echo "<td>" . $row['AttendingPhysician'] . "</td>   ";  
   // echo "<td> " . $row[COUNT('AttendingPhysician')] . "</td>";
   echo "<tr>";
  


        
      
        
           

}
         
        //these are the fields that you have stored in your database table employee


    echo "</table>";
  







?>   


 

        </div>
        
  


     
     

    
  </body>
</html>