@extends('layout.main');

@section('title', 'Tambah Mahasiswa')

@section('container')

<div class="container">
    <div class="col-8">
     <h1 class="mt-3">Tambah Data Mahasiswa </h1><br>
    
     <form method="POST" action="/students">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') 
            is-invalid @enderror" value="{{ old('nama') }}" 
            placeholder="Masukan nama">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" name="nrp" class="form-control @error('nrp') 
            is-invalid @enderror"  value="{{ old('nrp') }}"
            placeholder="Masukan nrp">
            @error('nrp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control"  
            placeholder="Masukan email" value="{{ old('email') }}">
             @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control"  
            placeholder="Masukan jurusan" value="{{ old('jurusan') }}">
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>

    </form>


  </div>
 </div>
</div>

@endsection