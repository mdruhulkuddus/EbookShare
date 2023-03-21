<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public $categoryInfo, $category, $message;
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->category_name=$request->category_name;
        if(!empty($request['status'])) {
            $category->status = $request->status;
        }
        if($request->file('category_image')) {
            $category->category_image = $this->saveImage($request);
        }
        $category->save();
        return back()->with('message', 'Category saved successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('category_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/upload/category-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories'=> Category::orderby('id','desc')->get()
        ]);
    }
    public function status($id){
        $this->categoryInfo = Category::find($id);
        if($this->categoryInfo->status)
        {
            $this->categoryInfo->status = 0;
            $this->message = 'Unpublished Successfully';
        }
        else{
            $this->categoryInfo->status = 1;
            $this->message = 'Published Successfully';
        }
        $this->categoryInfo->save();
        return back()->with('message', $this->message) ;
    }
    public function deleteCategory(Request $request){
        $this->categoryInfo = Category::find($request->category_id);
        if(is_file($this->categoryInfo->category_image)){
            unlink($this->categoryInfo->category_image);
        }
        $this->categoryInfo->delete();
        return back()->with('message','Deleted a Category');
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category'=> Category::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        $this->category = Category::find($request->category_id);
        $this->category->category_name = $request->category_name;
        if($request->file('category_image')) {
            if(is_file($this->category->category_image)){unlink($this->category->category_image);}
            $this->category->category_image = $this->saveImage($request);
        }
        $this->category->save();
        return redirect('manage-category')->with('message','Updated successfully');
    }

}
