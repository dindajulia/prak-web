@extends('master')

@section('title')
    List Produk
@endsection

@section('content')
    <a href="/casts/create" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto Produk</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($casts as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>
                        <img src="{{ asset('images/casts/' . $item->gambarProduk) }}" width="100px" height="80px"
                            alt="Image">
                    </td>
                    <td>
                        <form action="/casts/{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/casts/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/casts/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Produk is Empty</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
