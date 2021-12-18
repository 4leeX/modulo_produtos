<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function getProducts()
    {
        $produtos = $this->produto
            ->orderBy('id', 'DESC')->paginate(5);

        return response()->json($produtos);
    }
}
