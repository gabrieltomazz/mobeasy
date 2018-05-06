@extends('layouts.logged')

@section('content')
<div class="container" ng-controller="DashboardController" >
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-primary" >

                <div class="panel-body" >
                    <div class="form-horizontal" >
                        
                        <div class="form-group">
                            <label for="origem" class="col-md-4 control-label">Origem:</label>

                            <div class="col-md-6">
                                <input id="myPlaceTextBox" type="text" class="form-control" name="origem"
                                uib-typeahead="city for city in cities | filter:$viewValue | limitTo:8" class="form-control" ng-model="instance.origem">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label">Destino: </label>

                            <div class="col-md-6">
                                <input id="objeto_pesquisa" type="text" class="form-control" name="destino" ng-model="instance.destino"
                                 uib-typeahead="city for city in cities | filter:$viewValue | limitTo:8 " class="form-control" ng-model="instance.destino">
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
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Ônibus
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label"><h4 style="color:blue"> Outros Filtros: </h4></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="melhor_tempo">
                            <label class="form-check-label" for="defaultCheck1">
                                Melhor Preço
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
                   <!--  <button style="float: right;" type="submit" class="btn btn-primary" href="/choose">
                        Vamos
                    </button> -->
                    <a type="button" style="float: right;" class="btn btn-primary"  href = "/choose"> Vamos</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
