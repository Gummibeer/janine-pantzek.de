@extends('master')

@section('title', sprintf('Fehler 404 | %s', config('app.name')))

@section('content')
    <section>
        <div class="text-wrapper">
            {!! $contents !!}
            <a href="{{ url('/') }}" class="btn btn-primary mt-3">zur Startseite</a>
        </div>
    </section>
@endsection
