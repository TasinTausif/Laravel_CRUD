<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {

	public function store( Request $request ) {

		$attributes = request()->validate( [
			'email'    => 'required|email',
			'password' => 'required|min:6',
		] );

		if ( !Auth::attempt( $attributes ) ) {
			throw ValidationException::withMessages( [
				'email' => 'Your credentianls could not verified!',
			] );
		}

		session()->regenerate();
		return redirect( '/' );
	}

	public function destroy() {
		auth()->logout();

		return redirect( '/' );
	}

}
