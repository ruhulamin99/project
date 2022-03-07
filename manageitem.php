<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
      
      </div>
    </div>
  </div>
    </div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Item List
            
    </h6>
  </div>

  <div class="card-body">

  <?php 
  if(isset($_SESSION['success']) && $_SESSION['success'] !='')
  {
    echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].'  </h2>';
    unset($_SESSION['success']);
  }
  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].'  </h2>';
    unset($_SESSION['status']);
  }

  ?>

    <div class="table-responsive">

      <?php  
          $connection = mysqli_connect("localhost","root","","adminpanel");
          $query = "SELECT *FROM items";
          $query_run = mysqli_query($connection,$query);


      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Item Quantity</th>
            <th>Item image</th>
            <th>Item Category</th>
           
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
            if(mysqli_num_rows($query_run)>0)
            {
              while($row = mysqli_fetch_assoc($query_run))
              {
                  ?>
          <tr>
            <td><?php echo $row['id'];   ?></td>
            <td><?php echo $row['item_name'];   ?></td> 
            <td><?php echo $row['item_qty'];   ?></td>
            <td><?php echo $row['item_image'];   ?></td> 
            <td><?php echo $row['item_category'];   ?></td> 
     
            <td>
                <form action="managecode.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                </form>
            </td>


          </tr>
          <?php
              }
            }
            else{
              echo "No record Found";
            }


        ?>
         
        </tbody>
        
      </table>

    </div>
  </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>