<section>
    <div class="text-wrapper">
        <h2 class="mb-4">{{ $headline }}</h2>
        @if($treatmentDuration || $treatmentResult || $effectDuration || $downtime)
            <div class="infobox">
                <dl class="row">
                    <div class="col-sm-6 col-lg">
                        <dt>@lang('Behandlungsdauer')</dt>
                        <dd>{{ $treatmentDuration }}</dd>
                    </div>
                    @if($treatmentResult)
                        <div class="col-sm-6 col-lg">
                            <dt>@lang('Behandlungserfolg')</dt>
                            <dd>{{ $treatmentResult }}</dd>
                        </div>
                    @endif
                    @if($effectDuration)
                        <div class="col-sm-6 col-lg">
                            <dt>@lang('Wirkungsdauer')</dt>
                            <dd>{{ $effectDuration }}</dd>
                        </div>
                    @endif
                    <div class="col-sm-6 col-lg">
                        <dt>@lang('Downtime')</dt>
                        <dd>{{ $downtime ?? __('keine') }}</dd>
                    </div>
                </dl>
            </div>
        @endif
        <div class="clearfix">
            {!! $slot !!}
        </div>
    </div>
</section>
