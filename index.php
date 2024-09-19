<!doctype html>
<html lang="en">

<?php require "_head.php" ?>

<div class="main-content">
    <div class="nav-bar sticky-top-xl bg-white shadow-sm w-100 p-3">
        <div class="row">
            <div class="col-md-5">
                <div class="input-group mb-0">
                    <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Book"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text sit border-start-0" id="basic-addon2"><i
                            class="bi bi-search"></i></span>
                </div>
            </div>
            <div class="col-md-7"></div>
            <!-- <div class="col-md-4 text-end">
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
            </div> -->
        </div>
    </div>
    <div class="section-container p-2 p-xl-4">
        <div class="row m-0">

            <?php
                // require_once "_apps.php";
                require_once "_book.php";
                // require_once "_mobile.php";
                // require_once "_book.php";
            ?>


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