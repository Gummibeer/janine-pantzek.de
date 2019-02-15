<section class="{{ $section_class }}">
    <div class="text-wrapper">
        <h3 class="mb-4">{{ $headline }}</h3>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <strong>Wofür?</strong>
                <ul class="m-0">
                    @foreach($usage as $use)
                        <li>{{ $use }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6">
                <strong>Inhaltsstoffe:</strong>
                <ul class="m-0">
                    @foreach($ingredients as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
                @if(!empty($ingredients_plus))
                <p class="m-0">
                    <em>{!! implode('</em>, <em>', $ingredients_plus) !!}</em>
                </p>
                @endif
            </div>
        </div>
    </div>
</section>
