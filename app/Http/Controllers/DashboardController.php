<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class DashboardController extends Controller
{
	public function dashboard() {
		$books = Book::take(3)->get();
		$students = User::where('role', 'Student')->take(3)->get();
		return view('app.dashboard', ["books" => $books, "students" => $students]);
	}
}
