@extends('app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')
<section class="top">
	<form action="/books" method="GET">
		<input type="text" name="id" placeholder="Search books...">
		<input type="submit" value="search">
	</form>
</section>
<section class="books">
	<header>
		<span>Books</span>
	</header>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
			<th>Created at</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td>{{$book['author']}}</td>
				<td>{{$book['title']}}</td>
				<td>{{$book['created_at']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/books" class="show">...show more</a>
</section>

@endsection