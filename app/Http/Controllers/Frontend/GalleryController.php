<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category = 'potrait-photography')
    {

        $title = '';
        $images = [];

        switch ($category) {
            case 'potrait-photography':
                $title = 'Potrait Photography';
                $images = [
                    [
                        'path' => 'frontend/images/gallery/work-1.jpg',
                        'title' => 'STROLLING AROUND',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
                    ],
                    [
                        'path' => 'frontend/images/gallery/work-2.jpg',
                        'title' => 'STROLLING AROUND2',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
                    ],
                    [
                        'path' => 'frontend/images/gallery/work-3.jpg',
                        'title' => 'STROLLING AROUND3',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
                    ],
                    [
                        'path' => 'frontend/images/gallery/work-4.jpg',
                        'title' => 'STROLLING AROUND4',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
                    ],
                    [
                        'path' => 'frontend/images/gallery/work-5.jpg',
                        'title' => 'STROLLING AROUND5',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
                    ],
                    [
                        'path' => 'frontend/images/gallery/work-6.jpg',
                        'title' => 'STROLLING AROUND6',
                        'desc' =>  'Shot on vivo V30e',
                        'location' =>  'Jakarta, Indonesia',
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
                ];
                break;
            case 'still-live-photography':
                $title = 'Still Live Photography';
                break;
            case 'series-photography':
                $title = 'Series Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_114752.webp',
    'title' => 'The Dragon Festival',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_120452.webp',
    'title' => 'The Dragon Festival',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240219_120547.webp',
    'title' => 'The Dragon Festival',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_035708.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_042629.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043500.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043535.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044458.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044610.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  '',
    'location' =>  'Gedebage',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_1_firdausakbar19.webp',
    'title' => '',
    'desc' =>  'Firdaus Akbar',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_2_firdausakbar19.webp',
    'title' => '',
    'desc' =>  'Firdaus Akbar',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_3_firdausakbar19.webp',
    'title' => '',
    'desc' =>  'Firdaus Akbar',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_134754.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Ddimzm5',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_140112.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Ddimzm5',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_145150.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Ddimzm5',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_164154.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Ddimzm5',
    'location' =>  '',
],
                ];
                break;
            default:
                // code...
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
