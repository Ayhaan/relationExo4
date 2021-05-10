
@extends('layouts.index')

@section('content')
    <h1>Page coté client | All album</h1>
    <a href="{{ route('admin') }}" class="btn btn-secondary">Go Backoffice</a>
    <div class="row my-5">
        <div class="col-8 mx-auto card">
            <div class="card-body">
                <h5 class="card-title"> <b>{{ $album->nom }}</b> | <b>id:</b> {{ $album->id }}</h5>
                <span><b>title IMG :</b> {{ $album->photo->src }}</span>
            </div>
            <form action="{{ route('album.destroy', $album->id) }}">
                @csrf
                <button class="btn btn-danger">delete</button>
            </form>
            
            <img class="card-img-top" src="{{ asset('img/' . $album->photo->src ) }}" alt="{{ $album->photo->src }}">
        </div>
    </div>
@endsection