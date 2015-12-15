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
    @yield('stylesheet_top')
    {!! Html::style('assets/backend/css/style.css') !!}
    {!! Html::style('assets/backend/css/style-responsive.css') !!}
    {!! Html::style('assets/backend/css/jquery.stepy.css') !!}
    @yield('stylesheet')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">
    @yield("content")
    

</div>


@yield('before_scripts')
<!-- Placed js at the end of the document so the pages load faster -->
{!! Html::script('assets/backend/js/jquery-1.10.2.min.js') !!}
{!! Html::script('assets/backend/js/bootstrap.min.js') !!}
{!! Html::script('assets/backend/js/modernizr.min.js') !!}
<!-- Placed js at the end of the document so the pages load faster -->
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
