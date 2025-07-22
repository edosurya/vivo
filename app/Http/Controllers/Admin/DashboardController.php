<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Creator;
use App\Models\Images;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index(): View
    {

        $period = 2025;

        $creator_total = Creator::all()->where('period', 2025)->count();
        $images = Images::whereHas('relatedCreator', function ($query) { 
            $query->where('period', 2025); 
        });

        $images_category1_total = $images->where('category',Images::CATEGORY1)->count();
        $images_category2_total = $images->where('category',Images::CATEGORY2)->count();
        // $images_category3_total = $images->where('category',Images::CATEGORY3)->count();
        // $images_category4_total = $images->where('category',Images::CATEGORY4)->count();
        $images_category5_total = $images->where('category',Images::CATEGORY5)->count();
        $images_category6_total = $images->where('category',Images::CATEGORY6)->count();
        
        $small_banner_total = Creator::where('source','Small Banner')->where('period', $period)->count();
        $ig_total = Creator::where('source','Instagram')->where('period', $period)->count();
        $fb_total = Creator::where('source','Facebook')->where('period', $period)->count();
        $x_total = Creator::where('source','X')->where('period', $period)->count();
        $community_total = Creator::where('source','Community')->where('period', $period)->count();
        $direct_total = Creator::where('source','Direct')->where('period', $period)->count();
        

        return view('admin.dashboard.index',compact('creator_total','images_category1_total', 'images_category2_total', 'images_category5_total', 'images_category6_total', 'small_banner_total', 'ig_total', 'fb_total', 'x_total', 'community_total', 'direct_total'));
       
    }

   
}
