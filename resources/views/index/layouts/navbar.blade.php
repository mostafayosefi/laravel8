

    <div class="naturalife-top-bar">
        <div class="top-bar-inner d-flex align-items-center">
            <div class="top-bar-left d-flex align-items-center">
                <div id="nav_menu-5" class="topbar-widget widget widget_nav_menu">
                    <div class="menu-sub-header-container">

                        <ul id="menu-sub-header" class="menu">
                            <li id="menu-item-2220"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2220"><a
                                    href="#">تماس با ما</a></li>
                            <li id="menu-item-2220"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2220"><a
                                    href="/"> صفحه نخست</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-bar-right d-flex align-items-center">
                <div id="social_media_icons-2" class="topbar-widget widget widget_social_media_icons">
                    <div class="naturalife-social-media-widget">
                        <ul class="social_media inline-list">
                            <li class="instagram"><a class="ui-icon-instagram" target="_blank" href="{{$setting->instagram}}"
                                    title="Instagram" rel="nofollow"><span>اینستاگرام TiTlE </span></a></li>
                            <li class="linkedin"><a class="ui-icon-linkedin" target="_blank" href="linkedin"
                                    title="Linkedin" rel="nofollow"><span>لینکدین TiTlE </span></a></li>
                            <li class="telegram"><a class="ui-icon-telegram" target="_blank" href="{{$setting->telegram}}"
                                    title="Telegram" rel="nofollow"><span>تلگرام {{$setting->title}} </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <header class="top-header" data-color="dark">
        <div class="main-header-holder naturalife-dark-header dynamic-skin">
            <div class="header-elements">

                <div class="header-row first">
                    <div class="header-col left">

                        <div id="logo" class="site-logo">
                            <a href="" title=" TiTlE "><img width="6657" height="2639" src="/public/images/ind_himglog"
                                    alt=" TiTlE " class="dark-logo logo-image lazyloaded"
                                    data-ll-status="loaded"><noscript><img width="6657" height="2639"
                                        src="/public/images/ind_himglog" alt=" TiTlE "
                                        class="dark-logo logo-image" /></noscript><img width="6657" height="2639"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%206657%202639&#39;%3E%3C/svg%3E"
                                    alt=" TiTlE " class="light-logo logo-image"
                                    data-lazy-src="/public/images/ind_himglog"><noscript><img width="6657" height="2639"
                                        src="/public/images/ind_himglog" alt=" TiTlE "
                                        class="light-logo logo-image" /></noscript></a>
                        </div><!-- / end #logo -->


                        <nav class="main-menu-wrapper">
                            <ul class="main-menu">
                                <li id="menu-item-800" data-col-size="2" data-depth="0"
                                    class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded">
                                    <a href="#"><span> پنل </span></a>

                                    <ul class="sub-menu multicolumn-holder" style="width: 620px;">
                                        <li>
                                            <ul class="sub-menu">

                                                <li id="menu-item-2648" data-depth="1"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                        href="#">پنل کاربری </a> </li>

                                                <li id="menu-item-2648" data-depth="1"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                        href="{#">مشاهده پروفایل  </a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">تنظیمات پیش فرض</a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">خروج</a> </li>

    </ul>
    </li>

    <li>
    <ul class="sub-menu">
    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">ثبت درخواست جدید</a> </li>
    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">مدیریت درخواست ها</a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">ثبت تیکت</a> </li>
    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">مشاهده پیامها

      (<span style="color: #18f20d;  "   title="" >  3 پیام جدید</span>)

      </a> </li>

    </ul>
    </li></ul>
    </li>
    </ul>
    </nav>

                <nav class="main-menu-wrapper">
                <ul class="main-menu">

                <li id="menu-item-799" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded">
                <a href="#/#"><span>خدمات و سرویس‌ها</span></a>

    <ul class="sub-menu multicolumn-holder" style="width: 620px;">
    <li>
    <ul class="sub-menu">


        @foreach($listpages as $key => $listpage)
        <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('index.page', $listpage->title) }}">{{$listpage->title}}</a> </li>
        @endforeach




    </ul>
    </li>
     </ul>
    </li>



    <li id="menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>سوالات متداول</span></a> </li>
    <li id="menu-item-287" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu-loaded"><a href="#"><span>ارتباط با ما</span></a>
    <ul class="sub-menu">
    <li id="menu-item-1040" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">تماس با ما</a> </li>

    </ul>
    </li>


    <li id="menu-item-287" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu-loaded"><a href="/webservice/all/service"><span>راهنمای وب سرویس</span></a>
        <ul class="sub-menu">


 <li id="menu-item-1040" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Category_wbs  {{$setting->instagram}}</a> </li>


        </ul>
        </li>










    </ul></nav>



                        </div>


                        <div class="header-col right">

    <div id="custom_html-2" class="widget_text header-widget widget widget_custom_html">

                            <div class="textwidget custom-html-widget">





@guest
 @else
@endguest

@if(auth()->guard('user')->user())



