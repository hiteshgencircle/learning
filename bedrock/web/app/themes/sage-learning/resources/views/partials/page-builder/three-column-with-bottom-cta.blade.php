<section class="content-with-gallery {{$section["css_classes"]}} pt-80 lgscreen:pt-30">
    <div class="section-title section-title-center">
        @if($section["word"])
            <span>{{$section["word"]}}</span>
        @endif
        <div class="title-black">
            @if($section["title"])
                <h3>{!! $section["title"] !!}</h3>
            @endif

        </div>
        <div class="content mx-auto lgscreen:w-full lgscreen:px-15">
            @if($section["bullets"])
                <ul class="flex flex-wrap pt-15 gap-x-6 gap-y-3 justify-center">
                    @foreach($section["bullets"] as $bullet)
                        <li>{{$bullet["text"]}}</li>
                    @endforeach
                </ul>
            @endif
            <p>
                {!! $section["description"] !!}
            </p>
        </div>
    </div>
    @if($section["images"])
    <div class="content-gallery-slider swiper mt-50">
        <div class="swiper-wrapper">
            @foreach($section["images"] as $image)
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{$image["image"]["url"]}}" alt="Our Room Gallery">
                    </div>
                </div>
            @endforeach


        </div>
        <div class="content-gallery-swiper-button-next absolute hidden mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer"><img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
        <div class="content-gallery-swiper-button-prev absolute hidden mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer"><img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
    </div>
    @endif
    @if($section["cta_button"])
        <div class="btn-custom flex items-center justify-center pt-40 pb-100 lgscreen:pb-30">
            <a href="{{$section["cta_button"]["url"]}}" class="btn btn-black-link">{{$section["cta_button"]["title"]}}</a>
        </div>
    @endif

</section>
