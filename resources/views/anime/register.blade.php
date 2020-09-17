<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resister</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/anime/css/imgrandom.css')}}">
    <link rel="stylesheet" href="{{asset('/anime/css/animate.css')}}">
</head>

<body id="imgrandom">
<!-- Quiz hiden -->

<div id="hidenH" class="HeddenLY ">
      <span class="circle "> hi wellCome to my list of video , injoy in my webSite, You are very smart to know the
         hidden place</span>
    <span class="triangle-left  "></span>
</div>

<!-- forget -->
<div>
    <div class="formStyle">

        <form id="forget" class="userforget HeddenLY">

            <img id="hidenM2" class="imgLogoAnimeforgetpassword" src="{{asset('/anime/img/imgLogoAnime.png')}}" alt="">
            <div class="logostyle">
                <a href="indexHome.html"> <img class="imgCancelstyle" src="{{asset('/anime/img/cancel.svg')}}" alt="cancel"> </a>

                <br>
            </div>
            <div class="lableStyle">
                <label for="nameweb"></label>
            </div>


            <div class="inputStyle">
                <input type="email" placeholder="Enter Your Email..." name="email">
            </div>
            <div class="errorStyle">
                user email or\and Pasword falid
                <!-- error mesage -->
            </div>
            <div>
                <input class="btnStyle" type="submit" value="ReSet PassWord" name="submit">
            </div>
            <div class="Register-LoGIn-btn">
                <div class="forgetStyle">
                    <a id="btn5" href="#"> <label for="Register?">Have not Acconte Register?</label> </a>
                </div>
                <div class="registertStyle">
                    <a id="btn6" href="#"> <label for="LoGIn?">Have Acconte LoGIn?</label> </a>
                </div>
            </div>
        </form>
    </div>

</div>
<!-- login-->
<div>

    <div class="formStyle ">

        <form id="login" class="userlogin HeddenLY ">
            <div id="loginimg" class="hiddenLayer ">
                <img id="hidenM1" class="imgLogoAnime" src="{{asset('/anime/img/imgLogoAnime.png')}}" alt="">
            </div>
            <div class="logostyle ">
                <a href="indexHome.html"> <img class="imgCancelstyle" src="{{asset('/anime/img/cancel.svg')}}" alt="cancel"> </a>
                <br>
            </div>
            <div class="lableStyle">
                <label for="nameweb"></label>
            </div>
            <div class="googleSignUpStyle">
                <a href="#"> <img class="googleSignUpStyleAll" src="{{asset('/anime/img/768px-Google__G__Logo.svg-300x300.png')}}"
                                  width="45px" height="45px" alt=""> </a>
                <label class="labelG" for=""> SiGn In WiTh GooGle</label>
            </div>
            <div class="OrStyle">
                <label for="OR">OR</label>
            </div>

            <div class="inputStyle">
                <input type="email" placeholder="Enter Your Email..." name="email">
                <br>
                <input type="password" placeholder="PassWord" name="password">

            </div>
            <div class="errorStyle">
                user email or\and Pasword falid
                <!-- error mesage -->
            </div>
            <div>
                <input class="btnStyle" type="submit" value="SiGn Up" name="submit">
            </div>
            <div class="Forgot-Register-btn">
                <div class="forgetStyle">
                    <a id="btn3" href="#"> <label for="Forgot your password?">Forgot your password?</label> </a>
                </div>
                <div class="registertStyle">
                    <a id="btn4" href="#"> <label for="Register">Have not Acconte Register?</label> </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- form rigester -->
<div>
    <div class="formStyle ">
        <!-- form rigester -->
        <form class="user" id="register">
            <!-- logo Anime -->
            <img id="hidenM" class="imgLogoAnimeRegister" src="{{asset('/anime/img/imgLogoAnime.png')}}" alt="">
            <!-- cancel btn -->
            <div class="logostyle ">
                <a href="indexHome.html"> <img class="imgCancelstyle" src="{{asset('/anime/img/cancel.svg')}}" alt="cancel"> </a>
                <br>
            </div>
            <!-- name web  -->
            <div class="lableStyle">
                <label for="nameweb"></label>
            </div>
            <!-- google link -->
            <div class="googleSignUpStyle">
                <a href="#"> <img class="googleSignUpStyleAll" src="{{asset('/anime/img/768px-Google__G__Logo.svg-300x300.png')}}"
                                  width="45px" height="45px" alt=""> </a>
                <label class="labelG" for=""> SiGn In WiTh GooGle</label>
            </div>
            <!-- or -->
            <div class="OrStyle">
                <label for="OR">OR</label>
            </div>
            <!-- input password/email/username -->
            <!--            -->
            <form>
                <div class="inputStyle">
                    <input id="username" type="text" placeholder="Enter Your user name" name="user">
                    <br>
                    <input id="email" type="email" placeholder="Enter Your Email..." name="email">
                    <br>
                    <input id="password" type="password" placeholder="PassWord" name="password">

                </div>
                <!-- error message -->
                <div class="errorStyle HeddenLY" id="errormessage">
                    <!-- error message -->
                </div>
                <!-- input submit -->
                <input class="btnStyle" id="sub" type="submit" value="SiGn In" name="SiGn In">


                <!--            -->
                <!-- link forget password or login -->
                <div class="Register-LoGIn-btn">
                    <div class="forgetStyle">
                        <a id="btn1" href="#"> <label for="Forgot your password?">Forgot your password?</label> </a>
                    </div>
                    <div class="registertStyle">
                        <a id="btn2" href="#"> <label for="Have Acconte LoGIn?">Have Acconte LoGIn?</label> </a>
                    </div>
                </div>
            </form>
            </form>
    </div>

</div>



<script src="{{asset('/anime/js/imgrandom.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
