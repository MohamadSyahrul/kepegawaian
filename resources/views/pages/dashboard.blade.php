@extends('layout.master')
@section('title')
Dashboard Kepegawaian Poliwangi
@endsection
@section('content')
<div class="header bg-primary pb-6">
</div>

<section class="page-content container-fluid" id="mala_nilai">
    <div class="row">
        <div class="col">
          <div id="pengumuman" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner shadow">
              <div class="carousel-item active" data-interval="2000">
                <img src="{{ url('images') }}/banner_api.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
