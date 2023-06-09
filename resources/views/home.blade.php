@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3 class="mb-3">Gerencia de Contatos</h3>
                @guest
                     <br>
                    <strong>A aplicação contem todos os contatos do sistema.</strong>
                    <p></p>
                    <strong>Efetue o login para fazer alterações no sistema.</strong>
                    <p></p>
                    
                 @else
                 <br>
                    <strong>Seja bem vindo ao nosso painel de gerencia de contatos.</strong>
                    <p></p>
                    <strong>Através dele voce pode gerenciar todos os seus contatos.</strong>
                    <p></p>
                   
                
                @endguest
                <a href="{{ route('contatos') }}"><button class="btn btn-success">Iniciar</button></a>
            </div>
            
        </div>
    </div>
@endsection
