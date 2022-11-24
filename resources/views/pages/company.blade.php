@extends('layoututama.nav')
@section('container')
    <main class="border-radius-lg ">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4" style="width: 1570px">
            <div class="card-header pb-0">
              <h6>Tabel Company</h6>

              <a href="/tambahcompany" class="btn btn-primary">Tambah Data</a> 
              @php
                $no = 1;
              @endphp
              @if ($message = Session::get('sukses'))
                  <div class="alert alert-success text-white" role="alert">
                      {{$message}}
                  </div>
              @endif 
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive py-4" style="width: 1500px">
                <table class="table text-nowrap" id="example">
                    <thead>
                      <tr>
                        <tr>
                          <th class="border-top-0">No</th>
                          <th class="border-top-0">Nama</th>
                          <th class="border-top-0">Logo</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Website</th>
                          <th class="border-top-0">Aksi</th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($isi as $perusahaan => $row)
                            <tr> 
                                <td class="ps-4">{{$no++}}</td>
                                <td class="ps-4">{{$row->nama}}</td>
                                <td class="ps-4">
                                  <img src="{{ asset('logoperusahaan/'.$row->logo) }}" alt="" style="width: 50px">
                                </td>
                                <td class="ps-4">{{$row->email}}</td>
                                <td class="ps-4">{{$row->website}}</td>
                                <td>
                                    <a href="/tampilkancompany/{{$row->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/hapus/{{$row->id}}" class="btn btn-danger">Delete</a> 
                            </td>
                            </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
  