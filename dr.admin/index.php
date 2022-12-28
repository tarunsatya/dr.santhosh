<?php
session_start();
if(!$_SESSION['user'])
{
    echo"<script>window.location.href='login.php';</script>";
}
include "includes/header.php";
?>
<section class="mt-50">
      <div class="main-panel">
            <div class="main-content">
                  <div class="content-wrapper">
                        <div class="container-fluid">




                              <div class="col-md-12 ">
                                    <div class="row ">
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-cherry">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-shopping-cart"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Categories</h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              3,243
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>12.5% <i
                                                                                    class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-cyan" role="progressbar"
                                                                        data-width="25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-blue-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-users"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Products</h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              15.07k
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>9.23% <i
                                                                                    class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-green"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-green-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-ticket-alt"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Brands
                                                                  </h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              578
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>10% <i class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-orange"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-orange-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-dollar-sign"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Orders
                                                                  </h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              11
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-cyan" role="progressbar"
                                                                        data-width="25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-cherry">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-shopping-cart"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Team</h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              3,243
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>12.5% <i
                                                                                    class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-cyan" role="progressbar"
                                                                        data-width="25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-blue-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-users"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Customer's</h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              10
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>9.23% <i
                                                                                    class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-green"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-green-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-ticket-alt"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Banners
                                                                  </h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              578
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>10% <i class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-orange"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-orange-dark">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-dollar-sign"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Contact User's
                                                                  </h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              10
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-cyan" role="progressbar"
                                                                        data-width="25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-6">
                                                <div class="card-admin l-bg-cherry">
                                                      <div class="card-statistic-3 p-4">
                                                            <div class="card-icon card-icon-large"><i
                                                                        class="fas fa-shopping-cart"></i></div>
                                                            <div class="mb-4">
                                                                  <h5 class="card-title mb-0 title-card">Blog</h5>
                                                            </div>
                                                            <div class="row align-items-center mb-2 d-flex">
                                                                  <div class="col-8">
                                                                        <h2
                                                                              class="d-flex align-items-center mb-0 count-text">
                                                                              32
                                                                        </h2>
                                                                  </div>
                                                                  <div class="col-4 text-right">
                                                                        <span>12.5% <i
                                                                                    class="fa fa-arrow-up"></i></span>
                                                                  </div>
                                                            </div>
                                                            <div class="progress mt-1 " data-height="8"
                                                                  style="height: 8px;">
                                                                  <div class="progress-bar l-bg-cyan" role="progressbar"
                                                                        data-width="25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%;">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>



















                              <!-- <div class="col-md-3">
                                    <div class="card banner">
                                          <i class="fa fa-user-o" aria-hidden="true"></i>
                                          <h2>5</h2>
                                          <p>Users</p>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card banner">

                                          <i class="fas fa-pen-square"></i>
                                          <h2>4</h2>
                                          <p class="test-monial">Orders</p>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card banner">
                                          <i class="fas fa-blog" id="blo_g"></i>
                                          <h2>8</h2>
                                          <p class="blogde">Category</p>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card banner">
                                          <i class="fas fa-blog" id="blo_g"></i>
                                          <h2>8</h2>
                                          <p class="blogde">Sub Category</p>
                                    </div>
                              </div>


                              <div class="row justify-content-center">
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Products</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fas fa-image" id="tea_m"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Banners</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fas fa-image" id="tea_m"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Testimonials</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fa fa-rss-square" aria-hidden="true"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Blog</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="row justify-content-center">
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fas fa-users" id="tea_m"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Team</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                          <div class="card banner">
                                                <i class="fas fa-image" id="tea_m"></i>
                                                <h2>5</h2>
                                                <p class="teamse">Contact</p>
                                          </div>
                                    </div>
                              </div> -->
                        </div>
                  </div>
            </div>
      </div>
</section>




<?php
include "includes/footer.php";
?>