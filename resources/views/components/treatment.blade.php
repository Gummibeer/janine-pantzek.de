<section>
    <div class="text-wrapper">
        <h2 class="mb-4">{{ $headline }}</h2>
        @if($treatmentDuration || $treatmentResult || $effectDuration || $downtime)
            <div class="infobox">
                <dl class="row">
                    <div class="col-sm-6 col-lg">
                        <dt>Behandlungsdauer</dt>
                        <dd>{{ $treatmentDuration }}</dd>
                    </div>
                    @if($treatmentResult)
                        <div class="col-sm-6 col-lg">
                            <dt>Behandlungserfolg</dt>
                            <dd>{{ $treatmentResult }}</dd>
                        </div>
                    @endif
                    @if($effectDuration)
                        <div class="col-sm-6 col-lg">
                            <dt>Wirkungsdauer</dt>
                            <dd>{{ $effectDuration }}</dd>
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
            {!! $slot !!}
        </div>
    </div>
</section>
