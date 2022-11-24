@extends('layoututama.nav')
@section('container')
    <main class="border-radius-lg ">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4" style="width: 1570px">
            <div class="card-header pb-0">
              <h6>Edit Data Company</h6>
            </div>
            <div>
              <div class="row py-5 justify-content-center">
                <div class="col-8">
                  <form action="/editcompany/{{ $isi->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="text" aria-describedby="text" value="{{ $isi->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="{{ $isi->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" name="website" class="form-control" id="website" aria-describedby="website" value="{{ $isi->website }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" aria-describedby="logo" value="{{ $isi->logo }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
                </div>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
  