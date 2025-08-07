<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/logo only.png" type="image/x-icon">
    <title>HireSpot | About</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <script>
        function addEducationField() {
            var container = document.getElementById("educationContainer");

            // Create new div for the education information
            var newDiv = document.createElement("div");
            newDiv.classList.add("input-group", "mb-3");

            // Create institute input field
            var instituteSpan = document.createElement("span");
            instituteSpan.classList.add("input-group-text");
            instituteSpan.textContent = "Institute";

            var instituteInput = document.createElement("input");
            instituteInput.type = "text";
            instituteInput.classList.add("form-control");
            instituteInput.setAttribute("aria-label", "Sizing example input");
            instituteInput.setAttribute("aria-describedby", "inputGroup-sizing-default");

            // Append institute elements to the new div
            newDiv.appendChild(instituteSpan);
            newDiv.appendChild(instituteInput);

            // Create education level input field
            var levelSpan = document.createElement("span");
            levelSpan.classList.add("input-group-text");
            levelSpan.textContent = "Edu. Level";

            var levelInput = document.createElement("input");
            levelInput.type = "text";
            levelInput.classList.add("form-control");
            levelInput.setAttribute("aria-label", "Sizing example input");
            levelInput.setAttribute("aria-describedby", "inputGroup-sizing-sm");

            // Create a new div for the education level input field
            var levelDiv = document.createElement("div");
            levelDiv.classList.add("input-group", "input-group-sm", "mb-3");
            levelDiv.appendChild(levelSpan);
            levelDiv.appendChild(levelInput);

            // Append the education level div to the main div
            newDiv.appendChild(levelDiv);

            // Append the new div to the container
            container.appendChild(newDiv);
        }
    </script> -->
</head>

