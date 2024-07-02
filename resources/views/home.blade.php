@extends('layouts.app')

@section('content')
<h1>Dati da "config/data.php": {{ $dati['home'] }}</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
<a href="{{route("movies")}}">MOVIESS</a>
@endsection
