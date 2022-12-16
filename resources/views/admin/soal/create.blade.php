@extends('admin.partials.master')
@section('content')
@section('title','Tambah Soal')
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
              <li class="breadcrumb-item"><a href="{{route('soal.index')}}">Daftar Soal</a></li>
              <li class="breadcrumb-item active">Tambah Soal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
                <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('soal.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputSoal">Tulis Soal</label>
                                <textarea id="summernote" name="soal" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputSoal">Tambah Audio (MP3) Untuk Soal</label>
                              <input type="file" accept=".mp3" class="form-control" name="file">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Jawaban A</label>
                                <textarea type="text" class="form-control" name="jawab_a" id="jawab_a"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Jawaban B</label>
                                <textarea type="text" class="form-control" name="jawab_b" id="jawab_b"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Jawaban C</label>
                                <textarea type="text" class="form-control" name="jawab_c" id="jawab_c"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Jawaban D</label>
                                <textarea type="text" class="form-control" name="jawab_d" id="jawab_d"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Jawaban E</label>
                                <textarea type="text" class="form-control" name="jawab_e" id="jawab_e"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAnswer">Kunci Jawaban</label>
                                <select type="select" class="form-control" id="kunci_jawab" name="kunci_jawab">
                                    <option selected="selected" disabled="" value="">- Pilih Kunci Jawaban -</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{route('soal.index')}}" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <!-- /.col-->
            </div>
@include('sweetalert::alert')
@endsection