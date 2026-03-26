<section class="testimonial bg-lightgold py-100 lgscreen:py-50">
    <div class="container-fluid-md">
        <div class="text-center">
            <h6>{!! $section["title"] !!}</h6>
        </div>
        <div class="testimonial-slider swiper mt-0 py-50">
            @if($section["items"])
                <div class="swiper-wrapper">
                    @foreach($section["items"] as $items)
                        <div class="swiper-slide">
                            <div class="text-center">
                                <p>
                                    {!! $items["review"] !!}
                                </p>
                                @if($items["logo"])
                                    <img src="{{$items["logo"]["url"]}}" class="w-[120px] mx-auto mt-30" alt="Conde Nast">
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-scrollbar"></div>
            @endif
        </div>
    </div>
</section>
