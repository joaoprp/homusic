<?php

class GalleriesController extends BaseController {

	public function getIndex(){
		$gallery = \Gallery::paginate(4);

		return View::make('front.gallery')->with('gallery',$gallery);
	}

	public function view($slug) {
		$article = Pingpong\Admin\Entities\Article::where('type','=','post')
			->where('slug','=',$slug)->first();

			return View::make('front.article')->with('article',$article);
	}
}