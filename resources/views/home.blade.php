
@extends('layouts.index')

@section('content')
    <h1>Page coté client | All album</h1>
    <a href="{{ route('admin') }}" class="btn btn-secondary">Go Backoffice</a>
    <div class="row my-5">
        @forelse ($albums as $album)
        <div class="col-4 card">
            <div class="card-body">
                <h5 class="card-title"> <b>{{ $album->nom }}</b></h5>
                <span><b>title IMG :</b> {{ $album->photo->src }}</span>
            </div>
            <img class="card-img-top" src="{{ asset('img/' . $album->photo->src ) }}" alt="{{ $album->photo->src }}">
        </div>
        @empty
        <p>pas d'album dispo</p>
        @endforelse
    </div>
@endsection