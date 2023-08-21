@extends('app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<section class="books">
	<span>Books</span>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Author</th>
			<th>Created at</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
	</table>
</section>
<section class="students">
	<span>Students</span>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Author</th>
			<th>Created at</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
		<tr>
			<td>1</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
		</tr>
	</table>
</section>

@endsection