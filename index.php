<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<?php  
include('links/header.php');       


?>
    <!-- end header -->

    <div class="extra" style="font-style: italic; text-align: center;">
      <h2 style="color: #dfe6e9 ;">"Don't Worry, We Can Help You Find Your Items."</h2>
      <h4 style="color: #dfe6e9 ;">“You Lose It, They Find It, We Deliver It”</h4>
    </div>

    <?php  
include('links/slider.php');       

?> 

<br>
<br>


      <!-- section -->

      <section id="content" style="background-color: #b2bec3;margin-top: -40px;">
        <div class="container" style="margin-left: 200px;">
          <div class="row" >
            <div class="span12">
              <div class="row">
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-briefcase icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>Why?</h6>
                      <p>
                        Providing assistance to guests saves them the running around and the time it would take to find information and arrange shipping if they were to deal with lost item recovery themselves. As for the establishments, we automate the process for their lost and found department, letting them focus on the primary concerns of their business. We cut down time and cost for both parties.
                      </p>
                    
                    </div>
                  </div>
                </div>
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-desktop icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>When?</h6>
                      <p>
                        The process begins as soon as a guest loses an item. The establishment logs all retrieved items in our cloud-based system. When the customer makes an inquiry, our software finds the matching item and immediately initiates the process for shipping it back to its owner. We pride ourselves on returning lost items promptly and reliably.
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-beaker icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>How?</h6>
                      <p>
                      The process is very simple. We are the facilitators between the establishments (airlines, car rental agencies, hotels, etc.) and the guest. Once the guest contacts the establishment, the establishment refers him or her to our website and we arrange for the lost item's  return.
                      </p>
                     
                    </div>
                  </div>
                </div>
            
              </div>
            </div>
          </div>
          <!-- divider -->
     
          <!-- end divider -->
        </div>
      </section>
    
      <hr>



<?php  
include('links/footer.php');
?>
  </div>
<?php  
include('links/js.php');
?>
</body>
</html>