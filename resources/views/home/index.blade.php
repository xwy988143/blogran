<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>

    <link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">

    <!-- jQuery (necessary JavaScript plugins) -->
    <script type='text/javascript' src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>

    <!-- Custom Theme files -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


</head>
<body>
<!-- header -->
<div class="banner">
    <div class="container">
        <div class="headr-right">
            <div class="details">
                <ul>
                    <li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>xwyfrank@163.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>086 13078654536</li>
                </ul>
            </div>
        </div>
        @include('home.header')
        <div class="banner-info">
            <h3>Nice to meeting you</h3>
            <h2>很高兴遇见你</h2>
        </div>
    </div>
</div>
<!---->
<div class="welcome">
    <div class="container">
        <div class="welcome-info">
            <h3>Welcome</h3>
            <h4>欢迎来到我的世界</h4>
            <p>人生在世，恍若白驹过膝，忽然而已。然，我长活一世，却能记住你说的每一话.</p>
        </div>
    </div>
</div>
<!---->
<div class="content">
    <div class="container">
        <div class="col-md-8 content-left">
            <div class="information">
                <h4>你好</h4>
                <div class="information_grids">
                    <div class="info">
                        <p>Sometimes what you want isn't always what you get, but in the end what you get is so much better than what you wanted</p>
                    </div>
                    <div class="info-pic">
                        <img src="{{asset('frontend/images/ps.png')}}" class="img-responsive" alt=""/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="games-grids">
                <div class="game-grid-left">
                    <div class="grid1">
                        <h5 class="act"><a href="../../../public/frontend/single.html">{{$article[0]['class']}}</a></h5>
                        <a href="../../../public/frontend/single.html"><img src="../../../public/frontend/images/c1.jpg" class="img-responsive" alt=""/></a>
                        <div class="grid1-info">
                            <h4><a href="../../../public/frontend/single.html">{{$article[0]['title']}}</a></h4>
                            <p>{{$article[0]['keyword']}}</p>
                        </div>
                        <div class="more">
                            <a href="../../../public/frontend/single.html">查看全文</a>
                        </div>
                    </div>
                    <div class="grid2">
                        <h5 class="race"><a href="../../../public/frontend/single.html">{{$article[1]['class']}}</a></h5>
                        <a href="../../../public/frontend/single.html"><img src="../../../public/frontend/images/c2.jpg" class="img-responsive" alt=""/></a>
                        <div class="grid1-info">
                            <h4><a href="../../../public/frontend/single.html">{{$article[1]['title']}}</a></h4>
                            <p>{{$article[1]['keyword']}}</p>
                        </div>
                        <div class="more">
                            <a href="../../../public/frontend/single.html">查看全文</a>
                        </div>
                    </div>
                </div>

                <div class="game-grid-right">
                    <div class="grid3">
                        <h5 class="sport"><a href="../../../public/frontend/single.html">{{$article[2]['class']}}</a></h5>
                        <a href="../../../public/frontend/single.html"><img src="../../../public/frontend/images/c3.jpg" class="img-responsive" alt=""/></a>
                        <div class="grid1-info">
                            <h4><a href="../../../public/frontend/single.html">{{$article[2]['title']}}</a></h4>
                            <p>{{$article[2]['keyword']}}</p>
                        </div>
                        <div class="more">
                            <a href="../../../public/frontend/single.html">查看全文</a>
                        </div>
                    </div>
                    <div class="grid4">
                        <h5 class="arc"><a href="../../../public/frontend/single.html">{{$article[3]['class']}}</a></h5>
                        <a href="../../../public/frontend/single.html"><img src="../../../public/frontend/images/c4.jpg" class="img-responsive" alt=""/></a>
                        <div class="grid1-info">
                            <h4><a href="../../../public/frontend/single.html">{{$article[3]['title']}}</a></h4>
                            <p>{{$article[3]['keyword']}}</p>
                        </div>
                        <div class="more">
                            <a href="../../../public/frontend/single.html">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-4 content-right">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav2" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新文章</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active re-pad2" id="home">
                    <div class="game1">
                        <div class="col-md-3 tab-pic">
                            <a href="../../../public/frontend/single.html"><img src="{{asset('frontend/images/tr3.jpg')}}" alt="/" class="img-responsive"></a>
                        </div>
                        <div class="col-md-9 tab-pic-info">
                            <h4><a href="../../../public/frontend/single.html">Angry Birds</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="game1">
                        <div class="col-md-3 tab-pic">
                            <a href="../../../public/frontend/single.html"><img src="{{asset('frontend/images/tr3.jpg')}}" alt="/" class="img-responsive"></a>
                        </div>
                        <div class="col-md-9 tab-pic-info">
                            <h4><a href="../../../public/frontend/single.html">Vice City GTA</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="game1">
                        <div class="col-md-3 tab-pic">
                            <a href="../../../public/frontend/single.html"><img src="{{asset('frontend/images/tr3.jpg')}}" alt="/" class="img-responsive"></a>
                        </div>
                        <div class="col-md-9 tab-pic-info">
                            <h4><a href="../../../public/frontend/single.html">Call Of Duty</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!---->

            <div class="photo-gallery">
                <h4>图片走廊</h4>
                <div class="gallery-1">
                    <div class="col-md-4 gallery-grid-pic">
                        <a class="example-image-link" href="../../../public/frontend/images/p2.jpg" data-lightbox="example-set"><img class="example-image" src="../../../public/frontend/images/p2.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 gallery-grid-pic">
                        <a class="example-image-link" href="../../../public/frontend/images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="../../../public/frontend/images/p1.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 gallery-grid-pic">
                        <a class="example-image-link" href="../../../public/frontend/images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="../../../public/frontend/images/p3.jpg" alt=""/></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script src="{{asset('frontend/js/lightbox-plus-jquery.min.js')}}"></script>

<!-- footer -->
@include('home.footer')
<!---->
<!---->

</body>
</html>