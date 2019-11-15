@extends('master')

@section('content')
    <banner :src="mix($banner)" />

    <treatment :headline="$headline" :treatmentDuration="$treatmentDuration" :treatmentResult="$treatmentResult" :effectDuration="$effectDuration" :downtime="$downtime">{!! $contents !!}</treatment>

    @foreach($drips as $drip)
        <drip :headline="$drip['headline']" :ingredients="$drip['ingredients']">{!! $drip['contents'] !!}</drip>
    @endforeach
@endsection
