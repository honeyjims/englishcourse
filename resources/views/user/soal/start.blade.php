@extends('user.partials.master')
@section('content')
@section('title','Mulai Tes')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('user.test.index')}}">Tes Penempatan</a></li>
              <li class="breadcrumb-item active">Mulai Tes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid mb-4 pb-4">
        <form action="{{route('user.test.done')}}" method="post" class="mb-4" name="myForm" id="myForm">
        @csrf
        @foreach ($data as $key => $item)
          <div class="card mb-4">
            <div class="card-header">
              <h6>{!! $item->soal !!}</h6>
              @if (isset($item->url_audio))
                <audio controls>
                  <source src={{config('app.url')."audio/".$item->url_audio}} type="audio/mpeg">
                </audio> 
              @endif
            </div>
            <div class="card-body">
              <div class="form-check">
                <input type="radio" class="form-check-input" name="{{'soal'.$key}}" value="A">
                <label class="form-check-label" for="radio1"><p>{{ $item->jawab_a }}</p></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="{{'soal'.$key}}" value="B">
                <label class="form-check-label" for="radio1"><p>{{ $item->jawab_b }}</p></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="{{'soal'.$key}}" value="C">
                <label class="form-check-label" for="radio1"><p>{{ $item->jawab_c }}</p></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="{{'soal'.$key}}" value="D">
                <label class="form-check-label" for="radio1"><p>{{ $item->jawab_d }}</p></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="{{'soal'.$key}}" value="E">
                <label class="form-check-label" for="radio1"><p>{{ $item->jawab_e }}</p></label>
              </div>
              <div class="form-check">
                <input type="radio" style="display:none" class="form-check-input" name="{{'soal'.$key}}" value="ZXQ" checked>
              </div>
            </div>
          </div>
        @endforeach
          <div class="text-center mt-4 mb-4 p-4">
            <button type="submit" class="btn btn-primary" id="finish">Submit</button>
          </div>
      </form>
      </div>
    </section>
  </div>
  <script>
    let setTime = '{{ $time }}';

    // Set the date we're counting down
    var countDownDate = new Date(setTime).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for hours, minutes and seconds
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("timer").innerHTML = hours + " Jam "+ minutes + " Menit " + seconds + " Detik ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.forms["myForm"].submit();
      }
    }, 1000);
  </script>
@endsection