<body>
    <style>
        body {
            background-color: #F1F0F0;
            overflow-x: hidden;
        }

        .fs-0 {
            font-size: 4rem;
        }

        .fs-7 {
            font-size: 0.8rem;
        }

        .bg-darkgray {
            background-color: #D9D9D9 !important;
        }
    </style>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">

            <a class="navbar-brand " href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot" /></a>

            <!--profile-->
            <div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/userDefault.jpg" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                        <span class="fs-4">Log in as</span>
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="./pages/Login.php">Job seeker</a></li>
                        <li><a class="dropdown-item" href="./pages/LoginCompany.php">Company</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!--slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid w-100 " src="./img/bg.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left" tyle="color: blue;">
                        <h1><img class="img-fluid mt-3" src="img/logo.png" height="400px" alt="HireSpot" /></h1>
                        <h1 class="text-dark">Empowering Your Career Journey</h1>
                        <a class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" href="./pages/Login.php" role="button">Sign up today</a>
                        <!-- create from modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="">
                                            <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                sing up
                                            </h1>
                                            <span class="text-muted fs-7">Join with us to discover somehting</span>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="#" method = "POST">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="" id="" class="form-control" placeholder="first name" />
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" id="" class="form-control" placeholder="last name" />
                                                </div>
                                            </div>

                                            <input type="text" name="" class="form-control my-3" placeholder="Username" id="" />
                                            <input type="email" name="" class="form-control my-3" placeholder="Email" id="" />

                                            <input type="tel" name="" class="form-control my-3" placeholder="Phone No" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="" />

                                            <input type="password" name="" class="form-control my-3" placeholder="password" id="" />

                                            <input type="text" name="" class="form-control my-3" placeholder="Address" id="" />

                                            <input type="text" name="" class="form-control my-3" placeholder="Education" id="" />


                                         


                                            <textarea class="form-control my-3" id="description" name="description" placeholder="About me" oninput="countWords()" maxlength="200"></textarea>


                                            <div class="row my-3">
                                                <span class="text-muted fs-7">
                                                    Date of Birth
                                                    <i type="button" class="fa-solid fa-calendar-days" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover"></i>
                                                </span>
                                                <div class="col">
                                                    <select name="" id="" class="form-select">
                                                        <?php
                                                        $startYear = 1950;
                                                        $endYear = 2022;

                                                        for ($i = 1; $i <= 72; $i++) {
                                                            $year = $startYear + $i - 1;
                                                            echo '<option value="' . $i . '">' . $year . '</option><br>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="" id="" class="form-select">
                                                        <option value="1">January</option><br>
                                                        <option value="2">February</option><br>
                                                        <option value="3">March</option><br>
                                                        <option value="4">April</option><br>
                                                        <option value="5">May</option><br>
                                                        <option value="6">June</option><br>
                                                        <option value="7">July</option><br>
                                                        <option value="8">August</option><br>
                                                        <option value="9">September</option><br>
                                                        <option value="10">October</option><br>
                                                        <option value="11">Novermber</option><br>
                                                        <option value="12">December</option><br>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="" id="" class="form-select">
                                                        <?php
                                                        for ($i = 1; $i <= 31; $i++) {
                                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row my-3 jus">
                                                <span class="text-muted fs-7">
                                                    Gender
                                                    <i type="button" class="fa-solid fa-venus-mars" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover"></i>
                                                </span>
                                                <div class="col">
    <div class="mb-3">
        <label for="flexRadioDefault1" class="form-check-label">Male</label>
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" checked />
    </div>
</div>
<div class="col">
    <div class="mb-3">
        <label for="flexRadioDefault2" class="form-check-label">Female</label>
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" />
    </div>
</div>

                                                <div class="col">
                                                    <div class="">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            Custom
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-none" id="selectGender">
    <select class="form-select">
        <option value="1">one</option>
        <option value="2">two</option>
        <option value="3">three</option>
    </select>
    <div class="my-3">
        <span class="text-muted">Your pronoun is visible to everyone.</span>
        <input type="text" class="form-control" placeholder="Gender (optional)" />
    </div>
</div>

<div>
    <span class="text-muted fs-7">Press the button below to create a new account</span>
</div>
<div class="text-center">
<input type="submit" value="Sign up" class="btn btn-outline-primary my-3">

</div>

<!-- Marketing Section -->
<div class="container marketing p-3">
    <div class="row mt-4">
        <div class="col-lg-4 text-center">
            <img class="rounded mb-2" src="./img/search.png" alt="Find Job" width="140" height="140">
            <h2>Find Your Job Easier</h2>
            <p>At Hirespot, we understand that finding the right job can be a challenging process...</p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="rounded mb-2" src="./img/sign-language.png" alt="Easy Application" width="140" height="140">
            <h2>Easy Application Process</h2>
            <p>Applying for jobs shouldn't be a time-consuming process...</p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="rounded mb-2" src="./img/shield.png" alt="Trust and Security" width="140" height="140">
            <h2>Trust and Security</h2>
            <p>We understand that your trust and security are of utmost importance...</p>
        </div>
    </div>

    <!-- Featurettes -->
    <div class="row featurette my-3 pt-5">
        <div class="col-md-7 d-flex align-items-center justify-content-center">
            <div>
                <h2 class="featurette-heading">Our Story: <span class="text-muted">Driven by Passion and Purpose.</span></h2>
                <p class="lead">Hirespot was born out of a passion for connecting talented individuals with life-changing career opportunities...</p>
            </div>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://img.freepik.com/free-vector/modern-resume-template_23-2147836674.jpg" alt="Our Story" style="width: 500px; height: 500px;">
        </div>
    </div>

    <div class="row featurette my-3">
        <div class="col-md-7 order-md-2 d-flex align-items-center justify-content-center">
            <div>
                <h2 class="featurette-heading">Our Vision: <span class="text-muted">Shaping the Future of Work.</span></h2>
                <p class="lead">We envision a future where finding the perfect job is a seamless and empowering experience for everyone...</p>
            </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://img.freepik.com/free-vector/business-background-design_1200-89.jpg" alt="Our Vision" style="width: 500px; height: 500px;">
        </div>
    </div>

    <div class="row featurette my-3">
        <div class="col-md-7 d-flex align-items-center justify-content-center">
            <div>
                <h2 class="featurette-heading">Our Values: <span class="text-muted">Transparency, Inclusivity, and Integrity.</span></h2>
                <p class="lead">We uphold the highest standards of transparency, inclusivity, and integrity...</p>
            </div>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://img.freepik.com/free-vector/choice-worker-concept_23-2148632123.jpg" alt="Our Values" style="width: 500px; height: 500px;">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-white p-4 text-muted">
    <div class="container">
        <!-- Footer content goes here -->
    </div>
</footer>

            <!-- action -->
            <hr />
            <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
                <!--quick link-->
                <p class="mb-0 fs-7 ">
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                    <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                </p>
                <!--copyrights-->
                <div class="d-flex">
                    <a class=" " href="#"><img src="img/logo.png" width="58px" height="16px" alt="HireSpot" class="mb-2" /></a>
                    <p class="fs-7">&copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>

</html>