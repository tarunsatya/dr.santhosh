<?php
include "includes/header.php";
include "includes/db.php";
// include "includes/scripts.php";
?>
<style>
.iam {
      color: white;
      font-size: 35px;
      padding: 15px;
      font-weight: 500;
}

.text {
      color: white;
      border-right: 2px solid #acd0f5;
      font-size: 35px;
      color: rgb(146 244 238);
      font-weight: 500;

}

.contain {
      margin: 0 auto;
      max-width: 1200px;
      width: 100%;
}
</style>
<!-- ============================
        Slider
    ============================== -->

<section class="slider slider-padding">
      <div class="slick-carousel m-slides-0">
            <?php
$query = mysqli_query($conn, "select * from tbl_banners where status=1");
while($fetch = mysqli_fetch_array($query)){
?>

            <div class="slide-item align-v-h">
                  <div class="bg-img"><img src="<?php echo $fetch['banner_img'];?>" alt="slide img"></div>
                  <div class="container">
                        <div class="row align-items-center">
                              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                    <div class="slide__content">
                                          <h2 class="slide__title">Professional & Reliable </h2>
                                          <!-- <p class="slide__desc">Best physio in Vizag</p> -->
                                          <div class="iam">Best <span class="text"></span></div>
                                          <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                                <!-- feature item #1 -->
                                                <li class="feature-item">
                                                      <div class="feature__icon">
                                                            <i class="icon-heart"></i>
                                                      </div>
                                                      <h2 class="feature__title">Examination</h2>
                                                </li><!-- /.feature-item-->
                                                <!-- feature item #2 -->
                                                <li class="feature-item">
                                                      <div class="feature__icon">
                                                            <i class="icon-medicine"></i>
                                                      </div>
                                                      <h2 class="feature__title">Prescription </h2>
                                                </li><!-- /.feature-item-->
                                                <!-- feature item #3 -->
                                                <li class="feature-item">
                                                      <div class="feature__icon">
                                                            <i class="icon-heart2"></i>
                                                      </div>
                                                      <h2 class="feature__title">Cardiogram</h2>
                                                </li><!-- /.feature-item-->
                                                <!-- feature item #4 -->
                                                <li class="feature-item">
                                                      <div class="feature__icon">
                                                            <i class="icon-blood-test"></i>
                                                      </div>
                                                      <h2 class="feature__title">Blood Pressure</h2>
                                                </li><!-- /.feature-item-->
                                          </ul><!-- /.features-list -->
                                    </div><!-- /.slide-content -->
                              </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                  </div><!-- /.container -->
            </div>
            <?php
}
?>






      </div>
</section>

<!-- ============================
        contact info
    ============================== -->
<section class="contact-info py-0">
      <div class="container">
            <div class="row row-no-gutter boxes-wrapper">
                  <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                              <div class="contact__icon">
                                    <i class="icon-call3"></i>
                              </div><!-- /.contact__icon -->
                              <div class="contact__content">
                                    <h2 class="contact__title">Emergency Cases</h2>
                                    <p class="contact__desc">Please feel free to contact our friendly reception staff
                                          with any general or
                                          medical enquiry.</p>
                                    <a href="tel:+9949332729" class="phone__number">
                                          <i class="icon-phone"></i> <span>99493 32729</span>
                                    </a>
                              </div><!-- /.contact__content -->
                        </div><!-- /.contact-box -->
                  </div><!-- /.col-md-4 -->
                  <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                              <div class="contact__icon">
                                    <i class="icon-health-report"></i>
                              </div><!-- /.contact__icon -->
                              <div class="contact__content">
                                    <h2 class="contact__title">Doctors Timetable</h2>
                                    <p class="contact__desc">Qualified doctors available six days a week, view our
                                          timetable to make an
                                          appointment.</p>
                                    <a href="doctors-timetable.html" class="btn btn__white btn__outlined btn__rounded">
                                          <span>View Timetable</span><i class="icon-arrow-right"></i>
                                    </a>
                              </div><!-- /.contact__content -->
                        </div><!-- /.contact-box -->
                  </div><!-- /.col-md-4 -->
                  <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                              <div class="contact__icon">
                                    <i class="icon-heart2"></i>
                              </div><!-- /.contact__icon -->
                              <div class="contact__content">
                                    <h2 class="contact__title">Opening Hours</h2>
                                    <ul class="time__list list-unstyled mb-0">
                                          <li><span>Monday - Friday</span><span>8.00 - 7:00 pm</span></li>
                                          <li><span>Saturday</span><span>9.00 - 10:00 pm</span></li>
                                          <li><span>Sunday</span><span>10.00 - 12:00 pm</span></li>
                                    </ul>
                              </div><!-- /.contact__content -->
                        </div><!-- /.contact-box -->
                  </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /.contact-info -->

<!-- ========================
      About Layout 2
    =========================== -->
<section class="about-layout2 pb-0">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                        <div class="heading-layout2">
                              <h3 class="heading__title mb-60">Improving The Quality Of Your <br> Life Through <span
                                          class="high_light">Better Health</span></h3>
                        </div><!-- /heading -->
                  </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="text-with-icon">
                              <div class="text__icon">
                                    <i class="icon-doctor"></i>
                              </div>
                              <div class="text__content">
                                    <p class="heading__desc font-weight-bold color-secondary mb-30">Our goal is to
                                          deliver quality of care
                                          in a courteous, respectful, and
                                          compassionate manner. We hope you will allow us to care for you and strive to
                                          be the first and best
                                          choice for healthcare.
                                    </p>
                                    <a href="appointment.html" class="btn btn__primary btn__rounded mb-70">
                                          <i class="icon-calendar"></i>
                                          <span>Appointment</span>
                                    </a>
                              </div>
                        </div>
                        <div class="video-banner-layout2 bg-overlay">
                              <img src="assets/images/about/doctot2.png" alt="about" class="w-100">
                              <a class="video__btn video__btn-white popup-video"
                                    href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                          <i class="fa fa-play"></i>
                                    </div>
                                    <span class="video__btn-title color-white">Watch Our Video!</span>
                              </a>
                        </div><!-- /.video-banner -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="about__text bg-white">
                              <p class="heading__desc mb-30">Our goal is to deliver quality of care in a courteous,
                                    respectful, and
                                    compassionate
                                    manner. We hope you will allow us to care for you and to be the first and best
                                    choice for healthcare.
                              </p>
                              <p class="heading__desc mb-30">We will work with you to develop individualised care plans,
                                    including
                                    management of
                                    chronic diseases. We are committed to being the region’s premier healthcare network
                                    providing patient
                                    centered care that inspires clinical and service excellence.</p>
                              <ul class="list-items list-unstyled">
                                    <li>We conduct a range of tests to help us work out why you're not feeling well and
                                          determine the
                                          right
                                          treatment for you.</li>
                                    <li>Our expert doctors, nurses and allied health professionals manage patients with
                                          a broad range of
                                          medical issues.
                                    </li>
                                    <li>We offer a wide range of care and support to our patients, from diagnosis to
                                          treatment and
                                          rehabilitation.
                                    </li>
                              </ul>
                        </div>
                  </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /.About Layout 2 -->

<!-- ========================
        Services Layout 1
    =========================== -->

<!-- ========================
        Notses
    =========================== -->
<section class="notes border-top pt-60 pb-60">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="note font-weight-bold">
                              <i class="far fa-file-alt color-primary"></i>
                              <span>Delivering tomorrow’s health care for your family.</span>
                              <a href="doctors-timetable.html" class="btn btn__link btn__secondary">
                                    <span>View Doctors’ Timetable</span><i class="icon-arrow-right"></i>
                              </a>
                        </div>
                  </div><!-- /.col-sm-6 -->

            </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /.notes -->

