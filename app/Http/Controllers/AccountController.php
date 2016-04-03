<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    //
    public function postSignIn() {

		$valid = Validator::make(Input::all(),
			array(
				'email' => 'required|email',
				'password' => 'required'
			)
		);

		if(!$valid->fails()) {
			$user = User::where('email', '=', Input::get('email'));
			
			if($user->count()) {
				$user = $user->first();
				if(Hash::check(Input::get('password'), $user->password)) {
					if($user->active == 1) {
						Auth::login($user);
						return Redirect::intended('/');
					}
					return Redirect::route('sign-in')->withInput()->with('error', 'inactive-account');
				}
				else {
					return Redirect::route('sign-in')->withInput()->with('error', 'invalid-account');
				}
			}
			return Redirect::route('sign-in')->withInput()->with('error', 'account-doesnt-exist');
		}
		
		return Redirect::route('sign-in')->withInput()->with('error', 'invalid-account');
	}
}
