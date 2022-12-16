@extends('admin.partials.master')
@section('content')
@section('title','Data Pendaftar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Pendaftar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Pendaftar</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">
                          No
                      </th>
                      <th class="text-center">
                          Nama Peserta
                      </th>
                      <th class="text-center">
                          Email
                      </th>
                      <th class="text-center">
                          Jenis Kelamin
                      </th>
                      <th class="text-center">
                          Status
                      </th>
                      <th class="text-center">
                          Asal Sekolah
                      </th>
                      <th class="text-center">
                          Address
                      </th>
                      <th class="text-center">
                          No. HP
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($register as $r)
                  <tr>
                      <td class="text-center">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-center">
                        {{ $r->name }}
                      </td>
                      <td class="text-center">
                        {{ $r->email }}
                      </td>
                      <td class="text-center">
                        {{ $r->jenis_kelamin }}
                      </td>
                      <td class="text-center">
                        {{ $r->status }}
                      </td>
                      <td class="text-center">
                        {{ $r->school_name }}
                      </td>
                      <td class="text-center">
                        {{ $r->address }}
                      </td>
                      <td class="text-center">
                        {{ $r->no_hp }}
                      </td>
                      <td class="text-center">
                          <a class="btn btn-info btn-sm" href="{{url('admin/data/edit',$r->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/data/delete',$r->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <div class="card-footer">
          {{ $register->links() }}
        </div>
      </div>
    </section>
@include('sweetalert::alert')
@endsection