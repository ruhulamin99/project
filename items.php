<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"adminpanel");

?>
    <div class="grid_10">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Lost Items
            </h6>
        </div>
        <div class="block" style="margin-left:50px">
            <form name="form1" action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Item Name</td>
                        <td><input type="text" name="pnm"></td>
                    </tr>
                    <tr>
                        <td>Item Quantity</td>
                        <td><input type="text" name="pqty"></td>
                    </tr>
                    <tr>
                        <td>Item Image</td>
                        <td><input type="file" name="pimage"></td>
                    </tr>
                    <tr>
                        <td>Item Category</td>
                        <td>
                            <select name="pcategory">
                                <option value="mobile">Mobile</option>
                                <option value="laptop">Laptop</option>
                                <option value="cloths">Cloths</option>
                                <option value="watch">Watch</option>
                                <option value="shoes">Shoes</option>
                                <option value="shoes">Dress</option>

                            </select>
                        </td>
                    </tr>
                    </br>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit1" value="Upload">
                        </td>
                    </tr>
                
                </table>
            </form>
<?php
if(isset($_POST["submit1"]))
{   
    $v1=rand(1111,9999);
    $v2=rand(1111,9999);
    $v3=$v1.$v2;
    $v3=md5($v3);
    $fnm=$_FILES["pimage"] ["name"];
    $dst="./item_image/".$v3.$fnm;
    $dst1="item_image/".$v3.$fnm;
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    mysqli_query($link,"insert into items values('','$_POST[pnm]',$_POST[pqty],'$dst1','$_POST[pcategory]') ");
}



?>
          
        </div>
    </div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>