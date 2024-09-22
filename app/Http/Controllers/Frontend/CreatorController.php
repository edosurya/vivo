<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Creator;
use App\Models\Images;
use ZipArchive;
use File;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $code)
    {
        $code = Crypt::decrypt($code);
        $creator = Creator::where('code', $code)->first();

        return view('frontend.creator', compact('creator'));
    }


    public function download(Request $request, $code)
    {

        $zip = new ZipArchive;
        $creator = Creator::where('code', $code)->first();
        $zipFileName = $creator->fullname.'-all-attachment.zip';

        $images = Images::where('creator_id', $creator->id)->get();
        
        if(count($images) > 0) {
            $images = $images->pluck('path');
        } else {
            return redirect()->route('creator.index')->with('message', 'No File');
        }

        if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
            foreach ($images as $key => $value) {
                $zip->addFile('storage/'.$value, basename('storage/'.$value));
            }

            $zip->close();

            return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
        }
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
