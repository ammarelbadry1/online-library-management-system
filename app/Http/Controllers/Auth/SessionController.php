<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function create() {
		return view('auth.login');
	}

	public function store() {
		if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
		$role = auth()->user()->role;
        return $role == 'Admin'? redirect('/dashboard'): redirect('/');
	}

	public function destroy() {
		auth()->logout();
		return redirect('/');
	}
}
