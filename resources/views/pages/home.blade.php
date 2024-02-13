@extends('layouts.main-layout')
@section('head-title')
    <title>Homepage</title>
@endsection

@section('content')
    <main>
        <div class="container">
            <h2>Movie:</h2>
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        {{ $movie -> title }}
                    </li>
                @endforeach
            </ul>
        </div>
        
    </main>
@endsection
