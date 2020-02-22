<?php


include 'database.php';

include 'header.php';



?>

  <body>

  <div style="background: rgba(19, 35, 47, 0.9);
  padding: 180px;
  max-width:800px;

  margin: 40px auto;
  border-radius: 4px;
 ">
      
     

 
    
        <a href="mainpage.php">Back</a>
        
       

       <div style="color:white; width:70%">
          
        

<?php

$s="SELECT  Department, Count(Department) FROM user_info WHERE 1 group by Department";

$result=mysql_query($s);



echo "<table border='1'>";

echo "<tr>";
    echo"<th><----Department--------> </th>";
    echo "<th>Quantity  for all Department</th>";

echo "</tr>";

while($row = mysql_fetch_array($result))
 
{
        
echo "<tr>";  
echo "<td>" . $row['Department'] . "</td>   ";  
echo "<td>    " .      $row[COUNT('Department')] . "</td>";  
echo "</tr>"; 
echo "<br/>";
}

echo "</table>";


?>
</div>
 </body>
</html>