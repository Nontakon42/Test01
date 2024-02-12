<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class Categorycontroller extends Controller
{
    public function index(){
        $c = Category::all();
        return view('backend.category.index', compact('c'));
    }

    public function createform(){
        return view('backend.category.createform');
    }
    
    public function edit($category_id){
        $cat = Category::find($category_id);
        return view('backend.category.edit', compact('cat'));
    }
    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
        ]);

        //การบันทึกข้อมูล
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกแล้ว');
        return redirect()->route('c.index');
    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->editname;
        $category->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกแล้ว');
        return redirect()->route('c.index');
        
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ลบข้อมูลสำเร็จ', 'ข้อมูลนี้ถูกลบแล้ว');
        return redirect()->route('c.index');
    }
}
