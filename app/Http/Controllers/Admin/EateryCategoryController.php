<?php

namespace App\Http\Controllers\Admin;

use App\Models\EateryCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class EateryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = EateryCategory::all();
        return view('eaterycategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('eaterycategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:eatery_categories,name'
        ]);

        $slug = Str::slug($data['name']);

        EateryCategory::create([
            'name' => $data['name'],
            'slug' => $slug
        ]);

        Alert::success('Created Successfully');

        return back()->with('success','saved successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(EateryCategory $eateryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = EateryCategory::where('id', $id)->firstOrFail();
        // $category = EateryCategory::where($id)->firstOrFail();
        return view('eaterycategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = EateryCategory::findOrFail($id);
        $data = $request->validate([
            'name' => "required|string|unique:eatery_categories,name,' . $id",
        ]);

        $slug = Str::slug($data['name']);
       
        $category->update([
            'name' => $data['name'],
            'slug' => $slug
        ]);

        Alert::success('Updated Successfully');

        return back()->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = EateryCategory::findOrFail($id);
        $category->delete();

        Alert::success("Eatery Catergory Deleted");
        return back()->with('success', 'Eatery Catergory deleted successfully!');
    }
}
