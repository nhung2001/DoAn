<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Sub_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::orderby('id', 'ASC')->paginate(15);
        return view('backend.product.index', compact('products'));
    }

    public function create()
    {
        $subcategories = Sub_categories::get();
        return view('backend.product.create', compact('subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:200|unique:products,name',
                'image' => 'required',
                'price' => 'required|numeric|min:0',
                'discount' => 'required|numeric|min:0|max:100',
                'hot' => 'required',
                'quantity' => 'required|integer',
                'author' => 'required',
                'description' => 'required|string|max:1000',
            ],
            [
                'name.required' => 'Vui lòng nhập tên sản phẩm',
                'name.unique' => 'Tên sản phẩm đã tồn tại',
                'image.required' => 'Vui lòng chọn ảnh cho sản phẩm',
                'price.required' => 'Vui lòng nhập giá sản phẩm',
                'price.numeric' => 'Giá sản phẩm là số dương',
                'price.min' => 'Giá không được âm',
                'discount.required' => 'Vui lòng nhập phần trăm giảm giá',
                'discount.numeric' => 'Phần trăm giảm giá là số dương',
                'discount.min' => 'Phần trăm giảm giá lớn hơn 0',
                'discount.max' => 'Phần trăm giảm giá nhỏ hơn 100',
                'quantity.required' => 'Vui lòng nhập số lượng sản phẩm',
                'integer' => 'Số lượng sản phẩm là số nguyên',
                'author.required' => 'Vui lòng nhập tên tác giả',
                'description.required' => 'Vui lòng nhập mô tả sản phẩm',
            ]
        );
        if ($request->hot == 'Có') {
            $hot = 1;
        } else {
            $hot = 0;
        }

        $image = $request->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (strcasecmp($extension, 'jpg') || strcasecmp($extension, 'png')) {
                $image = Str::random(5) . "_" . $filename;
                while (file_exists("image/product/" . $image)) {
                    $image = Str::random(5) . "_" . $filename;
                }
                $file->move(public_path('image/product'), $image);
        }
    }
        $products = Products::create([
            'name' => $request->name,
            'image' => $image,
            'price' => $request->price,
            'hot' => $hot,
            'discount' => $request->discount,
            'quantity' => $request->quantity,
            'author' => $request->author,
            'description' => $request->description,
            'sub_categories_id' => $request->sub_categories_id,
        ]);
        return redirect()->route('product')->with('success', 'Thêm mới sản phẩm thành công');
    }

    public function edit($id)
    {
        $product = Products::find($id);
        $subcategories = Sub_categories::get();
        return view('backend.product.edit', compact('product', 'subcategories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:200|unique:products,name',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|integer',
                'discount' => 'required|numeric|min:0|max:100',
                'hot' => 'required',
                'author' => 'required',
                'description' => 'required|string|max:1000',
            ],
            [
                'name.required' => 'Vui lòng nhập tên sản phẩm',
                'name.unique' => 'Tên sản phẩm đã tồn tại',
                'price.required' => 'Vui lòng nhập giá sản phẩm',
                'price.numeric' => 'Giá sản phẩm là số dương',
                'price.min' => 'Giá không được âm',
                'discount.required' => 'Vui lòng nhập phần trăm giảm giá',
                'discount.numeric' => 'Phần trăm giảm giá là số dương',
                'discount.min' => 'Phần trăm giảm giá lớn hơn 0',
                'discount.max' => 'Phần trăm giảm giá nhỏ hơn 100',
                'quantity.required' => 'Vui lòng nhập số lượng sản phẩm',
                'integer' => 'Số lượng sản phẩm là số nguyên',
                'author.required' => 'Vui lòng nhập tên tác giả',
                'description.required' => 'Vui lòng nhập mô tả sản phẩm',
            ]
        );
        $image = $request->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (strcasecmp($extension, 'jpg') || strcasecmp($extension, 'png')) {
                $image = Str::random(5) . "_" . $filename;
                while (file_exists("image/product/" . $image)) {
                    $image = Str::random(5) . "_" . $filename;
                }
                $file->move(public_path('image/product'), $image);
            }
        }else{
            $product = Products::find($id);
            $image = $product->image;
        }
        $product->update([
            'name' => $request->name,
            'image' => $image,
            'price' => $request->price,
            'hot' => $request->hot,
            'discount' => $request->discount,
            'quantity' => $request->quantity,
            'author' => $request->author,
            'description' => $request->description,
            'sub_categories_id' => $request->sub_categories_id,
        ]);
        return redirect()->route('product')->with('success', 'Đã cập nhật thông tin sản phẩm');
    }
    public function destroy($id)
    {
        $product = Products::find($id)->delete();
        return redirect()->route('product')->with('success', 'Đã xóa sản phẩm');
    }


    
}
