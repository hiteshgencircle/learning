@php
    $section_classes = "";
    if($section["css_classes"]){
        $section_classes = $section["css_classes"];
    }
@endphp
<section class="common-content py-80 lgscreen:py-40 {{$section_classes}}">
    <div class="w-[1008px] mx-auto lgscreen:w-full px-20 text-center">
        @if($section["image"])
            <img src="{{$section["image"]["url"]}}" class="m-auto w-[45px]" alt="Endless">
        @endif
        <div class="title-gold">
            <h2>{!! $section["heading"] !!}</h2>
        </div>
        <div class="content w-[800px] ipad:w-full ipad:px-20 m-auto">
            <p>
                {!! $section["description"] !!}
            </p>
        </div>
            @if($section["cta_button"])
                <div class="btn-custom mt-30">
                    <a href="{{$section["cta_button"]["url"]}}" class="btn btn-gold-border">{{$section["cta_button"]["title"]}}</a>
                </div>
            @endif
    </div>
</section>
