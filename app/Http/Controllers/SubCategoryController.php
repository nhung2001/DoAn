<?php

namespace App\Http\Controllers;

use App\Models\Sub_categories;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    // public function index()
    // {
    //     $subcategories = Sub_categories::orderby('id', 'ASC')->paginate(5);
    //     return view('backend.sub_category.index', compact('subcategories'));
    // }
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $subcategories = Sub_categories::where('name', 'like', '%' . $keyword . '%')->paginate(5);
        } else {
            //$subcategories = Sub_categories::all();
            $subcategories = Sub_categories::orderby('id', 'ASC')->paginate(5);
        }
        return view('backend.sub_category.index', compact('subcategories'));
    }
    public function create()
    {
        $categories = Categories::get();
        return view('backend.sub_category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:sub_categories,name',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'name.unique' => 'Tên danh mục đã tồn tại',
            ]
        );
        $categories = Sub_categories::create([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
        ]);
        return redirect()->route('subcategory')->with('success', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        $subcategory = Sub_categories::find($id);
        $categories = Categories::get();
        return view('backend.sub_category.edit', compact('subcategory','categories'));
    }
    public function update(Request $request, $id)
    {
        
            $validator = Validator::make($request->all(), [
                'name' => [
                    'required',
                    function ($attribute, $value, $fail) use ($request) {
                        $categoryId = $request->input('categories_id');
        
                        $existingCategory = Sub_categories::where('categories_id', $categoryId)
                            ->where('name', $value)
                            ->first();
        
                        if ($existingCategory) {
                            $fail('Tên danh mục con đã tồn tại cho danh mục cha này.');
                        }
                    },
                ],
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        $subcategory = Sub_categories::find($id)->update([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
        ]);
        return redirect()->route('subcategory')->with('success', 'Đã cập nhật thông tin danh mục');
    }
    public function destroy($id)
    {
        $subcategory = Sub_categories::find($id);
        $countPro =Products::with('products')->where('sub_categories_id',$subcategory->id)->count();
        if($countPro>0){
            return redirect()->route('subcategory')->with('error', 'Không  xóa danh mục này được');
        }
        else{
            $subcategory->delete();
            return redirect()->route('subcategory')->with('success', 'Đã xóa danh mục');
        }
    }
}
