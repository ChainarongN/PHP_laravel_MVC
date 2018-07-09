<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url("image/body.jpg");
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
        #div1{
            background-color: black;
            width: 100%;
            height: 10.3ch;
            padding:4px;
        }
        #table1{
            color: white;
            margin:auto;
            font-size: 130%;
            width: 87%;
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
        .a1{
            font-size: 78%;
            width: 16ch;
            height: 9ch;
            color: white;
            background-color: black;
            border: solid 2px black;
        }
        .a1:hover{
            color: red;
            cursor: pointer;
        }
        #but_login:hover{
            color: red;
            cursor: pointer;
        }
        #but_Register:hover{
            color: red;
            cursor: pointer;
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
        #img_1,#img_2,#img_3,#img_4 {
            width: 210ch;
            height: 60ch;

        }
        .submit{
               color: white;
               background-color: black;
               border: solid 2px red;
               font-family: myfn1;
               font-size: 180%;
           }
        #img2,#img3,#img4,#img5 {
            width: 39ch;
            height: 27ch;

        }
    </style>
</head>
<body>
<br><h1 style="color: red; font-size: 450%;margin: 20px;font-family: myfn1">Movie  eiei</h1>

<div id="div1">
    <table id="table1">
        <tr>
            <td><input type="button" value="Home" class="a1"></td>
            <td><input type="button" value="About" class="a1" id="about"></td>
            <td><input type="button" value="Movie reviews" class="a1"></td>
            <td style="text-align: right"> <input type="button" value="Login" id="but_login" data-toggle="modal" data-target="#myModal_1"></td>
            <td ><input type="button" value="Register" id="but_Register" data-toggle="modal" data-target="#myModal_2"></td>
        </tr>
    </table>
</div>

{{--Login ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
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
                    <h4 class="modal-title" style="color: red;font-size: 200%;font-family: myfn2">Login</h4>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="color: white; background-color: black; border: solid 2px red;font-family: myfn1;font-size: 180%; height:3.6ch">Close</button>

                </div>
            </div>

        </div>
    </div>

</div>
{!! Form:: close() !!}
{{--Login ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

{{--Register ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
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
                    <h4 class="modal-title" style="color: red; font-size: 200%;font-family: myfn2">Register</h4>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="submit2" style="color: white; background-color: black; border: solid 2px red;font-family: myfn1;font-size: 180%; height:3.6ch" >Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
{!! Form:: close() !!}
{{--Register ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

{{--Images ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="image/001.jpg" alt="Los Angeles" id="img_1">
        </div>

        <div class="item">
            <img src="image/002.jpg" alt="Chicago" id="img_2">
        </div>

        <div class="item">
            <img src="image/03.jpg" alt="New York" id="img_3">
        </div>
        <div class="item">
            <img src="image/003.jpg" alt="New York" id="img_4">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div><br><br>
{{--Images ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
<div id="div">
    <table id="table1" style="text-align: center">
        <h1 style="text-align: center;color: red;font-family: myfn3;font-size:8ch">หนังล่าสุด</h1>
        <!--<tr style="text-align: center"><img src="IMG/1.jpg" id="img1"></tr><br><br>-->
        <tr>
            <td><img src="image/batman.jpg" id="img2"></td>
            <td><img src="image/spider.jpg" id="img3"></td>
            <td><img src="image/thor.jpg" id="img4"></td>
            <td><img src="image/003.jpg" id="img5"></td>
        </tr>
        <br>
        <tr>
            <td><p>Batman</p></td>
            <td><p>Spiderman</p></td>
            <td><p>Thor</p></td>
            <td><p>Warcraft</p></td>
        </tr>
    </table>
    <div id="div2">
        <table>

        </table>
    </div>
</div>
    <br><br><br><br><br><br><br><br>
</body>
</html>