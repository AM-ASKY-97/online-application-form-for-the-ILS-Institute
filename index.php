<!doctype html>
<html lang="en">
  <head>
    <title>Institute of Language Studies (ILS)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Css link-->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
  <body style="background-color: #6a46bc;">
      
     <div class="container mt-2 mb-2 border border-dark rounded bg-light">
         <div class="row mt-3">
              <!--logo-->
              <div class="col-md-2 d-none d-lg-block">
                  <img src="Najeem HETC.png" alt="" width="220px" height="270px" >
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
                  <div class="photo">Affix here a Passport Size Photo</div>
              </div>
        
        </div>

        <div class="row">
            <div class="col">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
        </div>


        <form action="form.php" method="post" autocomplete="off">

            <div class="form-qroup">
                <div class="row mt-3 font-weight-bold">
                    <div class="col-md-4">
                        <label for="Course" class="">Admission To the Course of Study</label>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="english" value="DIPLOMA IN SPOKEN ENGLISH" id="english" >
                                    <label class="form-check-label" for="english">
                                        DIPLOMA IN SPOKEN ENGLISH
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sinhala" value="DIPLOMA IN SPOKEN SINHALA" id="sinhala">
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

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="initial">1. Name with Initials</label>
                    </div>

                    <div class="col-md-8"> 
                        <input type="text" class="form-control" id="initial" name="fname" placeholder="Name with Initials" Required>
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="Name">2. Name/Names denoted by Initials</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="Name" name="iname" placeholder="Name/Names denoted by Initials" Required>
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">3. Address</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" Required>
                    </div>
                </div> 
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">4. Date of Birth</label>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" class="form-control"  name="year" placeholder="Year" Required maxlength="4">
                            </div>

                            <div class="col-4">
                                <input type="text" class="form-control" name="month"  placeholder="Month" Required maxlength="2">
                            </div>

                            <div class="col-4">
                                <input type="text" class="form-control"  name="day" placeholder="Day" Required maxlength="2">
                            </div>
                            
                        </div>
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="nic">5. National Identity Card No</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nic" name="nic" placeholder="National Identity Card No" maxlength="12">
                    </div>
                </div> 
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="nic">6. Sex</label>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-4"><label class="radio-inline"><input type="radio" name="sex" checked value="Male">Male</label></div>
                            <div class="col-4"><label class="radio-inline"><input type="radio" name="sex" value="Female">Female</label></div> 
                        </div>
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="address">7. Contact No</label>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control"  placeholder="Mobile" name="mobile" maxlength="10">
                            </div>

                            <div class="col-6">
                                <input type="text" class="form-control"  placeholder="Whatsapp" name="whatsapp" maxlength="10">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>


            <div class="form-qroup">
                <div class="row mt-3 ">
                    <div class="col-md-4">
                        <label for="Course" class="font-weight-bold">8. Education Qualification</label>
                    </div>
                    <div class="col-md-8">
                        <div class="row">

                        <div class="col-4">
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="X" name="deg" id="degree" >
                                    <label class="form-check-label" for="degree">
                                        Degree
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="X" name="Al" id="gec_al" >
                                    <label class="form-check-label" for="gec_al">
                                        GCE (A/L)
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="X" name="Ol" id="gce-ol">
                                        <label class="form-check-label" for="gce-ol">
                                            GCE (O/L)
                                        </label>
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
                        <label class="col-form-label" for="address"></label>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-2">
                                <label class="col-form-label" for="address">Grade</label>
                            </div>

                            <div class="col-4">
                                <input type="text" class="form-control"  placeholder="grade" name="grade">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="hight">9. Highest Qualification in English as a subject</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="hight" name="high" placeholder="highest Qualification in English as a subject">
                    </div>
                </div> 
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 font-weight-bold">
                        <label class="col-form-label" for="any">10. Details of Occupation (If any) </label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="any" name="occu" placeholder=" Details of Occupation (If any)">
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="col font-weight-bold">
                    <p>I hereby certify that the information furnished here is true and accurate to the best of my knowledge</p>
                </div>
            </div>


            <div class="checkbox font-weight-bold">
                <label><input type="checkbox" Required> The information is all correct</label>
            </div>

            <br>

            <div class="row mb-3 ">
                <div class="col-6 font-weight-bold">
                    <button type="submit" class="btn btn-success  btn-block">Submit</button>
                </div>    

                <div class="col-6">
                    <button type="reset" class="btn btn-danger  btn-block">Reset</button>
                </div>
                
            </div>

        </form>

        <p> <a href="https://web.facebook.com/ILS-Institute"><i class="fab fa-facebook"></i> https://web.facebook.com/ILS-Institute</a></p>

        <!-- Footer -->
	        <div class="row text-center">
                <div class="col bg-dark text-light text-uppercase pt-3">
                    <h6>&#169 Copyright 2021 ILS Institute. All right reserved. |</h6> 
                    <p>Designed By: A.M. Asky</p>
                </div>
            </div>
        <!-- End Footer -->

     </div>   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>