<?php
$id=$_GET['id'];
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
         .btn_change_pass {
            background-color: black;
            color: white;
            border-style: groove;
            border-color: rgba(6, 76, 109, 0.5);
            height: 100%;
            width: 100%;
            line-height: 100%;
            padding: 10 10 10 10;
            text-align: center;
            margin-bottom: 10;
        }
        
        
        .btn_change_pass:hover
        {
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

   <!--  <div class="row">
        <div class="col-3 text-center mt-3" style="font-size: 14px;">
            <a href="#">Home > </a>
            <a href="#">My Profile ></a>
            <a href="#">Change Profile ></a>

        </div> -->

    </div>
    <div class="container bg-white mt-3" style="border-style: ridge; border-color: black; width: 45%; min-width: 600px; ">
        <div class="row">

            <div class="col-12 text-center bg-dark">
                <p class=" text-white font-weight-bolder ">Change Password</p>
            </div>
        </div>
        <div class="row">

            <div class="col-12  bg-white">
                <p class=" text-dark " style="font-size: 15px;">* NOTE - Password must contain minimum 6 characters at least 1 Uppercase Alphabet, 1 digit and 1 Special Character</p>
            </div>
        </div>
         <form action="update_password.php" method="POST">
              
        <div class="row mt-3">
            <div class="col-lg-2 col-sm-2"> </div>
            <div class="col-lg-1 col-sm-1" style="float: left; background-color: rgba(225,225,200);" >
                <img src="Images/user_icon.png"  style="width: 150%; height: 100%; margin-left: -5" >
            </div>
            <div class="col-lg-8 col-sm-8 " style="float: right; margin-left: -20" >    
                <input type="text" name="old_pass" placeholder="Old Password" class="form-control"> 
               <input type="hidden" id="custId" name="hidden" value="<?php echo $id;?>">
           </div>
         </div>


         <div class="row mt-5">
            <div class="col-lg-2 col-sm-2"> </div>
            <div class="col-lg-1 col-sm-1" style="float: left; background-color: rgba(225,225,200);" >
                <img src="Images/user_icon.png"  style="width: 150%; height: 100%; margin-left: -5" >
            </div>
            <div class="col-lg-8 col-sm-8 " style="float: right; margin-left: -20" >    
                <input type="text" name="new_pass" id="new_pass" placeholder="New Password" class="form-control">       
           </div>
         </div>
        <div class="row mt-5">
            <div class="col-lg-2 col-sm-2"> </div>
            <div class="col-lg-1 col-sm-1" style="float: left; background-color: rgba(225,225,200);" >
                <img src="Images/user_icon.png"  style="width: 150%; height: 100%; margin-left: -5" >
            </div>
            <div class="col-lg-8 col-sm-8 " style="float: right; margin-left: -20" >    
                <input type="text" name="conf_pass" id="conf_pass" placeholder="Confirm Password" onblur="return val()" class="form-control">  
                <span class="text-center text-dark" id="conf_pass_val"></span>     
           </div>
         </div>
           <div class="row mt-5">
             <div class="col-lg-7 col-sm-7"> </div>
         <div class="col-lg-4 col-sm-4">
              <input type="submit" id="submit" value="Change Password" class="btn_change_pass ">
            
          </div>
        </div>          
</form>
</div>

<script type="text/javascript">
    function val() {
        // body...
    var pass1=document.getElementById('new_pass').value;
    var pass2=document.getElementById('conf_pass').value;
    if(pass1==pass2){
        pass=pass1;
    }
    else{
    alert("check your Confirm Password...");
    }
    }
</script>




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

</html>