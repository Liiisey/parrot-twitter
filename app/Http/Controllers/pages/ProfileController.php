<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $profileSquawks = File::json(public_path('json/profile-squawks.json'), JSON_THROW_ON_ERROR);

        return view('pages.profile',
            [
                "squawks" => $profileSquawks
            ]
        );
    }
}
