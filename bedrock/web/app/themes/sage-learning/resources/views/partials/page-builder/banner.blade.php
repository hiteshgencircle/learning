
<section class="banner">
    <div class="banner-slider swiper">
        <div class="swiper-wrapper">
            @if($section["background_image"])
                @foreach($section["background_image"] as $bg_img_key => $bg_img_val)

                    <div class="swiper-slide">
                        <div class="img">
                            <img src="{{$bg_img_val["image"]["url"]}}" alt="Banner">
                        </div>
                        <div class="imgMobile">
                            @if($section["responsive_background_images"][$bg_img_key]["image"]["url"])
                                <img src="{{$section["responsive_background_images"][$bg_img_key]["image"]["url"]}}" alt="">
                            @else
                                <img src="{{$bg_img_val["image"]["url"]}}" alt="Banner">
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
    <div class="banner-content flex-col absolute z-9 top-0 h-full flex justify-center items-center w-full text-center">
        <div class="banner-title px-15">
            <h1 class="text-white">{!! $section["title"] !!}</h1>
            @if($section["banner_button"])
                <a href="{{$section["banner_button"]["url"]}}" class="btn btn-transparent mt-20 inline-block">{{$section["banner_button"]["title"]}}</a>
            @endif
        </div>
        <div class="logos absolute w-full pb-50 bottom-0 ipad:px-20 smscreen2:pb-20">
            @if($section["logos"])
            <ul class="flex flex-wrap justify-center items-center gap-x-5 relative">

                @foreach($section["logos"] as $logo)
                    <li><img src="{{$logo["image"]["url"]}}" alt="Luxury Hotels"></li>
                @endforeach

            </ul>
            @endif
        </div>
    </div>
</section>
