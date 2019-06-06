<section class="{{ $section_class }}">
    <div class="text-wrapper">
        <h2 class="mb-4">{{ $headline }}</h2>
        @if($treatment_duration || $treatment_result || $effect_duration || $downtime)
        <div class="infobox">
            <dl class="row">
                <div class="col-sm-6 col-lg-3">
                    <dt>Behandlungsdauer</dt>
                    <dd>{{ $treatment_duration }}</dd>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <dt>Behandlungserfolg</dt>
                    <dd>{{ $treatment_result }}</dd>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <dt>Wirkungsdauer</dt>
                    <dd>{{ $effect_duration }}</dd>
                </div>
                <div class="col-sm-6 col-lg-3">
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
