@php
    $image_position = $section["image_position"];
    $image_block_class = "";
    $text_block_class = "";
    if($image_position == "right"){
        $image_block_class = "lg:order-2";
        $text_block_class = "lg:order-1";
    }
    if($section["images"] && count($section["images"]) == 1){
        $text_block_class .= " lg:w-6/12 ";
    }else{
        $text_block_class .= " lg:w-5/12 ";
    }
@endphp

<section class="zigzag-with-slider zigzag portrait py-50 lgscreen:py-30 lgscreen:mt-0 pt-100 lgscreen:pt-30 {{$section["css_classes"]}}">
    <div class="container-fluid">
        <div class="zigzag-with-slider-content flex flex-wrap items-center">
            @if($section["images"])
                @if(count($section["images"]) == 1)
                    <div class="lg:w-6/12 w-full {{$image_block_class}}">
                        <div class="img">
                                <img src="{{$section["images"][0]["image"]["url"]}}" alt="Endless">
                        </div>
                    </div>
                @else
                    <div class="lg:w-7/12 w-fulllgscreen:pt-30 {{$image_block_class}}">
                        <div class="zigzag-inner-slider swiper relative">
                            <div class="swiper-wrapper">
                                @foreach($section["images"] as $img)
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{$img["image"]["url"]}}" alt="Our-Rooms">
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div
                                class="zigzag-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png"
                                     class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
                            <div
                                class="zigzag-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png" class="max-w-[12px] mdscreen:max-w-[8px]"
                                     alt=""></div>
                        </div>
                    </div>
                @endif
            @endif
            <div class=" w-full {{$text_block_class}}">
                <div class="zigzag-content w-[492px] xlscreen:w-[430px] lgscreen:w-full lgscreen:pt-30 m-auto">
                    @if($section["word"])
                        <span>{{$section["word"]}}</span>
                    @endif
                    <div class="title-black">
                        @if($section["title"])
                            <h5>{!! $section["title"] !!}</h5>
                        @endif

                    </div>
                    <div class="content">
                        <p>
                            {!! $section["description"] !!}
                        </p>
                    </div>
                    <div class="btn-custom mt-30">
                        @if($section["cta_button"])
                            <a href="{{$section["cta_button"]["url"]}}" class="btn btn-gold-border">{{$section["cta_button"]["title"]}}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
