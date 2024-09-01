<header class="transparent">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="column">Working Hours Monday - Friday <span
                            class="id-color"><strong>08:00-16:00</strong></span></div>
                    <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                    <!-- social icons -->
                    <div class="column social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="{{ url('/') }}">
                        <img class="logo" src="{{ asset('frontend/images/used/logo.webp') }}"
                            alt="Indonesia AI Day 2024">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                {{-- <div class="header-extra">
                    <div class="v-center">
                        <span id="b-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div> --}}

                <!-- mainmenu begin -->
                <ul id="mainmenu" class="ms-2" style="text-transform: capitalize !important">
                    <li>
                        <a href="{{ request()->routeIs('home') ? '#section-hero' : url('/').'#section-hero' }}" class="navLink" data-target="#section-hero">
                            <span class="indosat_bold" style="font-size:18px">
                                @lang('frontend.menu.home')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('home') ? '#section-about' : url('/').'#section-about' }}" class="navLink" data-target="#section-about">
                            <span class="indosat_bold" style="font-size:18px">
                                @lang('frontend.menu.about_us')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('home') ? '#section-speakers' : url('/').'#section-speakers' }}" class="navLink" data-target="#section-speakers">
                            <span class="indosat_bold" style="font-size:18px">
                                @lang('frontend.menu.speaker')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('home') ? '#section-why-visit' : url('/').'#section-why' }}" class="navLink" data-target="#section-why-visit">
                            <span class="indosat_bold" style="font-size:18px">
                                @lang('frontend.menu.attendee')
                            </span>
                        </a>
                    </li>
                    <li class="p-0">
                        <a href="{{ route('lang', 'id') }}" class="{{ App::getLocale() == 'id' ? 'active' : '' }}" role="button">
                                <span class="indosat_bold" style="font-size:18px">ID</span>
                        </a>
                        <a class="indosat_bold p-0" style="font-size:18px" role="button">|</a>
                        <a href="{{ route('lang', 'en') }}" class="{{ App::getLocale() == 'en' ? 'active' : '' }} p-0" role="button">
                                <span class="indosat_bold" style="font-size:18px">EN</span>
                        </a>
                    </li>
                </ul>

                <!-- mainmenu close -->


            </div>

        </div>
    </div>
</header>
