@extends('layouts.app')

@section('content')
 
<div class="container-xxl courses my-2 py-5 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <h6 class="text-primary text-uppercase mb-2">Halaman Lainnya</h6> -->
                <h1 class="display-6 mb-4">Selamat Data Diri Anda Berhasil Terdaftar</h1>
            </div>


<!-- <center><h2>Selamat Data Diri Anda Berhasil Terdaftar</h2></center> -->

<div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">KPU</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-3">
                            <center>
                            <img class="img-fluid" src="images/kpumelayani.png" alt="">
                        </center>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Panduan</h5>
                            <p>Panduan untuk menjadi pemilih yang baik dan benar</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-2">
                            <img class="img-fluid" src="images/kotak2.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Form</h5>
                            <p>Isi form data diri untuk menjadi pemilih</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-2">
                            <center>
                            <img class="img-fluid" src="images/kotak.png" alt="" width="300" height="300" </>
                            </center>
                        </div>
                    </div>
                </div>               
            </div>

@endsection