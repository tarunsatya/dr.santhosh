<?php
include "includes/header.php";
include "includes/db.php";
if(isset($_POST['contact_submit']))
{
$contact_name = mysqli_real_escape_string($conn,$_POST['contact-name']);
$contact_email = mysqli_real_escape_string($conn,$_POST['contact-email']);
$contact_number = mysqli_real_escape_string($conn,$_POST['contact-phone']);
$subject = mysqli_real_escape_string($conn,$_POST['subject']);
$contact_message = mysqli_real_escape_string($conn,$_POST['contact-message']);

  $insert = mysqli_query ($conn,"INSERT INTO tbl_contact SET contact_name='".$contact_name."', email='".$contact_email."', number='".$contact_number."',message='".$contact_message."',subject='".$subject."', status=1");
     if($insert)
     {
         echo"<script>alert('Contact Submitted Successfully');</script>";
     }
     else{
         echo"<script>alert('Something went wrong please try Again');</script>";
     }
 
     
}








?>
<div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mt-2rem">
                  <h3 class="heading__title"><span class="high_light">Contact</span> Us</h3>
            </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<!-- ==========================
        contact layout 1
    =========================== -->
<section class="contact-layout1 pt-0 mt--100">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="contact-panel d-flex flex-wrap">
                              <form class="contact-panel__form" method="post">
                                    <div class="row">
                                          <div class="col-sm-12">
                                                <h4 class="contact-panel__title clr-white">How Can We Help? </h4>
                                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our
                                                      friendly reception staff
                                                      with any general or medical enquiry. Our doctors will receive or
                                                      return any urgent calls.
                                                </p>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-user form-group-icon"></i>
                                                      <input type="text" class="form-control" placeholder="Name"
                                                            id="contact-name" name="contact-name" required>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-email form-group-icon"></i>
                                                      <input type="email" class="form-control" placeholder="Email"
                                                            id="contact-email" name="contact-email" required>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-phone form-group-icon"></i>
                                                      <input type="text" class="form-control" placeholder="Phone"
                                                            id="contact-Phone" name="contact-phone" required>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-news form-group-icon"></i>
                                                      <select class="form-control" name="subject">
                                                            <option value="0">Subject</option>
                                                            <option value="1">Subject 1</option>
                                                            <option value="2">Subject 1</option>
                                                      </select>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-12">
                                                <div class="form-group">
                                                      <i class="icon-alert form-group-icon"></i>
                                                      <textarea class="form-control" placeholder="Message"
                                                            id="contact-message" name="contact-message"></textarea>
                                                </div>
                                                <button type="submit"
                                                      class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10"
                                                      name="contact_submit">
                                                      <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                                </button>
                                                <div class="contact-result"></div>
                                          </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                              </form>
                              <div
                                    class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                                    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                                    <div>
                                          <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                                          <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel
                                                free to contact our
                                                friendly staff with any medical enquiry.
                                          </p>
                                    </div>
                                    <div>
                                          <ul class="contact__list list-unstyled mb-30">
                                                <li>
                                                      <i class="icon-phone"></i><a href="tel:+5565454117">Emergency
                                                            Line: (002) 01061245741</a>
                                                </li>
                                                <li>
                                                      <i class="icon-location"></i><a href="#">Location: Brooklyn, New
                                                            York</a>
                                                </li>
                                                <li>
                                                      <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri:
                                                            8:00 am - 7:00 pm</a>
                                                </li>
                                          </ul>
                                          <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                                    </div>
                              </div>
                        </div>
                  </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /.contact layout 1 -->


<!-- ========================= 
            Google Map
    =========================  -->
<section class="google-map py-0 map">
      <iframe frameborder="0" height="500" width="100%"
            src="https://maps.google.com/maps?q=Suite%20100%20San%20Francisco%2C%20LA%2094107%20United%20States&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
</section>

<?php
include "includes/footer.php"
  ?>