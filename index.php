<!doctype html>
<html lang="en">

<head>
    <title>Institute of Language Studies (ILS)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Assets/bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--Css link-->
    <link rel="stylesheet" href="./Assets/css/style.css">

    <link rel="shortcut icon" href="./Assets/image/favicon.ico" type="image/x-icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <style>
        .error {
            color: red !important;
        }
    </style>
</head>

<body style="background-color: #6a46bc;">

    <div class="container border border-dark rounded bg-light">
        <div class="row mt-3">
            <!--logo-->
            <div class="col-md-2 d-none d-lg-block">
                <img src="./Assets/image/Najeem HETC.png" alt="" width="220px" height="270px">
            </div>

            <!--Application-->
            <div class="col-md-8 text-center ">
                <h1 class="display-5">APPLICATION FORM</h1>

                <h4>S.L. Najeem (SLDS)</h4>
                <p> <i>Trainer of English
                        <br> MBA (Eng.Medium).B.A in Soc. Sci (Eng-Medium). HND in English
                        <br> DSW (Merit). DHRM, DMM, DBM
                        <br> Institute of Language Studies (ILS)
                        <br> Sammanthurai. </i> </p>

                <h5><b>Mobile & Whatsapp : 077-6542915 & 075-7697386</b></h5>
            </div>



            <!--Photo-->
            <div class="col-md-2 d-none d-lg-block">
                <div class="photo">Affix here a Passport <br> Size Photo</div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
        </div>



        <form action="form.php" id="submitForm" method="post" autocomplete="off">

            <div class="form-qroup">
                <div class="row mt-3 font-weight-bold">
                    <div class="col-md-4">
                        <label for="Course" class="">Admission To the Course of Study</label>
                    </div>
                    <div class="col-md-8">
                        <div class="cont">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="course" value="DIPLOMA IN SPOKEN ENGLISH" id="english">
                                            <label class="form-check-label" for="english">
                                                DIPLOMA IN SPOKEN ENGLISH
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="course" value="DIPLOMA IN SPOKEN SINHALA" id="sinhala">
                                            <label class="form-check-label" for="sinhala">
                                                DIPLOMA IN SPOKEN SINHALA
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="initial">Name with Initials</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="initial" name="fname" placeholder="Name with Initials">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="Name">Name denoted by Initials</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="Name" name="iname" placeholder="Name/Names denoted by Initials">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">Address</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="nic">National Identity Card No</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nic" name="nic" placeholder="National Identity Card No">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">Date of Birth</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="dob" id="dob" placeholder="mm / dd / yyyy">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="nic">Gender</label>
                    </div>

                    <div class="col-md-8">
                        <div class="cont">
                            <div class="row">
                                <div class="col-4"><label class="radio-inline"><input type="radio" name="sex" value="Male" id="male">Male</label></div>
                                <div class="col-4"><label class="radio-inline"><input type="radio" name="sex" value="Female" id="female">Female</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">Contact No</label>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                            </div>

                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-qroup">
                <div class="row mt-3 ">
                    <div class="col-md-4">
                        <label for="Course" class="font-weight-bold">Education Qualification</label>
                    </div>
                    <div class="col-md-8">
                        <div class="cont">
                            <div class="row">

                                <div class="col-6 col-xl-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Degree" name="edu" id="degree">
                                            <label class="form-check-label" for="degree">
                                                Degree
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-xl-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Gce (A/L)" name="edu" id="gec_al">
                                            <label class="form-check-label" for="gec_al">
                                                Gce (A/L)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-xl-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Gce (O/L)" name="edu" id="gce-ol">
                                            <label class="form-check-label" for="gce-ol">
                                                Gce (O/L)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-xl-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="other" name="edu" id="other">
                                            <label class="form-check-label" for="other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group" id="textboxes" style="display: none">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">Grade</label>
                    </div>

                    <div class="col-md-8">

                        <input type="text" class="form-control" placeholder="grade" name="ed">

                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="hight">Highest Qualification in English as a subject</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="hight" name="high" placeholder="highest Qualification in English as a subject">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="any">Details of Occupation (If any) </label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="any" name="occu" placeholder=" Details of Occupation (If any)">
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col font-weight-bold">
                    <p>I hereby certify that the information furnished here is true and accurate to the best of my knowledge</p>
                </div>
            </div>


            <!-- <div class="checkbox font-weight-bold">
                <label><input type="checkbox"> The information is all correct</label>
            </div> -->

            <br>

            <div class="row mb-3 ">
                <div class="col-12 col-xl-6 font-weight-bold">
                    <button type="submit" class="btn btn-success  btn-block submit" id="submit"><i class="fa fa-check-circle" aria-hidden="true"></i><span id="pTest"> Submit</span></button>
                </div>

                <div class="col-12 col-xl-6 mt-2 mt-xl-0">
                    <button type="reset" class="btn btn-danger  btn-block"><i class="fa fa-trash-o" aria-hidden="true"></i> Reset</button>
                </div>

            </div>

        </form>

        <p> <a href="https://web.facebook.com/ILS-Institute"><i class="fab fa-facebook"></i> https://web.facebook.com/ILS-Institute</a></p>

        <!-- Footer -->
        <div class="row text-center">
            <div class="col bg-dark text-light p-4">
                <h6 class="pt-2">&#169 Copyright 2021 ILS Institute. All right reserved. Designed By : <a href="http://am-asky97.herokuapp.com/" class="text-light"> Asky AM</a></h6>
            </div>
        </div>
        <!-- End Footer -->

    </div>


    <!-- Optional JavaScript -->
    <script src="my_script.js"></script>
    <script src="./Assets/js/validation/jquery.validate.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="./Assets/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>