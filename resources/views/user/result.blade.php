@extends('user.partials.master')
@section('content')
@section('title','Hasil Tes')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Tes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Hasil Tes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
      @foreach($data as $item)
      <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title"><strong>Berikut Adalah Rincian Hasil Tes Anda :</strong></h3>
          </div>
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <h6>Jumlah Soal</h6>
            </div>
            <div class="col-1">
              <p class="text-right">:</p>
            </div>
            <div class="col-9">
              <p>{{ $item->jumlah_soal }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <h6>Jumlah Jawaban Benar</h6>
            </div>
            <div class="col-1">
              <p class="text-right">:</p>
            </div>
            <div class="col-9">
              <p>{{ $item->jawaban_benar }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <h6>Jumlah Jawaban Salah</h6>
            </div>
            <div class="col-1">
              <p class="text-right">:</p>
            </div>
            <div class="col-9">
              <p>{{ $item->jawaban_salah }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <h6>Nilai</h6>
            </div>
            <div class="col-1">
              <p class="text-right">:</p>
            </div>
            <div class="col-9">
              <p>{{ $item->nilai }}</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row mt-3">
            <div class="col">
              <h5><strong>Selamat Level anda adalah</strong></h5>
            </div>
          </div>
          <div class="row mt-2 mb-2">
            <div class="col-2 ml-2 bg-info">
              <h4 class="text-center mt-2">{{$item->grade}}</h4>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </section>
@include('sweetalert::alert')
@endsection