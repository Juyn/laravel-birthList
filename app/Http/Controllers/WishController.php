<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Wish;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Exception\InvalidParameterException;

class WishController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = \Auth::user();
        if (!$user instanceof User) {
            $notification = [
                'message' => "Vous devez être connecté pour utiliser cette fonctionnalité !",
                'alert-type' => 'warning',
                'origin' => 'wish.index'
            ];

            return redirect('login')->with($notification);
        }

        $wishes = Wish::all()->where('user_id', '=', $user->id);


        return view('wishes', ['wishes' => $wishes]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws AuthenticationException
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        if (!$user instanceof User) {
            throw new AuthenticationException("You need to be logged in to be authorized to reserved a product");
        }

        $productId =  $request->get('productId');
        if (is_null($productId)) {
            throw new InvalidParameterException("Please provide a valid product id");
        }

        $product = Product::findOrFail($productId);
        $quantity = $request->get('quantity') ?? 1;
        if (is_null($productId) || $quantity === 0) {
            throw new BadRequestHttpException("Please provide a valid form");
        }

        $availableQuantity = $product->quantity - ProductController::getReservedQuantity($productId);

        if ($availableQuantity < 1) {
            throw new BadRequestHttpException(sprintf("Product with ID %d is no longer available", $productId));
        }

        $wish = new Wish();
        $wish->user_id = $user->id;
        $wish->product_id = $product->id;
        $wish->quantity = $quantity;
        $wish->save();

        $notification = [
            'message' => sprintf('L\'article "%s" a bien été réservé. Encore merci ;-)', $product->title),
            'alert-type' => 'success',
        ];

        return redirect(URL::previous())->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {

    }

}
