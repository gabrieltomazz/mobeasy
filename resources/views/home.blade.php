@extends('layouts.logged')


<head>
    <style>
        html, body {
            background-image: url(assets/img/bolinha.png);
            background-repeat: no-repeat;
            background-size: auto;
            
        }
    </style>
</head>    
@section('content')
<div class="container" ng-controller="DashboardController" >
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-primary" style="background: none;" >

                <div class="panel-body" style="background: rgba(122, 130, 136, 0.2)!important;" >
                    <div class="form-horizontal" >
                        
                        <div class="form-group">
                            <label for="origem" class="col-md-4 control-label" style="color: #3097b2">Origem:</label>

                            <div class="col-md-6">
                                <input id="myPlaceTextBox" type="text" class="form-control" name="origem"
                                uib-typeahead="city for city in cities | filter:$viewValue | limitTo:8" class="form-control" ng-model="instance.origem">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label" style="color: #3097b2">Destino: </label>

                            <div class="col-md-6">
                                <input id="objeto_pesquisa" type="text" class="form-control" name="destino" ng-model="instance.destino"
                                 uib-typeahead="city for city in cities | filter:$viewValue | limitTo:8 " class="form-control" ng-model="instance.destino">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label"><h4 style="color: #3097b2"> Eu prefiro: </h4></label>
                        </div>
                        <div class=" container">
                            <div class="form-group">
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
                        </div>

                        <div class="form-group">
                            <label for="destino" class="col-md-4 control-label"><h4 style="color: #3097b2"> Outros Filtros: </h4></label>
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
        <div class="row container">
            <div class="form-group">
                <div class = "col-md-2" >
                   <!--  <button style="float: right;" type="submit" class="btn btn-primary" href="/choose">
                        Vamos
                    </button> -->
                    <a type="button" style="float: left;" class="btn btn-primary"  href = "/choose"> Vamos</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
