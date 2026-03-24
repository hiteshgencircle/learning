@php
    $background_image = "";
    if($section["background_image"]){
        $background_image = "style='background-image: url(".$section["background_image"]["url"].")'";
    }
@endphp

<section class="full-img-content bg-lightgold py-50 lgscreen:py-30 relative">

    <div class="container-fluid relative">
        <div class="full-img-content-inner relative h-[585px] bg-cover" {!! $background_image !!}>
            <div class="relative z-9 h-full flex flex-col justify-center items-center px-20 text-center">
                <div class="title-white w-[600px] lgscreen:w-full px-15">
                    <h4>{!! $section["title"] !!}</h4>
                </div>
                <div class="content white w-[600px] lgscreen:w-full px-15">
                    <p>
                        {!! $section["description"] !!}
                    </p>
                </div>
                <div class="btn-custom mt-10">
                    @if($section["cta_button"])
                        <a href="{{$section["cta_button"]["url"]}}" class="btn btn-gold">{{$section["cta_button"]["title"]}}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

</section>
