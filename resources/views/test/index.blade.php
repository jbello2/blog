<!DOCTYPE html>
<html lang="es">
<head>
	<title>{{ $article->title }} </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('ccs/general.css') }}">
</head>
<body>

	<br><br>
	<h1>{{ $article->title}}</h1>
	<hr>
	{{ $article->content }}

	{{ $article->user->name }} | {{ $article->category->name }} | 
	<br>

	@foreach($article->tags as $tag)
			{{ $tag->name }}
	@endforeach		


</body>
</html>


