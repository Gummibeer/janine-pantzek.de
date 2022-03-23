<section>
    <div class="row">
        @foreach($treatments as $treatment)
            <div class="col-12 col-md-6 py-5 @if(($loop->iteration % 2 == 0 && $loop->iteration % 4 != 0) || ($loop->iteration % 4 == 3)) bg-white @else bg-light @endif">
                <h4 class="px-4 text-center">{{ $treatment['headline'] }}</h4>
                <div class="row">
                    <div class="col-6 px-4">
                        <p>{{ $treatment['text'] }}</p>
                    </div>
                    <div class="col-6 px-4">
                        <dl>
                            <dt>Behandlungsdauer</dt>
                            <dd>{{ $treatment['duration'] }}</dd>

                            @if($treatment['effect'])
                            <dt>Wirkungsdauer</dt>
                            <dd>{{ $treatment['effect'] }}</dd>
                            @endif

                            <dt>Downtime</dt>
                            <dd>{{ $treatment['downtime'] ?? 'keine' }}</dd>
                        </dl>
                    </div>
                    @foreach($treatment['buttons'] as $button)
                        <div class="col-6 px-4">
                            <a href="{{ url(app()->getLocale().'/'.trim($button['url'], '/')) }}" class="btn btn-block btn-outline-secondary btn-sm">{{ $button['text'] }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            @if($loop->iteration % 2 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</section>
