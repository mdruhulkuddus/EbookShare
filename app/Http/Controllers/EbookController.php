<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use App\Models\publisher;
use App\Models\author;

use Illuminate\Http\Request;
use DB;


class EbookController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'products' => Product::orderBy(DB::raw('RAND()'))->take(8)->get()->shuffle(),
            'productsTag' => Product::where('tag','Popular')->take(4)->get(),
            'productBestSeller' => Product::where('tag','Best Seller')->take(5)->get(),
            'productsASC' => Product::orderBy('id', 'asc')->take(4)->get()->shuffle(),
            'categories' => category::where('status', 1)->orderBy(DB::raw('RAND()'))->take(7)->get()->shuffle(),
            'authors' => author::where('status', 1)->orderBy(DB::raw('RAND()'))->get()->shuffle(),
        ]);
    }
    public function productDetails($id){
        $product = DB::table('products')
            ->join('authors','products.book_author_id','authors.id')
            ->join('categories','products.book_category_id','categories.id')
            ->join('publishers','products.book_publisher_id','publishers.id')
            ->select('products.*', 'authors.author_name', 'authors.author_image', 'authors.author_biography','categories.category_name', 'publishers.publisher_name')
            ->where('products.id', $id)
            ->first();
//        return $product;
        return view('frontEnd.product.product-details',[
            'productInfo' => $product,
            'thisAuthorBooks' => Product::where([['status', 1], ['book_author_id',$product-> book_author_id]])->take(4)->get()->shuffle(),
            'thisCategoryBooks' => Product::where([['status', 1], ['book_category_id',$product-> book_category_id]])->take(4)->get()->shuffle(),
            'thisPublisherBooks' => Product::where([['status', 1], ['book_publisher_id',$product-> book_publisher_id]])->take(4)->get()->shuffle(),
        ]);
    }
    public function category(){
        return view('frontEnd.category.category',[
            'categories' => category::all(),
        ]);
    }
    public function author(){
        return view('frontEnd.author.author',[
            'authors' => author::where('status', 1)->orderBy('id', 'desc')->get()->shuffle(),
        ]);
    }
    public function publisher(){
        return view('frontEnd.publisher.publisher',[
            'publishers' => publisher::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function authorBooks($id){
        return view('frontEnd.author.author-books',[
            'authorBooks' => Product::where('book_author_id', $id)->where('status', 1)->get(),
            'authorInfo' => author::find($id),
        ]);
    }
    public function categoryBooks($id){
            return view('frontEnd.category.category-books',[
                'categoryBooks' => Product::where('book_category_id', $id)->get(),
                'categoryInfo' => category::find($id),
            ]);
    }
    public function publisherBooks($id){
//        $publisherBooks = Product::where('book_publisher_id', $id)->get();
               return view('frontEnd.publisher.publisher-book',[
                    'publisherBooks' => Product::where('book_publisher_id', $id)->get(),
                    'publisherInfo' => publisher::find($id),
                ]);

    }
    /* all book page */
    public function book(){
        return view('frontEnd.book.all-book',[
//            'categories' => category::where('status', 1)->orderBy(DB::raw('RAND()'))->take(8)->get()->shuffle(),
            'categories' => category::where('status', 1)->orderBy('id', 'desc')->get(),
            'publishers' => publisher::where('status', 1)->orderBy('id', 'desc')->get(),
            'authors' => author::where('status', 1)->orderBy('id', 'desc')->get(),
            'products' => Product::where('status', 1)->orderBy('id', 'desc')->get()->shuffle(),
        ]);
    }
    public function featuresBook($id, $feature){
        if($feature == "category"){
            return view('frontEnd.book.features-books',[
                'categories' => category::where('status', 1)->orderBy('id', 'desc')->get(),
                'categoryBooks' => Product::where('book_category_id', $id)->get(),
                'checkId' => $id,
                'feature' => 'category',
            ]);
        }
        elseif ($feature == "author")
        {
            return view('frontEnd.book.features-books',[
                'authors' => author::where('status', 1)->orderBy('id', 'desc')->get(),
                'authorBooks' => Product::where('book_author_id', $id)->get(),
                'checkId' => $id,
                'feature' => 'author',
            ]);

        }
        else{
            return view('frontEnd.book.features-books',[
                'publishers' => publisher::where('status', 1)->orderBy('id', 'desc')->get(),
                'publisherBooks' => Product::where('book_publisher_id', $id)->get(),
                'checkId' => $id,
                'feature' => 'publisher',
            ]);
        }

    }

}

