@extends('master')

@section('content')
    <div class="position-relative">
        <banner :src="mix('images/banner/praxis_1.min.jpg')" />
        <img src="{{ mix('images/moved.svg') }}" style="position:absolute;top:2rem;right:2rem;max-width:20%;max-height:90%;transform:rotate(10deg);" alt="Wir sind umgezogen - Mittelweg 16-17, 20148 Hamburg" />
    </div>
    <text class="bg-light">{!! $contents !!}</text>

    @foreach($imagesWithText as $imageWithText)
        <image-text :direction="$imageWithText['direction']" :position="$imageWithText['position'] ?? null" :headline="$imageWithText['headline']" :src="mix($imageWithText['src'])" :href="url($imageWithText['href'])" :button="$imageWithText['button']">
            {{ $imageWithText['text'] }}
        </image-text>
    @endforeach
@endsection
