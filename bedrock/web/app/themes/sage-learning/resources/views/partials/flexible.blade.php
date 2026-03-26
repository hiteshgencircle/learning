{{-- resources/views/partials/flexible.blade.php --}}

@if($builder)
  @foreach($builder as $bk)
    @switch ($bk["acf_fc_layout"])
        @case('first_row')
            <section class="cta-section">

                    <h2>{{ $bk['short_description'] }}</h2>
                    @if($bk['age_group'])
                      @foreach($bk['age_group'] as $agk)
                        <p>Age Group : {{$agk["label"]}}</p>
                      @endforeach

                    @endif
                    @if($bk['gender'])
                      <p>Gender : {{$bk['gender']["label"]}}</p>
                    @endif
                </section>
        @break
    @endswitch

  @endforeach
@endif
