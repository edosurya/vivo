<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($category = null)
    {
        $display = '';
        $custom_css = 'justify-content-center align-items-center min-vh-100';

        if ($category) {
            $categoryId = array_search($category, Gallery::TYPE);

            if ($categoryId === false) {
                abort(404, 'Category not found.');
            }

            $title = Gallery::IMAGE_CATEGORY[$categoryId];
            $galleries = Gallery::where('category', $categoryId)->orderBy('order', 'ASC')->get();

            $images = $galleries->map(function ($item) {
                return [
                    'path'     => asset('storage/' . $item->path),
                    'title'    => $item->title ?? '',
                    'desc'     => $item->desc ?? '',
                    'location' => $item->location ?? '',
                    'thumbnail'=> $item->thumbnail ?? '',
                    'crator'    => $item->creator ?? '',
                ];
            })->toArray();

            $custom_css = 'mt-6';

        } else {
            $display = '';
            $title = '';
            $images = [];
        }

        return view('frontend.gallery', compact('images', 'title', 'display', 'custom_css'));
    }


    public function index2($category = null)
    {

        $display = '';
        $title = '';
        $images = [];

        switch ($category) {
            case 'potrait-photography':
                $display = '';
                $title = 'Portrait Photography';
                $images = [
// NEW
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi---Belajar-alat-Gamelan.webp',
    'title' => 'Belajar alat Gamelan',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi---Ceria-di-Tengah-Lumpur.webp',
    'title' => 'Ceria di Tengah Lumpur',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi---Nando-Anak-Jawa-Mata-Biru.webp',
    'title' => 'Nando Anak Jawa Mata Biru',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi---Penggembala-Kambing-Suren.webp',
    'title' => 'Penggembala Kambing Suren',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi---Persiapan-Penari.webp',
    'title' => 'Persiapan Penari',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi01.webp',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi02.webp',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Andika-Oky-Arisandi03.webp',
    'desc' =>  'Andika Oky Arisandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Ares_Jonekson_Saragi---Joyful.webp',
    'title' => 'Joyful',
    'desc' =>  'Ares Jonekson Saragi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Ares-Jonekson-Saragi---The-Carpenter.webp',
    'title' => 'The Carpenter',
    'desc' =>  'Ares Jonekson Saragi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Ganjar-Mustika---Senyum-Persembahan.webp',
    'title' => 'Senyum Persembahan',
    'desc' =>  'Ganjar Mustika',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Ganjar-Mustika---Tersenyum-Ramah-Menyapa.webp',
    'title' => 'Tersenyum Ramah Menyapa',
    'desc' =>  'Ganjar Mustika',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_7085.webp',
    'desc' =>  '',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/IMG_7856.webp',
    'title' => '',
    'desc' =>  '',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Irwandi---Menganyam-Rotan.webp',
    'title' => 'Menganyam Rotan',
    'desc' =>  'Irwandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Irwandi---Meracik-Kopi.webp',
    'title' => 'Meracik Kopi',
    'desc' =>  'Irwandi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Jiehan_Herry_Saputro---Perahu-ini-Untukmu.webp',
    'title' => 'Perahu ini Untukmu',
    'desc' =>  'Jiehan Herry Saputro',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Jiehan-Herry-Saputro---Kaca-Pembesar-Teman-Hidupku.webp',
    'title' => 'Kaca Pembesar Teman Hidupku',
    'desc' =>  'Jiehan Herry Saputro',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Maya-Nurikawati---Mata-Ikan---Finalis.webp',
    'title' => 'Mata Ikan',
    'desc' =>  'Maya Nurikawati',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Maya-Nurikawati---Sahabat-Ceria.webp',
    'title' => 'Sahabat Ceria',
    'desc' =>  'Maya Nurikawati',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Maya-Nurikawati---Topeng-Si-Kecil.webp',
    'title' => 'Topeng Si Kecil',
    'desc' =>  'Maya Nurikawati',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Andika-Oky-Arisandi---Dua-Wajah-Satu-Cerita_.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' =>  'Dua Wajah Satu Cerita',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Andika-Oky-Arisandi---Harmoni-Kecantikan-dalam-Budaya.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' =>  'Harmoni Kecantikan dalam Budaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Andika-Oky-Arisandi---Pembatik-Imogiri---CHANGE-WATERMARK-TO-WHITE.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' =>  'Pembatik Imogiri',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Andika-Oky-Arisandi---Riang-di-Balik-Daun-Talas.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' =>  'Riang di Balik Daun Talas',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Andika-Oky-Arisandi---Suasana-Pagi-di-Desa-Candi.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' =>  'Suasana Pagi di Desa Candi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Ares_Jonekson_Saragi---Imaginary-Glasses,-Real-Smiles.webp',
    'desc' => 'Ares Jonekson Saragi',
    'title' =>  'Imaginary Glasses, Real Smiles',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Benny-Lim---Pesona-Sang-Penari.webp',
    'title' => 'Pesona Sang Penari',
    'desc' =>  'Benny Lim',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Ganjar_Mustika---Bersama-Nenek.webp',
    'title' => 'Bersama Nenek',
    'desc' =>  'Jiehan Herry Saputro',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---Jiehan_Herry_Saputro---Menjaga-Kambing-Bapak-Bersama.webp',
    'title' => 'Menjaga Kambing Bapak Bersama',
    'desc' =>  'Jiehan Herry Saputro',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Priority---M_Aditya_Sakti_Prabowo---Membantu-Ayah-Menjala-Ikan.webp',
    'title' => 'Melodies of Happiness',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Rendha-Rais---Melodies-of-Happiness.webp',
    'title' => 'Melodies of Happiness',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Rendha-Rais---The-Joy-of-Crafting-Flavors.webp',
    'title' => 'The Joy of Crafting Flavors',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/portrait/Rendha-Rais---The-Sound-of-Joy.webp',
    'title' => 'The Sound of Joy',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' =>  '',
 ],              
// END

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
    'path' => 'frontend/images/gallery/portrait/IMG_20240911_134738.webp',
    'title' => 'Crafting from the Soul',
    'desc' =>  'Rendha Rais',
    'location' =>  '',
    'thumb' => 'frontend/images/gallery/portrait/thumb_IMG_20240911_134738.webp',
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
                $display = '';
                $title = 'Street Photography';
                $images = [
// NEW

[ 
    'path' => 'frontend/images/gallery/street-life/Alice-Wong---Japan-Beauty.webp',
    'desc' =>  'Alice Wong',
    'title' => 'Japan Beauty',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Benny-Lim---A-Reflection-Distorted,-yet-Within-the-Ripples,-A-Story-Unfolds.webp',
    'desc' =>  'Benny Lim',
    'title' => 'A Reflection Distorted, yet Within the Ripples, A Story Unfolds',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Benny-Lim---In-the-Ups-and-Downs,-We-Find-a-Rhythm-.webp',
    'desc' =>  'Benny Lim',
    'title' => 'In the Ups and Downs, We Find a Rhythm ',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Ganjar-Mustika---Bergegas-Dalam-Alunan-Cahaya.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Bergegas Dalam Alunan Cahaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Ganjar-Mustika---Dua-Gadis-Kecil.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Dua Gadis Kecil',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Ganjar-Mustika---Harmoni-Keceriaan.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Harmoni Keceriaan',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Jefri-Deniawan---Beramai-ramai-menyasksikan-HUT-TNI.webp',
    'desc' =>  'Jefri Deniawan',
    'title' => 'Beramai ramai menyasksikan HUT TNI',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Priority---Andika-Oky-Arisandi---Bentangan-Kain-Batik.webp',
    'desc' =>  'Andika Oky Arisandi',
    'title' => 'Bentangan Kain Batik',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Priority---Rendy_Septian_Nugroho---Perspektif.webp',
    'desc' =>  'Rendy_Septian_Nugroho',
    'title' => 'Perspektif',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Priority---Sofyan-Efendi---Bermain-Di-Pantai---Finalis.webp',
    'desc' =>  'Sofyan Efendi',
    'title' => 'Bermain Di Pantai',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---agem.webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'agem',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---barong-of-serangan-island-(2).webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'barong of serangan island (2)',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---ingin-pulang.webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'ingin pulang',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---pengiring-(3).webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'pengiring (3)',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Putu-Aditya-@commaditya---walking-the-holy-path.webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'walking the holy path',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Rendha-Rais---Serenity-by-the-Manor.webp',
    'desc' =>  'Rendha Rais',
    'title' => 'Serenity by the Manor',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Rendha-Rais---Stepping-into-History.webp',
    'desc' =>  'Rendha Rais',
    'title' => 'Stepping into History',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Rendha-Rais---Timeless-Watch.webp',
    'desc' =>  'Rendha Rais',
    'title' => 'Timeless Watch',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/street-life/Sofyan-Efendi---Empat-Sekawan.webp',
    'desc' =>  'Sofyan Efendi',
    'title' => 'Empat Sekawan',
    'location' =>  '',
    'thumb' =>  '',
],

// END

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
                $display = '';
                $title = 'Nature Photography';
                $images = [

// NEW

                    [ 
    'path' => 'frontend/images/gallery/nature/Andru-Kosti---Toba-&-Fisherman.webp',
    'desc' =>  'Andru Kosti',
    'title' => 'Toba & Fisherman',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Ares-Jonekson-Saragi---Beautiful-Day.webp',
    'desc' =>  'Ares Jonekson Saragi',
    'title' => 'Beautiful Day',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Faris-Adinata---Golden-Dusk-at-Mejan-Stone-Beach.webp',
    'desc' =>  'Faris Adinata',
    'title' => 'Golden Dusk at Mejan Stone Beach',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Faris-Adinata---Serenity-of-Mount-Batur.webp',
    'desc' =>  'Faris Adinata',
    'title' => 'Serenity of Mount Batur',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Ganjar-Mustika---Terbang-Menuju-Kehidupan,-Mencapai-Nektar-Harapan.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Terbang Menuju Kehidupan, Mencapai Nektar Harapan',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/I-kadek-yuliana-putra---Luasnya-Pantai.webp',
    'desc' =>  'I kadek yuliana putra',
    'title' => 'Luasnya Pantai',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Priority---Dian-Pratama-Putra----LANSKAP-KEINDAHAN-GIGI-HIU---Finalis.webp',
    'desc' =>  'Dian Pratama Putra',
    'title' => ' LANSKAP KEINDAHAN GIGI HIU',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Priority---Dian-Pratama-Putra----PESONA-GIGI-HIU.webp',
    'desc' =>  'Dian Pratama Putra',
    'title' => ' PESONA GIGI HIU',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Priority---Ganjar-Mustika---Harmoni-Cahaya-di-Ufuk-Fajar.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Harmoni Cahaya di Ufuk Fajar',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Priority---Ganjar-Mustika---Kepakan-Indah-Sang-Sepah-Raja.webp',
    'desc' =>  'Ganjar Mustika',
    'title' => 'Kepakan Indah Sang Sepah Raja',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Putu-Aditya-@commaditya---lines-in-the-sand-(1).webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'lines in the sand (1)',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Putu-Aditya-@commaditya---the-usual-suspect.webp',
    'desc' =>  'Putu Aditya @commaditya',
    'title' => 'the usual suspect',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Roman-Bintang---Perjanalan-Sunyi-di-Pagi-Hari---2.webp',
    'desc' =>  'Roman Bintang',
    'title' => 'Perjanalan Sunyi di Pagi Hari',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Roman-Bintang---Perjanalan-Sunyi-di-Pagi-Hari.webp',
    'desc' =>  'Roman Bintang',
    'title' => 'Perjanalan Sunyi di Pagi Hari',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/Wasisto---Hutan-Jati.webp',
    'desc' =>  'Wasisto',
    'title' => 'Hutan Jati',
    'location' =>  '',
    'thumb' =>  '',
],
// END
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-2.webp',
    'title' => 'The Usual Suspect',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-3.webp',
    'title' => 'The Helper',
    'desc' =>  'Putu Aditya',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/nature/CMD-IMAGINE-4.webp',
    'title' => 'Lines in the Sand',
    'desc' =>  'Putu Aditya',
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
                $display = '';
                $title = 'Night Photography';
                $images = [

// NEW
[ 
    'path' => 'frontend/images/gallery/night/Andika-Oky-Arisandi---Panorama-malam-di-Masjid-Sheikh-Zayed---2.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' => 'Panorama malam di Masjid Sheikh Zayed-2',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Andika-Oky-Arisandi---Panorama-malam-di-Masjid-Sheikh-Zayed.webp',
    'desc' => 'Andika Oky Arisandi',
    'title' => 'Panorama malam di Masjid Sheikh Zayed',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Ganjar-Mustika---Bima-Sakti.webp',
    'desc' => 'Ganjar Mustika',
    'title' => 'Bima Sakti',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Muhammad-Rifki-Maulidan----Ramai-Setelah-Hujan.webp',
    'desc' => 'Muhammad Rifki Maulidan',
    'title' => ' Ramai Setelah Hujan',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Priority---Ganjar-Mustika---Kebun-Teh.webp',
    'desc' => 'Ganjar Mustika',
    'title' => 'Kebun Teh',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Priority---Yunus-evanudin---Candle-light-at-Borobudur.webp',
    'desc' => 'Yunus evanudin',
    'title' => 'Candle light at Borobudur',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Putu-Aditya-@commaditya---Beyond-The-Portal.webp',
    'desc' => 'Putu Aditya @commaditya',
    'title' => 'Beyond The Portal',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Putu-Aditya-@commaditya---colors-of-the-market-(2).webp',
    'desc' => 'Putu Aditya @commaditya',
    'title' => 'colors of the market (2)',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Putu-Aditya-@commaditya---locked-in.webp',
    'desc' => 'Putu Aditya @commaditya',
    'title' => 'locked in',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Retouch - MUHAMMAD FACHRI - Mengabdi dalam kegelapan, mencari secercah harapan.webp',
    'desc' => 'MUHAMMAD FACHRI',
    'title' => 'Mengabdi dalam kegelapan, mencari secercah harapan',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Retouch---Dian-Pratama-Putra---BERJUANG-UNTUK-PULANG---Finalis.webp',
    'desc' => 'Dian Pratama Putra',
    'title' => 'BERJUANG UNTUK PULANG',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Roman-Bintang---Menyapa-Malam-di-Pasupati.webp',
    'desc' => 'Roman Bintang',
    'title' => 'Menyapa Malam di Pasupati',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/night/Roman-Bintang---Pesona-Malam-di-Wall-of-Heritage-De-Vries.webp',
    'desc' => 'Roman Bintang',
    'title' => 'Pesona Malam di Wall of Heritage De Vries',
    'location' =>  '',
    'thumb' =>  '',
],
// END
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
                $display = '';
                $title = 'Still Life Photography';
                $images = [
// NEW

[ 
    'path' => 'frontend/images/gallery/still-life/Ahmad-Azmi-Amiq---Harmoni-Dalam-Perbedaan.webp',
    'desc' =>  'Ahmad Azmi Amiq',
    'title' => 'Harmoni Dalam Perbedaan',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Ahmad-Mohhidin-–-Tulang-Daun.webp',
    'desc' =>  'Ahmad Mohhidin',
    'title' => 'Tulang Daun',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Benny-Lim---Reflections-of-Passion.webp',
    'desc' =>  'Benny Lim',
    'title' => 'Reflections of Passion',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Benny-Lim---Whispers-of-Serenity.webp',
    'desc' =>  'Benny Lim',
    'title' => 'Whispers of Serenity',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Harry-Hartanto---Burung-Bangau-Kertas.webp',
    'desc' =>  'Harry Hartanto',
    'title' => 'Burung Bangau Kertas',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Harry-Hartanto---Crane_s-Nest.webp',
    'desc' =>  'Harry Hartanto',
    'title' => 'Crane_s Nest',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Harry-Hartanto---No-Place-Like-Home.webp',
    'desc' =>  'Harry Hartanto',
    'title' => 'No Place Like Home',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Harry-Hartanto---Positive-Environment.webp',
    'desc' =>  'Harry Hartanto',
    'title' => 'Positive Environment',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Jefri-Deniawan-–-Sepasang-Sepatu.webp',
    'desc' =>  'Jefri Deniawan',
    'title' => 'Sepasang Sepatu',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Priority---Ahmad-Azmi-Amiq--Jangan-Lupa-Bahagia.webp',
    'desc' =>  'Ahmad Azmi Amiq  Jangan Lupa Bahagia',
    'title' => '',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Priority---Ari-Mustofa--Bayangan-Kerajaan.webp',
    'desc' =>  'Ari Mustofa  Bayangan Kerajaan',
    'title' => '',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Priority---Azka-Dzakiyuddin----Cahaya-Sumber-Inspirasi---Finalis.webp',
    'desc' =>  'Azka Dzakiyuddin',
    'title' => ' Cahaya Sumber Inspirasi',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Priority---Benny-Lim---Grace-in-Bloom.webp',
    'desc' =>  'Benny Lim',
    'title' => 'Grace in Bloom',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Priority---Sofyan-Efendi---Benda-Yang-Indah-Sesuai-Bentuknya.webp',
    'desc' =>  'Sofyan Efendi',
    'title' => 'Benda Yang Indah Sesuai Bentuknya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/still-life/Syaefa-Umar---Miniature-People-at-Work-with-Chocolate-Cookies.webp',
    'desc' =>  'Syaefa Umar',
    'title' => 'Miniature People at Work with Chocolate Cookies',
    'location' =>  '',
    'thumb' =>  '',
],
// END
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
                $display = '';
                $title = 'Series Photography';
                $images = [

// NEW

[ 
    'path' => 'frontend/images/gallery/series/Firdaus-Akbar---Biarkan-Kota-Bercerita-tentang-Senja---1.webp',
    'desc' =>  'Firdaus Akbar',
    'title' => 'Biarkan Kota Bercerita tentang Senja',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Firdaus-Akbar---Biarkan-Kota-Bercerita-tentang-Senja---2.webp',
    'desc' =>  'Firdaus Akbar',
    'title' => 'Biarkan Kota Bercerita tentang Senja',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Firdaus-Akbar---Biarkan-Kota-Bercerita-tentang-Senja---3.webp',
    'desc' =>  'Firdaus Akbar',
    'title' => 'Biarkan Kota Bercerita tentang Senja',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan---Ojek-Perahu-Pelabuhan-Sunda-Kelapa---1-.webp',
    'desc' =>  'Gede Hindhu Septiawan',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan---Ojek-Perahu-Pelabuhan-Sunda-Kelapa---2.webp',
    'desc' =>  'Gede Hindhu Septiawan',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan---Ojek-Perahu-Pelabuhan-Sunda-Kelapa---4.webp',
    'desc' =>  'Gede Hindhu Septiawan',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan---Ojek-Perahu-Pelabuhan-Sunda-Kelapa---5.webp',
    'desc' =>  'Gede Hindhu Septiawan',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan---Ojek-Perahu-Pelabuhan-Sunda-Kelapa---6.webp',
    'desc' =>  'Gede Hindhu Septiawan',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Gede-Hindhu-Septiawan--Ojek-Perahu-Pelabuhan-Sunda-Kelapa---3.webp',
    'desc' =>  'Gede Hindhu Septiawan  ',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Maya-Nurikawati---Generasi-Penerus-Wayang-Golek-Cepak---1.webp',
    'desc' =>  'Maya Nurikawati',
    'title' => 'Generasi Penerus Wayang Golek Cepak',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Maya-Nurikawati---Generasi-Penerus-Wayang-Golek-Cepak---2.webp',
    'desc' =>  'Maya Nurikawati',
    'title' => 'Generasi Penerus Wayang Golek Cepak',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Maya-Nurikawati---Generasi-Penerus-Wayang-Golek-Cepak---3.webp',
    'desc' =>  'Maya Nurikawati',
    'title' => 'Generasi Penerus Wayang Golek Cepak',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Maya-Nurikawati---Generasi-Penerus-Wayang-Golek-Cepak---4.webp',
    'desc' =>  'Maya Nurikawati',
    'title' => 'Generasi Penerus Wayang Golek Cepak',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Maya-Nurikawati---Generasi-Penerus-Wayang-Golek-Cepak---5.webp',
    'desc' =>  'Maya Nurikawati',
    'title' => 'Generasi Penerus Wayang Golek Cepak',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Nur-Rizky-Amalia----Proses-Pembuatan-&-Penangkapan-Ikan-Asin-Tipis-1.webp',
    'desc' =>  'Nur Rizky Amalia',
    'title' => ' Proses Pembuatan & Penangkapan Ikan Asin Tipis',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Nur-Rizky-Amalia----Proses-Pembuatan-&-Penangkapan-Ikan-Asin-Tipis-2.webp',
    'desc' =>  'Nur Rizky Amalia',
    'title' => ' Proses Pembuatan & Penangkapan Ikan Asin Tipis',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Nur-Rizky-Amalia----Proses-Pembuatan-&-Penangkapan-Ikan-Asin-Tipis-3.webp',
    'desc' =>  'Nur Rizky Amalia',
    'title' => ' Proses Pembuatan & Penangkapan Ikan Asin Tipis',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Nur-Rizky-Amalia----Proses-Pembuatan-&-Penangkapan-Ikan-Asin-Tipis-4.webp',
    'desc' =>  'Nur Rizky Amalia',
    'title' => ' Proses Pembuatan & Penangkapan Ikan Asin Tipis',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Nur-Rizky-Amalia----Proses-Pembuatan-&-Penangkapan-Ikan-Asin-Tipis-5.webp',
    'desc' =>  'Nur Rizky Amalia',
    'title' => ' Proses Pembuatan & Penangkapan Ikan Asin Tipis',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Yunus-evanudin---Beda-tapi-digdaya-1.webp',
    'desc' =>  'Yunus evanudin',
    'title' => 'Beda tapi digdaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Yunus-evanudin---Beda-tapi-digdaya-2.webp',
    'desc' =>  'Yunus evanudin',
    'title' => 'Beda tapi digdaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Yunus-evanudin---Beda-tapi-digdaya-3.webp',
    'desc' =>  'Yunus evanudin',
    'title' => 'Beda tapi digdaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Yunus-evanudin---Beda-tapi-digdaya-4.webp',
    'desc' =>  'Yunus evanudin',
    'title' => 'Beda tapi digdaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Priority---Yunus-evanudin---Beda-tapi-digdaya-5.webp',
    'desc' =>  'Yunus evanudin',
    'title' => 'Beda tapi digdaya',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Yudi-kristianto---Wayang-kertas-mbah-brambang---1.webp',
    'desc' =>  'Yudi kristianto',
    'title' => 'Wayang kertas mbah brambang',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Yudi-kristianto---Wayang-kertas-mbah-brambang---2.webp',
    'desc' =>  'Yudi kristianto',
    'title' => 'Wayang kertas mbah brambang',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Yudi-kristianto---Wayang-kertas-mbah-brambang---3.webp',
    'desc' =>  'Yudi kristianto',
    'title' => 'Wayang kertas mbah brambang',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Yudi-kristianto---Wayang-kertas-mbah-brambang---4.webp',
    'desc' =>  'Yudi kristianto',
    'title' => 'Wayang kertas mbah brambang',
    'location' =>  '',
    'thumb' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Yudi-kristianto---Wayang-kertas-mbah-brambang---5.webp',
    'desc' =>  'Yudi kristianto',
    'title' => 'Wayang kertas mbah brambang',
    'location' =>  '',
    'thumb' =>  '',
],
// END

[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_035708.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_042629.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043500.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_043535.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044458.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240909_044610.webp',
    'title' => 'Ojek Perahu Pelabuhan Sunda Kelapa',
    'desc' =>  'Gede H Septiawan',
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
    'title' => 'Biarkan Cahaya Berbicara tentang Kota',
    'desc' =>  'Firdaus',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/Photo_Series_3_firdausakbar19.webp',
    'title' => 'Biarkan Cahaya Berbicara tentang Kota',
    'desc' =>  'Firdaus',
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
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Dimas',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_145150.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Dimas',
    'location' =>  '',
],
[ 
    'path' => 'frontend/images/gallery/series/IMG_20240901_164154.webp',
    'title' => 'Pesona Kapal Latih Cuauhtémoc Asal Meksiko',
    'desc' =>  'Dimas',
    'location' =>  '',
],
                ];
                break;



            case 'winner-series-photography':
                $display = 'none';
                $title = 'Pemenang Series Photography';
                $images = [
                    [ 
                        'path' => 'frontend/images/winner/series-photography-M_Aditya_Sakti_Prabowo-8bfcf091-22b5-40fc-a2d8-d66c552b3eb9-1.webp',
                        'title' => 'Piala Dunia Di Depan Mata',
                        'desc' =>  'M Aditya Sakti Prabowo',
                        'location' =>  '',
                        'desc2' => 'Dengan mata yang penuh harapan, mereka bermain di lapangan untuk meraih kemenangan, dengan sorakan ribuan penonton yang memuji setiap gol yang tercipta. Setiap latihan yang dilakukan di bawah terik matahari, setiap tetes keringat yang mengalir, adalah bagian dari perjalanan panjang untuk mencapai cita-cita mereka. Di dalam kebersamaan mereka, tak hanya ada permainan, tetapi juga persahabatan yang kokoh. Mereka saling mendukung, memberi semangat saat salah satu dari mereka jatuh, dan merayakan kemenangan bersama. Mereka tahu bahwa keberhasilan tak hanya datang dari kemampuan individu, tetapi juga dari kekuatan tim. Mereka terus merajut impian, terus berlatih, dan terus berusaha. Dengan sepenuh hati, mereka mengejar mimpi untuk bermain di Piala Dunia, mewujudkan impian yang telah mereka jalin sejak pertama kali menendang bola. Karena mereka tahu, di balik setiap mimpi besar, ada kerja keras dan tekad yang kuat.',

                    ],

                    [ 
                        'path' => 'frontend/images/winner/series-photography-M_Aditya_Sakti_Prabowo-8bfcf091-22b5-40fc-a2d8-d66c552b3eb9-2.webp',
                        'title' => 'Piala Dunia Di Depan Mata',
                        'desc' =>  'M Aditya Sakti Prabowo',
                        'location' =>  '',
                        'desc2' => 'Dengan mata yang penuh harapan, mereka bermain di lapangan untuk meraih kemenangan, dengan sorakan ribuan penonton yang memuji setiap gol yang tercipta. Setiap latihan yang dilakukan di bawah terik matahari, setiap tetes keringat yang mengalir, adalah bagian dari perjalanan panjang untuk mencapai cita-cita mereka. Di dalam kebersamaan mereka, tak hanya ada permainan, tetapi juga persahabatan yang kokoh. Mereka saling mendukung, memberi semangat saat salah satu dari mereka jatuh, dan merayakan kemenangan bersama. Mereka tahu bahwa keberhasilan tak hanya datang dari kemampuan individu, tetapi juga dari kekuatan tim. Mereka terus merajut impian, terus berlatih, dan terus berusaha. Dengan sepenuh hati, mereka mengejar mimpi untuk bermain di Piala Dunia, mewujudkan impian yang telah mereka jalin sejak pertama kali menendang bola. Karena mereka tahu, di balik setiap mimpi besar, ada kerja keras dan tekad yang kuat.',
                    ],
                    [ 
                        'path' => 'frontend/images/winner/series-photography-M_Aditya_Sakti_Prabowo-8bfcf091-22b5-40fc-a2d8-d66c552b3eb9-3.webp',
                        'title' => 'Piala Dunia Di Depan Mata',
                        'desc' =>  'M Aditya Sakti Prabowo',
                        'location' =>  '',
                        'desc2' => 'Dengan mata yang penuh harapan, mereka bermain di lapangan untuk meraih kemenangan, dengan sorakan ribuan penonton yang memuji setiap gol yang tercipta. Setiap latihan yang dilakukan di bawah terik matahari, setiap tetes keringat yang mengalir, adalah bagian dari perjalanan panjang untuk mencapai cita-cita mereka. Di dalam kebersamaan mereka, tak hanya ada permainan, tetapi juga persahabatan yang kokoh. Mereka saling mendukung, memberi semangat saat salah satu dari mereka jatuh, dan merayakan kemenangan bersama. Mereka tahu bahwa keberhasilan tak hanya datang dari kemampuan individu, tetapi juga dari kekuatan tim. Mereka terus merajut impian, terus berlatih, dan terus berusaha. Dengan sepenuh hati, mereka mengejar mimpi untuk bermain di Piala Dunia, mewujudkan impian yang telah mereka jalin sejak pertama kali menendang bola. Karena mereka tahu, di balik setiap mimpi besar, ada kerja keras dan tekad yang kuat.',
                    ],
                    [ 
                        'path' => 'frontend/images/winner/series-photography-M_Aditya_Sakti_Prabowo-8bfcf091-22b5-40fc-a2d8-d66c552b3eb9-4.webp',
                        'title' => 'Piala Dunia Di Depan Mata',
                        'desc' =>  'M Aditya Sakti Prabowo',
                        'location' =>  '',
                        'desc2' => 'Dengan mata yang penuh harapan, mereka bermain di lapangan untuk meraih kemenangan, dengan sorakan ribuan penonton yang memuji setiap gol yang tercipta. Setiap latihan yang dilakukan di bawah terik matahari, setiap tetes keringat yang mengalir, adalah bagian dari perjalanan panjang untuk mencapai cita-cita mereka. Di dalam kebersamaan mereka, tak hanya ada permainan, tetapi juga persahabatan yang kokoh. Mereka saling mendukung, memberi semangat saat salah satu dari mereka jatuh, dan merayakan kemenangan bersama. Mereka tahu bahwa keberhasilan tak hanya datang dari kemampuan individu, tetapi juga dari kekuatan tim. Mereka terus merajut impian, terus berlatih, dan terus berusaha. Dengan sepenuh hati, mereka mengejar mimpi untuk bermain di Piala Dunia, mewujudkan impian yang telah mereka jalin sejak pertama kali menendang bola. Karena mereka tahu, di balik setiap mimpi besar, ada kerja keras dan tekad yang kuat.',
                    ],
                    [ 
                        'path' => 'frontend/images/winner/series-photography-M_Aditya_Sakti_Prabowo-8bfcf091-22b5-40fc-a2d8-d66c552b3eb9-5.webp',
                        'title' => 'Piala Dunia Di Depan Mata',
                        'desc' =>  'M Aditya Sakti Prabowo',
                        'location' =>  '',
                        'desc2' => 'Dengan mata yang penuh harapan, mereka bermain di lapangan untuk meraih kemenangan, dengan sorakan ribuan penonton yang memuji setiap gol yang tercipta. Setiap latihan yang dilakukan di bawah terik matahari, setiap tetes keringat yang mengalir, adalah bagian dari perjalanan panjang untuk mencapai cita-cita mereka. Di dalam kebersamaan mereka, tak hanya ada permainan, tetapi juga persahabatan yang kokoh. Mereka saling mendukung, memberi semangat saat salah satu dari mereka jatuh, dan merayakan kemenangan bersama. Mereka tahu bahwa keberhasilan tak hanya datang dari kemampuan individu, tetapi juga dari kekuatan tim. Mereka terus merajut impian, terus berlatih, dan terus berusaha. Dengan sepenuh hati, mereka mengejar mimpi untuk bermain di Piala Dunia, mewujudkan impian yang telah mereka jalin sejak pertama kali menendang bola. Karena mereka tahu, di balik setiap mimpi besar, ada kerja keras dan tekad yang kuat.',
                    ],
                ];
                break;
            case 'winner':
                $display = 'none';
                break;
            default:
                $title = '';
                $images = [];
                break;
        }


        return view('frontend.gallery', compact('winner', 'display','title', 'images'));
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