<div class="button_wrapper">
    <a href="{{route('user.panel.index')}}" class="button_  style-1">
    <span style="font-size:18px;padding:8px 15px 8px 15px">  {{auth()->guard('user')->user()->name }}</span>
    <span style="font-size:18px;padding:8px 15px 8px 15px">مدیریت پنل من</span></a></div>
    @else



    <div class="button_wrapper">
        <a href="{{route('index.user.login')}}" class="button_  style-1">
        <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span>
        <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span></a></div>


                                <div class="button_wrapper">
        <a href="#" class="button_  style-1">
        <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span>
        <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span></a></div>


        @endif









    </div>
    </div>



                        </div>
                    </div><!-- / .header-row.first -->


                </div><!-- / .header-elements -->
            </div><!-- / .main-header-header -->

                    <div class="sticky-header-holder">
                <div class="header-elements">
                    <div class="header-row naturalife-dark-header">
                        <div class="header-col left">


            <div id="sticky-logo" class="site-logo">
                 <a href="" title=" TiTlE "><img width="4657" height="1847" src="/public/images/ind_himglog" alt=" TiTlE " class="sticky-logo lazyloaded" data-ll-status="loaded"><noscript><img width="4657" height="1847" src="/public/images/ind_himglog" alt="" class="sticky-logo" /></noscript></a>
            </div><!-- / end #sticky-logo -->


                        </div>

                                            <div class="header-col center">



                <nav class="main-menu-wrapper">


                <ul class="main-menu">


     <li id="menu-item-800" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded">
                <a href="#"><span> پنل </span></a>

    <ul class="sub-menu multicolumn-holder" style="width: 620px;">
    <li>
    <ul class="sub-menu">
     <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">پنل کاربری  </a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{#">مشاهده پروفایل  </a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">تنظیمات پیش فرض</a> </li>

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">خروج</a> </li>



    </ul>
    </li>

    <li>
    <ul class="sub-menu">


    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">ثبت درخواست جدید</a> </li>
    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">مدیریت درخواست ها</a> </li>



    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">ثبت تیکت</a> </li>
    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">مشاهده پیامها

      (<span style="color: #18f20d;  "   title="" >  8 پیام جدید</span>)

     </a> </li>

    </ul>
    </li></ul>
    </li>

                <li id="sticky-menu-item-799" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded"><a href="#/#"><span>خدمات  و سرویس‌ها</span></a>

    <ul class="sub-menu multicolumn-holder" style="width: 620px;">
    <li><ul class="sub-menu">





    <li   data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"> MypaGe</a> </li>





    </ul></li>
    </ul>

    </li>

    <li id="sticky-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>سوالات متداول</span></a> </li>
    <li id="sticky-menu-item-287" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu-loaded"><a href="#"><span>ارتباط با ما</span></a>
    <ul class="sub-menu">
    <li id="sticky-menu-item-1040" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">تماس با ما</a> </li>
    </ul>
    </li>
    </ul></nav>



                        </div>

                        <div class="header-col right">





    <div id="custom_html-2" class="widget_text header-widget widget widget_custom_html">

                            <div class="textwidget custom-html-widget">






    <div class="button_wrapper">
    <a href="#" class="button_  style-1">
    <span style="font-size:18px;padding:8px 15px 8px 15px"> مدیریت پنل من  </span>
    <span style="font-size:18px;padding:8px 15px 8px 15px">مدیریت پنل من</span></a></div>


                            <div class="button_wrapper">
    <a href="#" class="button_  style-1">
    <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span>
    <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span></a></div>


                            <div class="button_wrapper">
    <a href="#" class="button_  style-1">
    <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span>
    <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span></a></div>




    </div>
    </div>













                                        <div class="header-tools">
                    <ul>
    <li class="naturalife-sidepanel-button-holder"><a href="#/#" class="naturalife-sidepanel-button"><span></span><span></span><span></span></a></li>
                    </ul>
                </div><!-- / end .nav-buttons -->

                        </div>
                    </div><!-- / .header-row.first -->
                </div>
            </div><!-- / .sticky-header-header -->
                </header>



                <header class="mobile-header">
                    <div class="mobile-header-holder">
                        <div class="header-elements">
                            <div class="header-row naturalife-dark-header">
                                <div class="header-col left">


                        <div id="mobile-logo" class="mobile-logo-holder">
                             <a href="" title=" TiTlE "><img width="6657" height="2639" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%206657%202639&#39;%3E%3C/svg%3E" alt=" TiTlE " class="mobile-logo logo-auto-height" data-lazy-src="/public/images/ind_himglog"><noscript><img width="6657" height="2639" src="/public/images/ind_himglog" alt="" class="mobile-logo logo-auto-height" /></noscript></a>
                        </div><!-- / end #mobile-logo -->



                                </div>

                                <div class="header-col right">
                                                <div class="header-tools">
                                <ul>

                <li class="naturalife-sidepanel-button-holder"><a href="#/#" class="naturalife-sidepanel-button"><span></span><span></span><span></span></a></li>
                                </ul>
                            </div><!-- / end .nav-buttons -->

                                </div>
                            </div><!-- / .header-row -->
                        </div>
                    </div><!-- / .mobile-header-header -->
                </header>

