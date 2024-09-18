<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category = null)
    {

        $title = '';
        $images = [];

        switch ($category) {
            case 'potrait-photography':
                $title = 'Potrait Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240219_103409.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240219_175937.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240411_124436.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2412.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2413.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2414.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2415.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240912_163304_1.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240913_140700_1.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240913_172217_1.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_110055-V.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_134735-2.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_134735-V.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_163045.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_223552.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240912_150526-2.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],

                ];
                break;
            case 'street-photography':
                $title = 'Street Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/street-life/Alice-1.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240219_135321.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_124222.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_163300.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_164157.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240412_204331.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240412_204539.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/X100_Pro_SUN_01.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/X100_Pro_SUN_03.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/X100_Pro_SUN_06.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/X100Pro_Sun_08.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],

                ];
                break;
            case 'nature-photography':
                $title = 'Nature Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/nature/Folk_2.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk_3.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk_4.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/IMG_20240525_132012.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/IMG_20240525_163120.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-2.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-3.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-4.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
                ];
                break;
            case 'night-photography':
                $title = 'Night Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/night/Folk_1_night.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Folk_2_night.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240218_202841.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240218_203859.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240219_185433.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240221_191044.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240227_014201.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240527_104436.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240606_173211.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/X100_Pro_5X.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/X100.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-1.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-5.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
                ];
                break;
            case 'still-live-photography':
                $title = 'Still Live Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/still-life/Creative_Food_Photography_Miniature_People_at_Work_with_Chocolate_Cookies.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Exploring_Vibrant_Candy_Colors_A_Feast_for_the_Eyes_and_Taste_Buds.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_20240218_200352.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_20240219_114835.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Moody_Candle_Lantern_Photography_Capturin_Light_in_Darkness.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2416.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2417.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2418.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
                ];
                break;
            case 'series-photography':
                $title = 'Series Photography';
                $images = [

                    



[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_114752.webp',
     'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_120452.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_120547.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_035708.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_042629.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043500.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043535.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044458.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044610.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_1_firdausakbar19.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_2_firdausakbar19.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_3_firdausakbar19.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_134754.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_140112.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_145150.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_164154.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
],
                ];
                break;
            default:
                $title = '';
                $images = [];
                break;
        }

        return view('frontend.gallery', compact('title', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
