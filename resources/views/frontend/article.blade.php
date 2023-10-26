<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />
    <title>Simone - Personal Portfolio Template</title>
    <meta name="description" content="Simone is responsive bootstrap 5 one page personal portfolio html template.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheet
============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/font-awesome/css/all.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/vendor/magnific-popup/magnific-popup.min.css') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/stylesheet.css') }}" />
</head>

<body class="side-header" data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-offset="1">

    <!-- Preloader -->
    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper
=============================== -->
    <div id="main-wrapper">
        <!-- Header
  ============================ -->
        <header id="header" class="sticky-top">
            <!-- Navbar -->
            @include('frontend.layouts.header')

            <!-- Navbar End -->
        </header>
        <!-- Header End -->

        <!-- Content
            ============================================= -->
        <div id="content" role="main">



            <!-- Resume
                ============================================= -->
            <section id="resume" class="section bg-dark-1 " style="min-height: 100vh; ">
                <div class="container px-lg-5">
                    <!-- Heading -->
                    <div class="position-relative d-flex text-center mb-5">
                        <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Articles</h2>
                        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                            Blogs<span
                                class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
                        </p>
                    </div>
                    <!-- Heading end-->

                    <div class="row gx-5">
                        <!-- My Education -->
                        <div class="col-md-12">
                            <h2 class="text-6 text-white fw-600 mb-4"> Blogs</h2>

                          

                      
                                <div class="bg-dark rounded p-4 mb-4">
                                    
                                    <p class="badge bg-danger text-2 fw-400">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $article->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </p>
                                    <h3 class="text-5 text-white">{{ $article->title }}</h3>
                                    <p class="text-primary" style="font-size:12px;">Added By :
                                        @foreach ($users as $user)
                                            @if ($user->id == $article->user_id)
                                                {{ $user->name }} 
                                            @endif
                                        @endforeach

                                      
                                    </p>
                             

                                   
                                    <div class="text-center"> 
                                    <img class="img-fluid "    src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }} Image">
                                </div>
                                <br>
                                    <p class="text-white-50 mb-0">{{$article->description}} <br> </p>
                                </div>
                        
                                <p class="text-primary" style="font-size:12px;">
                                    Created at : {{$article->created_at}}
                                </p>
                        </div>

                        <!-- My Experience -->

                    </div>
                    <!-- My Skills -->

                </div>
            </section>
            <!-- Resume end -->






        </div>
        <!-- Content end -->

        <!-- Footer
  ============================================= -->

        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" class="rounded-circle" data-bs-toggle="tooltip" title="Back to Top"
        href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>



    <!-- JavaScript -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Easing -->
    <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <!-- Appear -->
    <script src="{{ asset('front/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <!-- Images Loaded -->
    <script src="{{ asset('front/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('front/vendor/jquery.countTo/jquery.countTo.min.js') }}"></script>
    <!-- Parallax Bg -->
    <script src="{{ asset('front/vendor/parallaxie/parallaxie.min.js') }}"></script>
    <!-- Typed -->
    <script src="{{ asset('front/vendor/typed/typed.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- isotope Portfolio Filter -->
    <script src="{{ asset('front/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('front/js/theme.js') }}"></script>
</body>

</html>
