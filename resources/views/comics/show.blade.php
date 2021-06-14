@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="mb-5">
         <span class="badge bg-primary"> {{ $comic->type }}</span>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{$comic->image}}" alt="{{$comic->title}}">
            </div>
            <div class="col-md-6">
               <h2>Description: </h2>
               <p>{{$comic->description}}</p>
               <h3>Data: {{$comic->sale_date}}</h3>
               <h3>Prezzo: {{$comic->price}}</h3>
            </div>

        </div>
        <a href="{{ route('comics.index')}}">Go, come back</a>
    </div>
    
@endsection