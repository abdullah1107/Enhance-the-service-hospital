<?php


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

      <?php

            if(isset($_GET['register_save'])&&$_GET['register_save']=='yes'){

            ?>
             <p style=color:green> Data Save </p>
<?php
}
?>
      
      <div class="tab-content">
        <div id="signup">   
          

          
          <form name="register" action="userinfo.php" method="POST" enctype="multipart/form-data">

          <div class="select-wrap3">
                  <select name="test" value="" required autocomplete="off"><br>
                  <option value="Select_Test">Select Test</option>
                          <option value="x-ray">X-RAY </option>
                          <option value="blood">BLOOD</option>
                          <option value="ecg">ECG</option>
                          <option value="ultra-sonogram">Ultra-Sonogram</option>
                         
                          <option value="n/r">N/R</option>
                          
                    </select>

         <br/>

          </div>

           <div class="select-wrap1">
                  <select name="Department" value="" required autocomplete="off"><br>
                  <option value="Select_Department">Select Department</option>
                          <option value="Medicine">Medicine </option>
                          <option value="Surgery">Surgery</option>
                          <option value="GynaeandObs">Gynae and Obs</option>
                          <option value="Cardiology">Cardiology</option>
                          <option value="SkinandVenerialDisease">Skin and Venerial Disease</option>
                          <option value="Opthalmology">Opthalmology</option>
                          
                    </select>

           <br/>
          </div>


          <div style="float:right">
          <select name="AttendingPhysician" value="" required autocomplete="off"><br/>
          <option value="select_Attending Physician">Select Attending Physician</option>
          <option value="Dr.Syed Zakir Hossain">Dr.Syed Zakir Hossain</option>
          <option value="Dr.Salauddin Mamun">Dr.Salauddin Mamun</option>
          <option value="Dr.Gias Uddin">Dr.Gias Uddin</option>
          <option value="Dr.Jasim Uddin">Dr.Jasim Uddin</option>
          <option value="Dr.Akm Fazlur Rahaman Manik">Dr.Akm Fazlur Rahaman Manik</option>
          <option value="Dr.Md.Mahbubul Alam">Dr.Md.Mahbubul Alam</option>
          <option value="Dr.Salma Sultana">Dr.Salma Sultana</option>
          <option value="Dr.Farhana Tarannum Khan">Dr.Farhana Tarannum Khan</option>
          <option value="Dr.Karimul Huda Sirajee">Dr.Karimul Huda Sirajeen</option>
          <option value="Dr.Kabir Ahmed">Dr.Kabir Ahmed</option>
          <option value="Dr.Abdul Mannan">Dr.Abdul Mannan</option>
          <option value="Dr.Kazi Moniruzzaman">Dr.Kazi Moniruzzaman</option>

</select>
</div>
      
      
      <div style="float:right">
          <select name="rAttendingPhysician" value="" required autocomplete="off"><br/>
          <option value="select Physician">Referred To (If Required)</option>
          <option value="Dr.Syed Zakir Hossain">Dr.Syed Zakir Hossain</option>
          <option value="Dr.Salauddin Mamun">Dr.Salauddin Mamun</option>
          <option value="Dr.Gias Uddin">Dr.Gias Uddin</option>
          <option value="Dr.Jasim Uddin">Dr.Jasim Uddin</option>
          <option value="Dr.Akm Fazlur Rahaman Manik">Dr.Akm Fazlur Rahaman Manik</option>
          <option value="Dr.Md.Mahbubul Alam">Dr.Md.Mahbubul Alam</option>
          <option value="Dr.Salma Sultana">Dr.Salma Sultana</option>
          <option value="Dr.Farhana Tarannum Khan">Dr.Farhana Tarannum Khan</option>
          <option value="Dr.Karimul Huda Sirajee">Dr.Karimul Huda Sirajeen</option>
          <option value="Dr.Kabir Ahmed">Dr.Kabir Ahmed</option>
          <option value="Dr.Abdul Mannan">Dr.Abdul Mannan</option>
          <option value="Dr.Kazi Moniruzzaman">Dr.Kazi Moniruzzaman</option>


          </select>
           <br/>



 
          </div>
          <br/>
               <br/>
                    <br/>




             
            <div class="field-wrap">
             
             <input type="file" name="file" id="file" /> <br/>
              
          </div>

         

  
          
          
            <div class="field-wrap">
             
             <input  type="text"  name="Name" placeholder="Enter User Name" value="" required autocomplete="off" ><br/>
              
          </div>
        
        
            <div class="field-wrap">
             
            <input type="number"  name="age"  placeholder="Enter age" value="" required autocomplete="off"><br />
            </div>
         

         <div class="field-wrap">
          <input type="text"  name="sex"  placeholder="Enter Sex" value="" required autocomplete="off"><br />
          </div>



          <div class="field-wrap">
            
           <?php

            if(isset($_GET['reg_err'])&&$_GET['reg_err']=='yes'){

            ?>
             <p style=color:red> Your Password already have </p>
<?php
}
?>


  <input type="password"  name="password"  placeholder="Enter Password" value="" required autocomplete="off"><br />
<?php

            if(isset($_GET['register_error'])&&$_GET['register_error']=='yes'){

            ?>
             <p style=color:red> Your Password did n't match </p>
<?php
}
?>
          </div>



           <div class="field-wrap">

          <input type="password"  name="Confirmpassword"  placeholder="Retype Password" value="" required autocomplete="off"><br />

          </div>
          
          
          <div class="field-wrap">

          <input type="text"  name="dat"  placeholder="Date Should be m(1-12)/day(1-31)/year(2016)" value="" required autocomplete="off"><br />

          </div>
          

          <div class="field-wrap">

          <input type="text"  name="pr_diagnostics"  placeholder="Enter Probable Diagnosis" value="" required autocomplete="off"><br />

          </div>




   <h1> Findings on Examination:</h1>

           <div class="field-wrap">
          <input type="text"  name="bloodpressure"  placeholder="Blood Pressure" value=""><br />
          </div>


           <div class="field-wrap">
          <input type="text"  name="pulse"  placeholder="Enter Pulse" value=""><br />
          </div>


           <div class="field-wrap">
          <input type="text"  name="weight"  placeholder="Enter Weight" value=""><br />
          </div>

          <div class="field-wrap">
          <input type="text"  name="energy"  placeholder="Enter Energy" value=""><br />
          </div>


           <div class="field-wrap">
          <input type="text"  name="blood_group"  placeholder="Enter Blood Group" value=""><br />
          </div>




            <div class="field-wrap">
             
         <h3 style="Color:white">  Chief Complain: </h3><textarea  style="size=:3;Color:white"  rows="2" cols="35" type="text"  name="complain">

            </textarea>
              
          </div>
        
        
            <div class="field-wrap">
        <h3 style="Color:white"> Management: </h3><textarea  style="size=:3" rows="2" cols="35" type="text"  name="management">

            </textarea>
            </div>
         

         <div class="field-wrap">
          <h3  style="Color:white"> History: </h3><textarea   style="size=:3" rows="2" cols="35" type="text"  name="history">


          </textarea>
          </div>

          
         <div style="padding-left:47px;"> <button type="submit" class="button button-block"/>Save</button></div>
          
          </form>

        </div>
        
  


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
