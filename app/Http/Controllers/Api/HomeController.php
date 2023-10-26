<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubCategorie;
use App\Services\GlobalServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $Services;

    public function __construct(GlobalServices $Services)
    {
        $this->Services = $Services;
    }
    function GetSubCategories($id)
    {
        $subcategories = SubCategorie::where('categorie_id', $id)->get();
        return response()->json($subcategories);
    }
    function GetProduct(Request $request)
    {
        $product = Product::with(['Reviews', 'SubCategorie', 'SubCategorie.categorie', 'Images'])->findOrFail($request->id);
        return response()->json($product);
    }
    function AddToFavorite(Request $request)
    {
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $favorite = DB::table('user_product_favorits')->where('user_id', $user_id)->where('product_id', $product_id)->first();
        if ($favorite) {
            return response()->json([
                "success" => "product added to wishlist with success"
            ]);
        } else {
            DB::table('user_product_favorits')->insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);
            return response()->json([
                "success" => "product added to wishlist with success"
            ]);
        }
    }
    function DeleteFromWishList(Request $request)
    {
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $favorite = DB::table('user_product_favorits')->where('user_id', $user_id)->where('product_id', $product_id)->first();
        if ($favorite) {
            DB::table('user_product_favorits')->where('user_id', $user_id)->where('product_id', $product_id)->delete();
            return response()->json([
                "success" => "product deleted from wishlist with success"
            ]);
        } else {
            return response()->json([
                "success" => "product deleted from wishlist with success"
            ]);
        }
    }
    public function CheckCouponCode(Request $request)
    {
        $this->validate($request, [
            "code" => "required|exists:coupons,code"
        ]);
        $code = $request->code;
        return response()->json($this->Services->CheckCoupon($code));
    }
}
