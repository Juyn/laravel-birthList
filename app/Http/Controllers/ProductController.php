<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Wish;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     * @throws \Throwable
     */
    public function index(Request $request)
    {
        $query = (new Product)->where('quantity', '>', 0)->with(['wishes', 'category']);
        $filters = $request->input('filters');
        $html = "";

        $isFilter = (!empty($filters) && $request->ajax());
        if ($isFilter) {
            $filters = array_filter($filters, 'is_numeric');
            if (!empty($filters)) {
                $query = $query->wherehas('category', function (Builder $query) use ($filters) {
                    $query->whereIn('id', $filters);
                });
            }
        }

        $products =  $query->get();

        /** @var Product $product */
        foreach ($products as $key => $product) {
            $quantity = $product->quantity - $product->wishes()->sum('quantity');
            $product->availableQuantity = ($quantity > 0) ? $quantity : 0 ;

            if (!$request->show_all && $product->availableQuantity < 1) {
                $products->forget($key);
                continue;
            }
            if ($request->ajax()) {
                $html .= view('partials.item', ['product' => $product, 'customText' => \Voyager::setting('site.reservation_custom_text'), 'categories' => 1])->render();
            }
        }

        if ($request->ajax()) {
            return response()->json(compact('html'));
        }

        $categories = Category::all();

        return view('listing', ['products' => $products, 'customText' => \Voyager::setting('site.reservation_custom_text'), 'categories' => $categories]);
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