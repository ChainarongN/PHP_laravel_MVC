<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme The Band</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px/1.8 Lato, sans-serif;
            color: #777;
        }
        @font-face {
            font-family: myfn1;
            src: url(Font/Bangnampueng.ttf);
        }
        @font-face {
            font-family: myfn2;
            src: url(Font/WR Tish Kid2.ttf);
        }
        @font-face {
            font-family: myfn3;
            src: url(Font/waan-free_regular-italic.ttf);
        }
        #table_login{
            font-size: 200%;
        }
        #table_register{
            font-family: myfn1;
            font-size: 200%;
        }
        .Re1{
            font-family: myfn1;
            color: #ec971f;
            background-color: rgba(230, 230, 230,0.9);
            border: solid 2px white;
        }
        #but_login,#but_Register{
            font-size: 70%;
            text-align: center;
            width: 16ch;
            height: 9ch;
            color: white;
            background-color: black;
            border: solid 2px white;
            border-radius: 5ch;
        }
        .submit{
            width: 7ch;
            color: white;
            background-color: black;
            border: solid 2px red;
            font-family: myfn1;
            font-size: 180%;
        }
        #img1,#img2,#img3,#img4,#img5 {
            width: 210ch;
            height: 60ch;

        }
        h3, h4 {
            margin: 10px 0 30px 0;
            letter-spacing: 10px;
            font-size: 20px;
            color: #111;
        }
        /*.container {*/
            /*padding: 80px 120px;*/
        /*}*/
        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }
        .carousel-inner img {
            /* -webkit-filter: grayscale(90%);
             filter: grayscale(90%);*/ /* make all photos black and white */
            width: 100%;
            height: 500px;/* Set width to 100% */
            margin: auto;
        }
        .carousel-caption h3 {
            color: #fff !important;
        }
        @media (max-width: 600px) {
            .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }
        .bg-1 {
            background: #2d2d30;
            color: #bdbdbd;
        }
        .bg-1 h3 {color: #fff;}
        .bg-1 p {font-style: italic;}
        .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }
        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }
        .btn:hover, .btn:focus {
            border: 1px solid #333;
            background-color: #fff;
            color: #000;
        }
        .modal-header, h4, .close {
            background-color: #333;
            color: #fff !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-header, .modal-body {
            padding: 40px 50px;
        }
        .nav-tabs li a {
            color: #777;
        }
        #googleMap {
            width: 100%;
            height: 400px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }
        .navbar {
            font-family: Montserrat, sans-serif;
            margin-bottom: 0;
            background-color: #2d2d30;
            border: 0;
            font-size: 11px !important;
            letter-spacing: 4px;
            opacity: 0.9;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #d5d5d5 !important;
        }
        .navbar-nav li a:hover {
            color: #fff !important;
        }
        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #29292c !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }
        .open .dropdown-toggle {
            color: #fff;
            background-color: #555 !important;
        }
        .dropdown-menu li a {
            color: #000 !important;
        }
        .dropdown-menu li a:hover {
            background-color: red !important;
        }
        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }
        footer a {
            color: #f5f5f5;
        }
        footer a:hover {
            color: #777;
            text-decoration: none;
        }
        .form-control {
            border-radius: 0;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="image\logo.png"  width="150" height="70">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#myPage">HOME</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MOVIES
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#band">NOW SHOWING</a></li>
                        <li><a href="#tour">COMING SOON</a></li>
                    </ul>
                </li>
                <li><a href="#promotion">PROMOTION</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN/REGISTER
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#myModal_1">LOGIN</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_2">REGISTER</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
{{--++++++++++++Login+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{!! Form:: open(['method'=>'GET','action'=>'MemberController@create']) !!}
{{csrf_field()}}

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal_1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: black">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: red;font-size: 200%;">Login</h4>
                </div>
                <div class="modal-body" style="background-color: #bfbfbf">

                    <table id="table_login" style="font-family: myfn1;">
                        <tr>
                            <td>User : &emsp; </td>
                            <td><input type="text" id="user_login" placeholder="Username" name="user_L" style="background-color: rgba(230, 230, 230,0.9);border: solid 2px white;color: #ec971f;font-family: myfn1"></td>
                        </tr>
                        <tr>
                            <td>Pass : &emsp; </td>
                            <td><input type="password" id="pass_login" placeholder="Password" style="background-color: rgba(230, 230, 230,0.9); border: solid 2px white; color: #ec971f;font-family: myfn1" ></td>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer" style="background-color: black">
                    {!! Form :: submit('Login',['class'=>"submit"]) !!}
                    {{--<button type="submit" class="btn btn-default" style="font-size: 180%; color: white; background-color: black; border: solid 2px red;font-family: myfn1">Login</button>--}}
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="color: white; background-color: black; border: solid 2px red;font-family: myfn1;font-size: 180%; height:4.3ch">Close</button>

                </div>
            </div>

        </div>
    </div>

</div>
{!! Form:: close() !!}
{{--++++++++++++Login+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{--++++++++++++Register+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{!! Form:: open(['method'=>'POST','action'=>'MemberController@store']) !!}
{{csrf_field()}}

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal_2" role="dialog">
        <div class="modal-dialog" >

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: black">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: red; font-size: 200%;">Register</h4>
                </div>
                <div class="modal-body" style="background-color: #bfbfbf">


                    <table id="table_register">
                        <tr>
                            <td>User :  &emsp; </td>
                            <td><input class="Re1" type="text" name="me_user" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td>Pass : &emsp;</td>
                            <td><input class="Re1" type="password" name="me_pws" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Pass : &emsp;</td>
                            <td><input class="Re1" type="password" placeholder="Confirm Password"></td>
                        </tr>
                        <tr>
                            <td>Frist Name : &emsp;</td>
                            <td><input class="Re1" type="text" name="me_fname" placeholder="Fname"></td>
                        </tr>
                        <tr>
                            <td>Last Name : &emsp;</td>
                            <td><input class="Re1" type="text" name="me_lname" placeholder="Lname"></td>
                        </tr>
                        <tr>
                            <td>Tel. : &emsp;</td>
                            <td><input class="Re1" type="text" name="me_tel" placeholder="Telephone"></td>
                        </tr>
                        <tr>
                            <td>Email : &emsp;</td>
                            <td><input class="Re1" type="text" name="me_email" placeholder="Email"></td>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer" style="background-color: black">
                    {!! Form :: submit('Register',['class'=>"submit"]) !!}
                    {{--<button type="submit" class="btn btn-default" style="color: white; background-color: black; border: solid 2px red;font-family: myfn1;font-size: 180%">Register</button>--}}
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="submit2" style="color: white; background-color: black; border: solid 2px red;font-family: myfn1;font-size: 180%; height:4.3ch" >Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
{!! Form:: close() !!}
{{--++++++++++++Register+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="image\banner.jpg" alt="New York" width="1200" height="700" id="img1">
            <div class="carousel-caption">
                <h3>FAST 8</h3>
                <p>The atmosphere in New York is lorem ipsum.</p>
            </div>
        </div>
        <div class="item">
            <img src="image\maxresdefault.jpg" alt="Chicago" width="1200" height="700" id="img2">
            <div class="carousel-caption">
                <h3>Thor : Ragnarok</h3>
                <p>Thank you, Chicago - A night we won't forget.</p>
            </div>
        </div>

        <div class="item">
            <img src="image\03.jpg" alt="Los Angeles" width="1200" height="700" id="img3">
            <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
        </div>
        <div class="item">
            <img src="image\slide3.jpg" alt="Los Angeles" width="1200" height="700" id="img4">
            <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
        </div>
        <div class="item">
            <img src="image\slide4.jpg" alt="Los Angeles" width="1200" height="700" id="img5">
            <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
    <h3 style="text-align: center;color: red;font-family: myfn3;font-size:6ch">NOW SHOWING</h3>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Thor: Ragnarok</strong></p><br>
            <a href="#demo" data-toggle="collapse">
                <img src="image\rakno.jpg"  alt="Random Name" width="255" height="300">
            </a>
            <div id="demo" class="collapse">
                <p>Release Date: 02 November 2017 </p>
                <p>Genre: Action|Rate: 15 |130 Mins</p>
                <p>Director: Taika Waititi</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Justice League</strong></p><br>
            <a href="#demo2" data-toggle="collapse">
                <img src="image\jus.jpg" alt="Random Name" width="255" height="300">
            </a>
            <div id="demo2" class="collapse">
                <p>Release Date: 16 November 2017</p>
                <p>Genre: Action |Rate: 13 |120 Mins'</p>
                <p>Director: Zack Snyder</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>GO:Storm</strong></p><br>
            <a href="#demo3" data-toggle="collapse">
                <img src="image\unnamedKZO0GAC4.jpg" alt="Random Name" width="255" height="300">
            </a>
            <div id="demo3" class="collapse">
                <p>Bass player</p>
                <p>Loves math</p>
                <p>Member since 2005</p>
            </div>
        </div>

    </div>
    <div class="col-sm-4">
        <p class="text-center"><strong>ฆาตกรรมบนรถด่วน</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
            <img src="image\unnamed.jpg" alt="Random Name" width="255" height="300">
        </a>
        <div id="demo3" class="collapse">
            <p>Bass player</p>
            <p>Loves math</p>
            <p>Member since 2005</p>
        </div>
    </div>
    <div class="col-sm-4">
        <p class="text-center"><strong>Star Wars</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
            <img src="image\starwars.jpg" alt="Random Name" width="255" height="300">
        </a>
        <div id="demo3" class="collapse">
            <p>Bass player</p>
            <p>Loves math</p>
            <p>Member since 2005</p>
        </div>
    </div>
    <div class="col-sm-4">
        <p class="text-center"><strong>Batman & Superman</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
            <img src="image\batman.jpg" alt="Random Name" width="255" height="300">
        </a>
        <div id="demo3" class="collapse">
            <p>Bass player</p>
            <p>Loves math</p>
            <p>Member since 2005</p>
        </div>
    </div>

</div>
<br><br><br>
<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
    <div class="container">
        <h3 style="text-align: center;color: red;font-family: myfn3;font-size:6ch">COMING SOON</h3>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\unnamed222.jpg" alt="Paris" width="400" height="300">
                    <p><strong>ตับอ่อนเธอนั้น ขอฉันเถอะนะ</strong></p>
                    <p>วันที่เข้าฉาย: 23 พฤศจิกายน 2017</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\unnamed333.jpg" alt="New York" width="400" height="300">
                    <p><strong>เกมต่อตัดตาย</strong></p>
                    <p>วันที่เข้าฉาย: 30 พฤศจิกายน 2017</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\unnamed1111.jpg" alt="San Francisco" width="400" height="300">
                    <p><strong>สุขสันต์วันตาย</strong></p>
                    <p>วันที่เข้าฉาย: 23 พฤศจิกายน 2017</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">?</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                            <input type="number" class="form-control" id="psw" placeholder="How many?">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-block">Pay
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p>Need <a href="#">help?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promotion (Contact Section) -->

<div id="promotion" class="bg-1">
    <div class="container">
        <h3 style="text-align: center;color: red;font-family: myfn3;font-size:6ch">Promotion</h3>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\pro3.jpg" alt="Paris" height="700" align="center">
                </div>
            </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\pro2.jpg" alt="Paris" height="700" align="center">
                </div>
            </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="image\pro1.jpg" alt="Paris" height="700" align="center">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love our fans!</em></p>

    <div class="row">
        <div class="col-md-4">
            <p>Fan? Drop a note.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <br>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
</footer>


</body>
</html>
