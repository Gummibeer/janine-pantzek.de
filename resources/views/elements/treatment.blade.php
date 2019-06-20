<section class="{{ $section_class }}">
    <div class="text-wrapper">
        <h2 class="mb-4">{{ $headline }}</h2>
        @if($treatment_duration || $treatment_result || $effect_duration || $downtime)
        <div class="infobox">
            <dl class="row">
                <div class="col-sm-6 col-lg">
                    <dt>Behandlungsdauer</dt>
                    <dd>{{ $treatment_duration }}</dd>
                </div>
                @if($treatment_result)
                    <div class="col-sm-6 col-lg">
                        <dt>Behandlungserfolg</dt>
                        <dd>{{ $treatment_result }}</dd>
                    </div>
                @endif
                @if($effect_duration)
                <div class="col-sm-6 col-lg">
                    <dt>Wirkungsdauer</dt>
                    <dd>{{ $effect_duration }}</dd>
                </div>
                @endif
                <div class="col-sm-6 col-lg">
                    <dt>Downtime</dt>
                    <dd>{{ $downtime ?? 'keine' }}</dd>
                </div>
            </dl>
        </div>
        @endif
        <div class="clearfix">
            {!! $content !!}
        </div>
    </div>
</section>
