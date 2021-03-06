<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>LionStore</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="/css/index.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/additional/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="https://img.icons8.com/ios/452/lion.png" type="image/png" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/additional/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/assets/images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">

        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">
                    @foreach($categories as $key => $category)
                        <li key="{{$key}}"><a href="#{{$category->name}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head_top">
                    <div class="header">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.html"><img src="/assets/images/logo.png" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <li class="menu_iconb">
                                                <a href="#"><img style="margin-right: 15px;" src="/assets/icon/1.png"
                                                        alt="#" />7213456789</a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="/entrar">Entrar <img style="margin-right: 15px;" src="/assets/icon/5.png"
                                                        alt="#" /> </a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="/criar-conta">Cadastrar<img style="margin-left: 15px;" src="/assets/icon/6.png"
                                                        alt="#" /></a>
                                            </li>

                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    <img src="/assets/images/menu_icon.png" alt="#" />
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end header inner -->

                    <!-- end header -->
                    <section class="slider_section">
                        <div class="banner_main">
                            <div class="container-fluid padding3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                                        <div class="text-bg">
                                            <h1>Tudo <br>
                                                Em<br>
                                                Um s?? <br>
                                                Lugar</h1>
                                            <span>Simples, r??pido e f??cil.</span>
                                            <a href="#">Comprar agora</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/assets/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/assets/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/assets/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </header>
            <!-- Categories -->
            <div class="Categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2> Categorias</h2>
                                <ul class="categiri">
                                    @foreach($categories as $key => $category)
                                        <li key="{{$key}}"><a href="#{{$category->name}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    @foreach($categories as $key => $category)
                        <div id="{{$category->name}}" class="brand-bg">
                            <h3>{{$category->name}}</h3>
                            <div class="row">
                                @if($products->count() > 0)
                                    @foreach($products as $key => $product)
                                        @if($category->id == $product->product_category_id)
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                                <div class="brand-box">
                                                    @if($product->new_price)
                                                        <h5>Promo????o</h5>
                                                    @endif
                                                    <i><img src="{{$product->url_image}}" />
                                                    </i>
                                                    @if($product->new_price)
                                                        <h4>Pre??o R$<span class="nolmal">{{$product->new_price}}</span></h4>
                                                    @else
                                                        <h4>Pre??o R$<span class="nolmal">{{$product->price}}</span></h4>
                                                    @endif

                                                </div>
                                                <a class="buynow" href="{{ route('carrinho.create', ['productId'=> $product->id]) }}">Comprar</a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <a class="seemore" href="{{route('criarConta')}}">Ver mais</a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- end Categories -->

        <section>
            <!--  save -->

            <div class="container my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="save">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="save_box">
                                        <h3>economize at?? 50%</h3>
                                        <a href="#">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end save -->
        </section>

        <!--  footer -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer_top">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <a href="index.html"> <img class="logo1" src="/assets/images/logo1.png" /></a>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <ul class="sociel">
                                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                                    <div class="address">
                                        <h3>Entre em contato </h3>
                                        <ul class="loca">
                                            <li>
                                                <a href="#"><img src="/assets/icon/loc.png" alt="#" /></a>145 londone
                                                <br>uk
                                            </li>
                                            <li>
                                                <a href="#"><img src="/assets/icon/call.png" alt="#" /></a>+12586954775
                                            </li>
                                            <li>
                                                <a href="#"><img src="/assets/icon/email.png" alt="#" /></a>contact@lionstore.com
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="address">
                                        <h3>links</h3>
                                        <ul class="Links_footer">
                                            <li class="active"><a href="#">Minha conta</a> </li>
                                            <li><a href="#">Lista de desejos</a> </li>
                                            <li><a href="#">My Cart</a> </li>
                                            <li><a href="#"> Confira</a> </li>
                                            <li><a href="#">Entrar</a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 ">
                                    <div class="address">
                                        <h3>porque escolher-nos</h3>
                                        <p>Temos o melhor pre??o do pa??s de produtos nacionais e importados. </p>
                                        <form class="newtetter">
                                            <input class="tetter" placeholder="Your email" type="text"
                                                name="Your email">
                                            <button class="submit">Inscrever-se</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <div class="container">
                        <p>Copyright 2021 All Right Reserved</p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- end footer -->


    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>

    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function () {

                $(this).addClass('transition');
            }, function () {

                $(this).removeClass('transition');
            });
        });
    </script>

    <script src="https://unpkg.com/blip-chat-widget@1.6.*" type="text/javascript"></script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('aXphYmVsYTE6N2UyY2I1ZDItODQ3ZS00MTI3LWIxMzItN2FiODA0MmUyYjI3')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script>
</body>
</html>
