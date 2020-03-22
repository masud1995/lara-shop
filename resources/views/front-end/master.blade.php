<!DOCTYPE html>
<html>
<head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Developed By" content="Abdullah Al Masud, TwinsTech BD (www.twinstechbd.com), 01852019107">
        <meta name="keywords" content="">
        <meta name="description" content="Gulshan Shop online shopping in bangladesh with free home delivery. Shop online for latest electronics, mobiles, fashion apparels. ✓Cash On Delivery ✓Low Prices">
        <meta property="og:url" content="http://gulshanshop.com/" />
        <meta property="og:type" content="website">
        <meta property="og:title" content="Online Shopping In Bangladesh: Fashion, Electronics, Mobiles - Gulshanshop.com" />
        <meta property="og:description" content="Daraz.com.bd online shopping in bangladesh with free home delivery. Shop online for latest electronics, mobiles, fashion apparels. ✓Cash On Delivery ✓Low Prices" />

        <link rel="shortcut icon" href="{{ asset('/') }}image/manufacturer_logo/logo.png">

        <link rel="stylesheet" href="{{ asset('/') }}front_asset/style.css">
        <link rel="stylesheet" href="{{ asset('/') }}front_asset/responsive.css">
        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/normalize.css">

        <link rel="stylesheet" href="{{ asset('/') }}slider-asset/css/owl.carousel.min.css">


        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/etalage.css">


        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/mega_menu.css">
        <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/customshop_style.css">

        <link rel="stylesheet" href="{{ asset('/') }}front_asset/etalage.css" type="text/css" media="all" />
        <script src="{{ asset('/') }}front_asset/jquery.min.js"></script>
        <script src="{{ asset('/') }}front_asset/jquery.etalage.min.js"></script>
           <!-- <link rel="shortcut icon"  href="front_asset/icon.png"/> -->
        {!! $basic->header_code !!}
        <script>
            jQuery(document).ready(function ($) {

                $('.etalage').etalage({
                    thumb_image_width: 400,
                    thumb_image_height: 400,
                    source_image_width: 500,
                    source_image_height: 500,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        // alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });


        </script>

    </head>

    <body style="background-color:#fff"  >

<!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" >-->

        <!--	=======================header top section=========================-->
        @include('front-end.includes.header')
        <!--=========================header bottom section==================-->


      <div class="wrapper">
            @yield('content')
      </div>
        <!--content area end-->


        <!--<footer class="navbar-fixed-bottom " style="width: 100%;background: none;" id="SidebarCardMenu">-->
        @include('front-end.includes.footer')


    <script src="{{ asset('/') }}slider-asset/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}slider-asset/js/owl.carousel.min.js"></script>

    <script>

        $(document).ready(function () {
            //owl carousel

            if ($('.product-category').hasClass('owl-carousel')) {

                $('.owl-carousel').owlCarousel({
                    items: 6,
                    margin: 15,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    slideBy: 6,
                    autoplayHoverPause: true,
                    rewind: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        760: {
                            items: 3
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 6
                        }
                    }
                })
            }
            $("#searchpro,#msearchpro").keyup(function() {
              var text = $(this).val();
              if(text == ""){
                text = "null";
              }
              var url = "{{ url('/') }}/search/"+text;

              $(document).prop('title', 'Search Result');
              //console.log(url);
              $.ajax({
                 type:'GET',
                 url: url,
                 success:function(data) {
                    $(".wrapper").html(data);
                 }
              });
            });
        });
    </script>
    <script src="{{ asset('/') }}front_asset/js/bootstrap.min.js"></script>
    <script>
        $('.megaDropMenu').hover(function() {
            $(this).addClass('open');
        }, function() {
            $(this).removeClass('open');
        });

    </script>

    <script>
        $(window).scroll(function () {
            var wScroll = $(this).scrollTop();
              if (wScroll > 88) {
                $('#SidebarCardMenu').css({
                    'display': 'block'
                });
            }
            if (wScroll < 88) {
                $('#SidebarCardMenu').css({
                    'display': 'none'
                });
            }
        });
    </script>
    <script>
      @yield('script')
    </script>
    {!! $basic->footer_code !!}
</body>


<!-- Mirrored from www.egbazar.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 06:54:29 GMT -->
</html>
