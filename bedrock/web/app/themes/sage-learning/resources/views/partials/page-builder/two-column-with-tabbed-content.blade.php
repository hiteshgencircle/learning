@php
    $image_position = $section["image_position"];
    $image_block_class = "";
    $text_block_class = "";
    if($image_position == "right"){
        $image_block_class = "lg:order-2";
        $text_block_class = "lg:order-1";
    }

@endphp
<section class="zigzag portrait bg-lightgold py-50 lgscreen:py-30 {{$section["css_classes"]}}">
    <div class="container-fluid">
        <div class="flex flex-wrap">
            <div class="lg:w-6/12 w-full {{$image_block_class}}">
                @if($section["image"])
                    <div class="img">
                        <img src="{{$section["image"]["url"]}}" alt="Enjoy Award Winning Luxury With Difference">
                    </div>
                @endif
            </div>
            <div class="lg:w-6/12 w-full {{$text_block_class}}">
                <div class="zigzag-content w-[492px] xlscreen:w-[430px] lgscreen:w-full lgscreen:pt-30 m-auto pt-50">
                    @if($section["word"])
                        <span>{{$section["word"]}}</span>
                    @endif
                    <div class="title-black">
                        @if($section["title"])
                            <h5>{!! $section["title"] !!}</h5>
                        @endif
                    </div>
                        @if($section["tabs"])
                            <div class="content">
                                <ul class="tabs flex flex-wrap gap-x-6 gap-y-3 pt-15">
                                    @foreach($section["tabs"] as $tab_key => $tab_val)
                                        @php
                                            $class = "";
                                            if($tab_key == 0){
                                                $class = "current";
                                            }
                                        @endphp
                                        <li class="tab-link text-13 tracking-02em text-black-200 font-400 font-secondary uppercase pb-5 cursor-pointer {{$class}}" data-tab="{{$tab_val["tab_title"]}}">{!! $tab_val["tab_title"] !!}</li>
                                    @endforeach
                                </ul>
                                <div class="tabs-container pt-25">
                                    @foreach($section["tabs"] as $tab_key => $tab_val)
                                        @php
                                            $class = "";
                                            if($tab_key == 0){
                                                $class = "current";
                                            }
                                        @endphp
                                        <div id="{{$tab_val["tab_title"]}}" class="tab-content {{$class}}">
                                            <div class="flex">
                                                <div class="icon">
                                                    <img src="{{$tab_val["tab_image"]["url"]}}" alt="Room Inclusions">
                                                </div>

                                                <div class="tabs-content global-list pl-20 pt-20">
                                                    {!! $tab_val["tab_content"] !!}

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    <div class="btn-custom mt-30">
                        @if($section["cta_button"])
                            <a href="{{$section["cta_button"]["url"]}}" class="btn btn-gold">{{$section["cta_button"]["title"]}}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
