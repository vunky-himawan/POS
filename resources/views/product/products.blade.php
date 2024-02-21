@extends('layouts.main')

@section('contents')
    <h1>Ini halaman <span style="text-transform: capitalize; font-family: 'LAB-Grotesk'">{{ $category }}</span></h1>
    <ul>
        @foreach ($datas[$categoryUrl] as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
    <a href="{{ URL::previous() }}">Back</a>
@endsection
