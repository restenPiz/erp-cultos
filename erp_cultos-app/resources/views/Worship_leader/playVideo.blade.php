@extends('Layout.Index')
@section('content')

    @role('worship_leader')

    <video controls>
        <source src="{{ $files->File }}" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
    </video>

    @endrole

@endsection