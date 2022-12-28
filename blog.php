 <?php
include "includes/header.php";
include "includes/db.php";
 ?>
 <style>
.card-blog {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 100%;
}

.card-header img {
      width: 100%;
      height: 200px;
      object-fit: cover;
}

.card-body {
      display: flex;
      flex-direction: column;
      align-items: start;
      padding: 20px;
      min-height: 250px;
}

.tag {
      background-color: #ccc;
      color: #fff;
      border-radius: 50px;
      font-size: 12px;
      margin: 0;
      padding: 2px 10px;
      text-transform: uppercase;
}

.tag-teal {
      background-color: #92d4e4;
}

.tag-purple {
      background-color: #3d1d94;
}

.tag-pink {
      background-color: #c62bcd;
}

.card-body h4 {
      margin: 10px 0;
      font-size: 15px;
}

.card-body p {
      font-size: 14px;
      margin: 0 0 40px 0;
      font-weight: 500;
      color: rgb(70, 68, 68);
}

.user {
      display: flex;
      margin-top: auto;
}

.user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      object-fit: cover;
}

.user-info h5 {
      margin: 0;
}

.user-info small {
      color: #888785;
}

@media (max-width: 940px) {
      .container-blog {
            grid-template-columns: 1fr;
            justify-items: center;
      }
}
 </style>

 <!-- ========================
       page title 
    =========================== -->
 <section class="page-title page-title-layout5 bg-overlay">
       <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
       <div class="container">
             <div class="row">
                   <div class="col-12">
                         <h1 class="pagetitle__heading">Health Essentials</h1>
                         <nav>
                               <ol class="breadcrumb mb-0">
                                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Blog</li>
                               </ol>
                         </nav>
                   </div>
             </div>
       </div>
 </section>

 <!-- ======================
      Blog Grid
    ========================= -->
 <section class="blog-grid">
       <div class="container">
             <div class="row">
                   <?php
$query = mysqli_query($conn, "select * from tbl_blog where status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                   <div class="col-lg-4">
                         <div class="card-blog">
                               <div class="card-header">
                                     <img src="dr.admin/uploads/blogs/<?php echo $fetch['blog_img'];?>" alt="" />
                               </div>
                               <div class="card-body">
                                     <span class="tag tag-teal">Health</span>
                                     <h4><?php echo $fetch['blog_title'];?></h4>
                                     <p><?php echo $fetch['blog_content'];?></p>
                                     <a href="blog-single.php?id=<?php echo $fetch['blog_id'];?>">
                                           <button class="read-m learn-more">
                                                 <span class="circle" aria-hidden="true">
                                                       <span class="icon arrow"></span>
                                                 </span>
                                                 <span class="button-text">Read More</span>
                                           </button>
                                     </a>
                                     <!-- <div class="user">
                                           <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Outdoors-man-portrait_%28cropped%29.jpg"
                                                 alt="" />
                                           <div class="user-info">
                                                 <h5>Jerome Walton</h5>
                                                 <small>2h ago</small>
                                           </div>
                                     </div> -->
                               </div>
                         </div>
                   </div>
                   <?php
}
                   ?>
             </div>
       </div><!-- /.container -->



 </section><!-- /.blog Grid -->
 <?php
include "includes/footer.php";
?>