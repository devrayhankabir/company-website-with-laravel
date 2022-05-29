<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function AllCategory(){

        $category_data = Category::latest()->paginate(5);


        $trush_category = Category::onlyTrashed()->latest()->paginate(3);


        return view('admin.category.index', ['category_data' => $category_data, 'trashed_category' => $trush_category]);
    }

    public function AddCategory(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],
        [
            'category_name.required' => 'Please Input Category Name',
        ]
    );

    $category_name = $request->category_name;
    $user_id = Auth::user()->id;

    Category::insert([

        'category_name' => $category_name,
        'user_id'       => $user_id,
        'created_at'    => Carbon::now()
    ]);

    return redirect()->back()->with('success', 'Category Inserted Successfully');
    
        
    }

    public function EditCategory($id){

        $cat_data = Category::find($id);

        return view('admin.category.edit', compact('cat_data'));
    }


    public function UpdateCategory(Request $request, $id){

        $category_name = $request->category_name;
        $update = Category::find($id)->update([
            
            'category_name' => $category_name,
            'user_id'       => Auth::user()->id,
        ]);

        return redirect()->route('all.category')->with('success', 'Category Updated Successfully');
    }


    public function softDelete($id){

        $delete = Category::find($id)->delete();

        return redirect()->back()->with('success', 'Category Trashed Successfully');
    }


    public function restoreCategory($id){

        $restore = Category::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Category Restored Successfully');
    }


    public function permanentDelete($id){

        $permanentDelete = Category::onlyTrashed()->find($id)->forceDelete();

        return redirect()->back()->with('success', 'Category Permanently Deleted');
    }




}