<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                        <div class="heading-layout2 mb-50">
                              <h3 class="heading__title color-white">Providing Care for The
                                    Sickest In Our Community.</h3>
                        </div><!-- /heading -->
                  </div><!-- /.col-12 -->
            </div><!-- /.row -->


            <div class="row">
                  <!-- Feature item #1 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/1.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-heart"></i>
                                    </div>
                                    <h4 class="feature__title">Medical Advices & Check Ups</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #2 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/2.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-doctor"></i>
                                    </div>
                                    <h4 class="feature__title">Trusted Medical Treatment </h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #3 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/3.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-ambulance"></i>
                                    </div>
                                    <h4 class="feature__title">Emergency Help Available 24/7</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #4 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/4.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-drugs"></i>
                                    </div>
                                    <h4 class="feature__title">Medical Research Professionals </h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #5 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/5.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-first-aid-kit"></i>
                                    </div>
                                    <h4 class="feature__title">Only Qualified Doctors</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #6 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/6.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-hospital"></i>
                                    </div>
                                    <h4 class="feature__title">Cutting Edge Facility</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #7 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/7.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-expenses"></i>
                                    </div>
                                    <h4 class="feature__title">Affordable Prices For All Patients</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
                  <!-- Feature item #8 -->
                  <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                              <div class="feature__img">
                                    <img src="assets/images/services/8.jpg" alt="service" loading="lazy">
                              </div><!-- /.feature__img -->
                              <div class="feature__content">
                                    <div class="feature__icon">
                                          <i class="icon-bandage"></i>
                                    </div>
                                    <h4 class="feature__title">Quality Care For Every Patient</h4>
                              </div><!-- /.feature__content -->
                              <a href="#" class="btn__link">
                                    <i class="icon-arrow-right icon-outlined"></i>
                              </a>
                        </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->

      </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->

<!-- ======================
      Team
    ========================= -->
<!-- <section class="team-layout2 pb-80">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                              <h3 class="heading__title">Meet Our Doctors</h3>
                              <p class="heading__desc">Our administration and support staff all have exceptional people
                                    skills and
                                    trained to assist you with all medical enquiries.
                              </p>
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                        <div class="slick-carousel"
                              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                              <div class="member">
                                    <div class="member__img">
                                          <img src="assets/images/team/1.jpg" alt="member img">
                                    </div>
                                    <div class="member__info">
                                          <h5 class="member__name"><a href="doctors-single-doctor1.html">Mike Dooley</a>
                                          </h5>
                                          <p class="member__job">Cardiology Specialist</p>
                                          <p class="member__desc">Muldoone obtained his undergraduate degree in
                                                Biomedical Engineering at Tulane
                                                University prior to attending St George's University School of Medicine
                                          </p>
                                          <div
                                                class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                                <a href="doctors-single-doctor1.html"
                                                      class="btn btn__secondary btn__link btn__rounded">
                                                      <span>Read More</span>
                                                      <i class="icon-arrow-right"></i>
                                                </a>
                                                <ul class="social-icons list-unstyled mb-0">
                                                      <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a></li>
                                                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                      </li>
                                                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>

                              <div class="member">
                                    <div class="member__img">
                                          <img src="assets/images/team/2.jpg" alt="member img">
                                    </div>
                                    <div class="member__info">
                                          <h5 class="member__name"><a
                                                      href="doctors-single-doctor1.html">Dermatologists</a></h5>
                                          <p class="member__job">Cardiology Specialist</p>
                                          <p class="member__desc">Brian specializes in treating skin, hair, nail, and
                                                mucous membrane. He also
                                                address cosmetic issues, helping to revitalize the appearance of the
                                                skin</p>
                                          <div
                                                class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                                <a href="doctors-single-doctor1.html"
                                                      class="btn btn__secondary btn__link btn__rounded">
                                                      <span>Read More</span>
                                                      <i class="icon-arrow-right"></i>
                                                </a>
                                                <ul class="social-icons list-unstyled mb-0">
                                                      <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a></li>
                                                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                      </li>
                                                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>

                              <div class="member">
                                    <div class="member__img">
                                          <img src="assets/images/team/3.jpg" alt="member img">
                                    </div>
                                    <div class="member__info">
                                          <h5 class="member__name"><a href="doctors-single-doctor1.html">Maria
                                                      Andaloro</a></h5>
                                          <p class="member__job">Pediatrician</p>
                                          <p class="member__desc">Andaloro graduated from medical school and completed 3
                                                years residency program
                                                in pediatrics. She passed rigorous exams by the American Board of
                                                Pediatrics.</p>
                                          <div
                                                class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                                <a href="doctors-single-doctor1.html"
                                                      class="btn btn__secondary btn__link btn__rounded">
                                                      <span>Read More</span>
                                                      <i class="icon-arrow-right"></i>
                                                </a>
                                                <ul class="social-icons list-unstyled mb-0">
                                                      <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a></li>
                                                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                      </li>
                                                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
      </div>
</section> -->
<div class="cta">
      <div class="container">
            <div class="row align-items-center">
                  <div class="col-sm-12 col-md-2 col-lg-2">
                        <img src="assets/images/icons/alert2.png" alt="alert">
                  </div><!-- /.col-lg-2 -->
                  <div class="col-sm-12 col-md-7 col-lg-7">
                        <h4 class="cta__title">True Healthcare For Your Family!</h4>
                        <p class="cta__desc">Serve the community by improving the quality of life through better
                              health. We have
                              put protocols to protect our patients and staff while continuing to provide
                              medically necessary care.
                        </p>
                  </div><!-- /.col-lg-7 -->
                  <div class="col-sm-12 col-md-3 col-lg-3">
                        <a href="appointment.html" class="btn btn__primary btn__secondary-style2 btn__rounded">
                              <span>Healthcare Programs</span>
                              <i class="icon-arrow-right"></i>
                        </a>
                  </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
      </div><!-- /.container -->
</div>
<!-- ======================
     Work Process 
    ========================= -->
<section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
      <div class="container">
            <div class="row heading-layout2">
                  <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
                  </div><!-- /.col-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole
                              Family!
                        </h3>
                  </div><!-- /.col-xl-5 -->
                  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                        <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop
                              individualised
                              care
                              plans, including
                              management of chronic diseases. If we cannot assist, we can provide referrals or advice
                              about the type of
                              practitioner you require. We treat all enquiries sensitively and in the strictest
                              confidence.
                        </p>
                        <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
                              <li>Fractures and dislocations</li>
                              <li>Health Assessments</li>
                              <li>Desensitisation injections</li>
                              <li>High Quality Care</li>
                              <li>Desensitisation injections</li>
                        </ul>
                  </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
            <section class="container">
                  <div class="row">
                        <div class="col-lg-4">


                              <!-- process item #1 -->
                              <div class="process-item">
                                    <span class="process__number">01</span>
                                    <div class="process__icon">
                                          <i class="icon-health-report"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Fill In Our Medical Application</h4>
                                    <p class="process__desc">Medcity offers low-cost health coverage for
                                          adults
                                          with limited income, you
                                          can
                                          enroll.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                          <span>Doctors’ Timetable</span>
                                          <i class="icon-arrow-right"></i>
                                    </a>
                              </div><!-- /.process-item -->





                        </div>
                        <div class="col-lg-4">
                              <!-- process-item #2 -->
                              <div class="process-item">
                                    <span class="process__number">02</span>
                                    <div class="process__icon">
                                          <i class="icon-dna"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Review Your Family Medical History</h4>
                                    <p class="process__desc">Regular health exams can help find all the
                                          problems,
                                          also can find it early
                                          chances.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                          <span>Start A Check Up</span>
                                          <i class="icon-arrow-right"></i>
                                    </a>
                              </div><!-- /.process-item -->
                        </div>
                        <div class="col-lg-4">
                              <!-- process-item #3 -->
                              <div class="process-item">
                                    <span class="process__number">03</span>
                                    <div class="process__icon">
                                          <i class="icon-medicine"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Choose Between Our Care Programs</h4>
                                    <p class="process__desc">We have protocols to protect our patients while
                                          continuing to provide
                                          necessary
                                          care.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                          <span>Explore Programs</span>
                                          <i class="icon-arrow-right"></i>
                                    </a>
                              </div><!-- /.process-item -->
                        </div>
                  </div><!-- /.row -->
            </section>

      </div><!-- /.container -->

</section><!-- /.Work Process -->

<!-- ========================= 
      Testimonials layout 3
      =========================  -->
<section class="">
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                  <div class="heading text-center mb-40">

                        <h3 class="heading__title high_light">Testimonials</h3>
                  </div>
            </div>
      </div>

      <div class="contain">
            <div id="owl-carousel" class="owl-carousel owl-theme">
                  <?php
