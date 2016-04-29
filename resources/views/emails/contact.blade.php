@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $titre,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            {{ $body }}
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop