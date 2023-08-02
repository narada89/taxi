<?php
include "../library/header.php";


?>



<?php include "../library/navbar.php"; ?>
<div class="container  main-Window bg-white pt-3">
    <div class="row  ">
        <!-- filetr section  start-->
        <div class="col-sm-4 col-lg-3 filter-section ">
            <!-- filetr section  end-->
            <h2>Filter your result</h2>
            <hr>
            <p class pb-2>Sort By</p>
            <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Vehicle Type</option>
                <option value="1">Car</option>
                <option value="2">Van</option>
                <option value="3">Lorry</option>
                <option value="3">Bus</option>
                <option value="3">Thre wheeler</option>
            </select>

            <hr>
            <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Driver Type</option>
                <option value="1">With Driver</option>
                <option value="2">Self Driving</option>

            </select>
            <hr>
            <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Package Type</option>
                <option value="1">Airport</option>
                <option value="2">Wedding </option>
                <option value="2">Clasic Car </option>
            </select>

        </div>

        <!-- Manin section start -->
        <div class="col-sm-8 col-lg-9  main-section  ">
            <h2>Vehicles</h2>
            <hr>
            <!-- Image section start -->
            <div class="container border border-warning ">
                <div class="row">
                    <div class="col-sm-4 ">
                        <img src="../assets/car.jpg" class=" m-2 img-fluid image-section" alt="">
                    </div>
                    <!-- Image section end -->

                    <!-- details section start -->
                    <div class="col-sm-8">

                    </div>
                    <!-- details section end -->
                </div>
            </div>

        </div>



    </div>
    <!-- Manin section end -->

</div>


<?php

?>