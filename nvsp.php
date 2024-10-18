<?php

$id=$_GET['id'];
// echo $id;

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
        
        h4 {
            position: absolute;
            top: 20%;
            left: 30px;
            color: white;
            font-size: 25px;
            width: 300px;
        }
        
        #know_your {
            position: absolute;
            top: 40%;
            left: 30px;
            color: white;
            font-size: 18px;
            width: 300px;
        }
        
        .thumbnail {
            border-radius: 2%;
        }
        
        .images1:hover {
            width: 105%;
            height: 105%;
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
                        </img>
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
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-12">

                <div class="ml-lg-5 mt-5 font-weight-bold " style="font-size: 13px; font-family: sans-serif; ">
                    <div class="p-1 p-sm-1 font-weight-bolder " style="background-color: rgb(233, 3, 3,0.8); ">
                        <p class=" text-center " style="color: whitesmoke;">Login/Register to Avail following Facilities</p>
                    </div>
                    <div class=" p-3 p-sm-3  bg-light text-dark ">
                        <a style="color: black; " href=" # ">Registration for new elector</a>

                    </div>
                    <div class=" p-3 p-sm-3 bg-white text-dark ">
                        <a style="color: black; " href="# "> Registration of overseas elector</a>
                    </div>
                    <div class="p-3 p-sm-3 bg-light text-dark ">
                        <a style="color: black; " href="# ">Deletion or Objection in Electoral Roll</a>

                    </div>
                    <div class="p-3 p-sm-3 bg-white text-dark ">
                        <a style="color: black; " href="# ">Correction of Entries</a>

                    </div>
                    <div class=" p-3 p-sm-3 bg-light text-dark ">
                        <a style="color: black; " href="# ">Transposition within AC</a>
                    </div>
                    <div class="p-3 p-sm-3 bg-white text-dark ">
                        <a style="color: black; " href="# "> Migration to another AC</a>
                    </div>
                    <div class=" p-3 p-sm-3 text-center " style="background-color: rgba(17, 31, 224,0.8); ">
                        <a style="color:whitesmoke; " href="login.html "> Login/Register</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 col-sm-12 pt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 mt-sm-3">
                            <div class="thumbnail bg-info">
                                <a href="#" target="_blank">
                                    <img src="Images/banner3.png" class="images1" style="margin-left: -25%;">
                                </a>
                                <h4> Electors Verification Program</h4>
                            </div>
                        </div>

                        <div class="col-md-4 mt-sm-3">
                            <div class="thumbnail bg-warning">
                                <a href="#" target="_blank">
                                    <img src="Images/banner1.png" class="images1" style="margin-left: -25%;">

                                </a>
                                <h4> Search in <br>Electoral <br>Roll</h4>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-3">
                            <div class="thumbnail bg-info">
                                <a href="#" target="_blank">
                                    <img src="Images/banner3.png" class="images1" style="margin-left: -25%;">

                                </a>
                                <h4> Forms</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid ">
                    <div class=" row ">
                        <div class="col-md-4  mt-sm-3">
                            <div class="thumbnail bg-success">
                                <a href="#" target="_blank">
                                    <img src="Images/banner2.png " class="images1" style="margin-left: -25%;" />

                                </a>
                                <h4> Track Application<br> Status</h4>
                            </div>
                        </div>
                        <div class=" col-md-4 mt-sm-3">
                            <div class="thumbnail bg-primary ">
                                <a href="#" target="_blank">
                                    <img src="Images/banner5.png " class="images1" style="margin-left: -25%;" />
                                </a>
                                <h4>Download Electoral <br>Roll PDF</h4>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-3">
                            <div class="thumbnail bg-dark">
                                <a href="#" target="_blank">
                                    <img src="Images/banner4.png " class="images1" style="margin-left: -25%;" />
                                </a>
                                <h4>Know Your</h4>
                                <br>
                                <ul id="know_your">
                                    <li>Assembly/Parliamentary Constituency Details</li>
                                    <li>BLO/Electoral Officers Details</li>
                                    <li>Political Party Representative</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <footer class="container-fluid mt-2 " style="background-color: rgb(12, 89, 109); width: 100%; ">
        <div class="row">

            <div class="col-sm-12">
                <h2 class="text-center text-white" style="font-size:22px">Other Important</h2>

                <a href="https://eci.gov.in/" class="btn_link" target="_blank">
                  Link to States/UT CEO's
                </a>
                <a href="https://ecisveep.nic.in/" class="btn_link">
                     Voter Education
                </a>
                <a href="https://eci.gov.in/files/category/125-poll-process/ " class="btn_link " target="_blank ">
                    Polling Process
                </a>
                <a href="https://eci.gov.in/evm/ " class="btn_link " target="_blank ">
                  EVM Machine
                </a>
                <a href="https://eci.gov.in/contact-us/ngsp/national-grievance-services-portal-r3/ " class="btn_link " target="_blank ">
                    Complains &amp; Suggestions
                </a>
            </div>
        </div>


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

</html>