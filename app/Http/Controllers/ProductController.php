<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = $this->produto->all();

        return view('produtos.index', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        if (!$produtos = $this->produto->create($request->all()))
            return redirect()->route('produtos.index')
                ->withErrors('Erro ao criar o produto');

        return redirect()->route('produtos.index')
            ->withSuccess('Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = $this->produto->findOrFail($id);

        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = $this->produto->all();

        return view('produtos.show', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProductRequest $request, $id)
    {
        if (!$produtos = $this->produto->update($request->all($id)))
            return redirect()->route('produtos.edit')
                ->withErrors('Erro ao editar o produto');

        return redirect()->route('produtos.index')
            ->withSuccess('Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produtos = $this->produto->findById($id);

        $produtos->delete();

        return redirect()->route('produtos.index')
            ->withSuccess("Produto {$produtos->nome} deletado com sucesso!");
    }
}
