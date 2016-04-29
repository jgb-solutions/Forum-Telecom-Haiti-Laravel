@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $titre,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            Nous vous remercions pour l'intérêt que vous portez a ce forum. Votre participation a été confirmée. Prière de présenter une pièce d'indentité le jour du forum.
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop