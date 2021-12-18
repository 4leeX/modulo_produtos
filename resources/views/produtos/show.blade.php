@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h2>Produto: {{ $produtos->nome }}</h2>
            <div class="col-lg-12" style="text-align: left; margin-bottom: 15px">
                <a type="button" class="btn btn-primary btn-sm" href="{{ route('produtos.index') }}">Voltar</a>
            </div>

            <div class="card border-light mb-3" style="max-width: 100%;">
                <div class="card-header">#{{ $produtos->id }}</div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px">
                    <div class="col-lg-12" style="text-align: left; margin-top: 10px; padding-left: 20px">
                        <a type="button" class="btn btn-primary btn-sm"
                            href="{{ route('produtos.edit', $produtos->id) }}">Editar</a>
                    </div>

                    <div style="text-align: right; margin-top: 10px; padding-right: 20px">
                        <form action="{{ route('produtos.destroy', $produtos->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm"
                                onclick="return confirm('Tem certeza que deseja deletar esse produto? ')"
                                style="float: right;">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card-body col-xs-8 col-xs-offset-2">
                    <div class="row">
                        <div class="card-body">
                            <h4><strong class="text-primary">Nome:</strong> {{ $produtos->nome }}</h4>
                            <h4><strong class="text-primary">R$</strong> {{ $produtos->valor }}</h4>
                            <h4><strong class="text-primary">Codigo de barras:</strong> {{ $produtos->cod_barras }}</h4>
                            <h4><strong class="text-primary">ICMS:</strong> {{ $produtos->icms }}</h4>
                            <h4><strong class="text-primary">IPI:</strong> {{ $produtos->ipi }}</h4>
                            <h4><strong class="text-primary">Descrição:</strong> {{ $produtos->descricao }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
