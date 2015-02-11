<?php

class ArticlesController extends BaseController {

	public function getIndex(){
		$articles = Pingpong\Admin\Entities\Article::where('type','=','post')->get();

		return View::make('front.articles')->with('articles',$articles);
	}

	public function view($slug) {
		$article = Pingpong\Admin\Entities\Article::where('type','=','post')
			->where('slug','=',$slug)->first();

			return View::make('front.article')->with('article',$article);
	}
}