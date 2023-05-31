<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegistrationController extends Controller {
	public function create() {
		return view( 'registration.create' );
	}

	public function store() {
		$attributes = request()->validate( [
			'name'     => 'required',
			'email'    => 'required|email',
			'password' => 'required',
		] );

		$user = User::create( $attributes );

		auth()->login( $user );

		return redirect( '/' );
	}
}
