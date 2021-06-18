<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    private $productCategory;

    public function __construct(ProductCategory $productCategory) {
        $this->productCategory = $productCategory;
    }

    public function index()
    {
        return $this->productCategory->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function delete()
    {
        //
    }
}
