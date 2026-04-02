<?php

namespace App\Http\Controllers\Admin;

use App\Models\Eatery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Pest\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

// use App\Http\Controllers\Admin\Eatery;

class EateryController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eaterys = Eatery::latest()->get();
        return view('eatery.index', compact('eaterys'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eatery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request-> validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'image' => "required|image|mimes:png,jpg,jpeg,gif|max:2048",
            'description' => "required|string",
        ]);

        $sku = Str::random(16);

        $file = $request->file('image');
        $ext = $file->extension();
        $fileName = Str::random(36) . "." . $ext;
        $file->move(public_path('uploads/eatery'), $fileName);

        Eatery::create([
            'sku' => $sku,
            'name' => $data['name'],
            'price' => $data['price'],
            'image' => $fileName,
            'description' => $data['description']
        ]);

        Alert::success('Created Successfully');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Eatery $eatery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $sku)
    {
        $eatery = Eatery::where('sku',  $sku)->firstOrFail();
        return view('eatery.edit', compact('eatery'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $sku)
    {
        $eatery = Eatery::where('sku',  $sku)->firstOrFail();

        $data = $request-> validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'image' => "nullable|image|mimes:png,jpg,jpeg,gif|max:2048",
            'description' => "required|string",
        ]);

        if ($request->hasFile('image')) {
            $oldFile = $eatery->image;

            $file = $request->file('image');
            $ext = $file->extension();
            $fileName = Str::random(36) . "." . $ext;
            $file->move('uploads/eatery/', $fileName);

            Eatery::where('sku', $sku)->update([
                'name' => $data['name'],
                'price' => $data['price'],
                'image' => $fileName,
                'description' => $data['description']
            ]);

            if (File::exists(public_path('uploads/eatery/' . $oldFile))) {
                File::delete(public_path('uploads/eatery/' . $oldFile));
            }
        } else {
            Eatery::where('sku', $sku)->update([
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description']
            ]);
        }

        Alert::success('Update Successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $sku)
    {
        $eatery = Eatery::where('sku',  $sku)->firstOrFail();

        $oldFile = $eatery->image;

        if ($eatery->delete()) {

            if (File::exists(public_path('uploads/eatery/' . $oldFile))) {
                File::delete(public_path('uploads/eatery/' . $oldFile));
            }

            Alert::success("Eatery Deleted");
        } else {
            Alert::error("Failed to delete Eatery");
        }
        return back();
    }
}
