<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public $publisher, $publisherInfo, $message;
    public function addPublisher(){
        return view('admin.publisher.add-publisher');
    }
    public function savePublisher(Request $request){
        $this->publisher = new publisher();
        $this->publisher->publisher_name = $request->publisher_name;
        $this->publisher->publisher_biography = $request->publisher_biography;
        if($request->file('publisher_image')) {
            $this->publisher->publisher_image = $this->saveImage($request);
        }
        if(!empty($request['status'])) {
            $this->publisher->status = $request->status;
        }
        $this->publisher->save();
        return back()->with('message','Publisher Info saved Successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('publisher_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/upload/publisher-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function managePublisher(){
        return view('admin.publisher.manage-publisher',[
            'publishers'=> publisher::orderby('id','desc')->get()
        ]);
    }
    public function status($id){
        $this->publisherInfo = publisher::find($id);
        if($this->publisherInfo->status)
        {
            $this->publisherInfo->status = 0;
            $this->message = 'Unpublished Successfully';
        }
        else{
            $this->publisherInfo->status = 1;
            $this->message = 'Published Successfully';
        }
        $this->publisherInfo->save();
        return back()->with('message', $this->message) ;
    }
    public function deletePublisher(Request $request){
        $this->publisherInfo = publisher::find($request -> publisher_id);
        if(is_file($this->publisherInfo->publisher_image)){
            unlink($this->publisherInfo->publisher_image);
        }
        $this->publisherInfo->delete();
        return back()->with('message','Deleted a publisher information');
    }
    public function editPublisher($id){
        return view('admin.publisher.edit-publisher',[
            'publisher'=> publisher::find($id)
        ]);
    }
    public function updatePublisher(Request $request){
//        return $request;
        $this->publisherInfo = publisher::find($request -> publisher_id);
        $this->publisherInfo->publisher_name = $request->publisher_name;
        $this->publisherInfo->publisher_biography = $request->publisher_biography;
        if($request->file('publisher_image')) {
            if(is_file($this->publisherInfo->publisher_image)){unlink($this->publisherInfo->publisher_image);}
            $this->publisherInfo->publisher_image = $this->saveImage($request);
        }
        $this->publisherInfo->save();
        return redirect('manage-publisher')->with('message','Updated successfully');
    }
}
