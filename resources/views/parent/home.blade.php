@extends('layouts.main')

@section('content')

<div class="header {{ env('BG','bg-primary') }} pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">My Children</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Card stats -->
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid">

  <div class="row">
    @foreach($childrens as $child)
    <div class="col-md-4 col-sm-12 mt-8">
      <div class="card card-profile">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
                @if($child->gender == 'male')
                  <img src="{{ asset('image/boy.png') }}" class="rounded-circle">
                @else
                  <img src="{{ asset('image/girl.png') }}" class="rounded-circle">
                @endif
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <!-- <a href="{{ url('logbook?child='.$child->id) }}" class="btn btn-sm btn-info  mr-4 ">Logbook</a> -->
            <a href="{{ url('inbox?child='.$child->id) }}" class="btn btn-sm btn-danger float-right">Message</a>
          </div>
        </div>
        <div class="card-body pt-0">
        <div class="row">
          <br>
        </div>
          <div class="text-center">
            <span style="font-style: oblique;font-weight: bold;">
              {{ $child->name }} <br>
            </span>
            <span style="font-weight:600;">Age: {{ $child->age }} years old</span><br>
            <span style="font-weight:400;color:#FF5733;">{{ $child->teacher->name }}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>


@stop
