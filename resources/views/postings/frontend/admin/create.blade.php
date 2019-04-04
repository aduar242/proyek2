@extends('layouts.app')

@section ('title')
	Daftar Kategori
@endsection

@section('breadcrumb')
	@parent
	<li>Kategori</li>
@endsection

@section('content')


	<div class="row">
		<div class="col-xs-12">



{!! csrf_field() !!}
{!! Form::open(array ('route' => 'post.store','data-parsley-validate' => '', 'method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
{{ Form::label('title','Judul') }}
<p>
	<div class="form-group">
		<!-- <form type="text" id="title" class="form-control" required="" maxlength="255"> -->

	{{ Form::text('title', NULL, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'id' => 'title')) }}
	</div>
</p>

<!-- coba gambar -->

<div class="form-group">
					{{ Form::label('Upload Gambar')}}
					{{ Form::file('file_gambar', NULL, array('class' => 'from-control', 'required' => ''))}}
                   <!--  <input type="file" id="file_gambar" name="file_gambar"> -->
                </div>
<!-- pemberitahuan -->
 @if(count($errors) > 0)
            <div class="row">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
            </div>
        @endif
<!-- end pemberitahuan -->


<!-- end coba gambar -->

<p>	
	{{ Form::label('body', 'Keterangan') }}
</p>
<p>
	{{ Form::textarea('body', NULL, array('class' => 'form-control', 'required' => '')) }}
</p>
<p>
{{ Form::label('created_at', 'Tanggal :')}}
</p>
{{ Form::date('created_at', NULL, array('class' => 'datepicker', 'date-date-format' => '', 'mm/dd/yyyy' => '50')) }}
<p>
	{{ Form::submit('Tambah Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px', 'value'=>'Upload')) }}
</p>


</form>

{!! Form::close() !!}
		</div>

	</div>

	@endsection





