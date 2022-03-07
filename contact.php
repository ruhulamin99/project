<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<?php  
include('links/header.php');       


?>
   
    
    <section id="content" style="background-color: #dfe6e9;">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
  
              <form action="https://formspree.io/f/mleaejvq" method="POST" role="form" class="contactForm" >
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
  
                <div class="row">
                  <div class="span4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-msg="Please enter at least 4 chars"required />
                    <div class="validation"></div>
                  </div>
                  <div class="span4 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  data-msg="Please enter a valid email"required />
                    <div class="validation"></div>
                  </div>
                  <div class="span4 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-msg="Please enter at least 8 chars of subject" required/>
                    <div class="validation"></div>
                  </div>
                  <div class="span12 margintop10 form-group">
                    <textarea class="form-control" name="message"  rows="10" data-msg="Please write something for us" placeholder="Message" required></textarea>
                    <div class="validation"></div>
                    <p class="text-center">
                      <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="map" style="width: 80%;margin: auto;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7884187014934!2d90.3741778144559!3d23.754923294521536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sCSE%20Building%2C%20Daffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1582352538262!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  
        </div>
      </section>
      
      <br>



      <?php  
include('links/footer.php');
?>
  </div>
<?php  
include('links/js.php');
?>
</body>
</html>