<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;

class SquawkController extends Controller
{
    //index, create

    /**
     * Fake show function, because there is no database (all the squawks/tweets are grouped in one json file)
     * @param string $squawkId
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function show(string $squawkId): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $allSquawks = File::json(public_path('json/all-squawks.json'), JSON_THROW_ON_ERROR);
        $details = "";
        foreach ($allSquawks as $homeSquawk) {
            if ($homeSquawk['id'] == $squawkId) {
                $details = $homeSquawk;
            }
        }

        return view('shared-layouts.squawk-details', [ "squawk" => $details ]);
    }

    //edit

    //update, destroy
}
