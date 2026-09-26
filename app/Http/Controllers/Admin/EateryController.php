<?php

namespace App\Http\Controllers\Admin;

use App\Models\Eatery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EateryCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cache;

// use App\Http\Controllers\Admin\Eatery;

class EateryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eateryss = Eatery::latest()->paginate(8);
        $eaterys = Eatery::with('category')->paginate(8)->groupBy('category_id');
        $categories = EateryCategory::all();

        // $eateryss = Cache::remember('eatery.latest', now()->addHours(24), function () {
        //     return Eatery::latest()->get();
        // });

        // $eaterys = Cache::remember('eatery.grouped', now()->addHours(24), function () {
        //     return Eatery::with('category')
        //         ->paginate(8)
        //         ->groupBy('category_id');
        // });

        // $categories = Cache::remember('eatery.categories', now()->addHours(24), function () {
        //     return EateryCategory::orderBy('name')->get();
        // });

        return view('eatery.index', compact('eaterys', 'categories', 'eateryss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = EateryCategory::all()->sortBy('name');
        return view('eatery.create', compact('categories'));
    }

    private function clearEateryCache()
    {
        Cache::forget('eatery.latest');
        Cache::forget('eatery.grouped');
        Cache::forget('eatery.categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'category' => "required|exists:eatery_categories,id",
            'image' => "required|image|mimes:jpeg,png,jpg,webp|max:1024",
            'description' => "required|string",
        ]);

        $sku = Str::random(16);

        $file = $request->file('image');
        $ext = $file->extension();
        $fileName = Str::random(36) . "." . $ext;
        $file->move(public_path('uploads/eatery'), $fileName);

        Eatery::create([
            'category_id' => $data['category'],
            'sku' => $sku,
            'name' => $data['name'],
            'price' => $data['price'],
            'image' => $fileName,
            'description' => $data['description']
        ]);

        $this->clearEateryCache();

        Alert::success('Created Successfully');

        return back()->with('success', 'saved successfully');
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
        // $categories = EateryCategory::all()->sortBy('name');
        $categories = Cache::remember('eatery.categories', now()->addHours(24), function () {
            return EateryCategory::all()->sortBy('name');
        });
        return view('eatery.edit', compact('eatery', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $sku)
    {
        $eatery = Eatery::where('sku',  $sku)->firstOrFail();

        $data = $request->validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'image' => "nullable|image|mimes:jpeg,png,jpg,webp|max:1024",
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

        $this->clearEateryCache();

        Alert::success('Updated Successfully');

        return back()->with('success', 'Updated successfully');
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

            $this->clearEateryCache();

            Alert::success("Eatery Deleted");
        } else {
            Alert::error("Failed to delete Eatery");
        }
        return back()->with('success', 'Eatery deleted successfully!');
    }
}
