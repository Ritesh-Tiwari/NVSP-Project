<?php
$id=$_GET['id'];
// echo $id;
$conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
$sql = "select *from register where Email='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

       ?>




<html>

<head>
    <title>

    </title>
    <link rel="icon" href="Images/eci-icon.ico" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/reg-style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery-3.4.1.min.js"></script>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <style>
        * {
            font-family: sans-serif;
        }
        
        body {
            background-color: rgb(243, 242, 236);
        }
        
        .btn_change_pass,
        .btn_edit_profile,
        .btn_view_profile,
        .update_profile_btn {
            background-color: white;
            color: rgb(243, 13, 193);
            border-style: groove;
            border-color: rgba(6, 76, 109, 0.5);
            height: 100%;
            width: 100%;
            line-height: 100%;
            padding: 10 10 10 10;
            text-align: center;
            margin-bottom: 10;
        }
        
        .btn_edit_profile:hover,
        .btn_change_pass:hover,
        .btn_view_profile:hover,
        .update_profile_btn:hover {
            background-color: rgb(192, 11, 11);
            color: black;
            border-style: groove;
            border-color: rgba(6, 76, 109, 0.5);
            height: 100%;
            width: 100%;
            line-height: 100%;
            padding: 10 10 10 10;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-white  navbar-light">
           <a class='navbar-link' style='margin-left: 2%;' href='nvsp.php?id=<?php echo $id;?>'><span><img src='Images/logo.png'></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
             <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-md-auto font-weight-bolder ">

                    <li class="nav-item p-lg-3  ">
                        <?php echo "<a class='nav-link' href='nvsp.php?id=$id'>Home</a>";?>
                      
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item p-lg-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Service
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item nav-link" href="#">Elector Verification Program</a>
                            <a class="dropdown-item nav-link" href="#">Track Status</a>
                            <a class="dropdown-item nav-link" href="#">Family Tagging</a>
                        </div>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item p-lg-3 dropdown">
                        <img src="Images/login_logo.jpg" width="50px" height="50px" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">

                        </a> -->
                        <div class="dropdown-menu">
                             <?php echo "<a class='dropdown-item nav-link' href='my_profile.php?id=$id'>View Profile</a>";?>
                             <a class="dropdown-item nav-link" href="login.html">LogOut</a>
                          </div>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
   <!--  <div class="row">
        <div class="col-3 text-center mt-3" style="font-size: 14px;">
            <a href="#">Home >
        <a>
            <a href="#">My Profile</a>
        </div>

    </div> -->
    <!-- My profile -->
    <div class="container bg-white mt-3" id="form1" style="border-style: ridge; width: 70%; border-radius: 20px; border-style: none; border-top-style: inset; border-bottom-style: outset;">


        <!--profile form -->
       
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h3>My Profile</h3>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-lg-3"></div>
            <div class="col-lg-3 form-group text-center bg-light">
                <label for="First_Name">First Name :</label>

            </div>
            <div class="col-lg-3 form-group text-center bg-light">
                <input type="text" name="fname" id="fname" value="<?php echo $row['F_Name'];?>" class="form-control" readonly/>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3"></div>
            <div class="col-lg-3 form-group text-center bg-light">
                <label for="Last_Name">Last Name :</label>

            </div>
            <div class="col-lg-3 form-group text-center bg-light">
                <input type="text" name="Last_Name" id="lnfame " value="<?php echo $row['L_Name'];?>" class="form-control " readonly/>
            </div>
        </div>

        <div class="row mt-3 ">
            <div class="col-lg-3 "></div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <label for="mobile_no ">Mobile Number :</label>

            </div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <input type="text " name="mobile_no " id="mobile_no " value="<?php echo $row['Mobile_No'];?>" class="form-control " readonly/>
            </div>
        </div>

        <div class="row mt-3 ">
            <div class="col-lg-3 "></div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <label for="E-mail ">E-mail ID :</label>

            </div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <input type="text " name="E-mail " id="E-mail " value="<?php echo $row['Email'];?>" class="form-control " readonly/>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-lg-3 "></div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <label for="EPIC ">EPIC Number:</label>

            </div>
            <div class="col-lg-3 form-group text-center bg-light ">
                <input type="text " name="epic_no " id="epic_no " value="<?php echo $row['EPIC_Number'];?>" class="form-control " readonly/>
            </div>
          
        </div>
        <div class="row mt-3 ">
            <div class="col-lg-3 "></div>
            <div class="col-lg-3 text-center bg-light ">
                <input type="button" id="edit_profile_btn" value="Edit Profile" class="btn_edit_profile ">
                <script>
                    $(document).ready(function() {
                        // $("#form2").hide();
                        $("#edit_profile_btn").click(function() {
                            $("#form1").hide();
                            $("#form2").show();

                        });
                    });
                    window.onload = function() {
                        $("#form2").hide();
                    }
                </script>
            </div>
            <div class="col-lg-3 text-center bg-light ">
                  <?php echo "<a class='btn_change_pass pt-2 nav-link' href='change_password.php?id=$id'>Change Password</a>";?>
                          
                <!-- <input type="button" onclick="window.location.href = 'change_password.html';" value="Change Password" class="btn_change_pass "> -->
            </div>
            <!-- <div class="col-lg-3 mt-5 "></div> -->

        </div>

    </div>
    <!-- edit my profile -->
    <div class="container bg-white mt-3" id="form2" style="border-style: ridge; border-radius: 20px;">

        <div class="row">
            <div class="col-12 text-center mt-3">
                <h3>Edit Profile</h3>
            </div>

        </div>
        <div class="row mt-3 ">
            <div class="col-lg-10 "></div>
            <div class="col-lg-2 text-center bg-light ">
                <input type="button" id="view_profile_btn" value="View Profile" class="btn_view_profile ">
                <script>
                    $(document).ready(function() {
                        $("#view_profile_btn").click(function() {
                            $("#form2").hide();
                            $("#form1").show();
                        });
                    });
                </script>
            </div>
        </div>
        <form action="update_profile.php" name="edit_profile_form" method="POST">
            <div class="row mt-3">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 form-group text-center bg-light">
                    <label for="First_Name">First Name :</label>

                </div>
                <div class="col-lg-4 form-group text-center bg-light">
                    <input type="text" name="fname2" id="fname2" value="<?php echo $row['F_Name'];?>" class="form-control" autocomplete="off" />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 form-group text-center bg-light">
                    <label for="Last_Name">Last Name :</label>

                </div>
                <div class="col-lg-4 form-group text-center bg-light">
                    <input type="text" name="Last_Name2" id="lname2 " value="<?php echo $row['L_Name'];?>" class="form-control " autocomplete="off" />
                </div>
            </div>

            <div class="row mt-3 ">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <label for="mobile_no ">Mobile Number :</label>

                </div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <input type="text " name="mobile_no2" id="mobile_no2 " onkeyup="return mobile_validation()" value="<?php echo $row['Mobile_No'];?>" class="form-control " autocomplete="off" />
                    <span id="mobile_val" class="text-center text-danger"></span>
                </div>
            </div>

            <div class="row mt-3 ">
                <div class="col-lg-2 "></div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <label for="E-mail ">E-mail ID :</label>

                </div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <input type="email " name="E-mail2" id="E-mail2 " onblur="return email_validate()" value="<?php echo $row['Email'];?>" class="form-control " autocomplete="off" />
                    <span id="email_val" class="text-danger text-center"></span>
                </div>
            </div>
            
            <div class="row mt-3 ">
                <div class="col-lg-2 "></div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <label for="EPIC ">EPIC Number:</label>

                </div>
                <div class="col-lg-4 form-group text-center bg-light ">
                    <input type="text " name="epic_no2" id="epic_no2 " value="<?php echo $row['EPIC_Number'];?>" class="form-control " autocomplete="off" />
                   <input type="hidden" id="custId" name="hidden" value="<?php echo $id;?>">
                </div>
            </div>

                 <?php   } } else {echo "Records not found";} mysqli_close($conn); ?>
            <div class="row mt-3 ">
                <div class="col-lg-6 "></div>
                <div class="col-lg-4 text-center bg-light ">
                    <input type="submit" value="Update Profile" class="update_profile_btn ">
                </div>
                <!-- <div class="col-lg-3 mt-5 "></div> -->

            </div>
    </div>

    </form>


    </div>





    <footer class="container-fluid mt-3 " style="background-color: rgb(12, 89, 109); width: 100%; ">
        <div class="row ">
            <div class="col-lg-7 col-sm-12 ">
                <div class="text-white text-capitalize pt-3 ">
                    <h2>contact us</h2>
                </div>
                <div>
                    <p class="text-light pt-3 ">For details of eligibility criteria or any other additional information related to electoral forms, kindly visit<a href="# "> https://eci.gov.in</a></p>
                </div>
                <div>
                    <p class="text-light ">For any other technical feedback or issues on the portal kindly send your feedback to ECI Technical Support Toll free Number :1800111950</p>
                </div>
            </div>
            <div class=" col-lg-5 col-sm-12 ">
                <div class="text-white text-capitalize pt-lg-3 ">
                    <h2>Other Links</h2>
                </div>
                <div class="text-capitalize font-weight-bold pt-3 ">
                    <a class="text-white " href="# ">Election Commission of India</a>
                </div>
                <div class="text-capitalize font-weight-bold pt-3 ">
                    <a class="text-white " href="# ">Chief Electoral Officer</a>
                </div>
            </div>
            <div class="col-12 text-center text-white ">
                <hr class="bg-light ">
                <p>National Voter's Service Portal © Copyright 2019. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


