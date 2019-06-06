<section class="{{ $section_class }}">
    <div class="text-wrapper">
        <h3 class="mb-4">{{ $headline }}</h3>
        <div class="clearfix mb-3">
            {!! $content !!}
        </div>

        <div class="clearfix">
            <strong>Inhaltsstoffe:</strong>
            <ul class="m-0 list-inline">
                @foreach($ingredients as $ingredient)
                    <li class="list-inline-item">{{ $ingredient }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
