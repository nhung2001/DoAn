<?php

namespace App\Http\Controllers;

use App\Models\Sub_categories;
use Illuminate\Http\Request;
use App\Models\Categories;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = Sub_categories::orderby('id', 'ASC')->paginate(5);
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
                'name' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
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
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
            ]
        );
        $category = Sub_categories::find($id)->update([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
        ]);
        return redirect()->route('subcategory')->with('success', 'Đã cập nhật thông tin danh mục');
    }
    public function destroy($id)
    {
        $category = Sub_categories::find($id)->delete();
        return redirect()->route('subcategory')->with('success', 'Đã xóa danh mục');
    }
}
