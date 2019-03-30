<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\CommentRequest;
use App\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $commentRepository;

	/**
	 * CommentsController constructor.
	 * @param CommentRepository $commentRepository
	 */
	public function __construct(CommentRepository $commentRepository)
	{
		$this->commentRepository = $commentRepository;
	}

	/**
	 * @param CommentRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function comments(CommentRequest $request, $id)
	{
		$attributes = [
			'user_id' => Auth::user()->id,
			'article_id' => $id,
			'text' => $request->text,
			'status' => 1
		];
		$this->commentRepository->create($attributes);

		return redirect()->back()->with('success-comment', __('site.success-submit'));
	}
}
