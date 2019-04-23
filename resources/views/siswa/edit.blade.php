@extends('layouts.master')

@section ('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif 

    <h2>Edit Data Siswa</h2>

    <div class="row">
        <div class="col-lg-12">
        <form action='/siswa/{{$siswa->id}}/update' method='POST'>
            {{csrf_field()}}
            <div class="form-group">
                <label for="namaDepan">Nama Depan</label>
                <input type="text" class="form-control" id="namaDepan" name="nama_depan" placeholder="Masukkan Nama Depan" value="{{$siswa->nama_depan}}">
            </div>

            <div class="form-group">
                <label for="namaBelakang">Nama Belakang</label>
                <input type="text" class="form-control" id="namaBelakang" name="nama_belakang" placeholder="Masukkan Nama Belakang" value="{{$siswa->nama_belakang}}">
            </div>

            <div class="form-group">
                <label for="jenisKelamin">Pilih Jenis Kelamin</label>
                <select class="form-control" id="jenisKelamin" name="jenis_kelamin">
                <option selected value='L' @if($siswa->jenis_kelamin =='L') selected @endif>Laki-laki</option>
                <option value='P' @if($siswa->jenis_kelamin =='P') selected @endif>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama" value="{{$siswa->agama}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3">{{$siswa->alamat}}</textarea>
            </div>

            <center>
            <button type="submit" class="btn btn-warning">Update</button>
            </center>
        </form>
        </div>
    </div>
@endsection