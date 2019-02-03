<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Article;
use App\Comment;
use App\Page;
use App\Setting;

class ArticleController extends Controller
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = Page::pageblog();
		$paginate = Setting::first()->paginate;
		$articles = Article::status()->orderBy('id', 'desc')->paginate($paginate);
		return view('site.articles.index', compact('main', 'articles'));
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$main = Article::findurl($url)->first();
		if (isset($main)) {
			$main->increment('views');
			$previous = Article::previouspost($main->id)->first();
			$next = Article::nextpost($main->id)->first();
			$comments = Comment::status()->getcomments($main->id)->desc()->get();
			$count = $comments->count();
			return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
		} else {
			abort(404);
		}
	}
}
