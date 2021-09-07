@extends('adminlte::page')

@section('title', ' - Ponto Eletrônico')

@section('content_header')

<div class="container-fluid">
    <h1>Gestão de Usuários no Sistema</h1>
    <small>Último login
        em {{Carbon\Carbon::parse(Auth::user()->last_login)->format('d/m/Y H:i:s')}}</small>
</div>
<div class="row">
    <div class="col-md-2">

        <p class="botao-cad">CADASTRAR</p>

    </div>
</div>

@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="panel-body">
                <table id="historico" class="table table-striped table-bordered" cellspacing="0"
                       width="100%">
                    <thead>
                        <tr>
                            <th>Ações</th>
                            <th>Nome</th>
                            <th>Nível</th>
                            <th>E-Mail</th>
                            <th>Cadastrado Desde</th>
                            <th>Último Acesso em</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@stop