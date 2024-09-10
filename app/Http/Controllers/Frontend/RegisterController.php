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

        try {

            $validatedData = $request->validate([
                'fullname' => ['required'],
                'email'    => ['required', 'email'],
                'phone'    => ['required'],
                'file'     => ['required'],
                'category'     => ['required'],
                'device'     => ['required'],
                'desc'       => ['required'],
            ]);

            $email_exist = Creator::where('email', $request->email)->where('category', $request->category)->get();
            $count_email_exist = $email_exist->count();

            if($count_email_exist > 0) {
                return response()->json(['error' => true, 'message' =>'Akun anda telah terdaftar untuk kategory ini, silahkan menggunakan akun lainnya.'], 404); 
            }


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

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Reservation created successfully', 'with_toastr' => false]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['error' => true, 'message' => $th->getMessage()], 404); 
        }     

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
