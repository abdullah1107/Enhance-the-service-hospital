<?php  
    
 include 'database.php';

$test=$_POST['test'];
//echo $user_id;
$department=$_POST['Department'];
////////////////////////////////////////



////////////////////////////////////////
$forum =$_POST['AttendingPhysician'];

$rforum =$_POST['rAttendingPhysician'];

//////////////////////////////////////////////////

if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/PNG") || ($_FILES["file"]["type"] == "text/plain")|| ($_FILES["file"]["type"] == "application/msword") && ($_FILES["file"]["size"] < 500000))
  {
  if ($_FILES["file"]["error"] > 0) //if any error got or not checking
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />"; //if error got then print message
    }
  else //if no error
    {
  //here file uploaded
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";  //upload file name
    echo "Type: " . $_FILES["file"]["type"] . "<br />"; // upload file type
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";// upload file size
  
    
  if (file_exists("upload/" . $_FILES["file"]["name"])) //check upload directory for duplicat file name 
      {
      echo $_FILES["file"]["name"] . " already exists. "; //if duplicate file then print this message
    //header("location: upload.php");
      }
    else //move file 
      { 

        $path="upload/" . $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], $path); //file move into upload directory
   
      }
    }
  
//header('Location:index.php');
  }
else // file format or size not match
  {
  echo "Invalid file";
  }















/////////////////////////////////////////////////



$Name =$_POST['Name'];


//echo $Name;

$age=$_POST['age'];


$sex=$_POST['sex'];



$password=$_POST['password'];

//$compassword=$_POST['Confirmpassword'];


$temp=0;

$sql = "SELECT COUNT(*) FROM user_info WHERE password='$password'";

$result = mysql_query($sql) ;

 while($row = mysql_fetch_array($result))
 {

         if ($row[0] > 0) 
         {
         	 $temp=1;
         	 header('Location:mainpage.php?reg_err=yes');
                          
         }
    
                                

           
 }

 $re_pa=$_POST['Confirmpassword'];


  
    if($_POST['password'] != $_POST['Confirmpassword']){
        header('Location:mainpage.php?register_error=yes');
    }


//echo $password;


$date=$_POST['dat'];

$pr_d=$_POST['pr_diagnostics'];


  $blood_pressure=$_POST['bloodpressure'];


  $pulse=$_POST['pulse'];


  $weight=$_POST['weight'];


  $energy=$_POST['energy'];

  $blood_gp=$_POST['blood_group'];

 $complain=$_POST['complain'];

 $management=$_POST['management'];

 $his=$_POST['history'];

//echo $department;
///////////////////////////////////////





 

















//echo $forum;
 
//$hash_pass=md5($password);

if($password == $re_pa AND $temp==0 ){

	$bal= "INSERT INTO user_info(test,Department,AttendingPhysician,rAttendingPhysician,image_path,Name,age,sex,password,Confirmpassword,dat,pr_diagnostics,bloodpressure,pulse,weight,energy,blood_group,complain,management,history) VALUES('$test','$department','$forum','$rforum','$path','$Name','$age','$sex','$password','$re_pa','$date','$pr_d','$blood_pressure','$pulse','$weight','$energy','$blood_gp','$complain','$management','$his') ";

	$result=mysql_query($bal);

   if($result) // if success
    {
      echo "Stored in: " .$path;  // stored in upload file
      //header("location: index.php"); // resend to upload.php file
    }

	//header('Location:multiuser.php');
   header('Location:mainpage.php?register_save=yes');
       
    }
  $temp=0;
  mysql_close();



?>