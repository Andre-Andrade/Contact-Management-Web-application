@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="container-form">
                <div class="form">
                    <div class="card-header">
                        <div class="titulo">
                            <h3 class="fw-bold text-center">Edita Contato</h3>
                        </div>
                    </div>
                    <div id="fade" class="d-none d-flex justify-content-center">
                        <div id="loader" class="spinner-border text-info d-none" role="status">
                            <span class="visually-hidden">Loading</span>
                        </div>
                        <div id="message" class="d-none">
                            <div class="alert alert-light" role="alert">
                                <strong>
                                    <h4 class="text-center">Erro:</h4>
                                </strong>
                                <strong>
                                    <p class="text-danger"></p>
                                </strong>
                                <div class="d-flex justify-content-center">
                                    <button id="close-message" type="button" class="btn btn-secondary">
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="createcontato" class="row g-3" action="{{ route('contatos.update', $contatos->id) }}"
                            method="post">
                            @method('PUT')
                            @csrf
                          
                            <div class="col-md-4">
                                <label for="nome" class="form-label">Nome</label>
                                <input name="nome" type="text" value="{{ $contatos->nome }}"
                                    class="form-control @error('nome') is-invalid @enderror" id="nome"
                                    placeholder="Nome...">
                                @error('nome')
                                    <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" value="{{ $contatos->email }}"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email...">
                                @error('email')
                                    <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="contato" class="form-label">Contato</label>
                                <input name="contato" type="tel" value="{{ $contatos->contato }}"
                                    class="form-control @error('contato') is-invalid @enderror" id="contato"
                                    placeholder="(99) 99999-9999">
                                @error('telefone')
                                    <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                                @enderror
                            </div>
                             </form>
                             <p></p>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-warning"><i class="fas fa-wrench"></i>
                                    Edit</button>&nbsp;<form method="POST" action="{{ route('contatos.delete', $contatos->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button style="" type="submit"
                                                        class="btn btn-danger " title="Delete"
                                                        onclick="return confirm(&quot;Confirma delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                            </div>
                            
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection