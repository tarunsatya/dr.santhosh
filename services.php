 <?php
include "includes/header.php";
 ?>
 <style>
.section-main {
      height: 100%;
      width: 100%;
      display: grid;
      place-items: center;
}

.service-row {
      display: flex;
      flex-wrap: wrap;
}

.service-column {
      width: 100%;
      padding: 0 1em 1em 1em;
      text-align: center;
      display: flex;
      justify-content: center;
}

.card-section {
      width: 90%;
      height: 250px;
      padding: 2em 1.5em;
      background: linear-gradient(#213360 50%, #c00f6678 50%);
      background-size: 100% 200%;
      background-position: 0 2.5%;
      border-radius: 5px;
      box-shadow: 0 0 35px rgb(0 0 0 / 12%);
      cursor: pointer;
      transition: 0.5s;
}

.card-section h3 {
      font-size: 20px;
      font-weight: 600;
      color: #e2edff;
      margin: 1em 0;
}

.card-section p {
      color: #e2edff;
      font-size: 15px;
      line-height: 1.6;
      letter-spacing: 0.03em;
}

.icon-wrapper {
      background-color: #2c7bfe;
      position: relative;
      margin: auto;
      font-size: 30px;
      height: 2.5em;
      width: 2.5em;
      color: #ffffff;
      border-radius: 50%;
      display: grid;
      place-items: center;
      transition: 0.5s;
}

.card-section:hover {
      background-position: 0 100%;
}

.card-section:hover .icon-wrapper {
      background-color: #ffffff;
      color: #2c7bfe;
}

.card-section:hover h3 {
      color: #1f194c;
}

.card-section:hover p {
      color: #ffff;
}

.service_head {
      padding-top: 70px;
}

.service_head h3 {
      margin: 0px 0px;
}

@media screen and (min-width: 768px) {
      .section-main {
            padding: 0 2em;
      }

      .service-column {
            flex: 0 50%;
            max-width: 50%;
      }
}

@media screen and (min-width: 992px) {
      .section-main {
            padding: 1em 3em;
      }

      .service-column {
            flex: 0 0 33.33%;
            max-width: 33.33%;
      }
}

/* ==============================================Code-Cards======================================= */


/* Utilities */
.profile-card::after,
.profile-card img {
      border-radius: 50%;
}


.profile-card,
.stats {
      display: flex;
}

.profile-card {
      padding: 1.5rem 1.5rem;
      border-radius: 10px;
      background-color: rgb(33 51 96);
      max-width: 400px;
      box-shadow: 0 0 30px rgb(0 0 0 / 15%);
      margin: 1rem;
      position: relative;
      transform-style: preserve-3d;
      overflow: hidden;

}


.profile-card::before,
.profile-card::after {
      content: '';
      position: absolute;
      z-index: -1;
}

.profile-card::before {
      width: 100%;
      height: 100%;
      /* border: 1px solid #FFF; */
      border-radius: 10px;
      top: -.7rem;
      left: -.7rem;
}

.profile-card::after {
      height: 15rem;
      width: 15rem;
      background-color: #c00f66;
      top: -11rem;
      right: -9rem;
}

.profile-card img {
      width: 8rem;
      min-width: 80px;
      box-shadow: 0 0 0 5px #FFF;
}

.infos {
      margin-left: 1.5rem;
}

.name {
      margin-bottom: 1rem;
}

.name h2 {
      font-size: 1.3rem;
      color: #ebe6e6;
      margin-bottom: 5px;
}

.name h4 {
      font-size: .8rem;
      color: #ebe6e6;
}

.profile-text {
      font-size: 0.7rem;
      margin-bottom: 0.5rem;
      color: #ebe6e6;
}

.links button {
      margin-top: 0.5rem;
      min-width: 110px;
      padding: 0.5rem;
      border: 1px solid #fafafa;
      border-radius: 5px;
      cursor: pointer;
      transition: all .25s linear;
      color: #fff !important;
      line-height: 1;
}

.links .follow,
.links .view:hover {
      background-color: #c00f66;
      color: #FFF;
}

.links .view,
.links .follow:hover {
      background-color: transparent;
      color: #222;
}

@media screen and (max-width: 450px) {
      .profile-card {
            display: block;
      }

      .infos {
            margin-left: 0;
            margin-top: 1.5rem;
      }

      .links button {
            min-width: 100px;
      }
}
 </style>
 <!-- ========================
       page title 
    =========================== -->
 <section class="page-title page-title-layout1 bg-overlay">
       <div class="bg-img"><img src="assets/images/page-titles/2.jpg" alt="background"></div>
       <div class="container">
             <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                         <span class="pagetitle__subheading">Caring For The Health Of You And Your Family.</span>
                         <h1 class="pagetitle__heading">We Provide All Aspects Of Medical Practice For Your Whole
                               Family!</h1>
                         <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative
                               solutions, specializing in medical services for treatment of medical infrastructure.
                         </p>
                         <div class="d-flex flex-wrap align-items-center">
                               <a href="appointment.html" class="btn btn__secondary btn__rounded mr-30">
                                     <span>Find A Doctor</span>
                                     <i class="icon-arrow-right"></i>
                               </a>
                               <a href="about-us.html" class="btn btn__secondary btn__outlined btn__rounded">
                                     <span>More About Us</span>
                               </a>
                         </div>
                   </div><!-- /.col-xl-5 -->
             </div><!-- /.row -->
       </div><!-- /.container -->
 </section><!-- /.page-title -->

 <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
             <div class="heading text-center service_head">
                   <h3 class="heading__title"><span class="high_light">Our</span> Services</h3>
             </div><!-- /.heading -->
       </div><!-- /.col-lg-6 -->
 </div><!-- /.row -->
 <!-- ========================
        Services Layout 1
    =========================== -->
 <section class="section-main">
       <div class="row service-row">
             <div class="service-column">
                   <div class="card-section">
                         <div class="icon-wrapper">
                               <i class="fas fa-hammer"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
             <div class="service-column">
                   <div class="card-section">

                         <div class="icon-wrapper">
                               <i class="fas fa-brush"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
             <div class="service-column">
                   <div class="card-section">
                         <div class="icon-wrapper">
                               <i class="fas fa-wrench"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
             <div class="service-column">
                   <div class="card-section">
                         <div class="icon-wrapper">
                               <i class="fas fa-truck-pickup"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
             <div class="service-column">
                   <div class="card-section">
                         <div class="icon-wrapper">
                               <i class="fas fa-broom"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
             <div class="service-column">
                   <div class="card-section">
                         <div class="icon-wrapper">
                               <i class="fas fa-plug"></i>
                         </div>
                         <h3>Service Heading</h3>
                         <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                               consequatur necessitatibus eaque.
                         </p>
                   </div>
             </div>
       </div>
 </section>


 <!-- ======================
    Features Layout 2
    ========================= -->
 <section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
       <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
       <div class="container">
             <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                         <div class="heading__layout2 mb-50">
                               <h3 class="heading__title color-white">Medcity Has Touched The Lives Of Patients &
                                     Providing Care for The
                                     Sickest In Our Community.</h3>
                         </div>
                   </div><!-- /col-lg-5 -->
             </div><!-- /.row -->
             <div class="row mb-100">
                   <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
                         <div class="heading__icon">
                               <i class="icon-insurance"></i>
                         </div>
                   </div><!-- /.col-lg-5 -->
                   <div class="col-sm-9 col-md-9 col-lg-6">
                         <p class="heading__desc font-weight-bold color-white mb-30">Medcity has been present in Europe
                               since 1990,
                               offering innovative
                               solutions, specializing in medical services for treatment of medical infrastructure. With
                               over 100
                               professionals actively participates in numerous initiatives aimed at creating sustainable
                               change for
                               patients!
                         </p>
                         <a href="#" class="btn btn__white btn__link">
                               <i class="icon-arrow-right icon-filled"></i>
                               <span>Our Core Values</span>
                         </a>
                   </div><!-- /.col-lg-6 -->
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
             <div class="row">
                   <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                         <p class="font-weight-bold color-gray mb-0">We hope you will allow us to care for you and
                               strive to be the
                               first and best choice for healthcare.
                               <a href="#" class="color-secondary">
                                     <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
                               </a>
                         </p>
                   </div><!-- /.col-lg-6 -->
             </div><!-- /.row -->
       </div><!-- /.container -->
 </section><!-- /.Features Layout 2 -->

 <!-- ======================
      Team
    ========================= -->
 <section class="team-layout2 pb-80">
       <div class="container">
             <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                         <div class="heading text-center mb-40">
                               <h3 class="heading__title">Meet Our <span class="high_light">Doctors</span></h3>
                               <p class="heading__desc">Our administration and support staff all have exceptional people
                                     skills and
                                     trained to assist you with all medical enquiries.
                               </p>
                         </div><!-- /.heading -->
                   </div><!-- /.col-lg-6 -->
             </div><!-- /.row -->
             <div class="row">
                   <div class="col-12">
                         <div class="slick-carousel"
                               data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": false, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                               <!-- Member #1 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                               <!-- Member #2 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                               <!-- Member #3 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                               <!-- Member #4 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                               <!-- Member #5 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                               <!-- Member #6 -->
                               <div class="member">
                                     <div class="profile-card">
                                           <div class="img">
                                                 <img
                                                       src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                           </div>
                                           <div class="infos">
                                                 <div class="name">
                                                       <h2>Bradley Steve</h2>
                                                       <h4>@bradsteve</h4>
                                                 </div>
                                                 <p class="profile-text">
                                                       I'm a Front End Developer, follow me to be the first
                                                       who see my new work.
                                                 </p>

                                                 <!-- <div class="links">

                                                       <button class="view">View profile</button>
                                                 </div> -->
                                           </div>
                                     </div>
                               </div>
                         </div>
                   </div>
             </div>
       </div>
 </section>

 <!-- ==========================
        contact layout 3
    =========================== -->
 <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
       <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
       <div class="container">
             <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-7">
                         <div class="contact-panel mb-50">
                               <form class="contact-panel__form" method="post"
                                     action="http://7oroof.com/demos/medcity/assets/php/contact.php" id="contactForm">
                                     <div class="row">
                                           <div class="col-sm-12">
                                                 <h4 class="contact-panel__title clr-white">Book An Appointment</h4>
                                                 <p class="contact-panel__desc mb-30">Please feel welcome to contact our
                                                       friendly reception staff
                                                       with any general or medical enquiry. Our doctors will receive or
                                                       return any urgent calls.
                                                 </p>
                                           </div>
                                           <div class="col-sm-6 col-md-6 col-lg-6">
                                                 <div class="form-group">
                                                       <i class="icon-widget form-group-icon"></i>
                                                       <select class="form-control">
                                                             <option value="0">Choose Clinic</option>
                                                             <option value="1">Pathology Clinic</option>
                                                             <option value="2">Pathology Clinic</option>
                                                       </select>
                                                 </div>
                                           </div><!-- /.col-lg-6 -->
                                           <div class="col-sm-6 col-md-6 col-lg-6">
                                                 <div class="form-group">
                                                       <i class="icon-user form-group-icon"></i>
                                                       <select class="form-control">
                                                             <option value="0">Choose Doctor</option>
                                                             <option value="1">Ahmed Abdallah</option>
                                                             <option value="2">Mahmoud Begha</option>
                                                       </select>
                                                 </div>
                                           </div><!-- /.col-lg-6 -->
                                           <div class="col-sm-6 col-md-6 col-lg-6">
                                                 <div class="form-group">
                                                       <i class="icon-news form-group-icon"></i>
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
                                           <div class="col-sm-4 col-md-4 col-lg-4">
                                                 <div class="form-group">
                                                       <i class="icon-phone form-group-icon"></i>
                                                       <input type="text" class="form-control" placeholder="Phone"
                                                             id="contact-Phone" name="contact-phone" required>
                                                 </div>
                                           </div><!-- /.col-lg-4 -->
                                           <div class="col-sm-4 col-md-4 col-lg-4">
                                                 <div class="form-group form-group-date">
                                                       <i class="icon-calendar form-group-icon"></i>
                                                       <input type="date" class="form-control" id="contact-date"
                                                             name="contact-date" required>
                                                 </div>
                                           </div><!-- /.col-lg-4 -->
                                           <div class="col-sm-4 col-md-4 col-lg-4">
                                                 <div class="form-group form-group-date">
                                                       <i class="icon-clock form-group-icon"></i>
                                                       <input type="time" class="form-control" id="contact-time"
                                                             name="contact-time" required>
                                                 </div>
                                           </div><!-- /.col-lg-4 -->
                                           <div class="col-12">
                                                 <button type="submit"
                                                       class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                                       <span class="">Book Appointment</span> <i
                                                             class="icon-arrow-right"></i>
                                                 </button>
                                                 <div class="contact-result"></div>
                                           </div><!-- /.col-lg-12 -->
                                     </div><!-- /.row -->
                               </form>
                         </div>
                   </div>
                   <div class="col-sm-12 col-md-12 col-lg-5">
                         <div class="heading heading-light mb-30">
                               <h3 class="heading__title mb-30">Helping Patients From Around the Globe!!</h3>
                               <p class="heading__desc">Our staff strives to make each interaction with patients clear,
                                     concise, and
                                     inviting. Support the important work of Medicsh Hospital by making a much-needed
                                     donation today.
                               </p>
                         </div>
                         <div class="d-flex align-items-center">
                               <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                                     <i class="fas fa-heart"></i> <span>Make A Gift</span>
                               </a>
                               <a class="video__btn video__btn-white popup-video"
                                     href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                     <div class="video__player">
                                           <i class="fa fa-play"></i>
                                     </div>
                                     <span class="video__btn-title color-white">Play Video</span>
                               </a>
                         </div>
                         <div class="text__block">
                               <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range
                                     of plans for
                                     families and individuals at every stage of life, with annual limits ranging from
                                     £1.5m to unlimited.</p>
                               <div class="sinature color-white">
                                     <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
                               </div>
                         </div><!-- /.text__block -->
                         <div class="slick-carousel clients-light mt-20"
                               data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                               <div class="client">
                                     <img src="assets/images/clients/1.png" alt="client">
                                     <img src="assets/images/clients/1.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/2.png" alt="client">
                                     <img src="assets/images/clients/2.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/3.png" alt="client">
                                     <img src="assets/images/clients/3.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/4.png" alt="client">
                                     <img src="assets/images/clients/4.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/5.png" alt="client">
                                     <img src="assets/images/clients/5.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/6.png" alt="client">
                                     <img src="assets/images/clients/6.png" alt="client">
                               </div><!-- /.client -->
                               <div class="client">
                                     <img src="assets/images/clients/7.png" alt="client">
                                     <img src="assets/images/clients/7.png" alt="client">
                               </div>
                         </div>
                   </div>
             </div>
       </div>
 </section>


 <!-- ========================
     gallery
    =========================== -->
 <!-- <section class="gallery pt-0 pb-90">
       <div class="container">
             <div class="row">
                   <div class="col-12">
                         <div class="slick-carousel"
                               data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                               <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                                     <img src="assets/images/gallery/1.jpg" alt="gallery img">
                               </a>
                               <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                                     <img src="assets/images/gallery/2.jpg" alt="gallery img">
                               </a>
                               <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                                     <img src="assets/images/gallery/3.jpg" alt="gallery img">
                               </a>
                               <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                                     <img src="assets/images/gallery/4.jpg" alt="gallery img">
                               </a>
                               <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                                     <img src="assets/images/gallery/5.jpg" alt="gallery img">
                               </a>
                               <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                                     <img src="assets/images/gallery/6.jpg" alt="gallery img">
                               </a>
                         </div> 
                   </div>
             </div> 
       </div> 
 </section>  -->
 <?php
include "includes/footer.php";
?>