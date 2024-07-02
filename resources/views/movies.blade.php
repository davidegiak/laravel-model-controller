@extends('layouts.app')

@section('content')
<h1>FILMSS</h1>
@foreach ($film as $item)
    <h3> {{$item->title}} </h3>
@endforeach
@endsection
