<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all(); // Pobiera wszystkich użytkowników
        return view('users', compact('users'));
    }

    public function setAdminPermission($userId): void
    {
        $user = User::find($userId);/*nie wiem czy to permission zadziała, w userze do tego funkcja zakomentowana i route\web.php*/
        $user->permission = 'admin';
        $user->save();
    }
    public function __construct()
    {
        $this->middleware('permission:required_permission');
    }
};
