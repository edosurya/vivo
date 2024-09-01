<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $speakers = json_decode(file_get_contents('json/speaker.json'), true);

        return view('frontend.home', compact('speakers'));
    }
}
