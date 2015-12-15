<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="index.html"><img src="{!! asset('assets/backend/images/logo.png') !!}" alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href="index.html"><img src="{!! asset('assets/backend/images/logo_icon.png') !!}" alt=""></a>
    </div>
    <!--logo and iconic logo end-->


    <div class="left-side-inner">

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="menu-list"><a href=""><i class="fa fa-users"></i> <span>Users</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{!! route('user.index') !!}">Index</a></li>
                    <li><a href="boxed_view.html"> Boxed Page</a></li>
                    <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                    <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                </ul>
            </li>
            <li><a href="/surveys/index"><i class="fa fa-pencil"></i> <span>Survey</span></a></li>
        </ul>
        <!--sidebar nav end-->

    </div>
</div>