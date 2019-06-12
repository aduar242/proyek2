@extends('layouts.master')
 
@section('title')
    <title>Analisa</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('dist/css/ionicons.min.css') }}">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Analisa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Analisa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content" id="dw">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $posting }}</h3>
                                <p>Posting Kegiatan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $product }}</h3>
                                <p>Produk</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-shopping-bag"></i>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $order }}</h3>
                                <p>Pesanan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $customer }}</h3>
                                <p>Pelanggan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $user }}</h3>
                                <p>Karyawan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <canvas id="dw-chart"></canvas>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection