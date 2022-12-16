@extends('admin.partials.master')
@section('content')
@section('title','Ubah Data Pendaftar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/data/update',$reg->id)}}" method="post">
                @csrf

                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputNama" name="name" value="{{ $reg->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $reg->email }}" disabled>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputJenisKelamin">Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" name="jenis_kelamin" value="Laki - Laki">
                        <label for="customRadio1" class="custom-control-label" value="Laki - Laki">Laki - Laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" name="jenis_kelamin" value="Perempuan">
                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputStatus">Status</label>
                    <select type="select" class="form-control" name="status">
                        <option value="Pelajar">Pelajar</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSchool">Asal Sekolah</label>
                    <input type="text" class="form-control" id="exampleInputSchool" name="school_name" value="{{ $reg->school_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAddress">Alamat</label>
                    <textarea type="text" class="form-control" name="address" id="exampleInputAddress">{{ $reg->address }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNohp">No. HP</label>
                    <input type="text" class="form-control" id="exampleInputNohp" name="no_hp" value="{{ $reg->no_hp }}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
    </section>
@endsection