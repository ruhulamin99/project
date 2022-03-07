<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<?php  
include('links/header.php');       


?>

      <section id="inner-headline" style="margin-top: -20px;">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>About Us</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
                <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                <li class="active">About Us</li>
              </ul>
            </div>
          </div>
        </div>
      </section>



      <section id="content" style="margin-top: -20px; background-color: #b2bec3;" >
      <div class="container">
       
        <div class="row">
          <div class="span12">
            <h4>Talented people behind Lost and Found System</h4>
          </div>
     
          <div class="span3">
          <div class="busra">
            <img src="img/dummies/team21.jpg" alt="" class="img-polaroid" />
            <strong>Razu</strong>
           
              <style>
        .busra {
          height: 300px;
    width: 50%;
    //background-color: wheat;
    float: left;
}

/* Clear floats after image containers */
.moon {
  height: 300px;
    width: 50%;
    //background-color: wheat;
    float: left;
}

img{
    width: 400px;
    height: 200px;
   
    margin: auto;
    display: block;
}
</style>
<div class="roles">
              <p class="lead">
                
              </p>
            </div>
          </div>
         
         
     
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          
          <div class="span6">
            <h4>Our expertise</h4>
            <label>Web design:</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
        
            <label>Photoshop :</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Ilustrator :</label>
            <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 40%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
      
    <?php  
include('links/footer.php');
?>
  </div>
<?php  
include('links/js.php');
?>
</body>
</html>
