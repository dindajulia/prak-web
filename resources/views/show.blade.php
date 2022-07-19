@extends('layouts.app')
@section('content')
<div class="clearfix"></div>
	
<div class="container-fluid">
          <h5 class="card-title">Daftar Pet</h5>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Foto</th>
                  {{-- <th scope="col">Opsi</th> --}}
                  
                  
                </tr>
              </thead>
              <tbody>
                
                  
                @if(isset($pet))
                  @foreach($pet as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td><img src='{{$item->foto}}' alt="" style="width: 150px;
                      height: 150px;"></td>
                    {{-- <td>
                      <a href="/edit-/{{ $item->id }}" class="btn btn-warning">Edit</a>
                      <a href="/hapus-data/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                  </td> --}}
                </tr>
                  @endforeach
                  @endif
                
              </tbody>
            </table>
          </div>
  </div><!--End Row-->

  
  
  <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->

</div>
<!-- End container-fluid-->

<!--Start Back To Top Button-->
{{-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> --}}
<!--End Back To Top Button-->
@endsection