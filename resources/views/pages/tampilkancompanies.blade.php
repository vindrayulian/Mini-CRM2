@extends('layoututama.nav')
@section('container')
    <main class="border-radius-lg ">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4" style="width: 1570px">
            <div class="card-header pb-0">
              <h6>Edit Data Employee</h6>
            </div>
            <div>
              <div class="row py-5 justify-content-center">
                <div class="col-8">
                  <form action="/editcompanies/{{$isi->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">First Nama</label>
                        <input type="text" name="firstnama" class="form-control" id="text" aria-describedby="text" value="{{$isi->firstnama}}">
                        {{-- @error('firstnama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Last Nama</label>
                        <input type="text" name="lastnama" class="form-control" id="nama" aria-describedby="nama" value="{{$isi->lastnama}}">
                        {{-- @error('lastnama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Jenis Kelamin</label> <br>
                    
                      <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki" {{ ($isi->gender == 'Laki-laki') ? 'checked' : ''}}>
                      <label class="form-check-label" for="gender1">
                        Laki-laki
                      </label>

                      <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan" {{ ($isi->gender == 'Perempuan') ? 'checked' : ''}}>
                      <label class="form-check-label" for="gender2">
                        Perempuan
                      </label>
                    </div>
                    <div class="form-group row">
                      <label>Company</label>
                        <select class="form-control" name="company_id">
                          @foreach ($dape as $item)
                              <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                  </div> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="{{$isi->email}}">
                        {{-- @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="mb-3">
                      <label for="hobi" class="form-label">Hobi</label><br>
  
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Menyanyi" {{ (in_array('Menyanyi', $isi->hobi)) ? 'checked' : '' }}> Menyanyi</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Berenang" {{ (in_array('Berenang', $isi->hobi)) ? 'checked' : '' }}> Berenang</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Badminton"{{ (in_array('Badminton', $isi->hobi)) ? 'checked' : '' }}> Badminton</label>
                      <label for="hobi"><input type="checkbox" name="hobi[]" value="Bersepeda"{{ (in_array('Bersepeda', $isi->hobi)) ? 'checked' : '' }}> Bersepeda</label>
                      
                  </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomer HP</label>
                        <input type="text" name="nohp" class="form-control" id="nohp" aria-describedby="nohp" value="{{$isi->nohp}}">
                        {{-- @error('nohp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
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
  