@extends('landing.layout.main')

@section('container')

<main id="main" class="main pt-4">
    <!-- start response section -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">

                <header class="section-header">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pb-4">
                            <img src="{{ asset('assets/img/swakarta-logo.png') }}" class="img-fluid img-r" alt="" style="width: auto; height: 9rem;">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="{{ asset('assets/img/logo-halal-indonesia.png') }}" class="img-fluid img-r" alt="" style="width: auto; height: 9rem;">
                        </div>
                    </div>
                </header>

                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-12 d-flex flex-column justify-content-center">
                            @if (session('status'))
                                <div class="p-4">
                                    <h1 class="{{ session('code') == 200 ? 'text-success' : 'text-danger' }} text-center" ><strong>{{ session('status') }}</span></strong></h1>
                                    @if (session('message'))
                                        <h3 style="color: black;">{{ session('message') }}</h3>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 d-flex flex-column justify-content-center p-4">
                            <a href="{{ route('index') }}" class="btn btn-outline-primary" type="button">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

  </section>
  <!-- end response section -->

</main>

@endsection
