<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>My super Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- bootstrap -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/themes/css/bootstrappage.css') }}" rel="stylesheet"/>

    <!-- global styles -->
    <link href="{{ asset('assets/themes/css/flexslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/themes/css/main.css') }}" rel="stylesheet"/>

    <!-- scripts -->
    <script src="{{ asset('assets/themes/js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/themes/js/superfish.js') }}"></script>
    <script src="{{ asset('assets/themes/js/jquery.scrolltotop.js') }}"></script>
</head>
<body>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index.html" class="logo pull-left"><img src="{{ asset('assets/themes/images/logo.png') }}"
                                                             class="site_logo" alt=""></a>
        </div>
    </section>
    <section class="header_text sub">

        <img class="pageBanner" src="{{ asset('assets/themes/images/pageBanner.png') }}" alt="New products">
        <h4><span>Products</span></h4>
        <div class="span4">
            <form method="POST" action=""  class="search_form">
                {{ csrf_field() }}
                <input type="text" name="filter" class="input-block-level search-query" Placeholder="eg. T-sirt">
                <span>* Type a keyword</span>
                <button type="submit" name="type" value="title">Title Filter</button>
                <button type="submit" name="type" value="description">Description Filter</button>
            </form>

            <form method="POST" action=""  class="search_form">
                {{ csrf_field() }}
                <input type="text" name="filter" class="input-block-level search-query" Placeholder="eg. 10">
                <span>* Type a numerical value</span>
                <button type="submit" name="type" value="min_price">min price</button>
                <button type="submit" name="type" value="max_price">max price</button>
            </form>

        </div>
    </section>

    <section class="main-content">

        <div class="row">
            <div class="span9">
                <ul class="thumbnails listing-products">
                    @foreach ($products as $product)
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a href="#"><img alt="" src="{{ $product->image }}"></a><br/>
                                <a href="#" class="title">{{ $product->title }}</a><br/>
                                <a href="#" class="category">{{ $product->category['name'] }}</a>
                                <p class="price">${{ $product->price }}</p>
                            </div>
                        </li>
                    @endforeach
            </div>
            <div class="span3 col">
                <div class="block">
                    <ul class="nav nav-list">
                        <li class="nav-header">CATEGORIES</li>
                        @foreach ($categories as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
                        <span class="pull-right">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <a class="left button"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                href="#myCarousel"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-slide="prev"></a><a
                                    class="right button" href="#myCarousel" data-slide="next"></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </span>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-bar">
        <div class="row">
            <div class="span5">
                <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been
                    the industry's standard dummy text ever since the you.</p>
                <br/>
                <span class="social_icons">
                                          <a class="facebook" href="#">Facebook</a>
                                                                                 <a class="twitter" href="#">Twitter</a>
                                                                                                                      <a class="skype"
                                                                                                                         href="#">Skype</a>
                                                                                                                                                       <a class="vimeo"
                                                                                                                                                          href="#">Vimeo</a>
                                                                                                                                                                                        </span>
            </div>
        </div>
    </section>
    <section id="copyright">
        <span>Copyright 2020 All right reserved.</span>
    </section>
</div>
<script src="themes/js/common.js"></script>
</body>
</html>
