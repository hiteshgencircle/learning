<section class="instagram bg-brown py-80 lgscreen:py-40">
    <div class="section-title section-title-center">
        <div class="title-white">
            <h3>{!! $section["title"] !!}</h3>
        </div>
        <div class="content white">
            <p>
                {!! $section["description"] !!}
            </p>
        </div>

    </div>
    <div class="container-fluid">
        <div class="instagram-slider relative swiper mt-30">
            @if($section["images"])
                <div class="swiper-wrapper">
                    @foreach($section["images"] as $image)
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{$image["image"]["url"]}}" alt="instagram">
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif


            <div class="instagram-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer"><img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
            <div class="instagram-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer"><img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
        </div>
    </div>
</section>
