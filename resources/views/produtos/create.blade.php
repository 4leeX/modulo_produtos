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
                <label>* Nome do Produto:</label>
                <input name="nome" id="nome" type="text" class="form-control" placeholder="Caderno"
                    value="{{ old('nome') }}">
            </div>

            <div class="form-group mb-2">
                <label>* Valor:</label>
                <input name="valor" id="valor" type="number" class="form-control" placeholder="R$ 10" min="0" step="0.50"
                    max="800" value="{{ old('valor') }}">
            </div>

            <div class="form-group mb-2">
                <label>* Código de barras:</label>
                <input name="cod_barras" id="cod_barras" type="number" class="form-control" placeholder="1 000210 10200"
                    value="{{ old('cod_barras') }}">
            </div>

            <div class="form-group mb-2">
                <label>* ICMS
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Imposto sobre Circulação de Mercadorias e Serviços">?
                    </button>
                    :</label>
                <input name="icms" id="icms" type="text" class="form-control" placeholder="09201929A0012"
                    value="{{ old('icms') }}">
            </div>

            <div class="form-group mb-2">
                <label>* IPI
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="right" title="Imposto sobre Produtos Industrializados">?
                    </button>
                    :</label>
                <input name="ipi" id="ipi" type="text" class="form-control" placeholder="AAA000BBB111"
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
                <a type="button" class="btn btn-danger btn-sm" style="margin-right: 15px"
                    href="{{ route('produtos.index') }}">
                    Cancelar
                </a>
                <button type="submit" class="btn btn-success btn-sm">
                    Criar
                </button>
            </div>
    </div>
    </form>
    </div>

@endsection
