<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\publisher;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public $product, $productInfo;
    public function addProduct(){
        return view('admin.product.add-product',[
            'categories'=>Category::where('status',1)->orderby('id','desc')->get(),
            'authors'=>Author::where('status',1)->orderby('id','desc')->get(),
            'publishers'=>publisher::where('status',1)->orderby('id','desc')->get(),
        ]);
    }
    public function saveProduct(Request $request){
        $this->product = new Product();
        $this->product->book_title = $request->book_title;
        $this->product->book_author_id = $request->book_author_id;
        $this->product->book_category_id = $request->book_category_id;
        $this->product->book_publisher_id = $request->book_publisher_id;
        $this->product->edition = $request->edition;
        $this->product->language = $request->language;
        $this->product->book_price = $request->book_price;
        $this->product->pages = $request->pages;
        $this->product->book_summary = $request->book_summary;
        if(!empty($request['tag'])) {
        $this->product->tag = implode(",", $request->tag);}

        if($request->file('book_image')) {
            $this->product->book_image = $this->saveImage($request);
        }
        if(!empty($request['status'])) {
            $this->product->status = $request->status;
        }
        $this->product->save();
        return back()->with('message','Product Info saved Successfully');
//        return $request;
    }
    private function saveImage($request){
        $this->image = $request->file('book_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/upload/book-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function manageProduct(){
        $products = DB::table('products')
            ->join('authors','products.book_author_id','authors.id')
            ->join('categories','products.book_category_id','categories.id')
            ->join('publishers','products.book_publisher_id','publishers.id')
            ->select('products.*', 'authors.author_name', 'categories.category_name', 'publishers.publisher_name')
            ->orderby('products.id','desc')
            ->get();

        return view('admin.product.manage-product',[
            'products'=> $products
        ]);
    }
    public function status($id){
        $this->productInfo = Product::find($id);
        if($this->productInfo->status)
        {
            $this->productInfo->status = 0;
            $this->message = 'Unpublished Successfully';
        }
        else{
            $this->productInfo->status = 1;
            $this->message = 'Published Successfully';
        }
        $this->productInfo->save();
        return back()->with('message', $this->message) ;
    }
    public function deleteProduct(Request $request){
//                return $request;
        $this->productInfo = Product::find($request -> product_id);
        if(is_file($this->productInfo->book_image)){
            unlink($this->productInfo->book_image);
        }
        $this->productInfo->delete();
        return back()->with('message','Deleted a book information');
    }
    public function editProduct($id){
        $this->productInfo = Product::find($id);
//        return $this->productInfo;
        return view('admin.product.edit-product',[
            'product'=> $this->productInfo,
            'product_author' => DB::table('authors')->where('id',  $this->productInfo->book_author_id)->first(),
            'product_category' => DB::table('categories')->where('id',  $this->productInfo->book_category_id)->first(),
            'product_publisher' => DB::table('publishers')->where('id',  $this->productInfo->book_publisher_id)->first(),
            'categories'=>Category::where('status',1)->orderby('id','desc')->get(),
            'authors'=>Author::where('status',1)->orderby('id','desc')->get(),
            'publishers'=>publisher::where('status',1)->orderby('id','desc')->get(),
        ]);

    }
    public function updateProduct(Request $request)
    {
//        return $request;
        $this->product = Product::find($request -> product_id);
        $this->product->book_title = $request->book_title;
        $this->product->book_author_id = $request->book_author_id;
        $this->product->book_category_id = $request->book_category_id;
        $this->product->book_publisher_id = $request->book_publisher_id;
        $this->product->edition = $request->edition;
        $this->product->language = $request->language;
        $this->product->book_price = $request->book_price;
        $this->product->pages = $request->pages;
        $this->product->book_summary = $request->book_summary;
        if(!empty($request['tag'])) {
            $this->product->tag = implode(",", $request->tag);
        }
        else{
            $this->product->tag = null;
        }
        if($request->file('book_image')) {
            if(is_file($this->product->book_image)){unlink($this->product->book_image);}
            $this->product->book_image = $this->saveImage($request);
        }
        $this->product->save();
        return redirect('manage-product')->with('message','Updated successfully');
//        return $request;
    }
}
