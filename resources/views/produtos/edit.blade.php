@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Editar Produto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Ops aconteceu algum erro!</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('produtos.update', $produtos->id) }}">
            @method('PUT')
            @csrf

            <div class="form-group mb-2">
                <label>Nome do Produto:</label>
                <input name="nome" id="nome" type="text" class="form-control" value="{{ $produtos->nome }}">
            </div>

            <div class="form-group mb-2">
                <label>Valor:</label>
                <input name="valor" id="valor" type="number" class="form-control" min="0" step="0.50" max="500"
                    value="{{ $produtos->valor }}">
            </div>

            <div class="form-group mb-2">
                <label>Código de barras:</label>
                <input name="cod_barras" id="cod_barras" type="text" class="form-control"
                    value="{{ $produtos->cod_barras }}">
            </div>

            <div class="form-group mb-2">
                <label>ICMS:</label>
                <input name="icms" id="icms" type="text" class="form-control" value="{{ $produtos->icms }}">
            </div>

            <div class="form-group mb-2">
                <label>IPI:</label>
                <input name="ipi" id="ipi" type="text" class="form-control" value="{{ $produtos->ipi }}">
            </div>

            <div class="form-group">
                <label>Descrição :
                    <p class="text-muted">Insira uma descrição para o produto (opcional).</p>
                </label>
                <textarea name="descricao" id="descricao" class="form-control"
                    rows="3">{{ $produtos->descricao }}</textarea>
            </div>

            <div class="col-lg-12" style="margin-top: 20px;">
                <a type="button" class="btn btn-danger btn-sm" style="margin-right: 15px"
                    href="{{ route('produtos.index') }}">
                    Cancelar
                </a>
                <button type="submit" class="btn btn-success btn-sm">
                    Salvar
                </button>
            </div>
    </div>
    </form>
    </div>

@endsection
