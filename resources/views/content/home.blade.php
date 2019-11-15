@extends('master')

@section('content')
    <banner :src="mix('images/banner/praxis_1.min.jpg')" />
    <text class="bg-light">{!! $contents !!}</text>

    @foreach($imagesWithText as $imageWithText)
        <image-text :direction="$imageWithText['direction']" :headline="$imageWithText['headline']" :src="mix($imageWithText['src'])" :href="url($imageWithText['href'])" :button="$imageWithText['button']">
            {{ $imageWithText['text'] }}
        </image-text>
    @endforeach
@endsection
