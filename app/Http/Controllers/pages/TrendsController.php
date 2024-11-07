<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class TrendsController extends Controller
{
    public function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $trendsSquawks = File::json(public_path('json/trends-squawks.json'), JSON_THROW_ON_ERROR);

        $sortBy = $request->get('sortBy');
        if (!empty($sortBy) && $sortBy === "created_at") {
            $sortBy = array_map(function ($squawk) use ($sortBy) {
                return $squawk[$sortBy];
            }, $trendsSquawks);
            array_multisort($sortBy, SORT_DESC, $trendsSquawks);
        }

        return view('pages.trends',
            [
                "squawks" => $trendsSquawks
            ]
        );
    }
}
