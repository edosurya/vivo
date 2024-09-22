<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Creator;
use App\Models\Images;
use ZipArchive;
use File;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            try {
                $query = Images::query()
                    ->join('creators', 'creators.id', '=', 'images.creator_id')
                    ->when($request->filter_category, function ($query) use ($request) {
                        $query->where('images.category', $request->filter_category);
                    })
                    ->select('images.*', 'creators.fullname')
                    ->orderBy('images.id', 'DESC');
                return datatables()
                    ->eloquent($query)
                    ->addColumn('category', function ($row) {
                        return Images::TYPE[$row->category];
                    })
                    ->addColumn('image', function ($row) { 
                           $url= asset("storage/$row->path"); 
                           return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />'; 
                    })
                    ->addColumn('created_at', function ($row) {
                        $explode = explode(' ', $row->created_at->translatedFormat('d/m/Y H:i:s'));
                        return $explode[0] . '<br>' . $explode[1];
                    })
                    ->escapeColumns([])
                    ->toJson();
            } catch (\Throwable $th) {
                return response([
                    'draw' => 0,
                    'recordsTotal' => 0,
                    'recordsFiltered' => 0,
                    'data' => [],
                    'error' => $th->getMessage(),
                ]);
            }
        }

        $images = Images::all();
        return view('admin.image.index', compact('images'));
    }


    public function downloadMultiple(Request $request)
    {

        $zip = new ZipArchive;
        $images = Images::select('*');
        $zipFileName = 'all-attachment.zip';
        
        if($request->category != '') {
            $images = $images->where('category',$request->category);
            $cat_name = Images::TYPE[$request->category];
            $zipFileName = $cat_name.'-attachment.zip';
        }

        $images = $images->get();
        
        if(count($images) > 0) {
            $images = $images->pluck('path');
        } else {
            return redirect()->route('admin.image.index')->with('message', 'No File');
        }

        if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
            foreach ($images as $key => $value) {
                $zip->addFile('storage/'.$value, basename('storage/'.$value));
            }

            $zip->close();

            return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
        }
    }

}
