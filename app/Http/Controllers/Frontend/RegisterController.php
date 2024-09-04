<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Creator;
use App\Models\Images;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.register');
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


    /**
     * Upload images (with Dropzone)
     */
    public function upload(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                "fullname"              => 'required',
                "email"                 => 'required',
            ],
            [
                'email.required' => 'Enter Email',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return \DB::transaction(function () use ($request) {
            DB::beginTransaction();
            $code = Uuid::uuid4()->toString();

            $register = Creator::create([
                'code' => $code,
                'fullname' => $request->fullname,
                'phone' => $request->phone,
                'address' => $request->address,
                'device' => $request->device,
                'age' => $request->age,
                'desc' => $request->desc,
                'email' => strtolower($request->email),
                'category' => $request->category,
                'referral_code' => $request->referral_code,
                'vivo_id' => $request->vivo_id,
            ]);

            DB::commit();

            $name = preg_replace('/\s+/', '_', $request->fullname);
            $images = $request->file('file');
            $category = Images::TYPE[$request->category];

            foreach ($images as $index => $image) { 
                // $path = $image->store('images/'.$category.'/'.$name.'-'.$code.'/', 'public');
                $getFileExt   = $image->getClientOriginalExtension();
                $file_name = $category.'-'.$name.'-'.$code.'-'.$index.'.'.$getFileExt;
                $path = $image->storeAs('images/'.$category.'/'.$name.'-'.$code.'/', $file_name, 'public');
                Images::create([
                    'path' => $path,
                    'creator_id' => $register->id,
                    'category' => $request->category,
                ]);
            }

            return response()->json(['success' => true, 'message' => 'Reservation created successfully', 'with_toastr' => false]);
        });        

    }

    /**
     * Display uploaded images
     */
    public function preview()
    {
        $images = Image::all();

        return response()->json($images); 
    }
}
