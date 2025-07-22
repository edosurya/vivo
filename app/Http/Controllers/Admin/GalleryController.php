<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            try {
                $query = Gallery::query()
                    ->when($request->filter_category, function ($query) use ($request) {
                        $query->where('galleries.category', $request->filter_category);
                    })
                    ->select('galleries.*')
                    ->orderBy('galleries.id', 'DESC');
                return datatables()
                    ->eloquent($query)
                    ->addColumn('category', function ($row) {
                        return Gallery::TYPE[$row->category];
                    })
                    ->addColumn('galleries', function ($row) { 
                           $url= asset("storage/$row->path"); 
                           return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />'; 
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

        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }


    // Form tambah galeri
    public function create()
    {
        return view('admin.galleries.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'    => 'required|image|mimes:jpeg,png,jpg,webp|max:1024', // max 1MB
            'thumbnail'=> 'required|image|mimes:jpeg,png,jpg,webp|max:1024', // max 1MB
            'title'    => 'nullable|string|max:50',
            'desc'     => 'nullable|string|max:250',
            'category' => 'nullable|integer',
            'creator'  => 'nullable|string',
            'location'  => 'nullable|string',
        ]);

        $category = Gallery::TYPE[$request->category];
        
        // Save file to public storage
        $path = $request->file('image')->store('uploads/galleries/'.$category, 'public');
        $thumbnail = $request->file('thumbnail')->store('uploads/thumbnail/'.$category, 'public');

        // Dave to DB
        Gallery::create([
            'path'     => $path,
            'thumbnail'=> $thumbnail,
            'title'    => $request->input('title'),
            'desc'     => $request->input('desc'),
            'category' => $request->input('category'),
            'crator'   => $request->input('creator'),
            'location' => $request->input('location'),
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gambar berhasil diunggah.');
    }


    // Edit galeri
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    // Update galeri
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'desc' => 'nullable|string',
            'category' => 'nullable|integer',
            'path' => 'nullable|string|max:255',
        ]);

        $gallery->update($request->all());

        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    // Hapus galeri (soft delete)
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
