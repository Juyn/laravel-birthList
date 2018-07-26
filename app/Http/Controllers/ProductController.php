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
      $products =  (new Product)->where('quantity', '>', 0)->get();
      if (!empty($request->get('category'))) {
          //todo create a foreign key for category (oh, and create category)
          $products = $products->where('brandFree', '=', '0');
      }
      $wishes = (new Wish)->whereIn('product_id',  $products->pluck('id'))->get();

      foreach ($products as $product) {
          $w = $wishes->whereIn('product_id', $product->id)->sum(function ($wish) { return $wish->quantity;});
          $quantity = $w - $product->quantity;
          $product->availableQuantity = ($quantity > 0) ? $quantity : 0 ;
      }

      return view('listing', ['products' => $products]);
  }

  /**
   *
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
}