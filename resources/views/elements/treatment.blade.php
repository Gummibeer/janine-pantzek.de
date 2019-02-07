<section class="{{ $section_class }}">
    <div class="text-wrapper">
        <h2 class="mb-4">{{ $headline }}</h2>
        <div class="infobox">
            <dl>
                <dt>Behandlungsdauer</dt>
                <dd>{{ $treatment_duration }}</dd>

                <dt>Behandlungserfolg</dt>
                <dd>{{ $treatment_result }}</dd>

                <dt>Wirkungsdauer</dt>
                <dd>{{ $effect_duration }}</dd>

                <dt>Downtime</dt>
                <dd>{{ $downtime ?? 'keine' }}</dd>
            </dl>
        </div>
        <div class="clearfix">
            {!! $content !!}
        </div>
    </div>
</section>
