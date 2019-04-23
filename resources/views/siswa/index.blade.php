@extends('layouts.master')

@section ('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif

    <h2>Data Siswa</h2>

    <div class="row">
        <table class="table table-hover">
            <tr>
                <th>NAMA DEPAN</th>
                <th>NAMA BELAKANG</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>

            @foreach($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->nama_belakang}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{$siswa->agama}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class='btn btn-warning btn-sm'>Edit</a>
                    <a href="/siswa/{{$siswa->id}}/delete" class='btn btn-danger btn-sm' onclick="return confirm('Yakin mau dihapus bro?')">Hapus</a>
                </td>
            </tr>
            @endforeach        
        </table>

        <div class="col-12">
            <!-- Button trigger modal -->
            <center>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Siswa
                </button>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Formulir Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        <form action='/siswa/create' method='POST'>
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="namaDepan">Nama Depan</label>
                                <input type="text" class="form-control" id="namaDepan" name="nama_depan" placeholder="Masukkan Nama Depan">
                            </div>

                            <div class="form-group">
                                <label for="namaBelakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="namaBelakang" name="nama_belakang" placeholder="Masukkan Nama Belakang">
                            </div>

                            <div class="form-group">
                                <label for="jenisKelamin">Pilih Jenis Kelamin</label>
                                <select class="form-control" id="jenisKelamin" name="jenis_kelamin">
                                <option selected value='L'>Laki-laki</option>
                                <option value='P'>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                            </div>

                            <center>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </center>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection