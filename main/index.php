<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="refresh" content="200">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        CION CANCERS
    </title>
    <link rel="stylesheet" href="./components/mycss.css">
</head>

<body>
    <div class='d-flex flex-column min-vh-100'>
        <?php include "./components/header.php" ?>
        <div class=' flex-grow' style='flex-grow:1;'>
            <div class='banner-and-form d-flex justify-content-between align-items-center p-3'>
                <section class="banner-left-section">
                    <h1>
                        PET CT SCAN Cost for cancer diagnostic starts at Rs.10999/-
                    </h1>
                    <div class="d-flex section-div d-flex flex-row align-items-center">
                        <img src="./assets/imgs1.png" alt="" width="60" height="60" class="">
                        <p class="ms-3 fs-4 fw-normal text-light">One Free Oncology Consultation</p>
                    </div>
                    <div class="d-flex section-div">
                        <img src="./assets/imgs2.png" alt="" width="60" height="60" class="">
                        <p class="ms-3 fs-4 fw-normal text-light">CION Assured Oncologist Diagnostics
                        </p>
                    </div>
                </section>
                <form class="form form-1 bg-light rounded border-0 p-4 d-none d-md-flex flex-column align-items-center bg-light">
                    <h1 class="text-center my-2 fs-2 fw-bold text-dark " style="color: #a65fa2;">
                        Book Your Pet Scan Now !
                    </h1>
                    <input placeholder="Name" name='name' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2">
                    <input placeholder="Phone No" name='number' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2">
                    <select name='city' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2">
                        <option value="">TYPE 1</option>
                        <option value="">TYPE 2</option>
                    </select>
                    <button style="background-color: #a65fa2;" class="border-0 fs-bold rounded text-white px-3 py-1 my-2">
                        BOOK NOW
                    </button>
                </form>
            </div>
            <form class="form bg-light rounded border-0 p-3 d-flex d-md-none  flex-column align-items-center bg-light">
                <h1 class="text-center my-2 fs-2 font-bold" style="color: #a65fa2;">
                    Book Your Biopsy Test
                </h1>
                <input placeholder="Name" name='name' type="text" class="border-0 px-2 w-75 bg-white h-[40px] rounded bg-gray-200 my-2">
                <input placeholder="Phone No" name='number' type="text" class="border-0 px-2 w-75 bg-white h-[40px] rounded bg-gray-200 my-2">
                <select name='city' type="text" class="border-0 px-2 w-75 bg-white h-[40px] rounded bg-gray-200 my-2">
                    <option value="">TYPE 1</option>
                    <option value="">TYPE 2</option>
                </select>
                <button style="background-color: #a65fa2;" class="border-0 fs-bold h-[35px] rounded text-white px-2 py-1 my-2">
                    BOOK NOW
                </button>
            </form>
            <div class="d-flex flex-row justify-content-around flex-wrap my-3">
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <p class="fw-bold align-self-center" style="font-size: 1.1rem py-0 my-0; ">Upto 40% Discount</p>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <p class="fw-bold align-self-center" style="font-size: 1.1rem py-0 my-0; ">Same Day Report</p>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <p class="fw-bold align-self-center" style="font-size: 1.1rem py-0 my-0; ">100% Accuracy Assured</p>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <p class="fw-bold align-self-center" style="font-size: 1.1rem py-0 my-0; ">Free Doctor Consultation</p>
                </div>
            </div>
            <div class='text-center p-3' style='background: rgb(240, 208,221);'>
                <h1 class="fw-bold fs-2 my-5">
                    Types of scans we do
                </h1>
                <div class="d-flex flex-row justify-content-center align-items-center flex-wrap">
                    <?php
                    $typesData = array(
                        array("text" => "Whole Body Analog Pet CT scan", "price" => "20000,", "discountPrice" => "14999"),
                        array("text" => "Whole Body Digital Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                        array("text" => "PSMA Pet CT Scan", "price" => "35000", "discountPrice" => "31000"),
                        array("text" => "Fdopa Pet CT Scan", "price" => "35000,", "discountPrice" => "31999"),
                        array("text" => "Dotatate Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                        array("text" => "Dotanoc Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                    );

                    foreach ($typesData as $type => $data) {
                        echo "<div class='types-card m-2 bg-light p-3 rounded d-flex flex-column justify-content-center align-items-center'>
                        <h2>Whole body analog pet CT scan</h2>
                        <div class='border-2 border-bottom-primary d-flex flex-row align-items-center'>
                            <p style='text-decoration: line-through;'>RS 20000/-</p>
                            <p>RS 14999</p>
                        </div>
                        <button style='background-color: #802A8F;' class='my-3 fs-4 px-3 py-1 border-0 fw-bold rounded text-white'>
                            Book Now
                        </button>
                    </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="d-flex flex-md-row  align-items-center p-3 text-white mb-2" style="background-color: #a65fa2;">
                <img height="100" src="./assets/img5.png" alt="">
                <div class="ms-3 d-md-flex ms-md-3 flex-md-grow-1 justify-content-md-between ">
                    <p style="max-width: 40%;" class="text-md-start text-md-start">
                        Don’t have a prescription?
                        Consult Our Oncologist FREE now!  
                    </p>
                    <button class="border-0 ms-md-auto px-3 py-md-2 rounded bg-light">
                        Book Appointment
                    </button>
                </div>
            </div>
            <div class="reviews-section d-flex flex-column justify-content-center align-items-center ">
                <h1>
                    Testimonial
                </h1>
                <div class="reviews-card-container d-flex flex-wrap justify-content-center align-items-center  ">
                    <div class="review-card d-none d-md-flex flex-column  m-2 p-2">
                        <p>
                            "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                        </p>
                        <hr />
                        <div class="p-2 d-flex justify-content-between ">
                            <h3>
                                Priya K.
                            </h3>
                            <div>
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="review-card d-none d-md-flex flex-column  m-2 p-2">
                        <p>
                            "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                        </p>
                        <hr />
                        <div class="p-2 d-flex justify-content-between ">
                            <h3>
                                Priya K.
                            </h3>
                            <div>
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="review-card d-none d-md-flex flex-column 
                     m-2 p-2">
                        <p>
                            "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                        </p>
                        <hr />
                        <div class="p-2 d-flex justify-content-between ">
                            <h3>
                                Priya K.
                            </h3>
                            <div>
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide d-md-none">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="review-card m-2 p-2">
                                    <p>
                                        "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                                    </p>
                                    <hr />
                                    <div class="p-2 d-flex justify-content-between ">
                                        <h3>
                                            Priya K.
                                        </h3>
                                        <div>
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review-card m-2 p-2">
                                    <p>
                                        "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                                    </p>
                                    <hr />
                                    <div class="p-2 d-flex justify-content-between ">
                                        <h3>
                                            Subodh
                                        </h3>
                                        <div>
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review-card m-2 p-2">
                                    <p>
                                        "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                                    </p>
                                    <hr />
                                    <div class="p-2 d-flex justify-content-between ">
                                        <h3>
                                            Sai Teja
                                        </h3>
                                        <div>
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                            <img src="./assets/Star.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <h1 class="fs-3 text-center mt-5 mb-4">
                    Guidelines for PET-CT scans
                </h1>
                <div class="guidelines-container d-flex flex-row justify-content-center flex-wrap ">
                    <div class="guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon1.png" height="80" alt="">
                        <h5 class="mt-2 card-title">At least 6 hours of fasting before the scan, but the patient can have plain water.</h5>
                    </div>
                    <div class="guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon2.png" height="80" alt="">
                        <h5 class="mt-2 card-title">You are advised to report one hour before the scheduled time.</h5>
                    </div>
                    <div class="guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon3.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Carry previous PET-CT reports, CDs, medical records, recent serum creatinine and fasting blood sugar reports.</h5>
                    </div>
                </div>

            </div>
            <?php include "./components/more.php" ?>
        </div>
        <?php include "./components/footer.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>