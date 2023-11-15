<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function category_list(Request $request){

        $data['getRecord'] = CategoryModel::getRecord();

        $data['header_title'] ="Category List";
        return view('admin.category.list', $data);


    }
    public function category_add(Request $request){

        $data['header_title'] ="Add New Category";
        return view('admin.category.add', $data);
    }
    public function category_insert(Request $request){
        {
            // dd($request->all());

            request()->validate(['slug'=>'required|unique:category']);
            $category = new CategoryModel;
            $category ->name=trim($request->name);
            $category ->slug=trim($request->slug);
            $category ->status=trim($request->status);
            $category ->meta_title=trim($request->meta_title);
            $category ->meta_description=trim($request->meta_description);
            $category ->meta_keywords=trim($request->meta_keywords);
            $category ->created_by=Auth::user()->id;
            $category->save();
            return redirect('admin/category/list')->with('success','');
        }

    }
    public function  category_edit($id, Request $request){
        $data['getRecord'] = CategoryModel::getSingle($id);

        $data['header_title'] ="Edit Category";
        return view('admin.category.edit', $data);

    }
    public function category_update($id, Request $request){
        request()->validate(['slug'=>'required|unique:category,slug,'.$id]);

        $category = CategoryModel::getSingle($id);
        $category ->name=trim($request->name);
        $category ->slug=trim($request->slug);
        $category ->status=trim($request->status);
        $category ->meta_title=trim($request->meta_title);
        $category ->meta_description=trim($request->meta_description);
        $category ->meta_keywords=trim($request->meta_keywords);

        $category->save();
        return redirect('admin/category/list')->with('success','Category Updated successfully');
    }
    public function category_delete($id, Request $request){


        $category = CategoryModel::getSingle($id);

        $category->is_delete=1;
        $category->save();
        return redirect()->back()->with('success','Category Successfully Deleted');
    }




}
