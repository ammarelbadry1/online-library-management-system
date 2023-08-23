<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function profile() {
		return view('app.profile');
	}

    public function update(Request $request) {
		$this-> validate(request(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255'],
			'password' => ['required', 'string', 'min:8'],
		]);
		
		$user = User::find($request['id']);
		// dump($request);
		$user->name = $request['name'];
		$user->email = $request['email'];
		$user->password = $request['password'];
		$user->save();
		return redirect('/dashboard');
	}
}
