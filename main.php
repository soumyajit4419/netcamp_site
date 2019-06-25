<!DOCTYPE html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- for icons font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Netcamp site</title>

</head>

<body>
    <br><br><br>
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src='logo.jpg' class="img-fluid" style="height:140px;">
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-6 text-center">

                <h4 class=" text-weight-bold " style="font-family:sans-serif;color:black">FOLLOW US:</h4>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-dark  text-center" href="#" target="_blank" title="facebook profile">
                            <i class="fa fa-fw fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-dark text-center " href="#" target="_blank" title="instagram profile">
                            <i class="fa fa-fw fa-instagram"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-outline-dark  text-center " href="#" target="_blank" title="linkedin profile">
                            <i class="fa fa-fw fa-linkedin "></i>
                        </a>
                    </li>

                </ul>
                <div style="font-family:sans-serif;color:black"><i class="fa fa-fw fa-whatsapp "></i> CALL US/WHATS APP:
                    +91 8984468201</div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <!-- Links -->
            <ul class="nav mx-auto nav-tabs" role="tablist">

                <li class="nav-item" >
                    <a class="nav-link" href="#home" data-toggle="tab"><i class="fa fa-home"></i></a>
                </li>


                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        COURSES
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Network Management
                            <hr> </a>
                        <a class="dropdown-item" href="#">Web Devlopment
                            <hr></a>
                        <a class="dropdown-item" href="#">Ethical hacking
                            <hr></a>
                        <a class="dropdown-item" href="#">Android development
                            <hr></a>
                    </div>
                </li>

                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        SUMMER AND WINTER PROGRAM
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">SUMMER CAMP<br>IPEC,GAZIABAD
                            <hr></a>
                        <a class="dropdown-item" href="#">SUMMER CAMP <br> HRIT,GAZIABAD
                            <hr></a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        INCAMPUS PROGRAM
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">IN CAMPUS <br>UCER,ALLAHABAD
                            <hr></a>
                        <a class="dropdown-item" href="#">IN CAMPUS <br>MNNIT,ALLAHABAD
                            <hr></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#regform" data-toggle="tab">REGISTRATION</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        STUDENT CORNER
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#logform" data-toggle="tab">LOGIN
                            <hr></a>
                        <a class="dropdown-item" href="#updte" data-toggle="tab">FORGET PASSWORD
                            <hr></a>
                            <a class="dropdown-item" href="#">DELETE
                                    <hr></a>   
                    </div>
                </li>
              

                <li class="nav-item">
                    <a class="nav-link" href="#about" data-toggle="tab">ABOUT US</a>
                </li>

                <li class="nav-item" data-toggle="tab">
                    <a class="nav-link" href="#" data-toggle="tab">TESTIMONIAL</a>
                </li>
            </ul>
        </div>
    </nav>

   <div class="tab-content">
       <div class="container-fluid  tab-pane active" id="home" >
    <div class="jumbotron ">
        <div class="container">
            <br>
            <div id="demo" class="carousel slide " data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="images/ipec.jpg" class="img-fluid" alt="img1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ipec1.jpg" class="img-fluid" alt="img2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ipec2.jpg" class="img-fluid" alt="img3">
                    </div>

                </div>
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>

                </ul>

                <!-- Left and right controls -->
                <a class="carousel-control-prev " href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
            <br><br>
        </div>
    </div>

    <div class="container">
        <br><br>
        <h2 class="text-center">SUMMER <span style="color:orangered ">TRAINING</span> 2019</h2>
        <hr style="border-color:rgb(122, 39, 9) ">
        <br>
        <div class="card-deck">

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto" src="images/logo1.png" alt="Card image" style="width:50%">
                <div class="card-body">
                    <h4 class="card-title">IPEC,GAZIABAD</h4>
                    <p class="card-text"></p> Network Management & Ethical Hacking with Web Development <br> 12th JUNE
                    -9th JULY <br> 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                </div>
            </div>

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto" src="images/logo1.png" alt="Card image" style="width:50%">
                <div class="card-body">
                    <h4 class="card-title">IPEC,GAZIABAD</h4>
                    <p class="card-text"></p> Android with Core Java <br> 12th JUNE -9th JULY <br> 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                </div>
            </div>

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo2.jpg" alt="Card image"
                    style="width:60%;height:35%;">
                <div class="card-body">
                    <h4 class="card-title">HRIT,GAZIABAD</h4>
                    <p class="card-text"></p> Network Management & Ethical Hacking with Web Development <br> 5th JULY
                    -25th JULY <br> 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a><br><br>
                </div>
            </div>


            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo2.jpg" alt="Card image"
                    style="width:60%;height:35%">
                <div class="card-body">
                    <h4 class="card-title">HRIT,GAZIABAD</h4>
                    <p class="card-text"></p> Android with Core Java <br> 5th JULY -25th JULY <br> 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                </div>
            </div>
        </div>
    </div>


    <br>
    <div class="container">
        <br><br>
        <h2 class="text-center">IN <span style="color:orangered ">CAMPUS</span> </h2>
        <hr style="border-color:rgb(122, 39, 9) ">
        <br>
        <div class="card-deck">

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo3.png" alt="Card image"
                    style="width:55%;height:30%">
                <div class="card-body">
                    <h4 class="card-title">UCER, Allahabad</h4>
                    <p class="card-text"></p> Network Management & Ethical Hacking <br>with Web Development And Android
                    <br>19th August - 7th September, 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a><br><br>
                </div>
            </div>

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo4.jpg" alt="Card image"
                    style="width:55%;height:30%">
                <div class="card-body">
                    <h4 class="card-title">MNNIT Allahabad</h4>
                    <p class="card-text"></p> Network Management & Ethical Hacking <br>with Web Development And Android
                    <br>DECEMBER, 2019</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                </div>
            </div>



            <div class="card" style="border-color: whitesmoke;"> </div>
            <div class="card" style="border-color: whitesmoke;"> </div>
        </div>
    </div>

    <br><br>



    <div class="container">
        <br><br>
        <h2 class="text-center">PAST <span style="color:orangered ">PROGRAMS</span> </h2>
        <hr style="border-color:rgb(122, 39, 9) ">
        <br>
        <div class="card-deck">

                <div class="card text-center border border-dark">
                        <br>
                        <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo5.jpg" alt="Card image"
                            style="width:55%;height:30%">
                        <div class="card-body">
                            <h4 class="card-title">BIT MESRA</h4>
                            <p class="card-text"></p> Seminar on <br>Network Management & Ethical Hacking
                            <br>JANUARY</p>
                            <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                        </div>
                    </div>

                    <div class="card text-center border border-dark">
                            <br>
                            <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo6.jpg" alt="Card image"
                                style="width:55%;height:30%">
                            <div class="card-body">
                                <h4 class="card-title">NIT PATNA</h4>
                                <p class="card-text"></p> Seminar on <br>Network Management & Ethical Hacking
                                <br></p>
                                <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                            </div>
                        </div>
           

            <div class="card text-center border border-dark">
                <br>
                <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo4.jpg" alt="Card image"
                    style="width:55%;height:30%">
                <div class="card-body">
                    <h4 class="card-title">MNNIT Allahabad</h4>
                    <p class="card-text"></p> Network Management & Ethical Hacking <br>with Web Development And Android
                    <br>10th December- 25th December, 2018</p>
                    <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                    <br><br>
                </div>
            </div>

            <div class="card text-center border border-dark">
                    <br>
                    <img class="card-img-top img-fluid mx-auto rounded-circle" src="images/logo7.jpg" alt="Card image"
                        style="width:55%;height:30%">
                    <div class="card-body">
                        <h4 class="card-title">IPEC Gaziabad</h4>
                        <p class="card-text"></p> Network Management & Ethical Hacking <br>with Web Development And Android
                        <br>7th September- 26th September, 2018</p>
                        <a href="#" class="btn btn-primary stretched-link">Click here to view details</a>
                    </div>
                </div>
    </div>
    </div>
    <br>
       <div class="text-center" style="background-color: black;color:whitesmoke;"> Copywrite ©  SOUMY️AJIT BEHERA 2019 </div>
    </div>

    
    <div class="container-fluid tab-pane fade" id="regform" >
            <div class="container" >
            <br><br>
            <p class="text-center" style="font-size:30px;font-family:serif;color:orangered;"> REGISTER HERE</p>
            <hr style="border-color:rgb(122, 39, 9)">
            <center>
            <div class="col-md-7 border border-success">
            <br><br>
            <span class="text-center" style="font-size:22px;font-family:serif;color:orangered;"> ENTER YOUR DETAILS</span><br> <br>
            <form action="connect.php" method="POST" class="needs-validation">
               
                <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="name"  >NAME:-</label>
                <input type="text" class="form-control" id="name" name="a" placeholder="Enter Your User Name" required>
              </div>
             
              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="email">EMAIL ADDRESS:-</label>
                <input type="email" class="form-control" id="email" name="b" placeholder="Enter Your Email Address" required >
              </div>
              
               <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="phno">PHONE NUMBER:-</label>
                <input type="text" class="form-control" id="phno" name="c" placeholder="Enter Your Phone no" required>
              </div>
              
              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="pwd">PASSWORD:-</label>
                <input type="password" class="form-control" id="pwd" name="d" placeholder="Enter Your Password" required>
              </div>
            
              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="sex">SEX:-</label>
                <input type="text" class="form-control" id="sex" name="e" placeholder="Enter Your Sex i.e M/F" required>
              </div>
            
              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="clg">COLLEGE NAME:-</label>
                <input type="text" class="form-control" id="clg" name="f" placeholder="Enter Your College name" required>
              </div>
            
              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                <label for="year">YEAR:-</label>
                <input type="text" class="form-control" id="year" name="g" placeholder="Enter Your Year" required>
              </div>
              
              <button type="submit" class="btn btn-success">SIGN UP</button> &nbsp &nbsp
              <button type="reset" class="btn btn-success">RESET</button> <br><br>
              
              <div class="btn btn-dark">ALREADY A USER ,PLZZ LOGIN</div><br><br>
            </form>
            </div>
            </center>
            </div>
            <br><br>
            </div>


            <div class="container-fluid tab-pane fade" id="logform">
                    <div class="container" >
                    <br><br>
                    <p class="text-center" style="font-size:30px;font-family:serif;color:orangered;"> LOGIN</p>
                    <hr style="border-color:rgb(122, 39, 9)">
                    <center>
                    <div class="col-md-6 border border-primary ">
                    <br><br>
                    <img src='images/login.png' class="img-fluid mx-auto" style="height:140px;"><br><br>
                    <form action="login2.php" method="POST" class="needs-validations">
                       
                        <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                        <label for="name"  >NAME:-</label>
                        <input type="text" class="form-control" id="name" name="a" placeholder="Enter Your User Name" required>
                      </div>
                     
                     
                      
                      <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                        <label for="pwd">PASSWORD:-</label>
                        <input type="password" class="form-control" id="pwd" name="b" placeholder="Enter Your Password" required >
                      </div>
                      
                      <button type="submit" class="btn btn-danger">LOGIN</button> &nbsp 
                       <br><br>
                    </form>

                    </div>
                    <br><br>
                    </center>
                    </div>
                    </div>


                    <div class="container-fluid tab-pane fade" id="updte" >
                            <div class="container" >
                            <br><br>
                            <p class="text-center" style="font-size:30px;font-family:serif;color:orangered;"> UPDATE THE PASSWORD</p>
                            <hr style="border-color:rgb(122, 39, 9)">
                            <center>
                            <div class="col-md-7 border border-success">
                            <br><br>
                            <span class="text-center" style="font-size:22px;font-family:serif;color:orangered;"> ENTER YOUR NEW PASSWORD DETAIL</span><br> <br>
                            <form action="update.php" method="POST" class="needs-validation">
                            <img src='images/passwordchg.png' class="img-fluid mx-auto" style="height:140px;"><br><br>
                               
                                <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                                <label for="name"  >NAME:-</label>
                                <input type="text" class="form-control" id="name" name="a" placeholder="Enter Your User Name" required>
                              </div>
                             
                              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                                <label for="email">EMAIL ADDRESS:-</label>
                                <input type="email" class="form-control" id="email" name="b" placeholder="Enter Your Email Address" required >
                              </div>
                              

                              <div class="form-group text-left" style="font-size:18px;font-family:serif;color:black;">
                                <label for="pwd">NEW PASSWORD:-</label>
                                <input type="password" class="form-control" id="pwd" name="c" placeholder="Enter Your New Password" required>
                              </div>
                            
                             <button type="submit" class="btn btn-info">UPDATE</button> &nbsp &nbsp
                              <button type="reset" class="btn btn-info">RESET</button> <br><br>
                              
                              
                            </form>
                            </div>
                            </center>
                            </div>
                            <br><br>
                            </div>





    <div class="container tab-pane fade" id="about">
        <br><br>
        <h2 class="text-center font-weight-bold" style="font-family: 'Courier New', Courier, monospace;font-size: 40px;">ABOUT <span style="color:orangered ">US</span></h2>
        <hr style="border-color:rgb(122, 39, 9) ">
        <br><br><br>

        <p style="font-size:15px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">About Netcamp<br><br>

               Netcamp is a technology consulting and training based firm specializing in IT networking domain to provide solutions and services to our clients across the industry. <br><br>
                
                At Netcamp, we focus on delivering value to our clients through leading edge technologies that are future-oriented and meet the challenging requirements of industry with a view to enable clients take advantage of the growing technology market. <br><br>
                
                Through a range of practical training sessions and techniques by leveraging information technologies we aim to enable our clients solve complex problems with a strong commitment to achieve client satisfaction. <br><br>
                
                We implement hands on practical exposure in networking technologies including Linux, Microsoft Windows 2003, Internet, TCP/IP, Ethical Hacking and Telecommunications through our meticulous & comprehensively designed structure & courses that has a well defined interlink, with an aim to bridge the gap between academics and industry. <br><br>
        </p>
        <br><br><br>

        <h2 class="text-center font-weight-bold" style="font-family: 'Courier New', Courier, monospace;font-size: 30px;">CONTACT<span style="color:orangered "> US</span></h2>
        <hr style="border-color:rgb(122, 39, 9) ">
        <br><br>
        <div class="text-center" style="font-size:25px;">
          <i class="fa fa-whatsapp"> &nbsp 8984468201</i><br><br>
          <i class="fa fa-envelope"> &nbsp helpdesk@netcamp.in</i><br><br>
          <i class="fa fa-address-card"> &nbsp Netcamp Solutions Private Limited</i><br><br><br><br>
        </div>
    </div>


   



</div>


</body>