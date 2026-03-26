

<!-- Footer Start -->
<footer class="footer bg-black-400">
    <div class="newsletter bg-black-100 py-50">
        <div class="container-fluid-md">
            <h6 class="text-white uppercase font-400 text-20">{!! $generalSettings()["signup_form_text"] !!}</h6>
            <div class="newsletter-form">
                <div class="gform_wrapper">
                    <div class="gform_body">
                            {!! do_shortcode($generalSettings()["contact_form_shortcode"]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-grid">
        <div class="w-[600px] lgscreen:w-full lgscreen:px-15 mx-auto pt-85 pb-50 text-center">
            <a href="{{ home_url('/') }}">
                <img src="{{ $siteLogo }}" alt="{{ get_bloginfo('name') }}" class="mx-auto">
            </a>

            <div class="footer-menu border-0 border-solid border-b-[0.8px] border-opacity-20 border-gray-100 pb-30">

                @if (has_nav_menu('main_menu'))
                    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('main_menu') }}">
                        {!! wp_nav_menu(['theme_location' => 'main_menu', 'menu_class' => 'flex smscreen:flex-col gap-y-3 justify-center gap-x-14 pt-40', 'echo' => false]) !!}
                    </nav>
                @endif
            </div>
            <div class="footer-navbar pt-30">
                @if (has_nav_menu('hamburger_menu_2'))
                    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('hamburger_menu_2') }}">
                        {!! wp_nav_menu(['theme_location' => 'hamburger_menu_2', 'menu_class' => 'flex flex-wrap gap-x-10 justify-center gap-y-6', 'echo' => false]) !!}
                    </nav>
                @endif

            </div>
            @if($generalSettings()["enquiry_button_footer"])

                <div class="tn-custom mt-40">
                    <a href="{{$generalSettings()["enquiry_button_footer"]["url"]}}" class="btn btn-gold">{{$generalSettings()["enquiry_button_footer"]["title"]}}</a>
                </div>
            @endif

            <div class="copyright">
                <div class="copyright-info pt-40">
                    <ul class="flex smscreen:flex-wrap justify-center gap-x-4">
                        <li><a href="tel:{{$generalSettings()["phone_no"]}}">{{$generalSettings()["phone_no"]}}</a></li>
                        <li><a href="mailto:{{$generalSettings()["email_address"]}}">{{$generalSettings()["email_address"]}}</a>
                    </ul>
                </div>
                <div class="sicon pt-30">
                    @if($generalSettings()["social_links"])
                        <ul class="flex gap-x-3 justify-center">
                            @foreach($generalSettings()["social_links"] as $link)
                                <li><a href="{{$link["link"]["url"]}}" target="{{$link["link"]["target"]}}"><img
                                            src="{{$link["image"]["url"]}}" alt="Instagram"></a></li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
