<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function productCountByCategory($cat_id)
    {
        $productCountById = Product::where('book_category_id', $cat_id)->where('status', 1)->count();
        return $productCountById;
    }
    public static function productCountByAuthor($author_id)
    {
        $productCountByAuthor = Product::where('book_author_id', $author_id)->where('status', 1)->count();
        return $productCountByAuthor;
    }
    public static function productCountByPublisher($pub_id)
    {
        $productCountById = Product::where('book_publisher_id', $pub_id)->where('status', 1)->count();
        return $productCountById;
    }

}
