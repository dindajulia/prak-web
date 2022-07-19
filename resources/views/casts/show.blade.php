@extends('master')

@section('title')
    Detail Produk {{$casts->nama}}
@endsection

@section('content')
<h1>{{$casts->nama}}, {{$casts->umur}}</h1>
<p>{{$casts->bio}}</p>
<img src="{{ asset('images/casts/'.$casts->gambarProduk) }}" width="100px" height="80px" alt="Image">


<a href="/casts" class="btn btn-secondary">Back</a>
@endsection