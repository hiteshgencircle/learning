<section class="explore-img-grid py-80 lgscreen:py-40">
    <div class="section-title section-title-center">
        @if($section["image"])
            <img src="{{$section["image"]["url"]}}" class="w-[308px]" alt="Gangtey Lodge Entrance">
        @endif
        <div class="title-black">
            @if($section["title"])
                <h3>{!! $section["title"] !!}</h3>
            @endif
        </div>
        <div class="content">
            <p>{!! $section["description"] !!}</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="explore-img-grid-slider swiper mt-50">
            @if($section["3_columns"])
            <div class="swiper-wrapper">
                @foreach($section["3_columns"] as $column)
                    <div class="swiper-slide">
                        @if($column["image"])
                            <div class="img">
                                <img src="{{$column["image"]["url"]}}"
                                     alt="Escapes">
                            </div>
                        @endif
                        <div class="explore-img-content content text-center pt-30 px-20">
                            <h6>{!! $column["title"] !!}</h6>
                            <p>
                                {!! $column["description"] !!}
                            </p>
                            @if($column["link"])
                                <div class="btn-custom mt-15">
                                    <a href="{{$column["link"]["url"]}}" class="btn btn-red-link">{{$column["link"]["title"]}}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach


            </div>
            @endif
            <div
                class="explore-swiper-button-next absolute hidden mdscreen:flex top-30per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png"
                     class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
            <div
                class="explore-swiper-button-prev absolute hidden mdscreen:flex top-30per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                <img src="{{get_template_directory_uri()}}/resources/images/theme-images/white-arrow.png"
                     class="max-w-[12px] mdscreen:max-w-[8px]" alt=""></div>
        </div>
    </div>
</section>
