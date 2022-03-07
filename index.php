<?php  
include('logincheck.php');
if(empty($_SESSION['username'])){
  header('location:login.php');
}
?>

<?php  
include('includes/header.php');       
include('includes/navbar.php');
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"adminpanel");
?>

    <div id="content-wrapper" class="d-flex">
      <div id="content">

        
        <div class="container-fluid">

        

         
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lost items</h1>
           
          </div>

      
            <div class="row">
            <?php

$res=mysqli_query($link,"select * from items");
while($row=mysqli_fetch_array($res)){
    ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="../admin/<?php echo $row["item_image"];    ?>" alt=""height="200"width="250">
                        <p>Item Name: <?php echo $row["item_name"];  ?></p>
                        <p>Category: <?php echo $row["item_category"];  ?></p>
                    </div>
                
                </div> 
          </div>
          </div>


            <?php
                }
        ?>
        
     </div>

</div>
        </div>
      
      </div>
      
    </div>
      


<?php
include('includes/scripts.php');
include('includes/footer.php');


?>