</body>
<script>
    // $(document).ready(function() {
    //     $("#edit_profile_btn ").click(function() {
    //         $(".form1 ").hide();
    //         // $("#form1 ").show();
    //     });
    //     // $("#radio2 ").click(function() {
    //     //     $("#form1 ").hide();
    //     //     $("#form2 ").show();
    //     // });
    // });
</script>
<script>
        // xxxxxxxxxxxx validation codes  xxxxxxxxxxxxx
        function email_validate() {

            var email = document.getElementById("E-mail2 ").value.toString();
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            // alert(email);
            if (email.length == 0) {
                document.getElementById("email_val").innerHTML = "** please fill the E-mail ID....";
                return false;
            } else if (reg.test(email) == false) {
                document.getElementById("email_val").innerHTML = "Invalid Email Address...";
                return false;
            } else {
                document.getElementById("email_val").style.display = "none";
                return true;
            }
            return true;
        }
        function mobile_validation{
            var no = document.getElementById("mobile_no2").value.toString();
            if(no.length==0){
                document.getElementById("mobile_val").innerHTML = "** please fill the mobile Number....";
                return false; 
            }else if(no.lenght!=10){
                document.getElementById("mobile_val").innerHTML = "** Phone number must be 10 digits. ....";
                return false;
            }else if (charCode > 31 && (charCode < 48 || charCode > 57)) {                    
                document.getElementById("mobile_val").innerHTML = "**Please enter only Numbers.";
             return false;
             }else{
                document.getElementById("mobile_val").style.display = "none";
                return true;
             }
 return true;
        }
          
        
  </script>
</html>