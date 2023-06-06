@extends('layouts.layout')
@section('content')
    <div class="container mt-4">

        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Contatos</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('contatos.create') }}" class="btn btn-success text-center" title="Adiciona novo contato">
                        <i class="fas fa-plus-circle"></i> Novo contato
                    </a>
                    <div class="table-responsive">
                        @if (count($contatos) > 0)
                            @if (session('message'))
                                <div class="alert alert-success p-3 mt-3">{{ session('message') }}</div>
                            @endif
                            @if (session('deleted'))
                                <div class="alert alert-danger p-3 mt-3">{{ session('deleted') }}</div>
                            @endif
                            @if (session('updated'))
                                <div class="alert alert-success p-3 mt-3">{{ session('updated') }}</div>
                            @endif
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Contato</th>
                                       
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contatos as $contato)
                                        <tr>
                                            <td>{{ $contato->id }}</td>
                                            <td>{{ $contato->nome }}</td>
                                            <td>{{ $contato->email }}</td>
                                            <td>{{ $contato->contato }}</td>
                                            <td style="width:250px;">
                                                <a href="{{ route('contatos.edit', $contato->id) }}"
                                                    title="Edit Student"><button style="height:50px;width:60px;"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>
                                                        <br>Edit</button></a>
                                                <form method="POST" action="{{ route('contatos.delete', $contato->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button style="height:50px;width:60px;" type="submit"
                                                        class="btn btn-danger btn-sm" title="Delete "
                                                        onclick="return confirm(&quot;Confirma delete?&quot;)"><i
                                                            class="fa fa-pen-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning mt-3">
                                <strong> Nenhum contato encontrado!</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection