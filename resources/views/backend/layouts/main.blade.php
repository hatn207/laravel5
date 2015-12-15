<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <meta name="csrf-token" content="{!! csrf_token() !!}" />
        <link rel="shortcut icon" href="#" type="image/png">

        <title>Admin | @yield('title')</title>

        @yield('scripts_top')
        {!! Html::script('angularJS/components/angular.min.js') !!}
        {!! Html::script('angularJS/app.js') !!}
        <script type="text/javascript">
            App.constant("CSRF_TOKEN", '{!! csrf_token() !!}');
        </script>

        <!-- stylesheet -->
        @yield('stylesheet_top')
        {!! Html::style('assets/backend/css/style.css') !!}
        {!! Html::style('assets/backend/css/style-responsive.css') !!}
        {!! Html::style('assets/backend/css/jquery.stepy.css') !!}
        @yield('stylesheet')

    </head>

    <body ng-app="App" class="sticky-header">

        <section>
            <!-- left side start-->
            @include('backend::layouts.partials.left_sidebar')
            <!-- left side end-->

            <!-- main content start-->
            <div class="main-content" >

                <!-- header section start-->
                @include('backend::layouts.partials.header')
                <!-- header section end-->

                <!-- page heading start-->
                <div class="page-heading">
                    @yield("page-heading")
                </div>
                <!-- page heading end-->

                <!--body wrapper start-->
                <div class="wrapper">                    
                    @yield("content")
                </div>
                <!--body wrapper end-->

                <!--footer section start-->
                @include('backend::layouts.partials.footer')
                <!--footer section end-->


            </div>
            <!-- main content end-->
        </section>

        @yield('before_scripts')
        <!-- Placed js at the end of the document so the pages load faster -->
        {!! Html::script('assets/backend/js/jquery-1.10.2.min.js') !!}
        {!! Html::script('assets/backend/js/jquery-ui-1.9.2.custom.min.js') !!}
        {!! Html::script('assets/backend/js/jquery-migrate-1.2.1.min.js') !!}
        {!! Html::script('assets/backend/js/bootstrap.min.js') !!}
        {!! Html::script('assets/backend/js/modernizr.min.js') !!}
        {!! Html::script('assets/backend/js/jquery.nicescroll.js') !!}
        <!--common scripts for all pages-->
        {!! Html::script('assets/backend/js/scripts.js') !!}
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @yield('scripts')
    </body>
</html>
