@extends('layouts.logged')
    <head>
        {!! $map['js'] !!}
    </head>
@section('content')
    
    {!! $map['html'] !!}

    <div class="container" ng-controller="DashboardController">
        <h3 style="color: #3097b2">Acompanhamento</h3>
        <hr> 

        <div class="panel panel-primary" >
            <div class="panel-body" >
                <div class="container">
                    <h5> <b> 16:10</b> - Caminhe até Estação BikeSharing 406 Norte Tempo aproximado: 5 min</h5>
                    <hr>
                    <h5 ng-show="part1 == true"> <b> 16:15</b> - Bike 05 disponível inicie seu trajeto até a Rodoviária Tempo estimado: 15 min</h5>
                    <hr ng-show="part1 == true">
                    <h5 ng-show="part2 == true"> <b> 16:32</b> - Próximo trem sentido Águas Claras chegará em 2 min</h5>
                    <hr ng-show="part2 == true">
                    <h5 ng-show="part3 == true"> <b> 16:35</b> - Tempo de viagem até Estação Concessionárias igual a 50 min.</h5>
                    <hr ng-show="part3 == true">
                    <h5 ng-show="part4 == true"> <b> 17:15</b> - Você está a 5 minutos da Estação Arniqueiras, prepare-se para o desembarque. Carsharing solicitado.</h5>
                    <hr ng-show="part4 == true">
                    <h5 ng-show="part5 == true"> <b> 17:23</b> - Dirija-se para a saída sentido Av. Castanheiras, o motorista Joao Fernandez  aguarda no veículo <b> C3 prata de placa JLX5030.</b> Tempo estimado de viagem: 10 min</h5>
                    <hr ng-show="part5 == true">
                    <h5 ng-show="part6 == true"> <b> 17:35</b> Você chegou ao seu destino! </h5>
                    <hr ng-show="part6 == true">
                    <h5 ng-show="part6 == true"> Avalie essa experiência </h5>
                    <hr ng-show="part6 == true">
                </div> 

            </div>
        </div>

        <h3 style="color: #3097b2">Avalie</h3>
        <hr>

        <div class="panel panel-primary"  ng-show="rating == true" >
            <div class="panel-body" >
                <div class="container" >
                    <div class="star-rating" style="width:100px; margin:0 auto;">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                    </div>
                </div> 

            </div>
        </div>
        <div ng-show="part6 == true" >
            <a type="button"  class="btn btn-primary"  href = "/home"  >Obrigado !</a>
        </div>

    </div>


@endsection