<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegistrationController extends Controller {
	public function __invoke() {
		$attributes = request()->validate( [
			'name'     => 'required',
			'email'    => 'required|email|unique:users',
			'password' => 'required|min:6',
		] );

		$user = User::create( $attributes );

		auth()->login( $user );

		return redirect( '/' );
	}
}
