<section class="testimonial-with-content py-50 lgscreen:py-30 {{$section["css_classes"]}}">
    <div class="flex flex-wrap items-center">
        <div class="lg:w-5/12 w-full">
            @if($section["image"])
                <div class="img">
                    <img src="{{$section["image"]["url"]}}" alt="One of my all time favourtie hotels">
                </div>
            @endif

        </div>
        <div class="lg:w-7/12 w-full">
            @if($section["testimonials"])
                <div class="testimonial-with-content-slider swiper pb-50 ">
                    <div class="swiper-wrapper">
                        @foreach($section["testimonials"] as $testimonial)
                            <div class="swiper-slide">
                                <div class="px-100 xlscreen:px-50 lgscreen:px-15">
                                    <span class="quote text-[196px] text-gray-100 font-heading mb-[-90px] block">“</span>
                                    <h6 class="text-18 font-400">{{$testimonial["title"]}}</h6>
                                    <div class="content">
                                        <p>
                                            {{$testimonial["content"]}}
                                        </p>
                                    </div>
                                    <span class="text-11 font-secondary text-black-200 font-400">{{$testimonial["user"]}}</span>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="swiper-scrollbar testimonial-swiper-scrollbar"></div>
                </div>
            @endif
        </div>
    </div>
</section>
