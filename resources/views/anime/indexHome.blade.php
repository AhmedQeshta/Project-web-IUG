<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AA Chanael Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/anime/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/anime/css/indexHome.css')}}">

</head>
<body id="body" >

<!-- header -->
<header>

  @if(session()->has('success'))

        <script> alert( '{{session()->get('success')}}');
        </script>
@endif

    <!-- Home About Contact video -->
    <!-- nav1 -->

    <nav id="backColor" class="navbar navbar-expand-lg navbar-light backColor">
        <div class="searchbtnstyle" >
            {{-- {{route()}}--}}
            <a href="{{route('user')}}">
                <button class="btn my-2 my-sm-0" id="backimg1" type="submit">AA CHANNEL</button>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse stylecin" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#main1">Home <span class="sr-only">(current)</span></a>
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
<section>
    <!-- main 2 -->
    <main id="main2" class="paddFirst">
        <div class="container-fluid container2Style">
            <!-- <div class="container">   -->
            <div class="row">
                <div class="col-12 col-md-8 ">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($posts as $post)
                                <div class="swiper-slide">
                            <a  style="text-decoration:none " href="{{route("animePage",["name"=>$post->title])}}">
                                <div class="imgBx">
                                    <img class="imgSliderSizer" src="{{$post->image}}"  alt="">
                                </div>
                                <div class="details">
                                    <h3>AA Channel <br><span>{{$post->title}}</span></h3>
                                </div>
                            </a>
                            </div>
                            @endforeach



                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <div class="col-0 col-md-4 ">
                    <!-- image must size be {width=500px, height=658px} to none error -->
                    <div>
                        <!-- card1 -->
                        <div class="AllCard" id="card1">
                            <?php for($i=0;$i<4;$i++){?>

                            <div class="contaneCard">
                                <div class="card mb-1">
                                    <div class="row no-gutters">
                                        <div class="col-md-2">
                                            <img src="{{$posts[$i]->image}}"  class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$posts[$i]->title}}</h5>
                                                <p class="card-text">{{substr($posts[$i]->content,0,130)}} <a href="{{route("animePage",["name"=>$posts[$i]->title])}}">More></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <!-- card2 -->
                        <div class="AllCard displaynone"  id="card2">
                            <?php for($i=4;$i<8;$i++){?>
                            @isset($posts[$i])
                            <div class="contaneCard">
                                <div class="card mb-1">
                                    <div class="row no-gutters">
                                        <div class="col-md-2">
                                            <img src="{{$posts[$i]->image}}"  class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$posts[$i]->title}}</h5>
                                                <p class="card-text">{{substr($posts[$i]->content,0,130)}} <a href="{{route("animePage",["name"=>$posts[$i]->title])}}">More></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endisset
                            <?php }?>
                        </div>
                        <!-- card3 -->
                        <div class="AllCard displaynone" id="card3">
                            <?php for($i=8;$i<12;$i++){?>
                            @isset($posts[$i])
                                <div class="contaneCard">
                                    <div class="card mb-1">
                                        <div class="row no-gutters">
                                            <div class="col-md-2">
                                                <img src="{{$posts[$i]->image}}"  class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$posts[$i]->title}}</h5>
                                                    <p class="card-text">{{substr($posts[$i]->content,0,130)}} <a href="{{route("animePage",["name"=>$posts[$i]->title])}}">More></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset
                            <?php }?>
                        </div>
                        <!-- card4 -->
                        <div class="AllCard displaynone" id="card4">
                            <?php for($i=12;$i<16;$i++){?>
                            @isset($posts[$i])
                                <div class="contaneCard">
                                    <div class="card mb-1">
                                        <div class="row no-gutters">
                                            <div class="col-md-2">
                                                <img src="{{$posts[$i]->image}}"  class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$posts[$i]->title}}</h5>
                                                    <p class="card-text">{{substr($posts[$i]->content,0,130)}} <a href="{{route("animePage",["name"=>$posts[$i]->title])}}">More></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset
                            <?php }?>
                        </div>

                        <div class=" cardshowStyle "  >
                            <span id="btntogel1" class="dot" ></span>
                            <span id="btntogel2" class="dot" ></span>
                            <span id="btntogel3" class="dot" ></span>
                            <span id="btntogel4" class="dot" ></span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- main 1 -->
    <main id="main1" class="paddFirst1">
        <div class="slidershowStyle" id="slidershowStyle" >
            <!-- row 1  -->
            <div class="row">
                <div class="col-12 col-md-7 ">
                    <div class="bd-example opcityStyle">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!--  -->

                                <div class="carousel-item  active">
                                    <img src="{{asset('/anime/img/10.jpg')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="carousel-item">
                                    <img src="{{$post->image}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{asset('/anime/img/3.jpg')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="carousel-item">
                                    <img src="{{asset('/anime/img/1.jpg')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->
                <div class=" backColorStyle col-0 col-md-5  ">

                    <h2 class="hederLastAdd">Last AdD</h2>
                    <hr class="styleHR">
                    <p class="borderPStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad omnis autem a voluptatem illum dolores velit,
                        officiis sequi, obcaecati commodi rerum cum ipsa quasi error! Minima impedit delectus repudiandae.
                    </p>
                    <p class="borderPStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad omnis autem a voluptatem illum dolores velit,
                        officiis sequi, obcaecati commodi rerum cum ipsa quasi error! Minima impedit delectus repudiandae.
                    </p>
                    <p class="borderPStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad omnis autem a voluptatem illum dolores velit,
                        officiis sequi, obcaecati commodi rerum cum ipsa quasi error! Minima impedit delectus repudiandae.
                    </p>
                    <p class="borderPStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad omnis autem a voluptatem illum dolores velit,
                        officiis sequi, obcaecati commodi rerum cum ipsa quasi error! Minima impedit delectus repudiandae.
                    </p>
                    <p class="borderPStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad omnis autem a voluptatem illum dolores velit,
                        officiis sequi, obcaecati commodi rerum cum ipsa quasi error! Minima impedit delectus repudiandae.
                    </p>

                </div>
            </div>
        </div>


    </main>

</section>



<!-- footer -->
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

                    <form action="{{route('massege')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control"  aria-describedby="emailHelp" minlength="2" maxlength="60"  placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" placeholder="Your massage..." rows="8" minlength="20" maxlength="150"></textarea>
                        </div>
                        <button  type="submit" class="btn btn-outline-warning btn-block btn-lg">send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- move up btn -->
<button type="button"  id="btnScroll" class="btn btn-success">up</button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('/anime/js/swiper.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="{{asset('/anime/js/indexHome.js')}}"></script>
</body>
</html>
