<section class="zigzag-img-grid bg-add py-45 lgscreen:py-30 relative">
    <div class="container-fluid relative">
        <div class="flex flex-wrap lg:mx-minus-15 mx-0 gap-y-5">
            @if($section["images"] && isset($section["images"][0]["image"]))
                <div class="lg:w-8/12 w-full lg:px-15 px-0">
                    <div class="img">
                        <img src="{{$section["images"][0]["image"]["url"]}}" alt="Our-Rooms">
                    </div>
                </div>
            @endif
            @if($section["images"] && isset($section["images"][1]["image"]))
                <div class="lg:w-4/12 w-full lg:px-15 px-0">
                    <div class="img">
                        <img src="{{$section["images"][1]["image"]["url"]}}" alt="Gangteyfire">
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
