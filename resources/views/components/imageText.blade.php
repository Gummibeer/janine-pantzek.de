<section class="{{ $class ?? '' }}">
    <div class="row">
        <div class="col-md-6 @if($direction == 'rtl') order-md-last @endif">
            @isset($href)<a href="{{ $href }}">@endisset
            <div class="embed-responsive embed-responsive-21by9 h-100">
                <div class="embed-responsive-item lazyload img-bg-{{ $position ?? 'center' }}" data-bg="{{ asset($src) }}"></div>
            </div>
            @isset($href)</a>@endisset
        </div>
        <div class="col-md-6">
            <div class="text-wrapper">
                <h2 class="mt-0 mb-3 text-{{ $align ?? 'center' }}">{{ $headline }}</h2>
                <p class="mx-auto @if(isset($href) && isset($button)) mb-4 @else mb-0 @endif">{!! nl2br($slot) !!}</p>
                @if(isset($href) && isset($button))
                    <a href="{{ $href }}" class="btn btn-secondary btn-block m-0">{{ $button }}</a>
                @endisset
            </div>
        </div>
    </div>
</section>
