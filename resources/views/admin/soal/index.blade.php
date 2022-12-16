@extends('admin.partials.master')
@section('content')
@section('title','Daftar Soal')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Daftar Soal</li>
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
          <div class="card-tools">
            <a href="{{route('soal.create')}}" class="btn btn-info btn-block btn-flat"><i class="fa fa-plus"></i> Tambah Soal</a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.test.time') }}" method="post" class="mb-4">
            @csrf
            @if (isset($timer))
              <label for="exampleInputAnswer">Waktu Pengerjaan : {{$timer}} menit</label>    
            @else
            <label for="exampleInputAnswer">Waktu Pengerjaan Tes Belum Diatur (menit)</label>        
            @endif          
            <div class="row">
              <div class="col-3">
                  <div class="form-group">
                    <input type="text" class="form-control mt-1" name="timer" placeholder="Set / Edit Waktu Tes. ex: 10">
                  </div>
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary mt-1">Save</button>
              </div>
            </div>
          </form>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">
                          No
                      </th>
                      <th class="text-center">
                          Soal
                      </th>
                      <th class="text-center">
                          Option A
                      </th>
                      <th class="text-center">
                          Option B
                      </th>
                      <th class="text-center">
                          Option C
                      </th>
                      <th class="text-center">
                          Option D
                      </th>
                      <th class="text-center">
                          Option E
                      </th>
                      <th class="text-center">
                          Kunci Jawaban
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($soal as $s)
                  <tr>
                      <td class="text-center">
                        {{ $loop->iteration }}
                      </td>
                      <td>
                        {!!$s->soal!!}
                      </td>
                      <td class="text-center">
                        {{ $s->jawab_a }}
                      </td>
                      <td class="text-center">
                        {{ $s->jawab_b }}
                      </td>
                      <td class="text-center">
                        {{ $s->jawab_c }}
                      </td>
                      <td class="text-center">
                        {{ $s->jawab_d }}
                      </td>
                      <td class="text-center">
                        {{ $s->jawab_e }}
                      </td>
                      <td class="text-center">
                        {{ $s->kunci_jawab }}
                      </td>
                      <td class="text-center">
                          <a class="btn btn-info btn-sm" href="{{url('admin/edit-soal',$s->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                          </a> | 
                          <a class="btn btn-danger btn-sm" href="{{url('admin/delete-soal',$s->id)}}">
                              <i class="fas fa-trash">
                              </i>
                          </a>
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