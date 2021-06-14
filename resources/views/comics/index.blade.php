{{--extension of main--}}
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">COMICS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>TYPE</th>
                    <th colspan="3">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id}} </td>
                        <td>{{ $comic->title}} </td>
                        <td>{{ $comic->type}} </td>
                        <td> <a class="btn btn-success" href="{{ route('comics.show', $comic->id ) }}">SWOH</a> </td>
                        <td>EDIT</td>
                        <td>DELITE</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{--per le paginazioni in fondo--}}
       {{-- {{ $comics->links() }}  --}} 
    </div>
@endsection