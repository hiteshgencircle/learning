<section class="experiences-slider {{$section["css_classes"]}}">
    <div class="container-fluid">
        <div class="section-title w-[777px] lgscreen:w-full">
            @if($section["words"])
                <span>{!! $section["words"] !!}</span>
            @endif
            <div class="title-black">
                @if($section["title"])
                    <h3>{!! $section["title"] !!}</h3>
                @endif
            </div>
            <div class="content">
                <p>
                    {!! $section["description"] !!}
                </p>
            </div>
        </div>
        @if($section["images"])
            <div class="experiences-inner-slider swiper mt-50">
                <div class="swiper-wrapper">
                    @foreach($section["images"] as $image)
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{$image["image"]["url"]}}" alt="KenSpenc">
                            </div>
                            <span>{{$image["caption"]}}</span>
                        </div>
                    @endforeach
                </div>
                <div
                    class="experiences-swiper-button-next absolute flex mdscreen:flex top-50per xlscreen:top-[40%] right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                    <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                         alt=""></div>
                <div
                    class="experiences-swiper-button-prev absolute flex mdscreen:flex top-50per xlscreen:top-[40%] left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                    <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
            </div>
        @endif
    </div>
</section>
