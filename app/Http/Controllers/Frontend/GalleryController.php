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
                $title = 'Portrait Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240219_103409.webp',
    'title' => 'Refleksi Kebahagiaan',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240219_175937.webp',
    'title' => 'One Fine Day',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240411_124436.webp',
    'title' => 'Celebrating the Cherry Blossoms',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2412.webp',
    'title' => 'The Moment of Joy Echoes to Us',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2413.webp',
    'title' => 'As Curious Eyes Peek into the Unknown',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2414.webp',
    'title' => 'Her Laughter is a Whispered Secret',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_2415.webp',
    'title' => 'In Her Arms, His Laughter Shines Brighter',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],

[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_110055-V.webp',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_110055-V.webp',
    'title' => 'The Joy of Crafting Flavors',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_134735-2.webp',
    'title' => 'Crafting from the Soul',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_163045.webp',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_163045.webp',
    'title' => 'The Sound of Joy',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_223552.webp',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_223552.webp',
    'title' => 'Grooving with Love',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240912_150526-2.webp',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240912_150526-2.webp',
    'title' => 'Melodies of Happiness',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],

                ];
                break;
            case 'street-photography':
                $title = 'Street Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/street-life/Alice-1.webp',
    'title' => 'A Pretty Deer',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240219_135321.webp',
    'title' => 'Strolling Around the City',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_124222.webp',
    'title' => 'Afternoon Sail',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_163300.webp',
    'title' => 'Blooming Sakura Tree',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240410_164157.webp',
    'title' => 'Waiting for You',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240412_204331.webp',
    'title' => 'Night at Dotonburi',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240412_204539.webp',
    'title' => 'Night at Dotonburi',
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
    'title' => 'Sunset at the City',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/X100Pro_Sun_08.webp',
    'title' => 'Sunset Seeker',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240912_163304_1.webp',
    'title' => 'Where Earth Meets Sky',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240913_140700_1.webp',
    'title' => 'In the Ups and Downs, We Find a Rhythm',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20240913_172217_1.webp',
    'title' => 'A Reflection Distorted, yet Within the Ripples, A Story Unfolds.',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],

                ];
                break;
            case 'nature-photography':
                $title = 'Nature Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/nature/Folk_2.webp',
    'title' => 'Menyusuri Kabut Emas Cileunca',
    'desc' =>  'Roman Bintang',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk_3.webp',
    'title' => 'Perjalanan Sunyi di Danau Pagi',
    'desc' =>  'Roman Bintang',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk_4.webp',
    'title' => 'Selamat Pagi Situ Cileunca',
    'desc' =>  'Roman Bintang',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Folk.webp',
    'title' => 'Mendayung Sebelum Terbit',
    'desc' =>  'Roman Bintang',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/IMG_20240525_132012.webp',
    'title' => 'Penjaga Hutan',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/IMG_20240525_163120.webp',
    'title' => 'Kabut Pagi Itu',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-2.webp',
    'title' => 'Beauty from Above',
    'desc' =>  'Commaditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-3.webp',
    'title' => 'The Bee & Flower',
    'desc' =>  'Commaditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-4.webp',
    'title' => 'The Magical Bromo',
    'desc' =>  'Commaditya',
    'location' =>  '',
],
                ];
                break;
            case 'night-photography':
                $title = 'Night Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/night/Folk_1_night.webp',
    'title' => 'Menyapa Malam di Pasupati',
    'desc' =>  'Roman Bintang',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Folk_2_night.webp',
    'title' => 'Pesona Malam di Wall of Heritage De Vries',
    'desc' =>  'Roman Bintang',
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
    'title' => 'Sea Side Night',
    'desc' =>  '',
    'location' =>  '',
],
// [ 
//     'path' => 'frontend/images/gallery/night/IMG_20240219_185433.webp',
//     'title' => 'City Lights',
//     'desc' =>  '',
//     'location' =>  '',
// ],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240221_191044.webp',
    'title' => 'Lights of the Day',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240227_014201.webp',
    'title' => 'Water Reflections at Night',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240527_104436.webp',
    'title' => 'Catching Bus at Night',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/IMG_20240606_173211.webp',
    'title' => 'Traffic Lights',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/X100_Pro_5X.webp',
    'title' => 'Skyscraper',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/X100.webp',
    'title' => 'The Beauty of Night Sky',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-1.webp',
    'title' => 'Sinar di Candi',
    'desc' =>  'Commaditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-5.webp',
    'title' => 'Suasana Taman Kota',
    'desc' =>  'Commaditya',
    'location' =>  '',
],
                ];
                break;
            case 'still-live-photography':
                $title = 'Still Life Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/still-life/Creative_Food_Photography_Miniature_People_at_Work_with_Chocolate_Cookies.webp',
    'title' => 'Miniature People at Work with Chocolate Cookies',
    'desc' =>  'Syaefa Umar',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Exploring_Vibrant_Candy_Colors_A_Feast_for_the_Eyes_and_Taste_Buds.webp',
    'title' => 'A Feast for the Eyes and Taste Buds',
    'desc' =>  'Bayu Danur Wenda',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_20240218_200352.webp',
    'title' => 'Red Lanterns',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_20240219_114835.webp',
    'title' => 'The Chinese Lion',
    'desc' =>  '',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Moody_Candle_Lantern_Photography_Capturin_Light_in_Darkness.webp',
    'title' => 'Capturing Light in Darkness',
    'desc' =>  'Ince Sitti Annis N',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2416.webp',
    'title' => 'Reflections of Passion',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2417.webp',
    'title' => 'Grace in Bloom',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/IMG_2418.webp',
    'title' => 'Whispers of Serenity',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],
                ];
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
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
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
    'title' => 'Biarkan Cahaya Berbicara tentang Kota',
    'desc' =>  'Firdaus',
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
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Dimas',
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
