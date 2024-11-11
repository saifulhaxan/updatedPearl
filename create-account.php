<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom_style.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.7.5/css/foundation.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Fullpage.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.19/fullpage.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .subHead p {
            text-align: center;
            color: #a19e9e !important;
            font-size: 16px !important;
        }



        .transparent-select option {
            background-color: transparent;
            /* Transparent background for options */
            color: #000;
            /* Text color for options */
        }

        .prevBtnIcon {
            position: absolute;
            left: 0;
        }

        .prevBtnIcon button {
            /* position: absolute; */
            color: #fff;
        }

        .step {
            position: relative;
        }
    </style>
</head>

<body>
    <section class="broker">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="registrationForm">

                        <div class="registrationBody pr-4">
                            <form id="multiStepForm">
                                <div class="step">
                                    <div class="headerRegistration text-center">
                                        <div class="iconBox">
                                            <i class="fa fa-file"></i>
                                        </div>
                                        <div class="titleBox">
                                            <h1>Registration</h1>
                                        </div>

                                    </div>
                                    <div class="subHead">
                                        <p>Personal details</p>
                                    </div>
                                    <div class="mt-5">
                                        <div class="form-group mb-3">
                                            <label class="labelData">Company Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Registration Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">EIN</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Number of the corporation agreement</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <select class="form-control transparent-select" id="exampleFormControlSelect1">
                                            <option>License Type</option>
                                            <option>DED</option>
                                            <option>Free Zone</option>
                                            <option>LLC</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                        <div class="sendCode">
                                            <button type="button" class="btn w-100 nextBtn">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="step" style="display:none;">
                                    <div class="prevBtnIcon">
                                        <button type="button" class="btn w-100 prevBtn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="headerRegistration text-center">
                                        <div class="iconBox">
                                            <i class="fa fa-file"></i>
                                        </div>
                                        <div class="titleBox">
                                            <h1>Registration</h1>
                                        </div>

                                    </div>
                                    <div class="subHead">
                                        <p>Company details</p>
                                    </div>
                                    <p class="text-center">The company must be registered, <span class="d-md-block">please contact Mered Sales Department</span></p>
                                    <div class="form-group">
                                        <select class="form-control transparent-select" id="manager">
                                            <option>Select PearlShire Manager</option>
                                            <option>Company 2</option>
                                            <option>Company 3</option>
                                            <option>Company 4</option>
                                            <option>Company 5</option>
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <div class="form-group mb-3">
                                            <label class="labelData">Surname</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="labelData">Birth Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="sendCode">
                                            <button type="button" class="btn w-100 nextBtn">Send Code</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll(".step");
            let currentStep = 0;

            const showStep = (stepIndex) => {
                steps.forEach((step, index) => {
                    step.style.display = index === stepIndex ? "block" : "none";
                });
            };

            document.querySelectorAll(".nextBtn").forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });
            });

            document.querySelectorAll(".prevBtn").forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentStep > 0) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });
            });

            // Show the first step initially
            showStep(currentStep);
        });
    </script>
</body>

</html>