<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('frontend.term_condition');
    }
}
