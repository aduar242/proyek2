<!DOCTYPE html>
<html>
<head>
	<title>Lihat Lebih Lanjut</title>
</head>
<body>
<h1>{{ $kegiatan->title }}</h1>
<h5>Di posting pada tanggal : {{ date('M j, Y')}}</h5>
<p> {{ $kegiatan->body }} </p>
</body>
</html>