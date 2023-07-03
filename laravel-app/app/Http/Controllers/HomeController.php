<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    function index()
    {
        $user = User::all();
        return response()->json([
            'user' => $user
        ],200);
    }
}
