@extends('layouts.main')

@section('contents')
    <h1>Ini halaman <span style="font-family: 'LAB-Grotesk'">Home</span></h1>
    <div>
        @foreach ($categories as $category)
            <a href="/category/{{ $category['slug'] }}" style="padding: 1rem;">{{ $category['name'] }}</a>
        @endforeach
    </div>
    <div style="padding: 1rem">
        <a href="/transaction">Transaksi</a>
    </div>
@endsection
