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
        $path = $request->file('image')->store('uploads/galleries/', 'public');
        $thumbnail = $request->file('thumbnail')->store('uploads/thumbnail/', 'public');

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


    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'title'     => 'nullable|string|max:50',
            'desc'      => 'nullable|string|max:250',
            'creator'   => 'nullable|string|max:50',
            'location'  => 'nullable|string|max:50',
            'category'  => 'nullable|integer',
        ]);

        // Update image if uploaded
        if ($request->hasFile('image')) {
            if ($gallery->path && Storage::disk('public')->exists($gallery->path)) {
                Storage::disk('public')->delete($gallery->path);
            }

            $gallery->path = $request->file('image')->store('uploads/galleries', 'public');
        }

        // Update thumbnail if uploaded
        if ($request->hasFile('thumbnail')) {
            if ($gallery->thumbnail && Storage::disk('public')->exists($gallery->thumbnail)) {
                Storage::disk('public')->delete($gallery->thumbnail);
            }

            $gallery->thumbnail = $request->file('thumbnail')->store('uploads/galleries/thumbnails', 'public');
        }

        // Update other fields
        $gallery->title    = $request->input('title');
        $gallery->desc     = $request->input('desc');
        $gallery->creator  = $request->input('creator');
        $gallery->location = $request->input('location');
        $gallery->category = $request->input('category');

        $gallery->save();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file image & thumb jika ada
        if ($gallery->path && Storage::disk('public')->exists($gallery->path)) {
            Storage::disk('public')->delete($gallery->path);
        }

        if ($gallery->thumbnail && Storage::disk('public')->exists($gallery->thumbnail)) {
            Storage::disk('public')->delete($gallery->thumbnail);
        }

        $gallery->delete(); // Soft delete jika pakai softDeletes

        return response()->json(['success' => true]);
    }

    public function sort(Request $request)
    {
        $category = $request->input('category');
        $galleries = Gallery::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->orderBy('order')->get();

        return view('admin.galleries.sort', compact('galleries', 'category'));
    }

    public function saveSort(Request $request)
    {
        $category = $request->input('category') ?? request()->query('category');

        foreach ($request->order as $item) {
            Gallery::where('id', $item['id'])
                ->where('category', $category)
                ->update(['order' => $item['order']]);
        }

        return response()->json(['status' => 'success']);
    }
}
