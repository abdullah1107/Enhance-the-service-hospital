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
      
     

 
    
    
       

       <div style="color:white; width:70%">
          
        

<?php

$s="SELECT  test, Count(test)FROM user_info WHERE 1 group by test";

$res=mysql_query($s);



echo "<table border='2'>";

echo "<tr>";
    echo"<th><----Test Name--------> </th>";
    echo "<th>Quantity  of Test</th>";
 

echo "</tr>";

while($r = mysql_fetch_array($res))
 
{
        
echo "<tr>";  
echo "<td>" . $r['test'] . "</td>   ";  
echo "<td> " . $r[COUNT('test')] . "</td>";  

echo "</tr>"; 
echo "<br/>";
}

echo "</table>";


?>

<br/>
<br/>
<br/>

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



"><a href="statistics_process.php"><i><b><<-Back</b></i></a>



</div>



</div>
</div>
 </body>
</html>