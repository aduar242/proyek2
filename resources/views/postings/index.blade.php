@extends('layouts.master')

@section('title')
    <title>Manajemen Kegiatan</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kegiatan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @card
                            @slot('title')
                            <a href="{{ route('posting.create') }}" 
                                class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i> Tambah
                            </a>
                            <a href="{{ route('posting.web') }}" 
                                class="btn btn-primary btn-sm" target="_blank">
                                <i class="fa fa-eye"></i> Lihat Website
                            </a>
                            @endslot
                            
                            @if (session('success'))
                                @alert(['type' => 'success'])
                                    {!! session('success') !!}
                                @endalert
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Gambar Kegiatan</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Deskripsi Kegiatan</th>
                                            <th>Kategori Kegiatan</th>
                                            <th>Last Update</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($postings as $row)
                                        <tr>
                                            <td>
                                                @if (!empty($row->photo))
                                                    <img src="{{ asset('uploads/posting/' . $row->photo) }}" 
                                                        alt="{{ $row->name }}" width="100px" height="100px">
                                                @else
                                                    <img src="{{ asset('dist/img/tidak-ada-image.png') }}" alt="{{ $row->name }}" width="100px" height="100px">
                                                @endif
                                            </td>
                                            <td>
                                                <strong>{{ ucfirst($row->name) }}</strong>
                                            </td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->kategoriposting->name }}</td>
                                            <td>{{ $row->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('posting.destroy', $row->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a target="_blank" href="{{ route('posting.single', $row->id) }}" 
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('posting.edit', $row->id) }}" 
                                                        class="btn btn-warning btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                {!! $postings->links() !!}
                            </div>
                            @slot('footer')

                            @endslot
                        @endcard
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection