@extends('layouts.internal')

@section('title')
Academy News | H&O Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>ACADEMY NEWS</h3>
		</div>

		<div class="container">
			@foreach($articles as $article)
				<div class="row">
					<a href="/article/{{ $article->slug }}" style="display:block;height:200px;overflow:hidden;position:relative" class="image">
						<img src="/images/articles/{{$article->image}}" />
					</a>
					<br />
					<h4 class="text-center"><a href="/article/{{ $article->slug }}" style="color:#ed5a3a">{{ $article->title }}</a></h4>
					<div class="text-center content" style="width: 760px;overflow: hidden;margin: auto; height:120px">
						{{ strip_tags($article->body) }}
					</div>
				</div>
			@endforeach
		</div>
	</div>

	

@endsection

@section('css')

	<style type="text/css">
		.row {
			margin-bottom: 60px;
		}
		a.image:after {
			background: url('/assets/img/read-more.png') no-repeat bottom right;
			content: '';
			width: 70px;
			height: 60px;
			position: absolute;
			bottom: 0;
			right: 0;
		}
		.content {
			position: relative;
		}
		.content:after {
			position: absolute;
			content: '...';
			bottom: 0px;
			right: 0px;
		}
	</style>
	
@endsection

@section('script')
	
@endsection