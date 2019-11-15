@extends('master')

@section('content')
    @isset($banner)
        <banner :src="mix($banner)" />
    @endisset

    <text>{!! $contents !!}</text>
@endsection
