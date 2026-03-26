<section class="accordion-container  lgscreen:py-30 pb-80 lgscreen:pb-30 {{$section["css_classes"]}}">
    <div class="w-[1000px] mx-auto lgscreen:w-full px-15">
        @if($section["title"])
            <div class="title-black">
                <h5>{{$section["title"]}}</h5>
            </div>
        @endif
        @if($section["question_answer"])
                <div class="accordion-content pt-20">
                    @foreach($section["question_answer"] as $qa)
                        <div class="accordion-set">
                            <a href="javascript:void(0)" class="uppercase text-black-100 text-16 tracking-02em font-400">{{$qa["question"]}}</a>
                            <div class="content accordion-inner-content">
                                <p>{{$qa["answer"]}}</p>
                            </div>
                        </div>
                    @endforeach


                </div>
        @endif

        <div class="btn-link text-right pt-25">
            @if($section["list_page"])
                <a href="{{$section["list_page"]["url"]}}" class="text-red font-secondary text-14 tracking-04em hover:text-black-100">{!! $section["list_page"]["title"] !!}</a>
            @endif
        </div>
    </div>
</section>
