 <?php

           include 'header.php';

?>


  <body>

    <div class="form">
      
      <ul class="tab-group">
       
        <li ><a href="login.php">Log In</a></li>
         <li ><a href="mainpage.php">Sign Up</a></li>
      </ul>
      
      
        
        <div id="login">   
          <h1>Welcome To Login!</h1>
          
          <form action="loginprocess.php" method="post">
          
            <div class="field-wrap">
           
            <input type="text" name="Name"  placeholder="Name" required autocomplete="off"/>
          </div>

          <?php


           if(isset($_GET['login_error'])&&$_GET['login_error']=='yes'){


          ?>
             <p style=color:red> Your UserName or Password did n't match </p>

<?php
           }
?>

          <div class="field-wrap">
            
            <input type="password" name="password"  placeholder="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
        <div style="padding-left:47px">  <button class="button button-block"/>Log In</button></div>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
