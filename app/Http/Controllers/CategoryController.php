<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Sub_categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::orderby('id', 'ASC')->paginate(5);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:categories,name',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'name.unique' => 'Tên danh mục đã tồn tại',
            ]
        );
        $categories = Categories::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category')->with('success', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('backend.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|unique:categories,name',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'name.unique' => 'Tên danh mục đã tồn tại',
            ]
        );
        $category = Categories::find($id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category')->with('success', 'Đã cập nhật thông tin danh mục');
    }
    public function destroy($id)
    {
        $category = Categories::find($id);
        $countSub =Sub_categories::with('subCategories')->where('categories_id',$category->id)->count();
        if($countSub>0){
            return redirect()->route('category')->with('error', 'Không  xóa danh mục này được');
        }
        else{
            $category->delete();
            return redirect()->route('category')->with('success', 'Đã xóa danh mục');
        }
    }
}
