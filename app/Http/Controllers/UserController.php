<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //

public function displayUsers() {
    $users = User::all();
    return view('frontdesk.Accounts.user', ['users' => $users]);
}

}
