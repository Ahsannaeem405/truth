<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                    <div class=""></div>
                    <h1 class="text-center font-weight-bold m-auto">Logo</h1>
                    {{--<img src="{{asset('image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png')}}" style="width: 90%;background-color: black">--}}
                </a></li>
            <li class="nav-item nav-toggle" style="position: absolute;margin-left: 195px"><a
                    class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            @if(\Illuminate\Support\Facades\Auth::user()->role=='admin')
                <li class="@yield('dashboard')"><a href="{{url('admin/index')}}"><i
                            class="feather icon-home"></i><span class="menu-title"
                                                                data-i18n="Dashboard">Dashboard</span></a>
                </li>

                <li class="@yield('users')"><a href="{{url('admin/user')}}"><i class=" fa fa-plus"></i><span
                            class="menu-title" data-i18n="Dashboard">Users</span></a>
                </li>

                <li class="@yield('charity')"><a href="{{url('admin/charity')}}"><i class=" fa fa-plus"></i><span
                            class="menu-title" data-i18n="Dashboard">Charity</span></a>
                </li>
{{--
                <li class="@yield('charity_payment')"><a href="{{url('admin/charity/payment')}}"><i class=" fa fa-plus"></i><span
                    class="menu-title" data-i18n="Dashboard">Charity Payment</span></a>
        </li> --}}
            @endif

            @if(\Illuminate\Support\Facades\Auth::user()->role=='user')
                <li class=" @yield('dashboard') "><a href="{{url('user/index')}}"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>

            @endif


            @if(\Illuminate\Support\Facades\Auth::user()->role=='charity')
                <li class=" @yield('dashboard') "><a href="{{url('charity/index')}}"><i
                            class="feather icon-home"></i><span class="menu-title"
                                                                data-i18n="Dashboard">Dashboard</span></a>
                </li>

            @endif


        </ul>
    </div>
</div>
