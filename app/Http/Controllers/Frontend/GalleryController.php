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
                break;
            case 'nature-photography':
                $title = 'Nature Photography';
                break;
            case 'night-photography':
                $title = 'Night Photography';
                break;
            case 'still-live-photography':
                $title = 'Still Live Photography';
                break;
            case 'series-photography':
                $title = 'Series Photography';
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
