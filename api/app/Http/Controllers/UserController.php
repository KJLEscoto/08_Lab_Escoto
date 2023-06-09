<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
    {
        $perPage = 10;
        $currentPage = request()->query('page', 1);
        $users = User::paginate($perPage);

        $lastPage = $users->lastPage();

        return view('index', [
            'users' => $users,
            'currentPage' => $currentPage,
            'lastPage' => $lastPage,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return view('users.show', ['user' => $user]);
    }
}