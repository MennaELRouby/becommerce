<!DOCTYPE html>
<html>

<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body>
    @include('admin.layout.includes.header')
    <div class="page-content">
        @if (Session::has('message'))
            <div class="alert alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif

        <div class="row">
            @include('admin.layout.includes.sidenav')
            <div class="col-md-10 display-area">
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="content-box-large">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div><!--/Display area after sidenav-->
        </div>

    </div><!--/Page Content-->

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".submenu > a").click(function(e) {
                e.preventDefault();
                var $li = $(this).parent("li");
                var $ul = $(this).next("ul");

                if ($li.hasClass("open")) {
                    $ul.slideUp(350);
                    $li.removeClass("open");
                } else {
                    $(".nav > li > ul").slideUp(350);
                    $(".nav > li").removeClass("open");
                    $ul.slideDown(350);
                    $li.addClass("open");
                }
            });
        });
    </script>
    <script type="text/javascript" src=" https://js.stripe.com/v3/"></script>
    {{-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> --}}
    <script type="text/javascript">
        // Initialize Stripe with your publishable key
        const stripe = Stripe('
                pk_test_51PnhiSRrY7m4wkAm4rxTOXbOAc0xOl7Iv2nXq959vweaFbVpiqFPGbt3QiZ8YPi4ilr30v7AryivxbJMQmVw5sSy00ItFvTD2p ');
    </script>
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
