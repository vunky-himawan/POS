<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function show(string $idUser, string $username): Response
    {
        return response()->view('user.user', [
            'username' => $username,
            'id' => $idUser
        ]);
    }
}
