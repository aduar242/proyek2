@extends('layouts.app')

@section ('title')
@endsection

@section('breadcrumb')
	@parent
	<li>Kategori</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-12">

{!! Form::model($kegiatan, ['route' => ['post.update', $kegiatan->id], 'method' => 'POST']) !!}
	<h1>Edit Kegitana Post</h1>
<table>
<tr>
	<td>
		<p>
			
		{{ Form::label('title', 'Judul: ')}}
		{{ Form::text('title', NULL, ['Class' => 'form-control']) }}
		</p>
	</td>
</tr>
<tr>
	<td>
		<p>
		{{ Form::label('body', 'Keterangan :')}}
		</p>
		{{ Form::textarea('body', NULL, ['calss' => 'Form-control'])}}
	</td>
</tr>
<tr>
	<p>
		{{ Form::file('file_gambar', NULL, array('class' => 'from-control', 'required' => ''))}}
		
	</p>
	<td>
		{{ Form::label('body', 'Tanggal :')}}
		{{ Form::date('created_at', NULL, ['calss' => 'Form-control'])}}
	</td>
</tr>
<tr>
	<td>
		Di buat pada : {{ date('d / m / Y h:ia', strtotime($kegiatan->created_at))}}
	</td>
</tr>
<tr>
		<td>
			{{ Html::linkroute('admin', 'Batal', NULL, array('class' => 'btn btn-danger')) }}			
			{{ Form::submit('Simpan', ['class' => 'btn btn-success', 'value'=>'Upload'])}}	
		</td>
</tr>	
{!! Form::close() !!}
</table>
		</div>

	</div>

	@endsection






