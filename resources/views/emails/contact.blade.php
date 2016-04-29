@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $titre,
        'level' => 'h1'
    ])

	<h4>Message de {{ $firstname . ' ' . $lastname }}</h4>

    @include('beautymail::templates.ark.contentStart')
        <p>
            {{ $body }}
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop