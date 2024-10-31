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
    'path' => 'frontend/images/gallery/portrait/Putu-Aditya-@commaditya---sabita-andini.webp',
    'title' => 'Sabita Andini',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Putu-Aditya-@commaditya---viewfinder.webp',
    'title' => 'Viewfinder',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Putu-Aditya-@commaditya---walking-the-holy-path.webp',
    'title' => 'Walking the Holy Path',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],

[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_105317.webp',
    'title' => 'The Joy of Crafting Flavors',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_105638.webp',
    'title' => 'The Joy of Crafting Flavors',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_133457.webp',
    'title' => 'Crafting from the Soul',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_133457.webp',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_164247.webp',
    'title' => 'The Sound of Joy',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_164731.webp',
    'title' => 'The Sound of Joy',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_164731.webp',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_223638.webp',
    'title' => 'Grooving with Love',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_231058.webp',
    'title' => 'Grooving with Love',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240912_150624.webp',
    'title' => 'Melodies of Happiness',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240912_150624.webp',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20240912_150724.webp',
    'title' => 'Melodies of Happiness',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20241023_165445.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20241023_165445.webp',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20241023_165719.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_20241023_170909.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20241023_170909.webp',
],

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


                ];
                break;
            case 'street-photography':
                $title = 'Street Photography';
                $images = [

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
    'title' => 'A Reflection Distorted, yet Within the Ripples, A Story Unfolds',
    'desc' =>  'Benny Lim',
    'location' =>  '',
],

[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---agem.webp',
    'title' => 'Agem',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---barong-of-serangan-island.webp',
    'title' => 'Barong of Serangan Island',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---colors-of-the-market.webp',
    'title' => 'Colors of the Market',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---ingin-pulang.webp',
    'title' => 'Ingin Pulang',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---locked-in.webp',
    'title' => 'Locked In',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---pengiring.webp',
    'title' => 'Pengiring',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---run-with-the-sun.webp',
    'title' => 'Run with the Sun',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/street-life/thumb_Putu-Aditya-@commaditya---run-with-the-sun.webp',
],


[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_165640.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_165719.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_170818.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_170952.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_171835.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_172021.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_172156.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/street-life/thumb_IMG_20241023_172156.webp',
],
[ 
    'path' => 'frontend/images/gallery/street-life/IMG_20241023_172407.webp',
    'title' => '',
    'desc' =>  'Rendha Rais',
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




                ];
                break;
            case 'nature-photography':
                $title = 'Nature Photography';
                $images = [
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
    'path' => 'frontend/images/gallery/nature/Alice-1.webp',
    'title' => 'A Pretty Deer',
    'desc' =>  '',
    'location' =>  '',
],

                ];
                break;
            case 'night-photography':
                $title = 'Night Photography';
                $images = [
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-1.webp',
    'title' => 'Beyond the Portal',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/CMD-IMAGINE-5.webp',
    'title' => 'Eyecandy',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
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
    'path' => 'frontend/images/gallery/night/IMG_20240219_185433.webp',
    'title' => 'City Lights',
    'desc' =>  '',
    'location' =>  '',
],
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

                ];
                break;
            case 'still-live-photography':
                $title = 'Still Life Photography';
                $images = [
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
    'path' => 'frontend/images/gallery/still-life/Moody_Candle_Lantern_Photography_Capturin_Light_in_Darkness.webp',
    'title' => 'Capturing Light in Darkness',
    'desc' =>  'Ince Sitti Annis N',
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
                ];
                break;
            case 'series-photography':
                $title = 'Series Photography';
                $images = [

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
