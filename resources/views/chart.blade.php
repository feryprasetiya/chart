<!DOCTYPE html>

<html>

<head>

    <title>Chart</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    {!! Charts::assets() !!}

<a href="tampil">Lihat Daftar Pengguna</a>
</head>

<body>

	<div class="container">


		{!! $chart->render() !!}
	</div>

</body>

</html>