<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
//    public static function cartProductCountByUser($user_id)
//    {
//        $productCountById = Cart::where('user_id', $user_id)->count();
//        return $productCountById;
//    }
}
