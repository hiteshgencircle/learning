@php
    $section_classes = "";
    if($section["css_classes"]){
        $section_classes = $section["css_classes"];
    }
@endphp

<section class="discover-rooms  py-45 lgscreen:py-30 {{$section_classes}}">
    <div class="container-fluid">
        <div class="section-title section-title-center">
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
                @if($section["cta_button_1"])
                    <div class="btn-custom mt-20">
                        <a href="{{$section["cta_button_1"]["url"]}}" class="btn btn-gold-link">{{$section["cta_button_1"]["title"]}}</a>
                    </div>
                @endif
        </div>
        <div class="discover-rooms-slider swiper mt-50">
            @if($section["images"])
            <div class="swiper-wrapper">
                @foreach($section["images"] as $img)
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="{{$img["image"]["url"]}}" alt="KenSpenc">
                        </div>
                    </div>
                @endforeach


            </div>
            <div
                class="discover-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                     alt=""></div>
            <div
                class="discover-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
            @endif
        </div>
        @if($section["cta_button_2"])
            <div class="btn-custom flex items-center justify-center mt-40">
                <a href="{{$section["cta_button_2"]["url"]}}" class="btn btn-red-border">{{$section["cta_button_2"]["title"]}}</a>
            </div>
        @endif

    </div>
</section>
