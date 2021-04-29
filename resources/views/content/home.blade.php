@extends('master')

@section('content')
    <div class="position-relative">
        <banner :src="mix('images/banner/praxis_1.min.jpg')" />
    </div>
    <text class="bg-light">{!! $contents !!}</text>

    @foreach($imagesWithText as $imageWithText)
        <image-text :direction="$imageWithText['direction']" :position="$imageWithText['position'] ?? null" :headline="$imageWithText['headline']" :src="mix($imageWithText['src'])" :href="url($imageWithText['href'])" :button="$imageWithText['button']">
            {{ $imageWithText['text'] }}
        </image-text>
    @endforeach
@endsection
