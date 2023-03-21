<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public $author, $authorInfo, $message;
    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function saveAuthor(Request $request){
        $this->author = new Author();
        $this->author->author_name = $request->author_name;
        $this->author->author_biography = $request->author_biography;
        if($request->file('author_image')) {
            $this->author->author_image = $this->saveImage($request);
        }
        if(!empty($request['status'])) {
            $this->author->status = $request->status;
        }
        $this->author->save();
        return back()->with('message','Author Info saved Successfully');
//        return $request;
    }
    private function saveImage($request){
        $this->image = $request->file('author_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/upload/author-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function manageAuthor(){
        return view('admin.author.manage-author',[
//            'authors'=> Author::all()
            'authors'=> Author::orderby('id','desc')->get()
        ]);
    }
    public function status($id){
        $this->authorInfo = Author::find($id);
        if($this->authorInfo->status)
        {
            $this->authorInfo->status = 0;
            $this->message = 'Unpublished Successfully';
        }
        else{
            $this->authorInfo->status = 1;
            $this->message = 'Published Successfully';
        }
        $this->authorInfo->save();
        return back()->with('message', $this->message) ;
    }
    public function deleteAuthor(Request $request){
        $this->authorInfo = Author::find($request -> author_id);
        if(is_file($this->authorInfo->author_image)){
            unlink($this->authorInfo->author_image);
        }
        $this->authorInfo->delete();
        return back()->with('message','Deleted a author information');
    }
    public function editAuthor($id){
        return view('admin.author.edit-author',[
            'author'=> Author::find($id)
        ]);
    }
    public function updateAuthor(Request $request){
//        return $request;
        $this->authorInfo = Author::find($request -> author_id);
        $this->authorInfo->author_name = $request->author_name;
        $this->authorInfo->author_biography = $request->author_biography;
        if($request->file('author_image')) {
            if(is_file($this->authorInfo->author_image)){unlink($this->authorInfo->author_image);}
            $this->authorInfo->author_image = $this->saveImage($request);
        }
        $this->authorInfo->save();
        return redirect('manage-author')->with('message','Updated successfully');

    }
}
