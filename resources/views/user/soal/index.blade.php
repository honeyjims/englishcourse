@extends('user.partials.master')
@section('content')
@section('title','Tes Penempatan')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Tes Penempatan</li>
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
                <h3 class="card-title"><strong>Mulai Tes</strong></h3>
              </div>
              <div class="card-body">
                <strong>Selamat Datang di OC English Course Placement Test!</strong> <br>
                Cari tahu kemampuan Bahasa Inggris-mu di sini.<br>
                <br>
                <i class="fa fa-clock"></i> <a>  45 Menit</a>   |   <i class="fa fa-tasks"></i> <a>  30 Soal</a>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{route('user.test.start')}}" class="btn btn-primary">Mulai Tes</a>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><strong>Petunjuk Pengerjaan</strong></h3>
              </div>
              <div class="card-body">
                <ul>
                  <li>Tes terdiri dari 30 Soal Pilihan Ganda dibatasi oleh waktu pengerjaan 45 menit.</li>
                  <li>Terdapat 3 bentuk soal tes yaitu 5 Soal Listening Comprehension, 10 Soal Written Expression, dan 15 Soal Reading Comprehension.</li>                
                  <li>Peserta ujian wajib memastikan internet berjalan dengan baik, ketersediaan kuota dan laptop dalam kondisi baik.</li>
                  <li>Bacalah dengan teliti tiap-tiap soal sebelum menjawab. Pilihlah jawaban dengan tepat dan cepat.</li>
                  <li>Peserta wajib menjawab seluruh soal dengan memperhatikan batasan waktu pengerjaan.</li>
                  <li>Seluruh tes dikerjakan melalui platform tes yang disediakan dan tidak ada tes yang dikerjakan di lembar / kertas terpisah.</li>
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection