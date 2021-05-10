
@extends('layouts.index')

@section('content')
    <h1>Coté Admin | Récap album + photo</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary">Go siteWeb</a>
    <div class="row my-5">


        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom Album</th>
                <th scope="col">SRC</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($albums as $album)
                    <tr>
                    <th>1</th>
                    <td>{{ $album->nom }}</td>
                    <td>{{ $album->photo->src }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('album.show', $album->id) }}" class="btn btn-primary">show</a>
                        <form action="{{ route('album.destroy', $album->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                    </tr>

                @empty
                    <p>pas d'album dispo</p>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection