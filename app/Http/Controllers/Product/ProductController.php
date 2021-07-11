<?php
declare(strict_types=1);

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Product\ProductService;
use App\Models\Entity\Product\Product;
use App\Http\Requests\Product\ValidatorProduct;
use SebastianBergmann\CodeCoverage\Driver\Xdebug2Driver;

/**
 * Summary of ProductController
 *  author Bogusław Trojański
 */
class ProductController extends Controller
{
    private $productService;

    /**
     *  constructor.
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    ///**
    // * Display a listing of the product.
    // */
    //public function index()
    //{
    //    $maxSizePage = 20;
    //    $products =  $this->productService->getPage($maxSizePage)->items();

    //    return view('list', compact('products'));
    //}

    /**
     * Show the form for creating a new resource.
     *
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        $availabilities = Product::getAvailabilityDescription();
        return view('product.create', compact('availabilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidatorProduct $request)
    {
        $validated = $request->validated();

        if (!$validated) {
           return back()
                       ->withErrors($validated)
                        ->withInput();
        }


        $this->productService->saveProduct(
            $validated['name'],
            (int)$validated['price'],
            $validated['availability']
        );


        return back()->with('success', 'Dodano product') ;
    }


    ///**
    // * Show the form for editing the specified product.
    // */
    //public function edit($id)
    //{
    //    $productDao = $this->productService->getOneProduct($id);
    //    $products = [];
    //    array_push($products, $productDao);
    //    return view('edit', compact('products','id'));
    //}

    ///**
    // * Update the specified resource in storage.
    // */
    //public function update(Request $request, $id)
    //{
    //    $this->productService->updateProduct(
    //        $id,
    //        $request->get('name'),
    //        $request->get('price'),
    //        $request->get('availability')
    //    );

    //    return redirect('/list');
    //}

    ///**
    // * Remove the specified resource from storage.
    // * @param  int  $id
    // */
    //public function destroy($id)
    //{
    //    $this->productService->removeProduct($id);

    //    return redirect('/list');
    //}
}
