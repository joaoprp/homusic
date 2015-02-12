@extends('layouts.internal')

@section('title')
{{ $post->title }} | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="container">
			{{ $post->body }}
		</div>
	</div>

@endsection

@section('css')

	<style type="text/css">
		.table-vertical-borders td {
			border-left: 1px solid #ed5a3a;
			border-right: 1px solid #ed5a3a;
			vertical-align: top;
		}

		.table-vertical-borders h4 {
			text-align: center;
		}
	</style>
	
@endsection