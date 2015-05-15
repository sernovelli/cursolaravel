<?php namespace CodeCommerce\Http\Controllers;



use CodeCommerce\Product;

class AdminProductsController extends Controller {

    private $products;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->middleware('guest');
        $this->products = $product;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $products = $this->products->all();
        return view('adminProducts', compact('products'));
	}

}
