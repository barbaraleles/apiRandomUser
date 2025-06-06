<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class RandomUserController extends Controller
{
    public function index()
    {
        return view('random-users');
    }

    public function getUsers()
    {
        $response = Http::get('https://randomuser.me/api/', [
            'results' => 100
        ]);

        return $response->json();
    }
}
