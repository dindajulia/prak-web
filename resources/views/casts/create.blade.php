@extends('master')

@section('title')
    Tambah Produk
@endsection

@section('content')

<form action="/casts" method="POST" enctype="multipart/form-data"> 
    @csrf

    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
      <label>Jenis</label>
      <input type="text" name="umur" class="form-control">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
        <label>Harga</label>
        <textarea name="bio" cols="30" rows="10" class="form-control"></textarea>
      </div>
      @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
        <label>Gambar Produk</label>
        <input type="file" name="gambarProduk" class="form-control @error('gambarProduk') is-invalid @enderror" placeholder="Foto Produk">
      </div>
      @error('gambarProduk')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


    <button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection
