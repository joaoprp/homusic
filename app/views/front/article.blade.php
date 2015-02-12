@extends('layouts.internal')

@section('title')
{{ $article->title }} | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>{{ $article->title }}</h3>
		</div>

		<div class="container">
			<div style="display:block;height:200px;overflow:hidden;position:relative" class="image">
				<img src="/images/articles/{{$article->image}}" />
			</div>
			<br />
			<br />
			{{ $article->body }}
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