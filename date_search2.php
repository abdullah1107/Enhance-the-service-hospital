 <?php

           include 'header.php';

?>


  <body>

    <div class="form">
      
      <ul class="tab-group">
       
        <li ><a href="statistics_process.php">Staistics</a></li>
         <li ><a href="mainpage.php">Sign Up</a></li>
      </ul>
      
      
        
        <div id="login">   
         
          
          <form action="date_process2.php" method="get">
          
           

        

          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" name="dat1" required autocomplete="off" placeholder="Enter From date like:m(1-12)/day(1-31)/year(2016)"/>
          </div>
          
      

       <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" name="dat2" required autocomplete="off" placeholder="Enter To date like:m(1-12)/day(1-31)/year(2016)"/>
          </div>
          
          
         <div style="padding-left:47px">  <button class="button button-block"/>Search</button></div>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
