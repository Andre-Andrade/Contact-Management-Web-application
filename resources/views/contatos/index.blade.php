@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3 class="mb-3">Contact Book</h3>
                <p> <strong>CRUD Contato.</strong>
                    <br>
                    A aplicação contem todos os contatos do sistema</strong>
                    <strong>Para ver detalhes do contato, é necesario efeturar o cadastro.</strong>
                </p>
                <a href="{{ route('contatos') }}"><button class="btn btn-success">Iniciar</button></a>
            </div>
            <div class="col-md-6">
                <img src="{{ url('img/photohome.png') }}" class="rounded float-end img-fluid" alt="Foto Home - Ilustração UI">
            </div>
        </div>
    </div>
@endsection