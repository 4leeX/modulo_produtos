@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Criar Produto</h1>

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

        <form method="POST" action="{{ route('produtos.store') }}">
            @csrf

            <div class="form-group mb-2">
                <label>Nome do Produto:</label>
                <input name="nome" id="nome" type="text" class="form-control" placeholder="Carro"
                    value="{{ old('nome') }}">
            </div>

            <div class="form-group mb-2">
                <label>Valor:</label>
                <input name="valor" id="valor" type="number" class="form-control" placeholder="51.50" min="0" step="0.50"
                    max="500" value="{{ old('valor') }}">
            </div>

            <div class="form-group mb-2">
                <label>Código de barras:</label>
                <input name="cod_barras" id="cod_barras" type="text" class="form-control" placeholder="ccc-dda-dsa-124"
                    value="{{ old('cod_barras') }}">
            </div>

            <div class="form-group mb-2">
                <label>ICMS:</label>
                <input name="icms" id="icms" type="text" class="form-control" placeholder="ccc-dda-dsa-124"
                    value="{{ old('icms') }}">
            </div>

            <div class="form-group mb-2">
                <label>IPI:</label>
                <input name="ipi" id="ipi" type="text" class="form-control" placeholder="ccc-dda-dsa-124"
                    value="{{ old('ipi') }}">
            </div>

            <div class="form-group">
                <label>Descrição :
                    <p class="text-muted">Insira uma descrição para o produto (opcional).</p>
                </label>
                <textarea name="descricao" id="descricao" class="form-control"
                    rows="3">{{ old('descricao') }}</textarea>
            </div>

            <div class="col-lg-12" style="margin-top: 20px;">
                <a type="button" class="btn btn-danger" style="margin-right: 15px" href="{{ route('produtos.index') }}">
                    Cancelar
                </a>
                <button type="submit" class="btn btn-success">
                    Criar
                </button>
            </div>
    </div>
    </form>
    </div>

@endsection
