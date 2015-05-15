<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller {


    private $categories;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = $this->categories->all();
        return view('adminCategories', compact('categories'));
	}



}
