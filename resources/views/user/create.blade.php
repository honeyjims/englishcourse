@extends('user.partials.master')
@section('content')
@section('title','Pendaftaran')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran</li>
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
                <h3 class="card-title"><strong>Silahkan isi Form Pendaftaran di bawah ini</strong></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('register.store')}}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" name="name" value="{{$data->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email" value="{{$data->email}}" disabled>
                  </div>
                  <input type="hidden" value="{{$data->email}}" name="email">
                  <input type="hidden" value="{{$data->id}}" name="user_id">
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
                    <select type="select" class="form-control" id="status" name="status">
                        <option value="Pelajar">Pelajar</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSchool">Asal Sekolah</label>
                    <input type="text" class="form-control" id="school_name" placeholder="Masukkan Sekolah Anda" name="school_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAddress">Alamat</label>
                    <textarea type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="address" id="address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNohp">No. HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP Anda" name="no_hp">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
    </section>
</div>
@endsection