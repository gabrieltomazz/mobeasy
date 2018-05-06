@extends('layouts.logged')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-primary" >

                <div class="panel-body" >
                    <div class="form-horizontal" >
                        
                        <div class="form-group">
                            <label for="objetivo_pesquisa" class="col-md-4 control-label">Origem:</label>

                            <div class="col-md-6">
                                <input id="objetivo_pesquisa" type="text" class="form-control" name="objetivo_pesquisa" ng-model="instance.objetivo_pesquisa" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Destino: </label>

                            <div class="col-md-6">
                                <input id="objeto_pesquisa" type="text" class="form-control" name="objeto_pesquisa" ng-model="instance.objeto_pesquisa" change-on-blur="setDesempenho(instance.objeto_pesquisa)" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label"><h4 style="color:blue"> Eu prefiro: </h4></label>
                        </div>
                        <div class=" container form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Bike
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Metro
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Uber
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Cabify
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label"><h4 style="color:blue"> Outros Filtros: </h4></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Melhor tempo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                            <label class="form-check-label" for="defaultCheck2">
                                Menor Tempo
                            </label>
                        </div>

                    </div>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="form-group">
                <div class = "col-md-2" >
                    <button style="float: right;" type="submit" class="btn btn-default btn-circle" >
                        Pesquisar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
