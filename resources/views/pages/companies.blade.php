@extends('layoututama.nav')
@section('container')
    
    <div class="container py-5" style="width: 3000px">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4" style="width: 1570px">
            <div class="card-header pb-0">
              <h6>Tabel Employee</h6>
              <div class="nav">
                <div>
                  <a href="/tambahcompanies" class="btn btn-primary">Tambah Data</a> 
                  {{-- {{Session::get('Halaman_url')}} --}}
                </div>
                <div class="ms-auto">
                  {{-- <form action="/companies" method="GET" class="d-flex" role="search">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                  </form> --}}
                </div>
              </div>
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
                          <th class="border-top-0">First Name</th>
                          <th class="border-top-0">Last Name</th>
                          <th class="border-top-0">Jenis Kelamin</th>
                          <th class="border-top-0">Company</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Hobi</th>
                          <th class="border-top-0">Nomer HP</th>
                          <th class="border-top-0">Aksi</th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $companies => $row)
                            <tr> 
                                <td class="ps-4">{{$no++}}</td>
                                <td class="ps-4">{{$row->firstnama}}</td>
                                <td class="ps-4">{{$row->lastnama}}</td>
                                <td class="ps-4">{{$row->gender}}</td>
                                <td class="ps-4">{{ ($row->company_id !== null) ? $row->perusahaans->nama : '-' }}</td>
                                <td class="ps-4">{{$row->email}}</td>
                                <td class="ps-4">{{$row->hobi}}</td>
                                <td class="ps-4">0{{$row->nohp}}</td>
                                <td>
                                    <a href="/tampilkancompanies/{{$row->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a> 
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

@endsection
  