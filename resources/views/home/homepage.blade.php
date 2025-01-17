@extends('home.master')


@section('title')
Home Page
@endsection

@section('body')
<!-- services section start -->
<div class="header_section">
    <div class="banner_section layout_padding">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner section end -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Blog Posts </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
                @foreach ($posts as $post)

                <div class="col-md-4" style="padding: 30px">
                    <div><img src="{{ asset($post->image) }}" class="services_img"></div>
                    <h2 class="text-center">{{ $post->title }}</h2>
                    <p style="color:black!impotant">Post By : <b>{{ $post->name }}</b></p>
                    <div class="btn_main"><a href="{{ url('post_details',$post->id) }}">Read Mode</a></div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- services section end -->

<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="about_taital_main">
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-md-6 padding_right_0">
                <div><img src="{{ asset('/') }}blog/images/about-img.png" class="about_img"></div>
            </div>
        </div>
    </div>
</div>

<!-- about section end -->
<!-- blog section start -->
<div class="blog_section layout_padding">
    <div class="container">
        <h1 class="blog_taital">See Our Video</h1>
        <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
        <div class="play_icon_main">
            <div class="play_icon"><a href="#"><img src="{{ asset('/') }}blog/images/play-icon.png"></a></div>
        </div>
    </div>
</div>

<!-- blog section end -->
<!-- client section start -->
<div class="client_section layout_padding">
    <div class="container">
        <h1 class="client_taital">Testimonial</h1>
        <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_main">
                            <div class="box_left">
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                            </div>
                            <div class="box_right">
                                <div class="client_taital_left">
                                    <div class="client_img"><img src="{{ asset('/') }}blog/images/client-img.png"></div>
                                    <div class="quick_icon"><img src="{{ asset('/') }}blog/images/quick-icon.png"></div>
                                </div>
                                <div class="client_taital_right">
                                    <h4 class="client_name">Dame</h4>
                                    <p class="customer_text">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_main">
                            <div class="box_left">
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                            </div>
                            <div class="box_right">
                                <div class="client_taital_left">
                                    <div class="client_img"><img src="{{ asset('/') }}blog/images/client-img.png"></div>
                                    <div class="quick_icon"><img src="{{ asset('/') }}blog/images/quick-icon.png"></div>
                                </div>
                                <div class="client_taital_right">
                                    <h4 class="client_name">Dame</h4>
                                    <p class="customer_text">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_main">
                            <div class="box_left">
                                <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                            </div>
                            <div class="box_right">
                                <div class="client_taital_left">
                                    <div class="client_img"><img src="{{ asset('/') }}blog/images/client-img.png"></div>
                                    <div class="quick_icon"><img src="{{ asset('/') }}blog/images/quick-icon.png"></div>
                                </div>
                                <div class="client_taital_right">
                                    <h4 class="client_name">Dame</h4>
                                    <p class="customer_text">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- client section start -->
<!-- choose section start -->
<div class="choose_section layout_padding">
    <div class="container">
        <h1 class="choose_taital">Why Choose Us</h1>
        <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
        <div class="read_bt_1"><a href="#">Read More</a></div>
        <div class="newsletter_box">
            <h1 class="let_text">Let Start Talk with Us</h1>
            <div class="getquote_bt"><a href="#">Get A Quote</a></div>
        </div>
    </div>
</div>

<!-- choose section end -->
@endsection
