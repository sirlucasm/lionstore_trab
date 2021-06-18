<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private $cart;

    public function __construct(Cart $cart) {
        $this->cart = $cart;
    }

    public function index() {
        $items = $this->cart::where('user_id', Auth::id())->get();
        $total = 0;
        foreach ($items as $item) {
            if ($item->product->new_price)
                $total += ($item->product->new_price * $item->quantity);
            else $total += ($item->product->price * $item->quantity);
        }
        return view('site.carrinho.index', [
            'items' => $items,
            'totalPrice' => number_format($total, 2)
        ]);
    }

    public function create(Request $params) {
        $productId = $params->query('productId');
        $items = [
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'quantity' => 1
        ];

        if($this->cart->create($items)) {
            return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho');
        } else {
            return redirect()->route('produtos.index')->with('error', 'Erro ao adicionar produto ao carrinho');
        }
    }

    public function delete(Request $params) {
        $id = $params->query('cart');

        if($this->cart::where('id', $id)->delete()) {
            return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho');
        } else {
            return redirect()->route('produtos.index')->with('error', 'Erro ao remover produto do carrinho');
        }
    }

    public function updateQuantity(Request $params) {
        $id = $params->query('cart');
        $newQuantity = $params->only('quantity');

        if($this->cart::where('id', $id)->update($newQuantity)) {
            return redirect()->route('carrinho.index');
        } else {
            return redirect()->route('produtos.index')->with('error', 'Erro ao atualizar quantidade.');
        }
    }
}
