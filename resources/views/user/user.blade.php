@extends('layouts.main')

@section('contents')
    <h1>ID : {{ $id }}</h1>
    <h1>NAME : <span style="text-transform: capitalize">{{ $username }}</span></h1>
@endsection
