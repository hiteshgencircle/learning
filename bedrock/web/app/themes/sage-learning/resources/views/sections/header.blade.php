<!-- Wrapper Start -->
<div class="menuclose h-full fixed bg-transparent hidden w-[calc(100%_-_385px)]"></div>

<!-- Header Start -->

<header class="header absolute top-0 left-0 w-full py-30 z-99">
    <div class="container-fluid relative">
        <div class="grid grid-cols-3 items-center justify-between ipad:flex ipad:justify-between">
            <div class="logo">
                <a href="{{ home_url('/') }}">
                    <img src="{{ $siteLogo }}" alt="{{ get_bloginfo('name') }}">
                </a>
            </div>
            <div class="navbar ipad:hidden">
                @if (has_nav_menu('main_menu'))
                    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('main_menu') }}">
                        {!! wp_nav_menu(['theme_location' => 'main_menu', 'menu_class' => 'flex flex-wrap gap-x-8 justify-center', 'echo' => false]) !!}
                    </nav>
                @endif
            </div>
            <div class="header-right flex items-center justify-end">
                <div class="menu-icon">
                    <a href="javascript:void(0)" class="menu-icon flex flex-wrap items-center justify-center">
                        <p class="uppercase text-13 font-400 text-black-100 tracking-02em pr-10">Close menu</p>
                        <div class="flex flex-wrap w-30 space-y-[4px] menu-line cursor-pointer">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </a>
                </div>
                @if($generalSettings()["enquiry_button"])

                    <div class="btn-custom ml-15 smscreen:hidden">
                        <a href="{{$generalSettings()["enquiry_button"]["url"]}}" class="btn btn-gold">{{$generalSettings()["enquiry_button"]["title"]}}</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</header>
<div class="main-nav bg-gray-100 w-[385px] h-screen fixed top-0 overflow-x-hidden z-9 pt-150 smscreen:pt-90 pb-50">
    <div class="text-center px-40">
        @if($generalSettings()["menu_logo"])

            <img src="{{$generalSettings()["menu_logo"]["url"]}}" alt="logo">
        @endif
        <div class="main-menu pt-20 border-0 border-b-[0.8px] border-solid border-gold border-opacity-40 pb-40">
            @if (has_nav_menu('hamburger_menu'))
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('hamburger_menu') }}">
                    {!! wp_nav_menu(['theme_location' => 'hamburger_menu', 'menu_class' => 'grid gap-y-6', 'echo' => false]) !!}
                </nav>
            @endif
        </div>
        <div class="main-menu-sub pt-40">
            @if (has_nav_menu('hamburger_menu_2'))
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('hamburger_menu_2') }}">
                    {!! wp_nav_menu(['theme_location' => 'hamburger_menu_2', 'menu_class' => 'grid gap-y-3', 'echo' => false]) !!}
                </nav>
            @endif

        </div>
        <div class="sicon pt-30">
            @if($generalSettings()["social_links"])
                <ul class="flex gap-x-2 justify-center">
                    @foreach($generalSettings()["social_links"] as $link)
                        <li><a href="{{$link["link"]["url"]}}" target="{{$link["link"]["target"]}}"><img
                                    src="{{$link["image"]["url"]}}" alt="Instagram"></a></li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="ct-info pt-15">
            <ul class="flex justify-center gap-x-4">
                <li><a href="tel:{{$generalSettings()["phone_no"]}}">{{$generalSettings()["phone_no"]}}</a></li>
                <li><a href="mailto:{{$generalSettings()["email_address"]}}">{{$generalSettings()["email_address"]}}</a>
                </li>
            </ul>
        </div>
        @if($generalSettings()["enquiry_button"])

            <div class="btn-custom mt-30 smscreen:block">
                <a href="{{$generalSettings()["enquiry_button"]["url"]}}" class="btn btn-gold">{{$generalSettings()["enquiry_button"]["title"]}}</a>
            </div>
        @endif

    </div>
</div>
