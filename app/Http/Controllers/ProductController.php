<?php 

namespace App\Http\Controllers;

use App\Product;
use App\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     */
  public function index(Request $request)
  {
      $products =  (new Product)->where('quantity', '>', 0)->with(['wishes', 'category'])->get();

      /** @var Product $product */
      foreach ($products as $product) {
          $quantity = $product->quantity - $product->wishes()->sum('quantity');
          $product->availableQuantity = ($quantity > 0) ? $quantity : 0 ;
      }
      return view('listing', ['products' => $products]);
  }

    /**
     * Get the quantity of article reserved for its ID
     *
     * @param int $productId
     *
     * @return int
     */
  public static function getReservedQuantity(int $productId): int
  {
      return (new Wish)->where('product_id', '=', $productId)->get()->sum(function ($wish) { return $wish->quantity;});
  }
}