$query = mysqli_query($conn, "select * from tbl_testimonials where status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                  <div class="item">
                        <figure class="snip1157">
                              <blockquote><?php echo $fetch['testimonial_content'];?>
                                    <div class="arrow"></div>
                              </blockquote>
                              <img src="dr.admin/uploads/testimonials/<?php echo $fetch['testimonial_img'];?>"
                                    alt="sq-sample3" />
                              <div class="author">
                                    <h5 class="high_light"><?php echo $fetch['testimonial_name'];?></h5>
                                    <span
                                          class="desig_test clr-black">&nbsp;&nbsp;&nbsp;&nbsp;-<?php echo $fetch['test_designation']?></span>
                              </div>
                        </figure>

                  </div>
                  <?php
}
    ?>

            </div>
      </div>
</section><!-- /.testimonials layout 3 -->

<!-- ==========================
        contact layout 2
    =========================== -->
<section class="contact-layout2 pt-0">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="contact-panel d-flex flex-wrap">
                              <form class="contact-panel__form" method="post">
                                    <div class="row" id="contactForm">
                                          <div class="col-sm-12">
                                                <h4 class="contact-panel__title clr-white">Book An Appointment</h4>
                                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our
                                                      friendly reception staff
                                                      with any general or medical enquiry. Our doctors will receive or
                                                      return any urgent calls.
                                                </p>
                                          </div>
                                          <!-- <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-widget form-group-icon"></i>
                      <select class="form-control">
                        <option value="0">Choose Clinic</option>
                        <option value="1">Pathology Clinic</option>
                        <option value="2">Pathology Clinic</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <select class="form-control">
                        <option value="0">Choose Doctor</option>
                        <option value="1">Ahmed Abdallah</option>
                        <option value="2">Mahmoud Begha</option>
                      </select>
                    </div>
                  </div> -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-news form-group-icon"></i>
                                                      <input type="text" class="form-control" placeholder="Name"
                                                            id="contact-name" name="name" required>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-email form-group-icon"></i>
                                                      <input type="email" class="form-control" placeholder="Email"
                                                            id="contact-email" name="email" required>
                                                </div>
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-phone form-group-icon"></i>
                                                      <input type="tel" class="form-control" placeholder="Phone"
                                                            id="contact-Phone" name="phone" required>
                                                </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group form-group-date">
                                                      <i class="icon-calendar form-group-icon"></i>
                                                      <input type="date" class="form-control" id="contact-date"
                                                            name="date" required>
                                                </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group form-group-date">
                                                      <i class="icon-clock form-group-icon"></i>
                                                      <input type="time" class="form-control" id="contact-time"
                                                            name="time" required>
                                                </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <i class="icon-news form-group-icon"></i>
                                                      <input type="text" class="form-control" placeholder="Address"
                                                            id="contact-name" name="address" required>
                                                </div>
                                          </div>
                                          <div class="col-12 text-center">
                                                <button type="submit"
                                                      class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10"
                                                      name="submit_appointment">
                                                      <span>Book Appointment</span> <i class="icon-arrow-right"></i>
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
                                          <p class="contact-panel__desc color-white mb-30">Please feel
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
</section><!-- /.contact layout 2 -->

<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid pt-0 pb-50">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                              <h3 class="heading__title">Recent <span class="high_light">Blogs</span></h3>
                        </div><!-- /.heading -->
                  </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

            <section class="row">
                  <?php
$query = mysqli_query($conn, "select * from tbl_blog where status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                  <div class="col-lg-4 ">
                        <article class="card-container post-item">
                              <div class="card-image post__img">
                                    <img src="dr.admin/uploads/blogs/<?php echo $fetch['blog_img'];?>"
                                          alt="a brand new sports car" loading="lazy" />
                              </div>
                              <div class="card-body">
                                    <h1 class="blog-brd">
                                          <?php echo $fetch['blog_title'];?>
                                    </h1>
                                    <p class="card-subtitle">
                                          <?php echo $fetch['blog_content'];?>
                                    </p>
                                    <a href="blog-single.php?id=<?php echo $fetch['blog_id'];?>">
                                          <button class="read-m learn-more">
                                                <span class="circle" aria-hidden="true">
                                                      <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Read More</span>
                                          </button>
                                    </a>
                              </div>
                        </article>
                  </div>

                  <?php
}
                  ?>

            </section>
      </div><!-- /.container -->
</section><!-- /.blog Grid -->
<?php
include "includes/footer.php"
?>