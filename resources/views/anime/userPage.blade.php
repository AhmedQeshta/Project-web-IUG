<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/anime/css/userPage.css')}}">
    <link rel="stylesheet" href="{{asset('/anime/css/indexHome.css')}}">
</head>

<body>
<!-- header -->
<header>
    <!-- Home About Contact video -->
    <!-- nav1 -->

    <nav id="backColor2" class="navbar navbar-expand-lg navbar-light backColor">
        <div class="searchbtnstyle">
            <a href="{{route('user')}}">
                <button class="btn my-2 my-sm-0" id="backimg1" type="submit">AA CHANNEL</button>
            </a>
        </div>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse stylecin" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('user')}}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>
            </ul>
            <form class="form-inline searchinputStyle my-2 my-lg-0 ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <!-- btnJoinUs -->
            <div class="btnJoinUs">
                <a href="{{route('register')}}">
                    <button class="btn  my-2 my-sm-0" id="backimg" type="submit"> JoIn Us</button>
                </a>
            </div>
        </div>
    </nav>
</header>
<!-- section 1  -->
<section class="bacKGUserPageSection1">
    <!-- main 2 -->
    <main id="main2" class="paddFirst">
        <div class="container-fluid container2Style">
            <!-- <div class="container">   -->
            <div class="row">
                <div class="col-12 col-md-2">
                    <img src="{{asset($anime->image)}}" width="169" height="223" alt="">
                    <br>
                    <br>
                    <a href="#">Add text</a>
                    <hr class="styleHR2">
                    @if(isset(Auth::user()->name))
                    <a href="#">see the video </a>
                        <hr class="styleHR2">
                           @else
                         <P class="alert alert-danger">if you need to see video please login</P>
                        <hr class="styleHR2">
                    @endif
                </div>

                <div class="col-0 col-md-10">
                    <p>
                        <a id="link1" class="linkUserNav activenav" href="#">{{$anime->title}}</a>

                    </p>
                    <!-- containe can be change by link  -->
                    <div class="contineChangeByLinkNav " id="contineChangeByLinkNav1">
                        <p >{{$anime->content}}
                        </p>
                    </div>



                </div>
            </div>


        </div>
    </main>


</section>

<!-- script  -->

<footer id="footer">
    <div class="backFooterStyle">
        <div class="container-fluid">
            <h1 style="text-align: center;">Communication</h1>
            <hr style="border-top: 1px solid black;">
            <!-- <div class="containeor">   -->
            <div class="row">
                <div class="col-sm">
                    <h1 class="styleFirstColInFooter">list</h1>
                    <hr class="Hr2">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                    </ul>

                </div>

                <div class="col-sm">
                    <h1 class="styleFirstColInFooter">Social Media</h1>
                    <hr class="Hr2">
                    <label> label label test label label test label label test label label test label label test label label test</label>
                </div>

                <div class="col-sm">
                    <h1 class="smallTitle">Send your massage for me </h1>
                    <hr class="Hr2">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control"  aria-describedby="emailHelp" minlength="2" maxlength="60"  placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your massage..." rows="8" minlength="20" maxlength="150"></textarea>
                        </div>
                        <button  type="submit" class="btn btn-outline-warning btn-block btn-lg">send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{asset('/anime/js/swiper.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="{{asset('/anime/js/user.js')}}"></script>

</body>

</html>
