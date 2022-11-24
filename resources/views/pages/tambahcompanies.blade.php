@extends('layoututama.nav')
@section('container')
    <main class="border-radius-lg ">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4" style="width: 1570px">
            <div class="card-header pb-0">
              <h6>Tambah Data Employee</h6>
            </div>
            <div>
              <div class="row py-4 justify-content-center">
                <div class="col-8">
                  <form action="/insertcompanies" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">First Nama</label>
                        <input type="text" name="firstnama" class="form-control" id="text" aria-describedby="text">
                        @error('firstnama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Last Nama</label>
                        <input type="text" name="lastnama" class="form-control" id="nama" aria-describedby="nama">
                        @error('lastnama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Jenis Kelamin</label> <br>
                    
                      <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                      <label class="form-check-label" for="gender1">
                        Laki-laki
                      </label>

                      <input class="form-check-input" type="radio" name="gender" id="gender2" checked value="Perempuan">
                      <label class="form-check-label" for="gender2">
                        Perempuan
                      </label>
                    </div>
        
                    <div class="form-group row">
                      <label>Company</label>
                        <select class="form-control" name="company_id">
                          @foreach ($isi as $item)
                              <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                  </div> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="hobi" class="form-label">Hobi</label><br>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Menyanyi"> Menyanyi</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Berenang"> Berenang</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Badminton"> Badminton</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda</label>
                  </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomer HP</label>
                        <input type="text" name="nohp" class="form-control" id="nohp" aria-describedby="nohp">
                        @error('nohp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
  