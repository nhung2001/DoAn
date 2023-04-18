<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use App\Models\Products;

class NewController extends Controller
{
    public function index()
    {
        $news = News::orderby('id', 'ASC')->paginate(5);
        return view('backend.new.index', compact('news'));
    }

    public function create()
    {
        return view('backend.new.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:200|unique:news,name',
                'image' => 'required',
                'description' => 'required|string|max:200',
                'content' => 'required|string',
                'hot' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên tin tức',
                'name.unique' => 'Tên tin tức đã tồn tại',
                'image.required' => 'Vui lòng chọn ảnh cho tin tức',
                'description.required' => 'Vui lòng nhập mô tả tin tức',
                'description.max' => 'Mô tả tin tức nhỏ hơn 200 ký tự',
                'content.required' => 'Vui lòng nhập nội dung tin tức',
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
                while (file_exists("image/new/" . $image)) {
                    $image = Str::random(5) . "_" . $filename;
                }
                $file->move(public_path('image/new'), $image);
            }
        }
        $news = News::create([
            'name' => $request->name,
            'image' => $image,
            'hot' => $hot,
            'description' => $request->description,
            'content' => $request->content,
        ]);
        return redirect()->route('new')->with('success', 'Thêm mới tin tức thành công');
    }

    public function edit($id)
    {
        $new = News::find($id);
        return view('backend.new.edit', compact('new'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:200|unique:news,name',
                'image' => 'required',
                'hot' => 'required',
                'description' => 'required|string|max:200',
                'content' => 'required|string',
            ],
            [
                'name.required' => 'Vui lòng nhập tên tin tức',
                'name.unique' => 'Tên tin tức đã tồn tại',
                'image.required' => 'Vui lòng chọn ảnh cho tin tức',
                'description.required' => 'Vui lòng nhập mô tả tin tức',
                'description.max' => 'Mô tả tin tức nhỏ hơn 200 ký tự',
                'content.required' => 'Vui lòng nhập nội dung tin tức',
            ]
        );
        $image = $request->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (strcasecmp($extension, 'jpg') || strcasecmp($extension, 'png')) {
                $image = Str::random(5) . "_" . $filename;
                while (file_exists("image/new/" . $image)) {
                    $image = Str::random(5) . "_" . $filename;
                }
                $file->move(public_path('image/new'), $image);
            }
        } else {
            $new = News::find($id);
            $image = $new->image;
        }
        $new->update([
            'name' => $request->name,
            'image' => $image,
            'hot' => $request->hot,
            'description' => $request->description,
            'content' => $request->content,
        ]);
        return redirect()->route('new')->with('success', 'Đã cập nhật tin tức');
    }
    public function destroy($id)
    {
        $new = News::find($id);
        // $countPro = Products::with('products')->where('new_id', $new->id)->count();
        // if ($countPro > 0) {
        //     return redirect()->route('new')->with('error', 'Không xóa tin tức này được');
        // } else {
            $new->delete();
            return redirect()->route('new')->with('success', 'Đã xóa tin tức');
        
    }
}
