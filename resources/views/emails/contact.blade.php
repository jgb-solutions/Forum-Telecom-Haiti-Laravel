@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $data['firstname'] . ' ' . $data['lastname'],
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            {{ $body }}
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop