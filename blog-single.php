 <?php
include "includes/header.php";
include "includes/db.php";
$id=$_GET['id'];
 ?>
 <!-- ========================
       page title 
    =========================== -->
 <section class="page-title pt-30 pb-30 text-center">
       <div class="container">
             <div class="row align-items-center">
                   <div class="col-12">
                         <?php
$query = mysqli_query($conn, "select * from tbl_blog where blog_id='".$id."' && status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                         <nav>
                               <ol class="breadcrumb mb-0">
                                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                     <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">
                                           <?php echo $fetch['blog_title'];?>
                                     </li>
                               </ol>
                         </nav>
                         <?php
}
                         ?>
                   </div><!-- /.col-12 -->
             </div><!-- /.row -->
       </div><!-- /.container -->
 </section><!-- /.page-title -->

 <!-- ======================
      Blog Single
    ========================= -->
 <section class="blog blog-single pt-0 pb-80">
       <div class="container">
             <div class="row">
                   <?php
$query = mysqli_query($conn, "select * from tbl_blog where blog_id='".$id."' && status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                   <div class="col-sm-12 col-md-12 col-lg-8">
                         <div class="post-item mb-0">
                               <div class="post__img">
                                     <a href="#">
                                           <img src="dr.admin/uploads/blogs/<?php echo $fetch['blog_img'];?>"
                                                 alt="post image" loading="lazy">
                                     </a>
                               </div><!-- /.post-img -->
                               <div class="post__body pb-0">
                                     <div class="post__meta-cat">
                                           <a href="#">Blog</a><a href="#">Details</a>
                                     </div><!-- /.blog-meta-cat -->
                                     <div class="post__meta d-flex align-items-center mb-20">
                                           <span class="post__meta-date"><?php echo $fetch['created_date'];?></span>
                                           <a class="post__meta-author" href="#"><?php echo $fetch['blog_author'];?></a>
                                           <!-- <a class="post__meta-comments" href="#">2 coments</a> -->
                                     </div><!-- /.blog-meta -->
                                     <h1 class="post__title mb-30">
                                           <?php echo $fetch['blog_title'];?>
                                     </h1>
                                     <div class="post__desc">
                                           <p><?php echo $fetch['blog_content'];?></p>

                                     </div><!-- /.blog-desc -->
                               </div>
                         </div><!-- /.post-item -->


                   </div>
                   <?php
}
                   ?>
                   <div class="col-sm-12 col-md-12 col-lg-4">
                         <aside class="sidebar">

                               <div class="widget widget-posts">
                                     <h5 class="widget__title">Recent Posts</h5>
                                     <div class="widget__content">
                                           <!-- post item #1 -->
                                           <?php
$query = mysqli_query($conn, "select * from tbl_blog where status=1");
while($fetch = mysqli_fetch_array($query)){
?>
                                           <a href="blog-single.php?id=<?php echo $fetch['blog_id'];?>">
                                                 <div class="widget-post-item d-flex align-items-center">
                                                       <div class="widget-post__img">
                                                             <a
                                                                   href="blog-single.php?id=<?php echo $fetch['blog_id'];?>"><img
                                                                         src="dr.admin/uploads/blogs/<?php echo $fetch['blog_img'];?>"
                                                                         alt="thumb"></a>
                                                       </div><!-- /.widget-post-img -->
                                                       <div class="widget-post__content">
                                                             <span
                                                                   class="widget-post__date"><?php echo $fetch['created_date'];?></span>
                                                             <h4 class="widget-post__title"><a
                                                                         href="#"><?php echo $fetch['blog_title'];?></a>
                                                             </h4>
                                                       </div><!-- /.widget-post-content -->
                                                 </div><!-- /.widget-post-item -->
                                           </a>
                                           <?php
}
                                           ?>

                                     </div><!-- /.widget-content -->
                               </div><!-- /.widget-posts -->

                         </aside><!-- /.sidebar -->
                   </div><!-- /.col-lg-4 -->
             </div><!-- /.row -->
       </div><!-- /.container -->
 </section><!-- /.blog Single -->

 <?php
include "includes/footer.php";
 ?>