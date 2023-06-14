<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller {

	public function index() {
		return view( 'blog.index', [
			'blogs' => Blog::paginate( 5 ),
		] );
	}

	public function create() {

		// if ( !auth()->check() ) {
		// 	return redirect( '/' )->with( 'failed', 'You must Log in First!' );
		// }

		return view( 'blog.create' );
	}

	public function store() {
		$attributes = request()->validate( [
			'title'       => 'required',
			'description' => 'required',
		] );

		$attributes['user_id'] = auth()->user()->id;

		Blog::create( $attributes );

		return redirect( '/' );
	}

	public function edit( Blog $blog ) {
		return view( 'blog.edit', [
			'blog' => $blog,
		] );
	}

	public function update( Blog $blog ) {
		$attributes = request()->validate( [
			'title'       => 'required',
			'description' => 'required',
		] );

		$blog->update( $attributes );

		return redirect( '/' );
	}

	public function destroy( Blog $blog ) {
		$blog->delete();

		return redirect( '/' );
	}

}
