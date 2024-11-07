<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class ExploreController extends Controller
{
    public function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $exploreSquawks = File::json(public_path('json/explore-squawks.json'), JSON_THROW_ON_ERROR);

        $sortBy = $request->get('sortBy');
        if (!empty($sortBy) && $sortBy === "created_at") {
            $sortBy = array_map(function ($squawk) use ($sortBy) {
                return $squawk[$sortBy];
            }, $exploreSquawks);
            array_multisort($sortBy, SORT_DESC, $exploreSquawks);
        }

        return view('pages.explore',
            [
                "hashtags" => File::json(public_path('json/hashtags.json'), JSON_THROW_ON_ERROR),
                "squawks" => $exploreSquawks,
            ]
        );
    }
}
