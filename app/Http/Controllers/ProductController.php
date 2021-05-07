<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function index() {
        $products = $this->product->all();
        return view('site.produtos.index', ['products' => $products]);
    }

    public function create(Request $params) {
        $data = $params->only(
            'name',
            'description',
            'price',
            'marca',
            'modelo',
            'url_image',
            'tag',
            'new_price'
        );
        $save = $this->product->create($data);
        if ($save) {
            return redirect()->route('produtos.index');
        } else {
            return redirect()->route('produtos.anunciar')->with('error', 'Erro ao anunciar seu produto.');
        }
    }

    public function find(Request $params) {
        $query = $params->only('search');
        $data = $this->product::query()->where('name', 'LIKE', "%{$query['search']}%")->get();
        return view('site.produtos.index', ['products' => $data, 'query' => $query['search']]);
    }
}
