@extends('master')

@section('content')
    @foreach($men as $man)
        <banner :src="mix($man['banner'])" />

        @if(!empty(trim($man['contents'])))
            <text>{!! $man['contents'] !!}</text>
        @endif

        @if(isset($man['blocks']))
            <section class="row">
                @foreach($man['blocks'] as $block)
                    <div class="col">
                        <div class="text-wrapper">
                            <h3 class="mb-4">{{ $block['headline'] }}</h3>

                            {!! (new League\CommonMark\CommonMarkConverter)->convertToHtml($block['text']) !!}

                            @if(isset($block['href']) && isset($block['button']))
                                <a href="{{ url($block['href']) }}" class="btn btn-secondary btn-block m-0">{{ $block['button'] }}</a>
                            @endisset
                        </div>
                    </div>
                @endforeach
            </section>
        @endif
    @endforeach
@endsection
