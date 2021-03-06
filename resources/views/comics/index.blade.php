@extends('layouts.main')

@section('content')
        <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->tile}}</h5>
                            <h6>{{$comic->price}}</h6>
                            <p class="card-text description">{{$comic->description}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">More Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

