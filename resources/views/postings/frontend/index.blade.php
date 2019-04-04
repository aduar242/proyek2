<!DOCTYPE html>
<html>
<head>
	<title>Kegiatan</title>
</head>
<body>
	<h1>Kegiatan</h1>
	@foreach ($kegiatan as $key => $value)
	<h2>{{ $value->title }}</h2>
	<h5>Tanggal Publikasi : {{ date('M J, Y', strtotime($value->create_at)) }}</h5>
	<p>{{ substr($value->body, 0, 20)}}{{ strlen($value->body) > 20 ? '....' : "" }}</p>
	<a href="{{ route('kegiatan.single',$value->id) }}">Baca Lebih Lanjut..
	</a>
	@endforeach

</body>
</html>