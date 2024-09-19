<!doctype html>
<html lang="en">

<?php require_once "_head.php" ?>

<div class="main-content">
    <div class="nav-bar sticky-top-xl bg-white shadow-sm w-100 p-3">
        <div class="row">
            <div class="col-md-5">
                <div class="input-group mb-0">
                    <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text sit border-start-0" id="basic-addon2"><i
                            class="bi bi-search"></i></span>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4 text-end">
                <div class="dropdown pt-2">
                    <a class="cp pt-4 fw-bolder fs-8 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Tera Byte
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">My Downloads</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container p-4 p-xl-4">
        <div class="row">
            <div class="col-md-12 ps-4 ps-lg-3">
                <div class="row bg-white shadow-sm">
                    <div class="col-md-4 p-3">
                        <img class="w-100" style="border-radius: 0.88rem !important"
                            src="assets/images/apps/<?= isset($_POST['appimg']) ? $_POST['appimg'] : 'terabyteeapp.png' ?>"
                            alt="terabytee">
                    </div>
                    <div class="det col-md-8 p-4">
                        <h4 class="fw-semi fs-4 mb-0">
                            <?= isset($_POST['appname']) ? $_POST['appname'] : 'TERABYTEE APP' ?></h4>
                        <span
                            class="fs-8"><?= isset($_POST['appkategori']) ? $_POST['appkategori'] : 'Android Application' ?></span>

                        <a href="./" class=" fs-8" style="float:right;"><i
                                class="bi fs-6 me-2 bi-arrow-left"></i> Back</a>

                        <a href="assets/apps/<?= isset($_POST['appfile']) ? $_POST['appfile'] : '' ?>"
                            class="btn btn-primary w-100 fw-semi fs-8 py-2 me-3 mt-4"> Download </a>
                        <!-- <button class="btn border ps-3 w-45 fw-semi fs-8 py-2 btn-outlie-primary"> Add to Wish List </button> -->



                        <div class="row pt-4">
                            <div class="col-md-6 col-6 text-center">
                                <b>5.0 <i class="bi bi-star-fill"></i></b>
                                <p>11.6k Reviews</p>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <b>5M+</b>
                                <p>Downloads</p>
                            </div>
                        </div>

                        <div class="auth pt-4" style="float: right;">
                            <h6 class="text-primary fw-semi mb-0">terabytee Publishing</h6>
                            <p class="fs-8" style="text-align:right;">contains Ads</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="about row p-2 py-3 bg-white mt-4 shadow-sm">
                            <h4 class="fw-semi fs-5">About this App</h4>
                            <p class="fs-8 text-justify">Welcome to the GT Car Stunt Master 3D which are based on Car driving simulator concepts. Looking for Adventure games for you or adventure games online? Then play Car Games in which you will experience circus car racing and Car Stunts as you have experienced before in Car racing stuntman games and car Free stunt games. In this Car Stunt Master 3D - Mega Ramps game you will experience different types of Spider car racing modes like race with Crazy cars, GT racing stunt or Mega Ramp Racing Car Stunt. In this Mega Ramp game you will enjoy the Mega Ramp Car jumping like Muscle car games and other Racing games. Many different Car Stunts, tracks and levels are designed by the racing professionals. Enjoy the Crazy car driving simulator with Superhero cars race as you have never experienced in any Superhero car games. If you are looking for Free Car Games , Racing games or Racing games offline then this Superhero league car stunts racing game is best for your Superhero jumper race experience.</p>
                        </div>

                        <div class="about row p-2 py-3  bg-white mt-4 shadow-sm">
                            <h4 class="fw-semi fs-5">Review</h4>
                           <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                                <div class="col-md-12 align-items-center col-9 rcolm">
                                    <div class="review">
                                        <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                    </div>
                                    <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                                    <small class="float-end fw-normal"> 20 Aug 2022 </small>
                                    </h3>

                                    <div class="review-text">
                                        Great work, keep it up
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>

                            <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                                <div class="col-md-12 align-items-center col-9 rcolm">
                                    <div class="review">
                                        <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                    </div>
                                    <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                                    <small class="float-end fw-normal"> 20 Aug 2022 </small>
                                    </h3>

                                    <div class="review-text">
                                        Great work, keep it up
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>

                            <div class="row m-0 reviewrow px-0">
                                <div class="col-md-12 align-items-center col-9 rcolm">
                                    <div class="review">
                                        <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                    </div>
                                    <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                                    <small class="float-end fw-normal"> 20 Aug 2022 </small>
                                    </h3>

                                    <div class="review-text">
                                        Great work, keep it up
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div> -->
            </div>

            <!-- <div class="col-md-4">
                         <h4 class="fs-6 fw-bolder my-3 mt-2 mb-3">Related Apps</h4>

                         <div class="col-md-12 mb-3">
                              <div class="app-cover p-2 shadow-md bg-white">
                                <a href="single.php">
                                    <div class="row">
                                         <div class="img-cover pe-0 col-3"> <img class="rounded" src="assets/images/games/2.png" alt="terabytee"></div>
                                         <div class="det mt-2 col-9">
                                             <h5 class="mb-0 fs-6">Candy Crash</h5>
                                             <span class="fs-8">Racing</span>
                                             <ul class="row">
                                                 <li class="col-8 ratfac">
                                                     <i class="bi text-warning bi-star-fill"></i>
                                                     <i class="bi text-warning bi-star-fill"></i>
                                                     <i class="bi text-warning bi-star-fill"></i>
                                                     <i class="bi text-warning bi-star-fill"></i>
                                                     <i class="bi bi-star-fill"></i>
                                                 </li>
                                                 <li class="col-4"><span class="text-success float-end">Free</span></li>
                                             </ul>
                                         </div>
                                    </div>
                                </a>
                           </div>
                       </div>

                       <div class="col-md-12 mb-3">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <a href="single.php">
                                <div class="row">
                                     <div class="img-cover pe-0 col-3"> <img class="rounded" src="assets/images/games/5.png" alt="terabytee"></div>
                                     <div class="det mt-2 col-9">
                                         <h5 class="mb-0 fs-6">Snake Lite</h5>
                                         <span class="fs-8">Racing</span>
                                         <ul class="row">
                                             <li class="col-8 ratfac">
                                                 <i class="bi text-warning bi-star-fill"></i>
                                                 <i class="bi text-warning bi-star-fill"></i>
                                                 <i class="bi text-warning bi-star-fill"></i>
                                                 <i class="bi text-warning bi-star-fill"></i>
                                                 <i class="bi bi-star-fill"></i>
                                             </li>
                                             <li class="col-4"><span class="text-success float-end">Free</span></li>
                                         </ul>
                                     </div>
                                </div>
                            </a>
                       </div>
                   </div>

                <div class="col-md-12 mb-3">
                      <div class="app-cover p-2 shadow-md bg-white">
                        <a href="single.php">
                            <div class="row">
                                 <div class="img-cover pe-0 col-3"> <img class="rounded" src="assets/images/games/6.png" alt="terabytee"></div>
                                 <div class="det mt-2 col-9">
                                     <h5 class="mb-0 fs-6">Snow Race</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success float-end">Free</span></li>
                                     </ul>
                                 </div>
                            </div>
                        </a>
                   </div>
               </div>

                <div class="col-md-12 mb-3">
                      <div class="app-cover p-2 shadow-md bg-white">
                        <a href="single.php">
                            <div class="row">
                                 <div class="img-cover pe-0 col-3"> <img class="rounded" src="assets/images/games/7.png" alt="terabytee"></div>
                                 <div class="det mt-2 col-9">
                                     <h5 class="mb-0 fs-6">Carrom Pool</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success float-end">Free</span></li>
                                     </ul>
                                 </div>
                            </div>
                        </a>
                   </div>
               </div>

                <div class="col-md-12 mb-3">
                      <div class="app-cover p-2 shadow-md bg-white">
                        <a href="single.php">
                            <div class="row">
                                 <div class="img-cover pe-0 col-3"> <img class="rounded" src="assets/images/games/8.png" alt="terabytee"></div>
                                 <div class="det mt-2 col-9">
                                     <h5 class="mb-0 fs-6">Temple Run</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success float-end">Free</span></li>
                                     </ul>
                                 </div>
                            </div>
                        </a>
                   </div>
               </div>
            </div> -->

        </div>
    </div>
</div>

<body>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>