@extends('layouts.app')

@section ('title')
	Daftar Kegiatan
@endsection

@section('breadcrumb')
	@parent
	<li>Kategori</li>
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('kegiatan/style.css')}}">
	<div class="row">
		<div class="col-xs-12">
	<h5><a class="btn btn-success btn-lg " style="margin-top: 10px" href="{{route('post.create') }}">Tambah Post</a>
	<a class="btn btn-success btn-lg " style="margin-top: 10px" href="{{route('nampil.index') }}" target="_blank">Lihat Web</a></h5>
<table class="table">
	<thead>
		<th>No</th>
		<th>Judul</th>
		<th>Keterangan</th>
		<th>Gambar</th>
		<th>Tanggal Pembuatan </th>
	</thead>
	<?php $no=1; ?>
	@foreach ($kegiatan as $key => $value)
	<tr>
		<th>{{ $no++ }}</th>
		<td>{{ $value->title }}</td>
		<td>{{ substr($value->body,0,40) }}{{ strlen($value->body) > 40 ? "..." : "" }}</td>
		<td>{{$value->gambar}}
		
        <img src="{{ url('uploadgambar') }}/{{$value->file_gambar}}" class="gambar" height="100px">
       
		</td>
		<td>{{ date('d / m / Y', strtotime($value->created_at)) }}</td>
		<td>
			<a href="{{ route('kegiatan.single', $value->id) }}">
				<div class="btn btn-sm btn-default">
					<i class="icon-trash glyphicon glyphicon-eye-open text-primary"></i></div>
			</a>
			<a href="{{ route('post.edit', $value->id) }}">
            	<div class="btn btn-sm btn-default" >
            		<i class="icon-trash glyphicon glyphicon glyphicon-pencil text-primary"></i></div>
        	</a>
			<a href="{{ route('post.delete', $value->id) }}">
            	<div class="btn btn-sm btn-default">
            		<i class="icon-trash glyphicon glyphicon-trash text-danger"></i></div>
			</a>
 
				
          	
			<!-- {!! Form::open(['method' => 'DELETE', 'route' => ['post.delete',$value->id]])!!}
			{!! Form::button('', ['type' => 'submit']) !!}
			{!! Form::close() !!} -->
		</td>
	</tr>
	@endforeach
</table>
			
		</div>
	</div>

	@endsection




