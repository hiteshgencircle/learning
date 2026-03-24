@php
    $image_position = $section["image_position"];
    $image_block_class = "";
    $text_block_class = "";
    if($image_position == "right"){
        $image_block_class = "lg:order-2";
        $text_block_class = "lg:order-1";
    }
@endphp

<section class="zigzag portrait bg-lightgold py-50 lgscreen:py-30 lgscreen:mt-0 pt-100 lgscreen:pt-30 {{$section["css_classes"]}}">
    <div class="container-fluid">
        <div class="flex flex-wrap items-center">
            <div class="lg:w-6/12 w-full {{$image_block_class}}">
                <div class="img">
                    @if($section["image"])
                        <img src="{{$section["image"]["url"]}}" alt="Endless">
                    @endif
                </div>
            </div>
            <div class="lg:w-6/12 w-full {{$text_block_class}}">
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
