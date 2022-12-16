@extends('admin.partials.master')
@section('content')
@section('title','Hasil Tes')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hasil Tes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Hasil Tes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">
                          No
                      </th>
                      <th class="text-center">
                          Tanggal Akses
                      </th>
                      <th class="text-center">
                          Nama Peserta
                      </th>
                      <th class="text-center">
                          Email
                      </th>
                      <th class="text-center">
                          Total Benar
                      </th>
                      <th class="text-center">
                          Total Salah
                      </th>
                      <th class="text-center">
                          Nilai
                      </th>
                      <th class="text-center">
                          Grade
                      </th>
                      <th class="text-center">
                          Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($data as $item)
                  <tr>
                      <td class="text-center">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-center">
                        {{ $item->created_at }}
                      </td>
                      <td class="text-center">
                        {{ $item->hasUser->name }}
                      </td>
                      <td class="text-center">
                        {{ $item->hasUser->email }}
                      </td>
                      <td class="text-center">
                        {{ $item->jawaban_benar }}
                      </td>
                      <td class="text-center">
                        {{ $item->jawaban_salah }}
                      </td>
                      <td class="text-center">
                        {{ $item->nilai }}
                      </td>
                      <td class="text-center">
                        {{ $item->grade }}
                      </td>
                      <td class="text-center">
                        <form class="float-left mt-2 ml-2" action="{{route('hasil.delete')}}" method="post">
                          @csrf
                          @method('delete')
                          <input type="hidden" value="{{$item->id}}" name="id">
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form> 
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <div class="card-footer">         
        </div>
      </div>
    </section>
@include('sweetalert::alert')
@endsection