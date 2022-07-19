@extends('master')

@section('title')
    Edit Produk {{$casts->nama}}
@endsection

@section('content')

<form action="/casts/{{$casts->id}}" method="POST"> 
    @csrf
    @method('put')

    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" value="{{$casts->nama}}" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
      <label>Jenis</label>
      <input type="text" value="{{$casts->umur}}" name="umur" class="form-control">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
        <label>Harga</label>
        <textarea name="bio" cols="30" rows="10" class="form-control">{{$casts->bio}}</textarea>
      </div>
      @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
        <label>Gambar Produk</label>
        <input type="file" name="gambarProduk" class="form-control @error('gambarProduk') is-invalid @enderror" value="{{$casts->gambarProduk}}">
        <img src="{{ asset('images/casts/'.$casts->gambarProduk) }}" width="100px" height="80px" alt="Image">
    </div>
      @error('gambarProduk')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror


    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection