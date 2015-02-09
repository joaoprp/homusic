@extends('layouts.internal')

@section('title')
FAQ | Ho Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		{{ $post->body }}
	</div>

@endsection

@section('css')

	<style type="text/css">
		.table-vertical-borders td {
			border-left: 1px solid #f05931;
			border-right: 1px solid #f05931;
			vertical-align: top;
		}

		.table-vertical-borders h4 {
			text-align: center;
		}
	</style>
	
@endsection