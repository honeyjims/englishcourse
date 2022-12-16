@extends('user.partials.master')
@section('content')
@section('title','Dashboard')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title"><strong>Halo, {{ Auth::user()->name }}!</strong></h4>
              </div>
              <div class="card-body">
                Selamat Datang di Pendaftaran OC English Course! <br>
                Silahkan membaca langkah - langkah di bawah ini untuk mengikuti Tes Gratis.
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{route('user.register')}}" class="btn btn-primary">Pendaftaran Kursus</a>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">
                <div class="card-header d-flex p-0">
                  <h3 class="card-title p-3"><strong>Cara Mengikuti Tes Gratis OC English Course</strong></h3>
                  <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab"><strong>Langkah 1</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"><strong>Langkah 2</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab"><strong>Langkah 3</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab"><strong>Langkah 4</strong></a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      <strong>1. Mendaftar pada Form Pendaftaran</strong> <br>
                      Sebagai syarat mengikuti tes, pendaftar wajib mengisi semua data pada form pendaftaran. Pendaftar hanya bisa mendaftar sebanyak 1 kali. 
                      Apabila sudah mendaftar, bisa langsung mengikuti tes dan membaca petunjuk pengerjaan terlebih dahulu.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      <strong>2. Mengikuti Tes Penempatan OC English Course</strong> <br>
                      Tes terdiri dari serangkaian soal untuk menguji kemampuan kamu dalam bahasa inggris. Pastikan kamu memiliki koneksi stabil agar pengalaman 
                      tes tidak terganggu. Jawaban akan tersimpan setelah kamu klik salah satu pilihan jawaban, pastikan kamu memilih jawaban dengan teliti.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                      <strong>3. Mendapatkan Hasil Tes berupa Level sesuai kemampuan peserta</strong> <br>
                      Pengumuman hasil tes dapat otomatis dilihat setelah kamu sudah meng-submit tes. Hasil tes diberikan berdasarkan level sesuai kemampuan 
                      peserta. Terdapat 3 macam level yaitu Beginner, Intermediate, dan Advanced. 
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_4">
                      <strong>4. Tim OC akan Menghubungi via WA</strong> <br>
                      Mohon menunggu tim OC akan menghubungi kamu! Jangan lupa cek notifikasi WA kamu secara berkala yaa. Untuk informasi lebih lanjut peserta
                      dapat menghubungi tim OC English Course via WhatsApp ke <a href="https://wa.me/6281296002651" target="_blank">wa.me/6281296002651</a>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- ./card -->
            </div>
            <!-- /.col -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection