@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h2>Lorem ipsum dolor sit amet</h2>
            <hr>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <p>The following is <strong>Sed nisi arcu, tempor nec mauris in, tempus porta risus. Praesent nec erat luctus,
                    faucibus ligula eget, molestie dui. Sed tempus bibendum quam. Maecenas at sapien ac tortor venenatis
                    commodo. Quisque grida massa eu ex porttitor maximus. Nunc nisl mi, venenatis sit amet lorem in,
                    consequat pellentesque dolor.</strong>.</p>
            <p>The following is <em>rendered as italicized text</em>.</p>

            <a type="button" class="btn btn-primary float-right" style="margin-top: 20px"
                href="{{ route('produtos.create') }}">
                Novo Produto
                <i class="fas fa-plus-circle"></i>
            </a>
            <hr>
        </div>

        <h1>Lista de Produtos</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">ICMS</th>
                    <th scope="col">IPI</th>
                    <th scope="col">Mais</th>
                </tr>
            </thead>
            @forelse ($produtos as $produto)
                <tbody>
                    <tr>
                        <th scope="row">{{ $produto->id }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>R$ {{ $produto->valor }}</td>
                        <td>{{ $produto->icms }}</td>
                        <td>{{ $produto->ipi }}</td>
                        <td>
                            <a href="{{ route('produtos.show', $produto->id) }}" type="button" class="btn btn-info btn-sm">
                                ver mais
                            </a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>


        {{ $produtos->links() }}
    @endsection
