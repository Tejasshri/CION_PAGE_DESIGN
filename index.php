<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- <meta http-equiv="refresh" content="200"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        CION CANCERS
    </title>
    <link rel="stylesheet" href="./components/styles.css">
    <link rel="stylesheet" href="./components/styles1.css">
    <script src="./components/index.js" defer></script>
</head>

<body>
    <div class='d-flex flex-column min-vh-100' id="container">
        <?php include "./components/header.php" ?>
        <div class='flex-grow align-self-center ' style='flex-grow:1;'>
            <div class='banner-and-form d-flex justify-content-between align-items-center p-3'>
                <section class="banner-left-section" id="#form1">
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
                <form class="form laptop-form bg-light rounded border-0 d-none d-md-flex flex-column align-items-center bg-light ms-3">
                    <h1 class="text-center my-2 text-dark " style="color: #a65fa2;">
                        Book Your Pet Scan Now !
                    </h1>
                    <input placeholder="Name" name='name' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2">
                    <input placeholder="Phone No" name='number' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2">
                    <select name='city' type="text" class="border-0 px-2 bg-white h-[40px] rounded bg-gray-200 my-2" id="scanElement">
                        <option value="Select type of scan">Select type of scan</option>
                        <?php
                        $typesData = array(
                            array("text" => "Whole Body Analog Pet CT scan", "price" => "20000,", "discountPrice" => "14999"),
                            array("text" => "Whole Body Digital Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                            array("text" => "PSMA Pet CT Scan", "price" => "35000", "discountPrice" => "31000"),
                            array("text" => "Fdopa Pet CT Scan", "price" => "35000,", "discountPrice" => "31999"),
                            array("text" => "Dotatate Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                            array("text" => "Dotanoc Pet CT Scan", "price" => "20000,", "discountPrice" => "14999"),
                        );

                        foreach ($typesData as $optionData) {
                            echo "<option value='{$optionData['text']}'>{$optionData['text']}</option>";
                        }

                        ?>
                    </select>
                    <button style="background-color: #a65fa2;" class="border-0 fs-bold text-white px-3 py-1 my-2">
                        BOOK NOW
                    </button>
                </form>
            </div>
            <form class="form mobile-form bg-light rounded border-0 p-3 d-flex d-md-none  flex-column align-items-center bg-light">
                <h1 class="text-center my-2" style="color: #a65fa2;">
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
            <div class="d-flex flex-row justify-content-center flex-wrap flex-md-nowrap  my-3">
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <span class="align-self-center">Upto 40% Discount</span>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <span class="align-self-center">Same Day Report</span>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <span class="align-self-center">100% Accuracy Assured</span>
                </div>
                <div class='card1'>
                    <img src="./assets/img1.png" alt="">
                    <span class="align-self-center">Free Doctor Consultation</span>
                </div>
            </div>
            <div class='text-center py-3' style='background: rgb(240, 208,221);'>
                <h2 class="fw-bold my-3 title">
                    Types of scans we do
                </h2>
                <div class="d-flex flex-row justify-content-center align-items-center flex-wrap">
                    <?php

                    foreach ($typesData as $typesCardData) {
                        echo "<div class='types-card mt-2 bg-light pt-2 rounded d-flex flex-column justify-content-center align-items-center'>
                                <h2>{$typesCardData['text']}</h2>
                                <div class='flex-grow-1 border-2 border-bottom-primary d-flex flex-row align-items-center mt-3'>
                                    <p style='text-decoration: line-through;'>RS 20000/-</p>
                                    <p>RS 14999</p>
                                </div>
                                <hr class='hr-line' />
                                <button style='background-color: #802A8F;' class='my-2 border-0 text-white' onclick='onClickScan(event)' data-text='{$typesCardData['text']}' >
                                    Book Now
                                </button>
                            </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="d-flex flex-md-row justify-content-center justify-content-md-start align-items-center p-3 text-white mb-2" style="background-color: #a65fa2;">
                <img class="doctor-image" src="./assets/img5.png" alt="">
                <div class="ms-3 d-md-flex ms-md-3 flex-md-grow-1 justify-content-md-between align-items-md-center  ">
                    <p class="text-md-start para">
                        Don’t have a prescription?
                        Consult Our Oncologist FREE now!  
                    </p>
                    <button class="btn myBtn book-btn btn-outline-primary bg-light" style="color: var(--clr1);">
                        Book Appointment
                    </button>
                </div>
            </div>
            <div class="reviews-section d-flex flex-column">
                <h1 class="title align-self-center">
                    Testimonial
                </h1>
                <div class="reviews-card-container flex-wrap  d-flex justify-content-md-around align-self-center align-self-md-stretch">

                    <div class="review-card d-none d-md-flex flex-column">
                        <p><strong style="font-weight: 400;">
                                "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                            </strong> </p>
                        <hr />
                        <div class="p-2 d-flex justify-content-between ">
                            <h3 class="review-person">
                                Priya K.
                            </h3>
                            <div class="rating-container">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                                <img src="./assets/Star.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="review-card d-none d-md-flex flex-column">
                        <p>
                            <strong style="font-weight: 400;">
                                "Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -
                            </strong>
                        </p>
                        <hr />
                        <div class="p-2 d-flex justify-content-between align-items-center  ">
                            <h3 class="review-person">
                                Priya K.
                            </h3>
                            <div class="rating-container">
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
                                <div class="review-card p-2">
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
                                <div class="review-card p-2">
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
                                <div class="review-card p-2">
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
            <div class="my-4 guidelines-section">
                <h2 class="text-center my-3 title">
                    Guidelines for PET-CT scans
                </h2>
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
            <div class="d-flex flex-wrap location-container py-3 ps-3">
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3">
                    <img src="./assets/locationIcon.png" alt="">
                    Jubilee Hills
                </div>
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3">
                    <img src="./assets/locationIcon.png" alt="">
                    Narayanguda
                </div>
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3">
                    <img src="./assets/locationIcon.png" alt="">
                    Punjagutta
                </div>
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3">
                    <img src="./assets/locationIcon.png" alt="">
                    Himayathnagar
                </div>
            </div>

            <div class="understanding-ct-scan-container p-3 p-md-5">
                <h2 class="text-center fw-bold my-3 title">
                    Understanding PET-CT Scans: Importance, Need, and Cost in India
                </h2>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start  understanding-ct-scan-card-container">
                    <img class="" src="./assets/video.png" alt="">
                    <div class="border border-bottom-dark flex-grow-1 align-self-md-stretch ms-md-3 mt-3 mt-md-0 " style="width: 90%;">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" style="font-weight: 600;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is PET Scan
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging.
                                        The tracer is used which can be swallows, injected or inhaled. PET is a combination of
                                        CT technique with PET scanner that works together to pr the human
                                        body which enables the healthcare worker to plan the process of cancer treatment further.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why you need PET Scan
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How much PET Scan cost in India?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center pt-3" style="background-color: var(--clr2);">
                <h2 class="text-center title">
                    Our services
                </h2>
                <div class="d-flex flex-row justify-content-between  flex-wrap p-3">
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon1.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Cancer Surgeries</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon2.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Chemotherapy</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon3.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Immunotherapy</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon3.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Radiation Oncology</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon1.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Biopsy</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon2.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Breast & Oral Screenings</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon3.png" height="80" alt="">
                        <h5 class="mt-2 card-title">MRI Scans</h5>
                    </div>
                    <div class="our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center">
                        <img src="./assets/imgicon3.png" height="80" alt="">
                        <h5 class="mt-2 card-title">Bons scans</h5>
                    </div>
                </div>
            </div>

            <div class="faq-container d-flex flex-column align-items-center pt-3">
                <h1 class="title">
                    FAQs
                </h1>
                <div class="faq-inner-container align-self-stretch d-flex flex-wrap">
                    <?php
                    $myLs = array(
                        array("id" => 1, "title" => "What's the average cost of a PET CT scan in Vizag?", "text" => "The average cost of a PET CT scan in Vizag typically ranges between 20,000 to 30,000 rupees. However, at Cion, we are committed to making cancer diagnostics and treatment both accessible and affordable. That's why we offer it at a special price of just 15,000 rupees."),
                        array("id" => 2, "title" => "Where can I get a pet scan in vizag ?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 3, "title" => "How much does a PET scan cost in vizag?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 4, "title" => "Is there a Whole Body PET CT option?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 5, "title" => "Are there PET scan facilities near me?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 6, "title" => "Where can I get a pet scan in vizag ?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                    );

                    foreach ($myLs as $data) :
                        // for ($i = 0; $i < 8; $i++) :
                    ?>
                        <div class="accordion my-2" id="accordionExample<?php echo $data['id']; ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo<?php echo $data['id']; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <?php echo $data['title']; ?>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo<?php echo $data['id']; ?>" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <code><?php echo $data['text']; ?></code>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
        <!-- <?php include "./components/footer.php" ?> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>